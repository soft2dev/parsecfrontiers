@extends('campaigners_layouts.app')

@section('title', 'Campaign Register Page')

@section('content')
        <section class="mainSection">
        <div class="container">
                <div class="row">
                    <div class="col-lg-6 formSection">
                        <h3>Apply For Parsec Frontiers</h3>
                        <h1>Aridrop Campaing</h1>
                        <div class="subtext">Apply now to get <span>1,500</span> parsec credits on may 1st</div>    
                            <div class="formWrapper">
                                <form>
                                <div class="formRow">
                                    <label>Your <span>Ethereum Wallet</span> Address</label>
                                    <input id="txt_wallet_address" type="text" class="textFeild" required/>
                                </div>
                                <div class="formRow">
                                    <label> Your <span>twitter account</span> name</label>
                                    <input id="txt_twitter_account" type="text" class="textFeild" required/>
                                </div>
                                <div class="formRow">
                                    <label>Your <span>Telegram name</span></label>
                                    <input id="txt_telegram_name" type="text" class="textFeild" required/>
                                </div>
                                <div class="formRow">
                                    <label>Referre's telegram name</label>
                                    <input id="txt_pre_telegram_name" type="text" class="textFeild" required/>
                                </div>
                                <div class="formRow">
                                    <button id="btn_apply" class="applyButton">apply</button>
                                </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="setSection" style="display:none">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 formSection">
                <div class="other-info">
                    <h4>All SET!</h4>
                    <p>Thank You For Applying For The Airdrop Campaign. <br>
                        You Can Try One More Time <a id="here" href="/campaigners" >Here.</a></p>
                </div>
			</div><!--formSection-->
		</div><!--row-->
	</div><!--container-->
</section><!--setSection-->
        <script src="{!! asset('js/app.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('members/js/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('members/js/owl.carousel.js') !!}"></script>
    <script src="{!! asset('members/js/wow.min.js') !!}"></script>
    <script src="{!! asset('js/plugins/dataTables/datatables.min.js') !!}"></script>
    
    <script>
        $(document).ready(function () {
            
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
