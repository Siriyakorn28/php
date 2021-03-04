<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>วันรับประกัน</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <style>
        body{
            background-color : #E0FFFF;
        }
        button[type=submit] {
          width: 40%;
          color: white;
          padding: 10px 20px;
          margin: 5px 0;
          border: none;
          border-radius: 5px;
          cursor: pointer;
        }
        button[type=reset] {
          width: 50%;
          color: white;
          padding: 10px 20px;
          margin: 5px 0;
          border: none;
          border-radius: 5px;
          cursor: pointer;
        }
        button[type=submit]:hover {
          background-color:rgb(127, 230, 127);
        }
        button[type=reset]:hover {
          background-color: rgb(199, 187, 187);
        }
        div[class="col-md-6"]{
            margin-left : 650px;
        }
        
        </style>
    <script>
        $(document).ready(function() {
             $('#brand').on('change', function(){ 
            if($('#brand').val() == "iPhone"){ 
                $('#exp').val('1 ปี'); 
                now = new Date(); 
 var thday = new Array ("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัส","ศุกร์","เสาร์"); 
    var thmonth = new Array ("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน", "กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
    var date_test = "วัน" + thday[now.getDay()]+ "ที่ "+ now.getDate()+ " " + 
    thmonth[now.getMonth()]+ " " + (now.getFullYear()+543+1);
    $('#end').val(date_test); 
            }else if($('#brand').val() == "Samsung"){
                $('#exp').val('2 ปี');
                now = new Date(); 
    var thday = new Array ("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัส","ศุกร์","เสาร์"); 
    var thmonth = new Array ("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน", "กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
    var date_test = "วัน" + thday[now.getDay()]+ "ที่ "+ now.getDate()+ " " + 
    thmonth[now.getMonth()]+ " " + (now.getFullYear()+543+2);
    $('#end').val(date_test);
            }else if($('#brand').val() == "LG"){
                $('#exp').val('6 เดือน');
                now = new Date();
                var Month = now.getMonth();
                var Year = now.getFullYear()+543; 
                Month = Month+6; 
                if(Month > 12){ 
                    Year = Year+1;
                    Month = Month - 12;
                }
    var thday = new Array ("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัส","ศุกร์","เสาร์"); 
    var thmonth = new Array ("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน", "กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
    var date_test = "วัน" + thday[now.getDay()]+ "ที่ "+ now.getDate()+ " " + 
    thmonth[Month]+ " " + (Year);
    $('#end').val(date_test);
            }else if($('#brand').val() == "Lenovo"){
                $('#exp').val('3 เดือน');
                now = new Date();
                var Month = now.getMonth();
                var Year = now.getFullYear()+543;
                Month = Month+3; 
                console.log(Month);
                if(Month > 12){
                    Year = Year+1;
                    Month = Month - 12;
                }
    var thday = new Array ("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัส","ศุกร์","เสาร์"); 
    var thmonth = new Array ("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน", "กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
    var date_test = "วัน" + thday[now.getDay()]+ "ที่ "+ now.getDate()+ " " + 
    thmonth[Month]+ " " + (Year);
    $('#end').val(date_test);
            }else if($('#brand').val() == "Acer"){
                $('#exp').val('2 ปี');
                now = new Date();
                var Month = now.getMonth();
                var Year = now.getFullYear()+543+2;        
    var thday = new Array ("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัส","ศุกร์","เสาร์"); 
    var thmonth = new Array ("มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน", "กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
    var date_test = "วัน" + thday[now.getDay()]+ "ที่ "+ now.getDate()+ " " + 
    thmonth[Month]+ " " + (Year);
    $('#end').val(date_test);
            } 
    });
    $('#returnable').on('change',function(){
        var G2 = $('#returnable').val(); 
        G2 = G2.split("-"); 
        G2 = (G2[2])+'-'+G2[1]+'-'+G2[0]; 
        console.log(G2); 
        var S8 = $('#day').val();
        S8 = S8.split("-");
        S8 = (S8[2])+'-'+S8[1]+'-'+S8[0];
        console.log(S8);
    G2 = G2.split("-");
    S8 = S8.split("-");
    sD = new Date(G2[2],G2[1],G2[0]); 
    eD = new Date(S8[2],S8[1],S8[0]); 
    var daysDiff = Math.round((sDate-eDate)/86400000);
    $('#time').val(daysDiff);
    });
    });
    </script>
    <body>
    <font face = "CordiaUPC" size = "5">
    <form action="" method='POST'>
        <div class="container">
            <div class="row">
                <div class="col-md-3 " style="width: 338px; "></div> 
                <div class="col-md-5"><br>
                    <h2><b>คำนวณวันรับประกันสินค้า</b></h2>
                </div>
                <div class="col-md-4"></div>
            </div>
            
            <div class="row " style="margin-top:20px; ">
                <div class="col-md-3 " style="width: 338px; "></div>
                <div class="col-md-2 " style="width: 160px; "><b style="float:right;" >วันที่ซื้อ :</b></div>
                <div class="col-md-4 "> <input class="form-control" style="width: 200px;" type="date" id="day" name="day"></div>
            </div>
            <div class="row " style="margin-top:20px; ">
                <div class="col-md-3 " style="width: 338px; "></div>
                <div class="col-md-2 " style="width: 160px; "><b style="float:right;">ยี่ห้อ :</b></div>
                <div class="col-md-3 " style="width: 220px;" > <select id="brand" name="brand" class="form-control" style="width: 200px;">
                            <option value="null">กรุณาเลือก</option>            
                            <option value="iPhone">iPhone</option>
                            <option value="Samsung">Samsung</option>
                            <option value="LG">LG</option>
                            <option value="Lenovo">Lenovo</option>
                            <option value="Acer">Acer</option> 
                        </select> 
                        </div>
            </div>   
            <div class="row " style="margin-top:20px; ">
                <div class="col-md-3 " style="width: 338px; "></div>
                <div class="col-md-2 " style="width: 160px; "><b>ระยะเวลารับประกัน : </b></div>
                <div class="col-md-4 "><input style="width: 200px;" type="number " id="exp" name="exp" class="form-control"></div>
            </div>
            <div class="row " style="margin-top:20px; ">
                <div class="col-md-3 " style="width: 338px; "></div>
                <div class="col-md-2 " style="width: 160px; "><b>วันสิ้นสุดรับประกัน : </b></div>
                <div class="col-md-4 "><input style="width: 200px;" type="number " id="end" name="end" class="form-control"></div>
            </div>
            <div class="row " style="margin-top:20px; ">
                <div class="col-md-3 " style="width: 338px; "></div>
                <div class="col-md-2 " style="width: 160px; "><b style="float:right;" >วันที่สามารถคืนได้ : </b></div>
                <div class="col-md-4 "> <input class="form-control" style="width: 200px;" type="date" id="returnable" name="returnable"></div>
            </div>
            <div class="row " style="margin-top:20px; ">
                <div class="col-md-3 " style="width: 338px; "></div>
                <div class="col-md-2 " style="width: 160px; "><b style="float:right;">เหลือเวลา : </b></div>
                <div class="col-md-4 "><input style="width: 200px;" type="text " id="time" name="time" class="form-control"></div>
            </div>
        </div>
          </div><br>
    <center><div class="col-md-2 ">
          <button  type="submit" class="btn btn-success" name="save">ตกลง</button>&emsp;
          <button  type="submit" name="cal" class="btn btn-secondary">เคลียร์</button>
    </div></center><br>
    </table>
        <?php  
        echo "<center> <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>วันที่สั่งซื้อ</th>
            <th>ยี้ห้อ</th>
            <th>ระยะเวลาประกัน</th>
            <th>วันสิ้นสุดระยะเวลาประกัน</th>
        </tr>
        </thead>";
        ?>
    </form>
    </font>
    </body>
    </html>
    <?php
    if(isset($_POST['save'])){ 
        $day = explode("-",$_POST['day']);
        $day = $day[2]."/".$day[1]."/".$day[0];
        $_SESSION['data_sum_array'][] =  $day.",".$_POST['brand'].",".$_POST['exp'].",".$_POST['end'];
    foreach($_SESSION['data_sum_array'] as $v){
    $data = explode(",",$v);
    echo "<tbody>
    <tr>
    <th scope=\"row\">$data[0]</th>
    <td>$data[1]</td>
    <td>$data[2]</td>
    <td>$data[3]</td>
    </tr>

    </tbody>";     
    }

    }else{
        session_destroy();
    }
    echo "</table></center>";
    ?>


