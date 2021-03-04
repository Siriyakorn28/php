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
<form method="post" action="search.php" enctype="multipart/form-data">
    <br><br>
    <font face="CordiaUPC" size="8">
    <center>
    <br>
    <div class="container">
    <font face="CordiaUPC" size="5">
    <table border ="0" cellspacing ="0" celpadding="0">
        <tr>
            <td></td>
            <td><input type="radio" id="radio1" name="sex" value="" > ลูกค้า
                <input type="radio" id="radio2" name="sex" value=""> สัตว์</td>
        </tr>
        <tr>
            <td></td>
            <td><select class="form-control" id="customerName" name="customerName">
                    <option value="">ทั้งหมด</option>
                    <option value="">ราชบุรี</option>
                    <option value="">เชียงใหม่</option>
                    <option value="">กาญจนบุรี</option>
                    <option value="">ตาก</option>
                </select>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><button  type="submit" class="btn btn-success" name="save">ค้นหา</button></td>
        </tr>
    </div>
    </center>
    </font>
    </form>
</body>
</html>

