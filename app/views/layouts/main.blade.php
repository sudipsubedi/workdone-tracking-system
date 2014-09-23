<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Simple Tables</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        {{ HTML::style('assets/css/bootstrap.css')}}
        <!-- font Awesome -->
        {{ HTML::style('assets/css/font-awesome.css')}}
        <!-- Ionicons -->
        {{ HTML::style('assets/css/ionicons.css')}}
        <!-- Theme style -->
        {{ HTML::style('assets/css/AdminLTE.css')}}

        {{ HTML::style('assets/css/datatable.css')}}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
                Aviation Mgmt
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe </span>
                            </a>
                            
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">                        
                    </div>
                    
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        
                        <li class="treeview">
                            <a href="">
                                <i class="fa fa-cloud"></i>
                                <span>Personal Records</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="{{ action('StaffController@show') }}"><i class="fa fa-angle-double-right"></i> Add Records</a></li>               
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>Workdone</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href=""><i class="fa fa-angle-double-right"></i> Add Workdone</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Store</span>
                                <i class="fa fa-angle-left pull-right"></i>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href=""><i class="fa fa-angle-double-right"></i> Add Store Items</a></li>
                                </ul>
                        </li>
                        
                        <li>
                            <a href="">
                                <i class="fa fa-calendar"></i> <span>Calendar</span>
                                
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ action('UserController@logout') }}">
                                <i class="fa fa-power-off"></i> <span>Logout</span>
                                
                            </a>
                        </li>
                        
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Aviation Management System
                        
                    </h1>
                </section>
                @yield('body')                
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        {{ HTML::script('assets/js/jquery.js')}}
        <!-- Bootstrap -->
        {{ HTML::script('assets/js/bootstrap.js')}} 
        <!-- AdminLTE App -->
        {{ HTML::script('assets/js/app.js')}}
        <!-- AdminLTE for demo purposes -->
        {{ HTML::script('assets/js/demo.js')}}

        {{ HTML::script('assets/js/datatable.js')}}
        
        {{ HTML::script('assets/js/custom.js')}}

        @show
    </body>
</html>
