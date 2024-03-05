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

        $this->viewData['employee_id'] = (int)$employee_id;
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

    public function getEmployees($is_deleted = 0){
        $where_conditions = ['employee_info.deleted_at' => NULL];
        if($is_deleted){
            $where_conditions = ['employee_info.deleted_at <>' => NULL];
        }
        return DataTable::of($this->masterModel->getDataTables(
            'employee_info',
            'employee_id, firstname, middlename, lastname, photo, deleted_at', 
            $where_conditions
        ))->toJson(true);
    }

    private function getSpecificEmployee($employee_id = 0){
        if($employee_id){
            $select_employee = $this->masterModel->get("employee_info", "*", ['employee_info.deleted_at' => NULL, "employee_id" => $employee_id]);
            if(!$select_employee["error"]){
                return $select_employee["data"][0];
            }
        }
        return FALSE;
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

    public function createEmployeeInfo(){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();

        if($data["photo"]){
            $util_controller = new UtilController();
            $old_file_name = $data["photo"];
            $new_file_name = str_replace(" ", "", ucwords($data["firstname"]." ".$data["middlename"]." ".$data["lastname"]))."-".$old_file_name;
            $is_moved = $util_controller->moveFileTo("public/assets/media/employee-profile/temp", "public/assets/media/employee-profile", $old_file_name, $new_file_name);
            
            if(!$is_moved){
                return json_encode(['error' => true, 'message' => 'Something went wrong with moving the photo', 'data' => false]);
            }

            $data["photo"] = $new_file_name;
        }

        $insert_employee = $this->masterModel->insert("employee_info", $data);
        return json_encode($insert_employee);
    }

    public function updateEmployeeInfo($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $data["updated_at"] = date("Y-m-d H:i:s");
        $update_employee = $this->masterModel->update("employee_info", $data, ["employee_id" => $employee_id]);
        return json_encode($update_employee);
    }

    public function archiveEmployee($employee_id){
        $this->response->setContentType('application/json');
        $delete_employee = $this->masterModel->update("employee_info", ["deleted_at" => date("Y-m-d H:i:s")], ["employee_id" => $employee_id]);
        return json_encode($delete_employee);
    }

    public function unarchiveEmployee($employee_id){
        $this->response->setContentType('application/json');
        $delete_employee = $this->masterModel->update("employee_info", ["deleted_at" => NULL], ["employee_id" => $employee_id]);
        return json_encode($delete_employee);
    }

    public function createEmployeeFamilyBackground($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $data["employee_id"] = $employee_id;
        $insert_employee = $this->masterModel->insert("employee_family_backgrounds", $data);
        return json_encode($insert_employee);
    }

    public function updateEmployeeFamilyBackground($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $update_employee = $this->masterModel->update("employee_family_backgrounds", $data, ["employee_id" => $employee_id]);
        return json_encode($update_employee);
    }

    public function createEmployeeEducationalBackground($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $data["employee_id"] = $employee_id;
        $insert_employee = $this->masterModel->insert("employee_educational_backgrounds", $data);
        return json_encode($insert_employee);
    }

    public function updateEmployeeEducationalBackground($employee_id, $educational_level){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $update_employee = $this->masterModel->update("employee_educational_backgrounds", $data, ["employee_id" => $employee_id, "educational_level" => $educational_level]);
        return json_encode($data);
    }

    public function createEmployeeEligibility($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $data["employee_id"] = $employee_id;
        $insert_employee = $this->masterModel->insert("employee_eligibilities", $data);
        return json_encode($insert_employee);
    }

    public function resetEmployeeEligibilities($employee_id){
        $this->response->setContentType('application/json');
        $delete_eligibilities = $this->masterModel->delete("employee_eligibilities", ["employee_id" => $employee_id]);
        return json_encode($delete_eligibilities);
    }

    public function createEmployeeWorkExperience($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $data["employee_id"] = $employee_id;
        $insert_employee = $this->masterModel->insert("employee_work_experiences", $data);
        return json_encode($insert_employee);
    }

    public function resetEmployeeWorkExperiences($employee_id){
        $this->response->setContentType('application/json');
        $delete_work_experiences = $this->masterModel->delete("employee_work_experiences", ["employee_id" => $employee_id]);
        return json_encode($delete_work_experiences);
    }

    public function createEmployeeVoluntaryWork($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $data["employee_id"] = $employee_id;
        $insert_employee = $this->masterModel->insert("employee_voluntary_works", $data);
        return json_encode($insert_employee);
    }

    public function resetEmployeeVoluntaryWorks($employee_id){
        $this->response->setContentType('application/json');
        $delete_voluntary_works = $this->masterModel->delete("employee_voluntary_works", ["employee_id" => $employee_id]);
        return json_encode($delete_voluntary_works);
    }

    public function createEmployeeTrainingPrograms($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $data["employee_id"] = $employee_id;
        $insert_employee = $this->masterModel->insert("employee_attended_trainings", $data);
        return json_encode($insert_employee);
    }

    public function resetEmployeeTrainingPrograms($employee_id){
        $this->response->setContentType('application/json');
        $delete_voluntary_works = $this->masterModel->delete("employee_attended_trainings", ["employee_id" => $employee_id]);
        return json_encode($delete_voluntary_works);
    }
    
    public function createEmployeeOtherInfo($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $data["employee_id"] = $employee_id;
        $insert_employee = $this->masterModel->insert("employee_other_info", $data);
        return json_encode($insert_employee);
    }

    public function updateEmployeeOtherInfo($employee_id){
        $this->response->setContentType('application/json');
        $data = $this->request->getPost();
        $update_employee = $this->masterModel->update("employee_other_info", $data, ["employee_id" => $employee_id]);
        return json_encode($update_employee);
    }

    public function uploadTempEmployeePhoto(){
        $util_controller = new UtilController();

        $this->response->setContentType('application/json');
        $data_url = $this->request->getPost("photo");

        $directory = "public/assets/media/employee-profile/temp";
        $file_name = date("YmdHis");
        $file_extension = "png";

        $is_uploaded = $util_controller->uploadImageTo($data_url, $directory, $file_name, $file_extension);

        if($is_uploaded){
            return json_encode([
                "error" => false,
                "message" => "Employee photo successfully uploaded",
                "data" => [
                    "file_name" => $file_name.".".$file_extension
                ]
            ]);
        }
        return json_encode([
            "error" => true,
            "message" => "Employee photo not uploaded",
            "data" => [
                "file_name" => $file_name.".".$file_extension
            ]
        ]);
    }

    public function updateEmployeePhoto($employee_id){
        $util_controller = new UtilController();
        $employee = $this->getSpecificEmployee($employee_id);
        $current_employee_photo = str_replace(" ", "", ucwords($employee->firstname." ".$employee->middlename." ".$employee->lastname));
        
        $this->response->setContentType('application/json');
        $data_url = $this->request->getPost("photo");

        $directory = "public/assets/media/employee-profile";
        
        $new_employee_photo = $current_employee_photo."-".date("YmdHis");
        $file_extension = "png";

        $is_uploaded = $util_controller->uploadImageTo($data_url, $directory, $new_employee_photo, $file_extension);

        if($is_uploaded){
            $update_employee_photo = $this->masterModel->update("employee_info", ["photo" => $new_employee_photo.".".$file_extension], ["employee_id" => $employee_id]);
            if(!$update_employee_photo["error"]){
                return json_encode([
                    "error" => false,
                    "message" => "Employee photo successfully uploaded",
                    "data" => [
                        "file_name" => $new_employee_photo.".".$file_extension
                    ]
                ]);
            }
        }

        return json_encode([
            "error" => true,
            "message" => "Employee photo not uploaded",
            "data" => [
                "file_name" => $file_name.".".$file_extension
            ]
        ]);
    }

    public function test(){
        throw new \CodeIgniter\Database\Exceptions\DatabaseException("Employee not found in table 'employee_family_backgrounds'");
    }
}
