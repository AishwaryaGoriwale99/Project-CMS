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
  <h2 class="ph">TICKETS LIST</h2>
  
<table width="200" border="1" align="center">

  <tr>
  
    <td width="52">Ticket Id</td>
    <td width="42">Ticket No</td>
    <TD width="64">Costomer Name</TD>
    <td width="87">Date</td>
    <td width="85">Sector From</td>
    <td width="98">Sector To</td>
    <td width="128">Airline Name</td>
    <td width="102">Airline No</td>
    <td width="172">Date Of Insertion</td>
    
  </tr>
  <?php 
  $sql="select*from ticket";
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
  if(mysqli_num_rows($result)<1)
  {
	  echo"<script type='text/javascript'>alert('No ticket found');
	  document.location='customer_view.php'</script>";
	 
  }
  while($row=mysqli_fetch_array($result))
  { 	  	 	 	 	 	 	 	 	 	 		 	 	 	 	
	  $ticket_id=$row["ticket_id"];
	  $ticket_no=$row["ticket_no"];
	  $costomer_id=$row["costomer_id"];
	  $date=$row["date"];
	  $sector_from=$row["sector_from"];
	  $sector_to=$row["sector_to"];
	  $airline_name=$row["airline_name"];
	  $airline_no=$row["airline_no"];
	  $date_of_insertion=$row["date_of_insertion"];
	  $inserted_by=$row["inserted_by"];  	 	 	 	 	 	 	 	
  ?>
  
  <tr>
 
    <td align="left" valign="top"><?php       echo       $ticket_id;?></td>
    <td align="left" valign="top"><?php       echo       $ticket_no;?></td>
    <td align="left" valign="top"><?php       echo          $costomer_id; ?></td>
    <td align="left" valign="top"><?php       echo       $date;?></td>
    <TD align="left" valign="top"><?php       echo       $sector_from;?></td>           
    <td align="left" valign="top"><?php       echo       $sector_to    ;?></td>
    <td align="left" valign="top"><?php       echo       $airline_name  ;?></td>
    <td align="left" valign="top"><?php       echo       $airline_no        ;?></td>
    <td align="left" valign="top"><?php       echo       $date_of_insertion;?></td>
     
    
  </tr>
  <?php }?>
</table> 
</form>
<input type="button" value="print" onclick="window.print() ;" />
 
 </html>