<head><title>ONLINE TRAVEL AGENCY SYSTEM::PAYMENT DETAIL</title></head>
<?php    require_once('connection\connection.php') ?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">PAYMENT DETAIL</h2>
  <p class="ph2"><a href="index.php">home&gt;&gt;</a></p>
<?php 
  $sql="select*from payment where costomer_id='$_GET[costomer_id]'";
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
<form name="form1" method="post" action="payment_view.php" >
<table width="46%" border="1" align="center">
<tr>
    <td>&nbsp;</td>
    <td>PAYMENT ID</td>
    <td><?php echo $payment_id;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Customer ID</td>
    <td><?php echo $costomer_id;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="6%">&nbsp;</td>
    <td width="37%">PAYMENT TYPE:</td>
    <td width="51%"><?php echo $payment_type;?></td>
    <td width="6%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>AMOUNT:</td>
    <td><?php echo  $amount;?> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  <tr>
    <td>&nbsp;</td>
    <td>DESCRIPTION:</td>
    <td><?php echo  $description;?> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DATE OF INSERTION:</td>
    <td><?php echo $date_of_insertion;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>INSERTED BY:</td>
    <td><?php echo $inserted_by;?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit"  name="paymentform" value="back to list" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>	
