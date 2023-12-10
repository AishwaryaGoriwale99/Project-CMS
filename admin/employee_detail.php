<head><title>ONLINE TRAVEL AGENCY SYSTEM::EMPLOYEE DETAIL</title></head>
<?php 
require_once('connection\connection.php');
?>
 <?php
  $sql="select*from employee where emp_id='$_GET[emp_id]'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	$emp_picture=$row['emp_picture']; 
	$emp_id=$row['emp_id'];
	$emp_name=$row['emp_name'];
	$emp_contact=$row['emp_contact'];
	$emp_address=$row['emp_address'];
	$emp_reference=$row['emp_reference'];
	$emp_email=$row['emp_email'];
	$emp_join=$row['emp_join'];
	$emp_close=$row['emp_close'];;
	$inserted_by=$row['inserted_by'];
}
?>
  
<h1 align="center"> ALMOQADAS TRAVEL AGENCY ::: EMPLOYEE</h1>
<form name="form1">
<div align="center" style="border:1px solid #333; width:850px; margin:0 auto;">
<p><img src="<?php echo $emp_picture;?>" alt="" width="111" height="132">



<table width="auto" height="auto" border="1" style="bar.css">
  <tr>
    <td height="41">ID</td>
    <td>NAME</td>
    <td>CONTACT</td>
    <td>ADDRESS</td>
    <td>REFERENCE</td>
    <td>EMAIL</td>
    <td>JOIN DATE</td>
    <td>LEAVING DATE</td>
  </tr>
  <tr>
    <td><?php echo $emp_id;?></td>
    <td><?php echo $emp_name;?></td>
    <td><?php echo $emp_contact;?></td>
    <td><?php echo $emp_address;?></td>
    <td><?php echo $emp_reference;?></td>
    <td><?php echo $emp_email;?></td>
    <td><?php echo $emp_join;?></td>
    <td><?php echo $emp_close;?></td>
   
  </tr>
</table>
</div>
<input type="button" value="print" onclick="window.print() ;" />
</form>