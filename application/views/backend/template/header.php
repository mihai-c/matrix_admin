<!-- ============================================================== -->
<!-- Topbar header - style you can find in pages.scss -->
<!-- ============================================================== -->
<header class="topbar" data-navbarbg="skin5">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin5">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="/admin/dashboard">
                <!-- Logo icon -->
                <b class="logo-icon p-l-10">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="<?= MEDIA; ?>images/logo-icon.png" alt="homepage" class="light-logo"/>

                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                             <!-- dark Logo text -->
                             <img src="<?= MEDIA; ?>images/logo-text.png" alt="homepage" class="light-logo"/>

                        </span>
                <!-- Logo icon -->
                <!-- <b class="logo-icon"> -->
                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                <!-- Dark Logo icon -->
                <!-- <img src="<?= MEDIA; ?>images/logo-text.png" alt="homepage" class="light-logo" /> -->

                <!-- </b> -->
                <!--End Logo icon -->
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
               data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
               aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light"
                                                          href="javascript:void(0)" data-sidebartype="mini-sidebar"><i
                                class="mdi mdi-menu font-24"></i></a></li>
                <!-- ============================================================== -->
                <!-- create new -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                        <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
                <li class="nav-item search-box"><a class="nav-link waves-effect waves-dark" href="javascript:void(0)"><i
                                class="ti-search"></i></a>
                    <form class="app-search position-absolute">
                        <input type="text" class="form-control" placeholder="Search &amp; enter"> <a class="srh-btn"><i
                                    class="ti-close"></i></a>
                    </form>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- Comment -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-bell font-24"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End Comment -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Messages -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false"> <i class="font-24 mdi mdi-comment-processing"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown" aria-labelledby="2">
                        <ul class="list-style-none">
                            <li>
                                <div class="">
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="link border-top">
                                        <div class="d-flex no-block align-items-center p-10">
                                            <span class="btn btn-success btn-circle"><i class="ti-calendar"></i></span>
                                            <div class="m-l-10">
                                                <h5 class="m-b-0">Event today</h5>
                                                <span class="mail-desc">Just a reminder that event</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="link border-top">
                                        <div class="d-flex no-block align-items-center p-10">
                                            <span class="btn btn-info btn-circle"><i class="ti-settings"></i></span>
                                            <div class="m-l-10">
                                                <h5 class="m-b-0">Settings</h5>
                                                <span class="mail-desc">You can customize this template</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="link border-top">
                                        <div class="d-flex no-block align-items-center p-10">
                                            <span class="btn btn-primary btn-circle"><i class="ti-user"></i></span>
                                            <div class="m-l-10">
                                                <h5 class="m-b-0">Pavan kumar</h5>
                                                <span class="mail-desc">Just see the my admin!</span>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- Message -->
                                    <a href="javascript:void(0)" class="link border-top">
                                        <div class="d-flex no-block align-items-center p-10">
                                            <span class="btn btn-danger btn-circle"><i class="fa fa-link"></i></span>
                                            <div class="m-l-10">
                                                <h5 class="m-b-0">Luanch Admin</h5>
                                                <span class="mail-desc">Just see the my new admin!</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- End Messages -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                                src="<?= MEDIA; ?>images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user m-r-5 m-l-5"></i> My
                            Profile</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet m-r-5 m-l-5"></i> My
                            Balance</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i>
                            Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i>
                            Account Setting</a>
                        <div class="dropdown-divider"></div>
						<?php echo anchor("admin/logout",
							"<i class='fa fa-power-off m-r-5 m-l-5'></i> Logout",
							"class='dropdown-item'"); ?>
                        <div class="dropdown-divider"></div>
                        <div class="p-l-30 p-10"><a href="javascript:void(0)"
                                                    class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav" class="p-t-30">
                <li class="sidebar-item">
                    <?php echo anchor('admin/dashboard',
                    '<i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span>',
                    'class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"');
                    ?>
                </li>
                <li class="sidebar-item">
	                <?php echo anchor('admin/charts',
		                '<i class="mdi mdi-chart-bar"></i><span class="hide-menu">Charts</span>',
		                'class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"');
	                ?>
                </li>
                <li class="sidebar-item">
	                <?php echo anchor('admin/widgets',
		                '<i class="mdi mdi-chart-bubble"></i><span class="hide-menu">Widgets</span>',
		                'class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"');
	                ?>
                </li>
                <li class="sidebar-item">
	                <?php echo anchor('admin/tables',
		                '<i class="mdi mdi-border-inside"></i><span class="hide-menu">Tables</span>',
		                'class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"');
	                ?>
                </li>
                <li class="sidebar-item">
	                <?php echo anchor('admin/full-width',
		                '<i class="mdi mdi-blur-linear"></i><span class="hide-menu">Full Width</span>',
		                'class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"');
	                ?>
                </li>
                <li class="sidebar-item"><a class="sidebar-link has-arrow waves-effect waves-dark"
                                            href="javascript:void(0)" aria-expanded="false"><i
                                class="mdi mdi-receipt"></i><span class="hide-menu">Forms </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
	                        <?php echo anchor('admin/forms/basic',
		                        '<i class="mdi mdi-note-outline"></i><span class="hide-menu"> Form Basic </span>',
		                        'class="sidebar-link"');
	                        ?>
                        </li>
                        <li class="sidebar-item">
	                        <?php echo anchor('admin/forms/wizard',
		                        '<i class="mdi mdi-note-plus"></i><span class="hide-menu"> Form Wizard </span>',
		                        'class="sidebar-link"');
	                        ?>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
	                <?php echo anchor('admin/buttons',
		                '<i class="mdi mdi-relative-scale"></i><span class="hide-menu">Buttons</span>',
		                'class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"');
	                ?>
                </li>
                <li class="sidebar-item"><a class="sidebar-link has-arrow waves-effect waves-dark"
                                            href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span
                                class="hide-menu">Icons </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
	                        <?php echo anchor('admin/icons/material-icons',
		                        '<i class="mdi mdi-emoticon"></i><span class="hide-menu"> Material Icons </span>',
		                        'class="sidebar-link"');
	                        ?>
                        </li>
                        <li class="sidebar-item">
	                        <?php echo anchor('admin/icons/awesome-icons',
		                        '<i class="mdi mdi-emoticon-cool"></i><span
                                        class="hide-menu"> Font Awesome Icons </span>',
		                        'class="sidebar-link"');
	                        ?>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item">
	                <?php echo anchor('admin/elements',
		                '<i class="mdi mdi-pencil"></i><span class="hide-menu">Elements</span>',
		                'class="sidebar-link waves-effect waves-dark sidebar-link" aria-expanded="false"');
	                ?>
                </li>
                <li class="sidebar-item"><a class="sidebar-link has-arrow waves-effect waves-dark"
                                            href="javascript:void(0)" aria-expanded="false"><i
                                class="mdi mdi-move-resize-variant"></i><span class="hide-menu">Addons </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
	                        <?php echo anchor('admin/addons/dashboard',
		                        '<i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> Dashboard-2 </span>',
		                        'class="sidebar-link"');
	                        ?>
                        </li>
                        <li class="sidebar-item">
	                        <?php echo anchor('admin/addons/gallery',
		                        '<i class="mdi mdi-multiplication-box"></i><span class="hide-menu"> Gallery </span>',
		                        'class="sidebar-link"');
	                        ?>
                        </li>
                        <li class="sidebar-item">
	                        <?php echo anchor('admin/addons/calendar',
		                        '<i class="mdi mdi-calendar-check"></i><span class="hide-menu"> Calendar </span>',
		                        'class="sidebar-link"');
	                        ?>
                        </li>
                        <li class="sidebar-item">
	                        <?php echo anchor('admin/addons/invoice',
		                        '<i class="mdi mdi-bulletin-board"></i><span class="hide-menu"> Invoice </span>',
		                        'class="sidebar-link"');
	                        ?>
                        </li>
                        <li class="sidebar-item">
	                        <?php echo anchor('admin/addons/chat-option',
		                        '<i class="mdi mdi-message-outline"></i><span class="hide-menu"> Chat Option </span>',
		                        'class="sidebar-link"');
	                        ?>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"><a class="sidebar-link has-arrow waves-effect waves-dark"
                                            href="javascript:void(0)" aria-expanded="false"><i
                                class="mdi mdi-account-key"></i><span class="hide-menu">Authentication </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
	                        <?php echo anchor('admin/register',
		                        '<i class="mdi mdi-all-inclusive"></i><span class="hide-menu"> Register </span>',
		                        'class="sidebar-link"');
	                        ?>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item"><a class="sidebar-link has-arrow waves-effect waves-dark"
                                            href="javascript:void(0)" aria-expanded="false"><i
                                class="mdi mdi-alert"></i><span class="hide-menu">Errors </span></a>
                    <ul aria-expanded="false" class="collapse  first-level">
                        <li class="sidebar-item">
	                        <?php echo anchor('admin/errors/error-403',
		                        '<i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 403 </span>',
		                        'class="sidebar-link"');
	                        ?>
                        </li>
                        <li class="sidebar-item">
	                        <?php echo anchor('admin/errors/error-404',
		                        '<i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 404 </span>',
		                        'class="sidebar-link"');
	                        ?>
                        </li>
                        <li class="sidebar-item">
	                        <?php echo anchor('admin/errors/error-405',
		                        '<i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 405 </span>',
		                        'class="sidebar-link"');
	                        ?>
                        </li>
                        <li class="sidebar-item">
	                        <?php echo anchor('admin/errors/error-500',
		                        '<i class="mdi mdi-alert-octagon"></i><span class="hide-menu"> Error 500 </span>',
		                        'class="sidebar-link"');
	                        ?>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->