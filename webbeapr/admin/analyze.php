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
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                <h3>100,658 ดาวน์โหลด  </h3>
                                <p>จำนวนผู้ดาวโหลด app</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                <h3>640 ร้านค้า<sup style="font-size: 20px"></sup></h3>
                                <p>จำนวนร้านค้าที่ใช้บริการ</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios-cart-outline"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                <h3>2,540 โปรโมทชั่น</h3>
                                <p>จำนวนโปรโมชั่นของร้านค้า</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->
                        
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                <h3>65,000 ออนไลน์</h3>
                                <p>จำนวนคนที่กำลังออนไลน์</p>
                                </div>
                                <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>    
                    
                    <p>&nbsp;</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                <h3 class="box-title">Area Chart</h3>
                                </div>
                                <div class="box-body chart-responsive">
                                <div class="chart" id="revenue-chart" style="height: 417px;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                        <div class="box box-default">
                            <div class="box-header with-border">
                            <i class="fa fa-bullhorn"></i>
                            <h3 class="box-title">Callouts</h3>
                            </div><!-- /.box-header -->
                            <div class="box-body">
                            <div class="callout callout-danger">
                                <h4>I am a danger callout!</h4>
                                <p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                            </div>
                            <div class="callout callout-info">
                                <h4>I am an info callout!</h4>
                                <p>Follow the steps to continue to payment.</p>
                            </div>
                            <div class="callout callout-warning">
                                <h4>I am a warning callout!</h4>
                                <p>This is a yellow callout.</p>
                            </div>
                            <div class="callout callout-success">
                                <h4>I am a success callout!</h4>
                                <p>This is a green callout.</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div> 
                </section>
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
