<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
        <li>
            <i class="fa fa-sign-out"></i><a href="#" }}"  
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo e(csrf_field()); ?>

                </form>
                Log Out <i class="entypo-logout right"></i>
            </a>
        </li>
        </ul>
    </nav>
</div>
