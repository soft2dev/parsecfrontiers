<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo $__env->yieldContent('title'); ?> </title>

    <!-- Bootstrap -->

    <link rel="stylesheet" href="<?php echo asset('members/css/owl.carousel.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('members/css/owl.theme.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('members/css/animate.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('members/css/font/flaticon.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('members/css/bootstrap.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('members/css/main-style.css'); ?>" />
    <link rel="stylesheet" href="<?php echo asset('members/css/responsive.css'); ?>" />
</head>
<body style="background-color:#000000!important">

  <!-- Wrapper-->
    <div id="wrapper">
        <!-- Page wraper -->
        <div id="page-wrappez">

            <!-- Page header -->
            <?php echo $__env->make('campaigners_layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

            <!-- Main view  -->
            <?php echo $__env->yieldContent('content'); ?>

        </div>
        <!-- End page wrapper-->

    </div>
    <!-- End wrapper-->

    <script src="<?php echo asset('js/app.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('members/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo asset('members/js/owl.carousel.js'); ?>"></script>
    <script src="<?php echo asset('members/js/wow.min.js'); ?>"></script>
    <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js'); ?>"></script>
    <script src="<?php echo asset('members/js/func/members.js'); ?>"></script>
    <script src="<?php echo asset('members/js/func/users.js'); ?>"></script>
<?php $__env->startSection('scripts'); ?>
<?php echo $__env->yieldSection(); ?>

