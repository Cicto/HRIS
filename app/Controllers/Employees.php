<?php

namespace App\Controllers;
use Hermawan\DataTables\DataTable;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;

class Employees extends BaseController
{

    public function index(){   
        $this->viewData['title'] = 'System Users';
        $this->viewData['roles'] = $this->getSystemRoles();
        $this->viewData['departments'] = $this->getDepartments();

        return view('employees/employeeManagement', $this->viewData);
    }

    public function add_employee(){   
        $this->viewData['title'] = 'System Users';
        $this->viewData['roles'] = $this->getSystemRoles();
        $this->viewData['departments'] = $this->getDepartments();
        $this->viewData['employment_status'] = $this->masterModel->get("employment_status", "*", ["deleted_at" => NULL])["data"];
        $this->viewData['provinces'] = $this->masterModel->get("refprovince", "*", ["is_deleted" => 0])["data"];
        $this->viewData['is_edit'] = false;

        return view('employees/employeeBuilder', $this->viewData);
    }

    public function edit_employee($employee_id = 0){
        if(!$employee_id){ throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound(); }
        // Check employee in required tables
            $employee_info = $this->masterModel->get("employee_info", "*", ["deleted_at" => NULL, "employee_id" => $employee_id]);
            if($employee_info["error"]){ throw new \CodeIgniter\Database\Exceptions\DatabaseException("Employee[$employee_id] not found in table 'employee_info'"); }
            
            $employee_family_background = $this->masterModel->get("employee_family_backgrounds", "*", ["employee_id" => $employee_id]);
            if($employee_family_background["error"]){ throw new \CodeIgniter\Database\Exceptions\DatabaseException("Employee[$employee_id] not found in table 'employee_family_backgrounds'"); }
            
            $employee_other_info = $this->masterModel->get("employee_other_info", "*", ["employee_id" => $employee_id]);
            if($employee_other_info["error"]){ throw new \CodeIgniter\Database\Exceptions\DatabaseException("Employee[$employee_id] not found in table 'employee_other_info'"); }
        //

        $this->viewData['title'] = 'System Users';
        $this->viewData['roles'] = $this->getSystemRoles();
        $this->viewData['departments'] = $this->getDepartments();
        $this->viewData['employment_status'] = $this->masterModel->get("employment_status", "*", ["deleted_at" => NULL])["data"];

        $this->viewData['employee_info'] = $employee_info['data'][0];
        $this->viewData['employee_family_background'] = $employee_family_background['data'][0];
        $this->viewData['employee_educational_background'] = $this->masterModel->get("employee_educational_backgrounds", "*", ["employee_id" => $employee_id])["data"];
        $this->viewData['employee_eligibilities'] = $this->masterModel->get("employee_eligibilities", "*", ["employee_id" => $employee_id])["data"];
        $this->viewData['employee_work_experiences'] = $this->masterModel->get("employee_work_experiences", "*", ["employee_id" => $employee_id])["data"];
        $this->viewData['employee_voluntary_works'] = $this->masterModel->get("employee_voluntary_works", "*", ["employee_id" => $employee_id])["data"];
        $this->viewData['employee_attended_trainings'] = $this->masterModel->get("employee_attended_trainings", "*", ["employee_id" => $employee_id])["data"];
        $this->viewData['employee_attended_trainings'] = $this->masterModel->get("employee_attended_trainings", "*", ["employee_id" => $employee_id])["data"];
        $this->viewData['employee_other_info'] = $employee_other_info['data'][0];

        $this->viewData['provinces'] = $this->masterModel->get("refprovince", "*", ["is_deleted" => 0])["data"];
        $this->viewData['is_edit'] = true;

        return view('employees/employeeBuilder', $this->viewData);
    }

    public function getEmployees(){
        return DataTable::of($this->masterModel->getDataTables(
            'employee_info',
            'employee_id, firstname, middlename, lastname', 
            ['employee_info.deleted_at' => NULL]
        ))->toJson(true);
    }
    
    public function getCityMun($prov_code){
        $city_mun = $this->masterModel->get("refcitymun", "*", ["provCode" => $prov_code]);
        $this->response->setContentType('application/json');
        return json_encode($city_mun);
    }
    
    public function getBarangay($citymun_code){
        $brgy = $this->masterModel->get("refbrgy", "*", ["citymunCode" => $citymun_code]);
        $this->response->setContentType('application/json');
        return json_encode($brgy);
    }

    public function createEmployeeData(){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $insert_employee = $this->masterModel->insert("employee_info", $data);
        return json_encode($insert_employee);
    }

    public function createEmployeeFamilyBackground($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $data["employee_id"] = $employee_id;
        $insert_employee = $this->masterModel->insert("employee_family_backgrounds", $data);
        return json_encode($insert_employee);
    }

    public function createEmployeeEducationalBackground($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $data["employee_id"] = $employee_id;
        $insert_employee = $this->masterModel->insert("employee_educational_backgrounds", $data);
        return json_encode($insert_employee);
    }

    public function createEmployeeEligibility($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $data["employee_id"] = $employee_id;
        $insert_employee = $this->masterModel->insert("employee_eligibilities", $data);
        return json_encode($insert_employee);
    }

    public function createEmployeeWorkExperience($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $data["employee_id"] = $employee_id;
        $insert_employee = $this->masterModel->insert("employee_work_experiences", $data);
        return json_encode($insert_employee);
    }

    public function createEmployeeVoluntaryWork($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $data["employee_id"] = $employee_id;
        $insert_employee = $this->masterModel->insert("employee_voluntary_works", $data);
        return json_encode($insert_employee);
    }

    public function createEmployeeTrainingPrograms($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $data["employee_id"] = $employee_id;
        $insert_employee = $this->masterModel->insert("employee_attended_trainings", $data);
        return json_encode($insert_employee);
    }

    public function createEmployeeOtherInfo($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $data["employee_id"] = $employee_id;
        $insert_employee = $this->masterModel->insert("employee_other_info", $data);
        return json_encode($insert_employee);
    }

    public function test(){
        throw new \CodeIgniter\Database\Exceptions\DatabaseException("Employee not found in table 'employee_family_backgrounds'");
    }
}
