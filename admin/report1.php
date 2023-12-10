<?php include('session.php');?>
<?php include('header.php');?>
<?php include('connection/connection.php'); 

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


 


<table width="250" height="800" border="1" class="footer">
  <tr>
    <td height="49" colspan="2"><h1 align="center">&nbsp; CASH REPORT </td>
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
  <a href="javascript:;" style="color:#000"  onClick="window.open('printreport1.php','msgWindow','toolbar=no, scrollbars=no, resizable=no, top=30, left=100, width=1000, height=640')"> Print View </a>
  
<?php include('footer.php');?>