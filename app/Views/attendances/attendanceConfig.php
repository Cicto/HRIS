<?= $this->extend('layouts/main'); ?>
<?= $this->section('css'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <style>
        .ff-rubik{
            font-family: 'Rubik', sans-serif;
        }
    </style>
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Attendance Configuration</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="<?=base_url()?>" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <!-- <li class="breadcrumb-item text-muted">
                    <i class="bi bi-dash"></i>
                </li>
                <li class="breadcrumb-item text-muted">
                    <a href="<?=base_url()?>/attendances" class="text-muted text-hover-primary">Attendance Logs</a>
                </li>
                <li class="breadcrumb-item text-muted">
                    <i class="bi bi-dash"></i>
                </li>
                <li class="breadcrumb-item text-muted">
                    <span class="text-muted">Attendance Scanning</span>
                </li> -->
            </ul>
        </div>
    </div>
</div>


<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row mb-3">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-6">
                            <div class="col-lg-4">
                                <label class="form-label fw-bold">Time Range</label>
                                <div class="small text-muted text-md-end mb-3">
                                    <i class="fas fa-info-circle"></i> This is the available time where an employee can log their attendance.
                                </div>
                            </div>
                            <div class="col-lg-8 d-flex">
                                <div class="vr align-self-stretch me-5 d-none d-md-block"></div>
                                <div class="row flex-grow-1">
                                    <div class="col-lg-5">
                                        <label for="" class="form-label">
                                            From:
                                        </label>
                                        <input type="time" name="availability_from" id="availability-from" class="form-control form-control-lg fw-semibold ff-rubik text-primary bg-light-primary border-0 text-center">
                                    </div>
                                    <div class="col-1 d-flex flex-column">
                                        <label for="" class="form-label">
                                            &nbsp;
                                        </label>
                                        <div class="ff-rubik flex-grow-1 d-flex align-items-center justify-content-center">
                                            -
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <label for="" class="form-label">
                                            To:
                                        </label>
                                        <input type="time" name="availability_to" id="availability-to" class="form-control form-control-lg fw-semibold ff-rubik text-primary bg-light-primary border-0 text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <label class="form-label fw-bold">Location Availability</label>
                                <div class="small text-muted text-md-end mb-3">
                                    <i class="fas fa-info-circle"></i> This are the locations where an employee can only be able to log an attendance.
                                </div>
                            </div>
                            <div class="col-lg-8 d-flex">
                                <div class="vr align-self-stretch me-5 d-none d-md-block"></div>
                                <div class="row flex-grow-1">
                                    <div class="col-12">
                                        <div class="d-flex gap-5">
                                            <select class="form-select" data-control="select2" data-placeholder="Select an option">
                                                <option></option>
                                                <option value="1">Option 1</option>
                                                <option value="2">Option 2</option>
                                            </select>
    
                                            <button class="btn btn-danger btn-icon">
                                                <span class="svg-icon svg-icon-muted svg-icon-1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                                                    </svg>
                                                </span>
                                            </button>
                                        </div>

                                        Insert Map
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
<?= $this->section('javascript'); ?>
<script>
    $(function () {
        
        $("#availability-from").change(function(){
            const time = this.value;
            $("#availability-to").attr("max", time);
        })

        $("#availability-to").change(function(){
            const time = this.value;
            $("#availability-from").attr("min", time);
        })
    });
</script>
<?= $this->endSection(); ?>
