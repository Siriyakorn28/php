<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <style>
        body { 
            background-color : #E0FFFF
        }
        body{
            margin-left: 500px;
        }
    </style>
    <body>
    <form name="myform1" method="post" action="HW03_61505120022-3_Question1.php"></form>
    <br><br>
    <?php
    if(isset($_POST['submit'])){
        $nametitle=$_POST['nametitle'];
        $name=$_POST['username'];
        $career=$_POST['career'];
        $old=$_POST['old'];
        $hobby=$_POST['hobby'];

        echo "คำนำหน้า : ".$nametitle."<br>";
        echo "คุณชื่อ : ".$name."<br>";
        echo "อาชีพ : ".$career."<br>";
        echo "ช่วงอายุ : ".$old."<br>";

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
    </body>
</html>

