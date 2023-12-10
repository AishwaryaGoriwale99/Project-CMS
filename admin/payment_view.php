<head><title>ONLINE TRAVEL AGENCY SYSTEM::PAYMENT LIST</title></head>
<?php include('header.php');?>
<?php
require_once('connection\connection.php');
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">PAYMENT VIEW</h2>
  <p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="customer_view.php">Customer View&gt;&gt;</a><a href="payment_view.php?costomer_id=<?php echo $_GET['costomer_id']; ?>">payment view</a></p>

<table width="100%" border="0" align="center">

  <tr>
 
    <td>PAYMENT ID</td>
    <td>CUSTOMER ID</td>
    <TD>PAYMENT TYPE</TD>
    <td>AMOUNT</td>
    <td>DESCRIPTION</td>
    <td>DATE OF INSERTION</td>
    <td>INSERTED BY</td>
     <TD   class="specail">ACTION </TD>
    
  </tr>
  <?php 
  $sql="select*from payment where costomer_id='$_GET[costomer_id]'";
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
  if(mysqli_num_rows($result)<1)
  {
	  echo"<script type='text/javascript'>alert('No payment found');
	  document.location='customer_view.php'</script>";
	 
  }
  while($row=mysqli_fetch_array($result))
  { 	 	
	  $payment_id=$row["payment_id"];
	  $costomer_id=$row["costomer_id"];
	  $payment_type=$row["payment_type"];
	  $amount=$row["amount"];
	  $description=$row["description"];
	  $date_of_insertion=$row["date_of_insertion"];
	  $inserted_by=$row["inserted_by"];
	 
  ?>
  <tr>
  
  
  
    <td><?php       echo $payment_id;         ?></td>
    <td><?php       echo $costomer_id;       ?></td>
    <td><?php       echo $payment_type;       ?></td>
    <TD><?php       echo $amount;             ?></td> 
    <TD><?PHP       echo $description;        ?></TD>          
    <td><?php       echo $date_of_insertion;  ?></td>
    <td><?php       echo $inserted_by?></td>
    <td width="60"><a href="payment_edit.php?payment_id=<?php echo $payment_id;?>"><img src="images/edit.png" title="Edit payment" /></a>&nbsp;&nbsp;<a href="delete.php?payment_id=<?php echo $payment_id ;?>" onclick="return confirm('Are you sure you want to delete?')"><img src="images/delete.png" title="Delete payment" /></a></td>
   
  </tr>
  <?php }?>
</table> 
<br />
<input type="button" value="print" onclick="window.print() ;" />
 <?php include('footer.php');?>