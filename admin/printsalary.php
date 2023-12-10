<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONLINE TRAVEL AGENCY SYSTEM::PAYMENT LIST</title>
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/bar.css" type="text/css" />

</head>
<?php require_once('connection\connection.php'); ?>
<?php include('session.php');?>
<form name="form1">
  <h2 class="ph">SALARIES LIST</h2>
<table width="200" border="1" align="center">

  <tr>

    <td width="50">Salary Id</td> 	 	 	 	 	 	 	
    <TD width="50"> Month</TD>
    <td width="60">Amount</td>
     <td width="179">Description</td>
     <TD width="150">Paid To whom? </TD>
      <TD width="99"> Date</TD>
     <TD width="99"> Inserted By</TD>
    <?php /*?> <TD class="specail">ACTION </TD><?php */?>
  </tr>
  <?php 
  $sql="select*from salary";
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
  if(mysqli_num_rows($result)<1)
  {
	  echo"<script type='text/javascript'>alert('No Salary found');
	  document.location='employee_view.php'</script>";
	 
  }
  while($row=mysqli_fetch_array($result))
  {
	  $salary_id=$row["salary_id"];	 	 	 	 	 	 		 
	  $month=$row["month"];
 	  $amount=$row["amount"];
 	  $description=$row["description"];
	   $employee=$row["employee"];
	    $date=$row["date"];
	    $inserted_by=$row["inserted_by"];
	 
	 
  ?>
  
  <tr>
  
 
  
    <td><?php echo $salary_id;?></td>
    
    <td><?php       echo $month;      ?></td>
    <TD><?php       echo $amount;?></td>  
           
    <td><?php       echo $description; ?></td>
    <td><?php       echo $employee; ?></td>
     <td><?php       echo $date; ?></td>
   
      <TD><?php       echo $inserted_by;?></td>   
    <?php /*?><td width="91">
    <a href="salary_edit.php?salary_id=<?php echo $salary_id;?>">&nbsp;&nbsp;<img src="images/edit.png" /></a>
    <a href="delete.php?salary_id=<?php echo $salary_id;?>" onclick="return confirm('Are you sure you want to delete?')">&nbsp;<img src="images/delete.png" /></a></td>
  </tr><?php */?>
  <?php }?>
</tr>
</table> 
</form>
<input type="button" value="print" onclick="window.print() ;" />
</html>
