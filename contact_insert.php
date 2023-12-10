
<?php
include ("admin/connection/connection.php");

if(isset($_POST['save']))
{
$name=$_POST['name'];	
$company=$_POST['company'];	
$email=$_POST['email'];	
$topic=$_POST['topic'];	
$phone=$_POST['phone'];	
$comments=$_POST['comments'];	


$query_insert=mysqli_query($con,"INSERT INTO contact(`name`, `company`, `email`,  `topic`,  `phone`,  `comments`) VALUES ('$name', '$company', '$email', '$topic', '$phone', '$comments')" )  or die(mysqli_error($con));
header("location:Thanks.php?msg=Success");

}
?>