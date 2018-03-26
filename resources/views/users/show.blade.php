@extends('layouts.app')

@section('title', 'Users page')

@section('content')
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
                            "<td><a class='eEdit' data-toggle='modal' data-target='#userEditModal'>Edit</a>|<a><span class='eDelete'>Delete</span></a></td></tr>";
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
                        <form>
                            <div class="form-group">
                                <input type="text"  id="signUsername" class="form-control" placeholder="Username" value="" required>
                            </div>  
                            <div class="form-group">
                                <input type="email" id="signEmail" class="form-control" placeholder="Email Address" value="" required>
                            </div>
                            <div class="form-group">
                                <input type="text" id="signMobileNumber" class="form-control" placeholder="Mobile Number" value="" required>
                            </div>
                            <div class="form-group">
                                <input type="password"  id="signPassword" class="form-control" placeholder="Password" value="" required>
                            </div>
                            <div class="form-group">
                                <input type="password" id="signConfirmPassword" class="form-control" placeholder="Confirm Password" value="" required>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                            <button type="button" id="btnNewRegister" class="btn btn-primary btnRegister">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal inmodal" id="userEditModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                        <div class="form-group">
                            <input type="hidden"  id="idHidden" class="form-control"  value="">
                            <label>Username</label>
                            <input type="text" id="signEditUsername" class="form-control" placeholder="Username" value="" required>
                        </div>  
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email"  id="signEditEmail" class="form-control" placeholder="Email Address" value="" required>
                        </div>
                        <div class="form-group">
                           <label>Mobile Number</label>
                            <input type="text"  id="signEditMobileNumber" class="form-control" placeholder="Mobile Number" value="" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                        <button type="button" id="btnEditRegister" class="btn btn-primary btnRegister">Save changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
