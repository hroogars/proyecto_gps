<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Sistema CCP </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="<?php echo e(asset('logo.ico')); ?>">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="<?php echo e(asset('css/vendor.css')); ?>">
        <!-- Theme initialization -->
        <link rel="stylesheet" id="theme-style" href="<?php echo e(asset('css/app.css')); ?>">

        <style type="text/css">
            .hidden {
              display: none !important;
            }
        </style>
    </head>
    <body>
        <div class="auth">
            <div class="auth-container">
                <div class="card">
                    <header class="auth-header">
                        <h1 class="auth-title">
                            <div class="logo">
                                <span class="l l1"></span>
                                <span class="l l2"></span>
                                <span class="l l3"></span>
                                <span class="l l4"></span>
                                <span class="l l5"></span>
                            </div> Sistema CCP </h1>
                    </header>
                    <div class="auth-content">
                       <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reference block for JS -->
        <div class="ref" id="ref">
            <div class="color-primary"></div>
            <div class="chart">
                <div class="color-primary"></div>
                <div class="color-secondary"></div>
            </div>
        </div>
        <script src="<?php echo e(asset('js/vendor.js')); ?>"></script>
        <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    </body>
</html>