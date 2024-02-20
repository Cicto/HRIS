<?php

namespace App\Controllers;
use Hermawan\DataTables\DataTable;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;

class Employees extends BaseController
{

    public function index()
    {   
        $this->viewData['title'] = 'System Users';
        $this->viewData['roles'] = $this->getSystemRoles();
        $this->viewData['departments'] = $this->getDepartments();

        return view('employees/employeeManagement', $this->viewData);
    }

    public function add_employee()
    {   
        $this->viewData['title'] = 'System Users';
        $this->viewData['roles'] = $this->getSystemRoles();
        $this->viewData['departments'] = $this->getDepartments();
        $this->viewData['employment_status'] = $this->masterModel->get("employment_status", "*", ["deleted_at" => NULL])["data"];
        $this->viewData['provinces'] = $this->masterModel->get("refprovince", "*", ["is_deleted" => 0])["data"];

        return view('employees/employeeBuilder', $this->viewData);
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
}
