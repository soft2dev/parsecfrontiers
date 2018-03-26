<?php $__env->startSection('title', 'Campaign Register Page'); ?>

<?php $__env->startSection('content'); ?>
        <section class="mainSection">
        <div class="container">
                <div class="row">
                    <div class="col-lg-6 formSection">
                        <h3>Apply For Parsec Frontiers</h3>
                        <h1>Airdrop Campaign</h1>
                        <div class="subtext">Apply now to get <span>1,500</span> parsec credits on may 1st</div>    
                            <form method="POST" action="/handleregisters" class="formWrapper">
                            <?php echo e(csrf_field()); ?>

                            <div id="camForm" data-toggle="validator">
                                <div class="formRow">
                                    <label>Your <span>Ethereum Wallet</span> Address</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">0x</span>
                                        <input name="walletAddress" id="txt_wallet_address" type="text" pattern="^[_A-z0-9]{1,}$" minlength="40" maxlength="40" class="form-control textFeild" required/>
                                    </div>
                                </div>
                                <div class="formRow">
                                    <label> Your <span>twitter account</span> name</label>
                                    <div class="input-group">
                                        <span class="input-group-addon">@</span>
                                        <input name="twitterAccount" id="txt_twitter_account" type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control textFeild" required/>
                                    </div>
                                </div>
                                <div class="formRow">
                                    <label>Your <span>Telegram name</span></label>
                                    <div class="input-group">
                                        <span class="input-group-addon">@</span>
                                        <input name="telegramName" id="txt_telegram_name" type="text" pattern="^[_A-z0-9]{1,}$" maxlength="15" class="form-control textFeild" required/>
                                    </div>
                                </div>
                                <div class="formRow">
                                    <label>Referrer's telegram name</label>
                                    <input name="preTelegramName" id="txt_pre_telegram_name" type="text" class="textFeild" required/>
                                </div>
                                <div class="formRow">
                                    <button  id="btn_apply" class="applyButton" >apply</button>
                                </div>
                                </div>
                            </div>
                    </form>
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
    <script src="<?php echo asset('js/app.js'); ?>" type="text/javascript"></script>
    <script src="<?php echo asset('members/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo asset('members/js/owl.carousel.js'); ?>"></script>
    <script src="<?php echo asset('members/js/wow.min.js'); ?>"></script>
    <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js'); ?>"></script>
    
    
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('campaigners_layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>