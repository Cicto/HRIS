<script>
    var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-theme-mode");
        } else {
            if (localStorage.getItem("data-theme") !== null) {
                themeMode = localStorage.getItem("data-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-theme", themeMode);
    }
</script>
<script src="<?= base_url()?>/public/assets/libs/jquery/jquery.min.js"></script>

<!-- App js -->
<script src="<?= base_url()?>/public/assets/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url()?>/public/assets/js/scripts.bundle.js"></script>

<script src="<?=base_url()?>/public/assets/plugins/custom/cropper/cropper.bundle.js"></script>

<!-- DATATABLES -->
<script src="<?= base_url()?>/public/assets/plugins/custom/datatables/datatables.bundle.js"></script>

<!-- Custom js -->
<script src="<?= base_url()?>/public/assets/js/my-custom.js"></script>
<script src="<?= base_url()?>/public/assets/js/services/form-misc.js"></script>

<!-- JMask -->
<script src="<?= base_url()?>/public/assets/libs/jquery-mask-plugin/jquery.mask.min.js"></script>

<!-- SweetAlert2 js -->
<script src="<?= base_url()?>/public/assets/libs/sweetalert2/sweetalert2.all.min.js"></script>
<script>
    document.onkeydown = function (e) {
        // disable F12 key
        if (e.keyCode == 123) {
            return false;
        }
    }
    const base_url = "<?=base_url()?>";
    const current_url = window.location.href.split('#')[0];
    const user_id = <?=$userInformation->user_id?>

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": false,
        "positionClass": "toastr-bottom-center",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "800",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

</script>