<head><title>ONLINE TRAVEL AGENCY SYSTEM::EDIT DOCUMENT</title></head>
<script language="javascript" src="js/validation.js"></script>
<?php include("header.php");?>
<?php require_once('connection\connection.php'); ?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">EDIT DOCUMENT</h2>
  
<?php 
$sql="select*from document where document_id=$_GET[document_id]";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
$document_id=$row["document_id"]; 	
$costomer_id=$row["costomer_id"];
$document_type=$row["document_type"];
$document=$row["document"];
$inserted_by=$row["inserted_by"];
}

?>

 <p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="customer_view.php">Customer View&gt;&gt;</a><a href="document_view.php?costomer_id=<?php echo $costomer_id;?>">Document view</a><a href="document_edit.php?document_id=<?php echo $document_id;?>">&gt;&gt;document Edit</a></p> 
<form action="update.php" method="POST" name="form1" enctype="multipart/form-data" onsubmit="return document_validate();">
<input type="hidden"  name="document_id" value="<?php echo $document_id ;?>" />

<table width="545" border="0" align="center">
  <tr>
    <td width="49">&nbsp;</td>
    <td width="98">Customer id:</td>
    <td width="322"><input type="hidden" name="costomer_id" value=<?php echo $costomer_id;?> /><?php   echo $costomer_id;?></td>
    <td width="48">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DOCUMENT TYPE</td>
    <td><input type="text" name="document_type"  value="<?php  echo $document_type ;?>"/></td>
    <td>&nbsp;</td>
  </tr>
 
  <tr>
     <td>&nbsp;</td>
    <td><input type="submit" value="SAVE" name="documentform"><input type="reset" value="Clear" /></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
  </tr>
</table>
</form>
<?php include("footer.php");?>
