<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0 id ='dept-name'">Department Employees</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Departments List</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">
        <a class="btn btn-primary" href="<?= base_url()?>/departments"><i class="bi bi-arrow-left"></i>Departments</a>

        
        </div>
    </div>
</div>



<!-- card employees -->
<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content_container" class="app-container ">
        <div class="card card-body">
                <section>
                    <form class="white" id="employee-form">
                        <label class="form-label">Department Head:</label>
                        <input type="text" name="department_head" id="dept-head" class="form-control mb-3" required>
                        <label class="form-label">Assistant Aid:</label>
                        <input type="text" name="department_alias" id="dept-aid" class="form-control mb-3"
                            style="text-transform:uppercase" required>
                        <table id="employee-table" class = "table table-hover table-rounded border align-middle gs-7 gy-5 my-0" style = "width: 100%">
                            <thead class = "text-primary fw-bold border-bottom border-gray-200">
                                <label class="form-label">Department Employees</label>
                                <tr class="fw-semibold fs-6 text-muted">
                                    <th class="w-80">First Name</th>
                                    <th class="w-49">Last Name</th>
                                    <th class="w-49">Employment Status</th>
                                </tr>
                                <tr>
                                        <th class="filterhead"></th>
                                        <th class="filterhead"></th>
                                        <th class="filterhead"></th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                    </form>
                </section>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<script>
$(document).ready(function () {
// data table
            employee_table = $('#employee-table').DataTable({
            processing: true,
            serverSide: true,
            orderCellsTop: true,
            ajax: '<?= base_url()?>/departments/employeesDataTable/<?=$departmentID?>',
            columns: [{
                        data: 'firstname',
                    },

                    {
                        data: 'lastname',
                    }, 

                    {
                        data: 'employment_status',
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
            employee_data = json.data;
            
        })





        // employees
    // $(document).on('click', '#dept-employee', function () {
    //         let dept_id = this.dataset.id;
    //         console.log(dept_id);
    //         employee_table = $('#employee-table').DataTable({
    //             processing: true,
    //             serverSide: true,
    //             orderCellsTop: true,
    //             ajax: '<?= base_url()?>/departments/employeesDataTable/' + dept_id,
    //             columns: [{
    //                     data: 'firstname',
    //                 },

    //                 {
    //                     data: 'lastname',
    //                 }
    //             ]
    //         }).on('xhr.dt', function (e, settings, json, xhr) {
    //             console.log(json.data);
    //             employee_data = json.data;

    //         })

    //     });

        $(document).ready(function () {
            $.ajax({
                type: "get",
                url: "<?= base_url()?>/departments/getDepartment/<?=$departmentID?>",
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    const dept_info = response.data[0];
                    $('#dept-name').val(dept_info.dept_name);
                }
            });

        });

        $(document).on('click', '#dept-employee', function () {
            let dept_id = this.dataset.id;
            $.ajax({
                type: "get",
                url: "<?= base_url()?>/departments/getDepartment/<?=$departmentID?>",
                dataType: "json",
                success: function (response) {
                    console.log(response);
                    const dept_info = response.data[0];
                    $('#dept-name-emp').val(dept_info.dept_alias);
                }
            });
        })

});
</script>

<?= $this->endSection(); ?>

