
<?php
require_once('connection/connection.php');
?>
<?php  include('session.php');
?>

<?php 
//insertion into admin table
    if(isset($_REQUEST['adminform']))
	{

	
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$address=$_POST['address'];
$phone_no=$_POST['phone_no'];
$designation=$_POST['designation'];

$sql="insert into admin (username,password,email,address,phone_no,designation) values('$username','$password','$email','$address', '$phone_no','$designation')" or die(mysqli_error($con));
$result=mysqli_query($con,$sql);

if($result)
{ echo "data inserted sucessfully";
header('location:show_all_admin.php?msg=Sucessfully inserted');
}
else
     {  
	    echo "not inserted";
     }
	}
	?> 

