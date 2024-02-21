<?php

namespace App\Controllers;
use App\Controllers\UtilController;
use App\Models\UsersModel;
use App\Models\MasterModel;
use Myth\Auth\Entities\User;
use Myth\Auth\Password;
use Hermawan\DataTables\DataTable;
use App\Libraries\TemplateLib;

class Users extends BaseController
{

    public function index()
    {   
        // $this->viewData['departments'] = $this->masterModel->get('departments', 'dept_id');
        $this->viewData['title'] = 'System Users';
        $this->viewData['roles'] = $this->getSystemRoles();
        $this->viewData['departments'] = $this->getDepartments();

        return view('users/users', $this->viewData);
    }

    public function getUsers(){
        return DataTable::of(
            $this->masterModel->getDataTables(
                'user_info',
                'user_id, username, user_qrcode, firstname, middlename, lastname, birthdate, role, user_photo, email, status, active, dept_name, dept_alias, user_info.dept_id, birthdate', 
                [], 
                [
                    ['users', 'users.id = user_info.user_id', 'left'],
                    ['departments', 'departments.dept_id = user_info.dept_id', 'left']
                ]
            )
        )->add('actions', function($row){
            return '
                <div class="dropdown ms-2">
                    <button class="btn btn-sm btn-icon btn-light-primary btn-active-primary me-2" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="svg-icon svg-icon-5 m-0">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="10" y="10" width="4" height="4" rx="2" fill="currentColor"></rect>
                                <rect x="17" y="10" width="4" height="4" rx="2" fill="currentColor"></rect>
                                <rect x="3" y="10" width="4" height="4" rx="2" fill="currentColor"></rect>
                            </svg>
                        </span>
                    </button>
                    <div class="dropdown-menu menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" aria-labelledby="dropdownMenuButton" style="">
                        <div class="menu-item px-3">
                            <span class="menu-link px-3 edit-btn" data-id = "'.$row->user_id.'" >Edit</span>
                        </div>
                        <div class="menu-item px-3">
                            <span class="menu-link px-3 access-btn" data-id = "'.$row->user_id.'" >Profile</span>
                        </div>
                    </div>
                </div>';
        })->toJson(true);
    }

    public function getUser($userId){
        $userInfo = $this->userInformation($userId);
    }
    
    public function addUser()
    {
        if($this->request->isAJAX()){
            $users = [
                'email' => trim($this->request->getPost('email')),
                'username' => trim($this->request->getPost('username')),
                'password_hash' => Password::hash(TemplateLib::defaultPassword()),
                'active' => 1
            ];

            $insertUser = $this->masterModel->insert('users', $users);
            
            if(!$insertUser['error']){

                $userInfo = [
                    'user_id' => $insertUser['data'],
                    'user_qrcode' => 'BALIWAG-EMP-'.$this->request->getPost('dept_id').'-'.str_pad($insertUser['data'], 7, 0, STR_PAD_LEFT),
                    'firstname' => trim($this->request->getPost('firstname')),
                    'middlename' => trim($this->request->getPost('middlename')),
                    'lastname' => trim($this->request->getPost('lastname')),
                    'birthdate' => $this->request->getPost('birthdate'),
                    'dept_id' => $this->request->getPost('dept_id'),
                    'role' => $this->request->getPost('role'),
                ];

                $insertUserInfo = $this->masterModel->insert('user_info', $userInfo);
                
                if(!$insertUserInfo['error']){
                    return json_encode([
                        'error' => false,
                        'message' => $insertUserInfo['message'],
                        'data' => $insertUserInfo['data']
                    ]);
                }
                else{
                    return json_encode([
                        'error' => true,
                        'message' => $insertUserInfo['message'],
                        'data' => false
                    ]);
                }
            }
        }
        else{
            return json_encode([
                'error' => true,
                'message' => $insertUser['message'],
                'data' => false
            ]);
        }
    }

    public function updateUser()
    {
        if($this->request->isAJAX()){
            $message = '';
            $users = [
                'email' => trim($this->request->getPost('email')),
                'username' => trim($this->request->getPost('username')),
            ];

            $updateUser = $this->masterModel->update('users', $users, ['id' => $this->request->getPost('user_id')]);

            if(!$updateUser['error']){
                $userInfo = [
                    'firstname' => trim($this->request->getPost('firstname')),
                    'middlename' => trim($this->request->getPost('middlename')),
                    'lastname' => trim($this->request->getPost('lastname')),
                    'birthdate' => $this->request->getPost('birthdate'),
                    'dept_id' => $this->request->getPost('dept_id'),
                    'role' => $this->request->getPost('role'),
                ];

                $updateUserInfo = $this->masterModel->update('user_info', $userInfo, ['user_id' => $this->request->getPost('user_id')]);

                if(!$updateUserInfo['error']){
                    return json_encode([
                        'error' => false,
                        'message' => ($updateUser['data'] != false) ? $updateUser['message'] : $updateUserInfo['message'],
                        'data' => $updateUserInfo['data']
                    ]);
                }
                else{
                    return json_encode([
                        'error' => true,
                        'message' => $updateUserInfo['message'],
                        'data' => $updateUserInfo['data']
                    ]);
                }
            }
        }
    }

    public function resetUserPassword($id)
    {
        if ($this->request->isAJAX())
        {
            $data = [
                'password_hash' => Password::hash(TemplateLib::defaultPassword()),
            ];

            $updatePassword = $this->masterModel->update('users', $data, ['id' => $id]);

            if(!$updatePassword['error']){
                return json_encode([
                    'error' => false,
                    'message' => 'Password Successfully Updated.',
                    'data' => $updatePassword['data']
                ]);
            }
            else{
                return json_encode([
                    'error' => false,
                    'message' => $updatePassword['message'],
                    'data' => $updatePassword['data']
                ]);
            }
        }
    }
}
