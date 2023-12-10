<head><title>ONLINE TRAVEL AGENCY SYSTEM::PAYMENT EIDT</title></head>
<script language="javascript" src="js/validation.js"></script>
<?php include('header.php');?>
<?php    require_once('connection\connection.php') ?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">EDIT PAYMENT</h2>
  
  
<?php 
  $sql="select*from payment where payment_id=$_GET[payment_id]";
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
  while($row=mysqli_fetch_array($result))
  {	 	 	
	  $payment_id="$row[payment_id]";
	  $costomer_id=$row["costomer_id"];
	  $payment_type=$row["payment_type"];
	  $amount=$row["amount"];
	  $description=$row["description"];
	  $date_of_insertion=$row["date_of_insertion"];
	  $inserted_by=$row["inserted_by"];
  }
	
	?>
     <p class="ph2"><a href="index.php">home&lt;&lt;</a><a href="customer_view.php">Customer View&lt;&lt;</a><a href="payment_view.php?costomer_id=<?php echo $costomer_id;?>">payment_view</a></p>
<form name="form1" method="post" action="update.php"  onsubmit="return payment_validate();">
<input type="hidden" name="payment_id" value="<?php echo $payment_id;?>" />
<table width="100%" border="0" align="center">

  <tr>
    <td>&nbsp;</td>
    <td>Customer ID</td>
    <td><input type="hidden" name="costomer_id" value="<?php echo $costomer_id;?>" /><?php echo $costomer_id;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="35%">&nbsp;</td>
    <td width="15%">PAYMENT TYPE:</td>
    <td width="44%"><select name="payment_type"><option <?php if($payment_type=='-1'){echo 'selected="selected"'; } ?> value="-1">-Payment Type-</option><option <?php if($payment_type=='TICKET'){echo 'selected="selected"'; } ?> value="TICKET">Ticket</option><option <?php if($payment_type=='VISA'){echo 'selected="selected"'; } ?> value="VISA">Visa</option><option <?php if($payment_type=='OTHER'){echo 'selected="selected"'; } ?> value="OTHER">Other</option></select></td>
    <td width="6%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>AMOUNT:</td>
    <td><input type="text" name="amount" value="<?php echo  $amount;?>" /> </td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>DESCRIPTION:</td>
    <td><input type="text" name="description" value="<?php echo $description; ?>" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DATE OF INSERTION:</td>
    <td><input type="text" name="date_of_insertion"  value="<?php echo $date_of_insertion;?>" /></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit"  name="paymentform" value="save" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>	

<?php include('footer.php');?>
