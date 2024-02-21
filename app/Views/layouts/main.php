<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= getenv('app.name')?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>/public/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url()?>/public/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>/public/favicon-16x16.png">
    <link rel="manifest" href="<?=base_url()?>/public/site.webmanifest">

    <link href="<?= base_url()?>/public/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url()?>/public/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

    <!-- icons -->
    <link href="<?= base_url()?>/public/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url()?>/public/assets/plugins/custom/cropper/cropper.bundle.css" rel="stylesheet" type="text/css" />
    
    <link href="<?= base_url()?>/public/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="<?= base_url()?>/public/assets/css/my-custom.css" rel="stylesheet" type="text/css" />

    <?= $this->renderSection('css'); ?>

</head>

<body id="kt_app_body" data-kt-app-layout="light-sidebar" data-kt-app-header-fixed="true"
    data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
    
    <style>
        .bg-blur{
            filter: blur(1px);
            backdrop-filter: blur(1px);
        }

        .optional:after{
            content: " (optional)";
            color: var(--kt-gray-400);
            font-weight: 400;
        }

        body.swal2-shown > [aria-hidden='true'] {
            transition: 0.1s filter;
            filter: blur(2px);
        }

        .swal2-modal{
            padding: 0px;
            overflow: hidden;
        }
    </style>

    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">

            <?= $this->include('partials/header')?>

            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                <?= $this->include('partials/sidebar')?>

                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

                    <?= $this->renderSection('content'); ?>

                    <?= $this->include('partials/footer')?>
                </div>
            </div>
        </div>
    </div>
    
    <?= $this->include('partials/jsLibraries')?>
    <?= $this->renderSection('javascript'); ?>
</body>

</html>