<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ข้อมูลการรับฝากรถ</title>
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
    <script src="jquery-2.1.3.min.js"></script>

    <link href="bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet" />
    <link href="bootstrap-3.3.7-dist/css/bootstrap-theme.css" rel="stylesheet" />
    <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>

    <link href="dist/css/bootstrap-datepicker.css" rel="stylesheet" />
    <script src="dist/js/bootstrap-datepicker-custom.js"></script>
    <script src="dist/locales/bootstrap-datepicker.th.min.js" charset="UTF-8"></script>

    <script>
        $(document).ready(function () {
            $('.datepicker').datepicker({
                format: 'dd/mm/yyyy',
                todayBtn: true,
                language: 'th', //เปลี่ยน label ต่างของ ปฏิทิน ให้เป็น ภาษาไทย   (ต้องใช้ไฟล์ bootstrap-datepicker.th.min.js นี้ด้วย)
                thaiyear: true  //Set เป็นปี พ.ศ.
            }).datepicker("setDate", "0");  //กำหนดเป็นวันปัจุบัน
        });
    </script> 
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
                }   //end function myTimer() {
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
      <form method="post" action="deposit_insert.php" enctype="multipart/form-data">
    <center>
        <br>
            <font face="TH Sarabun New" size="10"><b>ข้อมูลการรับฝากรถ</b></font>
               <font face="TH Sarabun New" size="5">
                    <table border ="0" >
                        <tr>
                            <td align="right">ป้ายทะเบียนรถ :</td>
                            <td><input type="text" class="form-control" name="depositNumber" placeholder="เช่น ณบ 7823" autocomplete="off"></td> 
                        </tr>
                        <tr>
                            <td align="right">จังหวัด : </td>
                            <td><select class="form-control" id="province" name="province">
                                    <option value="---โปรดเลือก---">---โปรดเลือก---</option>
                                    <option value="กระบี่">กระบี่</option>
                                    <option value="กรุงเทพฯ">กรุงเทพฯ</option>
                                    <option value="กาญจนบุรี">กาญจนบุรี</option>
                                    <option value="กาฬสินธุ์">กาฬสินธุ์</option>
                                    <option value="กำแพงเพชร">กำแพงเพชร</option>
                                    <option value="ขอนแก่น">ขอนแก่น</option>
                                    <option value="จันทบุรี">จันทบุรี</option>
                                    <option value="ฉะเชิงเทรา">ฉะเชิงเทรา</option>
                                    <option value="ชลบุรี">ชลบุรี</option>
                                    <option value="ชัยนาท">ชัยนาท</option>
                                    <option value="ชัยภูมิ">ชัยภูมิ</option>
                                    <option value="ชุมพร">ชุมพร</option>
                                    <option value="เชียงราย">เชียงราย</option>
                                    <option value="เชียงใหม่">เชียงใหม่</option>
                                    <option value="ตรัง">ตรัง</option>
                                    <option value="ตราด">ตราด</option>
                                    <option value="ตาก">ตาก</option>
                                    <option value="นครนายก">นครนายก</option>
                                    <option value="นครปฐม">นครปฐม</option>
                                    <option value="นครพนม">นครพนม</option>
                                    <option value="นครราชสีมา">นครราชสีมา</option>
                                    <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
                                    <option value="นครสวรรค์">นครสวรรค์</option>
                                    <option value="นนทบุรี">นนทบุรี</option>
                                    <option value="นราธิวาส">นราธิวาส</option>
                                    <option value="น่าน">น่าน</option>
                                    <option value="หนองคาย">หนองคาย</option>
                                    <option value="หนองบัวลำภู">หนองบัวลำภู</option>
                                    <option value="บึงกาฬ">บึงกาฬ</option>
                                    <option value="บุรีรัมย์">บุรีรัมย์</option>
                                    <option value="ปทุมธานี">ปทุมธานี</option>
                                    <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์</option>
                                    <option value="ปราจีนบุรี">ปราจีนบุรี</option>
                                    <option value="ปัตตานี">ปัตตานี</option>
                                    <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา</option>
                                    <option value="พังงา">พังงา</option>
                                    <option value="พัทลุง">พัทลุง</option>
                                    <option value="พิจิตร">พิจิตร</option>
                                    <option value="พิษณุโลก">พิษณุโลก</option>
                                    <option value="เพชรบุรี">เพชรบุรี</option>
                                    <option value="เพชรบูรณ์">เพชรบูรณ์</option>
                                    <option value="แพร่">แพร่</option>
                                    <option value="พะเยา">พะเยา</option>
                                    <option value="ภูเก็ต">ภูเก็ต</option>
                                    <option value="มหาสารคาม">มหาสารคาม</option>
                                    <option value="แม่ฮ่องสอน">แม่ฮ่องสอน</option>
                                    <option value="มุกดาหาร">มุกดาหาร</option>
                                    <option value="ยะลา">ยะลา</option>
                                    <option value="ยโสธร">ยโสธร</option>
                                    <option value="ร้อยเอ็ด">ร้อยเอ็ด</option>
                                    <option value="ระนอง">ระนอง</option>
                                    <option value="ระยอง">ระยอง</option>
                                    <option value="ราชบุรี">ราชบุรี</option>
                                    <option value="ลพบุรี">ลพบุรี</option>
                                    <option value="ลำปาง">ลำปาง</option>
                                    <option value="ลำพูน">ลำพูน</option>
                                    <option value="เลย">เลย</option>
                                    <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                                    <option value="สกลนคร">สกลนคร</option>
                                    <option value="สงขลา">สงขลา</option>
                                    <option value="สตูล">สตูล</option>
                                    <option value="สมุทรปราการ">สมุทรปราการ</option>
                                    <option value="สมุทรสงคราม">สมุทรสงคราม</option>
                                    <option value="สมุทรสาคร">สมุทรสาคร</option>
                                    <option value="สระแก้ว">สระแก้ว</option>
                                    <option value="สระบุรี">สระบุรี</option>
                                    <option value="สิงห์บุรี">สิงห์บุรี</option>
                                    <option value="สุโขทัย">สุโขทัย</option>
                                    <option value="สุพรรณบุรี">สุพรรณบุรี</option>
                                    <option value="สุราษฎร์ธานี">สุราษฎร์ธานี</option>
                                    <option value="สุรินทร์">สุรินทร์</option>
                                    <option value="อ่างทอง">อ่างทอง</option>
                                    <option value="อุดรธานี">อุดรธานี</option>
                                    <option value="อุทัยธานี">อุทัยธานี</option>
                                    <option value="อุตรดิตถ์">อุตรดิตถ์</option>
                                    <option value="อุบลราชธานี">อุบลราชธานี</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right">ยี่ห้อ : </td>
                            <td><input type="text" class="form-control" name="brand" placeholder="ยี่ห้อ" autocomplete="off"></td> 
                        </tr>
                        <tr>
                            <td align="right">วันที่เข้า : </td>
                            <td><input id="inputdatepicker" class="datepicker" data-date-format="mm/dd/yyyy" name="dateIn"></td> 
                        </tr>
                        <tr>
                            <td align="right">ค่าบริการ :</td>
                            <td><select name= "deprice" class="form-control">
            	                <option value="">--โปรดเลือก--</option>
                                    <?php 
                                        require_once'connect.php';  //เชื่อมต่อฐานข้อมูล
                                        $sql = "SELECT * FROM rate ORDER BY price ASC"; //นำ price จากตาราง rate
                                        $query = mysqli_query($conn,$sql);
                                    while($row=mysqli_fetch_array($query)){ 
                                    ?>
                                <option value="<?php echo $row['price']?>"><?php echo $row['price']?>
                                    <?php }?>
                            </select></td>
                            <td>บาท</td>
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
    @$depositNumber =$_POST['depositNumber']; 
    @$province =$_POST['province'];
    @$brand =$_POST['brand']; 
    @$dateIn =$_POST['dateIn'];  
    @$deprice = $_POST['deprice'];

    //คำสั่ง sql
    $sql = "INSERT INTO deposit(depositNumber,province,brand,dateIn,deprice)
             VALUES('$depositNumber','$province','$brand','$dateIn','$deprice')";

    mysqli_query($conn,$sql);

    echo "<script>alert('บันทึกข้อมูลเรียบร้อยแล้ว');window.location='deposit_insert.php';</script>";
    }
?> 
</b></font>
</center>
      <!--footer-->
      <footer class="main-footer">
        <!-- <div class="container-fluid">
          <div class="row"> -->
            <div class="col-sm-7 text-right">
              <p><font face="TH Sarabun New" size="5"><b>นาวสาวศิริยากร &nbsp; ศิริสมบัติ &nbsp; | &nbsp; ระบบสารสนเทศ</b></font></p>
            </div>
      </footer>
    </div>
  </body>
</html>

