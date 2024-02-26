<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0"><?= $title ?></h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="<?= base_url()?>" class="text-muted text-hover-primary">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <li class="breadcrumb-item text-muted"><?= $title ?></li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <?= $this->include('partials/dataTablesExportButton')?>
        </div>
    </div>
</div>

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <div id="kt_app_content_container" class="app-container container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-body">

                        <div class = "btn-actions-container">
                        
                        </div>

                        <!-- <h5 class="card-title">Special title treatment</h5> -->
                        <div class = "table-responsive">
                            <table class = "table table-hover table-rounded border align-middle gs-7 gy-5 my-0" id = "logs-table" style = "width: 100%">
                                <thead class = "text-primary fw-bold border-bottom border-gray-200">
                                    <tr>
                                        <th>Log Actor</th>
                                        <th>Log Action</th>
                                        <th>Log Details</th>
                                        <th>Log Data</th>
                                        <th>Date Created</th>
                                    </tr>
                                    <tr>
                                        <th class="filterhead"></th>
                                        <th class="filterhead"></th>
                                        <th class="filterhead"></th>
                                        <th class="filterhead"></th>
                                        <th class="filterhead"></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<?= $this->section('css'); ?>
                                        
<?= $this->endSection(); ?>
<?= $this->section('javascript'); ?>
<script>
    let logsTables;
    let _dataTablesObj;
    $(document).ready(function () {
        
        logsTables = $('#logs-table').DataTable({
            processing: true,
            serverSide: true,
            orderCellsTop: true,
            ajax: '<?= base_url()?>/systemLogs/getSystemLogs',
            responsive: true,
            createdRow: function (row, data, rowIndex) {
                // if(data['active'] != 1){
                //     $(row).addClass('bg-light-dangers text-danger');
                // }
            },
            columns: [{
                    data: 'actor',
                    render: function (data, display, row) {
                        return  `<div class="symbol symbol-50px me-2">
                                    <img src = "${base_url}/public/assets/media/avatars/${row.user_photo?row.user_photo:'default-avatar.png'}" class="ms-5 me-8">
                                </div><span class = "fw-bold ${(row.active == 0) ? 'text-danger' : 'text-gray-700'}">${data}</span>
                            `
                    }
                },
                {
                    data: 'log_action',
                },
                {
                    data: 'log_details',
                    
                },
                {
                    data: 'log_data'
                },
                {
                    data: 'created_at'
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

        dataTablesButtonsHooks(logsTables);


    });
</script>

<?= $this->endSection(); ?>