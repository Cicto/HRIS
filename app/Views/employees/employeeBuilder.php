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
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Add Employee</h1>
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
                    <span class="text-muted">Add Employee</span>
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
                <div class="stepper stepper-pills stepper-column" id="kt_stepper_example_vertical">
                    <div class="row">

                        <div class="col-md-4 col-lg-4 col-xl-3 border-end">
                            <div class="position-relative d-flex justify-content-center">
                                <!-- <div class="position-absolute w-100 h-100 bg-danger rounded-4 pointer d-flex flex-column justify-content-center align-items-center">
                                    <div class=""></div>
                                </div> -->
                                <img src="<?=base_url()?>/public/assets/media/employee-profile/default-avatar.png" class="img-fluid rounded-4 border mx-auto" style="aspect-ratio: 1 / 1;" alt="">
                            </div>
                            
                            <div class="my-6">
                                <button type="button" class="btn btn-primary w-100 btn-icon"><i class="fas fa-file-image me-2"></i> Set employee photo</button>
                            </div>
            
                            <div class="d-flex flex-row-auto w-100">
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
        
                                    </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="col-md-8 col-lg-8 col-xl-9">
                            <div class="flex-row-fluid">
                                <div class="form">

                                    <div class="mb-5" id="employee-forms-container">
                                        <div class="flex-column current" data-kt-stepper-element="content">
                                            <!-- Personal Information -->
                                            <form class="ps-3" id="personal-information-form">
                                                <div class="text-center border-bottom pb-4 mb-6">
                                                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Personal Information</h1>
                                                    <p class="text-gray-600 m-0">Upload employee's information to the database.</p>
                                                </div>
                                                
                                                <!-- Full name -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="firstname" class="required form-label">Employee Name</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="mb-3">
                                                            <input type="text" id="firstname" name="firstname" class="form-control form-control-solid" placeholder="First Name" required/>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" id="middlename" name="middlename" class="form-control form-control-solid" placeholder="Middle Name"/>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 me-3">
                                                                <input type="text" id="lastname" name="lastname" class="form-control form-control-solid" placeholder="Last Name" required/>
                                                            </div>
                                                            <div class="">
                                                                <input type="text" id="suffix" name="suffix" class="form-control form-control-solid" placeholder="Suffix: Jr."/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Birthdate -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="birthdate" class="required form-label">Birthdate</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="date" id="birthdate" name="birthdate" class="form-control form-control-solid"/>
                                                    </div>
                                                </div>
                                                <!-- Sex -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="birthdate" class="required form-label">Sex</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <select class="form-select form-select-solid" name="sex" id="sex" data-control="select2" data-placeholder="Select a sex">
                                                            <option></option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- Civil Status -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="civil-status" class="required form-label">Civil Status</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <select class="form-select form-select-solid" name="civil_status" id="civil-status" data-control="select2" data-placeholder="Select a civil status">
                                                            <option></option>
                                                            <option value="Single">Single</option>
                                                            <option value="Married">Married</option>
                                                            <option value="Widowed">Widowed</option>
                                                            <option value="Separated">Separated</option>
                                                            <option value="Live-in">Live-in</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- Height and Weight -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="height" class="form-label">Height and Weight</label>
                                                    </div>
                                                    <div class="col-8 d-flex">
                                                        <div class="input-group input-group-solid me-2">
                                                            <input type="text" class="form-control mask-float" name="height" id="height" placeholder="Height" min="0"/>
                                                            <span class="input-group-text">meters</span>
                                                        </div>
                                                        <div class="input-group input-group-solid ms-1">
                                                            <input type="text" class="form-control mask-float" name="weight" id="weight" placeholder="Weight" min="0"/>
                                                            <span class="input-group-text">kilograms</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Blood Type -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="blood-type" class="form-label">Blood Type</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" name="blood_type" id="blood-type" class="form-control form-control-solid" placeholder="Blood Type">
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>                                                    

                                                <!-- GSIS ID No. -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="gsis-id" class="form-label">GSIS ID No.</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text p-0 w-50px no-drag">
                                                                <img src="<?=base_url()?>/public/assets/media/icons/gsis.svg" alt="GSIS" class="h-25px mx-auto grayscale opacity-50">
                                                            </span>
                                                            <input type="text" name="gsis_id" id="gsis-id" class="form-control form-control-solid" placeholder="0000-0000000-0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Pag-Ibig ID No. -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="pag-ibig-id" class="form-label">Pag-Ibig ID No.</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text p-0 w-50px text-center no-drag">
                                                                <img src="<?=base_url()?>/public/assets/media/icons/pag-ibig.svg" alt="Pag-Ibig" class="h-25px mx-auto grayscale opacity-50">
                                                            </span>
                                                            <input type="text" name="pag_ibig_id" id="pag-ibig-id" class="form-control form-control-solid" placeholder="0000-0000-0000">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- PhilHealth No. -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="philhealth-id" class="form-label">PhilHealth No.</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text p-0 w-50px text-center no-drag">
                                                                <img src="<?=base_url()?>/public/assets/media/icons/philhealth.svg" alt="PhilHealth" class="h-25px mx-auto grayscale opacity-50">
                                                            </span>
                                                            <input type="text" name="philhealth_id" id="philhealth-id" class="form-control form-control-solid" placeholder="00-000000000-0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- SSS No. -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="sss-id" class="form-label">SSS No.</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text p-0 w-50px text-center no-drag">
                                                                <img src="<?=base_url()?>/public/assets/media/icons/sss.svg" alt="SSS" class="h-15px mx-auto grayscale opacity-50">
                                                            </span>
                                                            <input type="text" name="sss_id" id="sss-id" class="form-control form-control-solid" placeholder="00-0000000-0">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- TIN No. -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="tin-id" class="form-label">TIN No.</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text p-0 w-50px text-center no-drag">
                                                                <b class="d-block mx-auto text-gray-500">TIN</b>
                                                            </span>
                                                            <input type="text" name="tin_id" id="tin-id" class="form-control form-control-solid" placeholder="000-000-000-00000">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Agency Employee No. -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="agency-employee-id" class="form-label">Agency Employee No.</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" name="agency_employee_id" id="agency-employee-id" class="form-control form-control-solid" placeholder="00-0000">
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>                                                    
                                                
                                                <!-- Citizenship -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="citizenship" class="form-label required">Citizenship</label>
                                                        <div class="text-muted fs-7"><i class="fas fa-info-circle"></i> If holder of  dual citizenship, please indicate the details.</div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="row">
                                                            <!-- Filipino -->
                                                            <div class="col-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="1" name="is_filipino" id="is-filipino" />
                                                                    <label class="form-check-label" for="is-filipino">
                                                                        Filipino
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!-- Dual Citizenship -->
                                                            <div class="col-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="1" name="has_dual_citizenship" id="has-dual-citizenship" />
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
                                                                    <input class="form-check-input" type="checkbox" value="1" name="is_citizen_by_birth" id="is-citizen-by-birth" />
                                                                    <label class="form-check-label" for="is-citizen-by-birth">
                                                                        By birth
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <!-- By naturalization -->
                                                            <div class="col-6">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox" value="" name="is_citizen_by_naturalization" id="is-citizen-by-naturalization" />
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
                                                    <div class="col-4 pt-2">
                                                        <label for="house-number" class="form-label required">Residential Address</label>
                                                        <div class="text-muted fs-7"><i class="fas fa-info-circle"></i> Select a province first, then the city/municipality. After that, select the barangay.</div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="row g-3">
                                                            <div class="col-3">
                                                                <input type="text" class="form-control form-control-solid" name="residential_house_number" id="residential-house-number" placeholder="House/Block/Lot No." required>
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="text" class="form-control form-control-solid" name="residential_street" id="residential-street" placeholder="Street" required>
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
                                                                <input type="text" name="residential_zip_code" id="residential-zip-code" class="form-control form-control-solid" placeholder="ZIP Code">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Permanent Address -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="house-number" class="form-label required">Permanent Address</label>
                                                        <div class="text-muted fs-7"><i class="fas fa-info-circle"></i> Click <a href="#">here</a> to make the permanent address the same as the residential address.</div>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="row g-3">
                                                            <div class="col-3">
                                                                <input type="text" class="form-control form-control-solid" name="permanent_house_number" id="permanent-house-number" placeholder="House/Block/Lot No." required>
                                                            </div>
                                                            <div class="col-9">
                                                                <input type="text" class="form-control form-control-solid" name="permanent_street" id="permanent-street" placeholder="Street" required>
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
                                                                <input type="text" name="permanent_zip_code" id="permanent-zip-code" class="form-control form-control-solid" placeholder="ZIP Code">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>                                                    

                                                <!-- Telephone No. -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="telephone-number" class="form-label">Telephone Number</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text w-50px d-inline-block text-center">
                                                                <i class="fas fa-phone-alt"></i>
                                                            </span>
                                                            <input type="text" name="telephone_number" id="telephone-number" class="form-control form-control-solid" placeholder="00-0000-0000">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Mobile No. -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="mobile-number" class="form-label required">Mobile Number</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text w-50px d-inline-block text-center">
                                                                <i class="fas fa-mobile-alt fs-4"></i>
                                                            </span>
                                                            <input type="text" name="mobile_number" id="mobile-number" class="form-control form-control-solid mask-contact-number" placeholder="0900-000-0000">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Email Address -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="email-address" class="form-label">Email Address</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text w-50px d-inline-block text-center">
                                                                <i class="fas fa-at fs-4"></i>
                                                            </span>
                                                            <input type="email" name="email_address" id="email-address" class="form-control form-control-solid mask-contact-number" placeholder="example@email.com">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="employment-status" class="required form-label">Employment Status</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <select class="form-select form-select-solid" name="employment_status" id="employment-status" data-control="select2" data-placeholder="Select an employment status">
                                                            <option></option>
                                                            <?php foreach ($employment_status as $key => $status):?>
                                                                <option value="<?=$status->es_id?>"><?=$status->es_description?></option>
                                                            <?php endforeach;?>
                                                        </select>
                                                    </div>
                                                </div>
                            
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="position" class="required form-label">Position</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" id="position" name="position" class="form-control form-control-solid" placeholder="Job Position"/>
                                                    </div>
                                                </div>
                                                
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="dept-id" class="required form-label">Department</label>
                                                    </div>
                                                    <div class="col-8">
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

                                        <div class="flex-column" data-kt-stepper-element="content">
                                            <!-- Family Background -->
                                            <form class="ps-3">
                                                <div class="text-center border-bottom pb-4 mb-6">
                                                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Family Background</h1>
                                                    <p class="text-gray-600 m-0">Upload employee's information to the database.</p>
                                                </div>

                                                <!-- Spouse's name -->
                                                <div class="row mb-6" id="spouse-container">
                                                    <div class="col-4 pt-2">
                                                        <label for="spouse-firstname" class="form-label">Spouse's Name</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="mb-3">
                                                            <input type="text" id="spouse-firstname" name="spouse_firstname" class="form-control form-control-solid" placeholder="First Name"/>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" id="spouse-middlename" name="spouse_middlename" class="form-control form-control-solid" placeholder="Middle Name"/>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 me-3">
                                                                <input type="text" id="spouse-lastname" name="spouse_lastname" class="form-control form-control-solid" placeholder="Last Name"/>
                                                            </div>
                                                            <div class="">
                                                                <input type="text" id="spouse-suffix" name="spouse_suffix" class="form-control form-control-solid" placeholder="Suffix: Jr."/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Occupation -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="spouse-occupation" class="form-label">Occupation</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" name="spouse_occupation" id="spouse-occupation" class="form-control form-control-solid" placeholder="Occupation">
                                                    </div>
                                                </div>
                                                <!-- Employer/Business Name -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="spouse-employer_business_name" class="form-label">Employer/Business Name</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" name="spouse_employer_business_name" id="spouse-employer-business-name" class="form-control form-control-solid" placeholder="Employer/Business Name">
                                                    </div>
                                                </div>
                                                <!-- Business Address -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="spouse-business_address" class="form-label">Business Address</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <input type="text" name="spouse_business_address" id="spouse-business-address" class="form-control form-control-solid" placeholder="Business Address">
                                                    </div>
                                                </div>
                                                <!-- Telephone No. -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="spouse-telephone-number" class="form-label">Telephone Number</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="input-group input-group-solid">
                                                            <span class="input-group-text w-50px d-inline-block text-center">
                                                                <i class="fas fa-phone-alt"></i>
                                                            </span>
                                                            <input type="text" name="spouse-telephone_number" id="spouse-telephone-number" class="form-control form-control-solid" placeholder="00-0000-0000">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>  
                                                
                                                <!-- Father's name -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="father-firstname" class="form-label">Father's Name</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="mb-3">
                                                            <input type="text" id="father-firstname" name="father_firstname" class="form-control form-control-solid" placeholder="First Name"/>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" id="father-middlename" name="father_middlename" class="form-control form-control-solid" placeholder="Middle Name"/>
                                                        </div>
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1 me-3">
                                                                <input type="text" id="father-lastname" name="father_lastname" class="form-control form-control-solid" placeholder="Last Name"/>
                                                            </div>
                                                            <div class="">
                                                                <input type="text" id="father-suffix" name="father_suffix" class="form-control form-control-solid" placeholder="Suffix: Jr."/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Mother's name -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="mother-firstname" class="form-label">Mother's Maiden Name</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="mb-3">
                                                            <input type="text" id="mother-firstname" name="mother_firstname" class="form-control form-control-solid" placeholder="First Name"/>
                                                        </div>
                                                        <div class="mb-3">
                                                            <input type="text" id="mother-middlename" name="mother_middlename" class="form-control form-control-solid" placeholder="Middle Name"/>
                                                        </div>
                                                        <div>
                                                            <input type="text" id="mother-lastname" name="mother_lastname" class="form-control form-control-solid" placeholder="Last Name"/>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>

                                                <!-- Name of Children -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="children" class="form-label">Name of Children</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div id="children-form-repeater-container">
                                                            <div class="d-flex flex-wrap form-repeater-container mb-3">
                                                                <div class="flex-grow-1 me-0 me-md-5 mb-5 mb-md-0 w-100 w-md-auto">
                                                                    <input type="text" class="form-control form-control-solid" data-name="child_name" data-required="" placeholder="Full Name"/>
                                                                </div>
                                                                <div class="flex-grow-1 flex-md-grow-0 w-md-25 me-5 mb-5 mb-md-0">
                                                                    <input type="date" class="form-control form-control-solid" data-required="" data-name="child_birthdate"/>
                                                                </div>
                                                                <div class="d-flex align-items-center mb-5 mb-md-0">
                                                                    <button type="button" href="#" class="btn btn-icon btn-light-danger border border-danger form-repeater-remove">
                                                                        <i class="bi bi-trash fs-3"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn btn-light-primary btn-outline btn-outline-primary float-end form-repeater-add">Add a Child</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>

                                        <div class="flex-column" data-kt-stepper-element="content">
                                            <!-- Educational Background -->
                                            <form class="ps-3">
                                                <div class="text-center border-bottom pb-4 mb-6">
                                                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Educational Background</h1>
                                                    <p class="text-gray-600 m-0">Please write the Name of School and/or Basic Education / Degree / Course in full.</p>
                                                </div>

                                                <!-- Elementary -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="elementary-school-name" class="form-label">Elementary</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <input type="text" id="elementary-school-name" name="elementary_school_name" class="form-control form-control-solid" placeholder="Name of School"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="elementary-basic-education" name="elementary_basic_education" class="form-control form-control-solid" placeholder="Basic Education / Degree / Course"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="elementary-period-of-attendance-from" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                    Period of Attendance
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6 d-flex align-items-center">
                                                                <label for="elementary-period-of-attendance-from" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                    From:
                                                                </label>
                                                                <input type="date" id="elementary-period-of-attendance-from" name="elementary_period_of_attendance_from" class="form-control form-control-solid ms-3"/>
                                                            </div>
                                                            <div class="col-md-6 d-flex align-items-center">
                                                                <label for="elementary-period-of-attendance-to" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                    To:
                                                                </label>
                                                                <input type="date" id="elementary-period-of-attendance-to" name="elementary_period_of_attendance_to" class="form-control form-control-solid ms-3"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="elementary-highest-level" name="elementary_highest_level" class="form-control form-control-solid" placeholder="Highest Level / Units Earned (if not graduated)"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="elementary-year-graduated" name="elementary_year_graduated" class="form-control form-control-solid mask-number" placeholder="Year Graduated"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="elementary-scholarship-academic-honors-received" name="elementary_scholarship_academic_honors_received" class="form-control form-control-solid" placeholder="Scholarship / Academic Honors Received"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>  

                                                <!-- Secondary -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="secondary-school-name" class="form-label">Secondary</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <input type="text" id="secondary-school-name" name="secondary_school_name" class="form-control form-control-solid" placeholder="Name of School"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="secondary-basic-education" name="secondary_basic_education" class="form-control form-control-solid" placeholder="Basic Education / Degree / Course"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <label for="secondary-period-of-attendance-from" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                    Period of Attendance
                                                                </label>
                                                            </div>
                                                            <div class="col-md-6 d-flex align-items-center">
                                                                <label for="secondary-period-of-attendance-from" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                    From:
                                                                </label>
                                                                <input type="date" id="secondary-period-of-attendance-from" name="secondary_period_of_attendance_from" class="form-control form-control-solid ms-3"/>
                                                            </div>
                                                            <div class="col-md-6 d-flex align-items-center">
                                                                <label for="secondary-period-of-attendance-to" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                    To:
                                                                </label>
                                                                <input type="date" id="secondary-period-of-attendance-to" name="secondary_period_of_attendance_to" class="form-control form-control-solid ms-3"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="secondary-highest-level" name="secondary_highest_level" class="form-control form-control-solid" placeholder="Highest Level / Units Earned (if not graduated)"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="secondary-year-graduated" name="secondary_year_graduated" class="form-control form-control-solid mask-number" placeholder="Year Graduated"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="secondary-scholarship-academic-honors-received" name="secondary_scholarship_academic_honors_received" class="form-control form-control-solid" placeholder="Scholarship / Academic Honors Received"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>  

                                                <!-- Vocational / Trade Course -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="vocational-school-name" class="form-label">Vocational / Trade Course</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <input type="text" id="vocational-school-name" name="vocational_school_name" class="form-control form-control-solid" placeholder="Name of School"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="vocational-degree_course" name="vocational_degree_course" class="form-control form-control-solid" placeholder="Basic Education / Degree / Course"/>
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
                                                                <input type="date" id="vocational-period-of-attendance-from" name="vocational_period_of_attendance_from" class="form-control form-control-solid ms-3"/>
                                                            </div>
                                                            <div class="col-md-6 d-flex align-items-center">
                                                                <label for="vocational-period-of-attendance-to" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                    To:
                                                                </label>
                                                                <input type="date" id="vocational-period-of-attendance-to" name="vocational_period_of_attendance_to" class="form-control form-control-solid ms-3"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="vocational-highest-level" name="vocational_highest_level" class="form-control form-control-solid" placeholder="Highest Level / Units Earned (if not graduated)"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="vocational-year-graduated" name="vocational_year_graduated" class="form-control form-control-solid mask-number" placeholder="Year Graduated"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="vocational-scholarship-academic-honors-received" name="vocational_scholarship_academic_honors_received" class="form-control form-control-solid" placeholder="Scholarship / Academic Honors Received"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>  
                                                
                                                <!-- College -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="college-school-name" class="form-label">College</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <input type="text" id="college-school-name" name="college_school_name" class="form-control form-control-solid" placeholder="Name of School"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="college-degree_course" name="college_degree_course" class="form-control form-control-solid" placeholder="Basic Education / Degree / Course"/>
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
                                                                <input type="date" id="college-period-of-attendance-from" name="college_period_of_attendance_from" class="form-control form-control-solid ms-3"/>
                                                            </div>
                                                            <div class="col-md-6 d-flex align-items-center">
                                                                <label for="college-period-of-attendance-to" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                    To:
                                                                </label>
                                                                <input type="date" id="college-period-of-attendance-to" name="college_period_of_attendance_to" class="form-control form-control-solid ms-3"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="college-highest-level" name="college_highest_level" class="form-control form-control-solid" placeholder="Highest Level / Units Earned (if not graduated)"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="college-year-graduated" name="college_year_graduated" class="form-control form-control-solid mask-number" placeholder="Year Graduated"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="college-scholarship-academic-honors-received" name="college_scholarship_academic_honors_received" class="form-control form-control-solid" placeholder="Scholarship / Academic Honors Received"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="separator flex-grow-1 mb-6 separator-dashed"></div>  

                                                <!-- Graduate Studies -->
                                                <div class="row mb-6">
                                                    <div class="col-4 pt-2">
                                                        <label for="graduate-studies-school-name" class="form-label">Graduate Studies</label>
                                                    </div>
                                                    <div class="col-8">
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <input type="text" id="graduate-studies-school-name" name="graduate_studies_school_name" class="form-control form-control-solid" placeholder="Name of School"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="graduate-studies-degree_course" name="graduate_studies_degree_course" class="form-control form-control-solid" placeholder="Basic Education / Degree / Course"/>
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
                                                                <input type="date" id="graduate-studies-period-of-attendance-from" name="graduate_studies_period_of_attendance_from" class="form-control form-control-solid ms-3"/>
                                                            </div>
                                                            <div class="col-md-6 d-flex align-items-center">
                                                                <label for="graduate-studies-period-of-attendance-to" class="form-label ps-4 fs-6 m-0 text-gray-800">
                                                                    To:
                                                                </label>
                                                                <input type="date" id="graduate-studies-period-of-attendance-to" name="graduate_studies_period_of_attendance_to" class="form-control form-control-solid ms-3"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="graduate-studies-highest-level" name="graduate_studies_highest_level" class="form-control form-control-solid" placeholder="Highest Level / Units Earned (if not graduated)"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="graduate-studies-year-graduated" name="graduate_studies_year_graduated" class="form-control form-control-solid mask-number" placeholder="Year Graduated"/>
                                                            </div>
                                                            <div class="col-12">
                                                                <input type="text" id="graduate-studies-scholarship-academic-honors-received" name="graduate_studies_scholarship_academic_honors_received" class="form-control form-control-solid" placeholder="Scholarship / Academic Honors Received"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
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

<?= $this->endSection(); ?>

<?= $this->section('javascript'); ?>
<script src="<?=base_url()?>/public/assets/js/form-misc.js"></script>
<script>
    $(function () {
    // Stepper
        const element = document.querySelector("#kt_stepper_example_vertical");

        const stepper = new KTStepper(element);

        stepper.on("kt.stepper.next", function (stepper) {
            const current_form = $("#employee-forms-container")
                .find(`.current[data-kt-stepper-element="content"] > form`)[0];

            if(current_form.reportValidity()){
                $(current_form).trigger("submit");
                stepper.goNext();
            }

        });

        stepper.on("kt.stepper.previous", function (stepper) {
            stepper.goPrevious(); // go previous step
        });
    //
    // Personal Information
        $("#civil-status").change(function(){
            const has_spouse = this.value == "Single" ? false : true ;
            $("#spouse-container").toggle(has_spouse);
        })

        $("#has-dual-citizenship").change(function(){
            if(this.checked){
                setCitizenshipCountry();
            }else{
                $("#citizenship-country-container").slideUp();
            }
        });

        $("#residential-province-code").change(function(){
            const province_code = this.value;
            const province_text = $(this).find(`option[value="${province_code}"]`).html();
            $(this).parent().find(".address-text").val(province_text);

            fetch(`<?=base_url()?>/employees/getCityMun/${province_code}`)
            .then(data => data.json())
            .then(response => {
                if(!response.error){
                    const cities_municipalities = response.data;
                    $("#residential-city-mun-code").html(`<option></option>`);
                    cities_municipalities.forEach(city_municipality => {
                        $("#residential-city-mun-code").append(`<option value="${city_municipality.citymunCode}">${city_municipality.citymunDesc}</option>`);
                    });
                    $("#residential-city-mun-code").select2({
                        
                    });
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
                    $("#residential-barangay-code").html(`<option></option>`);
                    barangays.forEach(barangay => {
                        $("#residential-barangay-code").append(`<option value="${barangay.brgyCode}">${barangay.brgyDesc}</option>`);
                    });
                    $("#residential-barangay-code").select2();
                }
            });
        });

        $("#residential-barangay-code").change(function(){
            const barangay_code = this.value;
            const barangay_text = $(this).find(`option[value="${barangay_code}"]`).html();

            $(this).parent().find(".address-text").val(barangay_text);
        });

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
                        $("#permanent-city-mun-code").append(`<option value="${city_municipality.citymunCode}">${city_municipality.citymunDesc}</option>`);
                    });
                    $("#permanent-city-mun-code").select2({
                        
                    });
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
                        $("#permanent-barangay-code").append(`<option value="${barangay.brgyCode}">${barangay.brgyDesc}</option>`);
                    });
                    $("#permanent-barangay-code").select2();
                }
            });
        });

        $("#permanent-barangay-code").change(function(){
            const barangay_code = this.value;
            const barangay_text = $(this).find(`option[value="${barangay_code}"]`).html();

            $(this).parent().find(".address-text").val(barangay_text);
        });

        $("#personal-information-form").submit(function (e) { 
            e.preventDefault();
            // return;
            const form_data = new FormData(this);

            fetch("<?=base_url()?>/employees/addEmployeeData", {
                method: 'post',
                body: form_data,
            })
            .then(data => data.json())
            .then(response => {
                console.log(response);
                if(!response.error){
                    
                }
            });
        });

    //
    // Family Background
        const child_form_repeater = new formRepeater($("#children-form-repeater-container"));
    //
    // Educational Background
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
                $("#citizenship-country").append(`<option value="${country.name.common}">${country.name.common}</option>`)
            });

            clearTimeout(loading_timeout)
            pageLoader(false, 'Loading...');

            $("#citizenship-country").select2({
                placeholder: "Select a country"
            }).parent("#citizenship-country-container").slideDown();
            
        })
    }
</script>
<?= $this->endSection(); ?>
