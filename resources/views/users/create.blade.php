@extends('campaigners_layouts.app')

@section('title', 'User Register Page')

@section('content')

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
								<section id="login-form"  role="form" style="display: block;">
									<form method="POST" action="{{route('login')}}">
										{{ csrf_field() }}
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control" placeholder="Your email" value="" required>
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<!--<a href="#" class="forgot-password">Forgot Password?</a>-->
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
									</form>
								</section><!--Log In-->
								<section id="register-form" role="form" style="display: none;">
									<form method="POST" action="/handlelogin" id="userForm" data-toggle="validator">
									{{ csrf_field() }}
										<div class="formRow">
										<input type="text"  id="signRegUsername" pattern="^[_A-z0-9]{1,}$"  class="form-control textFeild" name="signUsername" placeholder="Username" value="" required="true"/>
										</div>  
										<div class="formRow">
											<input type="email"  id="signRegEmail" class="form-control" placeholder="Email Address" name="signEmail" value="" required/>
										</div>
										<div class="formRow">
											<label for="phonenum">Phone Number (format: xxxx-xxx-xxxx):</label><br/>
											<input type="text" id="signRegMobileNumber" class="form-control" pattern="^\d{4}-\d{3}-\d{4}$" name="signMobileNumber" placeholder="Mobile Number" value="" required/>
										</div>	
										<div class="formRow">
											<!--<input type="password"  id="signRegPassword"  minlength="7" class="form-control" placeholder="Password" value="" required/>-->
											<input type="password"  id="signRegPassword" class="form-control"  minlength="7" placeholder="Password" name="signPassword" value="" required/>
										</div>
										<div class="formRow">
											<input type="password"  id="signRegConfirmPassword" minlength="7"  class="form-control" placeholder="Confirm Password" value="" required/> <span class='message'></span>
										</div>
										<div class="formRow">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<button id="btnRegister" class="form-control btn btn-register">Signup Now</button>
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
	 <script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('members/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('members/js/owl.carousel.js') !!}"></script>
    <script src="{!! asset('members/js/wow.min.js') !!}"></script>
	 <script src="{!! asset('js/plugins/dataTables/datatables.min.js') !!}"></script>
	 <script src="{!! asset('js/plugins/validate/jquery.validate.min.js') !!}"></script>
	 
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
@endsection
