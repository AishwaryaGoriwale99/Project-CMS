<head><script language="javascript" type="text/javascript">
function change()
{
var a=document.form1.new_password.value;
document.write(a);
}
</script>
<style>
p{
	text-align:center;
	color:red;
	font-family:Georgia, "Times New Roman", Times, serif;
	size:10px;
}
</style>
</head>
<?php  include('header.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">ACCOUNT SETTINGS</h2>
  <p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="passwordchange.php">account settings&gt;&gt;</a></p>
<?php
require_once('connection\connection.php');

 ?>
 <?php
 if(isset($_POST['change']))
 {
	 
	 $old=$_POST['old_password'];
	 $new=$_POST['new_password'];
	 $rnew=$_POST['r_password'];
$sql="select*from admin";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	$password=$row['password'];

}
if($old!=$password)
{
	echo"<p>your old password does not match</p>";
}
else if($new!=$rnew)
{
	echo"<p>new passwords do not match</p>";
}
else if(strlen($new)<6)
{ 
	echo"<p>minimum lenth should be six characters</p>";
}
 else
 {
	$sql="update admin set password='$new'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con)); 
if($result)
{
	echo "updatesucessfully";
}
else
{
	echo"error occered";
}
 }
    }//end of ifisset();
?>
<form name="form1" action="#" method="post" onSubmit="change();">
<table width="200" border="0"  align="center">
  <tr>
    <td>&nbsp;</td>
    <td>Old password:</td>
    <td><input type="text" name="old_password" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>New password:</td>
    <td><input type="text" name="new_password" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Retype new password:</td>
    <td><input name="r_password"  type="text" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center"><input type="submit" value="save" name="change" /></td>
    
  </tr>
</table>
</form>

<?php include('footer.php'); ?>