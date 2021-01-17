<?php
    session_start();
    include('connect.php');

    error_reporting(0);
    if($_SESSION['accountID'] == ""){
        echo "<script>alert('Please Login!');</script>";
        echo "<script>window.location='login.php';</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
    />
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css?v=<?=time();?>" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/admin.css?v=<?=time();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
</head>
<body>
    <div class="main-container" >
        <div id="navbar">
            <?php if ($_SESSION["accountID"] == "")
            {
            ?>
                <a href="login.php" class="animate__animated animate__heartBeat">เข้าสู่ระบบ</a>

            <?php
            }
            else{
            ?>
                <a class="login2" style="cursor:pointer;" onclick="actionuser()"><i class="fa fa-user"></i><span> ยินดีต้อนรับ <?=$_SESSION["accountName"];?></span></a>
                <div class="actionuser">
                    <a href="forwork.php" class="ass">จ้างงาน</a>
                    <?php
                    if($_SESSION['accountAdmin'] >= 1){
                    ?>
                        <a href="admin.php" class="ass">จัดการงาน</a>
                    <?php
                    }
                    ?>
                    <a onclick="clickme()" class="ass" style="cursor:pointer;">ออกจากระบบ</a>
                </div>
            <?php
                }
            ?>
            <a href="contact.php" class="animate__animated animate__heartBeat">CONTACT</a>
            <a href="price.php" class="animate__animated animate__heartBeat">ราคาถ่ายภาพต่างๆ</a>
            <a href="event.php" class="animate__animated animate__heartBeat">EVENT</a>
            <a href="wedding.php" class="animate__animated animate__heartBeat">WEDDING</a>
            <a href="prewedding.php" class="animate__animated animate__heartBeat">PRE WEDDING</a>
            <a href="graduation.php" class="animate__animated animate__heartBeat">GRADUATION</a>
            <a href="index.php" class="animate__animated animate__heartBeat">HOME</a>
            <div class="navbar-left">
                <a style="margin-left: 20px;" href="#HOME" class="animate__animated animate__heartBeat">Photographer</a>
            </div>
        </div>
        <div class="mainbody">
            <h1 class="h1line">จัดการรายการ</h1>     
        </div>
        <div class="bodytable">
                <table border="1">
                    <tr>
                        <th width="50">No.</th>
                        <th width="150">ชื่อ-นามเระสกุล</th>
                        <th width="150">Email</th>
                        <th width="150">เบอร์ติดต่อ</th>
                        <th width="150">ประเภทงานจ้าง</th>
                        <th width="150">Time</th>
                        <th width="150">หมายเหตุ</th>
                    </tr>
                    
                </table>    
        </div>

        
    </div>
</div>
<footer>
    <div class="foot">
        <span>Copyright Website Photographer © 2021 Design by หำใหญ่ทีม</span>
    </div>
</footer>
</body>
<script>
function actionuser()
{
    document.getElementsByClassName("actionuser")[0].classList.toggle("active");
}
function myphone()
{
    document.getElementsByClassName("menuphone2")[0].classList.toggle("active");
}
function clickme(){
      swal({
          title: "ออกจากระบบ",
          text: "คุณออกจากระบบสำเร็จ!",
          type: "success",
          showButtonCancel: true,
      }, function(isConfirm) {
              if(isConfirm){
                  window.location = "logout.php";
              }
              if(isCancel){
                  window.location = "logout.php";
              }
      });
  }
</script>
</html>