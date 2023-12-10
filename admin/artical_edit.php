<head><title>ONLINE TRAVEL AGENCY SYSTEM::EMPLOYEE EDIT</title></head>
<link rel="stylesheet" href="css/styles.css" type="text/css"/>
<link href="datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="datepicker/core.js" type="text/javascript"></script>
 <script src="js/validation.js" type="text/javascript"></script>
<?php include('header.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">EMPLOYEE EDIT</h2>
  
<?php
require_once('connection\connection.php');
?>

<?php

$page_id=$_GET['page_id'];
  $sql="select * from pages where page_id='$page_id'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
	  
	  $title=$row["title"];
	  $description=$row["description"];

?>

<form name="form1" method="post" action="update.php?action=updateArtical" enctype="multipart/form-data" >
<input type="hidden" name="page_id" value="<?php echo $page_id; ?>" />
<fieldset>
<legend>personal info</legend>
<table width="100%" border="0" align="center">


  <tr>
    <td width="36%">&nbsp;</td> 
    <td width="16%">TITLE:</td>
    <td width="40%"><input type="text" name="title"  value="<?php echo $title ;?>"/></td>
    <td width="8%">&nbsp;</td>
  </tr>
  <tr> 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 		 	 	 	 	 	
    <td>&nbsp;</td>
    <td>DESCRIPTION:</td>
    <td><textarea name="description" cols="100" rows="8"  class="ckeditor"   id="description"><?php echo $description ;?></textarea></td>
    <td>&nbsp;</td>
  </tr>
 
    <td>&nbsp;</td>
    <td><input type="submit" value="submit" name="articalform" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>
</form>
<?php include('footer.php'); ?>
