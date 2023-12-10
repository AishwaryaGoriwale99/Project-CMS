<head><title>ONLINE TRAVEL AGENCY SYSTEM::ADD DOCUMENT</title></head>
<script language="javascript" src="js/validation.js"></script>
<?php include("header.php");
include("connection/connection.php");
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">ADD DOCUMENT</h2>
  <p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="customer_view.php">Customer View&gt;&gt;</a></a><a href="document.php">add document</a>></p>
<form action="insert.php" method="post" name="form1" onsubmit="return document_validate();" enctype="multipart/form-data">
<fieldset >
<legend>Document Info</legend>
<table width="545" border="0" align="center">

  <tr>
    <td width="49">&nbsp;</td>
    <td width="98">Customer id:</td>
    <td width="322"><input type="hidden" name="costomer_id" value= <?php echo $_REQUEST['costomer_id'];?> />
	
	<?php $cID=$_REQUEST['costomer_id']; $s=mysqli_query($con,"SELECT * FROM costomer WHERE costomer_id='$cID'");  
	$d=mysqli_fetch_array($s);
	 echo $d['full_name']; ?></td>
  
   <td width="48">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DOCUMENT TYPE</td>
    <td><input type="text" name="document_type" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DOCUMENT</td>
    <td><input type="file" name="document1"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
  <td>&nbsp; </td>
  <td>&nbsp; </td>
     
    <td ><input type="submit" value="SAVE" name="documentform"><input type="reset" value="Clear" /></td>
   <td>&nbsp; </td> 
  </tr>
</table>
</fieldset>
</form>
<?php include("footer.php");?>
