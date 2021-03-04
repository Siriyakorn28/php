<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ค้นหาข้อมูลการรับฝากรถ</title>
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
    </b></font>
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
      <form method="post" action="deposit_search.php" enctype="multipart/form-data">
    <br><br>
    <center>
        <font face="TH Sarabun New" size="10"><b>ค้นหาข้อมูลการรับฝากรถ</b></font>
        <font face="TH Sarabun New" size="5">
        <table border="0">
            <tr>
                <td align="right"> ค้นหา : </td>
                <td><select class="form-control" name="list">
                        <option value="---โปรดเลือก---">---โปรดเลือก---</option>
                        <option value="all">ทั้งหมด</option>
                        <option value="depositNumber">ป้ายทะเบียน</option>
                        <option value="province">จังหวัด</option>
                        <option value="brand">ยี่ห้อรถ</option>
                    </select></td>
                <td><input class="form-control mr-sm-2" type="text" name="keyword" placeholder="ค้นหา"></td>
                <td><button class="btn btn-success" type="submit" name="save">
                    <font face="TH Sarabun New" size="4">ค้นหา</font></button></td>
            </tr>
        </table>
        </font>
    </center>
<center>
<br>
<font face="TH Sarabun New" size="5">
<br>
<?php 
require_once('connect.php');  //เชื่อต่อฐานข้อมูล

    if(isset($_POST['save'])){  //ถ้ากด save
        $select = $_POST['list']; //เลือก list

    if($select == 'all'){ //ถ้าเลือก all จะแสดงข้อมูลของตาราง deposit ทั้งหมด
        $sql = "SELECT *
                FROM deposit";
     }else{ //ถ้าเลือกรายการอื่น จะแสดงข้อมูลตาม keyword
        $sql = "SELECT *  
                FROM deposit
                WHERE $select='".$_POST['keyword']."'";
     }
     $result = mysqli_query($conn,$sql);  //รัน

?>
<!--แสดงในรูปตาราง-->
<table width="1000" border="1">
    <tr>
        <td align="center"><b>ป้ายทะเบียน</b></td>
        <td align="center"><b>จังหวัด</b></td>
        <td align="center"><b>ยี่ห้อรถ</b></td>
        <td align="center"><b>วันที่เข้า</b></td>
        <td align="center"><b>ค่าบริการ</b></td>
        <td align="center"><b>Update</b></td>
        <td align="center"><b>Delete</b></td>
    </tr>
<?php
    while($array = mysqli_fetch_assoc($result)){  //ดึงข้อมูลจาก sql เก็บในตัวแปร $array
?>
    <tr>
        <td align="center"><?=$array["depositNumber"];?></td>
        <td align="center"><?=$array["province"];?></td>
        <td align="center"><?=$array["brand"];?></td>
        <td align="center"><?=$array["dateIn"];?></td>
        <td align="center"><?=$array["deprice"];?></td>
        <td align="center"><a href="deposit_update.php?update_id=<?php 
            echo $array["depositNumber"];?>">แก้ไข</a></td>
        <td align="center"><a href="deposit_delete.php?delete_id=<?php 
            echo $array["depositNumber"];?>">ลบ</a></td>
    </tr>
<?php } //end while($array = mysqli_fetch_assoc($result)){ ?>
</table>
<?php
    mysqli_close($conn);
}  //end if(isset($_POST['save']))
?>
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