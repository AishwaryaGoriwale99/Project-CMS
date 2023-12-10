<head><title>ONLINE TRAVEL AGENCY SYSTEM::PHOTO UPDATE</title></head>
<script language="javascript" src="js/validation.js"></script>
<?php include('header.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">PHOTO UPDATE</h2>
  <p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="customer_view.php">customer view&gt;&gt;</a><a href="photoupdate.php">photo update</a></p>
<?php
require_once('connection\connection.php');
  $sql="select*from costomer where costomer_id='$_REQUEST[costomer_id]'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	$costomer_id=$row['costomer_id'];
	$uploadimage=$row['uploadimage'];
	
	
}
?>

<?php
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

$sql ="update costomer set uploadimage='$uploadimage' where costomer_id='$_POST[costomer_id]'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));


	}


?>
<table width="500" border="0">
  

  <tr>
    <td width="3%">&nbsp;</td>
    <td width="22%">&nbsp;</td>
    <td width="33%" align="right"><?php if ($uploadimage!=""){?>
      <a href="photoupdate.php?costomer_id=<?php echo $costomer_id;?>"><img src="<?php echo $uploadimage;?>" width="100" height="113" /></a>
      <?php } else {?>
      <a href="photoupdate.php?costomer_id=<?php echo $costomer_id;?>"><img src="user/default.gif" width="100" height="100" /></a>
      <?php }?></td>
    <td width="42%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td align="right" valign="top"><strong>Update photo</strong></td>
    <td align="left" valign="top"><form method="post" action="" enctype="multipart/form-data" name="form1" onsubmit="return file_validate();"><input type="file" name="userfile" id="userfile" /><input type="hidden" name="updatephoto" /><input type="hidden" name="costomer_id" value="<?php echo $costomer_id;?>" /> <input type="submit" /></form></td>
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