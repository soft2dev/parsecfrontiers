<?php $__env->startSection('title', 'User Register Page'); ?>

<?php $__env->startSection('content'); ?>

    <section class="mainSection">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 formSection">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Users Login</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Signup</a>
							</div>
						</div><!--row-->
						<hr>
					</div><!--panel-heading-->
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<section id="login-form" action="#" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="username" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control" placeholder="Password">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="#" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" class="form-control btn btn-login" value="Log In">
											</div>
										</div>
									</div>
		
								</section><!--Log In-->
								<section id="register-form" action="#" method="post" role="form" style="display: none;">
									<div class="form-group">
										<input type="text" name="signUsername" id="signUsername" class="form-control" placeholder="Username" value="">
									</div>  
									<div class="form-group">
										<input type="email" name="signEmail" id="signEmail" class="form-control" placeholder="Email Address" value="">
									</div>
									<div class="form-group">
										<input type="text" name="signMobileNumber" id="signMobileNumber" class="form-control" placeholder="Mobile Number" value="">
									</div>
									<div class="form-group">
										<input type="password" name="signPassword" id="signPassword" class="form-control" placeholder="Password" value="">
									</div>
									<div class="form-group">
										<input type="password" name="signConfirmPassword" id="signConfirmPassword" class="form-control" placeholder="Confirm Password" value="">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="button" name="btnRegister" id="btnNewRegister" class="form-control btn btn-register" value="Signup Now">
											</div>
										</div>
									</div>
								</section><!--Signup Now-->
							</div><!--col-lg-12-->
						</div><!--row-->
					</div><!--panel-body-->
				</div><!--panel panel-login-->
			</div><!--formSection-->
		</div><!--row-->
	</div><!--container-->
</section><!--mainSection-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo asset('members/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo asset('members/js/owl.carousel.js'); ?>"></script>
    <script src="<?php echo asset('members/js/wow.min.js'); ?>"></script>
    <script src="<?php echo asset('members/js/func/users.js'); ?>"></script>
    <script>
    $(document).ready(function () {        
        $('#login-form-link').click(function(e) {
            $("#login-form").delay(100).fadeIn(100);
            $("#register-form").fadeOut(100);
            $('#register-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
        $('#register-form-link').click(function(e) {
            $("#register-form").delay(100).fadeIn(100);
            $("#login-form").fadeOut(100);
            $('#login-form-link').removeClass('active');
            $(this).addClass('active');
            e.preventDefault();
        });
            //our partner
            $("#ourPartners").owlCarousel({
                items: 4,
                itemsDesktop: [1199, 4],
                itemsDesktopSmall: [979, 3],
                pagination: false,
                navigation: true
            });

            //our partner
            $("#peopleSay").owlCarousel({
                items: 2,
                itemsDesktop: [1199, 1],
                itemsDesktopSmall: [979, 1],
                  itemsTablet : [768, 1],
   
        itemsMobile : [479, 1],
                pagination: false,
                navigation: true
            });
            //Animation
            new WOW().init();
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('campaigners_layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>