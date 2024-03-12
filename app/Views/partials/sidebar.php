<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <div class="app-sidebar-logo px-6 text-center" id="kt_app_sidebar_logo">
        <!-- <a href="<?=base_url()?>" class="mx-auto">
            <img alt="Logo" src="<?= base_url()?>/public/assets/media/logos/bessy-logo2.png" class="h-30px app-sidebar-logo-default" style="filter: grayscale(200%) invert(100%) brightness(1.2);">
            <img alt="Logo" src="<?= base_url()?>/public/assets/media/logos/bessy-mini-logo.png" class="h-30px app-sidebar-logo-minimize" style="filter: grayscale(200%) invert(100%) brightness(1.2);">
        </a> -->
        <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">

            <span class="svg-icon svg-icon-2 rotate-180">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.5" d="M14.2657 11.4343L18.45 7.25C18.8642 6.83579 18.8642 6.16421 18.45 5.75C18.0358 5.33579 17.3642 5.33579 16.95 5.75L11.4071 11.2929C11.0166 11.6834 11.0166 12.3166 11.4071 12.7071L16.95 18.25C17.3642 18.6642 18.0358 18.6642 18.45 18.25C18.8642 17.8358 18.8642 17.1642 18.45 16.75L14.2657 12.5657C13.9533 12.2533 13.9533 11.7467 14.2657 11.4343Z" fill="currentColor"></path>
                    <path d="M8.2657 11.4343L12.45 7.25C12.8642 6.83579 12.8642 6.16421 12.45 5.75C12.0358 5.33579 11.3642 5.33579 10.95 5.75L5.40712 11.2929C5.01659 11.6834 5.01659 12.3166 5.40712 12.7071L10.95 18.25C11.3642 18.6642 12.0358 18.6642 12.45 18.25C12.8642 17.8358 12.8642 17.1642 12.45 16.75L8.2657 12.5657C7.95328 12.2533 7.95328 11.7467 8.2657 11.4343Z" fill="currentColor"></path>
                </svg>
            </span>
        </div>
    </div>    
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid ">
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true" style="height: 428px;">                        
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
                <div class="menu-item">
                    <a class="menu-link" href="<?= base_url()?>">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5 11C8.98528 11 11 8.98528 11 6.5C11 4.01472 8.98528 2 6.5 2C4.01472 2 2 4.01472 2 6.5C2 8.98528 4.01472 11 6.5 11Z" fill="currentColor"></path>
                                    <path opacity="0.3" d="M13 6.5C13 4 15 2 17.5 2C20 2 22 4 22 6.5C22 9 20 11 17.5 11C15 11 13 9 13 6.5ZM6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22ZM17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22Z" fill="currentColor"></path>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </div>    
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">System</span>
                    </div>
                </div>
                <div class="menu-item">
                    <a class="menu-link" href="<?= base_url().'/employees'?>">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"></path>
                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"></rect>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Employee List</span>
                    </a>
                </div>   
                <div class="menu-item">
                    <a class="menu-link" href="<?= base_url().'/attendances'?>">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="25" height="28" viewBox="0 0 25 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.0259 11.4401H1.97259C1.69436 11.4505 1.43123 11.5693 1.2394 11.7711C1.04757 11.9729 0.942247 12.2417 0.945922 12.5201V20.0801C0.933592 21.0248 1.10836 21.9627 1.46016 22.8395C1.81196 23.7164 2.33382 24.515 2.99568 25.1892C3.65754 25.8635 4.4463 26.4001 5.3165 26.7681C6.1867 27.1361 7.12112 27.3282 8.06592 27.3334H17.9993C19.8855 27.288 21.6778 26.5012 22.988 25.1436C24.2983 23.7859 25.0208 21.9667 24.9993 20.0801V12.5201C25.0037 12.2504 24.9057 11.989 24.7251 11.7886C24.5445 11.5882 24.2947 11.4637 24.0259 11.4401ZM8.73259 21.8401C8.51017 21.84 8.29271 21.7744 8.1073 21.6515C7.92189 21.5287 7.77672 21.354 7.68989 21.1492C7.60306 20.9444 7.5784 20.7186 7.61899 20.5C7.65957 20.2813 7.76361 20.0794 7.91813 19.9194C8.07266 19.7594 8.27084 19.6484 8.48798 19.6003C8.70513 19.5522 8.93164 19.569 9.1393 19.6487C9.34695 19.7283 9.52658 19.8673 9.65578 20.0484C9.78499 20.2294 9.85807 20.4445 9.86592 20.6668C9.86241 20.965 9.74146 21.2499 9.5293 21.4595C9.31714 21.6692 9.03087 21.7868 8.73259 21.7868V21.8401ZM8.73259 17.5868C8.50844 17.5868 8.28932 17.5203 8.10294 17.3958C7.91657 17.2712 7.77131 17.0942 7.68553 16.8871C7.59975 16.6801 7.5773 16.4522 7.62103 16.2323C7.66476 16.0125 7.7727 15.8105 7.9312 15.652C8.0897 15.4935 8.29164 15.3856 8.51149 15.3419C8.73133 15.2981 8.95921 15.3206 9.1663 15.4064C9.37339 15.4921 9.55039 15.6374 9.67492 15.8238C9.79945 16.0102 9.86592 16.2293 9.86592 16.4534C9.86771 16.6028 9.83962 16.7509 9.7833 16.8892C9.72697 17.0276 9.64356 17.1532 9.53796 17.2588C9.43236 17.3644 9.30672 17.4478 9.1684 17.5041C9.03009 17.5605 8.88192 17.5886 8.73259 17.5868ZM12.9993 21.8401C12.701 21.8331 12.4175 21.7088 12.2104 21.4941C12.0032 21.2794 11.889 20.9917 11.8926 20.6934C11.8926 20.3964 12.0106 20.1115 12.2206 19.9015C12.4307 19.6914 12.7155 19.5734 13.0126 19.5734C13.3096 19.5734 13.5945 19.6914 13.8045 19.9015C14.0146 20.1115 14.1326 20.3964 14.1326 20.6934C14.1291 20.9917 14.0081 21.2765 13.796 21.4862C13.5838 21.6959 13.2975 21.8135 12.9993 21.8134V21.8401ZM12.9993 17.5868C12.701 17.5798 12.4175 17.4555 12.2104 17.2408C12.0032 17.0261 11.889 16.7384 11.8926 16.4401C11.8926 16.1431 12.0106 15.8582 12.2206 15.6481C12.4307 15.4381 12.7155 15.3201 13.0126 15.3201C13.3096 15.3201 13.5945 15.4381 13.8045 15.6481C14.0146 15.8582 14.1326 16.1431 14.1326 16.4401C14.1326 16.7384 14.015 17.0246 13.8054 17.2368C13.5957 17.449 13.3109 17.5699 13.0126 17.5734L12.9993 17.5868ZM17.2393 21.8401C16.9387 21.8401 16.6504 21.7207 16.4379 21.5082C16.2253 21.2956 16.1059 21.0073 16.1059 20.7068C16.1059 20.4062 16.2253 20.1179 16.4379 19.9054C16.6504 19.6928 16.9387 19.5734 17.2393 19.5734C17.5398 19.5734 17.8281 19.6928 18.0406 19.9054C18.2532 20.1179 18.3726 20.4062 18.3726 20.7068C18.3726 21.0073 18.2532 21.2956 18.0406 21.5082C17.8281 21.7207 17.5398 21.8401 17.2393 21.8401ZM17.2393 17.5868C16.9387 17.5868 16.6504 17.4674 16.4379 17.2548C16.2253 17.0423 16.1059 16.754 16.1059 16.4534C16.1059 16.1529 16.2253 15.8646 16.4379 15.652C16.6504 15.4395 16.9387 15.3201 17.2393 15.3201C17.5398 15.3201 17.8281 15.4395 18.0406 15.652C18.2532 15.8646 18.3726 16.1529 18.3726 16.4534C18.3726 16.754 18.2532 17.0423 18.0406 17.2548C17.8281 17.4674 17.5398 17.5868 17.2393 17.5868ZM24.6393 8.13343C24.7349 8.40774 24.7203 8.7085 24.5984 8.9722C24.4765 9.2359 24.2569 9.44192 23.9859 9.54677C23.8703 9.58813 23.7487 9.61063 23.6259 9.61343H2.62592C2.2723 9.61343 1.93316 9.47296 1.68311 9.22291C1.43306 8.97286 1.29259 8.63372 1.29259 8.2801C1.28883 8.11525 1.32066 7.95153 1.38592 7.8001C1.77683 6.84295 2.37003 5.98161 3.12487 5.27509C3.87972 4.56858 4.77837 4.03358 5.75926 3.70677V1.62677C5.75926 1.3863 5.85478 1.15569 6.02481 0.985655C6.19485 0.815622 6.42546 0.720099 6.66592 0.720099C6.90639 0.720099 7.137 0.815622 7.30703 0.985655C7.47707 1.15569 7.57259 1.3863 7.57259 1.62677V3.33343H12.3059V1.62677C12.2904 1.49938 12.3021 1.37015 12.3402 1.24761C12.3783 1.12508 12.442 1.01204 12.5271 0.915961C12.6122 0.819883 12.7167 0.74296 12.8337 0.690277C12.9507 0.637594 13.0776 0.610352 13.2059 0.610352C13.3343 0.610352 13.4611 0.637594 13.5781 0.690277C13.6952 0.74296 13.7997 0.819883 13.8847 0.915961C13.9698 1.01204 14.0335 1.12508 14.0716 1.24761C14.1098 1.37015 14.1215 1.49938 14.1059 1.62677V3.33343H18.3326V1.62677C18.3171 1.49938 18.3287 1.37015 18.3669 1.24761C18.405 1.12508 18.4687 1.01204 18.5538 0.915961C18.6389 0.819883 18.7434 0.74296 18.8604 0.690277C18.9774 0.637594 19.1043 0.610352 19.2326 0.610352C19.3609 0.610352 19.4878 0.637594 19.6048 0.690277C19.7218 0.74296 19.8263 0.819883 19.9114 0.915961C19.9965 1.01204 20.0602 1.12508 20.0983 1.24761C20.1364 1.37015 20.1481 1.49938 20.1326 1.62677V3.70677C21.1713 4.05261 22.1173 4.63121 22.8984 5.39839C23.6794 6.16557 24.2749 7.10105 24.6393 8.13343Z" fill="currentColor"/>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Attendance</span>
                    </a>
                </div>   
                <div class="menu-item">
                    <a class="menu-link" href="<?= base_url().'/systemLogs'?>">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-muted svg-icon-2">
                                <svg width="16" height="15" viewBox="0 0 16 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect y="6" width="16" height="3" rx="1.5" fill="currentColor"/>
                                    <rect opacity="0.3" y="12" width="8" height="3" rx="1.5" fill="currentColor"/>
                                    <rect opacity="0.3" width="12" height="3" rx="1.5" fill="currentColor"/>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">System Logs</span>
                    </a>
                </div>

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <span class="menu-link ">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.3" d="M11.8 5.2L17.7 8.6V15.4L11.8 18.8L5.90001 15.4V8.6L11.8 5.2ZM11.8 2C11.5 2 11.2 2.1 11 2.2L3.8 6.4C3.3 6.7 3 7.3 3 7.9V16.2C3 16.8 3.3 17.4 3.8 17.7L11 21.9C11.3 22 11.5 22.1 11.8 22.1C12.1 22.1 12.4 22 12.6 21.9L19.8 17.7C20.3 17.4 20.6 16.8 20.6 16.2V7.9C20.6 7.3 20.3 6.7 19.8 6.4L12.6 2.2C12.4 2.1 12.1 2 11.8 2Z" fill="currentColor"></path>
                                    <path d="M11.8 8.69995L8.90001 10.3V13.7L11.8 15.3L14.7 13.7V10.3L11.8 8.69995Z" fill="currentColor"></path>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">Configurations</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <div class="menu-sub menu-sub-accordion" style="display: none; overflow: hidden;">
                        <div class="menu-item">
                            <a class="menu-link" href="<?= base_url()?>/departments">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Departments</span>
                            </a>
                            <a class="menu-link" href="<?= base_url()?>/plantilla">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Plantilla</span>
                            </a>
                            <a class="menu-link" href="<?= base_url()?>/requirements">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Requirements List</span>
                            </a>
                        </div>
                    </div>
                </div> 
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">User Management</span>
                    </div>
                </div>   
                <div class="menu-item">
                    <a class="menu-link" href="<?= base_url().'/users'?>">
                        <span class="menu-icon">
                            <span class="svg-icon svg-icon-2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor"></path>
                                    <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor"></rect>
                                </svg>
                            </span>
                        </span>
                        <span class="menu-title">System User</span>
                    </a>
                </div>    
            </div>
        </div>
    </div>
</div>
