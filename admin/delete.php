<?php
require_once('connection\connection.php');
?>




<?php

//delete record from costomer table;
if(isset($_GET['costomer_id']))

{
	$c_id=$_GET['costomer_id'];
$sql="delete from costomer where costomer_id='$_GET[costomer_id]'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
if($result)
{
	$sql2="delete from ticket where costomer_id='$c_id'";
	$result2=mysqli_query($con,$sql2);
	$sql2="delete from payment where costomer_id='$c_id'";
	$result2=mysqli_query($con,$sql2);
	$sql2="delete from document where costomer_id='$c_id'";
	$result2=mysqli_query($con,$sql2);
	$sql2="delete from dependent where costomer_id='$c_id'";
	$result2=mysqli_query($con,$sql2);
	header("location:customer_view.php");
	
}
else
{
	echo"record is not deleted";
}
}
?>


<?php 
//delete record from ticket table;

if(isset($_REQUEST['ticket_id']))
{
	$sql="select*from ticket where ticket_id='$_GET[ticket_id]'";
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
 while( $row=mysqli_fetch_array($result))
  {
	  $costomer_id=$row["costomer_id"];// selection is only for redirection purpose;
  }
  
$sql="delete from ticket where ticket_id='$_GET[ticket_id]'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
if($result)
{
header("location:ticket_view_all.php?costomer_id=$costomer_id");
}
else
{
	echo"record is not deleted";
}
}
?>



 
 <?php 
 //delete record from payment table;
 if(isset($_REQUEST['payment_id']))
{
	$sql="select*from payment where payment_id='$_GET[payment_id]'";
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
 while( $row=mysqli_fetch_array($result))
  {
	  $costomer_id=$row["costomer_id"];// selection is only for redirection purpose;
  }
	
$sql="delete from payment where payment_id='$_GET[payment_id]'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
if($result)
{
	header("location:payment_view_all.php?costomer_id=$costomer_id");
}
else
{
	echo"record is not deleted";
}
}
 ?>
 <?php
 //delete record from daily expenditure table;
 if(isset($_GET["id"]))
 {
 $sql="delete from daily_expenditure where id='$_GET[id]'";
 $result=mysqli_query($con,$sql) or die(mysqli_error($con));
 if($result)
 { 
	 
	       echo"record deleted successfully";
		   header("location:daily_expenditure_view.php");
	 }
	 else
	 {
		 echo"record is not deleted";
	 }
 
 
 }
 
  ?>
 
 
 <?php 
 
 //deletion record of document table;
 if(isset($_GET["document_id"]))
 {
 $sql="select*from document where document_id='$_GET[document_id]'";
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
 while( $row=mysqli_fetch_array($result))
  {
	  $costomer_id=$row["costomer_id"];// selection is only for redirection purpose;
  }
  
 $sql="delete from document where document_id='$_GET[document_id]'";
 $result=mysqli_query($con,$sql) or die(mysqli_error($con));
 if($result)
 {
	 echo"record is deleted successfully";
	 header("location:document_view_all.php?costomer_id=$costomer_id");
 }
 else
 {
	 
	 echo"record is deleted";
 } 
 }
 
 ?>
  









<?php


//delete record from salary table;
 if(isset($_GET["salary_id"]))
 {
 $sql="delete from salary where salary_id='$_GET[salary_id]'";
 $result=mysqli_query($con,$sql) or die(mysqli_error($con));
 if($result)
 { 
	 
	       echo"record deleted successfully";
		   header("location:salary_view_all.php");
	 }
	 else
	 {
		 echo"record is not deleted";
	 }
 
 
 }
 
  ?>
  
  
  
  
  
  
  <?php


//delete record from Employee table;

if($_REQUEST['action']=="Delete"){
	$emp_id=$_GET['emp_id'];
$sql="delete from employee where emp_id='$emp_id'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));

	header("location:employee_view.php?msg=Deleted");
}
?>



  <?php
//delete record from admin table;
  if($_REQUEST['action']=="Deleteadmin"){
	$user_id=$_GET['user_id'];
$sql="delete from admin where user_id='$user_id'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));

	header("location:show_all_admin.php?msg=Deleted");
}
?>


  
