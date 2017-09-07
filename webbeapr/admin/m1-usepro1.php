<!DOCTYPE html>
<html>
<?php include "./pages/head.php";?>
<head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Data Tables</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
    <body class="skin-yellow">
        <div class="wrapper">
            <?php include "./pages/main-header.php";?>
            <?php include "./pages/menu.php";  //menu?>

               <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                    <a href="m_pro.php" type="button" class="btn  btn-warning btn-lg"> <i class="fa fa-mail-reply"></i> ย้อนกลับ</a>
                    <a href="m1-usepro.php" type="button" class="btn  btn btn-success btn-lg"> <i class="fa fa-barcode"></i> ใช้งานโปรโมชั่น</a>
                        
                    </section>
                    <!-- Main content -->
                    <section class="content">
                            
                        <!-- Small boxes (Stat box) -->
                            <div class="col-lg-2 col-xs-6">
                                <div class="panel panel-default">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="m1.php">หน้าหลัก</a></li>
                                        <li class="active"><a href="m1-usepro.php">ใช้งานโปรโมชั่น</a></li>
                                        <li><a href="m1-manage.php">จัดการข้อมูลร้านค้า</a></li>
                                        <li><a href="m1-pro.php">โปรโมชั่น</a></li>
                                        <li><a href="m1-permission.php">จัดการสิทธิผู้ดูแล</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-9 col-xs-6" class="img-responsive">
                                <div class="panel panel-default">
                                    <div class="panel-body"><font size="14" face="verdana" color="green">MK restaurant โลตัสสาขาพะเยา Standard Class</font></div>
                                </div>
                                <br>
                                <div class="panel panel-default">
                                    <div class="panel-body">          
                                        <div class = "row" >  
                                        
                                        <div class="box box-success">
                                                <div class="box-header">
                                                    <h3 class="box-title">ใช้งานโปรโมชั่น</h3>
                                                </div>


                                                <div class="row">
                                                    <div class="col-sm-2"></div>
                                                    <div class="col-sm-8">

                                                        <form class="form-horizontal">
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-3" for="email">รหัสโปรโมชั่น : </label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control" id="text1" placeholder="" value = "001006A">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-3" for="email">ชื่อลูกค้า : </label>
                                                                <div class="col-sm-8">
                                                                    <input type="text" class="form-control" id="text2" placeholder="" value = "หมีตัวกลม">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-3" for="email"></label>
                                                                <div class="col-sm-8">
                                                                    <p>*กรุณากรอกข้อมูลให้ครบถ้วน</p>
                                                                    <a href="m1-usepro2.php" type="button" class="btn btn-success btn-md"> </i> บันทึกรายการ</a>
                                                                </div>
                                                            </div>

                                                            
                                                        </form>
                                                    </div>
                                                    <div class="col-sm-2"></div>
                                                </div>
                            
                                           
                                        </div>
                                    </div><!-- /.box --> 
                                </div>
                            </div>
                            </div>
                        </div>
                    </section><!-- /.content -->
                </div><!-- /.content-wrapper -->
            <?php include "./pages/footer.php";?>
    </div>
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
    </body>
</html>

 <!-- Modal ส่งคำร้อง -->
        <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><i class="fa fa-bookmark"></i> ใช้งานโปรโมชั่น</h4>
                    </div>
                    <div class="modal-body">
                        
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                
                                <h3></h3>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="email">รหัสโปรโมชั่น : </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="text1" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="email">ชื่อลูกค้า : </label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="text2" placeholder="">
                                        </div>
                                    </div>
                            
                                
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="email"></label>
                                        <div class="col-sm-8">
                                            <p>*กรุณากรอกข้อมูลให้ครบถ้วน</p>
                                            <button type="button" class="btn btn-success btn-md" >บันทึกรายการ</button>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="col-sm-2"></div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default"  class="close" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
        </div>


        <div id="myModal2" class="modal fade" role="dialog">
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