<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONLINE TRAVEL AGENCY SYSTEM::CASH REPORT</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bar.css" type="text/css" />

</head>
<form name="form1">
<h2 class="ph">ALMOQADAS TRAVEL AGENCY :::: DAILY EXPENCES </h2>
<?php include('connection/connection.php'); ?>
<?php include('session.php');

$fromDate=$_REQUEST['sdate'];
$toDate=$_REQUEST['edate'];
$from = date('Y-m-d', strtotime(str_replace('-', '/', $fromDate)));
$to = date('Y-m-d', strtotime(str_replace('-', '/', $toDate)));
if(!empty($fromDate) && !empty($toDate)){
 $sql1="select * from daily_expenditure WHERE `date` BETWEEN '$from' AND '$to'";
  
} else {
	$sql1="select * from daily_expenditure";
  
	
}
$sum=0;

?>


 


<table  border="1" align="center" width="200">
  <tr>
    <td height="49" colspan="2"><h1 align="center">&nbsp;EXPENDITURE REPORT </td>
    </tr>
  <tr>
    <td valign="top"><table width="200" border="1">
      <tr>
        <td colspan="5" align="center"><span class="asad">Daily Expences</span></td>
        </tr>
      <tr>

	 
        <td width="9%"><span class="asad">ID</span></td>
        <td width="22%"><span class="asad">VOUCHER</span></td>
         <td width="22%"><span class="asad">TITLE</span></td>
        <td width="47%"><span class="asad">DESCRIPTION</span></td>
        <td width="22%"><span class="asad">AMOUNT</span></td>
      </tr>
             <?php

$result=mysqli_query($con,$sql1) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{   
	$id=$row['id'];
    $voucher_no=$row['voucher_no']; 
	 $title=$row['title']; 
	 $description=$row['description'];
	$amount=$row['amount'];
	
	$sum=$sum+$amount;

?>
    
      <tr>
        <td bordercolorlight="#006633"><?php echo $id ;?></td>
        <td><?php echo $voucher_no ;?></td>
        <td><?php echo $title ;?></td>
        <td><?php echo $description ;?></td>
        <td><?php echo $amount ;?></td>
      </tr>
        <?php } ?>
      <tr>
        <td bordercolorlight="#006633" colspan="4">Total Expenditure</td>

        <td><?php echo $sum; ?></td>
      </tr>
    
      
    </table>
   </form>
   <input type="button" name="print" value="PRINT" onclick="window.print() ;" />
</html>