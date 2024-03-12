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
        $this->viewData['departments'] = $this->getDepartments();
        return view('plantilla/plantillaDashboard', $this->viewData);
        
    }

    public function plantillaDataTables($is_deleted = 0)
    {
        $where = ['plantilla.deleted_at'=>NULL];
        if($is_deleted){
            $where = ['plantilla.deleted_at !='=>NULL];
        }
        $join = [
            ['departments','departments.dept_id = plantilla.dept_id', 'left']
        ];
        $builder = $this->masterModel->getDataTables('plantilla',
        'plantilla.plantilla_id, plantilla.position_title, plantilla.salary_grade, plantilla.authorized, plantilla.actual, plantilla.dept_id, plantilla.deleted_at, departments.dept_id, departments.dept_alias',
        $where,
        $join);
        
        return DataTable::of($builder)->toJson(true);
    }

    public function getPlantilla($id)
    {
        $retrieve_data = $this->masterModel->get('plantilla','plantilla_id, position_title, salary_grade, authorized, actual, dept_id',["plantilla_id"=>$id]);
        
        return json_encode($retrieve_data);
    }

    public function addPlantilla()
    {
        if ($this->request->isAJAX()) {
            
            $data = [
    
               'position_title' => $this->request->getPost('position_title'),
               'salary_grade' => $this->request->getPost('salary_grade'),
               'authorized' => str_replace(',', '', $this->request->getPost('authorized')),
               'actual' => str_replace(',', '', $this->request->getPost('actual')),
               'dept_id' => $this->request->getPost('dept_id')
            
            ];

            $id = $this->masterModel->insert('plantilla', $data);

            return json_encode($id);
            
        }else{
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function archivePlantilla($id)
    {

        $update_result = $this->masterModel->update('plantilla',["deleted_at"=>date("Y-m-d H:i:s")],["plantilla_id"=>$id]);
        
        return json_encode($update_result);
    }
    
    public function updatePlantilla($id)
    {
        $data = [
            'plantilla_id' => $this->request->getPost('plantilla_id'),
            'position_title' => $this->request->getPost('position_title'),
            'salary_grade' => $this->request->getPost('salary_grade'),
            'authorized' => str_replace(',', '',$this->request->getPost('authorized')),
            'actual' => str_replace(',', '',$this->request->getPost('actual')),
            'dept_id' => $this->request->getPost('dept_id')
         
         ];

        $update_data = $this->masterModel->update('plantilla',$data,["plantilla_id"=>$id]);
        
        return json_encode($update_data);
    }

    public function restorePlantilla($id)
    {
        $restore_result = $this->masterModel->update('plantilla',["deleted_at"=>NULL],["plantilla_id"=>$id]);
        
        return json_encode($restore_result);
    }


}
