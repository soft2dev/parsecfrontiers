<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="logo-element">
                    
                </div>
            </li>
            <li class="<?php echo e(isActiveRoute('main')); ?>">
                <a href="<?php echo e(url('users/show')); ?>"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a>
            </li>
            <li>
                <a href="<?php echo e(url('users/show')); ?>"><i class="fa fa-user"></i> <span class="nav-label">Users</span> </a>
            </li>
            <li>
                <a href="<?php echo e(url('campaigners/show')); ?>"><i class="fa fa-btc"></i> <span class="nav-label">Members</span> </a>
            </li>
        </ul>

    </div>
</nav>
