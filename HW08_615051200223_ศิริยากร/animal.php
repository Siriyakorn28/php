<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animal</title>
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
<form method="post" action="animal.php" enctype="multipart/form-data">
    <br><br>
    <font face="CordiaUPC" size="8">
    <center><b>บันทึกข้อมูลสัตว์</b></font>
    <br>
    <div class="container">
    <font face="CordiaUPC" size="5">
    <table border ="0" cellspacing ="0" celpadding="0">
        <tr>
            <td align="right">รหัสสัตว์ : </td>
            <td><input type="text" class="form-control" name="animalID" placeholder="รหัสสัตว์"></td>
        </tr>
        <tr>
            <td align="right">ชื่อสัตว์ : </td>
            <td><input type="text" class="form-control" name="animalName" placeholder="ชื่อสัตว์"></td>
        </tr>
        <tr>
            <td align="right">เพศ : </td>
            <td><input type="radio" id="sex" name="sex" value="ผู้" > ผู้
                <input type="radio" id="sex" name="sex" value="เมีย"> เมีย</td>
        </tr>
        <tr>
            <td align="right">ภาพสัตว์ : </td>
            <td><input type="file" class="form-control" name="image"></td>
        </tr>
        <tr>
            <td align="right">ชื่อเจ้าของ : </td>
            <td>
                <select class="form-control" id="customerID" name="customerID">
                    <?php 
                        require_once("secustomer.php"); 
                    ?>
                </select></td>
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
    @$animalID = $_POST['animalID']; //นำค่า userId เก็บในตัวแปร id
    @$animalName = $_POST['animalName'];
    @$sex = $_POST['sex'];
    @$customerID=$_POST['customerID'];

if(!empty($_FILES['image']["name"])){
        $old_filename = $_FILES['image']['tmp_name'];
        $new_filename = "IS_".$_FILES['image']['name'];
        copy($_FILES['image']["tmp_name"],"Picture/".$_FILES['image']['name']);
  
    //คำสั่ง sql ในการ insert
    $sql = "INSERT INTO animal(animalID,animalName,sex,image,customerID)
            VALUES('$animalID','$animalName','$sex','$new_filename','$customerID')";

    //echo "คำสั่ง sql = ".$sql."<br>";

    //mysqli_query($conn,$sql) or die('insert error');

   if(mysqli_query($conn,$sql)){
        echo "บันทึกลงฐานข้อมูลเรียบร้อยแล้ว";
    }  else{
        echo "ผิดพลาด :".$sql."<br>".mysqli_error($conn);
    }
} // if isset
mysqli_close($conn); //ปิดการเชื่อมต่อฐานข้อมูล
}
?>