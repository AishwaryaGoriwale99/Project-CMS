<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONLINE TRAVEL AGENCY SYSTEM::CASH REPORT</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bar.css" type="text/css" />

</head>
<form name="form1">
<h2 class="ph">ALMOQADAS TRAVEL AGENCY :::: CASH REPORT </h2>
<?php include('connection/connection.php'); ?>
<?php include('session.php');

$fromDate=$_REQUEST['sdate'];
$toDate=$_REQUEST['edate'];
$from = date('Y-m-d', strtotime(str_replace('-', '/', $fromDate)));
$to = date('Y-m-d', strtotime(str_replace('-', '/', $toDate)));
if(!empty($fromDate) && !empty($toDate)){
 $sql1="select * from cash WHERE `date` BETWEEN '$from' AND '$to' AND debitCredit='Dr'";
  $sql2="select*from cash WHERE `date` BETWEEN '$from' AND '$to' AND debitCredit='Cr'";
} else {
	$sql1="select * from cash WHERE  debitCredit='Dr'";
  $sql2="select*from cash WHERE  debitCredit='Cr'";
	
}
$sumDr=0;
$sumCr=0;
?>


 


<table  border="1" width="auto" align="center">
  <tr>
    <td height="49" colspan="2"><h1 align="center">&nbsp; CASH REPORT </h1></td>
    </tr>
  <tr>
    <td valign="top"><table width="200" border="1">
      <tr>
        <td colspan="4" align="center"><span class="asad">DEBIT</span></td>
        </tr>
      <tr>
 
	 
        <td width="9%"><span class="asad">ID</span></td>
        <td width="22%"><span class="asad">DATE</span></td>
        <td width="47%"><span class="asad">DESCRIPTION</span></td>
        <td width="22%"><span class="asad">AMOUNT</span></td>
      </tr>
             <?php

$result=mysqli_query($con,$sql1) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{   
	$cashID=$row['cashID'];
    $date=$row['date']; 
	$amount=$row['amount'];
	$description=$row['description'];
	$sumDr=$sumDr+$amount;

?>
    
      <tr>
        <td bordercolorlight="#006633"><?php echo $cashID ;?></td>
        <td><?php echo $date ;?></td>
        <td><?php echo $description ;?></td>
        <td><?php echo $amount ;?></td>
      </tr>
        <?php } ?>
      <tr>
        <td bordercolorlight="#006633" colspan="3">Total Receipt</td>

        <td><?php echo $sumDr; ;?></td>
      </tr>
    
      
    </table></td>
    <td valign="top"><table width="200" border="1">
      <tr>
        <td colspan="4" align="center"><span class="asad">CRIDET</span></td>
      </tr>
      <tr>
        <td width="9%"><span class="asad">ID</span></td>
        <td width="22%"><span class="asad">DATE</span></td>
        <td width="47%"><span class="asad">DESCRIPTION</span></td>
        <td width="22%"><span class="asad">AMOUNT</span></td>
      </tr>
  <?php

$result=mysqli_query($con,$sql2) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{   
	$cashID=$row['cashID'];
    $date=$row['date']; 
	$amount=$row['amount'];
	$description=$row['description'];
$sumCr=$sumCr+$amount;
?>
     
      <tr>
        <td><?php echo $cashID ;?></td>
        <td><?php echo $date ;?></td>
        <td><?php echo $description ;?></td>
        <td><?php echo $amount ;?></td>
      </tr>
        <?php } ?>
      <tr>
        <td bordercolorlight="#006633" colspan="3">Total Payment</td>

        <td><?php echo $sumCr; ;?></td>
      </tr>
      
    </table></td>
  </tr>
  <tr>
  <td>Present Cash</td>
  <td><?php echo $sumDr-$sumCr; ?></td>  
  </tr>
  </table>
  </form>


   <input type="button" name="print" value="PRINT" onclick="window.print() ;" />
</html>