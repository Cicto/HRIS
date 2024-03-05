<?= $this->extend('layouts/main'); ?>

<?= $this->section('css'); ?>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Manage Employees</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="<?=base_url()?>" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item text-muted">
                    <i class="bi bi-dash"></i>
                </li>
                <li class="breadcrumb-item text-muted">
                    <span class="text-muted">Manage Employees</span>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <a href="<?=base_url()?>/employees/add_employee" class="btn btn-primary d-flex align-items-center">
                <span class="svg-icon svg-icon-muted svg-icon-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor"/>
                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor"/>
                    </svg>
                </span>
                Add Employees
            </a>
            <input type="checkbox" class="btn-check" id="archive-toggle" autocomplete="off">

            <label for="archive-toggle" class="btn btn-danger d-flex align-items-center">
                <span class="svg-icon svg-icon-muted svg-icon-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"/>
                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"/>
                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"/>
                    </svg>
                </span>
                <span id="archive-text">
                    View Archived
                </span>
            </label>
        </div>
    </div>
</div>

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="card card-body">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-rounded border align-middle gs-7 gy-5 my-0 w-100" id="employees-table">
                            <thead class="text-primary fw-bold border-bottom border-gray-200">
                                <tr>
                                    <th class="text-nowrap w-10px">Employee ID</th>
                                    <th class="text-nowrap">First Name</th>
                                    <th class="text-nowrap">Middle Name</th>
                                    <th class="text-nowrap">Last Name</th>
                                    <th class="text-nowrap">Employment Status</th>
                                    <th class="text-nowrap">Department Name</th>
                                    <th class="text-nowrap">Position</th>
                                    <th class="text-nowrap">Actions</th>
                                </tr>
                                <tr>
                                    <th class="filterhead"></th>
                                    <th class="filterhead"></th>
                                    <th class="filterhead"></th>
                                    <th class="filterhead"></th>
                                    <th class="filterhead"></th>
                                    <th class="filterhead"></th>
                                    <th class="filterhead"></th>
                                    <th class=""></th>
                                </tr>
                            </thead>
    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<script>
    let employees_table, employees_table_data;
    $(function () {
        employees_table = $("#employees-table").DataTable({
            processing: true,
            serverSide: true,
            orderCellsTop: true,
            ajax: '<?=base_url()?>/employees/getEmployees',
            responsive: true,
            columns: [
                {
                    data: 'employee_id',
                    
                },
                {
                    data: 'firstname',
                    className: "text-nowrap",
                    render: function(data, display, row){
                        return `
                        <div class="symbol symbol-50px me-2ddd">
                            <img src="<?=base_url()?>/public/assets/media/employee-profile/${row.photo ? row.photo : "default-avatar.png"}" class="ms-5 me-8">
                        </div>
                        <span>${data}</span>
                        `;
                    }
                },
                {
                    data: 'middlename',
                },
                {
                    data: 'lastname'
                },
                {
                    data: 'employee_id'
                },
                {
                    data: 'employee_id',
                },
                {
                    data: 'employee_id',
                },
                {
                    data: 'employee_id',
                    orderable: false,
                    render: function(data, display, row){
                        return `
                        <div class="dropdown ms-2">
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
                                    <a class="menu-link px-3 text-nowrap edit-employee" href="<?=base_url()?>/employees/edit_employee/${data}">Edit Employee</a>
                                </div>
                                <div class="menu-item px-3">
                                    <span class="menu-link px-3 text-nowrap access-employee" data-id="${data}">Employment Data</span>
                                </div>
                                ${row.deleted_at ? 
                                `<div class="menu-item px-3">
                                    <span class="menu-link px-3 text-success unarchive-employee" data-id="${data}">Unarchive</span>
                                </div>`: 
                                `<div class="menu-item px-3">
                                    <span class="menu-link px-3 text-danger archive-employee" data-id="${data}">Archive</span>
                                </div>`
                                }
                            </div>
                        </div>
                        `
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
        });

        $("#employees-table").on("click", ".archive-employee", function(){
            const employee_id = this.dataset.id;
            const loading_timeout = setTimeout(() => {
                pageLoader(true, 'Loading...');
            }, 500);

            fetch(`<?=base_url()?>/employees/archiveEmployee/${employee_id}`)
            .then(data => data.json())
            .then(response => {
                clearTimeout(loading_timeout)
                pageLoader(false, 'Loading...');
                reloadDataTable(employees_table);
            })
        })
        
        $("#employees-table").on("click", ".unarchive-employee", function(){
            const employee_id = this.dataset.id;
            const loading_timeout = setTimeout(() => {
                pageLoader(true, 'Loading...');
            }, 500);

            fetch(`<?=base_url()?>/employees/unarchiveEmployee/${employee_id}`)
            .then(data => data.json())
            .then(response => {
                clearTimeout(loading_timeout)
                pageLoader(false, 'Loading...');
                reloadDataTable(employees_table);
            })
        })

        $("#archive-toggle").change(function(){
            const button = $(this).next("label");
            button.toggleClass("btn-danger btn-success")
            if(this.checked){
                $("#archive-text").html("Hide Archive");
                reloadDataTable(employees_table, "<?=base_url()?>/employees/getEmployees/1")
            }else{
                $("#archive-text").html("View Archive");
                reloadDataTable(employees_table, "<?=base_url()?>/employees/getEmployees")
            }
        })

    });
</script>
<?= $this->endSection(); ?>
