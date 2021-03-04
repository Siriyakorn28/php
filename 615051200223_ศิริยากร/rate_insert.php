<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ข้อมูลอัตราค่าจอดรถ</title>
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
      <script>
        function show1(){   //จอดแบบรายชั่วโมง
          var choose = document.getElementById("choose1").value;
          var hour1=parseInt( document.getElementById('unit').value );   
              if(choose == "รายชั่วโมง"){ //ถ้าเลือกรายชั่วโมง
                  var h1 = document.getElementById("price1").value=20;  //จะขึ้นราคาชั่วโมงละ 20 บาท
              } //end if(choose == "รายชั่วโมง"){
              document.getElementById("total").value=h1*hour1;  //ค่าบริการ = จำนวนชั่วโมง*20
        } //end function show1(){

        function show2(){   //จอดแบบรายวัน
          var choose = document.getElementById("choose2").value;
          var day1=parseInt( document.getElementById('unit').value );
              if(choose == 'รายวัน'){  //ถ้าเลือกรายวัน
                  var d1 =  document.getElementById("price1").value=200;  //จะขึ้นราคาวันละ 200 บาท
              } //end if(choose == 'รายวัน'){
              document.getElementById("total").value=d1*day1; //ค่าบริการ = จำนวนวัน*200
          } //end function show2(){

        function show3(){   //จอดแบบรายเดือน
          var choose = document.getElementById("choose3").value;
          var month1=parseInt( document.getElementById('unit').value );
              if(choose == 'รายเดือน'){  //ถ้าเลือกรายเดือน
                  var m2 = document.getElementById("price1").value=2000;  //จะขึ้นราคาเดือนละ 2000 บาท
              } //end  if(choose == 'รายเดือน'){
              document.getElementById("total").value=m2*month1; //ค่าบริการ = จำนวนเดือน*2000
          } //end function show3(){
      </script>
      <form method="post" action="rate_insert.php" enctype="multipart/form-data">
    <center>
        <br>
            <font face="TH Sarabun New" size="10"><b>ข้อมูลอัตราค่าจอดรถ</b></font>
               <font face="TH Sarabun New" size="5">
                    <table border ="0" >
                          <?php
                                require_once'connect.php';
                                //รันรหัสอัตราค่าจอดรถเอง
                                $sql2 = "SELECT MAX(rateId) AS rateId FROM rate";
                                $query = mysqli_query($conn,$sql2);
                                // $row = mysqli_num_rows($query);
                                $rs = mysqli_fetch_array($query);
                                // echo $row;
                                if($rs['rateId'] !=""){
                                    $sub = substr($rs['rateId'],1)+1;
                                    $rateId = sprintf('R%03.0f', $sub);  // $rateId = "c".$sub;
                                }else{
                                    $rateId = "R001";
                                }
                          ?>
                        <tr>
                            <td align="right">รหัสอัตราค่าจอดรถ :</td>
                            <td><input type="text" class="form-control" value= "<?php echo $rateId; ?>" disabled="disabled"  >
                                <input type="hidden" class="form-control" id="rateId"  name="rateId" value= "<?php echo $rateId; ?>">
                            </td> 
                        </tr>
                        <tr>
                            <td align="right">จอดแบบ : </td>
                            <td><input type=radio name="choose" id="choose1" value="รายชั่วโมง" onclick="show1()"> 
                                รายชั่วโมง ชั่วโมงละ 20 บาท </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type=radio name="choose" id="choose2" value="รายวัน" onclick="show2()"> 
                                รายวัน วันละ 200 บาท</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type=radio name="choose" id="choose3" value="รายเดือน" onclick="show3()"> 
                                รายเดือน เดือนละ 2000 บาท</td>
                        </tr>
                        <tr>
                            <td align="right">ราคาอัตราค่าจอด :</td>
                            <td><input type=text name="rate" class="form-control" id="price1" autocomplete="off" readonly ></td>
                        </tr>
                        <tr>
                            <td align="right">จำนวนอัตราที่จอด :</td>
                            <td><input type=text name="amount" class="form-control" onblur="show1()" onblur="show2()" 
                                      onblur="show3()" id="unit" autocomplete="off" placeholder="กรอกจำนวนชั่วโมง / วัน / เดือน"></td>                
                        </tr>
                        <tr>
                            <td align="right">ค่าบริการ :</td>
                            <td><input type=text name="price" class="form-control" id="total" autocomplete="off" 
                                       placeholder="คลิกเพื่อดูค่าบริการ"></td>
                            <td>บาท</td>                            
                        </tr>
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
      require_once"connect.php";  //เชื่อมต่อฐานข้อมูล

      if(isset($_POST['save'])){  //ถ้ากด save
          //ประกาศชื่อตัวแปร
          //ปิด error Undefile ใส่ @
          @$rateId =$_POST['rateId']; 
          @$choose =$_POST['choose']; 
          @$rate = $_POST['rate'];
          @$amount = $_POST['amount'];
          @$price = $_POST['price'];

          //คำสั่ง sql
          $sql = "INSERT INTO rate(rateId,choose,rate,amount,price)
                  VALUES('$rateId','$choose','$rate','$amount','$price')";

          mysqli_query($conn,$sql);
          echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');window.location='rate_insert.php';</script>";
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