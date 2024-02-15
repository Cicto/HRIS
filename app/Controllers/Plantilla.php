<?php

namespace App\Controllers;
use Myth\Auth\Entities\User;
use App\Models\MasterModel;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;
use Myth\Auth\Password;
use \Hermawan\DataTables\DataTable;

class Plantilla extends BaseController
{
    // public function __construct()
    // {
    //     $this->userInformation = TemplateLib::userInformation(user_id());
    // }


    public function index()
    {   
        $this->viewData['departments'] = $this->masterModel->get('departments', 'dept_id');
        return view('plantilla/dashboard', $this->viewData);
        
    }

    public function plantillaDataTables()
    {

        $join = [
            ['departments','departments.dept_id = plantilla.dept_id', 'left']
        ];
        $builder = $this->masterModel->getDataTables('plantilla','plantilla.plantilla_id, plantilla.position_title, plantilla.salary_grade, plantilla.authorized, plantilla.actual, plantilla.dept_id, departments.dept_id, departments.dept_alias',['plantilla.deleted_at'=>NULL], $join);
        
        return DataTable::of($builder)->toJson(true);
    }

    public function archivePlantilla($id)
    {

        $update_result = $this->masterModel->update('plantilla',["deleted_at"=>date("Y-m-d H:i:s")],["plantilla_id"=>$id]);
        
        return json_encode($update_result);
    }

}
