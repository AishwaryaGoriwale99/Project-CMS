<head><title>ONLINE TRAVEL AGENCY SYSTEM::DEPENDENT EDIT</title></head>
<link href="datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="datepicker/core.js" type="text/javascript"></script>
<script language="javascript" src="js/validation.js"></script>
<?php include('header.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">DEPENDENT EDIT</h2>
 
<?php require_once('connection\connection.php'); ?>
 <?php 
  $sql="select*from salary where salary_id=$_GET[salary_id]";
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
  while($row=mysqli_fetch_array($result))
  {
	  $salary_id=$row["salary_id"]; 
	   $employee=$row["employee"];	 	 	 	 	 	
	  $month=$row["month"];
	  $amount=$row["amount"];
	  $description=$row["description"];
	
  }
	 
  ?>
  <p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="employee_view.php">Employee View&gt;&gt;</a><a href="salary_view_all.php="">Salary view</a></p>
<form name="form1" action="update.php" method="post" onSubmit="return salary_validate();">
<table width="100%" border="0" align="center">
<input type="hidden" name="salary_id" value="<?php echo $salary_id;?>">

  <tr>
    <td width="28%">&nbsp;</td>
    <td width="25%">employee:</td>
    <td width="30%"><input type="text" name="employee" value="<?php  echo $employee;?>" /></td>
    <td width="17%">&nbsp;</td>
  </tr> 
  <tr>
    <td width="28%">&nbsp;</td>
    <td width="25%">month:</td>
    <td width="30%"><input type="text" name="month" value="<?php  echo $month;?>" /></td>
    <td width="17%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>amount:</td>
    <td><input type="text" name="amount" value="<?php  echo $amount;?>" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Description:</td>
    <td><input type="text" name="description"  value="<?php  echo $description ;?>"/></td>
    <td>&nbsp;</td>
  </tr>
 
  
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="salaryform" value="save" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</form>
<?php include('footer.php');?>