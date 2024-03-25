<?= $this->extend('layouts/main'); ?>

<?= $this->section('css'); ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <style>
        #qr-code-scanner > video{
            height: 100%;
        }
        .ff-rubik{
            font-family: 'Rubik', sans-serif;
        }

        .hover-text-primary > *{
            transition: 0.1s;
        }

        .hover-text-primary:hover > *{
            color: var(--kt-primary) !important; 
        }

        .calendar-date:hover{
            border: 2px var(--kt-card-bg) solid;
        }
    </style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Attendance</h1>
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <li class="breadcrumb-item text-muted">
                    <a href="<?=base_url()?>" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <li class="breadcrumb-item text-muted">
                    <i class="bi bi-dash"></i>
                </li>
                <li class="breadcrumb-item text-muted">
                    <span class="text-muted">Attendance Logs</span>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <a href="<?=base_url()?>/attendances/scan" class="btn btn-primary d-flex align-items-center">
                <span class="svg-icon svg-icon-muted svg-icon-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" opacity="0.3" d="M3,6C2.4,6,2,5.6,2,5V3c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1S5.6,4,5,4H4v1C4,5.6,3.6,6,3,6z M22,5V3
                            c0-0.6-0.4-1-1-1h-2c-0.6,0-1,0.4-1,1s0.4,1,1,1h1v1c0,0.6,0.4,1,1,1S22,5.6,22,5z M6,21c0-0.6-0.4-1-1-1H4v-1c0-0.6-0.4-1-1-1
                            s-1,0.4-1,1v2c0,0.6,0.4,1,1,1h2C5.6,22,6,21.6,6,21z M22,21v-2c0-0.6-0.4-1-1-1s-1,0.4-1,1v1h-1c-0.6,0-1,0.4-1,1s0.4,1,1,1h2
                            C21.6,22,22,21.6,22,21z"/>
                        <g>
                            <path fill="currentColor" d="M4.7,5.2v5.2c0,0.3,0.2,0.5,0.5,0.5h5.2c0.3,0,0.5-0.2,0.5-0.5V5.2c0-0.3-0.2-0.5-0.5-0.5H5.2C4.9,4.7,4.7,4.9,4.7,5.2z
                                M8.3,8.9h-1C7,8.9,6.8,8.6,6.8,8.3v-1C6.8,7,7,6.8,7.3,6.8h1c0.3,0,0.5,0.2,0.5,0.5v1C8.9,8.6,8.6,8.9,8.3,8.9z"/>
                            <path fill="currentColor" d="M13,5.2v5.2c0,0.3,0.2,0.5,0.5,0.5h5.2c0.3,0,0.5-0.2,0.5-0.5V5.2c0-0.3-0.2-0.5-0.5-0.5h-5.2C13.3,4.7,13,4.9,13,5.2z
                                M16.7,8.9h-1c-0.3,0-0.5-0.2-0.5-0.5v-1c0-0.3,0.2-0.5,0.5-0.5h1c0.3,0,0.5,0.2,0.5,0.5v1C17.2,8.6,17,8.9,16.7,8.9z"/>
                            <path fill="currentColor" d="M4.7,13.6v5.2c0,0.3,0.2,0.5,0.5,0.5h5.2c0.3,0,0.5-0.2,0.5-0.5v-5.2c0-0.3-0.2-0.5-0.5-0.5H5.2C4.9,13,4.7,13.3,4.7,13.6z
                                M8.3,17.2h-1c-0.3,0-0.5-0.2-0.5-0.5v-1c0-0.3,0.2-0.5,0.5-0.5h1c0.3,0,0.5,0.2,0.5,0.5v1C8.9,17,8.6,17.2,8.3,17.2z"/>
                            <path fill="currentColor" d="M18.8,13L18.8,13c0.3,0,0.5,0.2,0.5,0.5v3.1c0,0.3-0.2,0.5-0.5,0.5h-2.1c-0.3,0-0.5-0.2-0.5-0.5v0c0-0.3-0.2-0.5-0.5-0.5h0
                                c-0.3,0-0.5,0.2-0.5,0.5v2.1c0,0.3-0.2,0.5-0.5,0.5h-1c-0.3,0-0.5-0.2-0.5-0.5v-5.2c0-0.3,0.2-0.5,0.5-0.5h2.1
                                c0.3,0,0.5,0.2,0.5,0.5v0c0,0.3,0.2,0.5,0.5,0.5h1c0.3,0,0.5-0.2,0.5-0.5v0C18.3,13.3,18.5,13,18.8,13z"/>
                            <path fill="currentColor" d="M18.8,18.3L18.8,18.3c0.3,0,0.5,0.2,0.5,0.5l0,0c0,0.3-0.2,0.5-0.5,0.5h0c-0.3,0-0.5-0.2-0.5-0.5l0,0
                                C18.3,18.5,18.5,18.3,18.8,18.3z"/>
                            <path fill="currentColor" d="M16.7,18.3L16.7,18.3c0.3,0,0.5,0.2,0.5,0.5l0,0c0,0.3-0.2,0.5-0.5,0.5l0,0c-0.3,0-0.5-0.2-0.5-0.5l0,0
                                C16.2,18.5,16.4,18.3,16.7,18.3z"/>
                        </g>
                    </svg>
                </span>
                Attendance Scanner
            </a>
            <!-- <input type="checkbox" class="btn-check" id="archive-toggle" autocomplete="off">

            <label for="archive-toggle" class="btn btn-danger d-flex align-items-center">
                <span class="svg-icon svg-icon-muted svg-icon-1">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                    </svg>
                </span>
                <span id="archive-text">
                    View Archived
                </span>
            </label> -->
        </div>
    </div>
</div>

<div class="d-flex flex-column flex-column-fluid">
    <div id="kt_app_content_container" class="app-container container-fluid">
        <div class="row mb-3">
            <div class="col-lg-9 order-2 order-lg-1 mb-6">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3">
                            <div class="px-3">
                                <label for="attendance-date" class="fw-bold ff-rubik hover-text-primary d-inline-flex align-items-center pointer">
                                    <span class="svg-icon svg-icon-dark svg-icon-2hx me-1">
                                        <svg width="25" height="28" viewBox="0 0 25 28" class="" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M24.0259 11.4401H1.97259C1.69436 11.4505 1.43123 11.5693 1.2394 11.7711C1.04757 11.9729 0.942247 12.2417 0.945922 12.5201V20.0801C0.933592 21.0248 1.10836 21.9627 1.46016 22.8395C1.81196 23.7164 2.33382 24.515 2.99568 25.1892C3.65754 25.8635 4.4463 26.4001 5.3165 26.7681C6.1867 27.1361 7.12112 27.3282 8.06592 27.3334H17.9993C19.8855 27.288 21.6778 26.5012 22.988 25.1436C24.2983 23.7859 25.0208 21.9667 24.9993 20.0801V12.5201C25.0037 12.2504 24.9057 11.989 24.7251 11.7886C24.5445 11.5882 24.2947 11.4637 24.0259 11.4401ZM8.73259 21.8401C8.51017 21.84 8.29271 21.7744 8.1073 21.6515C7.92189 21.5287 7.77672 21.354 7.68989 21.1492C7.60306 20.9444 7.5784 20.7186 7.61899 20.5C7.65957 20.2813 7.76361 20.0794 7.91813 19.9194C8.07266 19.7594 8.27084 19.6484 8.48798 19.6003C8.70513 19.5522 8.93164 19.569 9.1393 19.6487C9.34695 19.7283 9.52658 19.8673 9.65578 20.0484C9.78499 20.2294 9.85807 20.4445 9.86592 20.6668C9.86241 20.965 9.74146 21.2499 9.5293 21.4595C9.31714 21.6692 9.03087 21.7868 8.73259 21.7868V21.8401ZM8.73259 17.5868C8.50844 17.5868 8.28932 17.5203 8.10294 17.3958C7.91657 17.2712 7.77131 17.0942 7.68553 16.8871C7.59975 16.6801 7.5773 16.4522 7.62103 16.2323C7.66476 16.0125 7.7727 15.8105 7.9312 15.652C8.0897 15.4935 8.29164 15.3856 8.51149 15.3419C8.73133 15.2981 8.95921 15.3206 9.1663 15.4064C9.37339 15.4921 9.55039 15.6374 9.67492 15.8238C9.79945 16.0102 9.86592 16.2293 9.86592 16.4534C9.86771 16.6028 9.83962 16.7509 9.7833 16.8892C9.72697 17.0276 9.64356 17.1532 9.53796 17.2588C9.43236 17.3644 9.30672 17.4478 9.1684 17.5041C9.03009 17.5605 8.88192 17.5886 8.73259 17.5868ZM12.9993 21.8401C12.701 21.8331 12.4175 21.7088 12.2104 21.4941C12.0032 21.2794 11.889 20.9917 11.8926 20.6934C11.8926 20.3964 12.0106 20.1115 12.2206 19.9015C12.4307 19.6914 12.7155 19.5734 13.0126 19.5734C13.3096 19.5734 13.5945 19.6914 13.8045 19.9015C14.0146 20.1115 14.1326 20.3964 14.1326 20.6934C14.1291 20.9917 14.0081 21.2765 13.796 21.4862C13.5838 21.6959 13.2975 21.8135 12.9993 21.8134V21.8401ZM12.9993 17.5868C12.701 17.5798 12.4175 17.4555 12.2104 17.2408C12.0032 17.0261 11.889 16.7384 11.8926 16.4401C11.8926 16.1431 12.0106 15.8582 12.2206 15.6481C12.4307 15.4381 12.7155 15.3201 13.0126 15.3201C13.3096 15.3201 13.5945 15.4381 13.8045 15.6481C14.0146 15.8582 14.1326 16.1431 14.1326 16.4401C14.1326 16.7384 14.015 17.0246 13.8054 17.2368C13.5957 17.449 13.3109 17.5699 13.0126 17.5734L12.9993 17.5868ZM17.2393 21.8401C16.9387 21.8401 16.6504 21.7207 16.4379 21.5082C16.2253 21.2956 16.1059 21.0073 16.1059 20.7068C16.1059 20.4062 16.2253 20.1179 16.4379 19.9054C16.6504 19.6928 16.9387 19.5734 17.2393 19.5734C17.5398 19.5734 17.8281 19.6928 18.0406 19.9054C18.2532 20.1179 18.3726 20.4062 18.3726 20.7068C18.3726 21.0073 18.2532 21.2956 18.0406 21.5082C17.8281 21.7207 17.5398 21.8401 17.2393 21.8401ZM17.2393 17.5868C16.9387 17.5868 16.6504 17.4674 16.4379 17.2548C16.2253 17.0423 16.1059 16.754 16.1059 16.4534C16.1059 16.1529 16.2253 15.8646 16.4379 15.652C16.6504 15.4395 16.9387 15.3201 17.2393 15.3201C17.5398 15.3201 17.8281 15.4395 18.0406 15.652C18.2532 15.8646 18.3726 16.1529 18.3726 16.4534C18.3726 16.754 18.2532 17.0423 18.0406 17.2548C17.8281 17.4674 17.5398 17.5868 17.2393 17.5868ZM24.6393 8.13343C24.7349 8.40774 24.7203 8.7085 24.5984 8.9722C24.4765 9.2359 24.2569 9.44192 23.9859 9.54677C23.8703 9.58813 23.7487 9.61063 23.6259 9.61343H2.62592C2.2723 9.61343 1.93316 9.47296 1.68311 9.22291C1.43306 8.97286 1.29259 8.63372 1.29259 8.2801C1.28883 8.11525 1.32066 7.95153 1.38592 7.8001C1.77683 6.84295 2.37003 5.98161 3.12487 5.27509C3.87972 4.56858 4.77837 4.03358 5.75926 3.70677V1.62677C5.75926 1.3863 5.85478 1.15569 6.02481 0.985655C6.19485 0.815622 6.42546 0.720099 6.66592 0.720099C6.90639 0.720099 7.137 0.815622 7.30703 0.985655C7.47707 1.15569 7.57259 1.3863 7.57259 1.62677V3.33343H12.3059V1.62677C12.2904 1.49938 12.3021 1.37015 12.3402 1.24761C12.3783 1.12508 12.442 1.01204 12.5271 0.915961C12.6122 0.819883 12.7167 0.74296 12.8337 0.690277C12.9507 0.637594 13.0776 0.610352 13.2059 0.610352C13.3343 0.610352 13.4611 0.637594 13.5781 0.690277C13.6952 0.74296 13.7997 0.819883 13.8847 0.915961C13.9698 1.01204 14.0335 1.12508 14.0716 1.24761C14.1098 1.37015 14.1215 1.49938 14.1059 1.62677V3.33343H18.3326V1.62677C18.3171 1.49938 18.3287 1.37015 18.3669 1.24761C18.405 1.12508 18.4687 1.01204 18.5538 0.915961C18.6389 0.819883 18.7434 0.74296 18.8604 0.690277C18.9774 0.637594 19.1043 0.610352 19.2326 0.610352C19.3609 0.610352 19.4878 0.637594 19.6048 0.690277C19.7218 0.74296 19.8263 0.819883 19.9114 0.915961C19.9965 1.01204 20.0602 1.12508 20.0983 1.24761C20.1364 1.37015 20.1481 1.49938 20.1326 1.62677V3.70677C21.1713 4.05261 22.1173 4.63121 22.8984 5.39839C23.6794 6.16557 24.2749 7.10105 24.6393 8.13343Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <h1 id="attendance-date-preview" class="m-0 display-5 d-inline">Today</h1>
                                </label> 
                                <br>
                                <input class="visually-hidden" placeholder="Pick a date" value="Today" id="attendance-date"/>
                            </div>
                            <div class="">
                                <button type="button" class="btn btn-sm btn-icon btn-active-color-primary" style="display: none;" id="revert-to-today-button"><i class="fas fa-redo-alt"></i></button>

                                <input type="checkbox" class="btn-check" value="1" id="archive-toggle" autocomplete="off">

                                <label for="archive-toggle" class="btn btn-danger">
                                    <span class="svg-icon svg-icon-muted svg-icon-1 m-0 m-md-2">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor"></path>
                                            <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor"></path>
                                            <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor"></path>
                                        </svg>
                                    </span>
                                    <span id="archive-text" class="d-none d-md-inline">
                                        View Archived
                                    </span>
                                </label>
                            </div>
                        </div>
        
                        <div class="table-responsive">
                            <table class="table table-hover table-rounded border align-middle gx-5 my-0 w-100" id="attendance-table">
                                <thead class="border-bottom border-gray-200">
                                    <tr>
                                        <th class="text-nowrap w-10px">Time-in</th>
                                        <th class="text-nowrap w-10px">Time-out</th>
                                        <th class="text-nowrap">Employee Name</th>
                                        <th class="text-nowrap d-none">Middle Name</th>
                                        <th class="text-nowrap d-none">Last Name</th>
                                        <th class="text-nowrap">Department Name</th>
                                        <th class="text-nowrap w-10px">Actions</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 order-1 order-lg-2">
                <div class="card mb-6">
                    <div class="card-body">
                        <div class="position-relative">
                            <div id="total-attendance-logged-chart" class="pb-3"></div>
                            <div id="total-attendance-logged-chart-overlay" class="position-absolute h-100 w-100 top-0 p-0" style="background-color: var(--kt-card-bg);"></div>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div class="">
                                <h5 class="mb-0">Total Attendance Logged</h5>
                                <p class="mb-0 text-gray-700">
                                    Date: <span id="total-attendance-logged-date"><?=date("Y-m-d")?></span>
                                </p>
                            </div>
                            <span class="svg-icon svg-icon-dark svg-icon-4x">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill="currentColor" opacity="0.3" d="M3,6C2.4,6,2,5.6,2,5V3c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1S5.6,4,5,4H4v1C4,5.6,3.6,6,3,6z M22,5V3
                                        c0-0.6-0.4-1-1-1h-2c-0.6,0-1,0.4-1,1s0.4,1,1,1h1v1c0,0.6,0.4,1,1,1S22,5.6,22,5z M6,21c0-0.6-0.4-1-1-1H4v-1c0-0.6-0.4-1-1-1
                                        s-1,0.4-1,1v2c0,0.6,0.4,1,1,1h2C5.6,22,6,21.6,6,21z M22,21v-2c0-0.6-0.4-1-1-1s-1,0.4-1,1v1h-1c-0.6,0-1,0.4-1,1s0.4,1,1,1h2
                                        C21.6,22,22,21.6,22,21z"/>
                                    <g>
                                        <path fill="currentColor" d="M4.7,5.2v5.2c0,0.3,0.2,0.5,0.5,0.5h5.2c0.3,0,0.5-0.2,0.5-0.5V5.2c0-0.3-0.2-0.5-0.5-0.5H5.2C4.9,4.7,4.7,4.9,4.7,5.2z
                                            M8.3,8.9h-1C7,8.9,6.8,8.6,6.8,8.3v-1C6.8,7,7,6.8,7.3,6.8h1c0.3,0,0.5,0.2,0.5,0.5v1C8.9,8.6,8.6,8.9,8.3,8.9z"/>
                                        <path fill="currentColor" d="M13,5.2v5.2c0,0.3,0.2,0.5,0.5,0.5h5.2c0.3,0,0.5-0.2,0.5-0.5V5.2c0-0.3-0.2-0.5-0.5-0.5h-5.2C13.3,4.7,13,4.9,13,5.2z
                                            M16.7,8.9h-1c-0.3,0-0.5-0.2-0.5-0.5v-1c0-0.3,0.2-0.5,0.5-0.5h1c0.3,0,0.5,0.2,0.5,0.5v1C17.2,8.6,17,8.9,16.7,8.9z"/>
                                        <path fill="currentColor" d="M4.7,13.6v5.2c0,0.3,0.2,0.5,0.5,0.5h5.2c0.3,0,0.5-0.2,0.5-0.5v-5.2c0-0.3-0.2-0.5-0.5-0.5H5.2C4.9,13,4.7,13.3,4.7,13.6z
                                            M8.3,17.2h-1c-0.3,0-0.5-0.2-0.5-0.5v-1c0-0.3,0.2-0.5,0.5-0.5h1c0.3,0,0.5,0.2,0.5,0.5v1C8.9,17,8.6,17.2,8.3,17.2z"/>
                                        <path fill="currentColor" d="M18.8,13L18.8,13c0.3,0,0.5,0.2,0.5,0.5v3.1c0,0.3-0.2,0.5-0.5,0.5h-2.1c-0.3,0-0.5-0.2-0.5-0.5v0c0-0.3-0.2-0.5-0.5-0.5h0
                                            c-0.3,0-0.5,0.2-0.5,0.5v2.1c0,0.3-0.2,0.5-0.5,0.5h-1c-0.3,0-0.5-0.2-0.5-0.5v-5.2c0-0.3,0.2-0.5,0.5-0.5h2.1
                                            c0.3,0,0.5,0.2,0.5,0.5v0c0,0.3,0.2,0.5,0.5,0.5h1c0.3,0,0.5-0.2,0.5-0.5v0C18.3,13.3,18.5,13,18.8,13z"/>
                                        <path fill="currentColor" d="M18.8,18.3L18.8,18.3c0.3,0,0.5,0.2,0.5,0.5l0,0c0,0.3-0.2,0.5-0.5,0.5h0c-0.3,0-0.5-0.2-0.5-0.5l0,0
                                            C18.3,18.5,18.5,18.3,18.8,18.3z"/>
                                        <path fill="currentColor" d="M16.7,18.3L16.7,18.3c0.3,0,0.5,0.2,0.5,0.5l0,0c0,0.3-0.2,0.5-0.5,0.5l0,0c-0.3,0-0.5-0.2-0.5-0.5l0,0
                                            C16.2,18.5,16.4,18.3,16.7,18.3z"/>
                                    </g>
                                </svg>
                            </span>
                        </div>
                        <div class="d-flex justify-content-between align-items-end">
                            <div class="display-1 ff-rubik" id="total-attendance-logged-digit">0</div>
                            <a href="<?=base_url()?>/attendances/scan"><i class="bi bi-caret-right text-primary"></i> Go to attendance scanner</a>
                        </div>
                    </div>
                </div>
                <div class="card mb-6">
                    <div class="card-body">
                        <h5 class="mb-0" id="calendar-month">March</h5>
                        <div class="separator separator-dashed border-secondary my-2"></div>
                        <table class="w-100 g-0" style="table-layout: fixed;" id="calendar-table">
                            <thead>
                                <tr>
                                    <th class="fw-semibold text-center">Su</th>
                                    <th class="fw-semibold text-center">Mo</th>
                                    <th class="fw-semibold text-center">Tu</th>
                                    <th class="fw-semibold text-center">We</th>
                                    <th class="fw-semibold text-center">Th</th>
                                    <th class="fw-semibold text-center">Fr</th>
                                    <th class="fw-semibold text-center">Sa</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
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
    let date_flatpickr, selected_date;
    let attendance_table, attendance_table_data, current_total_records;
    let total_attendance_logged_chart, total_attendance_logged_countUp;
    const today = "<?=date("Y-m-d")?>";
    // const today = "2024-03-07";
    
    $(function () {
    // Attendance Table
        attendance_table = $("#attendance-table").DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: '<?=base_url()?>/attendances/attendanceLogsDataTable',
                type: 'POST',
                data: function (d) {
                    d.date = date_flatpickr ? date_flatpickr.formatDate(date_flatpickr.selectedDates[0], "Y-m-d") : today;
                    d.is_deleted = $("#archive-toggle").is(":checked");
                }
            },
            responsive: true,
            columns:[
                {
                    data: "time_in",
                    className: "text-nowrap"
                },
                {
                    data: "time_out",
                    className: "text-nowrap",
                    defaultContent: `<i class="text-muted">-</i>`
                },
                {
                    data: "firstname",
                    className: "border-start",
                    render: function(data, type, row){
                        return `
                        <div class="symbol symbol-50px me-3 d-none d-md-inline">
                            <img src="<?=base_url()?>/public/assets/media/employee-profile/${row.photo ? row.photo : 'default-avatar.png' }" alt=""/>
                        </div>
                        ${row.firstname} ${row.middlename} ${row.lastname}
                        `
                    }
                },
                {
                    data: "middlename",
                    className: "d-none"
                },
                {
                    data: "lastname",
                    className: "d-none",
                },
                {
                    data: "dept_alias",
                    className: "position-relative",
                    render: function(data, type, row){
                        return `
                        <div class="position-absolute top-0 start-0 w-100 h-100 ps-5 pe-3 d-flex align-items-center" title="${row.dept_name.toTitleCase()}">
                            <div class="text-truncate">    
                                ${data} -  ${row.dept_name.toTitleCase()}
                            </div>    
                        </div>
                        `
                    }
                },
                {
                    data: "attendance_id",
                    className: "text-end",
                    render: function(data, type, row){
                        if(!row.deleted_at){
                            return `
                                <button type="button" class="btn p-0 btn-active-icon-danger archive-attendance" data-attendance-id="${data}">
                                    <span class="svg-icon svg-icon-2x">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
                                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor"/>
                                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor"/>
                                        </svg>
                                    </span>
                                </button>
                                `;
                        }
                        return `
                        <button type="button" class="btn p-0 btn-active-icon-success unarchive-attendance" data-attendance-id="${data}">
                            <span class="svg-icon svg-icon-2x">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1" transform="rotate(90 12.75 4.25)" fill="currentColor"/>
                                    <path d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z" fill="currentColor"/>
                                    <path opacity="0.3" d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </button>
                        `;
                        
                    }
                },
            ],
            drawCallback: function (settings) {
                setAttendanceLoggedStatistics(date_flatpickr ? date_flatpickr.formatDate(date_flatpickr.selectedDates[0], "Y-m-d") : today)
            }
        }).on("xhr.dt", function (e, settings, json, xhr) {
            attendance_table_data = json.data;
        })

        $("#attendance-table").on("click", ".archive-attendance", function(){
            const attendance_id = this.dataset.attendanceId;
            confirm("CAUTION", "Are you sure you want to delete this attendance record?", "warning", "<?=base_url()?>/attendances/archiveAttendanceRecord/"+attendance_id, "POST", null, function(){
                reloadDataTable(attendance_table);
            });
        });

        $("#attendance-table").on("click", ".unarchive-attendance", function(){
            const attendance_id = this.dataset.attendanceId;
            confirm("CAUTION", "Are you sure you want to restore this attendance record?", "warning", "<?=base_url()?>/attendances/unarchiveAttendanceRecord/"+attendance_id, "POST", null, function(){
                reloadDataTable(attendance_table);
            });
        });

        $("#archive-toggle").change(function(){
            $(this).next("label").toggleClass("btn-danger btn-success")
            $("#archive-text").html(`${this.checked ? "Hide" : "View"} Archived`);
            reloadDataTable(attendance_table);

        })
    //

    // Date Picker
        date_flatpickr = $("#attendance-date").flatpickr({
            maxDate: today,
            defaultDate: today,
            onChange: async function(selectedDates, dateStr, instance) {
                let date = mySQLDateToText(dateStr);
                $("#revert-to-today-button").show();
                if(today == dateStr){
                    date = "Today";
                    $("#revert-to-today-button").hide();
                }
                
                $("#attendance-date-preview").text(date);
                setAttendanceLoggedStatistics(dateStr)
                await setCalendar(selectedDates[0].getFullYear(), selectedDates[0].getMonth());

                reloadDataTable(attendance_table);
            },
        });

        $("#revert-to-today-button").click(function(){
            date_flatpickr.setDate(today, true);
        });
    //
    
    // Attendance Logged Statistics
        const total_attendance_logged_chart_options = {
            series: [{
                name: 'Logged',
                data: []
            }],
            chart: {
                height: 100,
                type: 'line',
                sparkline: {
                    enabled: true,
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            xaxis: {
                type: 'datetime',
                categories: [],
                labels: {
                    show: false,
                }
            },
            yaxis: {
                labels: {
                    show: false,
                },
                min: -1
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
                y: {
                    formatter: function(value, { series, seriesIndex, dataPointIndex, w }) {
                        return value
                    },
                },
            },
            colors: ['#181c32']
        };
        total_attendance_logged_chart = new ApexCharts($("#total-attendance-logged-chart")[0], total_attendance_logged_chart_options);
        total_attendance_logged_chart.render();
      
        total_attendance_logged_countUp = new countUp.CountUp("total-attendance-logged-digit", 0);
        if (!total_attendance_logged_countUp.error) {
            total_attendance_logged_countUp.start();
        } else {
            console.error(total_attendance_logged_countUp.error);
        }

        $("#calendar-table").on("click", ".calendar-attendance", function(){
            const date = this.dataset.date;
            const tooltip = bootstrap.Tooltip.getInstance(this);
            tooltip.dispose()
            date_flatpickr.setDate(date, true)
        })

        setCalendar(new Date(today).getFullYear(), new Date(today).getMonth());
    //
    });

    async function setAttendanceLoggedStatistics(date = "2024-03-07"){
        $("#total-attendance-logged-chart-overlay").fadeIn()
        const total = await fetch(`<?=base_url()?>/attendances/getAttendanceLogs?date=${date}`)
            .then(data => data.json())
            .then(response => {
                const attendance_logs = response.data;
                const chart_data = {};
                let highest = 0;
                if(response.error){
                    total_attendance_logged_countUp.update(0);
                    return;
                }
                
                attendance_logs.forEach((attendance_log, index) => {
                    const time = attendance_log.time_in.split(" ")[1].split(":");
                    const hours = time[0];
                    const minutes = time[1];
                    const key = `${date}T${hours}:${minutes}:00.000Z`;
                    if(index == 0){
                        const excess_mins = 5-minutes%5 ? 5-minutes%5 : 5;
                        let new_mins = Number(minutes)+excess_mins;
                        let new_hours = hours;
                        if(new_mins > 59){
                            new_mins = 5;
                            new_hours = new_hours+1;
                        }
                        const first_key = `${date}T${new_hours}:${new_mins < 10 ? "0"+new_mins : new_mins}:00.000Z`;
                        chart_data[first_key] = 0;
                    }

                    if(!chart_data.hasOwnProperty(key)){
                        chart_data[key] = 1;
                    }else{
                        chart_data[key] = chart_data[key]+1;
                    }
                    highest = highest < chart_data[key] ? chart_data[key] : highest;
                    
                    if(index+1 == attendance_logs.length){
                        const excess_mins = minutes%5 ? minutes%5 : 5;
                        let new_mins = Number(minutes)-excess_mins;
                        let new_hours = hours;
                        if(new_mins < 1){
                            new_mins = 5;
                            new_hours = new_hours-1;
                        }
                        const last_key = `${date}T${new_hours}:${new_mins < 10 ? "0"+new_mins : new_mins}:00.000Z`;
                        chart_data[last_key] = 0;
                    }
                });

                total_attendance_logged_countUp.update(attendance_logs.length);

                total_attendance_logged_chart.updateOptions({
                    xaxis: {
                        categories: Object.keys(chart_data),
                    },
                    yaxis: {
                        min: -1, 
                        max: highest + 1,
                        labels: {
                            show: false,
                        },
                    },
                });
                total_attendance_logged_chart.updateSeries([{
                    data: Object.values(chart_data)
                }])

                $("#total-attendance-logged-date").text(date)

                return highest;
            })
        if(total){
            $("#total-attendance-logged-chart-overlay").fadeOut()
        }
    }

    async function setCalendar(year, month) {
        const days_in_month = new Date(year, month + 1, 0).getDate();
        const weeks = {};
        const th_width = $("#calendar-table > thead > tr > th:first-child").width();
        let week_index = 0;
        $("#calendar-month").html(new Date(year, month + 1, 0).toLocaleString('default', { month: 'long' }))
        $("#calendar-table > tbody").html("");
        for (let day = 1; day <= days_in_month; day++) {
            const date = new Date(year, month, day);
            if(date.getDay()==0 || day == 1){
                week_index++;
                weeks[week_index] = {};
            }
            weeks[week_index][date.getDay()] = date.getDate();
        }

        const month_attendance = await fetch(`<?=base_url()?>/attendances/getMonthAttendance/${year}/${month+1}`)
                                        .then(data => data.json())
                                        .then(response => response);
                                        
        for (const week_number in weeks) {
            if (Object.hasOwnProperty.call(weeks, week_number)) {
                const days = weeks[week_number];
                let days_td = '';
                for (let index = 0; index < 7; index++) {
                    const day = days[index];
                    const day_attendance = searchArrayById(month_attendance, day, "day");
                    const max_attendance = month_attendance.reduce((max, obj) => {
                        return obj.total > max ? obj.total : max;
                    }, 0);
                    
                    let date_class = "opacity-0";
                    
                    if(day){
                        date_class = "bg-light-secondary text-gray-800";

                        if(!index || index == 6){
                            date_class = "bg-light-danger text-danger";
                        }

                        if(day_attendance){
                            const percentage = day_attendance.total/max_attendance;
                            date_class = "pointer calendar-attendance ";
                            switch (true) {
                                case percentage <= 0.2:
                                        date_class += "bg-primary bg-opacity-10 text-primary";
                                    break;
                                case percentage <= 0.4:
                                        date_class += "bg-primary bg-opacity-25 text-primary";
                                    break;
                                case percentage <= 0.6:
                                        date_class += "bg-primary bg-opacity-50 text-white";
                                    break;
                                case percentage <= 0.8:
                                        date_class += "bg-primary bg-opacity-75 text-white";
                                    break;
                                case percentage <= 1:
                                        date_class += "bg-primary text-white";
                                    break;
                                default:
                                        date_class += "bg-primary bg-opacity-10 text-primary";
                                    break;
                            }
                        }
                    }
                    
                    days_td += `
                        <td class="fw-light ff-rubik">
                            <div class="${date_class} d-inline-flex align-items-center justify-content-center w-100 ${day ? "calendar-date" : ""}" 
                                 style="height: ${th_width}px;" data-date="${day_attendance ? day_attendance.time_in.split(" ")[0] : ""}"
                                 data-bs-dismiss="click"
                                 data-bs-toggle="tooltip" data-bs-title="Attendance logged: ${day_attendance ? day_attendance.total : ""}"
                            >
                                ${day ? day : "&nbsp;"}
                            </div>
                        </td>
                    `;
                }
                $("#calendar-table > tbody").append(`<tr class="week">${days_td}</tr>`);
            }
        }

        const tooltipTriggerList = document.querySelectorAll('.calendar-attendance')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    }
</script>
<?= $this->endSection(); ?>