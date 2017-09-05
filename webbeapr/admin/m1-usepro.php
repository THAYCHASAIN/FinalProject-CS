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
                                    <div class="panel-body">          
                                        <div class = "row" >  
                                        <div class="box box-success">
                                                <div class="box-header">
                                                    <h3 class="box-title">ใช้งานโปรโมชั่น</h3>
                                                </div>
                                                <div class="box-body chart-responsive">
                                                <div class="box">
                                                    <div class="box-header">
                                                        <div class=" row">
                                                            <div class="col-xs-2">
                                                                <label for="ex1">รหัสประจำคูปอง</label>
                                                                <input class="form-control" id="ex1" type="text">
                                                            </div>
                                                            <div class="col-xs-3">
                                                                <label for="ex2">ชื่อลูกค้า</label>
                                                                <input class="form-control" id="ex2" type="text">
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <input type="button" class="btn btn-info" value="เพิ่มรายการใหม่">
                                                                <input type="button" class="btn btn-info" value="สแกนบาร์โค้ด">
                                                            </div>
                                                        </div>                                                                
                                                    </div>
                                                    <div class="box-body">
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>ลำดับ</th>
                                                            <th>เลขที่คูปอง</th>
                                                            <th>รหัสประจำคูปอง</th>
                                                            <th>ชื่อคูปอง</th>
                                                            <th>ชื่อลูกค้า</th>
                                                            <th>วันที่</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>000078</td>
                                                                <td>1364005486</td>
                                                                <td>คูปองซื้อ kfc ชุดใหญ่ แถม ไก่ 1 ชิ้น</td>
                                                                <td>mint</td>
                                                                <td>9/07/2017</td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>000001</td>
                                                                <td>6980010356</td>
                                                                <td>คูปองซื้อ 1 แถม 1 MC Jean</td>
                                                                <td>thay</td>
                                                                <td>6/05/2017</td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>000056</td>
                                                                <td>9468213365</td>
                                                                <td>ส่วนลด kfc 100 บาท</td>
                                                                <td>elf</td>
                                                                <td>3/04/2017</td>
                                                            </tr>
                                                            <tr>
                                                                <td>4</td>
                                                                <td>000100</td>
                                                                <td>1036648213</td>
                                                                <td>ส่วนลด MC Jean 30 %</td>
                                                                <td>tom</td>
                                                                <td>30/01/2017</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    </div><!-- /.box-body -->
                                                </div><!-- /.box -->
                                                </div><!-- /.box-body -->
                                            </div><!-- /.box -->
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
