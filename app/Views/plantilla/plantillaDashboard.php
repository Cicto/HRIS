<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Manage Plantilla
            </h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="<?= base_url()?>" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">
                    <a class="text-muted">Plantilla</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <button type="button" id="add-user-btn" data-bs-toggle="modal" data-bs-target="#add_modal"
                class="btn btn-primary btn-sm waves-effect waves-light float-right "><span
                    class="align-middle"></span>Add Plantilla</button>

            <input type="checkbox" class="btn-check" id="archive-toggle" autocomplete="off">
            <label class="btn btn-primary btn-sm btn-danger btn-icon" for="archive-toggle"><i
                    class="bi bi-trash fs-4 "></i></label>

        </div>
    </div>
</div>

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">

            <!-- Start Plantilla Table -->
            <div class="mt-5">
                <div class="card shadow-sm">
                    <!-- <div class="card-header">
                        <h3 class="card-title fw-bold">Plantilla List</h3>
                        
                    </div> -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="plantilla_table"
                                class="table table-hover table-rounded border align-middle gs-7 gy-5 my-0">
                                <thead class="text-primary fw-bold border-bottom border-gray-200">
                                    <tr class="fs-6 text-muted">
                                        <th>Position Title</th>
                                        <th>Salary Grade</th>
                                        <th>Authorized</th>
                                        <th>Actual</th>
                                        <th>Department</th>
                                        <th>Actions</th>
                                    </tr>
                                    <tr>
                                        <th class="filterhead"></th>
                                        <th class="filterhead"></th>
                                        <th class="filterhead"></th>
                                        <th class="filterhead"></th>
                                        <th class="filterhead"></th>
                                        <th class=""></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Plantilla Table -->

            <!-- Start Plantilla Modal -->
            <div class="modal fade" tabindex="-1" id="add_modal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header flex-column">
                            <h3 class="modal-title"></h3>
                            <span class="text-muted">Plantilla Information</span>
                        </div>
                        <form id="add_plantilla" class="form-vessel" method="post">
                            <input type="text" name="plantilla_id" id="plantilla-id" hidden>
                            <div class="modal-body">
                                <div class="col-md-12">

                                    <div class="w-100 mb-5">
                                        <label class="d-flex align-items-center fs-6 fw-semibold">
                                            <span class="">Position Title: </span>
                                        </label>
                                        <input type="text" class="form-control form-control-solid w-100 fw-bold"
                                            placeholder="Enter a Position Title" name="position_title"
                                            id="position_title" value="" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="w-100 mb-5">
                                        <label class="fs-6 fw-semibold mb-1">
                                            <span class="">Salary: </span>
                                        </label>
                                        <input type="number" class="form-control form-control-solid w-100 fw-bold"
                                            placeholder="Enter Salary Grade" name="salary_grade" id="salary_grade"
                                            value="" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="w-100 mb-5">
                                        <label class="fs-6 fw-semibold mb-1">Authorized: </label>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1">₱</span>
                                            <input type="text" class="form-control" name="authorized" id="authorized"
                                                placeholder="Enter Authorized" aria-label="">
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>

                                        <div class="w-100 mb-5">
                                            <label class="fs-6 fw-semibold mb-1">Actual: </label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">₱</span>
                                                <input type="text" class="form-control" name="actual" id="actual"
                                                    placeholder="Enter Actual" aria-label=""
                                                    aria-describedby="basic-addon1" required>
                                            </div>
                                            <div class="fv-plugins-message-container invalid-feedback"></div>
                                        </div>

                                        <div class="w-100 mb-5">
                                            <label class="fs-6 fw-semibold mb-1">Department: </label>
                                            <select name="dept_id" id="dept_id" class="form-select form-select-solid " required>
                                                <option value="" selected disabled>Select Department</option>
                                                <?php foreach ($departments as $department) : ?>
                                                <option value="<?= $department->dept_id ?>">
                                                    <?= $department->dept_name ?>
                                                </option>
                                                <?php endforeach ?>
                                            </select>
                                            </select>
                                        </div>

                                    </div>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-success submit_btn">Submit</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- End Plantilla Modal -->


        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<script src="<?= base_url()?>/public/assets/js/form-misc.js"></script>
<script>
    $(document).ready(function () {
        let table = $('#plantilla_table').DataTable({
            processing: true,
            serverSide: true,
            orderCellsTop: true,
            ajax: '<?= base_url()?>/plantilla/plantillaDataTables/',
            columns: [

                {
                    data: 'position_title'
                },
                {
                    data: 'salary_grade'
                },
                {
                    data: 'authorized',
                    render: function (data, display, row) {
                        return parseFloat(data).toLocaleString('en-US', {
                            style: 'currency',
                            currency: 'PHP',
                        });
                        // return '<p>₱ ' + data + '</p> ';
                    }
                },
                {
                    data: 'actual',
                    render: function (data, display, row) {
                        return parseFloat(data).toLocaleString('en-US', {
                            style: 'currency',
                            currency: 'PHP',
                        });
                    }
                },
                {
                    data: 'dept_alias'
                },
                {
                    data: 'plantilla_id',
                    "mRender": function (data, type, row) {
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
                                    <span class="menu-link px-3 edit-btn"  data-id = "${data}" >Edit</span>
                                </div>
                                <div class="menu-item px-3">
                                    <span class="menu-link px-3 ${row.deleted_at ? 'restore' : 'delete'}-btn" data-id = "${data}" >${row.deleted_at ? 'Restore' : 'Delete'}</span>
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
        });

        $('#plantilla_table').on('click', '.delete-btn', function () {
            let plantilla_id = this.dataset.id;
            console.log(plantilla_id);
            confirm('Are you sure you want to delete?',
                'Are you sure you want to delete the Plantilla?',
                'question', "<?= base_url()?>/plantilla/archivePlantilla/" + plantilla_id, null,
                function (response) {
                    console.log(response);
                    if (!response.error) {
                        Swal.fire({
                            text: "Plantilla is deleted.",
                            icon: "warning",
                            buttonsStyling: false,
                            confirmButtonText: "Confirm",
                            customClass: {
                                confirmButton: "btn btn-warning"
                            }
                        });
                        table.ajax.reload()
                    } else {
                        errorAlert('Error',
                            'There is an error during deleting the plantilla.',
                            'warning');
                    }
                });
            // $.ajax({
            //     type: "post",
            //     url: "<?= base_url()?>/plantilla/archivePlantilla/" + plantilla_id,
            //     dataType: "json",
            //     success: function (response) {
            //         console.log(response);
            //         if (!response.error) {
            //             table.ajax.reload()
            //         } else {
            //             errorAlert('Error',
            //                 'There is an error during deleting the plantilla.',
            //                 'warning');
            //         }
            //     }
            // });
        });

        $('#add_plantilla').submit(function (e) {
            let endpoint = "<?= base_url()?>/plantilla/addPlantilla";
            e.preventDefault();
            console.table($(this).serializeArray());
            if ($('#plantilla-id').val()) {
                endpoint = "<?= base_url()?>/plantilla/updatePlantilla/" + $('#plantilla-id').val()
            }
            $.ajax({
                type: 'post',
                url: endpoint,
                data: $(this).serializeArray(),
                dataType: 'json',
                success: function (data) {

                    console.log(data);

                    successAlert('Success', 'Your Information has been saved.', 'success');

                    reloadDataTable(table);

                    $("#add_plantilla")[0].reset();
                }
            });
        });

        $('#plantilla_table').on('click', '.edit-btn', function () {
            $('.modal-title').text('Edit Plantilla Information');
            const info_modal = bootstrap.Modal.getOrCreateInstance('#add_modal');
            let plantilla_id = this.dataset.id;
            console.log(plantilla_id);
            $.ajax({
                type: "get",
                url: "<?= base_url()?>/plantilla/getPlantilla/" + plantilla_id,
                dataType: "json",
                success: function (response) {
                    if (!response.error) {
                        console.log(response);
                        const plantilla_info = response.data[0];
                        $('#plantilla-id').val(plantilla_info.plantilla_id);
                        $('#position_title').val(plantilla_info.position_title);
                        $('#salary_grade').val(plantilla_info.salary_grade);
                        $('#authorized').val(plantilla_info.authorized);
                        $('#actual').val(plantilla_info.actual);
                        $('#dept_id').val(plantilla_info.dept_id);
                    } else {
                        errorAlert('Error in retrieving data.', 'Error in retrieving data.',
                            'error');
                    }
                }
            });
            info_modal.show();
        });

        $('#archive-toggle').change(function (e) {

            if (this.checked) {
                reloadDataTable(table, "<?= base_url()?>/plantilla/plantillaDataTables/1");
            } else {
                reloadDataTable(table, "<?= base_url()?>/plantilla/plantillaDataTables/");
            }

        });

        $("#plantilla_table").on('click', '.restore-btn', function () {
            let plantilla_id = this.dataset.id;
            console.log(plantilla_id);
            confirm('Are you sure you want to restore?',
                'Are you sure you want to restore the Plantilla?', 'question',
                "<?= base_url()?>/plantilla/restorePlantilla/" + plantilla_id, null,
                function (response) {
                    console.log(response);
                    if (!response.error) {
                        successAlert('Restoring Plantilla', 'Plantilla successfully restored.',
                            'success');
                        table.ajax.reload()
                    } else {
                        errorAlert('Error',
                            'There is an error during restoring the plantilla.',
                            'warning');
                    }
                });
            // $.ajax({
            //     type: "post",
            //     url: "<?= base_url()?>/plantilla/restorePlantilla/" + plantilla_id,
            //     dataType: "json",
            //     success: function (response) {
            //         console.log(response);
            //         if (!response.error) {

            //             table.ajax.reload()
            //         } else {
            //             errorAlert('Error',
            //                 'There is an error during restoring the plantilla.',
            //                 'warning');
            //         }
            //     }
            // });
        });

        $(document).on('click', '#add-user-btn', function () {
            $('.form-vessel').trigger('reset');
            $('.modal-title').text('Add New Plantilla');
        });

        Inputmask("currency", {
            radixPoint: '.',
            inputtype: "text"
        }).mask("#authorized");

        Inputmask("currency", {
            radixPoint: '.',
            inputtype: "text"
        }).mask("#actual");

    });
</script>
<?= $this->endSection(); ?>