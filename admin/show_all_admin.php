<head><title>Employee view</title></head>

<?php require_once('header.php');?>
<?php
    require_once('connection\connection.php');
?>
<?php
include('session.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
<div class="ph">Admin VIEW</div>
  <DIV class="ph2"><a href="index.php">home&gt;&gt;</a><a href="show_all_admin.php">ALL Admin</a></DIV>

<table width="1024"  class="table" border="0"   align="center">

  <tr class="header-tr">
<td width="27" align="center">Action</td>
    
    <td width="27"  align="center">ID</td>
    <td width="80"  align="center">USERNAME</td>
    <td width="80"  align="center">Password</td>
    <td width="100"  align="center">email</td>
    <td width="100"  align="center">Address</td>
    <td width="92"  align="center">Phone No</td>
    <td align="center">Designation </td>
  </tr>
  <tr>
  <td colspan="9"><hr /></td>
  </tr>
  <?php 
  $total=0;
  //RETRIVAL DATA FROM Admin TABALE
  $sql="select*from admin";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{   
	$user_id=$row['user_id'];
    $username=$row['username']; 
	$password=$row['password'];
	$email=$row['email'];
	$address=$row['address'];
	$phone_no=$row['phone_no'];
	$designation=$row['designation'];
	$total=$total+1;

?>
  <tr>
<td align="left" valign="top">
  <table  border="0">
  <tr>
    <td align="left" valign="top"><a href="delete.php?action=Deleteadmin&user_id=<?php echo $user_id ;?>" onclick="return confirm('Are you sure you want to delete?')"><img src="images/delete.png" title="Delete Admin" /></a></td>
  </tr>

  </table>
</td>
            
   
    
    <td align="center" valign="top"><?php       echo  $user_id;            ?></td>

    </td>
  
    <td align="center" valign="top"><?php       echo  $username;           ?></td>
    <td align="center" valign="top"><?php       echo  $password;           ?></td>
    <td align="center" valign="top"><?php      echo  $email;               ?></td>
    <td align="center" valign="top"><?php      echo  $address;             ?></td>
    <td align="center" valign="top"><?php      echo  $phone_no;            ?></td>   
    <td align="center" valign="top"><?php       echo  $designation;        ?></td>
  </tr>
  <?php }?>
  <tr><td colspan="8" align="center">TOTAL Admin:<?PHP echo $total ; ?></td></tr>
</table> 	 	 	  	 	 	 	 	 	 		 	 	 	 	 	 	
<br />
<input type="button" onclick="window.print() ;"  value="print"/>
<?php //require_once('footer.php'); ?>
<?php include('footer.php');?>
