@extends('campaigners_layouts.app')

@section('title', 'User Login Page')

@section('content')

    <section class="mainSection">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 formSection">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class=" text-center">
								<a href="#" class="active" id="login-form-link">Users Login</a>
							</div>
							<br>	
							<div>
								<a href="{{route('register')}}" style="font-size:10px;top:12px;margin-left:14px">Don't have an account?Sign up now!</a>
							</div>
						</div><!--row-->
						<hr>
					</div><!--panel-heading-->
					<div class="panel-body">	
						<div class="row">
							<div class="col-lg-12">
								<section id="login-form"  role="form">
									<form method="POST" action="{{route('login')}}">
										{{ csrf_field() }}
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control" placeholder="Your email" value="" autofocus required>
									</div>
									@if ($errors->has('email'))
										<div >
											<span class="help-block">
												<strong style="color:red">{{ $errors->first('email') }}</strong>
											</span>
										</div>                                
									@endif
									<div class="form-group">
										<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
									</div>
									@if ($errors->has('password'))
									<div>
										<span class="help-block">
											<strong style="color:red">{{ $errors->first('password') }}</strong>
										</span>
									</div>
									@endif
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a href="{{ route('password.request') }}" class="forgot-password">Forgot Password?</a>
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
								</section>
							</div><!--col-lg-12-->
						</div><!--row-->
					</div><!--panel-body-->
				</div><!--panel panel-login-->
			</div><!--formSection-->
		</div><!--row-->
	</div><!--container-->
</section><!--mainSection-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{!! asset('members/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('members/js/owl.carousel.js') !!}"></script>
    <script src="{!! asset('members/js/wow.min.js') !!}"></script>
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
