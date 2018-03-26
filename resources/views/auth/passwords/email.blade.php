@extends('campaigners_layouts.app')


@section('content')

    <section class="mainSection">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 formSection">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class=" text-center">
								<a href="#" class="active" id="login-form-link">Reset Password</a>
							</div>
						</div><!--row-->
						<hr>
					</div><!--panel-heading-->
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
							@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif	
								<section id="login-form"  role="form">
									<form method="POST"  action="{{ route('password.email') }}">
										{{ csrf_field() }}
										<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
											<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-Mail Address" autofocus required>
											@if ($errors->has('email'))
												<span class="help-block">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
											@endif
										</div>
										<div class="form-group">
											<div class="row">
												<div class="col-sm-8 col-sm-offset-2">
													<input type="submit" name="login-submit" id="login-submit" class="form-control btn btn-login" value="Send Password">
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
