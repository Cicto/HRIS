<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Manage
                Requirements List
            </h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="<?= base_url()?>" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted">
                    <a class="text-muted">Requirements List</a>
                </li>
            </ul>
        </div>
        <div class="d-flex col-auto align-items-center gap-2 gap-lg-3">
            <button id="add-requirements-btn" data-bs-toggle="modal" data-bs-target="#add_modal"
                class="btn btn-primary btn-sm"">
                <span class=" svg-icon svg-icon-muted svg-icon-2 pe-0 me-0">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3"
                        d="M3 13V11C3 10.4 3.4 10 4 10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14H4C3.4 14 3 13.6 3 13Z"
                        fill="currentColor" />
                    <path
                        d="M13 21H11C10.4 21 10 20.6 10 20V4C10 3.4 10.4 3 11 3H13C13.6 3 14 3.4 14 4V20C14 20.6 13.6 21 13 21Z"
                        fill="currentColor" />
                </svg>
                </span>
            </button>

            <?= $this->include('partials/dataTablesExportButton')?>

            <input type="checkbox" class="btn-check" id="archive-toggle" autocomplete="off">

            <label id="archive-color" class="btn btn-primary btn-sm btn-danger btn-icon" for="archive-toggle">
                <i class="bi bi-trash fs-4 "></i>
            </label>

        </div>
    </div>
</div>

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">

            <!-- Start Requirements Table -->
            <div class="mt-5">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-rounded border align-middle gs-7 gy-5 my-0"
                                id="requirements-table" style="width: 100%">
                                <thead class="text-primary fw-bold border-bottom border-gray-200">
                                    <tr>

                                    </tr>
                                    <!-- <th>#</th> -->
                                    <th>Document Type</th>
                                    <th>Employee Type</th>
                                    <th>Actions</th>
                                    <tr>
                                        <th class="filterhead"></th>
                                        <th class="filterhead"></th>
                                        <th class=""></th>
                                        <th class=""></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Requirements Table -->

            <!-- Start Requirements Modal -->
            <div class="modal fade" tabindex="-1" id="add_modal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header flex-column">
                            <h3 class="modal-title"></h3>
                            <span class="text-muted">Requirement Information</span>
                        </div>
                        <form id="add-requirement" class="form-vessel" method="post">
                            <input type="text" name="add_requirement" id="requirement-id" hidden>
                            <div class="modal-body">
                                <div class="col-md-12">

                                    <div class="w-100 mb-5">
                                        <label class="d-flex align-items-center fs-6 fw-semibold">
                                            <span class="">Document Type: </span>
                                        </label>
                                        <input type="text" class="form-control form-control-solid w-100 fw-bold"
                                            placeholder="Enter New Document Type" name="document_type"
                                            id="document-type" value="" required>
                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                    </div>

                                    <div class="w-100 mb-5">
                                        <label class="fs-6 fw-semibold mb-1">Employee Type: </label>
                                        <select name="employee_type" id="employee-type" class="form-select form-select-solid "
                                            required>
                                            <option value="" selected disabled>Select Employee Type</option>
                                            <option value="0">Job Order / Contract of Service</option>
                                            <option value="1">With Plantilla</option>
                                        </select>
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
            <!-- End Requirements Modal -->


        </div>
    </div>
</div>
<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<!-- <script src="<?= base_url()?>/public/assets/js/form-misc.js"></script> -->
<script src="<?= base_url()?>/public/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>/public/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url()?>/public/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>/public/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js">
</script>
<script src="<?= base_url()?>/public/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>/public/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="<?= base_url()?>/public/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url()?>/public/assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?= base_url()?>/public/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url()?>/public/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?= base_url()?>/public/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="<?= base_url()?>/public/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url()?>/public/assets/libs/pdfmake/build/vfs_fonts.js"></script>

<script>
    $(document).ready(function () {
        let table = $('#requirements-table').DataTable({
            processing: true,
            serverSide: true,
            orderCellsTop: true,
            ajax: '<?= base_url()?>/requirements/requirementsListDataTables/',
            columns: [

                {
                    data: 'document_type',
                    render: function (data, display, row) {
                        return `<span class = "fw-bold text-gray-700">${data}</span>`;
                    }
                },
                {
                    data: 'employee_type',
                    render: function (data, type, row) {
                        if (row.employee_type == 1) {
                            return `<span class="badge badge-light-primary">With Plantilla</span>`;
                        } else {
                            return `<span class="badge badge-light-primary">Job Order / Contract of Service</span>`;
                        }

                    }
                },
                {
                    data: 'id',
                    orderable: false,
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
                                    <span class="menu-link px-3 ${row.deleted_at ? 'restore' : 'delete'}-btn" data-id = "${data}" >${row.deleted_at ? 'Restore' : 'Archive'}</span>
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

        dataTablesButtonsHooks(table);

        $('#add-requirement').submit(function (e) {
            let endpoint = "<?= base_url()?>/requirements/addRequirements";
            e.preventDefault();
            console.table($(this).serializeArray());
            if ($('#requirement-id').val()) {
                endpoint = "<?= base_url()?>/requirements/updateRequirements/" + $('#requirement-id').val()
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

                    $("#add-requirement")[0].reset();

                    $('#add_modal').modal('hide');
                }
            });
        });

        $('#requirements-table').on('click', '.edit-btn', function () {
            $('.modal-title').text('Edit Requirement Information');
            const info_modal = bootstrap.Modal.getOrCreateInstance('#add_modal');
            let requirement_id = this.dataset.id;
            console.log(requirement_id);
            $.ajax({
                type: "get",
                url: "<?= base_url()?>/requirements/getRequirementsInfo/" + requirement_id,
                dataType: "json",
                success: function (response) {
                    if (!response.error) {
                        console.log(response);
                        const requirements_info = response.data[0];
                        $('#requirement-id').val(requirements_info.id);
                        $('#document-type').val(requirements_info.document_type);
                        $('#employee-type').val(requirements_info.employee_type);
                    } else {
                        errorAlert('Error in retrieving data.', 'Error in retrieving data.',
                            'error');
                    }
                }
            });
            info_modal.show();
        });

        $('#requirements-table').on('click', '.delete-btn', function () {
            let requirement_id = this.dataset.id;
            console.log(requirement_id);
            confirm('Are you sure you want to archive?',
                'Are you sure you want to archive the Document Type?',
                'question', "<?= base_url()?>/requirements/archiveRequirements/" + requirement_id, "post",
                null,
                function (response) {
                    console.log(response);
                    if (!response.error) {
                        Swal.fire({
                            text: "Document type is been archive.",
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
                            'There is an error during deleting the document type.',
                            'warning');
                    }
                });
        });

        $("#requirements-table").on('click', '.restore-btn', function () {
            let requirement_id = this.dataset.id;
            console.log(requirement_id);
            confirm('Are you sure you want to restore?',
                'Are you sure you want to restore the Document Type?', 'question',
                "<?= base_url()?>/requirements/restoreRequirements/" + requirement_id, "post", null,
                function (response) {
                    console.log(response);
                    if (!response.error) {
                        successAlert('Restoring Document Type', 'A document type successfully restored.',
                            'success');
                        table.ajax.reload()
                    } else {
                        errorAlert('Error',
                            'There is an error during restoring the document type.',
                            'warning');
                    }
                });
        });

        $('#archive-toggle').change(function (e) {

            if (this.checked) {
                reloadDataTable(table, "<?= base_url()?>/requirements/requirementsListDataTables/1");
                $("#archive-color").addClass("btn-success");
                $("#archive-color").removeClass("btn-danger");
            } else {
                reloadDataTable(table, "<?= base_url()?>/requirements/requirementsListDataTables/");
                $("#archive-color").addClass("btn-danger");
                $("#archive-color").removeClass("btn-success");
            }

        });

        $(document).on('click', '#add-requirements-btn', function () {
            $('.form-vessel').trigger('reset');
            $('.modal-title').text('Add New Requirements');
        });
    });
</script>
<?= $this->endSection(); ?>