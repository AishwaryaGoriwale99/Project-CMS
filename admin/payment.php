<head><title>ONLINE TRAVEL AGENCY SYSTEM::ADD PAYMENT</title></head>
<script language="javascript" src="js/validation.js"></script>
<?php 

include('header.php');
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">ADD PAYMENT</h2>
  <p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="customer_view.php">Customer View&gt;&gt;</a><a href="payment.php">add payment</a></p>
<form name="form1" method="post" action="insert.php" onsubmit="return daily();">
<fieldset>
<legend>Payment Info</legend>
<?php  require_once('connection\connection.php');?>
<table width="100%" border="0" align="center">

  <tr>
 <td width="49">&nbsp;</td>
    <td width="98">Customer id:</td>
    <td width="322"><input type="hidden" name="costomer_id" value= <?php echo $_REQUEST['costomer_id'];?> />
	
	<?php $cID=$_REQUEST['costomer_id']; $s=mysqli_query($con,"SELECT * FROM costomer WHERE costomer_id='$cID'");  
	$d=mysqli_fetch_array($s);
	 echo $d['full_name']; ?></td>
     
      <td width="48">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="39%">&nbsp;</td>
    <td width="12%">PAYMENT TYPE:</td>
    <td width="16%"><select name="payment_type"><option value="-1">-Payment Type-</option><option>Ticket</option><option>Visa</option><option>Other</option></select></td>
    <td width="33%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>AMOUNT:</td>
    <td><input type="text" name="amount" /></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>DESCRIPTION:</td>
    <td><input type="text" name="description" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit"  name="paymentform" value="submit" /><input type="reset"  value="clear"/></td>
    <td><a href="customer_view.php"><input type="button" value="back to list"></a></td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>
</form>
<?php include('footer.php');?>