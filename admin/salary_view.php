<head><title>ONLINE TRAVEL AGENCY SYSTEM::Salary LIST</title></head>
<?php include('header.php');?>
<?php
require_once('connection\connection.php');
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">SALARY VIEW</h2>
  <p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="employee_view.php">Employee View&gt;&gt;</a><a href="salary_view.php?emp_id=<?php echo $_GET['emp_name'];?>">Salary view</a></p>
  
<table width="100%" border="0" align="center">

  <tr>
  
    <td width="52">Salary Id</td>
    <td width="150">Paid to whom?</td>
    <TD width="64">Month</TD>
    <td width="87">Amount</td>
    <td width="128">Description</td><?php /*?>
    <TD   class="specail">ACTION </TD><?php */?>
  </tr>
  <?php 
  $sql="select*from salary where employee='$_GET[emp_name]'";
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
  if(mysqli_num_rows($result)<1)
  {
	  echo"<script type='text/javascript'>alert('No Salary found');
	  document.location='employee_view.php'</script>";
	 
  }
  while($row=mysqli_fetch_array($result))
  { 	  	 	 	 	 	 	 	 	 	 		 	 	 	 	
	  $salary_id=$row["salary_id"];
	  $employee=$row["employee"];
	  $month=$row["month"];
	  $amount=$row["amount"];
	  $description=$row["description"];	 	 	 	 	 	
  ?>
  
  <tr>
 
    <td align="left" valign="top"><?php       echo       $salary_id;?></td>
    <td align="left" valign="top"><?php       echo       $employee;?></td>
    <td align="left" valign="top"><?php       echo          $month; ?></td>
    <td align="left" valign="top"><?php       echo       $amount;?></td>
    <TD align="left" valign="top"><?php       echo       $description;?></td>           
    
  <?php /*?>   <td width="219" align="left" valign="top"><a href="salary_edit.php?salary_id=<?php echo $salary_id;?>">&nbsp;&nbsp;<img src="images/edit.png" title="Edit Salary" /></a><a href="delete.php?salary_id=<?php echo $salary_id ;?>" onclick="return confirm('Are you sure you want to delete?')">&nbsp;&nbsp;<img src="images/delete.png" title="Delet salary" /></a></td><?php */?>
    
  </tr>
  <?php }?>
</table> 

 <?php include('footer.php');?>