<!DOCTYPE html>
<html>
<?php include "./pages/head.php";?>
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
                    <section class="content">
                            <div class="col-lg-2 col-xs-6">
                                <div class="panel panel-default">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li><a href="m1.php">หน้าหลัก</a></li>
                                        <li><a href="m1-usepro.php">ใช้งานโปรโมชั่น</a></li>
                                        <li><a href="m1-manage.php">จัดการข้อมูลร้านค้า</a></li>
                                        <li><a href="m1-pro.php">โปรโมชั่น</a></li>
                                        <li class="active"><a href="m1-permission.php">จัดการสิทธิผู้ดูแล</a></li>
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
                                                    <h3 class="box-title">จัดการสิทธิผู้ดูแล</h3>
                                                </div>
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



<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>