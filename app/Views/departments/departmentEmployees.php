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