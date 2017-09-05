<!DOCTYPE html>
<html>
<?php include "./pages/head.php";?>
    <body class="skin-yellow">
        <div class="wrapper">
            <?php include "./pages/main-header.php";?>
            <?php include "./pages/menu.php";  //menu?>

            <div class="content-wrapper">
            
<section class="content-header">
  <button type="button" class="btn  btn-success btn-lg" data-toggle="modal" data-target="#myModal" > <i class="fa fa-plus"></i> เพิ่มแพ็คเกจใหม่</button>
</section>
<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
   <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>Standard Class</h3>
          <img src="image/class/st_class.jpg" class="img-thumbnail img-responsive" alt="Cinque Terre"  max-width: 100%; >
          <h4>จำนวนสาขา : 1 </h4>
          <h4>จำนวนอุปกรณ์ทั้งหมด : 1 ตัว<h4>
          <h4>ผู้จัดการ : Thaychasain.CH<h4>
          <h4>ผู้ดูแลคนที่ 1 : Preeya.YC<h4>
          <h4>ผู้ดูแลคนที่ 2 : PEP<h4>
          <h4>ผู้ดูแลคนที่ 3 : Mark<h4>
          <h4>วันที่เริ่มต้นแพ็คเกจ : 1/08/2017<h4>
          <h4>วันที่สิ้นสุดแพ็คเกจ : 1/09/2017<h4>
        </div>
        <div class="icon">
        </div>
        <a  href="pack1.php" type="button" class="btn btn-primary btn-block">จัดการแพ็คเกจ</a>
      </div>
    </div> <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">

          <h3>Premium Class</h3>
          <img src="image/class/pm_class.jpg" class="img-thumbnail img-responsive" alt="Cinque Terre"  max-width: 100%; >
          <h4>จำนวนสาขา : 1 </h4>
          <h4>จำนวนอุปกรณ์ทั้งหมด : 8 ตัว<h4>
          <h4>ผู้จัดการ : Thaychasain.CH<h4>
          <h4>ผู้ดูแลคนที่ 1 : Preeya.YC<h4>
          <h4>ผู้ดูแลคนที่ 2 : PEP<h4>
          <h4>ผู้ดูแลคนที่ 3 : Mark<h4>
          <h4>วันที่เริ่มต้นแพ็คเกจ : 1/08/2017<h4>
          <h4>วันที่สิ้นสุดแพ็คเกจ : 1/09/2017<h4>

        </div>
        <div class="icon">
          
        </div>
        <a  href="pack2.php" type="button" class="btn btn-primary btn-block">จัดการแพ็คเกจ</a>
      </div>
    </div>


    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
        
          <h3>Business Class</h3>
          <img src="image/class/bn_class.jpg" class="img-thumbnail img-responsive" alt="Cinque Terre"  max-width: 100%; >
          <h4>จำนวนสาขา : 2 </h4>
          <h4>จำนวนอุปกรณ์ทั้งหมด : 24 ตัว<h4>
          <h4>ผู้จัดการ : Thaychasain.CH<h4>
          <h4>ผู้ดูแลคนที่ 1 : Preeya.YC<h4>
          <h4>ผู้ดูแลคนที่ 2 : PEP<h4>
          <h4>ผู้ดูแลคนที่ 3 : Mark<h4>
          <h4>วันที่เริ่มต้นแพ็คเกจ : 1/08/2017<h4>
          <h4>วันที่สิ้นสุดแพ็คเกจ : 1/09/2017<h4>

        
          
        </div>
        <div class="icon">
          
        </div>
        <a  href="pack3.php" type="button" class="btn btn-primary btn-block">จัดการแพ็คเกจ</a>
      </div>
    </div>

  </div>
</section><!-- /.content -->
  </div>
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
