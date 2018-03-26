<?php $__env->startSection('title', 'Users page'); ?>

<?php $__env->startSection('content'); ?>
            <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">

                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <div class="table-responsive">
                    <div class="formRow">
                        <button id="createUser" class="btn btn-primary applyButton" data-toggle="modal" data-target="#userModal">Create One</button>
                    </div>
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>name</th>
                        <th>email</th>
                        <th>Mobile Number</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i=1;
                        $html = '';
                        foreach($users as $user){
                        $html.="<tr id={$user->id}>".
                        "<td>{$i}</td>".
                        "<td>{$user->name}</td>".
                        "<td>{$user->email}</td>".
                        "<td>{$user->mobileNumber}</td>".
                            "<td><a><span class='eEdit'>Edit</span>|<span class='eDelete'>Delete</span></a></td></tr>";
                        $i++;
                        }
                        echo $html;
                    ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>No</th>
                        <th>name</th>
                        <th>email</th>
                        <th>mobileNumber</th>
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
        <div class="modal inmodal" id="userModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body">
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
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        <button type="button" id="btnNewRegister" class="btn btn-primary btnRegister">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>