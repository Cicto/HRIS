<?php

namespace App\Controllers;
use Hermawan\DataTables\DataTable;
use App\Controllers\Employees;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;

class Attendances extends BaseController
{

    public function index(){   
        $this->viewData['title'] = 'Attendance';
        $this->viewData['roles'] = $this->getSystemRoles();
        $this->viewData['departments'] = $this->getDepartments();

        return view('attendances/attendanceLogs', $this->viewData);
    }

    public function scan(){   
        $this->viewData['title'] = 'Attendance';
        $this->viewData['roles'] = $this->getSystemRoles();
        $this->viewData['departments'] = $this->getDepartments();

        return view('attendances/attendanceScan', $this->viewData);
    }

    public function attendanceLogsDataTable(){
        $date = $this->request->getPost("date");
        $is_deleted = filter_var($this->request->getPost("is_deleted"), FILTER_VALIDATE_BOOLEAN) ? "IS NOT" : "IS" ;
        return DataTable::of($this->masterModel->getDataTables(
            'employee_info',
            'employee_info.employee_id, qrcode, firstname, middlename, lastname, photo, 
             departments.dept_alias, departments.dept_name, 
             attendance_logs.time_in, attendance_logs.attendance_id, attendance_logs.deleted_at
            ', 
            "DATE(`time_in`) = '$date' AND attendance_logs.deleted_at $is_deleted NULL",
            [
                ["employee_status", "employee_status.employee_id = employee_info.employee_id", "inner"],
                ["departments", "departments.dept_id = employee_status.department_id", "inner"],
                ["attendance_logs", "attendance_logs.employee_id = employee_info.employee_id", "inner"]
            ],
            "attendance_logs.attendance_id DESC"
        ))->toJson(true);
    }

    public function getAttendanceLogs(){
        $this->response->setContentType('application/json');
        $date = $this->request->getGet("date");
        $attendance_logs = $this->masterModel->get(
            'employee_info',
            'employee_info.employee_id, qrcode, firstname, middlename, lastname, photo, 
             departments.dept_alias, departments.dept_name, 
             attendance_logs.time_in, attendance_logs.attendance_id, attendance_logs.deleted_at
            ', 
            ["DATE(time_in)" => $date, "attendance_logs.deleted_at" => NULL],
            [
                ["employee_status", "employee_status.employee_id = employee_info.employee_id", "inner"],
                ["departments", "departments.dept_id = employee_status.department_id", "inner"],
                ["attendance_logs", "attendance_logs.employee_id = employee_info.employee_id", "inner"]
            ],
            "attendance_logs.time_in DESC"
        );
        return json_encode($attendance_logs);
    }

    public function getAttendanceTodayDataTable(){
        return DataTable::of($this->masterModel->getDataTables(
            'employee_info',
            'employee_info.employee_id, qrcode, firstname, middlename, lastname, photo, 
             departments.dept_alias, departments.dept_name, 
             attendance_logs.time_in, attendance_logs.attendance_id
            ', 
            "CURRENT_DATE() = DATE(`time_in`)",
            [
                ["employee_status", "employee_status.employee_id = employee_info.employee_id", "inner"],
                ["departments", "departments.dept_id = employee_status.department_id", "inner"],
                ["attendance_logs", "attendance_logs.employee_id = employee_info.employee_id", "inner"]
            ],
            "attendance_logs.attendance_id DESC"
        ))->toJson(true);
    }

    public function getMonthAttendance($year = 0, $month = 0){
        $this->response->setContentType('application/json');
        $result = $this->masterModel->customQuery("
            SELECT
                COUNT(`attendance_id`) AS total,
                DAY(`time_in`) AS day,
                `time_in`
            FROM
                `attendance_logs`
            WHERE
                YEAR(`time_in`) = $year AND MONTH(`time_in`) = $month
            GROUP BY
                DATE(`time_in`)
        ");

        return json_encode($result);
    }

    public function logEmployeeAttendance($qrcode){
        $this->response->setContentType('application/json');
        $get_employee = $this->masterModel->get("employee_info", 
            "employee_info.*,
             employee_status.employement_status_id, employee_status.department_id, employee_status.position, employee_status.role_id, employee_status.date_hired, 
             employment_status.es_description,
             departments.dept_alias, departments.dept_name", 
            ["employee_info.qrcode" => $qrcode], 
            [
                ["employee_status", "employee_status.employee_id = employee_info.employee_id", "left"],
                ["employment_status", "employment_status.es_id = employee_status.employement_status_id", "left"],
                ["departments", "departments.dept_id = employee_status.department_id", "left"]
            ], 
            FALSE, 
            1
        );

        if(!$get_employee["error"]){
            $employee_data = $get_employee["data"][0];
            $employee_id = $employee_data->employee_id;
            $get_attendace_today = $this->masterModel->get("attendance_logs", "*", "CURRENT_DATE() = DATE(`time_in`) AND employee_id = $employee_id");
            if($get_attendace_today["data"]){
                return json_encode([
                    'error' => true, 'result' => 'Employee already logged today', 'data' => FALSE
                ]);
            }

            

            $date_time = date("Y-m-d H:i:s");
            $insert_attendance = $this->masterModel->insert("attendance_logs", ["employee_id" => $employee_id, "time_in" => $date_time]);
            $employee_data->time_in = $date_time;
            if(!$insert_attendance["error"]){
                $current_month_attendance = $this->masterModel->get("attendance_logs", "*", "MONTH(CURRENT_DATE()) = MONTH(`time_in`) AND employee_id = $employee_id");
                if(!$current_month_attendance["error"]){
                    $employee_data->current_month_attendance = $current_month_attendance["data"];
                }else{
                    $employee_data->current_month_attendance = false;
                }
                return json_encode([
                    'error' => false, 'message' => 'Employee successfully logged', 'data' => $employee_data
                ]);
            }

            return json_encode($insert_attendance);
        }
        return json_encode($get_employee);
    }

    public function archiveAttendanceRecord($attendance_id){
        $update_result = $this->masterModel->update("attendance_logs", ["deleted_at" => date("Y-m-d H:i:s"), "deleted_by" => user_id()], ["attendance_id" => $attendance_id]);
        return json_encode($update_result);
    }

    public function unarchiveAttendanceRecord($attendance_id){
        $update_result = $this->masterModel->update("attendance_logs", ["deleted_at" => NULL ], ["attendance_id" => $attendance_id]);
        return json_encode($update_result);
    }
}

?>