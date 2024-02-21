<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Manage Departments</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Departments List</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#department-modal" >
        <i class="fas fa-user-plus"></i> Add Department
        </button>
        <input type="checkbox" class="btn-check d-none" id="archive-toggle" autocomplete="off">
        <label class="btn btn-secondary" for="archive-toggle"><i class="fas fa-archive"></i>Archived</label>

        
        </div>
    </div>
</div>
<!-- card-table -->
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content_container" class="app-container ">
    <div class="table-responsive ">

    <div class="card shadow-sm w-250">
    <div class="card-header">
        <h3 class="card-title">Department List</h3>
        <div class="card-toolbar">
            
        </div>
    </div>
    <div class="card-body">
    <table id="dept-table" class="table table-row-bordered gy-5">
		<thead>
			<tr class="fw-semibold fs-6 text-muted">
				<th class="w-80">Department Name</th>
				<th class="w-49">Department Alias</th>
				<th>Actions</th>

			</tr>
		</thead>
		<tbody>
			
		</tbody>
		
	</table>
    </div>
    <div class="card-footer">
        Footer
    </div>
</div>

	
</div>



    <!-- <div class="card" style="width: 18rem;" id="product">
        <img class="card-img-top" src="..." alt="Card image cap" id="prod-img">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
        </div> -->


    </div>
</div>


<!-- Add Department -->
<div class="modal fade" tabindex="-1" id="department-modal">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Department</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
            <section>
                <form class="white" action="" method="POST" id="add-form">
                    <label class="form-label">Department Name: </label> <span id="error-name" class="text-danger"></span>
                    <input type="text" name="department_name" id="department-name" class="form-control mb-3" required>
                    <label class="form-label">Department Alias:</label>
                    <input type="text" name="department_alias" id="department-alias" class="form-control mb-3" style="text-transform:uppercase" required>
                    <input type="submit" id="add-form-submit" class="d-none">
                </form>
            </section>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <label for="add-form-submit" class="btn btn-primary" id="add-dept" >Add</label>
            </div>
        </div>
    </div>
</div>

<!-- Edit Department -->
<div class="modal fade" tabindex="-1" id="edit-modal">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Department</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
            <section>
                <form class="white" id="update-form">
                    <label class="form-label">Department Name:</label>
                    <input type="text" name="department_name" id="dept-name-edit" class="form-control mb-3"  required>
                    <label class="form-label">Department Alias:</label>
                    <input type="text" name="department_alias" id="dept-alias-edit" class="form-control mb-3" style="text-transform:uppercase" required>
                    <input type="text" name="department_alias" id="dept-id-edit" class="d-none"  required>
                    <input type="submit" id="update-form-submit" class="d-none">
                </form>
            </section>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <label for="update-form-submit" class="btn btn-primary" id="dept-update">Update</label>
            </div>
        </div>
    </div>
</div>

<!-- Department Members -->
<div class="modal fade" tabindex="-1" id="employee-modal">
    <div class="modal-dialog modal-dialog-scrollable modal-xl">
    <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="dept-name-emp"> Employees</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
            <section>
                <form class="white" id="update-form">
                    <label class="form-label">Department Head:</label>
                    <input type="text" name="department_head" id="dept-head" class="form-control mb-3"  required>
                    <label class="form-label">Assistant Aid:</label>
                    <input type="text" name="department_alias" id="dept-aid" class="form-control mb-3" style="text-transform:uppercase" required>
                    <table id="employee-table" class="table table-row-bordered gy-5">
                        <thead>
                            <label class="form-label">Department Head:</label>
                            <tr class="fw-semibold fs-6 text-muted">
                                <th class="w-80">First Name</th>
                                <th class="w-49">Last Name</th>
                                <th class="w-49">Position</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                        
                    </table>
                </form>
            </section>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>
<?= $this->section('javascript'); ?>
    <script>
        let dept_data;
        let dept_table;
        $(document).ready(function () {
            //Data Table
            dept_table= $('#dept-table').DataTable({
                processing: true,
                serverSide: true,
                ajax:'<?= base_url()?>/departments/departmentsDataTable',
                columns:
                [
                    {
                        data:'dept_name',
                        render: function(data, type, full) {
                            return data.toLowerCase().split(' ').map(word => {
                                 return word.charAt(0).toUpperCase() + word.slice(1);
                            }).join(' ');
                        }
                    },
                    {
                        data:'dept_alias',
                        
                    },
                    {
                        data:'dept_id',
                        render: function(data, type, row) {
                            console.log(data);
                        
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
                                        <span class="menu-link px-3 edit-btn" data-id = "${data}" id ="dept-employee"  data-bs-toggle="modal" data-bs-target="#employee-modal">Employees</span>
                                    </div>
                                    <div class="menu-item px-3">
                                        <span class="menu-link px-3 access-btn" data-id = "${data}" id ="dept-edit">Edit</span>
                                    </div>
                                    <div class="menu-item px-3">
                                        <span class="menu-link px-3 access-btn" data-id = "${data}" id ="${row['deleted_at'] ? 'dept-unarchive' : 'dept-archive'}" >${row['deleted_at'] ? 'Unarchive' : 'Archive'}</span>
                                    </div>
                                </div>
                            </div>`;
                        }
                    }
                ]

            }).on('xhr.dt', function (e, settings, json, xhr) {
                console.log(json.data);
                dept_data = json.data;
            })
            //add-listener
            $('#add-form').submit(function (e) {
                e.preventDefault();
                 const data = {
                     'name': $('#department-name').val(),
                     'alias': $('#department-alias').val(),
                 };
                 $.ajax({
                    method: "POST",
                    url: "departments/addDepartment",
                    data: data,
                    success: function (response) {
                        reloadDataTable(dept_table);
                        $('#department-modal').modal('hide');
                        $('#department-modal').find('input').val('');
                        successAlert('Success!', 'Department successfully added!', 'success');
                    }
                 });
             });

             //edit-listener
             $(document).on('click', '#dept-edit', function (){
                const info_modal = bootstrap.Modal.getOrCreateInstance('#edit-modal');
                let dept_id = this.dataset.id;
                $.ajax({
                    type: "get",
                    url: "<?= base_url()?>/departments/getDepartment/" + dept_id,
                    dataType: "json",
                    success: function (response) {
                        console.log(response);
                        const dept_info = response.data[0];
                        $('#dept-name-edit').val(dept_info.dept_name);
                        $('#dept-alias-edit').val(dept_info.dept_alias);
                        $('#dept-id-edit').val(dept_info.dept_id);
                    }
                });
                info_modal.show();
            })


            //update department
            $('#update-form').submit(function (e) {
                e.preventDefault();
                let data = {
                    'name_new': $('#dept-name-edit').val(),
                    'alias_new': $('#dept-alias-edit').val(),  
                    'id_dept': $('#dept-id-edit').val(),
                };
                
                $.ajax({
                    method: "POST",
                    url: "<?=base_url()?>/departments/updateDepartment/" + $('#dept-id-edit').val(),
                    data: data,
                    success: function (response) {
                        reloadDataTable(dept_table);
                        $('#edit-modal').modal('hide');
                        successAlert('Success!', 'Department successfully updated!', 'success');
                         
                    }
                 });
            });
            $(document).on('click', '#dept-archive', function () {
                let dept_id = this.dataset.id;
                confirm('Archive','Are you sure you want to move this to archive?', 'question', '<?=base_url()?>/departments/archiveDepartment/' + dept_id, null, function(){
                    reloadDataTable(dept_table);
                });
            });
            $('#archive-toggle').on('click', function () {
                console.log(this.checked);
                let archive_span = $('#dept-archive');
                if(this.checked){//archived
                    reloadDataTable(dept_table, '<?= base_url()?>/departments/departmentsDataTableArchive');
                    
                }
                else{//not archived
                    reloadDataTable(dept_table, '<?= base_url()?>/departments/departmentsDataTable');
                    
                }
            });

            $(document).on('click', '#dept-unarchive', function () {
                let dept_id = this.dataset.id;
                confirm('Remove from Archive','Are you sure you want to remove this from archive?', 'question', '<?=base_url()?>/departments/unarchiveDepartment/' + dept_id, null, function(){
                    reloadDataTable(dept_table);
                });
            });

            $(document).on('click', '#dept-employee', function () {
                let dept_id = this.dataset.id;
                dept_table= $('#employee-table').DataTable({
                processing: true,
                serverSide: true,
                ajax:'<?= base_url()?>/departments/employeesDataTable/' + dept_id,
                columns:
                [
                    {
                        data:'firstname',
                    },
                    
                    {
                        data:'lastname',
                    }
                ]
                }).on('xhr.dt', function (e, settings, json, xhr) {
                console.log(json.data);
                dept_data = json.data;
            })
            });
            


            
        });
        


    </script>
<?= $this->endSection(); ?>




