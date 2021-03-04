<!DOCTYPE html>
<html lang="en">
    <head>
        <title>แบบสอบถาม 3</title>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="css/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    </head>
    <style>
        body{
            background: url("pic05.jpg") no-repeat fixed center;
            background-size:cover ;
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
        button[type=submit]:hover {
          background-color:rgb(127, 230, 127);
        }
        input[type=text] {
            width: 8%;
            padding: 5px 20px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        select{
            width: 15%;
            padding: 5px 20px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea{
            width: 50%;
            padding: 50px 20px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        div[class="container"]{
            margin-left : 450px
        }
        table{
            margin-left : 10px
        }
        button[type="submit"]{
            margin-left : 200px
        }
        table{
            border-collapse: collapse;
        }
    </style>
    <body>
    <form name="form1" method="post" action="HW03_61505120022-3_Question3.php" >
    <font face = "CordiaUPC" size = "5">
    <center>
    <b><h1>แบบสอบถาม</h1>
        <pre><h2>ความคิดเห็นเกี่ยวกับโรงอาหารอาคารเฉลิมพระเกียรติ 80 พรรษา
        มหาวิทยาลัยเทคโนโลยีราชมงคลกรุงเทพ</h2></pre></b>
    </center>
    <div class="container">
        <p><b><u>คำชี้แจง</u></b> โปรดทำเครื่องหมาย <i class="fa fa-check"></i> ลงใน <i class='far fa-circle'></i> </p>
        <p>หรือเติมข้อความลงไปในช่องว่างตรงตามความเป็นจริง</p>
        <p><b><u>ส่วนที่ 1 </u></b> ข้อมูลส่วนบุคคลทั่วไป </p>

    <div class="form-check-inline">
        <b>1. เพศ : </b>
        <label class="form-check-label">
            <input type="radio" class="form-check-input" id="rado1" name="sex" value="ชาย" >ชาย
        </label>
          
        <label class="form-check-label">
            <input type="radio" class="form-check-input" id="rado2" name="sex" value="หญิง">หญิง
        </label>
    </div>

    <div class="form-check-inline">
        <b>2. ชั้นปี : </b>
        <label class="form-check-label">
            <input type="radio" class="form-check-input" id="rado3" name="class" value="1" >1
        </label>
          
        <label class="form-check-label">
            <input type="radio" class="form-check-input" id="rado4" name="class" value="2">2
        </label>

        <label class="form-check-label">
            <input type="radio" class="form-check-input" id="rado5" name="class" value="3">3
        </label>

        <label class="form-check-label">
            <input type="radio" class="form-check-input" id="rado6" name="class" value="4">4
        </label>
    </div>

    <div class="form-control">
        <label><b>3. อายุ : </b>
            <input type="text" class="form-control" id="text" name="old" size="1"><b> ปี </b>
        </label>
    </div>

    <div class="form-group">
        <label for="sel2"><b>4. คณะ : </b>
            <select  class="form-control" id="select" name="faculty">
                <option value="เลือกคณะองคุณ">เลือกคณะของคุณ</option>
                <option value="คณะศิลปศาสตร์">คณะศิลปศาสตร์</option>
                <option value="คณะวิทยาศาสตร์และเทคโนโลยี">คณะวิทยาศาสตร์และเทคโนโลยี</option>
                <option value="คณะครุศาสตร์อุตสาหกรรม">คณะครุศาสตร์อุตสาหกรรม</option>
                <option value="คณะวิศวกรรมศาสตร์">คณะวิศวกรรมศาสตร์</option>
                <option value="คณะบริหารธุรกิจ">คณะบริหารธุรกิจ</option>
                <option value="คณะเทคโนโลยีคหกรรมศาสตร์">คณะเทคโนโลยีคหกรรมศาสตร์</option>
                <option value="คณะอุตสาหกรรมสิ่งทอ">คณะอุตสาหกรรมสิ่งทอ</option>
                <option value="วิทยาลัยนานาชาติ">วิทยาลัยนานาชาติ</option>
            </select>
        </label>
    </div>

        <p><b><u>ส่วนที่ 2 </u></b> ความคิดเห็นเกี่ยวกับโรงอาหารอาคารเฉลิมพระเกียรติ 80 พรรษา </p>
        <p><b><u>คำชี้แจง </u></b> โปรดทำเครื่องหมาย <i class="fa fa-check"></i> ตามความคิดเห็นของนักศึกษา </p>

    <p><dd>ดี = 3 &nbsp;&nbsp; ปานกลาง = 2 &nbsp;&nbsp; ปรับปรุง = 1</dd></p>

    <table border="1">
        <tr>
            <th align = "center"> ความคิดเห็นเกี่ยวกับโรงอาหารตึกเพชรของมหาวิทยาลัยกรุงเทพ</th>
            <th align = "center"> 3 </th>
            <th align = "center"> 2 </th>
            <th align = "center"> 1 </th>
        </tr>
        <tr>
            <td align = "left"><b> 1. รสชาติของอาหาร </b></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="taste" value="3" >
                </label>
            </div></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="taste" value="2" >
                </label>
            </div></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="taste" value="1" >
                </label>
            </div></td>
        </tr>

        <tr>
            <td align = "left"><b> 2. ความเหมาะสมของราคา </b></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="price" value="3" >
                </label>
            </div></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="price" value="2" >
                </label>
            </div></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="price" value="1" >
                </label>
            </div></td>
        </tr>

        <tr>
            <td align = "left"><b> 3. ความสะอาดของอาหาร </b></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="clean" value="3" >
                </label>
            </div></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="clean" value="2" >
                </label>
            </div></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="clean" value="1" >
                </label>
            </div></td>
        </tr>

        <tr>
            <td align = "left"><b> 4. ความสะอาดของโต๊ะอาหารและภาชนะ </b></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="table" value="3" >
                </label>
            </div></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="table" value="1" >
                </label>
            </div></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="table" value="1" >
                </label>
            </div></td>
        </tr>

        <tr>
            <td align = "left"><b> 5. การบริการของพนักงาน </b></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="service" value="3" >
                </label>
            </div></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="service" value="2" >
                </label>
            </div></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="service" value="1" >
                </label>
            </div></td>
        </tr>

        <tr>
            <td align = "left"><b> 6. ความพึงพอใจของนักศึกษา </b></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="enjoy" value="3" >
                </label>
            </div></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="enjoy" value="2" >
                </label>
            </div></td>
            <td align = "center"><div class="form-check-inline">
                <label class="form-check-label" >
                    <input type="radio" class="form-check-input" id="" name="enjoy" value="1" >
                </label>
            </div></td>
        </tr>
    </table>

    <br><br>

        <b>ข้อเสนอแนะอื่นๆ : </b>
        <div class="form-group">
            <textarea class="form-control" id="" name="comment"></textarea>
        </div>

        <br><br>
        
        <button type="submit" class="btn btn-submit" name="submit"> OK </button>
        
    </div>
    </font>
    <br><br>
    <hr>
    <br><br>
    
    <div  class="container">
    <table border="1" >
        <tr>
        <?php
                if(isset($_POST['submit'])){
                    $sex = $_POST['sex'];
                    $class = $_POST['class'];
                    $old = $_POST['old'];
                    $faculty = $_POST['faculty'];

                    echo "ข้อมูลการตอบแบบสอบถาม";
                    echo "<br>";
                    echo "เพศ : ".$sex."<br>";
                    echo "ชั้นปี : ".$class."<br>";
                    echo "อายุ : ".$old."<br>";
                    echo "คณะ : ".$faculty."<br>";
                }

            ?>
        </tr>
        <tr>
            <th align="center"> ข้อ </th>
            <th align="center"> คำถาม </th>
            <th align="center"> ระดับความพอใจ </th>
        </tr>
        
        <tr>
            <td align="center"> 1 </td>
            <td align="center"> รสชาติของอาหาร </td>
            <td align="center">
                <?php
                    if(isset($_POST['submit'])){
                        $taste = $_POST['taste'];

                        echo "<center>".$taste."";  
                    }
                ?>
            </td>
        </tr>

        <tr>
            <td align="center"> 2 </td>
            <td align="center"> ความเหมาะสมของราคา </td>
            <td align="center">
                <?php
                    if(isset($_POST['submit'])){
                        $price = $_POST['price'];

                        echo "<center>".$price."";  
                    }
                ?> 
            </td>
        </tr>

        <tr>
            <td align="center"> 3 </td>
            <td align="center"> ความสะอาดของอาหาร </td>
            <td align="center">
                <?php
                    if(isset($_POST['submit'])){
                        $clean = $_POST['clean'];

                        echo "<center>".$clean."";  
                    }
                ?> 
            </td>
        </tr>

        <tr>
            <td align="center"> 4 </td>
            <td align="center"> ความสะอาดของโต๊ะอาหารและภาชนะ </td>
            <td align="center">
                <?php
                    if(isset($_POST['submit'])){
                        $table = $_POST['table'];

                        echo "<center>".$table."";  
                    }
                ?> 
            </td>
        </tr>

        <tr>
            <td align="center"> 5 </td>
            <td align="center"> การบริการของพนักงาน </td>
            <td align="center">
                <?php
                    if(isset($_POST['submit'])){
                        $service = $_POST['service'];

                        echo "<center>".$service."";  
                    }
                ?> 
            </td>
        </tr>

        <tr>
            <td align="center"> 6 </td>
            <td align="center"> ความพึงพอใจของนักศึกษา </td>
            <td align="center">
                <?php
                    if(isset($_POST['submit'])){
                        $enjoy = $_POST['enjoy'];

                        echo "<center>".$enjoy."";  
                    }
                ?> 
            </td>
        </tr>
    </table>

    <?php
        if(isset($_POST['submit'])){
            $comment = $_POST['comment'];
            

            echo "ข้อเสนอแนะ : ".$comment."<br>";
            echo "ผู้จัดทำ : ศิริยากร ศิริสมบัติ"; 
        }
    ?>
    </div>
    </body>
</html>