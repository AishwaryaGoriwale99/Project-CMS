
<?php
require_once('connection/connection.php');
require("functions.php");
?>
<?php  include('session.php');
?>





<?php 
//insertion into costomer table
 if(isset($_POST['costomerform']))
 {	
    if(isset($_POST['costomerform']))
	{
 
 $image=$_FILES['userfile']['name'];
 $file_size=$_FILES['userfile']['size'];
 $tmp_file_name=$_FILES['userfile']['tmp_name'];
 
 
echo"<br>";
$uploaddir='user/'.$image;
$uploadimage=$uploaddir;//specify the full path for file;

if(move_uploaded_file($tmp_file_name,$uploadimage))
{
	echo"file upload successfully";
}
else
{
if($_FILES['userfile']['error']>0)
     {
	echo"error occured";
     }
if($_FILES['userfile']['size']>2097151)
         {
	echo"file size is too large";
         }
}// end of else
echo"<pre>";


echo"<p>here some debugging code</p>";
print_r($_FILES['userfile']);
echo"</pre>";
	}
	 	 	 		 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	
$full_name=$_REQUEST['full_name'];
$son_of=$_REQUEST['son_of'];
$status=$_REQUEST['status'];
$date_of_birth=$_REQUEST['date_of_birth'];
$place_of_btirh=$_REQUEST['place_of_birth'];
$previous_nationality=$_REQUEST['previous_nationality'];
$present_nationality=$_REQUEST['present_nationality'];
$sex=$_REQUEST['sex'];
$marital_status=$_REQUEST['marital_status'];
$sect=$_REQUEST['sect'];
$religion=$_REQUEST['religion'];
$place_of_issue=$_REQUEST['place_of_issue'];
$qualification=$_REQUEST['qualification'];
$profession=$_REQUEST['profession'];
$home_address=$_REQUEST['home_address'];
$telephone_no=$_REQUEST['telephone_no'];
$purpose_of_travel=$_REQUEST['purpose_of_travel'];
$date_of_passport=$_REQUEST['date_of_passport'];
$passport_no=$_REQUEST['passport_no'];
$date_of_passport_expiry=$_REQUEST['date_of_passport_expiry'];
$duration_of_stay_in_kindom=$_REQUEST['duration_of_stay_in_kindom'];
$date_of_arrival=$_REQUEST['date_of_arrival'];
$date_of_departure=$_REQUEST['date_of_departure'];
$mode_of_payment=$_REQUEST['mode_of_payment'];
$relationship=$_REQUEST['relationship'];
$destination=$_REQUEST['destination'];
$carriers_name=$_REQUEST['carriers_name'];
$visa_no=$_REQUEST['visa_no'];

$sql="insert into costomer (uploadimage, full_name, son_of,status, date_of_birth, place_of_birth, previous_nationality, present_nationality, sex, marital_status, sect, religion, place_of_issue, qualification, home_address,profession ,telephone_no, purpose_of_travel, date_of_passport, passport_no, date_of_passport_expiry, duration_of_stay_in_kindom, date_of_arrival, date_of_departure, mode_of_payment, relationship, destination, carriers_name,visa_no , inserted_by) values('$uploadimage', '$full_name', '$son_of','$status', '$date_of_birth', '$place_of_btirh', '$previous_nationality', '$present_nationality', '$sex', '$marital_status', '$sect', '$religion', '$place_of_issue', '$qualification', '$profession','$home_address', '$telephone_no', '$purpose_of_travel', '$date_of_passport', '$passport_no', '$date_of_passport_expiry', '$duration_of_stay_in_kindom', '$date_of_arrival', '$date_of_departure', '$mode_of_payment', '$relationship', '$destination', '$carriers_name','visa_no', '$user')" or die(mysqli_error($con));
$result=mysqli_query($con,$sql);
if($result)
{ echo"data inserted sucessfully";
header('location:customer_view.php');
}
else
     {  
	    echo "not inserted";
     }
}

?>

<?php
// insertion for  payment table
 if(isset($_POST['paymentform']))
 {	
$costomer_id=$_REQUEST['costomer_id'];  	
$payment_type=$_REQUEST['payment_type'];
$amount=$_REQUEST['amount'];
$description=$_REQUEST['description'];
//$date_of_insertion=$_REQUEST['date_of_insertion'];
//$_SESSION['curren_user'] = "asad";
//$inserted_by=$_SESSION['username'];
$sql="insert into payment(costomer_id,payment_type,amount,description,inserted_by)values($costomer_id,'$payment_type','$amount','$description',$user)";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));

$payment_id=getMaxID('payment_id','payment');

 insertCash($amount,"Dr",$description);
 
 $maxCashID=getMaxID('cashID','cash');
 mysqli_query($con,"INSERT INTO transaction(cashID,paymentID) VALUES ('$maxCashID', '$payment_id')" ) or die("Error in salary Query :: ".mysqli_error($con));
 
if($result)
	{ echo"data is inserted successfully";
	header('location:billcc.php?payment_id=$payment_id');
	}
	else
	{ echo "error occured";
	}

 }
?>
<?php
// inserttion for ticket table
if(isset($_POST['ticketform']))
 		 	 	 		 	 	
{
	$costomer_id=$_REQUEST['costomer_id'];
	$ticket_no=$_REQUEST['ticket_no'];
	$date=$_REQUEST['date'];
	$sector_from=$_REQUEST['sector_from'];
	$sector_to=$_REQUEST['sector_to'];
	$pnr_no=$_REQUEST['pnr_no'];
	$airline_name =$_REQUEST['airline_name'];
	$airline_no=$_REQUEST['airline_no'];

	$sql="insert into ticket(ticket_no ,costomer_id, date ,sector_from ,sector_to ,airline_name ,airline_no,pnr_no,inserted_by) values('$ticket_no',$costomer_id ,'$date' ,'$sector_from' ,'$sector_to' ,'$airline_name','$airline_no','$pnr_no',$user)";
	$result=mysqli_query($con,$sql) or die(mysqli_error($con));
 
 insertCash($amount,"Cr",$description);
 $maxCashID=getMaxID('cashID','cash');
 mysqli_query($con,"INSERT INTO transaction(cashID, expenseID) VALUES ('$maxCashID', '$voucher_no')" ) or die("ddd".mysqli_error($con));
 if($result)
	{ echo"data is inserted successfully";
	header('location:ticket_view_all.php?costomer_id=$costomer_id');
	}
	else
	{ echo "error occured";
	}
	
}
?>


<?php //insertion in daily expenditure form

if(isset($_POST["daily_expenses"]))
{
  $voucher_no=$_POST["voucher_no"];
  $title=$_POST["title"];
  $description=$_POST["description"];
 $amount=$_POST["amount"];
 $sql="insert into daily_expenditure(voucher_no,title,description,amount,inserted_by)values('$voucher_no','$title','$description','$amount','$user')";
 $result=mysqli_query($con,$sql) or die(mysqli_error($con));
 
 
	$id=getMaxID('id','daily_expenditure');
	
 insertCash($amount,"Cr",$description);
 $maxCashID=getMaxID('cashID','cash');
 mysqli_query($con,"INSERT INTO transaction(cashID, expenseID) VALUES ('$maxCashID', '$id')" ) or die("Error".mysqli_error($con));
 
 
 if($result)
	{ echo"data is inserted successfully";
	header('location:daily_expenditure_view.php');
	}
	else
	{ echo "error occured";
	}
}
?>

<?php 
//insertion in document table
if(isset($_POST['documentform']))
{
	
	 if(isset($_POST['document_type']))
	{
 
 $document=$_FILES['document1']['name'];
 $file_size=$_FILES['document1']['size'];
 $tmp_file_name=$_FILES['document1']['tmp_name'];
echo"<br>";
$uploaddir='user/'.$document;
$upload_document=$uploaddir;//specify the full path for file;

if(move_uploaded_file($tmp_file_name,$upload_document))
{
	echo"file upload successfully";
}
else
{
if($_FILES['document']['error']>0)
     {
	echo"error occured";
     }
if($_FILES['document']['size']>2097151)
         {
	echo"file size is too large";
         }
}// end of else
echo"<pre>";


echo"<p>here some debugging code</p>";
print_r($_FILES['document']);
echo"</pre>";
	}
	$costomer_id=$_POST["costomer_id"];
	
	$document_type=$_POST["document_type"];
	$document=$_POST["document1"];
	$sql="insert into document(costomer_id,document_type,document,inserted_by)values($costomer_id,'$document_type','$upload_document',$user);";
	$result=mysqli_query($con,$sql) or die(mysqli_error($con));
	if($result)
	{ echo"data is inserted successfully";
	header('location:document_view_all.php');
	}
	else
	{ echo "error occured";
	}
}
?>




<?php //insertion in salary form

if(isset($_POST["salaryform"]))
{
	
	$employee=$_POST["employee"];
  $month=$_POST["month"];
  $amount=$_POST["amount"];
  $description=$_POST["description"];
 $sql="insert into salary(employee,month,amount,description,inserted_by)values('$employee','$month','$amount','$description','$user')";
 $result=mysqli_query($con,$sql) or die(mysqli_error($con));
 
 $salary_id=getMaxID('salary_id','salary');

 insertCash($amount,"Cr",$description);
 
 $maxCashID=getMaxID('cashID','cash');
 mysqli_query($con,"INSERT INTO transaction(cashID,salaryID) VALUES ('$maxCashID', '$salary_id')" ) or die("Error in salary Query :: ".mysqli_error($con));
 
 if($result)
	{ echo"data is inserted successfully";
	header('location:salary_view_all.php');
	}
	else
	{ echo "error occured";
	}
 
}
?>