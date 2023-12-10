<head><title>customer view</title></head>

<?php require_once('header.php');
       require_once('connection\connection.php');
       ?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <div class="ph">CUSTOMER VIEW</div>
  <DIV class="ph2"><a href="index.php">home&gt;&gt;</a><a href="customer_view.php">customer_view</a></DIV>

<table width="1024"  class="table" border="0"   align="center">

  <tr class="header-tr">
<td width="80" align="center">MANIPULATION</td>
  <Td align="center" width="170">ACTION </a></Td>
    <td width="100"  align="center">PHOTO</td>
    <td width="27"  align="center">ID</td>
    <td width="59"  align="center">FULL NAME</td>
    <td width="27"  align="center"> S/O</td>
    <td width="76"  align="center">ADDRESS</td>
    <td width="71"  align="center">PHONE NUMBER</td>
    <td width="92"  align="center">PASSPORT NUMBER</td>
    <td align="center">STATUS </td>
  </tr>
  <tr>
  <td colspan="9"><hr /></td>
  </tr>
  <?php 
  $total=0;
  //RETRIVAL DATA FROM COSTOMER TABALE
  $sql="select*from costomer order by costomer_id desc";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{   
    $uploadimage=$row['uploadimage']; 
	$costomer_id=$row['costomer_id'];
	$full_name=$row['full_name'];
	$son_of=$row['son_of'];
	$status=$row['status'];
	$date_of_birth=$row['date_of_birth'];
	$place_of_birth=$row['place_of_birth'];
	$previous_nationality=$row['previous_nationality'];
	$present_nationality=$row['present_nationality'];
	$sex=$row['sex'];
	$marital_status=$row['marital_status'];
	$sect=$row['sect'];
	$religion =$row['religion'];
	$place_of_issue=$row['place_of_issue'];
	$qualification=$row['qualification'];
	$home_address=$row['home_address'];
	$telephone_no=$row['telephone_no'];
	$purpose_of_travel=$row['purpose_of_travel'];
	$date_of_passport=$row['date_of_passport'];
	$passport_no=$row['passport_no'];
	$date_of_passport_expiry=$row['date_of_passport_expiry'];
	$duration_of_stay_in_kindom=$row['duration_of_stay_in_kindom'];
	$date_of_arrival =$row['date_of_arrival'];
	$date_of_departure=$row['date_of_departure'];
	$mode_of_payment=$row['mode_of_payment'];
	$relationship=$row['relationship'];
	$destination=$row['destination'];
	$carriers_name=$row['carriers_name'];
	$visa_no=$row['visa_no'];
	$date_of_insertion=$row['date_of_insertion'];
	$inserted_by=$_SESSION['username'];
	$total=$total+1;

?>
  <tr>
<td align="left" valign="top">
  <table  border="0">
  <tr>
    <td><a href=""<td align="left" valign="top" onClick="window.open('customer_detail.php?costomer_id=<?php echo $costomer_id;?>','msgWindow','toolbar=no, scrollbars=no, resizable=no, top=30, left=100, width=1000, height=640')"><img src="images/icon_view_new.gif" title="View Customer" /></a></td>
    
    
</td> <td align="left" valign="top"><a href="customer_edit.php?costomer_id=<?php echo $costomer_id?>"><img src="images/edit.png" title="Edit Customer" /></a></td> <td align="left" valign="top"><a href="delete.php?costomer_id=<?php echo $costomer_id ;?>" onclick="return confirm('Are you sure you want to delete?')"><img src="images/delete.png" title="Delete Customer" /></a></td>
  </tr>

  </table>
</td>
            <td align="left" valign="top">
  <table  border="0" style="background:#033; color:#FFF"> 
  <tr>
  <td width="74"  class="asad">Payment</td>
    <td width="71"><a href="payment.php?costomer_id=<?php echo $costomer_id;?>"><img src="images/file_add.png" width="20" height="20" alt="" title="Add Payment" /></a>/<a href="payment_view.php?costomer_id=<?php echo $costomer_id;?>"><img src="images/icon_view_new.gif" title="View Payment" /></a></td>
  </tr>
  <tr>
    <td class="asad">Ticket</td>
    <td><a href="ticket.php?costomer_id=<?php echo $costomer_id;?>"><img src="images/file_add.png" width="20" height="20" title="Add Ticket" /></a>/<a href="ticket_view.php?costomer_id=<?php echo $costomer_id;?>">  <img src="images/icon_view_new.gif" title="View Ticket" /></a></td>
  </tr>
  
  <tr>
    <td class="asad">Document</td>
    <td><a href="document.php?costomer_id=<?php echo $costomer_id;?>"><img src="images/file_add.png" width="20" height="20" title="Add Document" /></a>/<a href="document_view.php?costomer_id=<?php echo $costomer_id;?>">  <img src="images/icon_view_new.gif" title="View Document" /></a></td>
  </tr>
</table>
             </td>
  
    <td align="left" valign="top"><?php if ($uploadimage!=""){?><a href="photoupdate.php?costomer_id=<?php echo $costomer_id;?>"><img src="<?php echo $uploadimage;?>" width="100" height="113" /></a><?php } else {?><a href="photoupdate.php?costomer_id=<?php echo $costomer_id;?>"><img src="user/default.gif" width="100" height="100" /></a><?php }?></td>
    <td align="left" valign="top"><?php       echo  $costomer_id;                  ?></td>
    <td align="left" valign="top"><?php       echo  $full_name;                  ?></td>
    <td align="left" valign="top"><?php       echo  $son_of;                     ?></td>
    <td align="left" valign="top"><?php      echo  $home_address;               ?></td>
    <td align="left" valign="top"><?php       echo  $telephone_no;               ?></td>
    <td align="left" valign="top"><?php       echo  $passport_no;                ?></td>
    <td align="left" valign="top"><?php echo  $row['status'];?></td>
  </tr>
  <?php }?>
  <tr><td colspan="8" align="center">TOTAL CUSTOMERS:<?PHP echo $total ; ?></td></tr>
</table> 	 	 	  	 	 	 	 	 	 		 	 	 	 	 	 	
<br />
<?php //require_once('footer.php'); ?>
<?php include('footer.php');?>
