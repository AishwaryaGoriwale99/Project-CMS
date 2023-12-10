<head><title>ONLINE TRAVEL AGENCY SYSTEM::</title>
<?php include('header.php'); ?></head>

<link rel="stylesheet" href="css/bar.css" type="text/css" />
<?php

require_once('connection\connection.php'); 

?>
<link href="datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="datepicker/core.js" type="text/javascript"></script>
<script language="javascript" src="js/validation.js"></script>

<h2 class="ph">ADD ARTICALS</h2>
  <p class="ph2">&nbsp;</p>
  
<form method="post" name="form1" enctype="multipart/form-data">
<fieldset>
<legend>ARTICALS INFORMATION</legend><table width="100%" border="0" align="center">
 <tr>
    <td width="40%">&nbsp;</td>
    <td width="13%">TITLE</td>
    <td width="37%"><input name="title" type="text" id="title"/></td>
    <td width="10%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Picture</td>
    <td><span class="control-label">
      <input name="file" type="file" id="file" value="" />
    </span></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td width="40%">&nbsp;</td>
    <td width="13%">Artical:</td>
    <td width="37%"><select name="page_type" id="page_type">
    <option value="-1">-SELECT ARTICAL-</option>
    <option value="home">HOME</option> 
    <option value="aboutus">ABOUT US</option> 
    <option value="packages">PACKAGES</option> 
    <option value="services">SERVICES</option> 
    <option value="career">CAREER</option> 
    <option value="news">NEWS</option> 
    <option value="packagepic">PACKAGES PICTURES</option> 
    <option value="term_condition">TERM & CONDITION</option> 
     
    </select></td>
    <td width="10%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Description:</td>
    <td><textarea name="description" cols="100" rows="8"  class="ckeditor"  id="description"></textarea></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td><input name="save" type="submit" id="save" value="submit" /></td>
    <td><a href="artical_view.php"><input type="button" value="back to list">
      <input type="reset" name="reset" value="clear" />
    </a></td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>
</form>
<?php
if(isset($_POST['save']))
{
$title=$_POST['title'];	
$description=$_POST['description'];	
$page_type=$_POST['page_type'];	

$dir='uploaded/';
$uploadfile=$dir.basename($_FILES['file']['name']);
if(move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)){
$filename=$_FILES['file']['name'];
}

$query_insert=mysqli_query($con,"INSERT INTO pages(`title`, `picture`, `page_type`,  `description`) VALUES ('$title', '$filename', '$page_type', '$description')" )  or die(mysqli_error($con));
}
?>
<?php include('footer.php');?>