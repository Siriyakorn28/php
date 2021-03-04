<?php
require_once("connect.php"); 
$sql = "SELECT animalId, animalName FROM animal";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {

        $selected = '';
        $id = $_GET['id'];
        $sqlAM = "SELECT animalId FROM treatment WHERE animalId='$animalId'";
        $rsAM = $conn->query($sqlAM);
        

        while($rowAM = $rsAM->fetch_assoc()) {
            echo 'IKKK : ' . $rowAM["animalId"];
            if($row["animalId"] = $rowAM['animalId']) {
                $selected = 'selected';
            }
        }

        echo'<option value="'.$row["animalId"].'" '.$selected.'>'.$row["animalName"]. ' ID : ' .$row["animalid"]. '</option>';

    }
 
{
    function select() {}
}*/

?>