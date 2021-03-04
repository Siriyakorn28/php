<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TrestmentEdit</title>
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
    <?php
        if(isset($_POST['save'])){

            $symptom = $_POST['symptom'];
            $medicine = $_POST['medicine'];
            $amount = $_POST['amount'];

            $sql = "UPDATE treatment SET 
                    symptom = '$symptom',
                    medicinelID = '$medicinel',
                    amount = '$amount'
                    WHERE treatmentID='$treatmentID'";
            $rs = $conn->query($sql);   

            if($rs) {
                echo    '<div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>แจ้งเตือน : </strong> แก้ไขการรักษาสัตว์สำเร็จ
                        </div>
                        <meta http-equiv="refresh" content="1; url=search.php">';
            }  else {
                echo    '<div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>แจ้งเตือน : </strong> เกิดข้อผิดพลาด '.mysqli_error($conn).'
                        </div>
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>SQL : </strong>'.$sql.'
                        </div>';
            }
        }
    ?>
<form method="post" action="treatmentEdit.php" enctype="multipart/form-data">
    <br><br>
    <font face="CordiaUPC" size="8">
    <center><b>บันทึกการรักษาสัตว์</b></font>
    <br>
    <div class="container">
    <font face="CordiaUPC" size="5">
    <table border ="0" cellspacing ="0" celpadding="0">
        <tr>
            <td align="right">รหัสการรักษา : </td>
            <td><input type="text" class="form-control" name="treatmentID" value="<?= $rowID['treatmentID'] ?>" disabled></td>
        </tr>
            <td align="right">วันที่รักษา : </td>
            <td><input type="date" class="form-control" name="date" value="<?= date('d-m-Y', strtotime($rowID['date'])) ?>" disabled></td>
        </tr>
        <tr>
            <td align="right">ชื่อเจ้าของ : </td>
            <td><select class="form-control" id="medicineName" name="medicineName"
                value="<?php    $sqlC = "SELECT customerID, customerName FROM customer";
                                $rsC = $conn->query($sqlC);
                                while($rowC = $rsC->fetch_assoc()) {
                                if($rowID['customerID'] == $rowC['customerID']) {
                                    echo $rowC['customerName'];
                                    }
                                }
                        ?>" disabled>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">ชื่อสัตว์ : </td>
            <td><select class="form-control" id="animalName" name="animalName"
                value="<?php    $sqlA = "SELECT animalID, animalName FROM animal";
                                $rsA = $conn->query($sqlA);
                                while($rowA = $rsA->fetch_assoc()) {
                                if($rowID['animalID'] == $rowA['animalID']) {
                                    echo $rowA['animalName'];
                                    }
                                }
                        ?>" disabled>
            </td>
        </tr>
        <tr>
            <td align="right">รายละเอียดอาการ : </td>
            <td>
                <textarea name="symptom" rows="2" cols="30"><?= $rowID['symptom'] ?></textarea>
            </td>
        </tr>
        <tr>
            <td align="right">ชื่อยาใช้รักษา : </td>
            <td><select class="form-control" id="animalName" name="animalName">
                <?php   $sqlM = "SELECT * FROM medicine";
                        $rsM = $conn->query($sqlM);
                        $g = 1;
                        while($rowM = $rsM->fetch_assoc()) {
                        if($rowID['medicinelID'] == $rowM['medicineID']) { $select[$g] = 'selected'; }
                            echo '<option value="'.$rowM['medicineID'].'" '.$select[$g].'>'.$rowM['medicineName'].'</option>';
                            $g++;
                        }
                ?>
                </select>
            </td>
        </tr>
        <tr>
            <td align="right">จำนวน : </td>
            <td><input type="number" class="form-control" name="amount" value="<?= $rowID['amount'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><button  type="submit" class="btn btn-success" name="save">แก้ไข</button></td>
        </tr>
    </div>
    </center>
    </font>
    </form>
</body>
</html>