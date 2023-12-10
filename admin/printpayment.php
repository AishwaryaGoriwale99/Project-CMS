<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONLINE TRAVEL AGENCY SYSTEM::PAYMENT LIST</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bar.css" type="text/css" />

</head>
<?php require_once('connection\connection.php'); ?>
<?php include('session.php');?>
<form name="form1">
  <h2 class="ph">PAYMENT LIST</h2>
<table width="200" border="1" align="center">

  <tr>
 
    <td>PAYMENT ID</td>
    <td>CUSTOMER ID</td>
    <TD>PAYMENT TYPE</TD>
    <td>AMOUNT</td>
    <td>DESCRIPTION</td>
    <td>DATE OF INSERTION</td>
    <td>INSERTED BY</td>
    
    
  </tr>
  <?php 
  $sql="select*from payment";
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
  if(mysqli_num_rows($result)<1)
  {
	  echo"<script type='text/javascript'>alert('No payment found');
	  document.location='customer_view.php'</script>";
	 
  }
  while($row=mysqli_fetch_array($result))
  { 	 	
	  $payment_id=$row["payment_id"];
	  $costomer_id=$row["costomer_id"];
	  $payment_type=$row["payment_type"];
	  $amount=$row["amount"];
	  $description=$row["description"];
	  $date_of_insertion=$row["date_of_insertion"];
	  $inserted_by=$row["inserted_by"];
	 
  ?>
  <tr>
  
  
  
    <td><?php       echo $payment_id;         ?></td>
    <td><?php       echo $costomer_id;       ?></td>
    <td><?php       echo $payment_type;       ?></td>
    <TD><?php       echo $amount;             ?></td> 
    <TD><?PHP       echo $description;        ?></TD>          
    <td><?php       echo $date_of_insertion;  ?></td>
    <td><?php       echo $inserted_by?></td>
    
   
  </tr>
  <?php }?>
</table> 
</form>
<br />
<input type="button" value="print" onclick="window.print() ;" />
</html>