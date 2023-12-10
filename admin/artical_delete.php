  <?php
include('connection/connection.php');
?>


<?php


//delete record from salary table;
 if(isset($_GET["page_id"]))
 {
	 $page_id=$_GET['page_id'];
 $sql="DELETE from pages where page_id='$page_id'";
 $result=mysqli_query($con,$sql) or die(mysqli_error($con));
 if($result)
 { 
	 
	       echo"record deleted successfully";
		   header("location:artical_view.php");
	 }
	 else
	 {
		 echo"record is not deleted";
	 }
 
 
 }
 
  ?>