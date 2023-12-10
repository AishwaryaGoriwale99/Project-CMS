<?php include('session.php');?>
<?php include('header.php');?>
<?php include('connection/connection.php'); 

if(isset($_REQUEST['sdate']) && isset($_REQUEST['edate'])){
$fromDate=$_REQUEST['sdate'];
$toDate=$_REQUEST['edate'];
$from = date('Y-m-d', strtotime(str_replace('-', '/', $fromDate)));
$to = date('Y-m-d', strtotime(str_replace('-', '/', $toDate)));
 $sql1="select * from daily_expenditure WHERE `date` BETWEEN '$from' AND '$to'";
  
} else {
	$sql1="select * from daily_expenditure";
  
	
}
$sum=0;

?>


 


<table width="250" height="800" border="1" class="footer">
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
    <a href="javascript:;" style="color:#000"  onClick="window.open('printreport2.php','msgWindow','toolbar=no, scrollbars=no, resizable=no, top=30, left=100, width=1000, height=640')"> Print View </a>
<?php include('footer.php');?>