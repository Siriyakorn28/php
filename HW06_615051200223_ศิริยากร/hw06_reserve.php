<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>reserve</title>
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

    <form name="myform1" method="post" action="hw06_reserve.php">
    <br><br>
    <font face="CordiaUPC" size="8">
    <center><b>ข้อมูลจอง</b></font>
    <br>
    <div class="container">
    <font face="CordiaUPC" size="5">
    <table border ="0" cellspacing ="0" celpadding="0">
        <tr>
            <td align="right">วันที่จอง : </td>
            <td><input type="date" class="form-control" name="revDate" size="50"></td>
        </tr>
            <td align="right">รหัสจอง : </td>
            <td><input type="text" class="form-control" name="revId" placeholder="reserveId"></td>
        </tr>
        <tr>
            <td align="right">ชื่อคอร์ส : </td>
            <td><select class="form-control" id="courseName" name="courseId">
                <option value="---โปรดเลือก---">---โปรดเลือก---</option>
                <?php 
                                require_once'connect.php';
                                $sql = "SELECT a.*,b.* FROM course a,teacher b ORDER BY a.courseId = b.teacherId ASC";
                                $query = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($query)){ 
                            ?>
                            <option value="<?php echo $row['courseId']?>"><?php echo $row['courseName']?> (
                            <?php echo $row['startDate']?> - <?php echo $row['stopDate']?>) 
                            <?php echo  $row['teacherName']?> <?php echo  $row['teacherSurname']?>
                            </option>
                            <?php }?>
                        </select> </td>
        </tr>
        <tr>
            <td align="right">ชื่อผู้จอง : </td>
            <td><select class="form-control" id="reserveName" name="memId">
                <option value="---โปรดเลือก---">---โปรดเลือก---</option>
                <?php 
                                require_once'connect.php';
                                $sql = "SELECT * FROM member ORDER BY memId ASC";
                                $query = mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($query)){ 
                            ?>
                            <option value="<?php echo $row['memId']?>"><?php echo $row['name']?></option>
                            <?php }?><br><br>
                            </select></td>
        </tr>
        <tr>
            <td align="right">เบอร์โทร : </td>
            <td><input type="text" class="form-control" name="tel" placeholder="tel"></td>
        </tr> 
        <tr>
            <td></td>
            <td><button  type="submit" class="btn btn-danger" name="save">บันทึก</button>&emsp;    <button class="button button3">ยกเลิก</button>
        </tr>
    </div>
    </center>
    </font>
    </form>
    <?php
    require_once'connect.php'; //ต้องใส่คำสั่งนี้ก่อนเสมอ ถ้าจะเชื่อมกับ DB
    //เรียกไฟล์ connect.php เข้ามาใช้งาน 
    //โดยไม่ต้องเขียนคำสั่งเชื่อมต่อฐานข้อมูลในนี้อีก

if(isset($_POST['save'])){
    @$id =$_POST['revId']; //นำค่า userId เก็บในตัวแปร id
    @$mid = $_POST['memId'];
    @$date = $_POST['revDate'];
    @$cid = $_POST['courseId'];
    @$tel = $_POST['tel'];
  
    $sql = "INSERT INTO reserve(revId,revDate,courseId,memId,tel)
             VALUES('$id','$date','$cid','$mid','$tel')";

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

