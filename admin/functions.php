<?php 
function insertCash($amount, $debitCredit, $description){
global $con;
$sqlCashInsert=mysqli_query($con,"INSERT INTO cash(amount, debitCredit, description) values('$amount', '$debitCredit', '$description')") or die(mysqli_error($con));
}

//function get Max ID
function getMaxID($maxField, $table){
global $con;
$sql=mysqli_query($con,"SELECT MAX(".$maxField.") as maxID  FROM ".$table);
$result=mysqli_fetch_array($sql);
return $result['maxID'];
}



?>