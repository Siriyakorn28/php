<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drug</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    button {width: 50%;}
    body { 
        background: url(Picture/พื้นหลัง.jpg)
        no-repeat center center fixed;
        background-size:cover ;
        }
</style>
<body>
<form method="post" action="medicine.php" enctype="multipart/form-data">
    <br><br>
    <font face="CordiaUPC" size="8">
    <center><b>บันทึกยารักษา</b></font>
    <br>
    <div class="container">
    <font face="CordiaUPC" size="5">
    <table border ="0" cellspacing ="0" celpadding="0">
        <tr>
            <td align="right">รหัสยา : </td>
            <td><input type="text" class="form-control" name="medicineID" placeholder="รหัสยา"></td>
        </tr>
            <td align="right">ชื่อยา : </td>
            <td><input type="text" class="form-control" name="medicineName" placeholder="ชื่อยา"></td>
        </tr>
        <tr>
            <td align="right">ประเภทยา :</td>
            <td><input type="radio" id="medicinetype" name="medicinetype" value="ยากิน" > ยากิน
                <input type="radio" id="medicinetype" name="medicinetype" value="ยาใช้ภายนอก"> ยาใช้ภายนอก</td>
        </tr>
        <tr>
            <td align="right">หน่วย : </td>
            <td><input type="text" class="form-control" name="unit" placeholder="หน่วย"></td>
        </tr>
        <tr>
            <td></td>
            <td><button  type="submit" class="btn btn-success" name="save">บันทึก</button></td>
        </tr>
    </div>
    </center>
    </font>
    </form>
</body>
</html>

<?php
    require_once'connect.php'; //ต้องใส่คำสั่งนี้ก่อนเสมอ ถ้าจะเชื่อมกับ DB
    //เรียกไฟล์ connect.php เข้ามาใช้งาน 
    //โดยไม่ต้องเขียนคำสั่งเชื่อมต่อฐานข้อมูลในนี้อีก
    
if(isset($_POST['save'])){
    @$medicineID =$_POST['medicineID'];
    @$medicineName = $_POST['medicineName'];
    @$medicinetype = $_POST['medicinetype'];
    @$unit = $_POST['unit'];

    //คำสั่ง sql ในการ insert
    $sql = "INSERT INTO medicine(medicineID,medicineName,medicinetype,unit)
             VALUES('$medicineID','$medicineName','$medicinetype','$unit')";

    //echo "คำสั่ง sql = ".$sql."<br>";

    //mysqli_query($conn,$sql) or die('insert error');

   if(mysqli_query($conn,$sql)){
        echo "บันทึกลงฐานข้อมูลเรียบร้อยแล้ว";
    }  else{
        echo "ผิดพลาด :".$sql."<br>".mysqli_error($conn);
    }
} // if isset
    mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
?>