<head><title>ONLINE TRAVEL AGENCY SYSTEM::DETAILS </title>
<style>
.dec
{
	width:400;
	height:250PX;
	margin-left:300PX;
	border:#03F;
	border-width:20px;
	border-style:solid;
	border-radius:20px;
	text-align:center;	
	background:#CCF;
	margin-top:2PX;
	margin-bottom:2PX;
	

}
p
{
	text-align:center;
	height:5px;
	font-size:12px;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-weight:bold;

	

}


</style>
</head>
<?php  include('header.php');?>
  <link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">DETAILS</h2>
  <div class="ph2"><a href="index.php">home&GT;&gt;</a><a href="#">total detail</a> </div>
<?php
require_once('connection\connection.php');

 ?>
 <?php
 if(isset($_GET['tc']))
 {
	 $tc=0;
$sql="select*from costomer";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	$tc=$tc+1;
}
$a="<div class=\"dec\" align=\"center\"><p>TOTAL CUSTOMER FOUNDED=$tc</p></div>";
echo $a;
 }

?>




<?php
//total tickets
 if(isset($_GET['tt']))
 {
	 $tc=0;
$sql="select*from ticket";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	$tc=$tc+1;
}
$a="<div class=\"dec\" align=\"center\"><p>TOTAL TICKETS FOUNDED=$tc</p></div>";
echo $a;
 }

?>



<?php
//total payment
 if(isset($_GET['tp']))
 {
	  //total payments and total amounts;
	 $tc=0;
	 $total_amount=0;
	
$sql="select*from payment";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	$amount=$row['amount'];
	$tc=$tc+1;
	$total_amount=$total_amount+$amount;
}
//for tiket payments
$tick_amounts=0;
$sql="select*from payment where payment_type='ticket'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	$amount=$row['amount'];
	$tick_amounts=$tick_amounts+$amount;
}

//for visa payments
$visa_amounts=0;
$sql="select*from payment where payment_type='visa'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	$amount=$row['amount'];
	$visa_amounts=$visa_amounts+$amount;
}
$other_amounts=0;
$sql="select*from payment where payment_type='other'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	$amount=$row['amount'];
	$other_amounts=$other_amounts+$amount;
}
$a="<div class=\"dec\" align=\"center\"><p>TOTAL PAYMENTS FOUNDED=$tc</p><br><p>TICKET AMOUNT=$tick_amounts</p><br><p>VISA AMOUNTS=$visa_amounts</p><br><p><u>OTHER AMOUNTS=$other_amounts</u></p><br><p><h5>TOTAL AMOUNT=$total_amount</h5></p></div>";
echo $a;
 }

?>
<?php
//total vouchers
 if(isset($_GET['tv']))
 {
	 $tc=0;
	 $total_amount=0;
$sql="select*from daily_expenditure";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	$amount=$row['amount'];
	$tc=$tc+1;
	$total_amount=$total_amount+$amount;
}
$a="<div class=\"dec\" align=\"center\"><p>TOTAL VOUCHERS FOUNDED=$tc<br>TOTAL AMOUNT=$total_amount<p></div>";
echo $a;
 }

?>


<?php
//total Employee

 if(isset($_GET['te']))
 {
	 $te=0;
	 
$sql="select*from employee";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
$te=mysqli_num_rows($result);
// while($row=mysqli_fetch_array($result))
// {
// 	$employee=$row['employee'];
// 	$te=$te+1;
// 	$total_employee=$total_employee+$employee;
// }
$a="<div class=\"dec\" align=\"center\"><p>TOTAL EMPLOYEE FOUNDED=$te</p></div>";
echo $a;
 }
?>

<?php include('footer.php');?>