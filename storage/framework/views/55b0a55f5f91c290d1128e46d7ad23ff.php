<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">SIMPADU-C050422022</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SKD</a>
        </div>
        <ul class="sidebar-menu">

            <li class="nav-item dropdown ">
                <a href="#" 
                class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" 
                        href="<?php echo e(url('dashboard-general-dashboard')); ?>">General Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="<?php echo e(route('user.index')); ?>">User List</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Subject</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="<?php echo e(route('subject.index')); ?>">Subject List</a>
                    </li>
                </ul>
            </li>

    </aside>
</div>
<?php /**PATH /opt/lampp/htdocs/C050422022/simpadu-C050422022/resources/views/components/sidebar.blade.php ENDPATH**/ ?>