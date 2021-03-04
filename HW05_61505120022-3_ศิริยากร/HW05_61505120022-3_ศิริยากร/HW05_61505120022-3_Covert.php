<!DOCTYPE html>
<html lang="en">
    <head>
        <title>การแปลงหน่วย</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <style >
            body{
                background-color : ;
            }
            body{
                margin-left : 450px;
            }
    </style>
    <script>
        var cen  = "";
        var Text = "";
        var inch = "";
        var feet = "";
        $(document).ready(function() {
        $('#op').on('change', function(){   
            Text = $('#unit').val();
            if($('#op').val() == "1"){
            cen = Text/0.39370;
            inch = Text;
            feet = Text*0.083333;
        }else if($('#op').val() == "2"){
            cen = Text/0.32808;
            inch = Text*12
            feet = Text;
        }else if($('#op').val() == "3"){
            cen = Text;
            inch = Text*0.39370;
            feet = Text*0.32808;
        }
            document.getElementById("label_1").innerHTML = cen;
            document.getElementById("label_2").innerHTML = inch;
            document.getElementById("label_3").innerHTML = feet;
        });
    });
    </script>
    <body>
    <form action=" " method='POST'>
    <div><br><br><br>
        <font color="red"><h2><b>การแปลงหน่วย</b></h2></font><br> 
        <input type = "number" name = "text" id = "unit"/>
        <select id = "op" name = "op" >
            <option value = "null" >กรุณาเลือก</option>
            <option value = "3" >เซนติเมตร</option>
            <option value = "1" >นิ้ว</option>
            <option value = "2" >ฟุต</option>
        </select>
    <font color="purple"><h3><br><b>ผลลัพธ์</b> </h3></font> 
    <p>หน่วยเซนติเมตร.....<label id = "label_1" value = ""></label>....ซม</p>
    <p>หน่วยนิ้ว.....<label id = "label_2" value = ""></label>....นิ้ว</p>
    <p>หน่ายฟุต.....<label id = "label_3" value = ""></label>....ฟุต</p>
    </div>
    <div class="col-md-2">
    </div>
    <br> <br>
    <h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ผู้จัดทำ : 61505120022-3 ศิริยากร ศิริสมบัติ</h6>
    </body>
</html>