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
                <h1>
                    My Profile
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                </ol>
                <div class="row">

                </div>
                
            </section>
            <div class="container">
                 <div class="panel panel-default">
                    <div class = "row">
                        <div class="col-sm-8 col-md-8">
                            <div class="panel-body">
                                <div class="col-md-4">
                                    <div class="thumbnail">
                                        <a href="w3images/lights.jpg">
                                            <img src="image/avatar5.png" alt="Lights" style="width:100%">
                                            <div class="caption">
                                                <p><button class="btn btn-block btn-primary btn-lg"><i class="fa fa-cloud-upload"></i> อัพโหลดรูป</button></p>
                                            </div>
                                        </a> 
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="usr">ชื่อ-นามสกุล : Thaychasain Chinnaphong</label>
                                            
                                    </div>
                                    <div class="form-group">
                                        <label for="usr">รหัสผ่านใหม่ : </label>
                                            <input type="password" class="form-control"  id="usr" value = "">
                                    </div>

                                    <div class="form-group">
                                        <label for="pwd">ยืนยันรหัสผ่าน : </label>
                                        <input type="password" class="form-control" id="pwd"  value = "">
                                    </div>
                                    
                                    <p><button class="btn btn-block btn-primary btn-lg"><i class="fa fa-save"></i>  บันทึกการแก้ไข</button></p>
                                </div>
                            </div>
                        </div>  
                    </div>    
                </div>
            </div>
        </div>
            <?php include "./pages/footer.php";?>
        </div>
    </body>
</html>

 <!-- Modal ส่งคำร้อง -->
 <div id="myModal" class="modal fade" role="dialog">