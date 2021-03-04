<!DOCTYPE html>
<html lang="en">
    <head>
        <title>61505120022-3 ศิริยากร</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <style>
        button[type=submit] {
          width: 8%;
          background-color:LimeGreen;
          color: white;
          padding: 5px 20px;
          margin: 10px 0;
          border: none;
          border-radius: 4px;
          cursor: pointer;
        }
        button[type=submit]:hover {
          background-color:rgb(127, 230, 127);
        }
        input[type=text] {
            width: 10%;
            padding: 10px 20px;
            margin: 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        body{
            margin-left : 450px;
        }
        body {    
            background-color : #EEE8AA;
        }
    </style>
    <body>
    <form method="post" action="Loop2.php">
    <font face = "CordiaUPC" size = "5">
    <h1><b> Loop </b></h1>
    <div class="form-control">
        <label for="name">หมายเลขเริ่มต้น :  
            <input type="text" class="form-control" id="namber" name="number">
        </label>
        <button type="submit" class="btn btn-submit" name="submit"><font face = "CordiaUPC" size = "5">ตกลง</font></button>
    </div>
    <?php
    if(isset($_POST['submit'])){
        $i=$_POST['number'];
        $j=0;
    do{
        $j++;
        for($n=1; $n<=$j; $n++){
            echo "<font face=CordiaUPC size=5>".$i." ";
            $i++;
        }
        echo "<br>";
        }while ($j<=3);
    }
    ?>
    </font>
    </body>
</html>