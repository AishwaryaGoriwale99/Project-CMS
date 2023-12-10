<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONLINE TRAVEL AGENCY SYSTEM::DAILY EXPENDITURE LIST</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bar.css" type="text/css" />

</head>
<?php require_once('connection\connection.php'); ?>
<?php include('session.php');?>
<form name="form1">
  <h2 class="ph">DAILY EXPENDITURE LIST</h2>
  
<table width="200" border="1" align="center">

  <tr>
    
   
    <td>VOUCHER</td>
    <td>TITLE</td>
    <td>DESCRIPTION</td>
    <td>AMOUNT</td>
    <td>DATE</td>
     <td>FROM CURRENT TO NEXT</td>
    <td>INSERTED BY</td>
    
  </tr>
<?php
$sum=0;
$sql="select*from daily_expenditure";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
		
	$voucher_no=$row["voucher_no"]; 	
	$title=$row["title"]; 	
	$description=$row["description"]; 	
	$amount=$row["amount"]; 	
	$date=$row["date"]; 	
	$inserted_by=$row["inserted_by"];
	$sum=$sum+$row["amount"];
	
?>




  <tr>
    
    <td><?php echo $voucher_no;?></td>
    <td><?php echo $title;?></td>
    <td><?php echo $description;?></td>
    <td><?php echo $amount;?></td>
    <td><?php echo $date;?></td>
    <td><?php echo $sum;?></td>
     <td><?php echo $inserted_by;?></td>
     
  </tr>
  <?php 
  }?>
</table>
<br />

</form>

<input type="button" onClick="window.print() ;"  value="print"/>
</html>