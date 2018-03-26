<?php $__env->startSection('title', 'User Register Page'); ?>

<?php $__env->startSection('content'); ?>

    <section class="mainSection">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 formSection">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-12 ">
								<a class="short_title col-xs-4">Get started for free</a>
								<a class="active col-xs-4 text-center" >Sign up</a>
							</div>
						</div><!--row-->
						<hr>
					</div><!--panel-heading-->
					<div class="panel-body">	
						<div class="row">
							<div class="col-lg-12">
                                <section id="register-form" role="form">
									<form role="form" method="POST" action="<?php echo e(route('register')); ?>">
										<?php echo e(csrf_field()); ?>

										<div class="formRow">
											<input type="text"  id="signRegUsername" name="name" class="form-control" placeholder="Username" value="" autofocus required="true"/>
										</div>  
										<div class="formRow">
											<input type="email"  id="signRegEmail" name="email" class="form-control" placeholder="Email Address" value="" required/>
										</div>
										<div class="formRow">
											<input type="password"  id="signRegPassword" name="password" minlength="7" class="form-control" placeholder="Password" value="" required/>
										</div>
										<div class="formRow">
											<input type="password"  id="signRegConfirmPassword" minlength="7" name="password_confirmation" class="form-control" placeholder="Confirm Password" value="" required/>
										</div>
										<div class="formRow">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<button id="btnRegister" class="form-control btn btn-register" >Signup Now</button>
												</div>
											</div>
										</div>
									</form>
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