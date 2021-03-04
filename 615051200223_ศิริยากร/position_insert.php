<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ข้อมูลตำแหน่งที่จอดรถ</title>
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
                }
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
      <!--เลือก Radio แล้วกรอกข้อมูลใน text-->
      <script langauge="text/javascript">  
          function disabled3() {
          document.getElementById("floor").disabled = false;
          document.getElementById("positionA").disabled = false;
          document.getElementById("positionB").disabled = true;
          }

          function disabled4() {
          document.getElementById("floor").disabled = false;
          document.getElementById("positionA").disabled = true;
          document.getElementById("positionB").disabled = false;
          }  
      </script>
      <form method="post" action="position_insert.php" enctype="multipart/form-data">
    <center>
        <br>
            <font face="TH Sarabun New" size="10"><b>ข้อมูลตำแหน่งที่จอดรถ</b></font>
            <font face="TH Sarabun New" size="5">
                <table border ="0" >
                    <?php
                      require_once'connect.php';
                      //รันรหัสตำแหน่งที่จอดรถเอง
                      $sql2 = "SELECT MAX(positionId) AS positionId FROM position";
                      $query = mysqli_query($conn,$sql2);
                      // $row = mysqli_num_rows($query);
                      $rs = mysqli_fetch_array($query);
                      // echo $row;
                      if($rs['positionId'] !=""){
                        $sub = substr($rs['positionId'],1)+1;
                        $positionId = sprintf('P%03.0f', $sub); // $positionId = "P".$sub;
                      }else{
                        $positionId = "P001";
                      }
                    ?>
                        <tr>
                            <td align="right">รหัสตำแหน่ง : </td>
                            <td><input type="text" class="form-control" value= "<?php echo $positionId; ?>" disabled="disabled">
                                <input type="hidden" class="form-control" id="positionId"  
                                       name="positionId" value= "<?php echo $positionId; ?>"></td>
                        </tr>
                        <tr>
                            <td align="right">ตึก : </td>
                            <td><input type="radio" name="building" value="ตึก A" onclick="disabled3()"> ตึก A </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="radio" name="building" value="ตึก B" onclick="disabled4()"> ตึก B </td>
                        </tr>
                        <tr>
                            <td align="right">ชั้น : </td>
                            <td><select name="floor" id="floor" class="form-control" disabled>
                                <option value="---โปรดเลือก---">---โปรดเลือก---</option>
                                <option value="P1">P1</option>
                                <option value="P2">P2</option>
                                <option value="P3">P3</option>
                              </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">เลขช่องที่จอดตึก A : </td>
                            <td><input type="text" name="positionA"  id="positionA" class="form-control" 
                                       placeholder="เช่น A01" autocomplete="off" disabled></td>
                        </tr>
                        <tr>
                            <td align="right">เลขช่องที่จอดตึก B : </td>
                            <td><input type="text" name="positionB" id="positionB" class="form-control" 
                                       placeholder="เช่น B01" autocomplete="off" disabled></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><button type="submit" class="btn btn-success" name="save">
                                <font face="TH Sarabun New" size="4">บันทึก</font></button></td>
                        </tr>
                    </table>
                </font>
    </center>
</form>
<center>
    <font face="TH Sarabun New" size="5"><b>
    <br>
    <?php
        //เชื่อมต่อฐานข้อมูล
        require_once"connect.php";

        //ถ้ากด save 
        if(isset($_POST['save'])){

            //ประกาศชื่อตัวแปร
            //ปิด error Undefile ใส่ @
            @$positionId =$_POST['positionId']; 
            @$building =$_POST['building']; 
            @$floor = $_POST['floor'];
            @$positionA = $_POST['positionA'];
            @$positionB = $_POST['positionB'];

            //คำสั่ง sql
            $sql = "INSERT INTO `position`(`positionId`,`building`,`floor`,`positionA`,`positionB`)
                    VALUES('$positionId','$building','$floor','$positionA','$positionB')";

            mysqli_query($conn,$sql);

            echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');window.location='position_insert.php';</script>";
        } //end if(isset($_POST['save'])){
    ?> 
</b></font>
</center>
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