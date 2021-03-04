<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <style>
        body{
            background: url("pic03.jpg") no-repeat fixed center; 
            background-size:cover ;
        }
        h2{
            margin-left : 400px
        }
        input[type=text],select {
            width: 15%;
            padding: 5px 20px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        div{
            margin-left: 200px;
        }
        input[type="radio"]{
            margin-left: 40px;
        }
        input[type="text"]{
            margin-left: 20px;
        }
        select[name="career"]{
            margin-left: 20px;
        }
        select[name="age"]{
            margin-left: 10px;
        }
        input[value="ไปเที่ยวต่างจังหวัด"]{
            margin-left: 250px;
        }
        input[value="ดูหนัง"]{
            margin-left: 222px;
        }
        button[type=submit] {
          width: 8%;
          background-color:LimeGreen;
          color: white;
          padding: 5px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }

        button[type=reset] {
          width: 8%;
          background-color:DimGray;
          color: white;
          padding: 5px 20px;
          margin: 8px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }

        button[type=submit]:hover {
          background-color:rgb(127, 230, 127);
        }

        button[type=reset]:hover {
          background-color: rgb(199, 187, 187);
        }
        button[type="submit"]{
            margin-left : 200px
        }
    </style>
    <body>
    <form name="myform1" method="post" action="HW03_61505120022-3_Question2.php">
    <font face = "CordiaUPC" size = "5">
        <h2>แบบสอบถาม</h2>
    </font>
        <div class="container">
        <font face = "CordiaUPC" size = "5">
            <div class="form-check-inline"> 
                <label class="form-check-label" >คำนำหน้า : 
                    <input type="radio" class="form-check-input" id="rado1" name="nametitle" value="นาย" >นาย
                </label>
          
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="rado2" name="nametitle" value="นาง">นาง
                </label>
        
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" id="rado3" name="nametitle" value="นางสาว">นางสาว
                </label>
            </div>

            <div class="form-control">
                <label for="name">ชื่อ-นามสกุล : 
                    <input type="text" class="form-control" id="txtNam" name="username">
                </label>
            </div>

            <div class="form-group">
                <label for="sel2">อาชีพ :
                    <select multiple class="form-control" id="ListB" name="career">
                        <option value="เลือกอาชีพ">เลือกอาชีพ</option>
                        <option value="ธุรกิจส่วนตัว">ธุรกิจส่วนตัว</option>
                        <option value="นักเรียน/นักศึกษา">นักเรียน/นักศึกษา</option>
                        <option value="ข้าราชการ">ข้าราชการ</option>
                        <option value="รับจ้าง">รับจ้าง</option>
                        <option value="อื่นๆ">อื่นๆ</option>
                    </select>
                </label>
            </div>

            <div class="form-group">
                <label for="old">ช่วงอายุ: </label>
                <select class="form-control" id="DropDaw" name="age">
                    <option value="เลือกอายุ">เลือกอายุ</option>
                    <option value="15-20 ปี">15-20 ปี</option>
                    <option value="21-30 ปี">21-30 ปี</option>
                    <option value="31-40 ปี">31-40 ปี</option>
                    <option value="41-50 ปี">41-50 ปี</option>
                    <option value="51 ปีขึ้นไป">51 ปีขึ้นไป</option>
                </select>
            </div>

            <div class="form-check-inline">
                <label class="form-check-label" for="check1">งานอดิเรกที่ทำในวันหยุด
                <div></div>
                    <input type="checkbox" class="form-check-input" id="check1" name="hobby[]" value="ช้อปปิ้ง" >ช้อปปิ้ง
                </label>
            
                <label class="form-check-label" for="check2">
                    <input type="checkbox" class="form-check-input" id="check2" name="hobby[]" value="ไปเที่ยวต่างจังหวัด">ไปเที่ยวต่างจังหวัด
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label" for="check1">
                    <input type="checkbox" class="form-check-input" id="check1" name="hobby[]" value="อ่านหนังสือ" >อ่านหนังสือ
                </label>
            
                <label class="form-check-label" for="check1">
                    <input type="checkbox" class="form-check-input" id="check1" name="hobby[]" value="ดูหนัง" >ดูหนัง
                </label>
            </div>

            <button type="submit" class="btn btn-submit" name="submit"><font face = "CordiaUPC" size = "5">แสดง</font></button>
            <button type="reset" class="btn btn-default" name="reset"><font face = "CordiaUPC" size = "5">เคลียร์ค่า</font></button>
    </form>

    <br>
    <hr>
    <br>

    <?php
        if(isset($_POST['submit'])){
            $nametitle = $_POST['nametitle'];
            $name = $_POST['username'];
            $career = $_POST['career'];
            $old = $_POST['age'];
            $hobby = $_POST['hobby'];

            echo "คำนำหน้า : ".$nametitle."<br>";
            echo "ชื่อ : ".$name."<br>";
            echo "อาชีพ : ".$career."<br>";
            echo "อายุ : ".$old."<br>"; 

        if(!empty($_POST['hobby'])){
            foreach($hobby as $selected){ 
            }
            $j = count($hobby);
                echo "งานอดิเรกที่ชอบทำ : ";
            for($i=0; $i<$j; $i++){
            if(($j-$i) == 1){
                echo($hobby[$i]); 
            }
            else{
                echo($hobby[$i].","); 
            }
            } 
        }
    }
    ?>
    </font>
    </div>
    </body>
</html>

