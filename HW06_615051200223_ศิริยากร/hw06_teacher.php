<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>teacher</title>
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
    <form name="myform1" method="post" action="hw06_teacher.php">
    <br><br>
    <font face="CordiaUPC" size="8">
    <center><b>ข้อมูลผู้สอน</b></font>
    <br>
    <div class="container">
    <font face="CordiaUPC" size="5">
    <table border ="0" cellspacing ="0" celpadding="0">
        <tr>
            <td align="right">รหัสผู้สอน : </td>
            <td><input type="text" class="form-control" name="teacherId" placeholder="teacherId" size="50"></td>
        </tr>
            <td align="right">ชื่อผู้สอน : </td>
            <td><input type="text" class="form-control" name="teacherName" placeholder="teacherName"></td>
        </tr>
        <tr>
            <td align="right">นามสกุลผู้สอน : </td>
            <td><input type="text" class="form-control" name="teacherSurname" placeholder="teacherSurname"></td>
        </tr>
        <tr>
            <td align="right">ภาพ : </td>
            <td><input type="file" class="form-control-file border" name="fileUpload"></td>
        </tr> 
        <tr>
            <td></td>
            <td><input type="submit" class="btn btn-primary" name="submit" value="บันทึก">
            <input type="reset" class="btn btn-danger" value="ยกเลิก"></td>
        </tr>
    </div>
    </center>
    </font>
    </form>
</body>
</html>

<?php
require_once('connect.php');
if(isset($_POST['submit'])){
 @$teacherId =$_POST['teacherId']; //นำค่า userId เก็บในตัวแปร id
 @$teacherName = $_POST['teacherName'];
 @$teacherSurname = $_POST['teacherSurname'];
 @$image = $_POST['fileUpload'];

 ////

 if(!empty($_FILES['fileUpload']["name"])){
     $old_filename = $_FILES['fileUpload']['tmp_name'];
     $new_filename = "18_".$_FILES['fileUpload']['name'];
     //ตั้งชื่อใหม่
     //copy file ภาพไปเก็บไว้ในโฟเดอร์ upload
     copy($_FILES['fileUpload']["tmp_name"],"Picture/".$_FILES['fileUpload']['name']);
 }
 $sql = "INSERT INTO teacher(teacherId,teacherName,teacherSurname,image)
          VALUES('$teacherId','$teacherName','$teacherSurname','$image')";
          if(mysqli_query($conn,$sql)){
            echo "<br>บันทึกลงฐานข้อมูลเรียบร้อยแล้ว";
        }  else{
            echo "ผิดพลาด :".$sql."<br>".mysqli_error($conn);
        }
       echo" <table border=1 width=400>
            <tr>
            <th width=100>รหัสผู้สอน</th>
            <th width=150>ชื่อผู้สอน</th>
            <th width=100>path</th>
            </tr>
            </table>";
    $sql2="SELECT * FROM teacher";
    $result = mysqli_query($conn,$sql2);
        while($array = mysqli_fetch_assoc($result)){ // แสดงผล
            echo "<table align=center  width=400 border=1>
            <tr>";
                echo "<th  width=100>".$array['teacherId']." "."</th>";
                echo "<th  width=150>".$array['teacherName']." "." 
                ".$array['teacherSurname']." "." 
                </th>";
                echo "<th  width=100>".$array['image']." "."</th>";
            echo "</tr>
            </center>
            </table>";
        }
 echo "ภาพ : <img src=img/".$image." height=100 width=100><br><br>";
 
}
 
 ?>