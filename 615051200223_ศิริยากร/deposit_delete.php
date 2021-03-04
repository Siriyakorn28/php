<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ลบข้อมูลการรับฝากรถ</title>
</head>
<body>
  <form method="post" action="deposit_delete.php" enctype="multipart/form-data">
    <center>
        <br><br>
            <font face="TH Sarabun New" size="6"><b>
            <?php
                require('connect.php');  //เชื่อมต่อฐานข้อมูล
                if(isset($_GET['delete_id'])){  //เมื่อรับค่า delete_id
                    $delete_id = $_GET['delete_id'];  
                    $sql = "DELETE FROM deposit
                            WHERE depositNumber ='".$delete_id."'";
                    $result = mysqli_query($conn,$sql); //run sql
                    echo "ลบข้อมูลออกจากฐานข้อมูลเรียบร้อยแล้ว";
                    mysqli_close($conn);        
                } //endif(isset($_GET['delete_id'])){
            ?>
</b></font>
</center>
  </body>
</html>