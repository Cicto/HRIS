<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0 "><span class="label text-primary" id ='dept-label'></span>Upload 201 File</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="<?= base_url()?>/departments" class="text-muted text-hover-primary">Departments List</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">
        <a class="btn btn-primary" href="<?= base_url()?>/employees"><i class="bi bi-arrow-left"></i>Employees</a>

        
        </div>
    </div>
</div>

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content_container" class="app-container ">
        <div class="card card-body">
            <label for="file-type" class="fs-5 fw-bold text-gray-900 mb-1 required form-label">File Type</label>
            <select class="form-select" data-control="select2" data-placeholder="Select a File Type" id="file-type">
                <option></option>
                <option value="pds-file">PDS File</option>
                <option value="coe">COE</option>
                <option value="seminars">Seminars</option>
            </select>

            <div class="separator my-5"></div>
            <!-- drop zone js -->
            <div id="dropzone-container" class="position-relative">
                <label class="fs-5 fw-bold text-gray-900 mb-1">Upload File</label>
                <form class="form" action="#" method="post">
                    <!--begin::Input group-->
                    <div class="fv-row">
                        <!--begin::Dropzone-->
                        <div class="dropzone" id="drop-zone-201">
                            <!--begin::Message-->
                            <div class="dz-message needsclick">
                                <i class="ki-duotone ki-file-up fs-3x text-primary"><span class="path1"></span><span class="path2"></span></i>

                                <!--begin::Info-->
                                <div class="ms-4">
                                    <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                    <span class="fs-7 fw-semibold text-gray-500">Upload up to 10 files</span>
                                </div>
                                <!--end::Info-->
                            

                                
                            </div>
                        </div>
                        <!--end::Dropzone-->
                    </div>
                    <!--end::Input group-->
                </form>
                <div class="position-absolute top-0 h-100 w-100" id="dz-overlay"></div>
            </div>
            <!--end::Form-->
            <div class="separator my-10"></div>
            <!-- data table -->
            <label class="fs-5 fw-bold text-gray-900 mb-1">Uploaded Files</label>
            <div class = "table-responsive">
                            <table class = "table table-hover table-rounded border align-middle gs-7 gy-5 my-0" id = "file-table" style = "width: 100%">
                                <thead class = "text-primary fw-bold border-bottom border-gray-200">
                                    <tr>
                                        <th>File Name</th>
                                        <th>File Type</th>
                                        <th class="w-10px">Action</th>
                                    </tr>
                                    <tr>
                                        <th class="filterhead"></th>
                                        <th class="filterhead"></th>
                                        <th class=""></th>
                                    </tr>
                                </thead>
                                <tbody> </tbody>
                            </table>
            </div>
        </div>
    </div>
</div>


<!-- data tabble of uploaded files -->



<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<script>
let file_type;
let myDropzone;
$(document).ready(function () {
    file_table = $('#file-table').DataTable({
            processing: true,
            serverSide: true,
            orderCellsTop: true,
            ajax: '<?= base_url()?>/file201/filesDataTable/<?=$employeeID?>',
            columns: [{
                    data: 'file_name',
                    render: function (data, type, row) {
                        return `<i class="fas fa-file text-primary"></i> ${data}`;
                    }
                },
                {
                    data: 'file_type',
                },
                {
                    data: 'file_id',
                    render: function (data, type, row) {
                        console.log(row);

                        console.log(row['deleted_at']);
                        row['deleted_at'] ? 'Archive' : 'Unarchive';
                        console.log(row['deleted_at'] ? 'Unarchive' : 'Archive');
                        return `<div class="dropdown ms-2">
                                <button class="btn btn-sm btn-icon btn-light-primary btn-active-primary me-2" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="10" y="10" width="4" height="4" rx="2" fill="currentColor"></rect>
                                            <rect x="17" y="10" width="4" height="4" rx="2" fill="currentColor"></rect>
                                            <rect x="3" y="10" width="4" height="4" rx="2" fill="currentColor"></rect>
                                        </svg>
                                    </span>
                                </button>
                                <div class="dropdown-menu menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" aria-labelledby="dropdownMenuButton" style="">
                                    <div class="menu-item px-3">
                                        <a class="menu-link px-3 edit-btn " data-id = "${data}" id ="file-employee"  href="<?= base_url()?>/public/assets/file201/${row.file_name}" target="_blank" ><i class="bi bi-person"></i>View File</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <span class="menu-link px-3 access-btn" data-id = "${data}" id ="file-archive" ><i class="bi bi-archive"></i>${row['deleted_at'] ? 'Unarchive' : 'Archive'}</span>
                                    </div>
                                </div>
                            </div>`;
                    }
                }
                

            ],
            initComplete: function (settings, json) {
                var indexColumn = 0;

                this.api().columns().every(function () {
                    var column = this;
                    var input = document.createElement("input");

                    $(input).attr('placeholder', 'Search')
                        .addClass('form-control form-control-sm')
                        .appendTo($('.filterhead:eq(' + indexColumn + ')').empty())
                        .on('keyup', function () {
                            column.search($(this).val(), false, false, true).draw();
                        });

                    indexColumn++;


                });

                _dataTablesObj = json.data;
            }


        }).on('xhr.dt', function (e, settings, json, xhr) {
            console.log(json.data);
            file_data = json.data;
            
        })
        //dropzone js
        myDropzone = new Dropzone("#drop-zone-201", {
            url: `<?= base_url()?>/File201/upload201file/<?=$employeeID?>/` + file_type, // Set the url for your upload script location
            paramName: "file", // The name that will be used to transfer the file
            maxFiles: 10,
            maxFilesize: 10, // MB
            addRemoveLinks: true,
            accept: function(file, done) {
                
                if (file.name == "wow.ppg") {
                    done("Naha, you don't.");
                } else {
                    done();
                }
            }
        });
        myDropzone.on("success", file => {
            reloadDataTable(file_table);
            myDropzone.files = [];
            console.log(myDropzone);
        });
        //for archiving
        $(document).on('click', '#file-archive', function () {
            let file_id = this.dataset.id;
            console.log(file_id);
            confirm('Archive', 
            'Are you sure you want to move this file to archive?', 
            'question',
            '<?=base_url()?>/file201/archiveFile/' + file_id, 
            'POST',
            null,
                function () {
                    reloadDataTable(file_table);
                });
        });
    
        $("#dz-overlay").click(function (e) { 
            errorAlert('Error',
            'Select a file type first before uploading',
            'warning'

            )
            e.preventDefault();
            
        });
        $('#file-type').change(function (e) { 
            file_type = this.value;
            myDropzone.options.url = `<?= base_url()?>/File201/upload201file/<?=$employeeID?>/` + file_type;
            if(this.value !== ""){
                $("#dz-overlay").hide();
                console.log(file_type);
            }     
            else{
                $("#dz-overlay").show();
            }     
        });

});
</script>
<?= $this->endSection(); ?>