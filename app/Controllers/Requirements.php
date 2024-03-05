<?php

namespace App\Controllers;
use Myth\Auth\Entities\User;
use App\Models\MasterModel;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;
use Myth\Auth\Password;
use \Hermawan\DataTables\DataTable;

class Requirements extends BaseController
{
    // public function __construct()
    // {
    //     $this->userInformation = TemplateLib::userInformation(user_id());
    // }


    public function index()
    {   
        $this->viewData['departments'] = $this->masterModel->get('departments', 'dept_id');
        $this->viewData['departments'] = $this->getDepartments();
        return view('requirements_list/requirementsListManage', $this->viewData);
        
    }

    public function requirementsListDataTables($is_deleted = 0)
    {
        $where = ['requirements_list.deleted_at'=>NULL];
        if($is_deleted){
            $where = ['requirements_list.deleted_at !='=>NULL];
        }
        $builder = $this->masterModel->getDataTables('requirements_list','id, document_type, employee_type, deleted_at',$where);
        
        return DataTable::of($builder)->toJson(true);
    }

    public function getRequirementsInfo($id)
    {
        $retrieve_data = $this->masterModel->get('requirements_list','id, document_type, employee_type',["id"=>$id]);
        
        return json_encode($retrieve_data);
    }

    public function addRequirements()
    {
        if ($this->request->isAJAX()) {
            
            $data = [
    
               'document_type' => $this->request->getPost('document_type'),
               'employee_type' => $this->request->getPost('employee_type'),
            
            ];

            $id = $this->masterModel->insert('requirements_list', $data);

            return json_encode($id);
            
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function archiveRequirements($id)
    {

        $update_result = $this->masterModel->update('requirements_list',["deleted_at"=>date("Y-m-d H:i:s")],["id"=>$id]);
        
        return json_encode($update_result);
    }
    
    public function updateRequirements($id)
    {
        $data = [
    
            'document_type' => $this->request->getPost('document_type'),
            'employee_type' => $this->request->getPost('employee_type'),
         
         ];

         $update_data = $this->masterModel->update('requirements_list',$data,["id"=>$id]);

         return json_encode($id);
    }

    public function restoreRequirements($id)
    {
        $restore_result = $this->masterModel->update('requirements_list',["deleted_at"=>NULL],["id"=>$id]);
        
        return json_encode($restore_result);
    }


}
