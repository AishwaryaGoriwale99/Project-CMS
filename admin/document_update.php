<head><title>ONLINE TRAVEL AGENCY SYSTEM::DOCUMENT UPDATE</title></head>
<script language="javascript" src="js/validation.js"></script>
<?php include('header.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">UPDATE DOCUMENT</h2>
 
<?php
require_once('connection\connection.php');
  $sql="select*from document where document_id='$_GET[document_id]'";//here we get id as a hyperlink
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	$document_id=$row['document_id'];
	$uploadimage=$row["document"];
	$costomer_id=$row["costomer_id"];
	
}
?>
<p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="customer_view.php">Customer View&gt;&gt;</a><a href="document_view.php?costomer_id=<?php echo $costomer_id; ?>">document view&gt;&gt;</a><a href="document_update.php?document_id=<?php echo $_GET['document_id']; ?>">document update</a></p>
<?php
//here data come from form;
 if(isset($_POST['updatephoto']))
	{
 
 $image=$_FILES['userfile']['name']; 
 $file_size=$_FILES['userfile']['size'];
 $tmp_file_name=$_FILES['userfile']['tmp_name'];
echo"<br>";
$uploaddir='user/'.$image;
$uploadimage=$uploaddir;//specify the full path for file;

if(move_uploaded_file($tmp_file_name,$uploadimage))
{
	
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

$sql ="update document set document='$uploadimage' where document_id='$_POST[document_id]'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
header("location:document_view.php?costomer_id=$costomer_id");


	}


?>
<table width="500" border="0">
  

  <tr>
    <td width="3%">&nbsp;</td>
    <td width="22%">&nbsp;</td>
    <td width="33%" align="right"><?php if ($uploadimage!=""){?>
      <a href="document_update.php?document_id=<?php echo $document_id;?>"><img src="<?php echo $uploadimage;?>" width="100" height="113" /></a>
      <?php } else {?>
      <a href="document_update.php?document_id=<?php echo $document_id;?>"><img src="user/default.gif" width="100" height="100" /></a>
      <?php }?></td>
    <td width="42%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right" valign="top"><strong>Update Doucment</strong></td>
    <td align="left" valign="top"><form method="post" action="" enctype="multipart/form-data" name="form1"  onsubmit="return file_validate();"><input type="file" name="userfile" id="userfile" /><input type="hidden" name="updatephoto" /><input type="hidden" name="document_id" value="<?php echo $document_id;?>" /> <input type="submit" /></form></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<?php include('footer.php');?>