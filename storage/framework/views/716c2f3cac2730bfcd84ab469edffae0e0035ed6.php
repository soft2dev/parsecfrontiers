<?php $__env->startSection('title', 'Members page'); ?>

<?php $__env->startSection('content'); ?>
            <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="table-responsive">
                     <div class="formRow">
                        <button id="createMember" class="btn btn-primary applyButton"  data-toggle="modal" data-target="#camModal">Create One</button>
                    </div>
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Wallet Address</th>
                        <th>Twitter Account</th>
                        <th>Telegram Name</th>
                        <th>Referre's telegram name</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i=1;
                        $html = '';
                        foreach($campaigners as $campaigner){
                        $html.="<tr id={$campaigner->id}>".
                        "<td>{$i}</td>".
                        "<td>{$campaigner->walletAddress}</td>".
                        "<td>{$campaigner->twitterAccount}</td>".
                        "<td>{$campaigner->telegramName}</td>".
                        "<td>{$campaigner->preTelegramName}</td>".
                        "<td><a class='mEdit' data-toggle='modal' data-target='#camEditModal'>Edit</a>|<a><span class='mDelete'>Delete</span></a></td></tr>";
                        $i++;
                        }
                        echo $html;
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>Wallet Address</th>
                        <th>Twitter Account</th>
                        <th>Telegram Name</th>
                        <th>Referre's telegram name</th>
                        <th></th>
                    </tr>
                    </tfoot>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="modal inmodal" id="camModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" name="txt_wallet_address" id="txt_wallet_address" class="form-control" placeholder="ETHEREUM WALLET ADDRESS" value="">
                        </div>  
                        <div class="form-group">
                            <input type="email" name="txt_twitter_account" id="txt_twitter_account" class="form-control" placeholder="TWITTER ACCOUNT NAME" value="">
                        </div>
                        <div class="form-group">
                            <input type="text" name="txt_telegram_name" id="txt_telegram_name" class="form-control" placeholder="TELEGRAM NAME" value="">
                        </div>
                        <div class="form-group">
                            <input type="password" name="txt_pre_telegram_name" id="txt_pre_telegram_name" class="form-control" placeholder="REFERRE'S TELEGRAM NAME" value="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        <button type="button" id = "btnNewMember" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal inmodal" id="camEditModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="hidden" id="idHidden" class="form-control" value="">
                            <label>Ethereum Wallet Address</label>
                            <input type="text" name="txt_Edit_wallet_address" id="txt_Edit_wallet_address" class="form-control" placeholder="ETHEREUM WALLET ADDRESS" value="">
                        </div>  
                        <div class="form-group">
                            <label> Twitter Account Name</label>
                            <input type="email" name="txt_Edit_twitter_account" id="txt_Edit_twitter_account" class="form-control" placeholder="TWITTER ACCOUNT NAME" value="">
                        </div>
                        <div class="form-group">
                            <label>Telegram Name</label>
                            <input type="text" name="txt_Edit_telegram_name" id="txt_Edit_telegram_name" class="form-control" placeholder="TELEGRAM NAME" value="">
                        </div>
                        <div class="form-group">
                            <label>Referre's Telegram Name</label>
                            <input type="text" name="txt_Edit_pre_telegram_name" id="txt_Edit_pre_telegram_name" class="form-control" placeholder="REFERRE'S TELEGRAM NAME" value="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        <button type="button" id = "btnEditMember" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>