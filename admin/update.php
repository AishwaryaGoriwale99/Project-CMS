 <?php include('session.php'); ?> 	 	 	 		 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 			
<?php
require_once('connection\connection.php');
?>
<?php
 
 // artical form update
 
if($_REQUEST['action']=='updateArtical'){
	$page_id=$_REQUEST["page_id"];
	$title=$_POST['title'];
	$description=$_POST['description'];
	
$sql="update pages set	title='$title',	description='$description' WHERE page_id='$page_id'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
if($result)
{
	//echo"update successfully";
	header("location:artical_view.php?msg=Updated Sucssesfully");
}
else
{
	echo "not update";
}
}//main if

?>




<?php
if(isset($_POST['costomerform']))
{
	//updation in costomer table;

 
 
	
$sql="update costomer set full_name='$_POST[full_name]',son_of='$_POST[son_of]',status='$_POST[status]',date_of_birth='$_POST[date_of_birth]', 	place_of_birth='$_POST[place_of_birth]',previous_nationality='$_POST[previous_nationality]', 	present_nationality='$_POST[present_nationality]',sex='$_POST[sex]',marital_status='$_POST[marital_status]',sect='$_POST[sect]', 	religion='$_POST[religion]' ,place_of_issue='$_POST[place_of_issue]',qualification='$_POST[qualification]',profession='$_POST[profession]', 	home_address='$_POST[home_address]' ,telephone_no='$_POST[telephone_no]',purpose_of_travel='$_POST[purpose_of_travel]', 	date_of_passport='$_POST[date_of_passport]',passport_no='$_POST[passport_no]' ,	date_of_passport_expiry='$_POST[date_of_passport_expiry]',duration_of_stay_in_kindom='$_POST[duration_of_stay_in_kindom]', 	date_of_arrival='$_POST[date_of_arrival]',date_of_departure='$_POST[date_of_departure]', 	mode_of_payment='$_POST[mode_of_payment]', 	relationship='$_POST[relationship]',destination='$_POST[destination]' ,carriers_name='$_POST[carriers_name]',visa_no='$_POST[visa_no]',date_of_insertion=now(),inserted_by='$user' where costomer_id='$_POST[hiden]'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
if($result)
{
	echo"updat successfully";
	header('location:customer_view.php');
}
else
{
	echo "not update";
}
}//main if
?>



<?php
if(isset($_POST['paymentform']))
{
	$costomer_id=$_POST["$costomer_id"];
	//updatation in payment table;
$sql="update payment set	payment_type='$_POST[payment_type]' ,	amount=$_POST[amount],description='$_POST[description]', 	date_of_insertion=now(), 	inserted_by='$user' where payment_id=$_POST[payment_id] ";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
if($result)
{
	echo"updat successfully";
	header("location:payment_view.php?costomer_id=$_POST[costomer_id]");
}
else
{
	echo "not update";
}
}//main if

?>


<?php
if(isset($_POST['ticketform']))
{
	$costomer_id=$_POST["costomer_id"];
//updatation in ticket table;
$sql="update ticket set ticket_no='$_POST[ticket_no]', 	date='$_POST[date]', 	sector_from='$_POST[sector_from]', 	sector_to='$_POST[sector_to]',pnr_no='$_POST[pnr_no]', 	airline_name='$_POST[airline_name]', 	airline_no='$_POST[airline_no]', 	date_of_insertion='$_POST[date_of_insertion]', date_of_insertion=now(),	inserted_by='$user'  where ticket_id=$_POST[ticket_id]";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
if($result)
{
	echo"updat successfully";
	echo header("location:ticket_view.php?costomer_id=$_POST[costomer_id]");
}
else
{
	echo "not update";
}
}//end of main if;
 ?>
 
 
 <?php 
 if(isset($_POST['dependentform']))
 {
	 $costomer_id=$_POST["costomer_id"];
	 
	 //updatation in dependent table;
 echo $sql="update dependent set relationship='$_POST[relationship]', 	date_of_birth_of_dep='$_POST[date_of_birth_of_dep]',sex_of_dep='$_POST[sex_of_dep]',full_name_of_dep='$_POST[full_name_of_dep]', 	date_of_insertion=now(), inserted_by='$user' where dependent_id=$_POST[dependent_id] ";
 $result=mysqli_query($con,$sql) or die(mysqli_error($con));
if($result)
{
	echo"updat successfully";
	header("location:dependent_view.php?costomer_id=$_POST[costomer_id]");
}
else
{
	echo "not update";
}
 }//end of main if;
 ?>
 
 
 
  <?php 
 if(isset($_POST['documentform']))
 {
	
	 $document_type=$_POST["document_type"];
	 $document_id=$_POST["document_id"];
	 
	 //updatation in document table;
  $sql="update document set document_type='$document_type',date_of_insertion=now(),inserted_by='$user' where document_id='$document_id'";
 $result=mysqli_query($con,$sql) or die(mysqli_error($con));
if($result)
{
	echo"updat successfully";
	header("location:document_view.php?costomer_id=$_POST[costomer_id]");
}
else
{
	echo "not update";
}
 }//end of main if;
 ?>
 
 
 <?php
 //updation in daily expenditure table;
 if(isset($_POST["daily_expenses"]))
 {
	
	 	 			 	 	
	 $id =$_POST["id"];
	 $voucher_no=$_POST["voucher_no"];
	 $title =$_POST["title"];
	 $description=$_POST["description"];
	 $amount=$_POST["amount"];
	 
	
	 $sql="update daily_expenditure set voucher_no='$voucher_no',title='$title',description='$description',amount='$amount',date=now(),inserted_by='$user' where id='$id' ";
	 $result=mysqli_query($con,$sql) or die(mysqli_error($con));
	 if($result)
	 {
		 echo"updated suceesfully";
		 header('location:daily_expenditure_view.php');
		 
	 }
	 else
	 {
		 echo"not updated";
	 }
 }
 ?>
 
 
 
 <?php
 
 // Emplyee form update
 
if($_REQUEST['action']=='updateEmp'){
	$emp_id=$_REQUEST['emp_id'];
	$emp_name=$_POST['emp_name'];
	$emp_contact=$_POST['emp_contact'];
	$emp_address=$_POST['emp_address'];
	$emp_reference=$_POST['emp_reference'];
	$emp_email=$_POST['emp_email'];
	$emp_jion=$_POST['emp_join'];
	$emp_close=$_POST['emp_close'];
	
$sql=" update employee set emp_name='$emp_name', emp_contact='$emp_contact', emp_address='$emp_address', emp_reference='$emp_reference', emp_email='$emp_email', emp_join='$emp_join', emp_close='$emp_close' WHERE emp_id='$emp_id'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
if($result)
{
	header("location:employee_view.php?msg=Updated_Sucssesfully");
}
else
{
	echo "not update";
}
}//main if

?>



<?php
 
 // Salary form update
 
if(isset($_POST['salaryform']))
{
	$salary_id=$_REQUEST["$salary_id"];
	
	
$sql="update salary set	salary_id='$_POST[salary_id]' ,employee='$_POST[employee]',	month='$_POST[month]',	amount='$_POST[amount]', description='$_POST[description]' where salary_id='$salary_id' ";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
if($result)
{
	echo"update successfully";
	header("location:salary_view_all.php?msg=Updated Sucssesfully");
}
else
{
	echo "not update";
}
}//main if

?>




