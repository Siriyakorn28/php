<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>member</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body { 
        background: url(Picture/พื้นหลัง.jpg)
        no-repeat center center fixed;
        background-size:cover ;
        }
</style>
<body>
<form method="post" action="hw06_member.php" enctype="multipart/form-data">
    <br><br>
    <font face="CordiaUPC" size="8">
    <center><b>สมัครสมาชิก</b></font>
    <br>
    <div class="container">
    <font face="CordiaUPC" size="5">
    <table border ="0" cellspacing ="0" celpadding="0">
        <tr>
            <td align="right">Username : </td>
            <td><input type="text" class="form-control" name="username" placeholder="username"></td>
        </tr>
            <td align="right">Password : </td>
            <td><input type="password" class="form-control" name="password" placeholder="password"></td>
        </tr>
        <tr>
            <td align="right">ชื่อ-สกุล : </td>
            <td><input type="text" class="form-control" name="name" placeholder="ชื่อ-สกุล"></td>
        </tr>
        <tr>
            <td align="right">อีเมล์ : </td>
            <td><input type="text" class="form-control" name="email" placeholder="อีเมล์"></td>
        </tr> 
        <tr>
            <td align="right">เบอร์โทร : </td>
            <td><input type="text" class="form-control" name="tel" placeholder="เบอร์โทร"></td>
        </tr>
        <tr>
            <td align="right">ที่อยู่ : </td>
            <td><textarea class="form-control" name="address" rows="3" cols="50"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><button  type="submit" class="btn btn-primary" name="save">สมัครสมาชิก</button></td>
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
    @$uname =$_POST['username']; //นำค่า userId เก็บในตัวแปร id
    @$pass = $_POST['password'];
    @$name = $_POST['name'];
    @$email = $_POST['email'];
    @$tel = $_POST['tel'];
    @$add = $_POST['address'];
    @$id = $_POST['memId'];
    
    
    $sql2 = "SELECT MAX(memId) AS memId FROM member";
    $query = mysqli_query($conn,$sql2);
          // $row = mysqli_num_rows($query);
        $rs = mysqli_fetch_array($query);
          // echo $row;
        if($rs['memId'] !=""){
              $sub = substr($rs['memId'],1)+1;
              $id = sprintf('M%03.0f', $sub);
              // $memId = "M".$sub;
          }else{
              $id = "M001";
          }
          echo $id;

    


    //คำสั่ง sql ในการ insert
    $sql = "INSERT INTO member(memId,username,password,name,email,tel,address)
             VALUES('$id','$uname','$pass','$name','$email','$tel','$add')";

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