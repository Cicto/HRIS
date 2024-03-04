<?php

namespace App\Controllers;
use Myth\Auth\Entities\User;
use App\Models\MasterModel;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;
use Myth\Auth\Password;
use \Hermawan\DataTables\DataTable;

class Departments extends BaseController
{
    


    public function index()
    {   
        $this->viewData['departments'] = $this->masterModel->get('departments', 'dept_id');
        return view('departments/manageDepartments', $this->viewData);
        
    }
    public function deptEmployees($deptID)
    {   
        $this->viewData['departments'] = $this->masterModel->get('departments', 'dept_id');
        $this->viewData['employees'] = $this->masterModel->get('employees', 'dept_id, firstname, lastname, middlename', ['dept_id'=> $deptID]);
        $this->viewData['employeesCards'] =  $this->viewData['employees'] = $this->masterModel->get('employees', 'dept_id, firstname, lastname, middlename, employment_status', ['dept_id ='=> $deptID]);
        $this->viewData['departmentID'] = $deptID;
        return view('departments/departmentEmployees', $this->viewData);
        
    }
    public function departmentsDataTable()
    {
        $builder = $this->masterModel->getDataTables('departments', 'dept_id, dept_name, dept_alias, deleted_at', ['deleted_at'=> NULL]);
        return DataTable::of($builder)->toJson(true);

        
    }

    public function addDepartment()
    {
        if($this->request->isAJAX()){
            $master_model = new MasterModel();
            $data = [
               'dept_alias' => strtoupper($this->request->getPost('alias')),
               'dept_name' => $this->request->getPost('name')
            ];
            $result = $master_model->insert("departments", $data);
            return $result;
        }
        else
        {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }


    public function getDepartment($dept_id)
    {
        $getter = $this->masterModel->get('departments', 'dept_id, dept_name, dept_alias, deleted_at', ['deleted_at'=> NULL, 'dept_id' => $dept_id]);
        return json_encode($getter);
    }


    public function updateDepartment($id)
    {
        if($this->request->isAJAX()){
            $department_data = [
                'dept_name' => trim($this->request->getPost('name_new')),
                'dept_alias' => strtoupper(trim($this->request->getPost('alias_new'))),
            ];

            $update_dept = $this->masterModel->update('departments', $department_data, ['dept_id' => $this->request->getPost('id_dept')]);
            return $update_dept;
            
        }
    }

    public function archiveDepartment($id){
        if($this->request->isAJAX()){
            $current_date = date('Y-m-d H:i:s');
            $archive_dept = $this->masterModel->update('departments', ['deleted_at'=>$current_date], ['dept_id' => $id]);
            return json_encode($archive_dept);
        }
    }

    public function departmentsDataTableArchive(){
        $builder = $this->masterModel->getDataTables('departments', 'dept_id, dept_name, dept_alias, deleted_at', ['deleted_at !='=> NULL]);
        return DataTable::of($builder)->toJson(true);
    }

    public function unarchiveDepartment($id){
        if($this->request->isAJAX()){
            $archive_dept = $this->masterModel->update('departments', ['deleted_at'=>null], ['dept_id' => $id]);
            return json_encode($archive_dept);
        }
    }
        
    public function employeesDataTable($employeeID)
    {
        $builder = $this->masterModel->getDataTables('employees', 'dept_id, firstname, lastname, middlename, employment_status', ['dept_id'=> $employeeID]);
        return DataTable::of($builder)->toJson(true);

        
    }

    

    
    
    // public function testest($username)
    // {
    //    $users = $this->masterModel->get("users", "email, username", ['username' => $username]);
    //    echo "<pre>";
    //    print_r($users);
    //    echo "</pre>";
    // }
}
