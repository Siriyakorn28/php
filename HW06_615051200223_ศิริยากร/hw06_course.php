<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>course</title>
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
<form method="post" action="hw06_course.php" enctype="multipart/form-data">
    <br><br>
    <font face="CordiaUPC" size="8">
    <center><b>ข้อมูลคอร์ส</b></font>
    <br>
    <div class="container">
    <font face="CordiaUPC" size="5">
    <table border ="0" cellspacing ="0" celpadding="0">
        <tr>
            <td align="right">รหัสคอร์ส : </td>
            <td><input type="text" class="form-control" name="courseId" placeholder="courseId" size="50"></td>
        </tr>
            <td align="right">ชื่อคอร์ส : </td>
            <td><input type="text" class="form-control" name="courseName" placeholder="courseName"></td>
        </tr>
        <tr>
            <td align="right">ราคา : </td>
            <td><input type="number" class="form-control" name="price" placeholder="price"></td>
        </tr>
        <tr>
            <td align="right">วันเริ่มต้น : </td>
            <td><input type="date" class="form-control" name="startDate"></td>
        </tr> 
        <tr>
            <td align="right">วันสิ้นสุด : </td>
            <td><input type="date" class="form-control" name="stopDate"></td>
        </tr>
        <tr>
            <td align="right">ผู้สอน : </td>
            <td><select class="form-control" id="teacher" name="teacherId">
                <option value="---โปรดเลือก---">---โปรดเลือก---</option>
                <?php 
                    require_once'connect.php';
                    $sql = "SELECT * FROM teacher ORDER BY teacherId ASC";
                    $query = mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($query)){ 
                ?>
                <option value="<?php echo $row['teacherId']?>">
                <?php 
                    echo $row['teacherName']
                ?> 
                <?php 
                    echo $row['teacherSurname']
                ?>
                </option>
                <?php 
                    }
                ?>
            </select></td>
        </tr>
        <tr>
            <td></td>
            <center> <td><button class="button2"name="save">บันทึก    </button><button class="button button3">ยกเลิก</button>
                            </center></td>
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
    @$id =$_POST['courseId']; //นำค่า userId เก็บในตัวแปร id
    @$cname = $_POST['courseName'];
    @$price = $_POST['price'];
    @$startDate = $_POST['startDate'];
    @$stopDate = $_POST['stopDate'];
    @$tid = $_POST['teacherId'];

    $sql = "INSERT INTO course(courseId,courseName,price,startDate,stopDate,teacherId)
             VALUES('$id','$cname','$price','$startDate','$stopDate','$tid')";

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