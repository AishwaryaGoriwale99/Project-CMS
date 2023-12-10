<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BILL</title>
</head>
<?php 
include ('connection/connection.php')

?>
<body>
<div id="loading" class="ui-front loader ui-widget-overlay bg-white opacity-100" align="center"> <img src="../css/header.png" alt="" /> </div>
<div id="page-content-wrapper">
  <div id="page-title">
    <h1 align="center"> ALOMOQADAS Travel Agency Bill </h1>
  </div>
  <!-- #page-title -->
          
<table width="80%" border="1" align="center">

  <tr>
 
    <td>PAYMENT ID</td>
    <td>CUSTOMER NAME</td>
    <TD>PAYMENT TYPE</TD>
    <td>AMOUNT</td>
    <td>DESCRIPTION</td>
    <td>DATE OF INSERTION</td>
    <td>INSERTED BY</td>
     
    
  </tr>
  <?php 
  if(!empty($payment_id)){
	  
  $sql="select*from payment where payment_id='$_GET[payment_id]'"; 
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
   while($row=mysqli_fetch_array($result))
  { 	 	
	  $payment_id=$row["payment_id"];
	  $costomer_id=$row["costomer_id"];
	  $payment_type=$row["payment_type"];
	  $amount=$row["amount"];
	  $description=$row["description"];
	  $date_of_insertion=$row["date_of_insertion"];
	  $inserted_by=$row["inserted_by"];
  }
  }
  
  else {
	  
	  $sql="select*from payment order by payment_id desc LIMIT 0,1"; 
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
   while($row=mysqli_fetch_array($result))
  { 	 	
	  $payment_id=$row["payment_id"];
	  $costomer_id=$row["costomer_id"];
	  $payment_type=$row["payment_type"];
	  $amount=$row["amount"];
	  $description=$row["description"];
	  $date_of_insertion=$row["date_of_insertion"];
	  $inserted_by=$row["inserted_by"];
	
  }
	  
  ?>
  
  
  <tr>
  
  
  
    <td><?php       echo $payment_id;         ?></td>
    
    <td><?php $cID=$costomer_id; $s=mysqli_query($con,"SELECT * FROM costomer WHERE costomer_id='$cID'");  
	$d=mysqli_fetch_array($s);
	 echo $d['full_name']; ?></td>
     
    <td><?php       echo $payment_type;       ?></td>
    <TD><?php       echo $amount;             ?></td> 
    <TD><?PHP       echo $description;        ?></TD>          
    <td><?php       echo $date_of_insertion;  ?></td>
    <td><?php $cID=$inserted_by; $s=mysqli_query($con,"SELECT * FROM admin WHERE user_id='$cID'");  
	$d=mysqli_fetch_array($s);
	 echo $d['username']; ?></td>
    
   
  </tr>
  <?php }?>
</table>


 
<div style="height:50px">
</div>
<input type="button" value="print" onclick="window.print() ;" />
</body>
</html>