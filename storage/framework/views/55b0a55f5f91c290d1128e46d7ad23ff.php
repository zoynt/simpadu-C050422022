<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">SIMPADU-C050422022</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">SIP</a>
        </div>
        <ul class="sidebar-menu">

            <li class="nav-item dropdown ">
                <a href="#" 
                class="nav-link has-dropdown"><i class="fa-solid fa-house"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" 
                        href="<?php echo e(url('dashboard-general-dashboard')); ?>">General Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-users"></i><span>Users</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="<?php echo e(route('user.index')); ?>">User List</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fa-solid fa-tags"></i></i><span>Subject</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="<?php echo e(route('subject.index')); ?>">Subject List</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fa-regular fa-calendar-days"></i></i><span>Schedules</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="<?php echo e(route('schedules.index')); ?>">Schedules List</a>
                    </li>
                </ul>
            </li>
    </aside>
</div>
<?php /**PATH /opt/lampp/htdocs/C050422022/simpadu-C050422022/resources/views/components/sidebar.blade.php ENDPATH**/ ?>