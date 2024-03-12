<?php

namespace App\Controllers;
use Myth\Auth\Entities\User;
use App\Models\MasterModel;
use App\Controllers\UtilController;
use App\Libraries\TemplateLib;
use Myth\Auth\Password;
use \Hermawan\DataTables\DataTable;

class File201 extends BaseController
{
    


    public function index($employeeID)
    {   
        $this->viewData['employeeID'] = $employeeID;
        $this->viewData['employeeFiles'] = $this->masterModel->get('file_201', 'employee_id, file_name, file_id', ['employee_id'=> $employeeID]);
        $this->viewData['fileID'] = $this->masterModel->get('file_201', 'file_id', ['employee_id'=> $employeeID]);
        return view('files201/upload201Files', $this->viewData);  
    }

    public function upload201File($employeeId, $fileType)
    {
        $masterModel = New MasterModel();
		
        // Get file from ajax request
        $file = $this->request->getFile('file');
        // Folder to upload
        $filepath = './public/assets/file201';
        // Gets filename
        $fileName = $file->getName();
        
        $separator = explode('.', $fileName);
        $fileExtension = $separator[1];
		
        // Validation rules
        $validationRule = [
            'file' => [
                'label' => 'File',
                'rules' => [
                    'uploaded[file]',
                    'max_size[file,50000]',
                ],
            ],
        ];

        if(!$this->validate($validationRule)){
            echo json_encode([
                'error' => true,
                'message' => $this->validator->getErrors()
            ]);
        }
        else{
            if (!$file->hasMoved()) {
                // Uploads file to specified folder location
                if($file->move($filepath, $fileName)){

                    $insert = $this->masterModel->insert('file_201', [
                        'file_name'   => $fileName,
                        'created_at'    => date('Y-m-d H:i:s'),
                        'employee_id'   => $employeeId,
                        'file_extension' => $fileExtension,
                        'file_type' => $fileType
                    ]);
                    
                    if($insert > 0){
                        echo json_encode([
                            'error' => false,
                            'message' => 'File Uploaded!',
                            'file_name'  => $fileName,
                            'file_size'  => $file->getSize(),
                            'created_at'   => date('Y-m-d H:i:s'),
                            'file_extension' => $fileExtension
                        ]);
                    }
                }
                else{
                    echo json_encode([
                        'error' => true,
                        'message' => 'Something went wrong'
                    ]);
                }
            }
            else{
                echo json_encode([
                    'error' => true,
                    'message' => 'File was already moved!'
                ]);
            }
        }
    }

    public function displayImage($employeeID){
        $this->viewData['employeeID'] = $employeeID;
        $this->viewData['employeefile'] = $this->masterModel->get('file_201', 'employee_id, file_name', ['employee_id'=> $employeeID]);
        return view('files201/upload201Files', $this->viewData); 
    }
    //file data table
    public function filesDataTable($employeeID)
    {
        $builder = $this->masterModel->getDataTables('file_201', 'employee_id, file_name, deleted_at, file_id, file_extension, file_type', ['deleted_at'=> NULL, 'employee_id'=> $employeeID]);
        return DataTable::of($builder)->toJson(true);

        
    }
    
    //file archive
    public function archiveFile($fileID){
        if($this->request->isAJAX()){
            $current_date = date('Y-m-d H:i:s');
            $archive_file = $this->masterModel->update('file_201', ['deleted_at'=>$current_date], ['file_id' => $fileID]);
            return json_encode($archive_file);
        }
    }

}