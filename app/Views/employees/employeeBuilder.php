<?= $this->extend('layouts/main'); ?>

<?= $this->section('css'); ?>
<style>
    .stepper-title{
        margin-bottom: 0 !important;
    }

    .grayscale{
        filter: grayscale(1);
    }

    .no-drag{
        position: relative;
    }

    .no-drag:before{
        content: " ";
        position: absolute;
        width: 100%;
        height: 100%;
        z-index: 1;
    }

    .cropper-crop-box{
        overflow: hidden;
        border-radius: 1rem !important;
        border: 1px rgba(255, 255, 255, .5) solid;
    }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<?php
?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0"><?=$is_edit ? "Update" : "Add"?> Employee</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="<?=base_url()?>" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item text-muted">
                    <i class="bi bi-dash"></i>
                </li>
                <li class="breadcrumb-item text-muted">
                    <a href="<?=base_url()?>/employees" class="text-muted text-hover-primary">Manage Employees</a>
                </li>
                <li class="breadcrumb-item text-muted">
                    <i class="bi bi-dash"></i>
                </li>
                <li class="breadcrumb-item text-muted">
                    <span class="text-muted"><?=$is_edit ? "Update" : "Add"?> Employee</span>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            
        </div>
    </div>
</div>

<div class="d-flex flex-column flex-column-fluid mb-4">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="stepper stepper-pills stepper-column" id="employee-form-stepper">
                    <div class="row">

                        <div class="col-md-4 col-lg-4 col-xl-3 border-end">
                            <div class="position-relative d-flex justify-content-center">
                                <img src="<?=base_url()?>/public/assets/media/employee-profile/<?=$is_edit ? $employee_info->photo ? $employee_info->photo : "default-avatar.png" : "default-avatar.png"?>" class="img-fluid w-100 rounded-4 border mx-auto" style="aspect-ratio: 1 / 1;" alt="Employee Photo" id="employee-photo-img">
                            </div>
                            
                            <div class="my-6">
                                <input type="file" id="employee-photo" class="d-none" accept="image/png, image/gif, image/jpeg" >
                                <label for="employee-photo" class="btn btn-primary w-100 btn-icon"><i class="fas fa-file-image me-2"></i> Set employee photo</label>
                            </div>
            
                            <div class="d-none d-md-flex flex-row-auto w-100">
                                <div class="stepper-nav flex-center">
        
                                    <div class="stepper-item me-5 current" data-kt-stepper-element="nav">
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">1</span>
                                            </div>
        
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Step 1
                                                </h3>
        
                                                <div class="stepper-desc">
                                                    Personal Information
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="stepper-line h-40px"></div>
                                    </div>
        
                                    <div class="stepper-item me-5" data-kt-stepper-element="nav">
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">2</span>
                                            </div>
        
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Step 2
                                                </h3>
        
                                                <div class="stepper-desc">
                                                    Family Background
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="stepper-line h-40px"></div>
                                    </div>
        
                                    <div class="stepper-item me-5" data-kt-stepper-element="nav">
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">3</span>
                                            </div>
        
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Step 3
                                                </h3>
        
                                                <div class="stepper-desc">
                                                    Educational Background
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="stepper-line h-40px"></div>
                                    </div>

                                    <div class="stepper-item me-5" data-kt-stepper-element="nav">
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">4</span>
                                            </div>
        
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Step 4
                                                </h3>
        
                                                <div class="stepper-desc">
                                                    Civil Service Eligibility
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="stepper-line h-40px"></div>
                                    </div>

                                    <div class="stepper-item me-5" data-kt-stepper-element="nav">
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">5</span>
                                            </div>
        
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Step 5
                                                </h3>
        
                                                <div class="stepper-desc">
                                                    Work Experience 
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="stepper-line h-40px"></div>
                                    </div>

                                    <div class="stepper-item me-5" data-kt-stepper-element="nav">
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">6</span>
                                            </div>
        
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Step 6
                                                </h3>
        
                                                <div class="stepper-desc">
                                                    Voluntary Work or Involvement in Civic / Non-Government / People / Voluntary Organization(s)
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="stepper-line h-40px"></div>
                                    </div>

                                    <div class="stepper-item me-5" data-kt-stepper-element="nav">
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">7</span>
                                            </div>
        
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Step 7
                                                </h3>
        
                                                <div class="stepper-desc">
                                                    Learning and Development (L&D) Interventions/Training Programs Attended
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="stepper-line h-40px"></div>
                                    </div>

                                    <div class="stepper-item me-5" data-kt-stepper-element="nav">
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">8</span>
                                            </div>
        
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Step 8
                                                </h3>
        
                                                <div class="stepper-desc">
                                                    Other Information
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- <div class="stepper-line h-40px"></div> -->
                                    </div>

                                    <div class="stepper-item me-5" data-kt-stepper-element="nav" hidden>
                                        <div class="stepper-wrapper d-flex align-items-center">
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number"><i class="fas fa-check-circle text-primary"></i></span>
                                            </div>
        
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">
                                                    Confirmation
                                                </h3>
        
                                                <div class="stepper-desc">
                                                    Review & Confirmation
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-8 col-lg-8 col-xl-9">
                            <div class="flex-row-fluid h-100">
                                <div class="form d-flex flex-column h-100">
                                    <div class="mb-5 flex-grow-1" id="employee-forms-container">
                                        <div class="flex-column h-100 justify-content-between current" data-kt-stepper-element="content">
                                            <!-- Personal Information -->
                                            <form class="ps-3" id="personal-information-form">
                                                <div class="text-center border-bottom pb-4 mb-6">
                                                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Personal Information</h1>
                                                    <p class="text-gray-600 m-0">Fill in employee's personal information, identifications, and address.</p>
                                                </div>
                                                
                                                <!-- Full name -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="firstname" class="required form-label">Employee Name</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="mb-3">
                                                            <input type="text" id="firstname" name="firstname" value="<?= $is_edit ? $employee_info->firstname : "" ?>" class="form-control form-control-solid" placeholder="First Name" required/>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" id="middlename" name="middlename" value="<?= $is_edit ? $employee_info->middlename : "" ?>" class="form-control form-control-solid" placeholder="Middle Name"/>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 me-3">
                                                                <input type="text" id="lastname" name="lastname" value="<?= $is_edit ? $employee_info->lastname : "" ?>" class="form-control form-control-solid" placeholder="Last Name" required/>
                                                            </div>
                                                            <div class="">
                                                                <input type="text" id="suffix" name="suffix" value="<?= $is_edit ? $employee_info->suffix : "" ?>" class="form-control form-control-solid" placeholder="Suffix: Jr."/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Birthdate -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="birthdate" class="required form-label">Birthdate</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="date" id="birthdate" name="birthdate" value="<?= $is_edit ? $employee_info->birthdate : "" ?>" class="form-control form-control-solid"/>
                                                    </div>
                                                </div>
                                                <!-- Sex -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="birthdate" class="required form-label">Sex</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select class="form-select form-select-solid" name="sex" id="sex" data-control="select2" data-placeholder="Select a sex">
                                                            <option></option>
                                                            <option value="Male"  <?=$is_edit ? $employee_info->sex == "Male" ? "selected" : "" : "" ?> selected>Male</option>
                                                            <option value="Female" <?=$is_edit ? $employee_info->sex == "Female" ? "selected" : "" : "" ?> >Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- Civil Status -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="civil-status" class="required form-label">Civil Status</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select class="form-select form-select-solid" name="civil_status" id="civil-status" data-control="select2" data-placeholder="Select a civil status">
                                                            <option></option>
                                                            <?php foreach (["Single", "Married", "Widowed", "Separated", "Live-in"] as $index => $value):?>
                                                            <option value="<?=$value?>" <?=$is_edit ? ($employee_info->civil_status == $value ? "selected" : "") : (!$index ? "selected" : "")?>><?=$value?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- Height and Weight -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="height" class="form-label">Height and Weight</label>
                                                    </div>
                                                    <div class="col-8 d-flex">
                                                        <div class="input-group input-group-solid me-2">
                                                            <input type="text" class="form-control mask-float" name="height" value="<?= $is_edit ? $employee_info->height : "" ?>" id="height" placeholder="Height" min="0"/>
                                                            <span class="input-group-text">meters</span>
                                                        </div>
                                                        <div class="input-group input-group-solid ms-1">
                                                            <input type="text" class="form-control mask-float" name="weight" value="<?= $is_edit ? $employee_info->weight : "" ?>" id="weight" placeholder="Weight" min="0"/>
                                                            <span class="input-group-text">kilograms</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Blood Type -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="blood-type" class="form-label">Blood Type</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="blood_type" value="<?= $is_edit ? $employee_info->blood_type : "" ?>" id="blood-type" class="form-control form-control-solid" placeholder="Blood Type">
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>                                                    

                                                <!-- GSIS ID No. -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="gsis-id" class="form-label">GSIS ID No.</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text p-0 w-50px no-drag">
                                                                <img src="<?=base_url()?>/public/assets/media/icons/gsis.svg" alt="GSIS" class="h-25px mx-auto grayscale opacity-50">
                                                            </span>
                                                            <input type="text" name="gsis_id" value="<?= $is_edit ? $employee_info->gsis_id : "" ?>" id="gsis-id" class="form-control form-control-solid" placeholder="0000-0000000-0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Pag-Ibig ID No. -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="pag-ibig-id" class="form-label">Pag-Ibig ID No.</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text p-0 w-50px text-center no-drag">
                                                                <img src="<?=base_url()?>/public/assets/media/icons/pag-ibig.svg" alt="Pag-Ibig" class="h-25px mx-auto grayscale opacity-50">
                                                            </span>
                                                            <input type="text" name="pag_ibig_id" value="<?= $is_edit ? $employee_info->pag_ibig_id : "" ?>" id="pag-ibig-id" class="form-control form-control-solid" placeholder="0000-0000-0000">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- PhilHealth No. -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="philhealth-id" class="form-label">PhilHealth No.</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text p-0 w-50px text-center no-drag">
                                                                <img src="<?=base_url()?>/public/assets/media/icons/philhealth.svg" alt="PhilHealth" class="h-25px mx-auto grayscale opacity-50">
                                                            </span>
                                                            <input type="text" name="philhealth_id" value="<?= $is_edit ? $employee_info->philhealth_id : "" ?>" id="philhealth-id" class="form-control form-control-solid" placeholder="00-000000000-0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- SSS No. -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="sss-id" class="form-label">SSS No.</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text p-0 w-50px text-center no-drag">
                                                                <img src="<?=base_url()?>/public/assets/media/icons/sss.svg" alt="SSS" class="h-15px mx-auto grayscale opacity-50">
                                                            </span>
                                                            <input type="text" name="sss_id" value="<?= $is_edit ? $employee_info->sss_id : "" ?>" id="sss-id" class="form-control form-control-solid" placeholder="00-0000000-0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- TIN No. -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="tin-id" class="form-label">TIN No.</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text p-0 w-50px text-center no-drag">
                                                                <b class="d-block mx-auto text-gray-500">TIN</b>
                                                            </span>
                                                            <input type="text" name="tin_id" value="<?= $is_edit ? $employee_info->tin_id : "" ?>" id="tin-id" class="form-control form-control-solid" placeholder="000-000-000-00000">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Agency Employee No. -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="agency-employee-id" class="form-label">Agency Employee No.</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="agency_employee_id" value="<?= $is_edit ? $employee_info->agency_employee_id : "" ?>" id="agency-employee-id" class="form-control form-control-solid" placeholder="00-0000">
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>                                                    
                                                
                                                <!-- Citizenship -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="citizenship" class="form-label required">Citizenship</label>
                                                        <div class="text-muted fs-7"><i class="fas fa-info-circle"></i> If holder of  dual citizenship, please indicate the details.</div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row">
                                                            <!-- Filipino -->
                                                            <div class="col-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="1" name="is_filipino" id="is-filipino" <?=$is_edit ? $employee_info->is_filipino ? "checked" : "" : ""?>/>
                                                                    <label class="form-check-label" for="is-filipino">
                                                                        Filipino
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!-- Dual Citizenship -->
                                                            <div class="col-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="1" name="has_dual_citizenship" id="has-dual-citizenship" <?=$is_edit ? $employee_info->has_dual_citizenship ? "checked" : "" : ""?>/>
                                                                    <label class="form-check-label" for="has-dual-citizenship">
                                                                        Dual Citizenship
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="separator my-2"></div>
                                                        </div>
                                                        <div class="row">
                                                            <!-- By birth -->
                                                            <div class="col-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="1" name="is_citizen_by_birth" id="is-citizen-by-birth" <?=$is_edit ? $employee_info->is_citizen_by_birth ? "checked" : "" : ""?>/>
                                                                    <label class="form-check-label" for="is-citizen-by-birth">
                                                                        By birth
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!-- By naturalization -->
                                                            <div class="col-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" name="is_citizen_by_naturalization" id="is-citizen-by-naturalization" <?=$is_edit ? $employee_info->is_citizen_by_naturalization ? "checked" : "" : ""?>/>
                                                                    <label class="form-check-label" for="is-citizen-by-naturalization">
                                                                        By naturalization
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="citizenship-country-container" style="display: none;">
                                                            <select name="citizenship_country" id="citizenship-country" class="form-select form-select-solid mt-3">
                                                                <option></option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Residential Address -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="house-number" class="form-label required">Residential Address</label>
                                                        <div class="text-muted fs-7"><i class="fas fa-info-circle"></i> Select a province first, then the city/municipality. After that, select the barangay.</div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row g-3">
                                                            <div class="col-3">
                                                                <input type="text" class="form-control form-control-solid" name="residential_house_number" value="<?= $is_edit ? $employee_info->residential_house_number : "" ?>" id="residential-house-number" placeholder="House/Block/Lot No." required>
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="text" class="form-control form-control-solid" name="residential_street" value="<?= $is_edit ? $employee_info->residential_street : "" ?>" id="residential-street" placeholder="Street" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <select name="residential_barangay_code" id="residential-barangay-code" class="form-select form-select-solid" data-control="select2" data-placeholder="Select a barangay" required>
                                                                    <option></option>
                                                                </select>
                                                                <input type="text" name="residential_barangay" class="address-text d-none">
                                                            </div>
                                                            <div class="col-12">
                                                                <select name="residential_city_mun_code" id="residential-city-mun-code" class="form-select form-select-solid" data-control="select2" data-placeholder="Select a city/municipality" required>
                                                                    <option></option>
                                                                </select>
                                                                <input type="text" name="residential_city_mun" class="address-text d-none">
                                                            </div>
                                                            <div class="col-12">
                                                                <select name="residential_province_code" id="residential-province-code" class="form-select form-select-solid" data-control="select2" data-placeholder="Select a province" required>
                                                                    <option></option>
                                                                    <?php foreach ($provinces as $key => $province):?>
                                                                    <option value="<?=$province->provCode?>"><?=$province->provDesc?></option>
                                                                    <?php endforeach;?>
                                                                </select>
                                                                <input type="text" name="residential_province" class="address-text d-none">
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" name="residential_zip_code" value="<?= $is_edit ? $employee_info->residential_zip_code : "" ?>" id="residential-zip-code" class="form-control form-control-solid mask-zip-code" placeholder="ZIP Code">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Permanent Address -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="house-number" class="form-label required">Permanent Address</label>
                                                        <div class="text-muted fs-7"><i class="fas fa-info-circle"></i> Click <a href="#" id="same-as-residential-address">here</a> to make the permanent address the same as the residential address.</div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row g-3">
                                                            <div class="col-3">
                                                                <input type="text" class="form-control form-control-solid" name="permanent_house_number" value="<?= $is_edit ? $employee_info->permanent_house_number : "" ?>" id="permanent-house-number" placeholder="House/Block/Lot No." required>
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="text" class="form-control form-control-solid" name="permanent_street" value="<?= $is_edit ? $employee_info->permanent_street : "" ?>" id="permanent-street" placeholder="Street" required>
                                                            </div>
                                                            <div class="col-12">
                                                                <select name="permanent_barangay_code" id="permanent-barangay-code" class="form-select form-select-solid" data-control="select2" data-placeholder="Select a barangay" required>
                                                                    <option></option>
                                                                </select>
                                                                <input type="text" name="permanent_barangay" class="address-text d-none">
                                                            </div>
                                                            <div class="col-12">
                                                                <select name="permanent_city_mun_code" id="permanent-city-mun-code" class="form-select form-select-solid" data-control="select2" data-placeholder="Select a city/municipality" required>
                                                                    <option></option>
                                                                </select>
                                                                <input type="text" name="permanent_city_mun" class="address-text d-none">
                                                            </div>
                                                            <div class="col-12">
                                                                <select name="permanent_province_code" id="permanent-province-code" class="form-select form-select-solid" data-control="select2" data-placeholder="Select a province" required>
                                                                    <option></option>
                                                                    <?php foreach ($provinces as $key => $province):?>
                                                                    <option value="<?=$province->provCode?>"><?=$province->provDesc?></option>
                                                                    <?php endforeach;?>
                                                                </select>
                                                                <input type="text" name="permanent_province" class="address-text d-none">
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" name="permanent_zip_code" id="permanent-zip-code" value="<?= $is_edit ? $employee_info->permanent_zip_code : "" ?>" class="form-control form-control-solid mask-zip-code" placeholder="ZIP Code">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>                                                    

                                                <!-- Telephone No. -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="telephone-number" class="form-label">Telephone Number</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text w-50px d-inline-block text-center">
                                                                <i class="fas fa-phone-alt"></i>
                                                            </span>
                                                            <input type="text" name="telephone_number" value="<?= $is_edit ? $employee_info->telephone_number : "" ?>" id="telephone-number" class="form-control form-control-solid" placeholder="00-0000-0000">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Mobile No. -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="mobile-number" class="form-label required">Mobile Number</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text w-50px d-inline-block text-center">
                                                                <i class="fas fa-mobile-alt fs-4"></i>
                                                            </span>
                                                            <input type="text" name="mobile_number" value="<?= $is_edit ? $employee_info->mobile_number : "" ?>" id="mobile-number" class="form-control form-control-solid mask-contact-number" placeholder="0900-000-0000">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Email Address -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="email-address" class="form-label">Email Address</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text w-50px d-inline-block text-center">
                                                                <i class="fas fa-at fs-4"></i>
                                                            </span>
                                                            <input type="email" name="email_address" value="<?= $is_edit ? $employee_info->email_address : "" ?>" id="email-address" class="form-control form-control-solid" placeholder="example@email.com">
                                                        </div>
                                                    </div>
                                                </div>

                                                <input type="text" name="photo" value="<?=$is_edit ? $employee_info->photo : ""?>" id="photo" class="d-none">

                                                <!-- <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="employment-status" class="required form-label">Employment Status</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select class="form-select form-select-solid" name="employment_status" id="employment-status" data-control="select2" data-placeholder="Select an employment status">
                                                            <option></option>
                                                            <?php foreach ($employment_status as $key => $status):?>
                                                                <option value="<?=$status->es_id?>"><?=$status->es_description?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                </div>
                            
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="position" class="required form-label">Position</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" id="position" name="position" class="form-control form-control-solid" placeholder="Job Position"/>
                                                    </div>
                                                </div>
                                                
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="dept-id" class="required form-label">Department</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <select class="form-select form-select-solid" name="dept_id" id="dept-id" data-control="select2" data-placeholder="Select employee department">
                                                            <option></option>
                                                            <?php foreach ($departments as $key => $department):?>
                                                                <option value="<?=$department->dept_id?>"><?=$department->dept_alias?> - <?=$department->dept_name?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                </div> -->
                                                
                                            </form>
                                        </div>

                                        <div class="flex-column h-100 justify-content-between" data-kt-stepper-element="content">
                                            <!-- Family Background -->
                                            <form class="ps-3 has-form-repeater" id="family-background-form">
                                                <div class="text-center border-bottom pb-4 mb-6">
                                                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Family Background</h1>
                                                    <p class="text-gray-600 m-0">Record employee's family composition.</p>
                                                </div>

                                                <!-- Spouse's name -->
                                                <div class="row mb-6" id="spouse-container">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="spouse-firstname" class="form-label">Spouse's Name</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="mb-3">
                                                            <input type="text" id="spouse-firstname" name="spouse_firstname" value="<?= $is_edit ? $employee_family_background->spouse_firstname : "" ?>" class="form-control form-control-solid" placeholder="First Name"/>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" id="spouse-middlename" name="spouse_middlename" value="<?= $is_edit ? $employee_family_background->spouse_middlename : "" ?>" class="form-control form-control-solid" placeholder="Middle Name"/>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 me-3">
                                                                <input type="text" id="spouse-lastname" name="spouse_lastname" value="<?= $is_edit ? $employee_family_background->spouse_lastname : "" ?>" class="form-control form-control-solid" placeholder="Last Name"/>
                                                            </div>
                                                            <div class="">
                                                                <input type="text" id="spouse-suffix" name="spouse_suffix" value="<?= $is_edit ? $employee_family_background->spouse_suffix : "" ?>" class="form-control form-control-solid" placeholder="Suffix: Jr."/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Occupation -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="spouse-occupation" class="form-label">Occupation</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="spouse_occupation" value="<?= $is_edit ? $employee_family_background->spouse_occupation : "" ?>" id="spouse-occupation" class="form-control form-control-solid" placeholder="Occupation">
                                                    </div>
                                                </div>
                                                <!-- Employer/Business Name -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="spouse-employer_business_name" class="form-label">Employer/Business Name</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="spouse_employer_business_name" value="<?= $is_edit ? $employee_family_background->spouse_employer_business_name : "" ?>" id="spouse-employer-business-name" class="form-control form-control-solid" placeholder="Employer/Business Name">
                                                    </div>
                                                </div>
                                                <!-- Business Address -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="spouse-business_address" class="form-label">Business Address</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="spouse_business_address" value="<?= $is_edit ? $employee_family_background->spouse_business_address : "" ?>" id="spouse-business-address" class="form-control form-control-solid" placeholder="Business Address">
                                                    </div>
                                                </div>
                                                <!-- Telephone No. -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="spouse-telephone-number" class="form-label">Telephone Number</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text w-50px d-inline-block text-center">
                                                                <i class="fas fa-phone-alt"></i>
                                                            </span>
                                                            <input type="text" name="spouse_telephone_number" value="<?= $is_edit ? $employee_family_background->spouse_telephone_number : "" ?>" id="spouse-telephone-number" class="form-control form-control-solid" placeholder="00-0000-0000">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>  
                                                
                                                <!-- Father's name -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="father-firstname" class="form-label required">Father's Name</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="mb-3">
                                                            <input type="text" id="father-firstname" name="father_firstname" value="<?= $is_edit ? $employee_family_background->father_firstname : "" ?>" class="form-control form-control-solid" placeholder="First Name" required/>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" id="father-middlename" name="father_middlename" value="<?= $is_edit ? $employee_family_background->father_middlename : "" ?>" class="form-control form-control-solid" placeholder="Middle Name"/>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 me-3">
                                                                <input type="text" id="father-lastname" name="father_lastname" value="<?= $is_edit ? $employee_family_background->father_lastname : "" ?>" class="form-control form-control-solid" placeholder="Last Name" required/>
                                                            </div>
                                                            <div class="">
                                                                <input type="text" id="father-suffix" name="father_suffix" value="<?= $is_edit ? $employee_family_background->father_suffix : "" ?>" class="form-control form-control-solid" placeholder="Suffix: Jr."/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Mother's name -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="mother-firstname" class="form-label required">Mother's Maiden Name</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="mb-3">
                                                            <input type="text" id="mother-firstname" name="mother_firstname" value="<?= $is_edit ? $employee_family_background->mother_firstname : "" ?>" class="form-control form-control-solid" placeholder="First Name" required/>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" id="mother-middlename" name="mother_middlename" value="<?= $is_edit ? $employee_family_background->mother_middlename : "" ?>" class="form-control form-control-solid" placeholder="Middle Name"/>
                                                        </div>
                                                        <div>
                                                            <input type="text" id="mother-lastname" name="mother_lastname" value="<?= $is_edit ? $employee_family_background->mother_lastname : "" ?>" class="form-control form-control-solid" placeholder="Last Name" required/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>

                                                <!-- Name of Children -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="children" class="form-label">Name of Children</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div id="children-form-repeater-container">
                                                            <?php if($is_edit):?>
                                                                <?php $children = json_decode($employee_family_background->children);
                                                                foreach ($children as $key => $child):?>
                                                                    <div class="d-flex flex-wrap form-repeater-container mb-3">
                                                                        <div class="flex-grow-1 me-0 me-md-5 mb-5 mb-md-0 w-100 w-md-auto">
                                                                            <input type="text" class="form-control form-control-solid" data-name="child_name" value="<?=$child->child_name?>" data-required="" data-label="Name of Child" placeholder="Full Name"/>
                                                                        </div>
                                                                        <div class="flex-grow-1 flex-md-grow-0 w-md-25 me-5 mb-5 mb-md-0">
                                                                            <input type="date" class="form-control form-control-solid" data-name="child_birthdate" value="<?=$child->child_birthdate?>" data-required="" data-label="Birthdate"/>
                                                                        </div>
                                                                        <div class="d-flex align-items-end mb-5 mb-md-0">
                                                                            <button type="button" href="#" class="btn btn-icon btn-light-danger form-repeater-remove">
                                                                                <i class="bi bi-trash fs-3"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                <?php endforeach;?>
                                                            <?php else:?>
                                                                <div class="d-flex flex-wrap form-repeater-container mb-3">
                                                                    <div class="flex-grow-1 me-0 me-md-5 mb-5 mb-md-0 w-100 w-md-auto">
                                                                        <input type="text" class="form-control form-control-solid" data-name="child_name" data-required="" data-label="Name of Child" placeholder="Full Name"/>
                                                                    </div>
                                                                    <div class="flex-grow-1 flex-md-grow-0 w-md-25 me-5 mb-5 mb-md-0">
                                                                        <input type="date" class="form-control form-control-solid" data-required="" data-name="child_birthdate" data-label="Birthdate"/>
                                                                    </div>
                                                                    <div class="d-flex align-items-end mb-5 mb-md-0">
                                                                        <button type="button" href="#" class="btn btn-icon btn-light-danger form-repeater-remove">
                                                                            <i class="bi bi-trash fs-3"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            <?php endif;?>
                                                            <button type="button" class="btn btn-light-primary btn-outline btn-outline-primary float-end form-repeater-add">Add a Child</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="flex-column h-100 justify-content-between" data-kt-stepper-element="content">
                                            <!-- Educational Background -->
                                            <form class="ps-3" id="educational-background-form">
                                                <div class="text-center border-bottom pb-4 mb-6">
                                                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Educational Background</h1>
                                                    <p class="text-gray-600 m-0">Please write the Name of School and/or Basic Education / Degree / Course in full.</p>
                                                </div>
                                                
                                                <?php $educational_levels = ['1' => "Elementary", '2' => "Secondary", '3' => "Vocational / Trade Course", '4' => "College", '5' => "Graduate Studies"];?>
                                                <?php foreach ($educational_levels as $level => $name):?>
                                                <!-- <?=$name?> -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="school-name" class="form-label"><?=$name?></label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="row g-3 education-background-container" data-educational-level="<?=$level?>">
                                                            <div class="col-12">
                                                                <input type="text" name="school_name" value="<?=$is_edit ? array_column($employee_educational_background, "school_name", "educational_level")[$level] : ""?>" class="form-control form-control-solid" placeholder="Name of School"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" name="degree_course" value="<?=$is_edit ? array_column($employee_educational_background, "degree_course", "educational_level")[$level] : ""?>" class="form-control form-control-solid" placeholder="Basic Education / Degree / Course"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="period-of-attendance-from" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                    Period of Attendance
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6 d-flex align-items-center">
                                                                <label for="period-of-attendance-from" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                    From:
                                                                </label>
                                                                <input type="date" name="period_of_attendance_from" value="<?=$is_edit ? array_column($employee_educational_background, "period_of_attendance_from", "educational_level")[$level] : ""?>" class="form-control form-control-solid ms-3"/>
                                                            </div>
                                                            <div class="col-md-6 d-flex align-items-center">
                                                                <label for="period-of-attendance-to" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                    To:
                                                                </label>
                                                                <input type="date" name="period_of_attendance_to" value="<?=$is_edit ? array_column($employee_educational_background, "period_of_attendance_to", "educational_level")[$level] : ""?>" class="form-control form-control-solid ms-3"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" name="highest_level" value="<?=$is_edit ? array_column($employee_educational_background, "highest_level", "educational_level")[$level] : ""?>" class="form-control form-control-solid" placeholder="Highest Level / Units Earned (if not graduated)"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="number" name="year_graduated" value="<?=$is_edit ? array_column($employee_educational_background, "year_graduated", "educational_level")[$level] : ""?>" class="form-control form-control-solid" placeholder="Year Graduated"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" name="scholarship_academic_honors_received" value="<?=$is_edit ? array_column($employee_educational_background, "scholarship_academic_honors_received", "educational_level")[$level] : ""?>" class="form-control form-control-solid" placeholder="Scholarship / Academic Honors Received"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator flex-grow-1 mb-6 separator-dashed <?=$level == '5' ? "d-none" : ""?>"></div>  
                                                <?php endforeach;?>

                                                <!-- Other Educational Levels -->
                                                    <!-- Secondary -->
                                                    <!-- <div class="row mb-6">
                                                        <div class="col-md-4 pt-2">
                                                            <label for="secondary-school-name" class="form-label">Secondary</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row g-3 education-background-container" data-educational-level="2">
                                                                <div class="col-12">
                                                                    <input type="text" id="secondary-school-name" name="school_name" class="form-control form-control-solid" placeholder="Name of School"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="text" id="secondary-degree-course" name="degree_course" class="form-control form-control-solid" placeholder="Basic Education / Degree / Course"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="period-of-attendance-from" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                        Period of Attendance
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 d-flex align-items-center">
                                                                    <label for="period-of-attendance-from" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                        From:
                                                                    </label>
                                                                    <input type="date" id="secondary-period-of-attendance-from" name="period_of_attendance_from" class="form-control form-control-solid ms-3"/>
                                                                </div>
                                                                <div class="col-md-6 d-flex align-items-center">
                                                                    <label for="period-of-attendance-to" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                        To:
                                                                    </label>
                                                                    <input type="date" id="secondary-period-of-attendance-to" name="period_of_attendance_to" class="form-control form-control-solid ms-3"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="text" id="secondary-highest-level" name="highest_level" class="form-control form-control-solid" placeholder="Highest Level / Units Earned (if not graduated)"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="text" id="secondary-year-graduated" name="year_graduated" class="form-control form-control-solid mask-number" placeholder="Year Graduated"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="text" id="secondary-scholarship-academic-honors-received" name="scholarship_academic_honors_received" class="form-control form-control-solid" placeholder="Scholarship / Academic Honors Received"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="separator flex-grow-1 mb-6 separator-dashed"></div>   -->

                                                    <!-- Vocational / Trade Course -->
                                                    <!-- <div class="row mb-6">
                                                        <div class="col-md-4 pt-2">
                                                            <label for="vocational-school-name" class="form-label">Vocational / Trade Course</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row g-3 education-background-container" data-educational-level="3">
                                                                <div class="col-12">
                                                                    <input type="text" id="vocational-school-name" name="school_name" class="form-control form-control-solid" placeholder="Name of School"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="text" id="vocational-degree_course" name="degree_course" class="form-control form-control-solid" placeholder="Basic Education / Degree / Course"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="vocational-period-of-attendance-from" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                        Period of Attendance
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 d-flex align-items-center">
                                                                    <label for="vocational-period-of-attendance-from" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                        From:
                                                                    </label>
                                                                    <input type="date" id="vocational-period-of-attendance-from" name="period_of_attendance_from" class="form-control form-control-solid ms-3"/>
                                                                </div>
                                                                <div class="col-md-6 d-flex align-items-center">
                                                                    <label for="vocational-period-of-attendance-to" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                        To:
                                                                    </label>
                                                                    <input type="date" id="vocational-period-of-attendance-to" name="period_of_attendance_to" class="form-control form-control-solid ms-3"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="text" id="vocational-highest-level" name="highest_level" class="form-control form-control-solid" placeholder="Highest Level / Units Earned (if not graduated)"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="text" id="vocational-year-graduated" name="year_graduated" class="form-control form-control-solid mask-number" placeholder="Year Graduated"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="text" id="vocational-scholarship-academic-honors-received" name="scholarship_academic_honors_received" class="form-control form-control-solid" placeholder="Scholarship / Academic Honors Received"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="separator flex-grow-1 mb-6 separator-dashed"></div>   -->
                                                    
                                                    <!-- College -->
                                                    <!-- <div class="row mb-6">
                                                        <div class="col-md-4 pt-2">
                                                            <label for="college-school-name" class="form-label">College</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row g-3 education-background-container" data-educational-level="4">
                                                                <div class="col-12">
                                                                    <input type="text" id="college-school-name" name="school_name" class="form-control form-control-solid" placeholder="Name of School"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="text" id="college-degree_course" name="degree_course" class="form-control form-control-solid" placeholder="Basic Education / Degree / Course"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="college-period-of-attendance-from" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                        Period of Attendance
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 d-flex align-items-center">
                                                                    <label for="college-period-of-attendance-from" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                        From:
                                                                    </label>
                                                                    <input type="date" id="college-period-of-attendance-from" name="period_of_attendance_from" class="form-control form-control-solid ms-3"/>
                                                                </div>
                                                                <div class="col-md-6 d-flex align-items-center">
                                                                    <label for="college-period-of-attendance-to" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                        To:
                                                                    </label>
                                                                    <input type="date" id="college-period-of-attendance-to" name="period_of_attendance_to" class="form-control form-control-solid ms-3"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="text" id="college-highest-level" name="highest_level" class="form-control form-control-solid" placeholder="Highest Level / Units Earned (if not graduated)"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="text" id="college-year-graduated" name="year_graduated" class="form-control form-control-solid mask-number" placeholder="Year Graduated"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="text" id="college-scholarship-academic-honors-received" name="scholarship_academic_honors_received" class="form-control form-control-solid" placeholder="Scholarship / Academic Honors Received"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="separator flex-grow-1 mb-6 separator-dashed"></div>   -->

                                                    <!-- Graduate Studies -->
                                                    <!-- <div class="row mb-6">
                                                        <div class="col-md-4 pt-2">
                                                            <label for="graduate-studies-school-name" class="form-label">Graduate Studies</label>
                                                        </div>
                                                        <div class="col-md-8">
                                                            <div class="row g-3 education-background-container" data-educational-level="5">
                                                                <div class="col-12">
                                                                    <input type="text" id="graduate-studies-school-name" name="school_name" class="form-control form-control-solid" placeholder="Name of School"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="text" id="graduate-studies-degree_course" name="degree_course" class="form-control form-control-solid" placeholder="Basic Education / Degree / Course"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <label for="graduate-studies-period-of-attendance-from" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                        Period of Attendance
                                                                    </label>
                                                                </div>
                                                                <div class="col-md-6 d-flex align-items-center">
                                                                    <label for="graduate-studies-period-of-attendance-from" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                        From:
                                                                    </label>
                                                                    <input type="date" id="graduate-studies-period-of-attendance-from" name="period_of_attendance_from" class="form-control form-control-solid ms-3"/>
                                                                </div>
                                                                <div class="col-md-6 d-flex align-items-center">
                                                                    <label for="graduate-studies-period-of-attendance-to" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                        To:
                                                                    </label>
                                                                    <input type="date" id="graduate-studies-period-of-attendance-to" name="period_of_attendance_to" class="form-control form-control-solid ms-3"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="text" id="graduate-studies-highest-level" name="highest_level" class="form-control form-control-solid" placeholder="Highest Level / Units Earned (if not graduated)"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="text" id="graduate-studies-year-graduated" name="year_graduated" class="form-control form-control-solid mask-number" placeholder="Year Graduated"/>
                                                                </div>
                                                                <div class="col-12">
                                                                    <input type="text" id="graduate-studies-scholarship-academic-honors-received" name="scholarship_academic_honors_received" class="form-control form-control-solid" placeholder="Scholarship / Academic Honors Received"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                <!--  -->
                                            </form>
                                        </div>

                                        <div class="flex-column h-100 justify-content-between" data-kt-stepper-element="content">
                                            <!-- Civil Service Eligibility -->
                                            <form class="ps-3 has-form-repeater" id="eligibility-form">
                                                <div class="text-center border-bottom pb-4 mb-6">
                                                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Civil Service Eligibility</h1>
                                                    <p class="text-gray-600 m-0">Record employee's various eligibilities.</p>
                                                </div>

                                                <!-- Civil Service Eligibility -->
                                                <div class="row mb-6">
                                                    <div class="col-12 pt-2">
                                                        <label for="children" class="form-label">Civil Service Eligibility</label>
                                                    </div>
                                                    <div class="col-12 position-relative">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead class="border">
                                                                    <tr class=" fs-7 text-gray-800">
                                                                        <th class="p-2 bg-light required min-w-200px w-lg-500px" rowspan="2">Career Service/ RA 1080 (Board/ BAR) Under Special Laws/ CES/ CSEE Barangay Eligibility / Driver's License</th>
                                                                        <th class="p-2 bg-light" rowspan="2">Rating <br> (If Applicable)</th>
                                                                        <th class="p-2 bg-light required" rowspan="2">Date of Examination / Conferment</th>
                                                                        <th class="p-2 bg-light required" rowspan="2">Place of Examination / Conferment</th>
                                                                        <th class="p-2 bg-light" colspan="2" class="text-center">License (If applicable)</th>
                                                                        <th class="p-2 bg-light" rowspan="2"></th>
                                                                    </tr>
                                                                    <tr class="fs-7 text-gray-800">
                                                                        <th class="p-2 bg-light">Number</th>
                                                                        <th class="p-2 bg-light">Date of Validity</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="civil-service-eligibility-form-repeater-container" class="">
                                                                    <?php if($is_edit && $employee_eligibilities):?>
                                                                        <?php foreach ($employee_eligibilities as $key => $eligibility):?>
                                                                        <tr class="form-repeater-container border">
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="eligibility" value="<?=$eligibility->eligibility?>" data-required="" placeholder="Career Service/ RA 1080 (Board/ Bar) Under Special Laws/ CES/ CSEE Barangay Eligibility / Driver's License"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="rating" value="<?=$eligibility->rating?>" placeholder="Rating"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="date" class="form-control form-control-sm form-control-transparent rounded-0" data-name="examination_date" value="<?=$eligibility->examination_date?>" data-required=""/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="examination_place" value="<?=$eligibility->examination_place?>" data-required="" placeholder="Place of Examination / Conferment"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="license_number" value="<?=$eligibility->license_number?>" placeholder="License Number"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="date" class="form-control form-control-sm form-control-transparent rounded-0" data-name="date_of_validity" value="<?=$eligibility->date_of_validity?>" data-label="Date of Validity"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <button type="button" href="#" class="btn btn-sm btn-icon btn-light-danger form-repeater-remove rounded-0">
                                                                                    <i class="bi bi-trash fs-5"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <?php endforeach;?>
                                                                    <?php else:?>
                                                                        <tr class="form-repeater-container border">
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="eligibility" data-required="" placeholder="Career Service/ RA 1080 (Board/ Bar) Under Special Laws/ CES/ CSEE Barangay Eligibility / Driver's License"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="rating" placeholder="Rating"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="date" class="form-control form-control-sm form-control-transparent rounded-0" data-name="examination_date" data-required=""/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="examination_place" data-required="" placeholder="Place of Examination / Conferment"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="license_number" placeholder="License Number"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="date" class="form-control form-control-sm form-control-transparent rounded-0" data-name="date_of_validity" data-label="Date of Validity"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <button type="button" href="#" class="btn btn-sm btn-icon btn-light-danger form-repeater-remove rounded-0">
                                                                                    <i class="bi bi-trash fs-5"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endif;?>
                                                                    <tr class="border-0">
                                                                        <td colspan="6" class="border-0 h-50px">
                                                                            <button type="button" class="btn btn-sm btn-light-primary btn-outline btn-outline-primary position-absolute end-0 me-3 form-repeater-add">Add a Civil Service Eligibility</button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                            <!-- Tip -->
                                            <div class="alert alert-primary d-flex align-items-center p-5">
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx text-primary me-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M22.9558 10.2848L21.3341 8.6398C21.221 8.52901 21.1317 8.39637 21.0715 8.24996C21.0114 8.10354 20.9816 7.94641 20.9841 7.78814V5.4548C20.9826 5.13514 20.9179 4.81893 20.7938 4.52433C20.6697 4.22973 20.4887 3.96255 20.261 3.73814C20.0333 3.51374 19.7636 3.33652 19.4672 3.21668C19.1709 3.09684 18.8538 3.03673 18.5341 3.0398H16.2008C16.0425 3.04229 15.8854 3.01255 15.739 2.95238C15.5925 2.89221 15.4599 2.80287 15.3491 2.6898L13.7158 1.0448C13.2608 0.590273 12.6439 0.334961 12.0008 0.334961C11.3576 0.334961 10.7408 0.590273 10.2858 1.0448L8.64078 2.66647C8.52999 2.77954 8.39735 2.86887 8.25094 2.92904C8.10452 2.98922 7.94739 3.01896 7.78911 3.01647H5.45578C5.13612 3.01799 4.8199 3.08266 4.5253 3.20675C4.23071 3.33085 3.96353 3.51193 3.73912 3.73959C3.51471 3.96724 3.3375 4.237 3.21766 4.53335C3.09781 4.82971 3.0377 5.14682 3.04078 5.46647V7.7998C3.04327 7.95808 3.01353 8.11521 2.95335 8.26163C2.89318 8.40804 2.80385 8.54068 2.69078 8.65147L1.04578 10.2848C0.591249 10.7398 0.335938 11.3567 0.335938 11.9998C0.335938 12.6429 0.591249 13.2598 1.04578 13.7148L2.66745 15.3598C2.78051 15.4706 2.86985 15.6032 2.93002 15.7496C2.99019 15.8961 3.01994 16.0532 3.01745 16.2115V18.5448C3.01897 18.8645 3.08363 19.1807 3.20773 19.4753C3.33182 19.7699 3.5129 20.0371 3.74056 20.2615C3.96822 20.4859 4.23798 20.6631 4.53433 20.7829C4.83068 20.9028 5.14779 20.9629 5.46745 20.9598H7.80078C7.95906 20.9573 8.11619 20.9871 8.2626 21.0472C8.40902 21.1074 8.54166 21.1967 8.65245 21.3098L10.2974 22.9548C10.7525 23.4093 11.3693 23.6646 12.0124 23.6646C12.6556 23.6646 13.2724 23.4093 13.7274 22.9548L15.3608 21.3331C15.4716 21.2201 15.6042 21.1307 15.7506 21.0706C15.897 21.0104 16.0542 20.9806 16.2124 20.9831H18.5458C19.1894 20.9831 19.8066 20.7275 20.2617 20.2724C20.7168 19.8173 20.9724 19.2001 20.9724 18.5565V16.2231C20.97 16.0649 20.9997 15.9077 21.0599 15.7613C21.12 15.6149 21.2094 15.4823 21.3224 15.3715L22.9674 13.7265C23.1935 13.5002 23.3726 13.2314 23.4944 12.9357C23.6162 12.64 23.6784 12.3231 23.6773 12.0032C23.6762 11.6834 23.6119 11.3669 23.4881 11.072C23.3643 10.7771 23.1834 10.5095 22.9558 10.2848Z" fill="currentColor"/>
                                                        <path d="M12.0039 15.4998C11.7012 15.4998 11.4109 15.38 11.1969 15.1668C10.9829 14.9535 10.8626 14.6643 10.8626 14.3627V13.9382C10.8467 13.2884 10.9994 12.6456 11.306 12.0718C11.6126 11.4981 12.0627 11.013 12.6126 10.6634C12.7969 10.561 12.9505 10.4114 13.0575 10.2302C13.1645 10.049 13.221 9.84266 13.2213 9.63242C13.2213 9.31073 13.0931 9.00223 12.8648 8.77476C12.6365 8.5473 12.3268 8.41951 12.0039 8.41951C11.6811 8.41951 11.3714 8.5473 11.1431 8.77476C10.9148 9.00223 10.7865 9.31073 10.7865 9.63242C10.7865 9.93399 10.6663 10.2232 10.4523 10.4365C10.2382 10.6497 9.94792 10.7695 9.64522 10.7695C9.34253 10.7695 9.05223 10.6497 8.83819 10.4365C8.62415 10.2232 8.50391 9.93399 8.50391 9.63242C8.50763 9.02196 8.67214 8.42317 8.98099 7.89592C9.28984 7.36868 9.7322 6.93145 10.2639 6.62796C10.7955 6.32447 11.3978 6.16535 12.0105 6.16651C12.6233 6.16767 13.225 6.32908 13.7554 6.63458C14.2859 6.94009 14.7266 7.37899 15.0335 7.9074C15.3403 8.43582 15.5025 9.03522 15.5039 9.64569C15.5053 10.2562 15.3458 10.8563 15.0414 11.3861C14.7369 11.9159 14.2983 12.3568 13.7692 12.6647C13.5645 12.8132 13.4003 13.0101 13.2913 13.2378C13.1824 13.4655 13.1322 13.7167 13.1453 13.9685V14.3931C13.1373 14.6894 13.0136 14.9708 12.8004 15.1776C12.5872 15.3843 12.3014 15.4999 12.0039 15.4998Z" fill="currentColor"/>
                                                        <path d="M12.0026 18.9998C12.6469 18.9998 13.1693 18.4775 13.1693 17.8332C13.1693 17.1888 12.6469 16.6665 12.0026 16.6665C11.3583 16.6665 10.8359 17.1888 10.8359 17.8332C10.8359 18.4775 11.3583 18.9998 12.0026 18.9998Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <div class="d-flex flex-column">
                                                    <h5 class="mb-1 text-dark">Tip</h5>
                                                    <span>You may skip this step if you are yet to qualify for an eligibility.</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex-column h-100 justify-content-between" data-kt-stepper-element="content">
                                            <!-- Work Experience -->
                                            <form class="ps-3 has-form-repeater" id="work-experience-form">
                                                <div class="text-center border-bottom pb-4 mb-6">
                                                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Work Experience</h1>
                                                    <p class="text-gray-600 m-0">Enumarate previous work exeprience details.</p>
                                                </div>

                                                <!-- Work Experience -->
                                                <div class="row mb-6">
                                                    <div class="col-12 pt-2">
                                                        <label for="children" class="form-label">Work Experience</label>
                                                    </div>
                                                    <div class="col-12 position-relative">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead class="border">
                                                                    <tr class=" fs-7 text-gray-800">
                                                                        <th class="p-2 bg-light required" colspan="2" class="text-center">Inclusive Dates of Attendance</th>
                                                                        <th class="p-2 bg-light required" rowspan="2">Position Title <br> (Write in full/Do not abbreviate) </th>
                                                                        <th class="p-2 bg-light required" rowspan="2">Department / Agency / Office / Company</th>
                                                                        <th class="p-2 bg-light required" rowspan="2">Monthly Salary</th>
                                                                        <th class="p-2 bg-light" rowspan="2">Salary/ Job/ Pay Grade <span class="text-truncate">(if applicable)</span> & Step <span class="text-truncate">(Format "00-0")</span> / Increment</th>
                                                                        <th class="p-2 bg-light" rowspan="2">Status of Appointment</th>
                                                                        <th class="p-2 bg-light required" rowspan="2">Gov't Service?</th>
                                                                        <th class="p-2 bg-light" rowspan="2"></th>
                                                                    </tr>
                                                                    <tr class=" fs-7 text-gray-800">
                                                                        <th class="p-2 bg-light">From</th>
                                                                        <th class="p-2 bg-light">To</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="work-experience-form-repeater-container" class="">
                                                                    <?php if($is_edit):?>
                                                                        <?php if($employee_work_experiences):?>
                                                                        <?php foreach ($employee_work_experiences as $key => $work_experience):?>
                                                                        <tr class="form-repeater-container border">
                                                                            <td class="p-0">
                                                                                <input type="date" class="form-control form-control-sm form-control-transparent rounded-0" data-name="inclusive_dates_from" value="<?=$work_experience->inclusive_dates_from?>" data-required=""/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="date" class="form-control form-control-sm form-control-transparent rounded-0" data-name="inclusive_dates_to" value="<?=$work_experience->inclusive_dates_to?>" data-required=""/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0 w-200px" data-name="position_title" value="<?=$work_experience->position_title?>" data-required="" placeholder="Position Title"/>    
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0 w-200px" data-name="department_agency_office_company" value="<?=$work_experience->department_agency_office_company?>" data-required="" placeholder="Department / Agency / Office / Company"/>    
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="number" class="form-control form-control-sm form-control-transparent rounded-0 w-125px" data-name="monthly_salary" value="<?=$work_experience->monthly_salary?>" data-required="" placeholder="Monthly Salary"/>    
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="salary_job_pay_grade" value="<?=$work_experience->salary_job_pay_grade?>" placeholder="Salary/ Job/ Pay Grade (if applicable) & Step (Format '00-0') / Increment"/>    
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="appointment_status" value="<?=$work_experience->appointment_status?>" placeholder="Status of Appointment"/>    
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <select class="form-select form-select-sm form-select-transparent min-w-75px" data-name="is_govt_service" data-required="">
                                                                                    <option value="" disabled></option>
                                                                                    <option value="Y" <?=$work_experience->is_govt_service == "Y" ? "selected" : ""?>>Yes</option>
                                                                                    <option value="N" <?=$work_experience->is_govt_service == "N" ? "selected" : ""?>>No</option>
                                                                                </select>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <button type="button" href="#" class="btn btn-sm btn-icon btn-light-danger form-repeater-remove rounded-0">
                                                                                    <i class="bi bi-trash fs-5"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <?php endforeach;?>
                                                                        <?php endif;?>
                                                                    <?php else:?>
                                                                        <tr class="form-repeater-container border">
                                                                            <td class="p-0">
                                                                                <input type="date" class="form-control form-control-sm form-control-transparent rounded-0" data-name="inclusive_dates_from" data-required=""/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="date" class="form-control form-control-sm form-control-transparent rounded-0" data-name="inclusive_dates_to" data-required=""/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0 w-200px" data-name="position_title" data-required="" placeholder="Position Title"/>    
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0 w-200px" data-name="department_agency_office_company" data-required="" placeholder="Department / Agency / Office / Company"/>    
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="number" class="form-control form-control-sm form-control-transparent rounded-0 w-125px" data-name="monthly_salary" data-required="" placeholder="Monthly Salary"/>    
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="salary_job_pay_grade" placeholder="Salary/ Job/ Pay Grade (if applicable) & Step (Format '00-0') / Increment"/>    
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="appointment_status" placeholder="Status of Appointment"/>    
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <select class="form-select form-select-sm form-select-transparent min-w-75px" data-name="is_govt_service" data-required="">
                                                                                    <option value="" selected disabled></option>
                                                                                    <option value="Y">Yes</option>
                                                                                    <option value="N">No</option>
                                                                                </select>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <button type="button" href="#" class="btn btn-sm btn-icon btn-light-danger form-repeater-remove rounded-0">
                                                                                    <i class="bi bi-trash fs-5"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endif;?>
                                                                    <tr class="border-0">
                                                                        <td colspan="9" class="border-0 h-50px">
                                                                            <button type="button" class="btn btn-sm btn-light-primary btn-outline btn-outline-primary position-absolute end-0 me-3 form-repeater-add">Add a Work Experience</button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- Tip -->
                                            <div class="alert alert-primary d-flex align-items-center p-5">
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx text-primary me-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M22.9558 10.2848L21.3341 8.6398C21.221 8.52901 21.1317 8.39637 21.0715 8.24996C21.0114 8.10354 20.9816 7.94641 20.9841 7.78814V5.4548C20.9826 5.13514 20.9179 4.81893 20.7938 4.52433C20.6697 4.22973 20.4887 3.96255 20.261 3.73814C20.0333 3.51374 19.7636 3.33652 19.4672 3.21668C19.1709 3.09684 18.8538 3.03673 18.5341 3.0398H16.2008C16.0425 3.04229 15.8854 3.01255 15.739 2.95238C15.5925 2.89221 15.4599 2.80287 15.3491 2.6898L13.7158 1.0448C13.2608 0.590273 12.6439 0.334961 12.0008 0.334961C11.3576 0.334961 10.7408 0.590273 10.2858 1.0448L8.64078 2.66647C8.52999 2.77954 8.39735 2.86887 8.25094 2.92904C8.10452 2.98922 7.94739 3.01896 7.78911 3.01647H5.45578C5.13612 3.01799 4.8199 3.08266 4.5253 3.20675C4.23071 3.33085 3.96353 3.51193 3.73912 3.73959C3.51471 3.96724 3.3375 4.237 3.21766 4.53335C3.09781 4.82971 3.0377 5.14682 3.04078 5.46647V7.7998C3.04327 7.95808 3.01353 8.11521 2.95335 8.26163C2.89318 8.40804 2.80385 8.54068 2.69078 8.65147L1.04578 10.2848C0.591249 10.7398 0.335938 11.3567 0.335938 11.9998C0.335938 12.6429 0.591249 13.2598 1.04578 13.7148L2.66745 15.3598C2.78051 15.4706 2.86985 15.6032 2.93002 15.7496C2.99019 15.8961 3.01994 16.0532 3.01745 16.2115V18.5448C3.01897 18.8645 3.08363 19.1807 3.20773 19.4753C3.33182 19.7699 3.5129 20.0371 3.74056 20.2615C3.96822 20.4859 4.23798 20.6631 4.53433 20.7829C4.83068 20.9028 5.14779 20.9629 5.46745 20.9598H7.80078C7.95906 20.9573 8.11619 20.9871 8.2626 21.0472C8.40902 21.1074 8.54166 21.1967 8.65245 21.3098L10.2974 22.9548C10.7525 23.4093 11.3693 23.6646 12.0124 23.6646C12.6556 23.6646 13.2724 23.4093 13.7274 22.9548L15.3608 21.3331C15.4716 21.2201 15.6042 21.1307 15.7506 21.0706C15.897 21.0104 16.0542 20.9806 16.2124 20.9831H18.5458C19.1894 20.9831 19.8066 20.7275 20.2617 20.2724C20.7168 19.8173 20.9724 19.2001 20.9724 18.5565V16.2231C20.97 16.0649 20.9997 15.9077 21.0599 15.7613C21.12 15.6149 21.2094 15.4823 21.3224 15.3715L22.9674 13.7265C23.1935 13.5002 23.3726 13.2314 23.4944 12.9357C23.6162 12.64 23.6784 12.3231 23.6773 12.0032C23.6762 11.6834 23.6119 11.3669 23.4881 11.072C23.3643 10.7771 23.1834 10.5095 22.9558 10.2848Z" fill="currentColor"/>
                                                        <path d="M12.0039 15.4998C11.7012 15.4998 11.4109 15.38 11.1969 15.1668C10.9829 14.9535 10.8626 14.6643 10.8626 14.3627V13.9382C10.8467 13.2884 10.9994 12.6456 11.306 12.0718C11.6126 11.4981 12.0627 11.013 12.6126 10.6634C12.7969 10.561 12.9505 10.4114 13.0575 10.2302C13.1645 10.049 13.221 9.84266 13.2213 9.63242C13.2213 9.31073 13.0931 9.00223 12.8648 8.77476C12.6365 8.5473 12.3268 8.41951 12.0039 8.41951C11.6811 8.41951 11.3714 8.5473 11.1431 8.77476C10.9148 9.00223 10.7865 9.31073 10.7865 9.63242C10.7865 9.93399 10.6663 10.2232 10.4523 10.4365C10.2382 10.6497 9.94792 10.7695 9.64522 10.7695C9.34253 10.7695 9.05223 10.6497 8.83819 10.4365C8.62415 10.2232 8.50391 9.93399 8.50391 9.63242C8.50763 9.02196 8.67214 8.42317 8.98099 7.89592C9.28984 7.36868 9.7322 6.93145 10.2639 6.62796C10.7955 6.32447 11.3978 6.16535 12.0105 6.16651C12.6233 6.16767 13.225 6.32908 13.7554 6.63458C14.2859 6.94009 14.7266 7.37899 15.0335 7.9074C15.3403 8.43582 15.5025 9.03522 15.5039 9.64569C15.5053 10.2562 15.3458 10.8563 15.0414 11.3861C14.7369 11.9159 14.2983 12.3568 13.7692 12.6647C13.5645 12.8132 13.4003 13.0101 13.2913 13.2378C13.1824 13.4655 13.1322 13.7167 13.1453 13.9685V14.3931C13.1373 14.6894 13.0136 14.9708 12.8004 15.1776C12.5872 15.3843 12.3014 15.4999 12.0039 15.4998Z" fill="currentColor"/>
                                                        <path d="M12.0026 18.9998C12.6469 18.9998 13.1693 18.4775 13.1693 17.8332C13.1693 17.1888 12.6469 16.6665 12.0026 16.6665C11.3583 16.6665 10.8359 17.1888 10.8359 17.8332C10.8359 18.4775 11.3583 18.9998 12.0026 18.9998Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <div class="d-flex flex-column">
                                                    <h5 class="mb-1 text-dark">Tip</h5>
                                                    <span>You may skip this step if you are yet to have any previous work experience.</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex-column h-100 justify-content-between" data-kt-stepper-element="content">
                                            <!-- Voluntary Work or Involvement in Civic / Non-Government / People / Voluntary Organization(s) -->
                                            <form class="ps-3 has-form-repeater" id="voluntary-work-form">
                                                <div class="text-center border-bottom pb-4 mb-6">
                                                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Voluntary Work or Involvement in Civic / Non-Government / People / Voluntary Organization(s)</h1>
                                                    <p class="text-gray-600 m-0">List employee's involvement on voluntary and/or charity activities</p>
                                                </div>
                                                <!-- Voluntary Work -->
                                                <div class="row mb-6">
                                                    <div class="col-12 pt-2">
                                                        <label for="children" class="form-label">Voluntary Work or Involvement in Civic / Non-Government / People / Voluntary Organization(s)</label>
                                                    </div>
                                                    <div class="col-12 position-relative">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead class="border">
                                                                    <tr class=" fs-7 text-gray-800">
                                                                        <th class="p-2 bg-light required" rowspan="2">Name & Address of Organization</th>
                                                                        <th class="p-2 bg-light required" colspan="2" class="text-center">Inclusive Dates</th>
                                                                        <th class="p-2 bg-light required" rowspan="2">Number of Hours</th>
                                                                        <th class="p-2 bg-light required" rowspan="2">Position / Nature Of Work</th>
                                                                        <th class="p-2 bg-light w-10px" rowspan="2"></th>
                                                                    </tr>
                                                                    <tr class=" fs-7 text-gray-800">
                                                                        <th class="p-2 bg-light">From</th>
                                                                        <th class="p-2 bg-light">To</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="voluntary-work-form-repeater-container" class="">
                                                                    <?php if($is_edit && $employee_voluntary_works):?>
                                                                        <?php foreach ($employee_voluntary_works as $key => $voluntary_work):?>
                                                                        <tr class="form-repeater-container border">
                                                                            <td class="p-0 w-400px">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="organization_name_and_address" value="<?=$voluntary_work->organization_name_and_address?>" data-required="" placeholder="Name & Address of Organization"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="date" class="form-control form-control-sm form-control-transparent rounded-0" data-name="inclusive_dates_from" value="<?=$voluntary_work->inclusive_dates_from?>" data-required=""/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="date" class="form-control form-control-sm form-control-transparent rounded-0" data-name="inclusive_dates_to" value="<?=$voluntary_work->inclusive_dates_to?>" data-required=""/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="number" class="form-control form-control-sm form-control-transparent rounded-0" data-name="number_of_hours" value="<?=$voluntary_work->number_of_hours?>" data-required="" placeholder="Number of Hours" min="0"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="position_nature_of_work" value="<?=$voluntary_work->position_nature_of_work?>" data-required="" placeholder="Position / Nature Of Work"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <button type="button" href="#" class="btn btn-sm btn-icon btn-light-danger form-repeater-remove rounded-0">
                                                                                    <i class="bi bi-trash fs-5"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <?php endforeach;?>
                                                                    <?php else:?>
                                                                        <tr class="form-repeater-container border">
                                                                            <td class="p-0 w-400px">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="organization_name_and_address" data-required="" placeholder="Name & Address of Organization"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="date" class="form-control form-control-sm form-control-transparent rounded-0" data-name="inclusive_dates_from" data-required=""/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="date" class="form-control form-control-sm form-control-transparent rounded-0" data-name="inclusive_dates_to" data-required=""/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="number" class="form-control form-control-sm form-control-transparent rounded-0" data-name="number_of_hours" data-required="" placeholder="Number of Hours" min="0"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="position_nature_of_work" data-required="" placeholder="Position / Nature Of Work"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <button type="button" href="#" class="btn btn-sm btn-icon btn-light-danger form-repeater-remove rounded-0">
                                                                                    <i class="bi bi-trash fs-5"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endif;?>
                                                                    <tr class="border-0">
                                                                        <td colspan="6" class="border-0 h-50px">
                                                                            <button type="button" class="btn btn-sm btn-light-primary btn-outline btn-outline-primary position-absolute end-0 me-3 form-repeater-add">Add a Voluntary Work & Organization(s)</button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                            <!-- Tip -->
                                            <div class="alert alert-primary d-flex align-items-center p-5">
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx text-primary me-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M22.9558 10.2848L21.3341 8.6398C21.221 8.52901 21.1317 8.39637 21.0715 8.24996C21.0114 8.10354 20.9816 7.94641 20.9841 7.78814V5.4548C20.9826 5.13514 20.9179 4.81893 20.7938 4.52433C20.6697 4.22973 20.4887 3.96255 20.261 3.73814C20.0333 3.51374 19.7636 3.33652 19.4672 3.21668C19.1709 3.09684 18.8538 3.03673 18.5341 3.0398H16.2008C16.0425 3.04229 15.8854 3.01255 15.739 2.95238C15.5925 2.89221 15.4599 2.80287 15.3491 2.6898L13.7158 1.0448C13.2608 0.590273 12.6439 0.334961 12.0008 0.334961C11.3576 0.334961 10.7408 0.590273 10.2858 1.0448L8.64078 2.66647C8.52999 2.77954 8.39735 2.86887 8.25094 2.92904C8.10452 2.98922 7.94739 3.01896 7.78911 3.01647H5.45578C5.13612 3.01799 4.8199 3.08266 4.5253 3.20675C4.23071 3.33085 3.96353 3.51193 3.73912 3.73959C3.51471 3.96724 3.3375 4.237 3.21766 4.53335C3.09781 4.82971 3.0377 5.14682 3.04078 5.46647V7.7998C3.04327 7.95808 3.01353 8.11521 2.95335 8.26163C2.89318 8.40804 2.80385 8.54068 2.69078 8.65147L1.04578 10.2848C0.591249 10.7398 0.335938 11.3567 0.335938 11.9998C0.335938 12.6429 0.591249 13.2598 1.04578 13.7148L2.66745 15.3598C2.78051 15.4706 2.86985 15.6032 2.93002 15.7496C2.99019 15.8961 3.01994 16.0532 3.01745 16.2115V18.5448C3.01897 18.8645 3.08363 19.1807 3.20773 19.4753C3.33182 19.7699 3.5129 20.0371 3.74056 20.2615C3.96822 20.4859 4.23798 20.6631 4.53433 20.7829C4.83068 20.9028 5.14779 20.9629 5.46745 20.9598H7.80078C7.95906 20.9573 8.11619 20.9871 8.2626 21.0472C8.40902 21.1074 8.54166 21.1967 8.65245 21.3098L10.2974 22.9548C10.7525 23.4093 11.3693 23.6646 12.0124 23.6646C12.6556 23.6646 13.2724 23.4093 13.7274 22.9548L15.3608 21.3331C15.4716 21.2201 15.6042 21.1307 15.7506 21.0706C15.897 21.0104 16.0542 20.9806 16.2124 20.9831H18.5458C19.1894 20.9831 19.8066 20.7275 20.2617 20.2724C20.7168 19.8173 20.9724 19.2001 20.9724 18.5565V16.2231C20.97 16.0649 20.9997 15.9077 21.0599 15.7613C21.12 15.6149 21.2094 15.4823 21.3224 15.3715L22.9674 13.7265C23.1935 13.5002 23.3726 13.2314 23.4944 12.9357C23.6162 12.64 23.6784 12.3231 23.6773 12.0032C23.6762 11.6834 23.6119 11.3669 23.4881 11.072C23.3643 10.7771 23.1834 10.5095 22.9558 10.2848Z" fill="currentColor"/>
                                                        <path d="M12.0039 15.4998C11.7012 15.4998 11.4109 15.38 11.1969 15.1668C10.9829 14.9535 10.8626 14.6643 10.8626 14.3627V13.9382C10.8467 13.2884 10.9994 12.6456 11.306 12.0718C11.6126 11.4981 12.0627 11.013 12.6126 10.6634C12.7969 10.561 12.9505 10.4114 13.0575 10.2302C13.1645 10.049 13.221 9.84266 13.2213 9.63242C13.2213 9.31073 13.0931 9.00223 12.8648 8.77476C12.6365 8.5473 12.3268 8.41951 12.0039 8.41951C11.6811 8.41951 11.3714 8.5473 11.1431 8.77476C10.9148 9.00223 10.7865 9.31073 10.7865 9.63242C10.7865 9.93399 10.6663 10.2232 10.4523 10.4365C10.2382 10.6497 9.94792 10.7695 9.64522 10.7695C9.34253 10.7695 9.05223 10.6497 8.83819 10.4365C8.62415 10.2232 8.50391 9.93399 8.50391 9.63242C8.50763 9.02196 8.67214 8.42317 8.98099 7.89592C9.28984 7.36868 9.7322 6.93145 10.2639 6.62796C10.7955 6.32447 11.3978 6.16535 12.0105 6.16651C12.6233 6.16767 13.225 6.32908 13.7554 6.63458C14.2859 6.94009 14.7266 7.37899 15.0335 7.9074C15.3403 8.43582 15.5025 9.03522 15.5039 9.64569C15.5053 10.2562 15.3458 10.8563 15.0414 11.3861C14.7369 11.9159 14.2983 12.3568 13.7692 12.6647C13.5645 12.8132 13.4003 13.0101 13.2913 13.2378C13.1824 13.4655 13.1322 13.7167 13.1453 13.9685V14.3931C13.1373 14.6894 13.0136 14.9708 12.8004 15.1776C12.5872 15.3843 12.3014 15.4999 12.0039 15.4998Z" fill="currentColor"/>
                                                        <path d="M12.0026 18.9998C12.6469 18.9998 13.1693 18.4775 13.1693 17.8332C13.1693 17.1888 12.6469 16.6665 12.0026 16.6665C11.3583 16.6665 10.8359 17.1888 10.8359 17.8332C10.8359 18.4775 11.3583 18.9998 12.0026 18.9998Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <div class="d-flex flex-column">
                                                    <h5 class="mb-1 text-dark">Tip</h5>
                                                    <span>You may skip this step if you have not been involved on any voluntary activity.</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex-column h-100 justify-content-between" data-kt-stepper-element="content">
                                            <!-- Learning and Development (L&D) Interventions/Training Programs Attended -->
                                            <form class="ps-3 has-form-repeater" id="training-program-form">
                                                <div class="text-center border-bottom pb-4 mb-6">
                                                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Learning and Development (L&D) Interventions/Training Programs Attended</h1>
                                                    <p class="text-gray-600 m-0">Particularize training programs that are previously attended.</p>
                                                </div>

                                                <!-- Training Programs -->
                                                <div class="row mb-6">
                                                    <div class="col-12 pt-2">
                                                        <label for="children" class="form-label">Learning and Development (L&D) Interventions/Training Programs Attended </label>
                                                    </div>
                                                    <div class="col-12 position-relative">
                                                        <div class="table-responsive">
                                                            <table class="table table-bordered">
                                                                <thead class="border">
                                                                    <tr class=" fs-7 text-gray-800">
                                                                        <th class="p-2 bg-light required" rowspan="2">Title of Learning & Development Interventions/Training Programs</th>
                                                                        <th class="p-2 bg-light required" colspan="2" class="text-center">Inclusive Dates of Attendance</th>
                                                                        <th class="p-2 bg-light required" rowspan="2">Number of Hours</th>
                                                                        <th class="p-2 bg-light required" rowspan="2">Type of LD ( Managerial/ Supervisory/ Technical/etc)</th>
                                                                        <th class="p-2 bg-light required" rowspan="2">Conducted/ Sponsored By</th>
                                                                        <th class="p-2 bg-light" rowspan="2"></th>
                                                                    </tr>
                                                                    <tr class=" fs-7 text-gray-800">
                                                                        <th class="p-2 bg-light">From</th>
                                                                        <th class="p-2 bg-light">To</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody id="training-programs-form-repeater-container" class="">
                                                                    <?php if($is_edit && $employee_attended_trainings):?>
                                                                        <?php foreach ($employee_attended_trainings as $key => $attended_training):?>
                                                                        <tr class="form-repeater-container border">
                                                                            <td class="p-0 w-400px">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="training_program" value="<?=$attended_training->training_program?>" data-required="" data-label="Title of Learning & Development Interventions/Training Programs" placeholder="Title of Learning & Development Interventions/Training Programs"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="date" class="form-control form-control-sm form-control-transparent rounded-0" data-name="inclusive_dates_from" value="<?=$attended_training->inclusive_dates_from?>" data-required="" data-label="Inclusive Dates of Attendance From"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="date" class="form-control form-control-sm form-control-transparent rounded-0" data-name="inclusive_dates_to" value="<?=$attended_training->inclusive_dates_to?>" data-required="" data-label="Inclusive Dates of Attendance To"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="number" class="form-control form-control-sm form-control-transparent rounded-0" data-name="number_of_hours" value="<?=$attended_training->number_of_hours?>" data-required="" data-label="Number of Hours" placeholder="Number of Hours"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="ld_type" value="<?=$attended_training->ld_type?>" data-required="" data-label="Type of LD ( Managerial/ Supervisory/ Technical/etc) " placeholder="Type of LD"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="conducted_sponsored_by" value="<?=$attended_training->conducted_sponsored_by?>" data-required="" data-label="Conducted/ Sponsored By" placeholder="Conducted/ Sponsored By"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <button type="button" href="#" class="btn btn-sm btn-icon btn-light-danger form-repeater-remove rounded-0">
                                                                                    <i class="bi bi-trash fs-5"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <?php endforeach;?>
                                                                    <?php else:?>
                                                                        <tr class="form-repeater-container border">
                                                                            <td class="p-0 w-400px">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="training_program" data-required="" data-label="Title of Learning & Development Interventions/Training Programs" placeholder="Title of Learning & Development Interventions/Training Programs"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="date" class="form-control form-control-sm form-control-transparent rounded-0" data-name="inclusive_dates_from" data-required="" data-label="Inclusive Dates of Attendance From"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="date" class="form-control form-control-sm form-control-transparent rounded-0" data-name="inclusive_dates_to" data-required="" data-label="Inclusive Dates of Attendance To"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="number" class="form-control form-control-sm form-control-transparent rounded-0" data-name="number_of_hours" data-required="" data-label="Number of Hours" placeholder="Number of Hours"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="ld_type" data-required="" data-label="Type of LD ( Managerial/ Supervisory/ Technical/etc) " placeholder="Type of LD"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <input type="text" class="form-control form-control-sm form-control-transparent rounded-0" data-name="conducted_sponsored_by" data-required="" data-label="Conducted/ Sponsored By" placeholder="Conducted/ Sponsored By"/>
                                                                            </td>
                                                                            <td class="p-0">
                                                                                <button type="button" href="#" class="btn btn-sm btn-icon btn-light-danger form-repeater-remove rounded-0">
                                                                                    <i class="bi bi-trash fs-5"></i>
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                    <?php endif;?>
                                                                    <tr class="border-0">
                                                                        <td colspan="7" class="border-0 h-50px">
                                                                            <button type="button" class="btn btn-sm btn-light-primary btn-outline btn-outline-primary position-absolute end-0 me-3 form-repeater-add">Add a Training Program Attended </button>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                            <!-- Tip -->
                                            <div class="alert alert-primary d-flex align-items-center p-5">
                                                <span class="svg-icon svg-icon-muted svg-icon-2hx text-primary me-4">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path opacity="0.3" d="M22.9558 10.2848L21.3341 8.6398C21.221 8.52901 21.1317 8.39637 21.0715 8.24996C21.0114 8.10354 20.9816 7.94641 20.9841 7.78814V5.4548C20.9826 5.13514 20.9179 4.81893 20.7938 4.52433C20.6697 4.22973 20.4887 3.96255 20.261 3.73814C20.0333 3.51374 19.7636 3.33652 19.4672 3.21668C19.1709 3.09684 18.8538 3.03673 18.5341 3.0398H16.2008C16.0425 3.04229 15.8854 3.01255 15.739 2.95238C15.5925 2.89221 15.4599 2.80287 15.3491 2.6898L13.7158 1.0448C13.2608 0.590273 12.6439 0.334961 12.0008 0.334961C11.3576 0.334961 10.7408 0.590273 10.2858 1.0448L8.64078 2.66647C8.52999 2.77954 8.39735 2.86887 8.25094 2.92904C8.10452 2.98922 7.94739 3.01896 7.78911 3.01647H5.45578C5.13612 3.01799 4.8199 3.08266 4.5253 3.20675C4.23071 3.33085 3.96353 3.51193 3.73912 3.73959C3.51471 3.96724 3.3375 4.237 3.21766 4.53335C3.09781 4.82971 3.0377 5.14682 3.04078 5.46647V7.7998C3.04327 7.95808 3.01353 8.11521 2.95335 8.26163C2.89318 8.40804 2.80385 8.54068 2.69078 8.65147L1.04578 10.2848C0.591249 10.7398 0.335938 11.3567 0.335938 11.9998C0.335938 12.6429 0.591249 13.2598 1.04578 13.7148L2.66745 15.3598C2.78051 15.4706 2.86985 15.6032 2.93002 15.7496C2.99019 15.8961 3.01994 16.0532 3.01745 16.2115V18.5448C3.01897 18.8645 3.08363 19.1807 3.20773 19.4753C3.33182 19.7699 3.5129 20.0371 3.74056 20.2615C3.96822 20.4859 4.23798 20.6631 4.53433 20.7829C4.83068 20.9028 5.14779 20.9629 5.46745 20.9598H7.80078C7.95906 20.9573 8.11619 20.9871 8.2626 21.0472C8.40902 21.1074 8.54166 21.1967 8.65245 21.3098L10.2974 22.9548C10.7525 23.4093 11.3693 23.6646 12.0124 23.6646C12.6556 23.6646 13.2724 23.4093 13.7274 22.9548L15.3608 21.3331C15.4716 21.2201 15.6042 21.1307 15.7506 21.0706C15.897 21.0104 16.0542 20.9806 16.2124 20.9831H18.5458C19.1894 20.9831 19.8066 20.7275 20.2617 20.2724C20.7168 19.8173 20.9724 19.2001 20.9724 18.5565V16.2231C20.97 16.0649 20.9997 15.9077 21.0599 15.7613C21.12 15.6149 21.2094 15.4823 21.3224 15.3715L22.9674 13.7265C23.1935 13.5002 23.3726 13.2314 23.4944 12.9357C23.6162 12.64 23.6784 12.3231 23.6773 12.0032C23.6762 11.6834 23.6119 11.3669 23.4881 11.072C23.3643 10.7771 23.1834 10.5095 22.9558 10.2848Z" fill="currentColor"/>
                                                        <path d="M12.0039 15.4998C11.7012 15.4998 11.4109 15.38 11.1969 15.1668C10.9829 14.9535 10.8626 14.6643 10.8626 14.3627V13.9382C10.8467 13.2884 10.9994 12.6456 11.306 12.0718C11.6126 11.4981 12.0627 11.013 12.6126 10.6634C12.7969 10.561 12.9505 10.4114 13.0575 10.2302C13.1645 10.049 13.221 9.84266 13.2213 9.63242C13.2213 9.31073 13.0931 9.00223 12.8648 8.77476C12.6365 8.5473 12.3268 8.41951 12.0039 8.41951C11.6811 8.41951 11.3714 8.5473 11.1431 8.77476C10.9148 9.00223 10.7865 9.31073 10.7865 9.63242C10.7865 9.93399 10.6663 10.2232 10.4523 10.4365C10.2382 10.6497 9.94792 10.7695 9.64522 10.7695C9.34253 10.7695 9.05223 10.6497 8.83819 10.4365C8.62415 10.2232 8.50391 9.93399 8.50391 9.63242C8.50763 9.02196 8.67214 8.42317 8.98099 7.89592C9.28984 7.36868 9.7322 6.93145 10.2639 6.62796C10.7955 6.32447 11.3978 6.16535 12.0105 6.16651C12.6233 6.16767 13.225 6.32908 13.7554 6.63458C14.2859 6.94009 14.7266 7.37899 15.0335 7.9074C15.3403 8.43582 15.5025 9.03522 15.5039 9.64569C15.5053 10.2562 15.3458 10.8563 15.0414 11.3861C14.7369 11.9159 14.2983 12.3568 13.7692 12.6647C13.5645 12.8132 13.4003 13.0101 13.2913 13.2378C13.1824 13.4655 13.1322 13.7167 13.1453 13.9685V14.3931C13.1373 14.6894 13.0136 14.9708 12.8004 15.1776C12.5872 15.3843 12.3014 15.4999 12.0039 15.4998Z" fill="currentColor"/>
                                                        <path d="M12.0026 18.9998C12.6469 18.9998 13.1693 18.4775 13.1693 17.8332C13.1693 17.1888 12.6469 16.6665 12.0026 16.6665C11.3583 16.6665 10.8359 17.1888 10.8359 17.8332C10.8359 18.4775 11.3583 18.9998 12.0026 18.9998Z" fill="currentColor"/>
                                                    </svg>
                                                </span>
                                                <div class="d-flex flex-column">
                                                    <h5 class="mb-1 text-dark">Tip</h5>
                                                    <span>You may skip this step if you have yet to attend to any training program.</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="flex-column h-100 justify-content-between" data-kt-stepper-element="content">
                                            <!-- Other Information -->
                                            <form class="ps-3 has-form-repeater" id="other-information-form">
                                                <div class="text-center border-bottom pb-4 mb-6">
                                                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Other Information</h1>
                                                    <p class="text-gray-600 m-0">List miscellaneous information and answer the questions with utmost honesty.</p>
                                                </div>
                                                
                                                <!-- Special Skills and Hobbies -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="special-skills-and-hobbies" class="form-label">Special Skills and Hobbies</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div id="special-skills-and-hobbies-form-repeater-container">
                                                            <?php if($is_edit):?>
                                                                <?php $special_skills_and_hobbies = json_decode($employee_other_info->special_skills_and_hobbies);?>
                                                                <?php if(count($special_skills_and_hobbies)):?>
                                                                <?php foreach ($special_skills_and_hobbies as $key => $special_skill_or_hobby):?>
                                                                <div class="d-flex form-repeater-container mb-md-3">
                                                                    <div class="flex-grow-1 me-3 me-md-5 mb-5 mb-md-0 w-100 w-md-auto">
                                                                        <input type="text" class="form-control form-control-solid" data-name="special_skill_or_hobby" value="<?=$special_skill_or_hobby->special_skill_or_hobby?>" data-required="" placeholder="Special Skill or Hobby"/>
                                                                    </div>
                                                                    <div class="d-flex align-items-end mb-5 mb-md-0">
                                                                        <button type="button" href="#" class="btn btn-icon btn-light-danger form-repeater-remove">
                                                                            <i class="bi bi-trash fs-3"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <?php endforeach;?>
                                                                 <?php else:?>
                                                                    <div class="d-flex form-repeater-container mb-md-3">
                                                                        <div class="flex-grow-1 me-3 me-md-5 mb-5 mb-md-0 w-100 w-md-auto">
                                                                            <input type="text" class="form-control form-control-solid" data-name="special_skill_or_hobby" data-required="" placeholder="Special Skill or Hobby"/>
                                                                        </div>
                                                                        <div class="d-flex align-items-end mb-5 mb-md-0">
                                                                            <button type="button" href="#" class="btn btn-icon btn-light-danger form-repeater-remove">
                                                                                <i class="bi bi-trash fs-3"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                <?php endif;?>
                                                            <?php else:?>
                                                                <div class="d-flex form-repeater-container mb-md-3">
                                                                    <div class="flex-grow-1 me-3 me-md-5 mb-5 mb-md-0 w-100 w-md-auto">
                                                                        <input type="text" class="form-control form-control-solid" data-name="special_skill_or_hobby" data-required="" placeholder="Special Skill or Hobby"/>
                                                                    </div>
                                                                    <div class="d-flex align-items-end mb-5 mb-md-0">
                                                                        <button type="button" href="#" class="btn btn-icon btn-light-danger form-repeater-remove">
                                                                            <i class="bi bi-trash fs-3"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            <?php endif;?>
                                                            <button type="button" class="btn btn-light-primary btn-outline btn-outline-primary float-end form-repeater-add">Add a Special Skills or Hobby</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>

                                                <!-- Non-Academic Distinctions / Recognitions -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="non-academic-distinctions-recognition" class="form-label mb-0">Non-Academic Distinctions / Recognitions</label>
                                                        <div class="text-muted fs-7 mb-2"><i class="fas fa-info-circle"></i> Write in full.</div>
                                                    </div>
                                                    
                                                    <div class="col-md-8">
                                                        <div id="non-academic-distinctions-recognition-form-repeater-container">
                                                            <?php if($is_edit):?>
                                                                <?php $non_academic_distinctions_recognitions = json_decode($employee_other_info->non_academic_distinctions_recognitions);?>
                                                                <?php if(count($non_academic_distinctions_recognitions)):?>
                                                                    <?php foreach ($non_academic_distinctions_recognitions as $key => $distinction_recognition):?>
                                                                        <div class="d-flex form-repeater-container mb-md-3">
                                                                            <div class="flex-grow-1 me-3 me-md-5 mb-5 mb-md-0 w-100 w-md-auto">
                                                                                <input type="text" class="form-control form-control-solid" data-name="non_academic_distinction_or_recognition" value="<?=$distinction_recognition->non_academic_distinction_or_recognition?>" data-required="" placeholder="Non-Academic Distinction / Recognition"/>
                                                                            </div>
                                                                            <div class="d-flex align-items-end mb-5 mb-md-0">
                                                                                <button type="button" href="#" class="btn btn-icon btn-light-danger form-repeater-remove">
                                                                                    <i class="bi bi-trash fs-3"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    <?php endforeach;?>
                                                                <?php else:?>
                                                                    <div class="d-flex form-repeater-container mb-md-3">
                                                                        <div class="flex-grow-1 me-3 me-md-5 mb-5 mb-md-0 w-100 w-md-auto">
                                                                            <input type="text" class="form-control form-control-solid" data-name="non_academic_distinction_or_recognition" data-required="" placeholder="Non-Academic Distinction / Recognition"/>
                                                                        </div>
                                                                        <div class="d-flex align-items-end mb-5 mb-md-0">
                                                                            <button type="button" href="#" class="btn btn-icon btn-light-danger form-repeater-remove">
                                                                                <i class="bi bi-trash fs-3"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                <?php endif;?>
                                                            <?php else:?>
                                                                <div class="d-flex form-repeater-container mb-md-3">
                                                                    <div class="flex-grow-1 me-3 me-md-5 mb-5 mb-md-0 w-100 w-md-auto">
                                                                        <input type="text" class="form-control form-control-solid" data-name="non_academic_distinction_or_recognition" data-required="" placeholder="Non-Academic Distinction / Recognition"/>
                                                                    </div>
                                                                    <div class="d-flex align-items-end mb-5 mb-md-0">
                                                                        <button type="button" href="#" class="btn btn-icon btn-light-danger form-repeater-remove">
                                                                            <i class="bi bi-trash fs-3"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            <?php endif;?>
                                                            <button type="button" class="btn btn-light-primary btn-outline btn-outline-primary float-end form-repeater-add">Add a Non-Academic Distinction / Recognition</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>
                                                
                                                <!-- Membership In Associations / Organizations -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="membership-in-associations-organizations" class="form-label mb-0">Membership In Associations / Organizations</label>
                                                        <div class="text-muted fs-7 mb-2"><i class="fas fa-info-circle"></i> Write in full.</div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div id="membership-in-associations-organizations-form-repeater-container">
                                                            <?php if($is_edit):?>
                                                                <?php $membership_in_associations_organizations = json_decode($employee_other_info->membership_in_associations_organizations);?>
                                                                <?php if(count($membership_in_associations_organizations)):?>
                                                                    <?php foreach ($membership_in_associations_organizations as $key => $membership):?>
                                                                        <div class="d-flex form-repeater-container mb-md-3">
                                                                            <div class="flex-grow-1 me-3 me-md-5 mb-5 mb-md-0 w-100 w-md-auto">
                                                                                <input type="text" class="form-control form-control-solid" data-name="membership_in_association_organization" value="<?=$membership->membership_in_association_organization?>" data-required="" placeholder="Membership In Association / Organization"/>
                                                                            </div>
                                                                            <div class="d-flex align-items-end mb-5 mb-md-0">
                                                                                <button type="button" href="#" class="btn btn-icon btn-light-danger form-repeater-remove">
                                                                                    <i class="bi bi-trash fs-3"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    <?php endforeach;?>
                                                                <?php else:?>
                                                                    <div class="d-flex form-repeater-container mb-md-3">
                                                                        <div class="flex-grow-1 me-3 me-md-5 mb-5 mb-md-0 w-100 w-md-auto">
                                                                            <input type="text" class="form-control form-control-solid" data-name="membership_in_association_organization" data-required="" placeholder="Membership In Association / Organization"/>
                                                                        </div>
                                                                        <div class="d-flex align-items-end mb-5 mb-md-0">
                                                                            <button type="button" href="#" class="btn btn-icon btn-light-danger form-repeater-remove">
                                                                                <i class="bi bi-trash fs-3"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                <?php endif;?>
                                                            <?php else:?>
                                                                <div class="d-flex form-repeater-container mb-md-3">
                                                                    <div class="flex-grow-1 me-3 me-md-5 mb-5 mb-md-0 w-100 w-md-auto">
                                                                        <input type="text" class="form-control form-control-solid" data-name="membership_in_association_organization" data-required="" placeholder="Membership In Association / Organization"/>
                                                                    </div>
                                                                    <div class="d-flex align-items-end mb-5 mb-md-0">
                                                                        <button type="button" href="#" class="btn btn-icon btn-light-danger form-repeater-remove">
                                                                            <i class="bi bi-trash fs-3"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            <?php endif;?>
                                                            <button type="button" class="btn btn-light-primary btn-outline btn-outline-primary float-end form-repeater-add">Add a Membership In Association / Organization</button>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>

                                                <!-- Related by Consanguinity -->
                                                <div>
                                                    <!-- Question -->
                                                    <div class="row">
                                                        <div class="col-md-4 pt-2">
                                                            <label class="form-label mb-0" style="text-align: justify;">
                                                                Are you related by consanguinity or affinity to the appointing or recommending authority, or to the 
                                                                chief of bureau or office or to the person who has immediate supervision over you in the Office, 
                                                                Bureau or Department where you will be apppointed,
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- a. -->
                                                    <div class="row mb-6">
                                                        <div class="col-md-4 pt-2">
                                                            <label class="form-label ms-5 d-flex">
                                                                <div class="me-1">a.</div> within the third degree?
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8 pt-2">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer" type="radio" name="related_within_the_third_degree" value="1" id="related-within-the-third-degree-yes" <?=$is_edit ? $employee_other_info->related_within_the_third_degree == 1 ? "checked" : "" : ""?> required/>
                                                                        <label class="form-check-label" for="related-within-the-third-degree-yes">
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer" type="radio" name="related_within_the_third_degree" value="0" id="related-within-the-third-degree-no" <?=$is_edit ? $employee_other_info->related_within_the_third_degree == 0 ? "checked" : "" : ""?>/>
                                                                        <label class="form-check-label" for="related-within-the-third-degree-no">
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                </div>
    
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- b. -->
                                                    <div class="row mb-6">
                                                        <div class="col-md-4 pt-2">
                                                            <label class="form-label ms-5 d-flex">
                                                                <div class="me-1">b.</div> within the fourth degree <br> (for Local Government Unit - Career Employees)?
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8 pt-2 d-flex flex-column">
                                                            <div class="row flex-grow-1 align-items-center">
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="related_within_the_fourth_degree" value="1" id="related-within-the-fourth-degree-yes" <?=$is_edit ? $employee_other_info->related_within_the_fourth_degree == 1 ? "checked" : "" : ""?> required/>
                                                                        <label class="form-check-label" for="related-within-the-fourth-degree-yes">
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="related_within_the_fourth_degree" value="0" id="related-within-the-fourth-degree-no" <?=$is_edit ? $employee_other_info->related_within_the_fourth_degree == 0 ? "checked" : "" : ""?>/>
                                                                        <label class="form-check-label" for="related-within-the-fourth-degree-no">
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div id="related_within_the_fourth_degree_yes_follow_up_question" class="col-12" style="display: <?=$is_edit ? ($employee_other_info->related_within_the_fourth_degree == 1 ? "block" : "none") : "none" ?>;">
                                                                    <div class="d-flex align-items-center pt-6">
                                                                        <label class="form-label text-nowrap me-5 mb-0">
                                                                            If Yes, give details:
                                                                        </label>
                                                                        <input type="text" name="related_within_the_fourth_degree_details" value="<?= $is_edit ? $employee_other_info->related_within_the_fourth_degree_details : ""?>" class="form-control form-control-solid">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>

                                                <!-- Found Guilty / Criminal Charge -->
                                                <div>
                                                    <!-- a. -->
                                                    <div class="row mb-6">
                                                        <div class="col-md-4 pt-2">
                                                            <label class="form-label d-flex">
                                                                <div class="me-1">a.</div> Have you ever been found guilty of any administrative offense?
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8 pt-2 d-flex flex-column">
                                                            <div class="row flex-grow-1 align-items-center">
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="found_guilty" value="1" id="found-guilty-yes" <?=$is_edit ? $employee_other_info->found_guilty == 1 ? "checked" : "" : "" ?> required/>
                                                                        <label class="form-check-label" for="found-guilty-yes">
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="found_guilty" value="0" id="found-guilty-no" <?=$is_edit ? $employee_other_info->found_guilty == 0 ? "checked" : "" : "" ?>/>
                                                                        <label class="form-check-label" for="found-guilty-no">
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="found_guilty_yes_follow_up_question" class="col-12" style="display: <?=$is_edit ? $employee_other_info->found_guilty == 1 ? "block" : "none" : "none" ?>;">
                                                                <div class="d-flex align-items-center pt-6">
                                                                    <label class="form-label text-nowrap me-5 mb-0">
                                                                        If Yes, give details:
                                                                    </label>
                                                                    <input type="text" name="found_guilty_details" value="<?=$is_edit ? $employee_other_info->found_guilty_details : "" ?>" class="form-control form-control-solid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- b. -->
                                                    <div class="row mb-6">
                                                        <div class="col-md-4 pt-2">
                                                            <label class="form-label d-flex">
                                                                <div class="me-1">b.</div> Have you been criminally charged before any court?
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8 pt-2 d-flex flex-column">
                                                            <div class="row mb-6 flex-grow-1 align-items-center">
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="criminally_charged" value="1" id="criminally-charged-yes" <?=$is_edit ? $employee_other_info->criminally_charged == 1 ? "checked" : "" : "" ?> required/>
                                                                        <label class="form-check-label" for="criminally-charged-yes">
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="criminally_charged" value="0" id="criminally-charged-no" <?=$is_edit ? $employee_other_info->criminally_charged == 0 ? "checked" : "" : "" ?>/>
                                                                        <label class="form-check-label" for="criminally-charged-no">
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="criminally_charged_yes_follow_up_question" class="col-12" style="display: <?=$is_edit ? $employee_other_info->criminally_charged == 1 ? "block" : "none" : "none" ?>;">
                                                                <div class="d-flex align-items-center mb-3 pt-6">
                                                                    <label class="form-label text-nowrap me-5 mb-0">
                                                                        If Yes, give details:
                                                                    </label>
                                                                    <input type="text" name="criminally_charged_details" value="<?=$is_edit ? $employee_other_info->criminally_charged_details : ""?>" class="form-control form-control-solid">
                                                                </div>
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <label class="form-label text-nowrap me-5 mb-0">
                                                                        Date Filed:
                                                                    </label>
                                                                    <input type="date" name="criminally_charged_date_filed" value="<?=$is_edit ? $employee_other_info->criminally_charged_date_filed : ""?>" class="form-control form-control-solid">
                                                                </div>
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <label class="form-label text-nowrap me-5 mb-0">
                                                                        Status of Case/s:
                                                                    </label>
                                                                    <input type="text" name="criminally_charged_case_status" value="<?=$is_edit ? $employee_other_info->criminally_charged_case_status : ""?>" class="form-control form-control-solid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>

                                                <!-- Convicted of Crime -->
                                                <div>
                                                    <!-- Question -->
                                                    <div class="row mb-6">
                                                        <div class="col-md-4 pt-2">
                                                            <label class="form-label" style="text-align: justify;">
                                                                Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8 pt-2 d-flex flex-column">
                                                            <div class="row align-items-center flex-grow-1">
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="convicted_of_crime" value="1" id="convicted-of-crime-yes" <?=$is_edit ? $employee_other_info->convicted_of_crime == 1 ? "checked" : "" : ""?> required/>
                                                                        <label class="form-check-label" for="convicted-of-crime-yes">
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="convicted_of_crime" value="0" id="convicted-of-crime-no" <?=$is_edit ? $employee_other_info->convicted_of_crime == 0 ? "checked" : "" : ""?>/>
                                                                        <label class="form-check-label" for="convicted-of-crime-no">
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="convicted_of_crime_yes_follow_up_question" class="col-12" style="display: <?=$is_edit ? $employee_other_info->convicted_of_crime == 1 ? "block" : "none" : "none"?>;">
                                                                <div class="d-flex align-items-center pt-6">
                                                                    <label class="form-label text-nowrap me-5 mb-0">
                                                                        If Yes, give details:
                                                                    </label>
                                                                    <input type="text" name="convicted_of_crime_details" value="<?=$is_edit ? $employee_other_info->convicted_of_crime_details : ""?>" class="form-control form-control-solid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>

                                                <!-- Separated from the Service -->
                                                <div>
                                                    <!-- Question -->
                                                    <div class="row mb-6">
                                                        <div class="col-md-4 pt-2">
                                                            <label class="form-label" style="text-align: justify;">
                                                                Have you ever been separated from the service in any of the following modes: resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased out (abolition) in the public or private sector?
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8 pt-2 d-flex flex-column">
                                                            <div class="row align-items-center flex-grow-1">
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="separated_from_the_service" value="1" id="separated-from-the-service-yes" <?= $is_edit ? $employee_other_info->separated_from_the_service == 1 ? "checked" : "" : "" ?> required/>
                                                                        <label class="form-check-label" for="separated-from-the-service-yes">
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="separated_from_the_service" value="0" id="separated-from-the-service-no" <?= $is_edit ? $employee_other_info->separated_from_the_service == 0 ? "checked" : "" : "" ?>/>
                                                                        <label class="form-check-label" for="separated-from-the-service-no">
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="separated_from_the_service_yes_follow_up_question" class="col-12" style="display: <?= $is_edit ? $employee_other_info->separated_from_the_service == 1 ? "block" : "none" : "none" ?>;">
                                                                <div class="d-flex align-items-center pt-6">
                                                                    <label class="form-label text-nowrap me-5 mb-0">
                                                                        If Yes, give details:
                                                                    </label>
                                                                    <input type="text" name="separated_from_the_service_details" value="<?=$is_edit ? $employee_other_info->separated_from_the_service_details : ""?>" class="form-control form-control-solid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>

                                                <!-- Election Candidate / Resigned for Candidacy -->
                                                <div>
                                                    <!-- a. -->
                                                    <div class="row mb-6">
                                                        <div class="col-md-4 pt-2">
                                                            <label class="form-label d-flex">
                                                                <div class="me-1">a.</div> Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8 pt-2 d-flex flex-column">
                                                            <div class="row mb-6 flex-grow-1 align-items-center">
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="election_candidate" value="1" id="election-candidate-yes" <?= $is_edit ? $employee_other_info->election_candidate == 1 ? "checked" : "" : "" ?> required/>
                                                                        <label class="form-check-label" for="election-candidate-yes">
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="election_candidate" value="0" id="election-candidate-no" <?= $is_edit ? $employee_other_info->election_candidate == 0 ? "checked" : "" : "" ?>/>
                                                                        <label class="form-check-label" for="election-candidate-no">
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="election_candidate_yes_follow_up_question" style="display: <?= $is_edit ? $employee_other_info->separated_from_the_service == 1 ? "block" : "none" : "none" ?>;">
                                                                <div class="d-flex align-items-center">
                                                                    <label class="form-label text-nowrap me-5 mb-0">
                                                                        If Yes, give details:
                                                                    </label>
                                                                    <input type="text" name="election_candidate_details" value="<?=$is_edit ? $employee_other_info->election_candidate_details : ""?>" class="form-control form-control-solid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- b. -->
                                                    <div class="row mb-6">
                                                        <div class="col-md-4 pt-2">
                                                            <label class="form-label d-flex">
                                                                <div class="me-1">b.</div> Have you resigned from the government service during the three (3)-month period before the last election to promote/actively campaign for a national or local candidate?
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8 pt-2 d-flex flex-column">
                                                            <div class="row mb-6 flex-grow-1 align-items-center">
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="resigned_for_candidacy" value="1" id="resigned-for-candidacy-yes" <?= $is_edit ? $employee_other_info->resigned_for_candidacy == 1 ? "checked" : "" : "" ?> required/>
                                                                        <label class="form-check-label" for="resigned-for-candidacy-yes">
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="resigned_for_candidacy" value="0" id="resigned-for-candidacy-no" <?= $is_edit ? $employee_other_info->resigned_for_candidacy == 0 ? "checked" : "" : "" ?>/>
                                                                        <label class="form-check-label" for="resigned-for-candidacy-no">
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="resigned_for_candidacy_yes_follow_up_question" style="display: <?= $is_edit ? $employee_other_info->separated_from_the_service == 1 ? "block" : "none" : "none" ?>;">
                                                                <div class="d-flex align-items-center mb-3">
                                                                    <label class="form-label text-nowrap me-5 mb-0">
                                                                        If Yes, give details:
                                                                    </label>
                                                                    <input type="text" name="resigned_for_candidacy_details" value="<?=$is_edit ? $employee_other_info->resigned_for_candidacy_details : ""?>" class="form-control form-control-solid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>

                                                <!-- Immigrant / Resident of Other Country -->
                                                <div>
                                                    <!-- Question -->
                                                    <div class="row mb-6">
                                                        <div class="col-md-4 pt-2">
                                                            <label class="form-label" style="text-align: justify;">
                                                            Have you acquired the status of an immigrant or permanent resident of another country?
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8 pt-2 d-flex flex-column">
                                                            <div class="row align-items-center flex-grow-1">
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="resident_of_another_country" value="1" id="resident-of-another-country-yes" <?= $is_edit ? $employee_other_info->resident_of_another_country == 1 ? "checked" : "" : "" ?> required/>
                                                                        <label class="form-check-label" for="resident-of-another-country-yes">
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="resident_of_another_country" value="0" id="resident-of-another-country-no" <?= $is_edit ? $employee_other_info->resident_of_another_country == 0 ? "checked" : "" : "" ?>/>
                                                                        <label class="form-check-label" for="resident-of-another-country-no">
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="resident_of_another_country_yes_follow_up_question" style="display: <?= $is_edit ? $employee_other_info->separated_from_the_service == 1 ? "block" : "none" : "none" ?>;">
                                                                <div class="d-flex align-items-center pt-6">
                                                                    <label class="form-label text-nowrap me-5 mb-0">
                                                                        If Yes, give details:
                                                                    </label>
                                                                    <input type="text" name="resident_of_another_country_details" value="<?=$is_edit ? $employee_other_info->resident_of_another_country_details : ""?>" class="form-control form-control-solid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>

                                                <!-- Related by Consanguinity -->
                                                <div>
                                                    <!-- Question -->
                                                    <div class="row">
                                                        <div class="col-md-4 pt-2">
                                                            <label class="form-label mb-0" style="text-align: justify;">
                                                            Pursuant to: 
                                                            <br>(a) Indigenous People's Act (RA 8371); 
                                                            <br>(b) Magna Carta for Disabled Persons (RA 7277); and 
                                                            <br>(c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items:
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <!-- a. -->
                                                    <div class="row mb-6">
                                                        <div class="col-md-4 pt-2">
                                                            <label class="form-label ms-5 d-flex">
                                                                <div class="me-1">a.</div> Are you a member of any indigenous group?
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8 pt-2">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="indigenous_member" value="1" id="indigenous-member-yes" <?= $is_edit ? $employee_other_info->indigenous_member == 1 ? "checked" : "" : "" ?> required/>
                                                                        <label class="form-check-label" for="indigenous-member-yes">
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="indigenous_member" value="0" id="indigenous-member-no" <?= $is_edit ? $employee_other_info->indigenous_member == 0 ? "checked" : "" : "" ?>/>
                                                                        <label class="form-check-label" for="indigenous-member-no">
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="indigenous_member_yes_follow_up_question" class="col-12 " style="display: <?= $is_edit ? $employee_other_info->indigenous_member == 1 ? "block" : "none" : "none" ?>;">
                                                                <div class="d-flex align-items-center pt-6">
                                                                    <label class="form-label text-nowrap me-5 mb-0">
                                                                        If Yes, please specify:
                                                                    </label>
                                                                    <input type="text" name="indigenous_member_specify" value="<?=$is_edit ? $employee_other_info->indigenous_member_specify : ""?>" class="form-control form-control-solid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- b. -->
                                                    <div class="row mb-6">
                                                        <div class="col-md-4 pt-2">
                                                            <label class="form-label ms-5 d-flex">
                                                                <div class="me-1">b.</div> Are you a person with disability?
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8 pt-2 d-flex flex-column">
                                                            <div class="row flex-grow-1 align-items-center">
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="person_with_disability" value="1" id="person-with-disability-yes" <?= $is_edit ? $employee_other_info->person_with_disability == 1 ? "checked" : "" : "" ?> required/>
                                                                        <label class="form-check-label" for="person-with-disability-yes">
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="person_with_disability" value="0" id="person-with-disability-no" <?= $is_edit ? $employee_other_info->person_with_disability == 0 ? "checked" : "" : "" ?>/>
                                                                        <label class="form-check-label" for="person-with-disability-no">
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="person_with_disability_yes_follow_up_question" class="col-12 pt-6" style="display: <?= $is_edit ? $employee_other_info->person_with_disability == 1 ? "block" : "none" : "none" ?>;">
                                                                <div class="d-flex align-items-center">
                                                                    <label class="form-label text-nowrap me-5 mb-0">
                                                                        If Yes, please specify ID No:
                                                                    </label>
                                                                    <input type="text" name="person_with_disability_id" value="<?=$is_edit ? $employee_other_info->person_with_disability_id : ""?>" class="form-control form-control-solid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- c. -->
                                                    <div class="row mb-6">
                                                        <div class="col-md-4 pt-2">
                                                            <label class="form-label ms-5 d-flex">
                                                                <div class="me-1">c.</div> Are you a solo parent?
                                                            </label>
                                                        </div>
                                                        <div class="col-md-8 pt-2 d-flex flex-column">
                                                            <div class="row flex-grow-1 align-items-center">
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="solo_parent" value="1" id="solo-parent-yes" <?= $is_edit ? $employee_other_info->solo_parent == 1 ? "checked" : "" : "" ?> required/>
                                                                        <label class="form-check-label" for="solo-parent-yes">
                                                                            Yes
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <input class="form-check-input pointer has-follow-up" type="radio" name="solo_parent" value="0" id="solo-parent-no" <?= $is_edit ? $employee_other_info->solo_parent == 0 ? "checked" : "" : "" ?>/>
                                                                        <label class="form-check-label" for="solo-parent-no">
                                                                            No
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="solo_parent_yes_follow_up_question" class="col-12" style="display: <?= $is_edit ? $employee_other_info->solo_parent == 1 ? "block" : "none" : "none" ?>;">
                                                                <div class="d-flex align-items-center pt-6">
                                                                    <label class="form-label text-nowrap me-5 mb-0">
                                                                        If Yes, please specify ID No:
                                                                    </label>
                                                                    <input type="text" name="solo_parent_id" value="<?=$is_edit ? $employee_other_info->solo_parent_id : ""?>" class="form-control form-control-solid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>
                                                
                                                <!-- References -->
                                                <div class="row mb-6">
                                                    <div class="col-md-4 pt-2">
                                                        <label for="reference" class="form-label mb-0">References</label>
                                                        <div class="text-muted fs-7 mb-2"><i class="fas fa-info-circle"></i> Person not related by consanguinity or affinity to applicant /appointee.</div>

                                                    </div>
                                                    <div class="col-md-8">
                                                        <div id="reference-form-repeater-container">
                                                            <?php if($is_edit):?>
                                                                <?php $references = json_decode($employee_other_info->references);?>
                                                                <?php if(count($references)):?>
                                                                    <?php foreach ($references as $key => $reference):?>
                                                                        <div class="d-flex flex-wrap form-repeater-container mb-3">
                                                                            <div class="flex-grow-1 me-0 me-md-5 mb-5 mb-md-0 w-100 w-md-auto">
                                                                                <input type="text" class="form-control form-control-solid" data-required="" data-name="reference_name" value="<?=$reference->reference_name?>" data-label="Name" placeholder="Full Name"/>
                                                                            </div>
                                                                            <div class="flex-grow-1 flex-md-grow-0 w-md-25 me-5 mb-5 mb-md-0">
                                                                                <input type="text" class="form-control form-control-solid" data-required="" data-name="reference_address" value="<?=$reference->reference_address?>" data-label="Address" placeholder="Address"/>
                                                                            </div>
                                                                            <div class="flex-grow-1 flex-md-grow-0 w-md-25 me-5 mb-5 mb-md-0">
                                                                                <input type="text" class="form-control form-control-solid" data-required="" data-name="reference_tel_no" value="<?=$reference->reference_tel_no?>" data-label="Telephone No." placeholder="Telephone Number"/>
                                                                            </div>
                                                                            <div class="d-flex align-items-end mb-5 mb-md-0">
                                                                                <button type="button" href="#" class="btn btn-icon btn-light-danger form-repeater-remove">
                                                                                    <i class="bi bi-trash fs-3"></i>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    <?php endforeach;?>
                                                                <?php else:?>
                                                                    <div class="d-flex flex-wrap form-repeater-container mb-3">
                                                                        <div class="flex-grow-1 me-0 me-md-5 mb-5 mb-md-0 w-100 w-md-auto">
                                                                            <input type="text" class="form-control form-control-solid" data-required="" data-name="reference_name" data-label="Name" placeholder="Full Name"/>
                                                                        </div>
                                                                        <div class="flex-grow-1 flex-md-grow-0 w-md-25 me-5 mb-5 mb-md-0">
                                                                            <input type="text" class="form-control form-control-solid" data-required="" data-name="reference_address" data-label="Address" placeholder="Address"/>
                                                                        </div>
                                                                        <div class="flex-grow-1 flex-md-grow-0 w-md-25 me-5 mb-5 mb-md-0">
                                                                            <input type="text" class="form-control form-control-solid" data-required="" data-name="reference_tel_no" data-label="Telephone No." placeholder="Telephone Number"/>
                                                                        </div>
                                                                        <div class="d-flex align-items-end mb-5 mb-md-0">
                                                                            <button type="button" href="#" class="btn btn-icon btn-light-danger form-repeater-remove">
                                                                                <i class="bi bi-trash fs-3"></i>
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                <?php endif;?>
                                                            <?php else:?>
                                                                <div class="d-flex flex-wrap form-repeater-container mb-3">
                                                                    <div class="flex-grow-1 me-0 me-md-5 mb-5 mb-md-0 w-100 w-md-auto">
                                                                        <input type="text" class="form-control form-control-solid" data-required="" data-name="reference_name" data-label="Name" placeholder="Full Name"/>
                                                                    </div>
                                                                    <div class="flex-grow-1 flex-md-grow-0 w-md-25 me-5 mb-5 mb-md-0">
                                                                        <input type="text" class="form-control form-control-solid" data-required="" data-name="reference_address" data-label="Address" placeholder="Address"/>
                                                                    </div>
                                                                    <div class="flex-grow-1 flex-md-grow-0 w-md-25 me-5 mb-5 mb-md-0">
                                                                        <input type="text" class="form-control form-control-solid" data-required="" data-name="reference_tel_no" data-label="Telephone No." placeholder="Telephone Number"/>
                                                                    </div>
                                                                    <div class="d-flex align-items-end mb-5 mb-md-0">
                                                                        <button type="button" href="#" class="btn btn-icon btn-light-danger form-repeater-remove">
                                                                            <i class="bi bi-trash fs-3"></i>
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            <?php endif;?>
                                                            <button type="button" class="btn btn-light-primary btn-outline btn-outline-primary float-end form-repeater-add">Add a Reference</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="flex-column h-100 justify-content-center" data-kt-stepper-element="content">
                                            <!-- Review & Confirmation -->
                                            <div class="ps-3">
                                                <div class="alert alert-dismissible bg-light-primary border border-primary d-flex flex-center flex-column py-10 px-10 px-lg-20 mb-10 rounded-20px">
                                                    <span class="svg-icon svg-icon-primary svg-icon-5tx mb-5">
                                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
                                                            <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
                                                            <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
                                                        </svg>
                                                    </span>

                                                    <div class="text-center">
                                                        <h1 class="fw-bold mb-5">Reminder!</h1>
                                                        <div class="separator separator-dashed border-primary opacity-25 mb-5"></div>
                                                        <div class="mb-9 text-gray-900">
                                                            You are about to update this employee application form. Please make sure that all information are properly entered and are truthful.
                                                            <br>
                                                            If needed, please go back to the previous steps to review this application.
                                                        </div>

                                                        <div class="">
                                                            Press the <span class="fw-bold text-primary"> submit </span> button once you are done.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-stack">
                                        <div class="me-2">
                                            <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                                                Back
                                            </button>
                                        </div>

                                        <div>
                                            <button type="button" class="btn btn-primary" data-kt-stepper-action="submit">
                                                <span class="indicator-label">
                                                    Submit
                                                </span>
                                                <span class="indicator-progress">
                                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                </span>
                                            </button>

                                            <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                                Continue
                                            </button>
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
</div>

<div class="modal fade" id="photo-croppper-modal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Crop Photo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0" style="min-height: 75vh;">
                <img src="<?=base_url()?>/public/assets/media/employee-profile/default-avatar.png" id="photo-cropper-img" class="w-100 d-block" alt="">
            </div>
            <div class="modal-footer d-flex">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary flex-grow-1" id="photo-cropper-crop">Upload Photo</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<script src="<?=base_url()?>/public/assets/js/form-misc.js"></script>
<script>
    const overall_form_data = {};
    const employee_address = {
        permanent : {
            province_code : <?=$is_edit ? "'$employee_info->permanent_province_code'" : 0?>,
            city_mun_code : <?=$is_edit ? "'$employee_info->permanent_city_mun_code'" : 0?>,
            barangay_code : <?=$is_edit ? "'$employee_info->permanent_barangay_code'" : 0?>,
        },
        residential : {
            province_code : <?=$is_edit ? "'$employee_info->residential_province_code'" : 0?>,
            city_mun_code : <?=$is_edit ? "'$employee_info->residential_city_mun_code'" : 0?>,
            barangay_code : <?=$is_edit ? "'$employee_info->residential_barangay_code'" : 0?>,
        }
    };

    let employee_photo_cropper;
    $(function () {

    // Stepper
        // Stepper Initialization
            const element = document.querySelector("#employee-form-stepper");
            const stepper = new KTStepper(element);

        // Stepper Next
            stepper.on("kt.stepper.next", function (stepper) {
                const current_form = $("#employee-forms-container")
                    .find(`.current[data-kt-stepper-element="content"] > form`)[0];
                console.log(current_form);
                if(current_form.reportValidity()){
                    $(current_form).trigger("submit");

                    if(!$(current_form).hasClass("has-form-repeater")){
                        stepper.goNext();
                        $("#kt_app_toolbar_container")[0].scrollIntoView({ behavior: "smooth", block: "start" });
                    }

                }
            });

        // Stepper Previous
            stepper.on("kt.stepper.previous", function (stepper) {
                stepper.goPrevious(); // go previous step
            });

        // Stepper Submit
            $(stepper.btnSubmit).click(function(){
                <?php if(!$is_edit):?>
                    const loading_timeout = setTimeout(() => {
                        pageLoader(true, 'Loading...');
                    }, 500);
                
                    fetch("<?=base_url()?>/employees/createEmployeeInfo", {
                        method: 'post',
                        body: overall_form_data.personal_information,
                    })
                    .then(data => data.json())
                    .then(async response => {
                        console.log(response);

                        if(response.error){
                            errorAlert("Error", response.message, 'error');
                            return;
                        }

                        const employee_id = response.data;

                        const employee_family_background = await createEmployeeFamilyBackground(overall_form_data.family_background, employee_id);

                        const employee_educational_background = await createEmployeeEducationalBackground(overall_form_data.educational_background, employee_id);

                        const employee_eligibility = await createEmployeeEligibilities(overall_form_data.eligibility, employee_id);

                        const employee_work_experience = await createEmployeeWorkExperiences(overall_form_data.work_experience, employee_id);

                        const employee_voluntary_work = await createEmployeeVoluntaryWorks(overall_form_data.voluntary_work, employee_id);

                        const employee_training_programs = await createEmployeeTrainingPrograms(overall_form_data.training_programs, employee_id);

                        const employee_other_information = await createEmployeeOtherInfo(overall_form_data.other_information, employee_id);
                        
                        clearTimeout(loading_timeout)
                        pageLoader(false, 'Loading...');

                        if( !employee_other_information 
                        || !employee_family_background 
                        || !employee_educational_background 
                        || !employee_eligibility 
                        || !employee_work_experience 
                        || !employee_voluntary_work 
                        || !employee_training_programs
                        ){ return; }
                        
                        successAlert("Success!", "Employee data successfully created", ()=>{ window.location.href = "<?=base_url()?>/employees" });
                    });
                <?php else:?>
                    successAlert("Success!", "Employee data successfully updated", ()=>{ window.location.href = "<?=base_url()?>/employees" });
                <?php endif;?>
            })
    //

    // Photo
        // Modal Cropper Re-initialization
            $("#photo-croppper-modal").on("shown.bs.modal", function(){
                employee_photo_cropper = new Cropper($("#photo-cropper-img")[0], {
                    dragMode: 'move',
                    aspectRatio: 1/1,
                    cropBoxMovable: false,
                    cropBoxResizable: false,
                });
            });
        // Employee Photo input listener
            $("#employee-photo").change(function(){
                const photo_croppper_modal = bootstrap.Modal.getOrCreateInstance("#photo-croppper-modal");
                const selected_photo = this.files[0];

                if(selected_photo){
                    const file_reader = new FileReader();
                    file_reader.onload = event => {

                        if(employee_photo_cropper){
                            employee_photo_cropper.destroy()
                        }

                        $("#photo-cropper-img").attr("src", event.target.result).on("load", function(){
                            photo_croppper_modal.show();
                        })
                    }

                    file_reader.readAsDataURL(selected_photo);
                }
            })
        // Crop and Upload
            $("#photo-cropper-crop").click(function(){
                if(!employee_photo_cropper){
                    errorAlert("Error", "Something went wrong", "error");
                    return;
                }

                const photo_croppper_modal = bootstrap.Modal.getOrCreateInstance("#photo-croppper-modal");
                const cropped_image = employee_photo_cropper.getCroppedCanvas({
                    fillColor: "white"
                }).toDataURL("image/png");
                const form_data = new FormData();

                form_data.append('photo', cropped_image);

                let endpoint = `<?=base_url()?>/employees/uploadTempEmployeePhoto`;
                <?php if($is_edit):?>
                    endpoint = `<?=base_url()?>/employees/updateEmployeePhoto/<?=$employee_id?>`;
                <?php endif;?>

                fetch(endpoint, {
                    method: 'post',
                    body: form_data,
                })
                .then(data => data.json())
                .then(async response => {
                    
                    if(response.error){
                    errorAlert("Error", response.message, "error");
                    return; 
                    }
                    
                    const uploaded_photo = `<?=base_url()?>/public/assets/media/employee-profile/<?=$is_edit ? "" : "temp/"?>${response.data.file_name}`;
                    $("#employee-photo-img").attr("src", uploaded_photo);
                    <?php if(!$is_edit):?>
                        $("#photo").val(response.data.file_name);
                    <?php endif;?>

                    successAlert("Success", response.message, "success");

                    photo_croppper_modal.hide();
                })
            })
    //

    // Personal Information
        // Civil Status - Spouse Toggle
            $("#civil-status").change(function(){
                const has_spouse = this.value == "Single" ? false : true ;
                $("#spouse-container").toggle(has_spouse);
            })
        // Dual Citizenship Country
            $("#has-dual-citizenship").change(function(){
                if(this.checked){
                    setCitizenshipCountry();
                }else{
                    $("#citizenship-country-container").slideUp();
                }
            });

            <?php if($is_edit):?>
                <?php if($employee_info->has_dual_citizenship):?>
                    $("#has-dual-citizenship").trigger("change");
                <?php endif;?>
            <?php endif;?>
        // Address

            $("#residential-province-code").change(function(){
                const province_code = this.value;
                const province_text = $(this).find(`option[value="${province_code}"]`).html();
                $(this).parent().find(".address-text").val(province_text);

                fetch(`<?=base_url()?>/employees/getCityMun/${province_code}`)
                .then(data => data.json())
                .then(response => {
                    if(!response.error){
                        const cities_municipalities = response.data;
                        const employee_city_municipality = employee_address.residential.city_mun_code;
                        $("#residential-city-mun-code").html(`<option></option>`);
                        cities_municipalities.forEach(city_municipality => {
                            $("#residential-city-mun-code").append(`<option value="${city_municipality.citymunCode}" ${employee_city_municipality ? employee_city_municipality == city_municipality.citymunCode ? "selected" : "" : ""}>${city_municipality.citymunDesc}</option>`);
                        });
                        $("#residential-city-mun-code").select2();
                        console.log(employee_city_municipality)
                        if(employee_city_municipality){
                            $("#residential-city-mun-code").trigger("change")
                        }
                    }
                });
            });

            $("#residential-city-mun-code").change(function(){
                const city_mun_code = this.value;
                const city_mun_text = $(this).find(`option[value="${city_mun_code}"]`).html();
                $(this).parent().find(".address-text").val(city_mun_text);

                fetch(`<?=base_url()?>/employees/getBarangay/${city_mun_code}`)
                .then(data => data.json())
                .then(response => {
                    if(!response.error){
                        const barangays = response.data;
                        const employee_barangay = employee_address.residential.barangay_code;
                        $("#residential-barangay-code").html(`<option></option>`);
                        barangays.forEach(barangay => {
                            $("#residential-barangay-code").append(`<option value="${barangay.brgyCode}" ${employee_barangay == barangay.brgyCode ? "selected" : ""}>${barangay.brgyDesc}</option>`);
                        });
                        $("#residential-barangay-code").select2();
                        if(employee_barangay){
                            $("#residential-barangay-code").trigger("change");
                        }
                    }
                });
            });

            $("#residential-barangay-code").change(function(){
                const barangay_code = this.value;
                const barangay_text = $(this).find(`option[value="${barangay_code}"]`).html();

                $(this).parent().find(".address-text").val(barangay_text);
            });

            <?php if($is_edit):?>
            $("#residential-province-code").val(employee_address.residential.province_code).trigger("change");
            <?php endif;?>

            $("#permanent-province-code").change(function(){
                const province_code = this.value;
                const province_text = $(this).find(`option[value="${province_code}"]`).html();
                $(this).parent().find(".address-text").val(province_text);

                fetch(`<?=base_url()?>/employees/getCityMun/${province_code}`)
                .then(data => data.json())
                .then(response => {
                    if(!response.error){
                        const cities_municipalities = response.data;
                        $("#permanent-city-mun-code").html(`<option></option>`);
                        cities_municipalities.forEach(city_municipality => {
                            $("#permanent-city-mun-code").append(`<option value="${city_municipality.citymunCode}" ${employee_address.permanent.city_mun_code ? employee_address.permanent.city_mun_code == city_municipality.citymunCode ? "selected" : "" : ""}>${city_municipality.citymunDesc}</option>`);
                        });
                        $("#permanent-city-mun-code").select2();
                        if(employee_address.permanent.city_mun_code){
                            $("#permanent-city-mun-code").trigger("change");
                        }
                    }
                });
            });

            $("#permanent-city-mun-code").change(function(){
                const city_mun_code = this.value;
                const city_mun_text = $(this).find(`option[value="${city_mun_code}"]`).html();
                $(this).parent().find(".address-text").val(city_mun_text);

                fetch(`<?=base_url()?>/employees/getBarangay/${city_mun_code}`)
                .then(data => data.json())
                .then(response => {
                    if(!response.error){
                        const barangays = response.data;
                        $("#permanent-barangay-code").html(`<option></option>`);
                        barangays.forEach(barangay => {
                            $("#permanent-barangay-code").append(`<option value="${barangay.brgyCode}" ${employee_address.permanent.barangay_code ? employee_address.permanent.barangay_code == barangay.brgyCode ? "selected" : "" : ""}>${barangay.brgyDesc}</option>`);
                        });
                        $("#permanent-barangay-code").select2();
                        if(employee_address.permanent.barangay_code){
                            $("#permanent-barangay-code").trigger("change");
                        }
                    }
                });
            });

            $("#permanent-barangay-code").change(function(){
                const barangay_code = this.value;
                const barangay_text = $(this).find(`option[value="${barangay_code}"]`).html();

                $(this).parent().find(".address-text").val(barangay_text);
            });

            <?php if($is_edit):?>
            $("#permanent-province-code").val(employee_address.permanent.province_code).trigger("change");
            <?php endif;?>

            $("#same-as-residential-address").click(function (e) { 
                e.preventDefault();

                const residential_house_number =  $("#residential-house-number").val();
                const residential_street =  $("#residential-street").val();
                const residential_zip_code =  $("#residential-zip-code").val();

                const residential_barangay_code =  $("#residential-barangay-code").val();
                const residential_city_mun_code =  $("#residential-city-mun-code").val();
                const residential_province_code =  $("#residential-province-code").val();

                employee_address.permanent = {
                    province_code : residential_province_code,
                    city_mun_code : residential_city_mun_code,
                    barangay_code : residential_barangay_code,
                }

                console.log(employee_address.permanent)

                if(residential_province_code){
                    $("#permanent-province-code").val(residential_province_code).trigger("change");
                }

                $("#permanent-house-number").val(residential_house_number);
                $("#permanent-street").val(residential_street);
                $("#permanent-zip-code").val(residential_zip_code);
            });

            $(".mask-zip-code").mask("0000");
        // Personal Information Form
            $("#personal-information-form").submit(function (e) { 
                e.preventDefault();
                const form_data = new FormData(this);

                overall_form_data.personal_information = form_data;

                <?php if($is_edit):?>
                    const loading_timeout = setTimeout(() => {
                        pageLoader(true, 'Loading...');
                    }, 500);

                    fetch(`<?=base_url()?>/employees/updateEmployeeInfo/<?=$employee_id?>`, {
                        method: 'post',
                        body: form_data,
                    })
                    .then(data => data.json())
                    .then(async response => {
                        clearTimeout(loading_timeout);
                        pageLoader(false, 'Loading...');

                        if(response.error){
                            errorAlert("Error", response.result, "error");
                        }
                    });
                <?php endif;?>
            });
    //

    // Family Background
        // Name of Children
            const child_form_repeater = new formRepeater($("#children-form-repeater-container"), {
                labeled: {
                    className: "fs-7"
                }
            });
        // Family Background Form
            $("#family-background-form").submit(function (e) { 
                e.preventDefault();
                if(!child_form_repeater.is_valid){ return; }
                console.log(this.reportValidity())
                const form_data = new FormData(this);

                form_data.append("children", JSON.stringify(child_form_repeater.values));

                overall_form_data.family_background = form_data;

                <?php if($is_edit):?>
                    const loading_timeout = setTimeout(() => {
                        pageLoader(true, 'Loading...');
                    }, 500);

                    fetch(`<?=base_url()?>/employees/updateEmployeeFamilyBackground/<?=$employee_id?>`, {
                        method: 'post',
                        body: form_data,
                    })
                    .then(data => data.json())
                    .then(async response => {
                        clearTimeout(loading_timeout);
                        pageLoader(false, 'Loading...');
                        
                        if(response.error){
                            errorAlert("Error", response.result, "error");
                        }
                    });
                <?php endif;?>

                stepper.goNext();
            });

    //

    // Educational Background
        // Educational Background Form
            $("#educational-background-form").submit(function (e) { 
                e.preventDefault();
                <?php if($is_edit):?>
                    const loading_timeout = setTimeout(() => {
                        pageLoader(true, 'Loading...');
                    }, 500);
                <?php endif;?>

                const educational_background = {};
                $(this).find(".education-background-container").each(async function (index, education_background_container) {
                    const educational_level = this.dataset.educationalLevel;
                    $(education_background_container).find(`[name]`).each(function (i, input) {
                        const name = $(this).attr("name");
                        const value = $(this).val();
                        
                        if(!educational_background.hasOwnProperty(educational_level)){
                            educational_background[educational_level] = {
                                educational_level : Number(educational_level)
                            };
                        }

                        educational_background[educational_level][name] = value;
                    });
                    <?php if($is_edit):?>
                        const form_data = objectToFormData(educational_background[educational_level]);
                        const result = await fetch(`<?=base_url()?>/employees/updateEmployeeEducationalBackground/<?=$employee_id?>/${educational_level}`, {
                                method: 'post',
                                body: form_data
                            })
                            .then(data => data.json())
                            .then(response => {
                                return response;
                            });

                        if(result.error){
                            errorAlert("Error", response.message, 'error');
                            return false;
                        }
                    <?php endif;?>
                });
                <?php if($is_edit):?>
                    clearTimeout(loading_timeout);
                    pageLoader(false, 'Loading...');
                <?php endif;?>

                overall_form_data.educational_background = educational_background;
            });
    //

    // Civil Service Eligibility
        // Eligibility Form Repeater
            const civil_service_eligibility_form_repeater = new formRepeater($("#civil-service-eligibility-form-repeater-container"));

        // Eligibility Form
            $("#eligibility-form").submit(async function (e) { 
                e.preventDefault();
                if(!civil_service_eligibility_form_repeater.is_valid){ return; }

                const form_data = civil_service_eligibility_form_repeater.values;

                overall_form_data.eligibility = form_data;
                
                <?php if($is_edit):?>
                const loading_timeout = setTimeout(() => {
                    pageLoader(true, 'Loading...');
                }, 500);

                const reset = await resetEmployeeEligibilities();
                console.log(reset);
                if(reset.error){
                    errorAlert("Error", reset.message, 'error');
                    return;
                }

                const result = await createEmployeeEligibilities(form_data, <?=$employee_id?>);
                if(result.error){
                    errorAlert("Error", result.message, 'error');
                    return;
                }

                clearTimeout(loading_timeout);
                pageLoader(false, 'Loading...');
                <?php endif;?>
                
                stepper.goNext();
            });
    //

    // Work Experience
        // Work Experience Form Repeater
            const work_experience_form_repeater = new formRepeater($("#work-experience-form-repeater-container"));

        // Work Experience Form
            $("#work-experience-form").submit(async function (e) { 
                e.preventDefault();
                if(!work_experience_form_repeater.is_valid){ return; }

                const form_data = work_experience_form_repeater.values;

                overall_form_data.work_experience = form_data;

                <?php if($is_edit):?>
                const loading_timeout = setTimeout(() => {
                    pageLoader(true, 'Loading...');
                }, 500);

                const reset = await resetEmployeeWorkExperiences();
                if(reset.error){
                    errorAlert("Error", reset.message, 'error');
                    return;
                }

                const result = await createEmployeeWorkExperiences(form_data, <?=$employee_id?>);
                if(result.error){
                    errorAlert("Error", result.message, 'error');
                    return;
                }

                clearTimeout(loading_timeout);
                pageLoader(false, 'Loading...');
                <?php endif;?>

                stepper.goNext();
            });
    //

    // Voluntary Work
        // Voluntary Work Form Repeater
            const voluntary_work_form_repeater = new formRepeater($("#voluntary-work-form-repeater-container"));

        // Voluntary Work Form
            $("#voluntary-work-form").submit(async function (e) { 
                e.preventDefault();
                if(!voluntary_work_form_repeater.is_valid){ return; }

                const form_data = voluntary_work_form_repeater.values;

                overall_form_data.voluntary_work = form_data;
                <?php if($is_edit):?>
                const loading_timeout = setTimeout(() => {
                    pageLoader(true, 'Loading...');
                }, 500);

                const reset = await resetEmployeeVoluntaryWorks();
                if(reset.error){
                    errorAlert("Error", reset.message, 'error');
                    return;
                }

                const result = await createEmployeeVoluntaryWorks(form_data, <?=$employee_id?>);
                if(result.error){
                    errorAlert("Error", result.message, 'error');
                    return;
                }

                clearTimeout(loading_timeout);
                pageLoader(false, 'Loading...');
                <?php endif;?>
                stepper.goNext();
            });
    //

    // Training Programs
        // Training Programs Form Repeater
            const training_programs_form_repeater = new formRepeater($("#training-programs-form-repeater-container"));

        // Training Programs Form
            $("#training-program-form").submit(async function (e) { 
                e.preventDefault();
                if(!training_programs_form_repeater.is_valid){ return; }

                const form_data = training_programs_form_repeater.values;

                overall_form_data.training_programs = form_data;
                <?php if($is_edit):?>
                const loading_timeout = setTimeout(() => {
                    pageLoader(true, 'Loading...');
                }, 500);

                const reset = await resetEmployeeTrainingPrograms();
                if(reset.error){
                    errorAlert("Error", reset.message, 'error');
                    return;
                }

                const result = await createEmployeeTrainingPrograms(form_data, <?=$employee_id?>);
                if(result.error){
                    errorAlert("Error", result.message, 'error');
                    return;
                }

                clearTimeout(loading_timeout);
                pageLoader(false, 'Loading...');
                <?php endif;?>
                stepper.goNext();
            });
    //

    // Other Information
        // Special Skills and Hobbies
            const special_skills_and_hobbies_form_repeater = new formRepeater($("#special-skills-and-hobbies-form-repeater-container"))

        // Non-Academic Distinctions / Recognitions
            const non_academic_distinctions_recognition_form_repeater = new formRepeater($("#non-academic-distinctions-recognition-form-repeater-container"))
        
        // Membership in Associations Organizations
            const membership_in_associations_organizations_form_repeater = new formRepeater($("#membership-in-associations-organizations-form-repeater-container"))
        
        // Questions
            $(".has-follow-up").change(function(){
                const name = $(this).attr("name");
                const is_yes = Number(this.value) ? true : false;
                const follow_up_id = `#${name}_yes_follow_up_question`;
                
                if(is_yes){
                    $(follow_up_id)
                        .slideDown(400, function(){
                            $(follow_up_id).find("input")
                                .attr("required", is_yes)
                                .val("");
                        })
                }else{
                    $(follow_up_id)
                        .slideUp(400, function(){
                            $(follow_up_id).find("input")
                                .attr("required", is_yes)
                                .val("");
                        })
                }
            });

        // References
            const reference_form_repeater = new formRepeater($("#reference-form-repeater-container"), {
                labeled: {
                    className: "fs-7"
                }
            })
    
        // Other Information Form
            $("#other-information-form").submit(function (e) { 
                e.preventDefault();

                if(!special_skills_and_hobbies_form_repeater.is_valid){ return; }
                if(!non_academic_distinctions_recognition_form_repeater.is_valid){ return; }
                if(!membership_in_associations_organizations_form_repeater.is_valid){ return; }
                if(!reference_form_repeater.is_valid){ return; }

                const form_data = new FormData(this);

                form_data.append("special_skills_and_hobbies", JSON.stringify(special_skills_and_hobbies_form_repeater.values));
                form_data.append("non_academic_distinctions_recognitions", JSON.stringify(non_academic_distinctions_recognition_form_repeater.values));
                form_data.append("membership_in_associations_organizations", JSON.stringify(membership_in_associations_organizations_form_repeater.values));
                form_data.append("references", JSON.stringify(reference_form_repeater.values));

                overall_form_data.other_information = form_data;

                <?php if($is_edit):?>
                    const loading_timeout = setTimeout(() => {
                        pageLoader(true, 'Loading...');
                    }, 500);

                    fetch(`<?=base_url()?>/employees/updateEmployeeOtherInfo/<?=$employee_id?>`, {
                        method: 'post',
                        body: form_data,
                    })
                    .then(data => data.json())
                    .then(async response => {
                        clearTimeout(loading_timeout);
                        pageLoader(false, 'Loading...');

                        if(response.error){
                            errorAlert("Error", response.result, "error");
                        }
                    });
                <?php endif;?>
                stepper.goNext();
            });
    //
    }); 
    
    async function setCitizenshipCountry(){
        const loading_timeout = setTimeout(() => {
            pageLoader(true, 'Loading...');
        }, 500);

        fetch('https://restcountries.com/v3.1/all')
        .then(data => data.json())
        .then(response => {
            $("#citizenship-country").html(`<option></option>`);

            response.forEach(country => {
                $("#citizenship-country").append(`<option value="${country.name.common}" ${"<?=$is_edit ? $employee_info->citizenship_country : ""?>" == country.name.common ? "selected" : ""}>${country.name.common}</option>`)
            });

            clearTimeout(loading_timeout)
            pageLoader(false, 'Loading...');

            $("#citizenship-country").select2({
                placeholder: "Select a country"
            }).parent("#citizenship-country-container").slideDown();
            
        })
    }

    async function createEmployeeFamilyBackground(form_data, id){
        return await fetch(`<?=base_url()?>/employees/createEmployeeFamilyBackground/${id}`, {
            method: 'post',
            body: form_data
        })
        .then(data => data.json())
        .then(response => {
            if(response.error){
                errorAlert("Error", response.message, 'error');
            }
            return !response.error;
        });
    }

    async function createEmployeeEducationalBackground(educational_background_object, id){
        let is_created = true;
        for (const educational_level in educational_background_object) {
            if (Object.hasOwnProperty.call(educational_background_object, educational_level)) {

                const educational_background = educational_background_object[educational_level];
                const form_data = objectToFormData(educational_background);

                const result = await fetch(`<?=base_url()?>/employees/createEmployeeEducationalBackground/${id}`, {
                    method: 'post',
                    body: form_data
                })
                .then(data => data.json())
                .then(response => {
                    return response;
                });

                if(result.error){
                    errorAlert("Error", response.message, 'error');
                    is_created = false;
                    break;
                }
            }
        }
        return is_created;
    }

    async function createEmployeeEligibilities(eligibilities, id){
        let is_created = true;
        if(eligibilities.length == 0){ return true; }
        await eligibilities.every(async eligibility_object => {
            const form_data = objectToFormData(eligibility_object);
            const result = await fetch(`<?=base_url()?>/employees/createEmployeeEligibility/${id}`, {
                method: 'post',
                body: form_data
            })
            .then(data => data.json())
            .then(response => {
                return response;
            });

            if(result.error){
                errorAlert("Error", result.message, 'error');
                is_created = false;
                return false;
            }
            return true;
        });
        return is_created;
    }

    async function createEmployeeWorkExperiences(work_experiences, id){
        let is_created = true;
        if(work_experiences.length == 0){ return true; }
        await work_experiences.every(async work_experience_object => {
            const form_data = objectToFormData(work_experience_object);

            const result = await fetch(`<?=base_url()?>/employees/createEmployeeWorkExperience/${id}`, {
                    method: 'post',
                    body: form_data
                })
                .then(data => data.json())
                .then(response => {
                    return response;
                });
            //

            if(result.error){
                errorAlert("Error", result.message, 'error');
                is_created = false;
                return false;
            }

            return true;
        });
        return is_created;
    }

    async function createEmployeeVoluntaryWorks(voluntary_works, id){
        let is_created = true;
        if(voluntary_works.length == 0){ return true; }
        await voluntary_works.every(async voluntary_work => {
            const form_data = objectToFormData(voluntary_work);

            const result = await fetch(`<?=base_url()?>/employees/createEmployeeVoluntaryWork/${id}`, {
                    method: 'post',
                    body: form_data
                })
                .then(data => data.json())
                .then(response => {
                    return response;
                });
            //

            if(result.error){
                errorAlert("Error", result.message, 'error');
                is_created = false;
                return false;
            }

            return true;
        });
        return is_created;
    }

    async function createEmployeeTrainingPrograms(training_programs, id){
        let is_created = true;
        if(training_programs.length == 0){ return true; }
        await training_programs.every(async training_program => {
            const form_data = objectToFormData(training_program);

            const result = await fetch(`<?=base_url()?>/employees/createEmployeeTrainingPrograms/${id}`, {
                    method: 'post',
                    body: form_data
                })
                .then(data => data.json())
                .then(response => {
                    return response;
                });
            //
            
            if(result.error){
                errorAlert("Error", result.message, 'error');
                is_created = false;
                return false;
            }

            return true;
        });
        return is_created;
    }

    async function createEmployeeOtherInfo(form_data, id){
        console.log("createEmployeeOtherInfo", form_data)
        return await fetch(`<?=base_url()?>/employees/createEmployeeOtherInfo/${id}`, {
            method: 'post',
            body: form_data
        })
        .then(data => data.json())
        .then(response => {
            if(response.error){
                errorAlert("Error", response.message, 'error');
            }
            return !response.error;
        });
    }

    <?php if($is_edit):?>
    async function resetEmployeeEligibilities(){
        return await fetch(`<?=base_url()?>/employees/resetEmployeeEligibilities/<?=$employee_id?>`).then(data => data.json()).then(response => response);
    }

    async function resetEmployeeWorkExperiences(){
        return await fetch(`<?=base_url()?>/employees/resetEmployeeWorkExperiences/<?=$employee_id?>`).then(data => data.json()).then(response => response);
    }

    async function resetEmployeeVoluntaryWorks(){
        return await fetch(`<?=base_url()?>/employees/resetEmployeeVoluntaryWorks/<?=$employee_id?>`).then(data => data.json()).then(response => response);
    }
    
    async function resetEmployeeTrainingPrograms(){
        return await fetch(`<?=base_url()?>/employees/resetEmployeeTrainingPrograms/<?=$employee_id?>`).then(data => data.json()).then(response => response);
    }
    <?php endif;?>

    function objectToFormData(object) {
        const form_data = new FormData();

        for (const key in object) {
            if (Object.prototype.hasOwnProperty.call(object, key)) {
            form_data.append(key, object[key]);
            }
        }

        return form_data;
    }

    successAlert = (title, message, callback=false) => {
        Swal.fire({
            icon: "success",
            iconColor: 'var(--kt-white)',
            iconHtml: `<span class="svg-icon svg-icon-muted svg-icon-3hx text-white"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5" d="M12.8956 13.4982L10.7949 11.2651C10.2697 10.7068 9.38251 10.7068 8.85731 11.2651C8.37559 11.7772 8.37559 12.5757 8.85731 13.0878L12.7499 17.2257C13.1448 17.6455 13.8118 17.6455 14.2066 17.2257L21.1427 9.85252C21.6244 9.34044 21.6244 8.54191 21.1427 8.02984C20.6175 7.47154 19.7303 7.47154 19.2051 8.02984L14.061 13.4982C13.7451 13.834 13.2115 13.834 12.8956 13.4982Z" fill="currentColor"/>
                    <path d="M7.89557 13.4982L5.79487 11.2651C5.26967 10.7068 4.38251 10.7068 3.85731 11.2651C3.37559 11.7772 3.37559 12.5757 3.85731 13.0878L7.74989 17.2257C8.14476 17.6455 8.81176 17.6455 9.20663 17.2257L16.1427 9.85252C16.6244 9.34044 16.6244 8.54191 16.1427 8.02984C15.6175 7.47154 14.7303 7.47154 14.2051 8.02984L9.06096 13.4982C8.74506 13.834 8.21146 13.834 7.89557 13.4982Z" fill="currentColor"/>
                    </svg>
                </span>`,
            title: '<span class = "fw-semibold fs-1">SUCCESS</span>',
            html: '<span class = "text-gray-600">'+message+'</span>',
            background: `var(--kt-white)`,
            customClass: {
                icon: 'shadow-md m-0 fs-2 mt-5',
                confirmButton: "btn btn-success w-50",
                header: 'p-0 m-0 bg-success pt-7 pb-5',
                title: 'w-100 m-0 text-white flex-center pt-3 pb-10',
                loader: 'pt-20',
                content: 'pt-5',
                popup: 'pb-7',
            },
            focusConfirm: false,
            buttonsStyling: false,
        }).then((result) => {
            if (result.isConfirmed) {
                if(typeof callback == "function"){
                    callback();
                }
            }
        });
    }
</script>
<?= $this->endSection(); ?>
