<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONLINE TRAVEL AGENCY SYSTEM::SALARY REPORT</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bar.css" type="text/css" />

</head>
<form name="form1">
<h2 class="ph">ALMOQADAS TRAVEL AGENCY :::: SALARY REPORT </h2>

<?php include('session.php');?>
<?php include('connection/connection.php'); 

$fromDate=$_REQUEST['sdate'];
$toDate=$_REQUEST['edate'];
$from = date('Y-m-d', strtotime(str_replace('-', '/', $fromDate)));
$to = date('Y-m-d', strtotime(str_replace('-', '/', $toDate)));
if(!empty($fromDate) && !empty($toDate)){
 $sql1="select * from salary WHERE `date` BETWEEN '$from' AND '$to'";
  $sql2="select*from cash WHERE `date` BETWEEN '$from' AND '$to'";
} else {
	$sql1="select * from salary";
 
	
}
$sum=0;

?>


 


<table width="700px" height="800" border="1" align="center">
  <tr>
    <td height="49" colspan="2"><h1 align="center">&nbsp; SALARY REPORT </td>
    </tr>
  <tr>
    <td valign="top"><table width="680px" border="1">
      <tr>
        <td colspan="8" align="center"><span class="asad">Salary Search</span></td>
        </tr>
      <tr>
 
	 
        <td width="9%"><span class="asad">ID</span></td>
        <td width="22%"><span class="asad">EMPLOYEE</span></td>
        <td width="22%"><span class="asad">MONTH</span></td>
         <td width="22%"><span class="asad">AMOUNT</span></td>
         <td width="47%"><span class="asad">DESCRIPTION</span></td>
        <td width="22%"><span class="asad">DATE</span></td>
        
       
        <td width="22%"><span class="asad">INSERTED BY</span></td>
      </tr>
             <?php

$result=mysqli_query($con,$sql1) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{   
	$salary_id=$row['salary_id'];
	$employee=$row['employee'];
	$month=$row['month'];
	$amount=$row['amount'];
	$description=$row['description'];
	$date=$row['date']; 
	
	$inserted_by=$row['inserted_by']; 
	$sum=$sum+$amount;

?>
    
      <tr>
        <td bordercolorlight="#006633"><?php echo $salary_id ;?></td>
        <td><?php echo $employee ;?></td>
          <td><?php echo $month ;?></td>
            <td><?php echo $amount ;?></td>
        <td><?php echo $description ;?></td>
        <td><?php echo $date ;?></td>
          <td><?php echo $inserted_by ;?></td>
      </tr>
        <?php } ?>
      <tr>
        <td bordercolorlight="#006633" colspan="3">Total Salaries</td>

        <td><?php echo $sum ;?></td>
      </tr>
    
      
    </table>
           
      
  </form>
   <input type="button" name="print" value="PRINT" onclick="window.print() ;" />
</html>