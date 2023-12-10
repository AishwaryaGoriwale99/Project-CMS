<head><title>ONLINE TRAVEL AGENCY SYSTEM::TICKET EDIT</title></head>
<link href="datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="datepicker/core.js" type="text/javascript"></script>
<script language="javascript" src="js/validation.js"></script>
<?php include('header.php');?>
<?php require_once('connection\connection.php');
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">TICKET EIDT</h2>
  
  
 <?php 
  $sql="select*from ticket where ticket_id=$_GET[ticket_id]";
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
  while($row=mysqli_fetch_array($result))
  {   	 	 	 	 	 	 	 	 	 		 	 	 	 	
	  $ticket_id=$row["ticket_id"];
	  $ticket_no=$row["ticket_no"];
	  $costomer_id=$row["costomer_id"];
	  $date=$row["date"];
	  $sector_from=$row["sector_from"];
	  $sector_to=$row["sector_to"];
	  $pnr_no=$row["pnr_no"];
	  $airline_name=$row["airline_name"];
	  $airline_no=$row["airline_no"];
	  $date_of_insertion=$row["date_of_insertion"];
	  $inserted_by=$row["inserted_by"]; 
  }
  ?>
  <p class="ph2"><a href="index.php">home&lt;&lt;</a><a href="customer_view.php">Customer View&lt;&lt;</a><a href='ticket_view.php?costomer_id=<?php echo "$costomer_id";?>'>ticket view</a></p>

  
<form name="form1"  action="update.php" method="post" onsubmit="return ticket_validate();" >
<input type="hidden" name="ticket_id" value="<?php echo $ticket_id;?>" />
<fieldset>
<legend>Ticket info</legend>
<table width="43%" border="0" align="center">
  <tr>
    <td width="14%">&nbsp;</td>
    <td width="33%">TICKET NO:</td>
    <td width="39%"><input type="text" name="ticket_no"  value="<?php echo $ticket_no;?>"/></td>
    <td width="14%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Customer ID</td>
    <td><input type="hidden" name="costomer_id" value="<?php echo $costomer_id;?>" /> <?php echo $costomer_id;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DATE:</td>
    <td><input type="text" name="date" value="<?php echo $date;?>" class="datepicker"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>SECTOR FROM:</td>
    <td><input type="text" name="sector_from" value="<?php echo $sector_from;?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>SECTOR TO:</td>
    <td><input type="text" name="sector_to" value="<?php echo $sector_to;?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>PNR NO:</td>
    <td><input type="text" name="pnr_no" value="<?php echo $pnr_no;?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>AIRLINE NAME:</td>
    <td><input type="text" name="airline_name"  value="<?php echo $airline_name;?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>AIRLINE NO:</td>
    <td><input type="text" name="airline_no"  value="<?php echo $airline_no;?>"/></td>
    <td>&nbsp;</td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="save" name="ticketform" /> <a href="ticket_view.php"><input type="button" name="ticketform" value="back to list" /></a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>
</form>
<?php include('footer.php');?>