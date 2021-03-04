<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
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
<form method="post" action="customer.php" enctype="multipart/form-data">
    <br><br>
    <font face="CordiaUPC" size="8">
    <center><b>บันทึกข้อมูลลูกค้า</b></font>
    <br>
    <div class="container">
    <font face="CordiaUPC" size="5">
    <table border ="0" cellspacing ="0" celpadding="0">
        <tr>
            <td align="right">รหัสลูกค้า : </td>
            <td><input type="text" class="form-control" name="customerID" placeholder="รหัสลูกค้า"></td>
        </tr>
            <td align="right">ชื่อ-นามสกุล : </td>
            <td><input type="text" class="form-control" name="customerName" placeholder="ชื่อ-นามสกุล"></td>
        </tr>
        <tr>
            <td align="right">เบอร์โทร : </td>
            <td><input type="number" class="form-control" name="tel" placeholder="เบอร์โทร"></td>
        </tr>
        <tr>
            <td align="right">จังหวัด : </td>
            <td><select class="form-control" id="province" name="province">
                    <option value="---โปรดเลือก---">---โปรดเลือก---</option>
                    <option value="ราชบุรี">ราชบุรี</option>
                    <option value="เชียงใหม่">เชียงใหม่</option>
                    <option value="กาญจนบุรี">กาญจนบุรี</option>
                    <option value="ตาก">ตาก</option>
                    <option value="ชัยภูมิ">ชัยภูมิ</option>
                    <option value="ลำปาง">ลำปาง</option>
                    <option value="น่าน">น่าน</option>
                    <option value="เลย">เลย</option>
                    <option value="ขอนแก่น">ขอนแก่น</option>
                    <option value="นครศรีธรรมราช">นครศรีธรรมราช</option>
                </select>
            </td>
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
    @$customerID =$_POST['customerID'];
    @$customerName = $_POST['customerName'];
    @$tel = $_POST['tel'];
    @$province = $_POST['province'];

  
    //คำสั่ง sql ในการ insert
    $sql = "INSERT INTO customer(customerID,customerName,tel,province)
             VALUES('$customerID','$customerName','$tel','$province')";

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