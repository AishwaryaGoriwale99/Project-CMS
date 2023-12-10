<head><title>ONLINE TRAVEL AGENCY SYSTEM::DAILY EXPENDITURE EDIT</title></head>
<script language="javascript" src="js/validation.js"></script>
<?php include('header.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">EDIT VOUCHER</h2>
  <p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="daily_expenditure_view.php">view voucher&gt;&gt;</a><a href="daily_expenditure_edit.php">Etdit voucher</a></p>
<?php  include('connection\connection.php');?>
<?php
$sql="select*from daily_expenditure where id=$_GET[id]";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	$id =$row["id"];
	$voucher_no=$row["voucher_no"];
	$title=$row["title"];
	$description=$row["description"];
	$amout=$row["amount"];
	$date=$row["date"];
	$inserted_by=$row["inserted_by"];	 	 	 	 	
}
?>
<form action="update.php" method="post" name="form1" onsubmit="return daily();" >
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<table width="329" border="0" align="center">
   
  <tr>
    <td width="41">&nbsp;</td>
    <td width="72">Voucher:</td>
    <td width="144"><input type="text" name="voucher_no" value="<?php echo $voucher_no;?>"/></td>
    <td width="44">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Title:</td>
    <td><input type="text" name="title"  value="<?php echo $title; ?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Description:</td>
    <td><input type="text" name="description" value="<?php echo $description; ?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Amount:</td>
    <td><input type="text" name="amount" value="<?php echo $amout;?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td><input type="submit" value="submit" name="daily_expenses"></td>
     <td><input type="reset" value="Clear"></td>
    <td>&nbsp;</td>
  </tr>
</table>


<?php include('footer.php'); ?>
