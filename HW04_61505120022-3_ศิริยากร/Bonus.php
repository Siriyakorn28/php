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
                background-color : #EEE8AA;
            }
    </style>
    <body>
    <center>
        <br><br><br>
    <?php
        $a=9;
        for($b=1; $b<=$a; $b++){
            for($c=$a-$b; $c>0; $c--){
                echo "<font face=CordiaUPC size=5>";
            }

            for($x=1; $x<$b; $x++){
                echo "<font face=CordiaUPC size=5>".$x." ";
            }
  
            for($y=$b; $y>0; $y--){
                echo "<font face=CordiaUPC size=5>".$y." ";
            }
            echo "<br>";
        }
    ?>
    </center>
    </body>
</html>
    
