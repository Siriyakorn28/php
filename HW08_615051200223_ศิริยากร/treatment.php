<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trestment</title>
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
<form method="post" action="treatment.php" enctype="multipart/form-data">
    <br><br>
    <font face="CordiaUPC" size="8">
    <center><b>บันทึกการรักษาสัตว์</b></font>
    <br>
    <div class="container">
    <font face="CordiaUPC" size="5">
    <table border ="0" cellspacing ="0" celpadding="0">
        <tr>
            <td align="right">รหัสการรักษา : </td>
            <td><input type="text" class="form-control" name="treatmentID" placeholder="รหัสการรักษา"></td>
        </tr>
            <td align="right">วันที่รักษา : </td>
            <td><input type="date" class="form-control" name="date"></td>
        </tr>
        <tr>
            <td align="right">ชื่อเจ้าของ : </td>
            <td><select class="form-control" id="medicineName" name="medicineName">
                <?php 
                    require_once("secustomer.php"); 
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">ชื่อสัตว์ : </td>
            <td><select class="form-control" id="animalName" name="animalName">
                <?php 
                    require_once("seanimal.php"); 
                ?>  
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">รายละเอียดอาการ : </td>
            <td>
                <textarea name="symptom" rows="2" cols="30"></textarea>
            </td>
        </tr>
        <tr>
            <td align="right">ชื่อยาใช้รักษา : </td>
            <td><select class="form-control" id="animalName" name="animalName">
                    <option value="---โปรดเลือก---">---โปรดเลือก---</option>
                    <option>ยาทาแผล</option>
                    <option>ยาแก้อักเสบ</option>
                    <option>ยาหยอดตา</option>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">จำนวน : </td>
            <td><input type="number" class="form-control" name="amount"></td>
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
    @$treatmentID =$_POST['treatmentID'];
    @$date = $_POST['date'];
    @$customerID = $_POST['customerID'];
    @$animalId = $_POST['animalId'];
    @$symptom = $_POST['symptom'];
    @$medicinelId = $_POST['medicinelId'];
    @$amount = $_POST['amount'];


    //คำสั่ง sql ในการ insert
    $sql = "INSERT INTO treatment(treatmentID,date,customerID,animalId,symptom,medicinelId,amount)
             VALUES('$treatmentID','$date','$customerID','$animalId','$symptom','$medicinelId','amount')";

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