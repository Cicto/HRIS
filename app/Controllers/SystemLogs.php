<?php

namespace App\Controllers;
use App\Models\UsersModel;
use App\Models\MasterModel;
use Hermawan\DataTables\DataTable;

class SystemLogs extends BaseController
{

    public function index()
    {   
        // $this->viewData['departments'] = $this->masterModel->get('departments', 'dept_id');
        $this->viewData['title'] = 'System Logs';
        $this->viewData['departments'] = $this->getDepartments();

        return view('systemLogs/systemLogs', $this->viewData);
    }

    public function getSystemLogs(){

        return DataTable::of(
            $this->masterModel->getDataTables(
                'system_logs',
                'log_id, log_action, log_details, log_data, actor, created_at',
            )
        )->toJson(true);

    }

}