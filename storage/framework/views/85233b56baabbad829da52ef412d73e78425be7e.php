<?php $__env->startSection('title', 'Page Not Fount'); ?>

<?php $__env->startSection('content'); ?>

        <div class="middle-box text-center animated fadeInDown">
        <h1>404</h1>
        <h3 class="font-bold">Page Not Found</h3>

        <div class="error-desc">
            Sorry, but the page you are looking for has note been found. Try checking the URL for error, then hit the refresh button on your browser or try found something else in our app.
        </div>
    </div>
     <script>
         location.href = "/";
     </script>
<?php $__env->startSection('content'); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('campaigners_layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>