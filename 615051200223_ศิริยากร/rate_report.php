<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ออกรายงานสรุปอัตราค่าจอดรถ</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
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
</head>
    <style type="text/css">
		@font-face {
			font-family: thaifont;
			src: url(fonts/Petchlamoon-Regular.ttf) format("truetype");
		}
	</style>
<body>
<form method="post" action="rate_report.php" enctype="multipart/form-data"><br><br>
    <center><font face="TH Sarabun New" size="8"><b>ออกสรุปรายงานอัตราค่าจอดรถ</b></font>
    <font face="TH Sarabun New" size="5">
        <table border="0">
            <tr>
                <td align="right"> ออกสรุปรายงาน : </td>
                <td><select class="form-control" name="list">
                        <option value="---โปรดเลือก---">---โปรดเลือก---</option>
                        <option value="all">ทั้งหมด</option>
                        <option value="rateId">รหัสอัตราค่าจอดรถ</option>
                        <option value="depositNumber">ป้ายทะเบียน</option>
                    </select></td>
                <td><input class="form-control mr-sm-2" type="text" name="keyword" placeholder="กรอกข้อมูล"> 
                </td>
                <td><button class="btn btn-success" type="submit" name="report">
                    <font face="TH Sarabun New" size="4">ออกรายงาน</font></button></td>
            </tr>
        </table>
        </font>
    </center>

    <!--ออกรายงาน-->
<?php
    require('connect.php');     //เชื่อมต่อฐานข้อมูล
    if(isset($_POST['report'])){    //ถ้ากด report
        $select = $_POST['list'];   //เลือก list
        if($select == 'all'){   //ถ้าเลือกทั้งหมด
            $sql = "SELECT * FROM rate AS r1 
                    INNER JOIN deposit  AS r2
                    ON (r1.depositNumber = r2.depositNumber)";
        }else{  //ถ้าเลือกรายการอื่น
            $sql = "SELECT * FROM rate AS r1
                    INNER JOIN deposit  AS r2
                    ON (r1.depositNumber = r2.depositNumber)
                    WHERE $select='".$_POST['keyword']."'";    //ออกรายงานคำที่พิมพ์ในช่อง keyword
        }
        echo $sql;
    //1. include file fpdf
    require('fpdf182/fpdf.php');
    ob_end_clean(); //เคลียร์ Object เก่า
    ob_start(); // เริ่ม Object ใหม่
    
    Class PDF extends FPDF{
    //กำหนด header(){
    function Header(){
        global $title;
        //ใส่ภาพ
        $this->Image('C:\xampp\htdocs\615051200223_ศิริยากร\img\car.png',10,50,10);
        $w = $this->GetStringWidth($title)+38;
        $this->Setx(125-$w)/2;
        
        //เพิ่ม font ภาษาไทย
        $this->AddFont('THSarabunNew','B','THSarabunNew_b.php');
        $this->SetFont('THSarabunNew','B',20);
        //หัวตาราง
        $this->Cell($w,10,iconv('UTF-8','cp874',$title),0,0,'C');
        $this->SetLeftMargin(100);
        $this->Cell(0,5,iconv("UTF-8","cp874",'ระบบรับฝากรถ'),0,1);
        $this->Cell(0,5,iconv("UTF-8","cp874",'ออกสรุปรายงานอัตราค่าจอดรถ'),0,1);
        $this->Ln();
        $this->line(5,28,200,28);
        $this->SetLeftMargin(5);
        //line break
        $this->Ln(20);
        //end Header()
    } //end class

    function Footer(){
        $this->SetLineWidth(0,5);
        //เพิ่ม font ภาษาไทย
        $this->AddFont('THSarabunNew','B','THSarabunNew_b.php');
        $this->SetFont('THSarabunNew','B',18);
        $this->SetY(-12); // ตำแหน่ง 1.5 ซม จากด้านล่าง
        $this->Cell(0,5,iconv("UTF-8","cp874",'ศิริยากร ศิริสมบัติ'),0,0,"L");
        $this->Cell(0,5,iconv("UTF-8","cp874",'วันที่พิมพ์ : '.date('d').'/'.date('m').'/'.(date('Y')+543).' '.date('H:i:s')),0,0,"R");
        }//end Footer()
    }
    //แสดงข้อมูล
    //2.สร้าง oblect 
    $pdf = new FPDF();
    $title = "รายงานสรุปอัตราค่าจอดรถ";
    $pdf->SetTitle($title);
    //3. เพิ่ม font ภาษาไทย
    $pdf->AddFont('THSarabunNew','','THSarabunNew.php');
    $pdf->AddFont('THSarabunNew','B','THSarabunNew.php');  //แอดชื่อแล้วตามด้วยไฟล์ สามารถแอดได้จากเว็บได้เลย

    //4.เรียกใช้ method เพิ่มหน้ากระดาษ
    $pdf->Addpage();

    //5.set ขนาด font ตัวหนาขนาด 20
    $pdf->SetFont('THSarabunNew','B',20);
    $pdf->SetFont('THSarabunNew','',20);//set ขนาด font ตัวตัวธรรมดา ขนาด 20

    //6.พิมพ์ข้อความลงเอกสาร
    $pdf->Cell(10,10,iconv('UFT-8','cp874','รายงานอัตราค่าจอดรถ'),0,1,'C');
    $pdf->Ln(2);
    $pdf->Cell(17,10,iconv('UFT-8','cp874','รหัสอัตราค่าจอดรถ'),0,1,'C');
    $pdf->Cell(20,10,iconv('UFT-8','cp874','จอดแบบ'),0,1,'C');
    $pdf->Cell(30,10,iconv('UFT-8','cp874','ราคาอัตราค่าจอด'),0,1,'C');
    $pdf->Cell(40,10,iconv('UFT-8','cp874','จำนวนอัตราที่จอด'),0,1,'C');
    $pdf->Cell(50,10,iconv('UFT-8','cp874','ค่าบริการ'),0,1,'C');
    $pdf->Ln();

    $pdf->SetFont('THSarabunNew','B',18);
    $pdf->SetFont('THSarabunNew','',18);//set ขนาด font ตัวตัวธรรมดา ขนาด 18
    $view_query = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($view_query)){
        $rateId = $row['rateId'];
        $choose = $row['choose'];
        $rate = $row['rate'];
        $amount = $row['amount'];
        $price = $row['price'];
     
        $pdf->Ln();
        $pdf->Cell(15,10,iconv('UTF-8','cp874',$rateId),1);
        $pdf->Cell(25,10,iconv('UTF-8','cp874',$choose),1);
        $pdf->Cell(20,10,iconv('UTF-8','cp874',$rate),1);
        $pdf->Cell(30,10,iconv('UTF-8','cp874',$amount),1);
        $pdf->Cell(25,10,iconv('UTF-8','cp874',$price),1);
    }
    //รัน
    $pdf->Output();
    ob_end_flush();
}
?> 
</body>
</html>