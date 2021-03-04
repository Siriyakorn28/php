<?php
require_once("connect.php"); 
$sql = "SELECT customerID, customerName FROM customer";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
         echo'<option value="'.$row["customerID"].'">'.$row["customerName"].'</option>';
    }
?>