<div id="kt_app_footer" class="app-footer">
    <div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted fw-semibold me-1"><?= date('Y')?> ©</span>
            <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Baliwag City | City Information and Technology Office</a>
        </div>
        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
            <li class="menu-item">
                <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
            </li>
            <li class="menu-item">
                <a href="mailto:geslanidarrel@gmail.com" target="_blank" class="menu-link px-2">Support</a>
            </li>
            <!-- <li class="menu-item">
                <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
            </li> -->
        </ul>
    </div>
</div>
<div id="loading-overlay" class="position-fixed h-100 w-100 top-0 start-0 " style="
    z-index: 1000;
    background: rgba(255, 255, 255, 0.2);
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    backdrop-filter: blur(2px);
    -webkit-backdrop-filter: blur(2px);
    display: none;
    ">
    <div class="d-flex flex-column align-items-center justify-content-center h-100 w-100">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
        <span class="text-muted fs-6 fw-semibold mt-5">Loading...</span>
    </div>
</div>