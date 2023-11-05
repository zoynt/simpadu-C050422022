<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown <?php echo e($type_menu === 'dashboard' ? 'active' : ''); ?>">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='<?php echo e(Request::is('dashboard-general-dashboard') ? 'active' : ''); ?>'>
                        <a class="nav-link"
                            href="<?php echo e(url('dashboard-general-dashboard')); ?>">General Dashboard</a>
                    </li>
                    <li class="<?php echo e(Request::is('dashboard-ecommerce-dashboard') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('dashboard-ecommerce-dashboard')); ?>">Ecommerce Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Starter</li>
            <li class="nav-item dropdown <?php echo e($type_menu === 'layout' ? 'active' : ''); ?>">
                <a href="#"
                    class="nav-link has-dropdown"
                    data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Layout</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(Request::is('layout-default-layout') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('layout-default-layout')); ?>">Default Layout</a>
                    </li>
                    <li class="<?php echo e(Request::is('transparent-sidebar') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('transparent-sidebar')); ?>">Transparent Sidebar</a>
                    </li>
                    <li class="<?php echo e(Request::is('layout-top-navigation') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('layout-top-navigation')); ?>">Top Navigation</a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo e(Request::is('blank-page') ? 'active' : ''); ?>">
                <a class="nav-link"
                    href="<?php echo e(url('blank-page')); ?>"><i class="far fa-square"></i> <span>Blank Page</span></a>
            </li>
            <li class="nav-item dropdown <?php echo e($type_menu === 'bootstrap' ? 'active' : ''); ?>">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-th"></i> <span>Bootstrap</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(Request::is('bootstrap-alert') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-alert')); ?>">Alert</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-badge') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-badge')); ?>">Badge</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-breadcrumb') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-breadcrumb')); ?>">Breadcrumb</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-buttons') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-buttons')); ?>">Buttons</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-card') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-card')); ?>">Card</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-carousel') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-carousel')); ?>">Carousel</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-collapse') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-collapse')); ?>">Collapse</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-dropdown') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-dropdown')); ?>">Dropdown</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-form') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-form')); ?>">Form</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-list-group') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-list-group')); ?>">List Group</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-media-object') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-media-object')); ?>">Media Object</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-modal') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-modal')); ?>">Modal</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-nav') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-nav')); ?>">Nav</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-navbar') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-navbar')); ?>">Navbar</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-pagination') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-pagination')); ?>">Pagination</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-popover') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-popover')); ?>">Popover</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-progress') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-progress')); ?>">Progress</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-table') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-table')); ?>">Table</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-tooltip') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-tooltip')); ?>">Tooltip</a>
                    </li>
                    <li class="<?php echo e(Request::is('bootstrap-typography') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('bootstrap-typography')); ?>">Typography</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Stisla</li>
            <li class="nav-item dropdown <?php echo e($type_menu === 'components' ? 'active' : ''); ?>">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-th-large"></i>
                    <span>Components</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(Request::is('components-article') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('components-article')); ?>">Article</a>
                    </li>
                    <li class="<?php echo e(Request::is('components-avatar') ? 'active' : ''); ?>">
                        <a class="nav-link beep beep-sidebar"
                            href="<?php echo e(url('components-avatar')); ?>">Avatar</a>
                    </li>
                    <li class="<?php echo e(Request::is('components-chat-box') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('components-chat-box')); ?>">Chat Box</a>
                    </li>
                    <li class="<?php echo e(Request::is('components-empty-state') ? 'active' : ''); ?>">
                        <a class="nav-link beep beep-sidebar"
                            href="<?php echo e(url('components-empty-state')); ?>">Empty State</a>
                    </li>
                    <li class="<?php echo e(Request::is('components-gallery') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('components-gallery')); ?>">Gallery</a>
                    </li>
                    <li class="<?php echo e(Request::is('components-hero') ? 'active' : ''); ?>">
                        <a class="nav-link beep beep-sidebar"
                            href="<?php echo e(url('components-hero')); ?>">Hero</a>
                    </li>
                    <li class="<?php echo e(Request::is('components-multiple-upload') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('components-multiple-upload')); ?>">Multiple Upload</a>
                    </li>
                    <li class="<?php echo e(Request::is('components-pricing') ? 'active' : ''); ?>">
                        <a class="nav-link beep beep-sidebar"
                            href="<?php echo e(url('components-pricing')); ?>">Pricing</a>
                    </li>
                    <li class="<?php echo e(Request::is('components-statistic') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('components-statistic')); ?>">Statistic</a>
                    </li>
                    <li class="<?php echo e(Request::is('components-tab') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('components-tab')); ?>">Tab</a>
                    </li>
                    <li class="<?php echo e(Request::is('components-table') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('components-table')); ?>">Table</a>
                    </li>
                    <li class="<?php echo e(Request::is('components-user') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('components-user')); ?>">User</a>
                    </li>
                    <li class="<?php echo e(Request::is('components-wizard') ? 'active' : ''); ?>">
                        <a class="nav-link beep beep-sidebar"
                            href="<?php echo e(url('components-wizard')); ?>">Wizard</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown <?php echo e($type_menu === 'forms' ? 'active' : ''); ?>">
                <a href="#"
                    class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Forms</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(Request::is('forms-advanced-form') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('forms-advanced-form')); ?>">Advanced Form</a>
                    </li>
                    <li class="<?php echo e(Request::is('forms-editor') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('forms-editor')); ?>">Editor</a>
                    </li>
                    <li class="<?php echo e(Request::is('forms-validation') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('forms-validation')); ?>">Validation</a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item dropdown <?php echo e($type_menu === 'modules' ? 'active' : ''); ?>">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-plug"></i> <span>Modules</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(Request::is('modules-calendar') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('modules-calendar')); ?>">Calendar</a>
                    </li>
                    <li class="<?php echo e(Request::is('modules-chartjs') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('modules-chartjs')); ?>">ChartJS</a>
                    </li>
                    <li class="<?php echo e(Request::is('modules-datatables') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('modules-datatables')); ?>">DataTables</a>
                    </li>
                    <li class="<?php echo e(Request::is('modules-flag') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('modules-flag')); ?>">Flag</a>
                    </li>
                    <li class="<?php echo e(Request::is('modules-font-awesome') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('modules-font-awesome')); ?>">Font Awesome</a>
                    </li>
                    <li class="<?php echo e(Request::is('modules-ion-icons') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('modules-ion-icons')); ?>">Ion Icons</a>
                    </li>
                    <li class="<?php echo e(Request::is('modules-owl-carousel') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('modules-owl-carousel')); ?>">Owl Carousel</a>
                    </li>
                    <li class="<?php echo e(Request::is('modules-sparkline') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('modules-sparkline')); ?>">Sparkline</a>
                    </li>
                    <li class="<?php echo e(Request::is('modules-sweet-alert') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('modules-sweet-alert')); ?>">Sweet Alert</a>
                    </li>
                    <li class="<?php echo e(Request::is('modules-toastr') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('modules-toastr')); ?>">Toastr</a>
                    </li>
                    <li class="<?php echo e(Request::is('modules-vector-map') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('modules-vector-map')); ?>">Vector Map</a>
                    </li>
                    <li class="<?php echo e(Request::is('modules-weather-icon') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('modules-weather-icon')); ?>">Weather Icon</a>
                    </li>
                </ul>
            </li>
            <li class="menu-header">Pages</li>
            <li class="nav-item dropdown <?php echo e($type_menu === 'auth' ? 'active' : ''); ?>">
                <a href="#"
                    class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Auth</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(Request::is('auth-forgot-password') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('auth-forgot-password')); ?>">Forgot Password</a>
                    </li>
                    <li class="<?php echo e(Request::is('auth-login') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('auth-login')); ?>">Login</a>
                    </li>
                    <li class="<?php echo e(Request::is('auth-login2') ? 'active' : ''); ?>">
                        <a class="beep beep-sidebar"
                            href="<?php echo e(url('auth-login2')); ?>">Login 2</a>
                    </li>
                    <li class="<?php echo e(Request::is('auth-register') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('auth-register')); ?>">Register</a>
                    </li>
                    <li class="<?php echo e(Request::is('auth-reset-password') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('auth-reset-password')); ?>">Reset Password</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown <?php echo e($type_menu === 'error' ? 'active' : ''); ?>">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-exclamation"></i>
                    <span>Errors</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(Request::is('error-403') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('error-403')); ?>">403</a>
                    </li>
                    <li class="<?php echo e(Request::is('error-404') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('error-404')); ?>">404</a>
                    </li>
                    <li class="<?php echo e(Request::is('error-500') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('error-500')); ?>">500</a>
                    </li>
                    <li class="<?php echo e(Request::is('error-503') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('error-503')); ?>">503</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown <?php echo e($type_menu === 'features' ? 'active' : ''); ?>">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-bicycle"></i> <span>Features</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(Request::is('features-activities') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('features-activities')); ?>">Activities</a>
                    </li>
                    <li class="<?php echo e(Request::is('features-post-create') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('features-post-create')); ?>">Post Create</a>
                    </li>
                    <li class="<?php echo e(Request::is('features-post') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('features-post')); ?>">Posts</a>
                    </li>
                    <li class="<?php echo e(Request::is('features-profile') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('features-profile')); ?>">Profile</a>
                    </li>
                    <li class="<?php echo e(Request::is('features-settings') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('features-settings')); ?>">Settings</a>
                    </li>
                    <li class="<?php echo e(Request::is('features-setting-detail') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('features-setting-detail')); ?>">Setting Detail</a>
                    </li>
                    <li class="<?php echo e(Request::is('features-tickets') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('features-tickets')); ?>">Tickets</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown <?php echo e($type_menu === 'utilities' ? 'active' : ''); ?>">
                <a href="#"
                    class="nav-link has-dropdown"><i class="fas fa-ellipsis-h"></i>
                    <span>Utilities</span></a>
                <ul class="dropdown-menu">
                    <li class="<?php echo e(Request::is('utilities-contact') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('utilities-contact')); ?>">Contact</a>
                    </li>
                    <li class="<?php echo e(Request::is('utilities-invoice') ? 'active' : ''); ?>">
                        <a class="nav-link"
                            href="<?php echo e(url('utilities-invoice')); ?>">Invoice</a>
                    </li>
                    <li class="<?php echo e(Request::is('utilities-subscribe') ? 'active' : ''); ?>">
                        <a href="<?php echo e(url('utilities-subscribe')); ?>">Subscribe</a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo e(Request::is('credits') ? 'active' : ''); ?>">
                <a class="nav-link"
                    href="<?php echo e(url('credits')); ?>"><i class="fas fa-pencil-ruler">
                    </i> <span>Credits</span>
                </a>
            </li>
        </ul>

        <div class="hide-sidebar-mini mt-4 mb-4 p-3">
            <a href="https://getstisla.com/docs"
                class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
    </aside>
</div>
<?php /**PATH /opt/lampp/htdocs/C050422022/simpadu-C050422022/resources/views/components/sidebar.blade.php ENDPATH**/ ?>