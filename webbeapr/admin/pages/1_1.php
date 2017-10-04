<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="skin-blue">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="index2.html" class="logo"><b>Beapr</b></a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success">4</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 4 messages</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- start message -->
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                                                </div>
                                                <h4>
                                                    Support Team
                                                    <small><i class="fa fa-clock-o"></i> 5 mins</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <!-- end message -->
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image" />
                                                </div>
                                                <h4>
                                                    AdminLTE Design Team
                                                    <small><i class="fa fa-clock-o"></i> 2 hours</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="user image" />
                                                </div>
                                                <h4>
                                                    Developers
                                                    <small><i class="fa fa-clock-o"></i> Today</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="user image" />
                                                </div>
                                                <h4>
                                                    Sales Department
                                                    <small><i class="fa fa-clock-o"></i> Yesterday</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="pull-left">
                                                    <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="user image" />
                                                </div>
                                                <h4>
                                                    Reviewers
                                                    <small><i class="fa fa-clock-o"></i> 2 days</small>
                                                </h4>
                                                <p>Why not buy a new awesome theme?</p>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">See All Messages</a></li>
                            </ul>
                        </li>
                        <!-- Notifications: style can be found in dropdown.less -->
                        <li class="dropdown notifications-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell-o"></i>
                                <span class="label label-warning">10</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 10 notifications</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-users text-red"></i> 5 new members joined
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="fa fa-user text-red"></i> You changed your username
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="footer"><a href="#">View all</a></li>
                            </ul>
                        </li>
                        <!-- Tasks: style can be found in dropdown.less -->
                        <li class="dropdown tasks-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-flag-o"></i>
                                <span class="label label-danger">9</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">You have 9 tasks</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Design some buttons
                                                    <small class="pull-right">20%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">20% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Create a nice theme
                                                    <small class="pull-right">40%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">40% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Some task I need to do
                                                    <small class="pull-right">60%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">60% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                        <li>
                                            <!-- Task item -->
                                            <a href="#">
                                                <h3>
                                                    Make beautiful transitions
                                                    <small class="pull-right">80%</small>
                                                </h3>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="sr-only">80% Complete</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <!-- end task item -->
                                    </ul>
                                </li>
                                <li class="footer">
                                    <a href="#">View all tasks</a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
                                <span class="hidden-xs">Thaychasain.CH</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                                    <p>
                                        Alexander Pierce - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>


        <!-- Left side column. contains the logo and sidebar -->
     <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>Thaychasain.CH</p>

                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!------------------------------------------------------------------------------------------- ช่องค้นหาด้านซ้ายของฟอร์ม ----------------------------------------------------------->
                <!-- sidebar menu -->

                <ul class="sidebar-menu">
                    <li class="header">เมนูการใช้งาน</li>
                    <li>
                        <a href="/index.php">
                            <i class="fa fa-home"></i> <span>หน้าหลัก</span>
                        </a>
                    </li>
      
                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-user"></i> <span>จัดการโปรโมชั่น</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="/profile.php"><i class="fa fa-circle-o"></i>โปรโมชั่น</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i>คูปอง</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i>จัดกิจกรรม</a></li>
                        </ul>
                    </li>
                   <li class="treeview">
                        <a href="">
                            <i class="fa fa-user"></i> <span>จัดการแพ็คเกจ</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="/profile.php"><i class="fa fa-circle-o"></i>ต่ออายุแพ็คเกจ</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i>ปรับเปลี่ยนแพ็คเกจ</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/package.php">
                            <i class="fa fa-bookmark"></i> <span>จัดการสิทธิผู้ดูแล</span>
                        </a>
                    </li>
                   
                    <li>
                        <a href="/analyze.php">
                            <i class="fa  fa-bar-chart-o"></i> <span>สถิติ</span>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="/contact.php">
                            <i class="fa fa-comments"></i> <span>ติดต่อเจ้าหน้าที่</span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i>ขอคำแนะนำ(ส่งข้อความ)</a></li>
                            <li><a href="https://www.facebook.com/thaychasain.chinnaphong"><i class="fa fa-circle-o"></i>แจ้งปัญหา(facebook link)</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>



      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <a href="/package.php" type="button" class="btn  btn-warning btn-lg"> <i class="fa fa-mail-reply"></i> ย้อนกลับ</a>
        </section>
        <section class="content">
          <div class="col-lg-2 col-xs-6">
          <div class="panel panel-default">
              <ul class="nav nav-pills nav-stacked">
                  <li ><a href="1.php">หน้าหลัก</a></li>
                  <li class="active"><a href="/1_1.php">โปรโมชั่น</a></li>
                  <li><a href="/1_2.php">จัดการคูปอง</a></li>
                  <li><a href="/1_3.php">กิจกรรม</a></li>              
              </ul>
          </div>
      </div>
            <div class="col-lg-9 col-xs-6" class="img-responsive">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class = "row" >
                            <div class="col-lg-10">
                                <a href="/package.php" type="button" class="btn  btn-primary btn-lg"> <i class="fa  fa-plus"></i>   เพิ่มรายการ</a>
                            </div>
                            
                            <br></br>
                            <p>&nbsp;</p>
                            <div class="col-lg-4">
                                <!-- Info box -->
                                <div class="box box-solid box-info ">
                                    <div class="box-header">
                                        <h3 class="box-title" >โปรโมชั่น : วันแม่ลดราคา</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            <button class="btn btn-info btn-sm" data-widget=""><i class="fa fa-pencil-square-o"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <img src="/img/g1.jpg" class="img-thumbnail img-responsive" alt="Cinque Terre" max-width: 100%; >
                                                <h4 >วันที่สร้าง : 30/02/1996</h4>
                                                <h4 >ผู้ดูแล : Thaychasain.CH</h4>     
                                            </div>
                                            
                                        </div>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div>                       
                            <div class="col-lg-4">
                                <!-- Info box -->
                                <div class="box box-solid box-info ">
                                    <div class="box-header">
                                        <h3 class="box-title" >โปรโมชั่น XXXXXXXXหห</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            <button class="btn btn-info btn-sm" data-widget=""><i class="fa fa-pencil-square-o"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="container-fluid">
                                        <div class="row">
                                            <img src="/img/g1.jpg" class="img-thumbnail img-responsive" alt="Cinque Terre" max-width: 100%; >
                                            <h4 >วันที่สร้าง : 30/02/1996</h4>
                                            <h4 >ผู้ดูแล : Thaychasain.CH</h4>     
                                        </div>
                                            
                                        </div>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div>                
                            <div class="col-lg-4">
                                <!-- Info box -->
                                <div class="box box-solid box-info ">
                                    <div class="box-header">
                                        <h3 class="box-title" >โปรโมชั่น XXXXXXXXหห</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            <button class="btn btn-info btn-sm" data-widget=""><i class="fa fa-pencil-square-o"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="container-fluid">
                                        <div class="row">
                                            <img src="/img/g1.jpg" class="img-thumbnail img-responsive" alt="Cinque Terre" max-width: 100%; >
                                            <h4 >วันที่สร้าง : 30/02/1996</h4>
                                            <h4 >ผู้ดูแล : Thaychasain.CH</h4>     
                                        </div>
                                                
                                        </div>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div>                       
                            <div class="col-lg-4">
                                <!-- Info box -->
                                <div class="box box-solid box-info ">
                                    <div class="box-header">
                                        <h3 class="box-title" >โปรโมชั่น XXXXXXXXหห</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            <button class="btn btn-info btn-sm" data-widget=""><i class="fa fa-pencil-square-o"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="container-fluid">
                                        <div class="row">
                                            <img src="/img/g1.jpg" class="img-thumbnail img-responsive" alt="Cinque Terre" max-width: 100%; >
                                            <h4 >วันที่สร้าง : 30/02/1996</h4>
                                            <h4 >ผู้ดูแล : Thaychasain.CH</h4>     
                                        </div>
                                            
                                        </div>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div>                       
                            <div class="col-lg-4">
                                <!-- Info box -->
                                <div class="box box-solid box-info ">
                                    <div class="box-header">
                                        <h3 class="box-title" >โปรโมชั่น XXXXXXXXหห</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            <button class="btn btn-info btn-sm" data-widget=""><i class="fa fa-pencil-square-o"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="container-fluid">
                                        <div class="row">
                                            <img src="/img/g1.jpg" class="img-thumbnail img-responsive" alt="Cinque Terre" max-width: 100%; >
                                            <h4 >วันที่สร้าง : 30/02/1996</h4>
                                            <h4 >ผู้ดูแล : Thaychasain.CH</h4>     
                                        </div>
                                            
                                        </div>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div>                       
                            <div class="col-lg-4">
                                <!-- Info box -->
                                <div class="box box-solid box-info ">
                                    <div class="box-header">
                                        <h3 class="box-title" >โปรโมชั่น XXXXXXXXหห</h3>
                                        <div class="box-tools pull-right">
                                            <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                            <button class="btn btn-info btn-sm" data-widget=""><i class="fa fa-pencil-square-o"></i></button>
                                        </div>
                                    </div>
                                    <div class="box-body">
                                        <div class="container-fluid">
                                        <div class="row">
                                            <img src="/img/g1.jpg" class="img-thumbnail img-responsive" alt="Cinque Terre" max-width: 100%; >
                                            <h4 >วันที่สร้าง : 30/02/1996</h4>
                                            <h4 >ผู้ดูแล : Thaychasain.CH</h4>     
                                        </div>
                                            
                                        </div>
                                    </div><!-- /.box-body -->
                                </div><!-- /.box -->
                            </div>                              
                        </div>
                        
                        
                        
                        
                        
                        
                        
                    </div>
                    
         
                </div>
            </div>
            
            
           

          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
       <footer class="main-footer ">
            <div class="pull-right hidden-xs ">
                <b>Version</b> 2.0
            </div>
            <strong>Copyright &copy; 2017-2020 <a href="#"></a> Observer Tech.</strong>
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js "></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js " type="text/javascript "></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js " type="text/javascript "></script>
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js "></script>
    <script src="plugins/morris/morris.min.js " type="text/javascript "></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js " type="text/javascript "></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js " type="text/javascript "></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js " type="text/javascript "></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js " type="text/javascript "></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js " type="text/javascript "></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js " type="text/javascript "></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js " type="text/javascript "></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js " type="text/javascript "></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js " type="text/javascript "></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js " type="text/javascript "></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js " type="text/javascript "></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js " type="text/javascript "></script>
</body>

</html>

 <!-- Modal ส่งคำร้อง -->
 <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-bookmark"></i> คำร้องขอเปิดแพ็คเกจใหม่</h4>
                </div>
                <div class="modal-body">
                    
                    <div class="row">
                        <div class="col-sm-2"></div>
                        <div class="col-sm-8">
                            
                            <h3></h3>
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">ชื่อร้านค้า : </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="text1" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">สาขา : </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="text2" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">แพ็คเกจ : </label>
                                        <div class="col-sm-8">
                                            <select class="form-control" id="sel1">
                                                <option></option>
                                                <option>Demo Class (14 วัน)</option>
                                                <option>Standard Class</option>
                                                <option>Premium Class</option>
                                                <option>Business Class</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">เบอร์ติดต่อ : </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="text2" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email">ที่อยู๋ : </label>
                                    <div class="col-sm-8">
                                        <textarea class="form-control" rows="5" id="comment"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3" for="email"></label>
                                    <div class="col-sm-8">
                                        <p>*กรุณากรอกข้อมูลให้ครบถ้วน</p>
                                        <button type="button" class="btn btn-success btn-md">ส่งคำร้อง</button>
                                    </div>
                                </div>
                            </form>
                            
                        </div>
                        <div class="col-sm-2"></div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>
            </div>
        </div>


 
 <!-- Modal ??? -->


