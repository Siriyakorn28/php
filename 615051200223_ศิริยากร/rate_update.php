<?php
require_once('connect.php'); //เชื่อมต่อฐานข้อมูล
if(isset($_GET['update_id'])){   //เมื่อรับค่า update_id
    $update_id=$_GET['update_id'];
     $sql= "SELECT * 
            FROM rate
            WHERE rateId ='".$update_id."'";
    // run คำสั่ง sqli
    $result = mysqli_query($conn,$sql);
    //แสดงผล
    while($array1 = mysqli_fetch_array($result)){
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>แก้ไขข้อมูลอัตราค่าจอดรถ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" 
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="icon" type="image/png" href="images/icons/favicon1.ico"/>
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <style> 
       div[class="page"] { 
        background: url(img/pic01.jpg)
        no-repeat center center fixed;
        background-size:cover ;
    }
  </style>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/car.png" >
            <h2><font face="TH Sarabun New">ระบบรับฝากรถ</font></h2>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="index.html"> <i class="fas fa-home"></i><font face="TH Sarabun New" size="5"><b>Home</b></font></a></li>     
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> 
              <i class="fas fa-car"></i><font face="TH Sarabun New" size="5">ตำแหน่งที่จอดรถ</font></a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                  <li><a href="position_insert.php"><font face="TH Sarabun New" size="4">เพิ่มตำแหน่งที่จอดรถ</font></a></li>
                  <li><a href="position_search.php"><font face="TH Sarabun New" size="4">ค้นหาตำแหน่งที่จอดรถ</font></a></li>
              </ul>
            </li> 
            <li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> 
              <i class="fas fa-car"></i><font face="TH Sarabun New" size="5">อัตราค่าจอดรถ</font></a>
              <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
                  <li><a href="rate_insert.php"><font face="TH Sarabun New" size="4">เพิ่มอัตราค่าจอดรถ</font></a></li>
                  <li><a href="rate_search.php"><font face="TH Sarabun New" size="4">ค้นหาอัตราค่าจอดรถ</font></a></li>
              </ul>
            </li>  
            <li><a href="#exampledropdownDropdown3" aria-expanded="false" data-toggle="collapse"> 
                <i class="fas fa-car"></i><font face="TH Sarabun New" size="5">ข้อมูลการรับฝากรถ</font></a>
                <ul id="exampledropdownDropdown3" class="collapse list-unstyled ">
                    <li><a href="deposit_insert.php"><font face="TH Sarabun New" size="4">เพิ่มข้อมูลการรับฝากรถ</font></a></li>
                    <li><a href="deposit_search.php"><font face="TH Sarabun New" size="4">ค้นหาข้อมูลการรับฝากรถ</font></a></li>
                </ul>
            </li>
            <li><a href="#exampledropdownDropdown4" aria-expanded="false" data-toggle="collapse"> 
                <i class="fas fa-car"></i><font face="TH Sarabun New" size="5">ออกสรุปรายงาน</font></a>
                <ul id="exampledropdownDropdown4" class="collapse list-unstyled ">
                    <li><a href="rate_report.php"><font face="TH Sarabun New" size="4">ออกสรุปรายงานอัตราค่าจอดรถ</font></a></li>
                    <li><a href="deposit_report.php"><font face="TH Sarabun New" size="4">ออกสรุปรายงานการรับฝากรถ</font></a></li>
                </ul>
            </li>  
            <li>
            <center>
              <!--เวลาตามเครื่อง-->
              <p id="demo"></p>
              <script>
                  var myVar = setInterval(myTimer ,1000);
                  function myTimer() {
                    var d = new Date();
                    document.getElementById("demo").innerHTML = d.toLocaleTimeString();
                  } //end function myTimer() {
              </script>
            </center>
            </li>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid"> 
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="index.html" class="menu-btn"><i class="icon-bars"></i></a>
                <a href="index.html" class="navbar-brand"><div class="brand-text d-none d-md-inline-block"></div></a></div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center"></ul>
            </div>
          </div>
        </nav>
      </header>
      <form method="post" action="rate_update.php" enctype="multipart/form-data">
        <center>
        <br><br>
            <font face="TH Sarabun New" size="8"><b>แก้ไขข้อมูลอัตราค่าจอดรถ</b></font>
            <font face="TH Sarabun New" size="5"><b>
            <table border="0">
        <tr>
            <td align="right">รหัสอัตราค่าจอดรถ : </td>
            <td><input type="text" class="form-control" name="rateId" value="<?php echo $array1['rateId']?>" readonly></td>
        </tr>
        <tr>
            <td align="right">จอดแบบ : </td>
            <td><input type="text" class="form-control" name="choose" value="<?php echo $array1['choose']?>" readonly></td>
        </tr>
        <tr>
            <td align="right">ราคา : </td>
            <td><input type="text" class="form-control" name="rate" value="<?php echo $array1['rate']?>"></td>
        </tr>
        <tr>
            <td align="right">จำนวนชั่วโมง/วัน/เดือน : </td>
            <td><input type="text" class="form-control" name="amount" value="<?php echo $array1['amount']?>"></td>
        </tr>
        <tr>
            <td align="right">ค่าบริการ : </td>
            <td><input type="text" class="form-control" name="price" value="<?php echo $array1['price']?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><button type="submit" class="btn btn-success" name="update">
            <font face="TH Sarabun New" size="4">แก้ไข</font></button></td>
        </tr>
    </table>
</b>
</font>
</center>
</form>
      <!--footer-->
      <footer class="main-footer">
        <div class="col-sm-7 text-right">
          <p><font face="TH Sarabun New" size="5"><b>นาวสาวศิริยากร &nbsp; ศิริสมบัติ &nbsp; | &nbsp; ระบบสารสนเทศ</b></font></p>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>
<?php
      } //end while($array1 = mysqli_fetch_array($result)){
  }   //end if(isset($_GET['update_id'])){
?>
<?php  
    if(isset($_POST['update'])){ //เมื่อกดปุ่ม edit

        //กำหนดตัวแปร เก็บค่าจากการ input จากฟอร์ม
          $sql="UPDATE rate
                  SET choose = '".$_POST['choose']."',
                      rate = '".$_POST['rate']."',
                      amount = '".$_POST['amount']."',
                      price = '".$_POST['price']."'
                  WHERE rateId = '".$_POST['rateId']."' ";
        
            mysqli_query($conn,$sql);
            echo "ปรับปรุงข้อมูลเรียบร้อย";
            
            mysqli_close($conn);
    } //end if(isset($_POST['update'])){
?>