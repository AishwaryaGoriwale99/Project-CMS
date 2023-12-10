<head><title>ONLINE TRAVEL AGENCY SYSTEM::DAILY EXPENDITURE LIST</title></head>
<?php include('header.php');?>
<?php require_once('connection\connection.php'); ?>

<link rel="stylesheet" href="css/bar.css" type="text/css" />
<form name="form1">
  <h2 class="ph">VIEW VOUCHER</h2>
  <p class="ph2"><a href="index.php">HOME &gt;&gt;</a><a href="daily_expenditure_view.php">VIEW VOUCHER</a></p>
<table width="200" border="0">

  <tr>
    
    <td> ID</td>
    <td>VOUCHER</td>
    <td>TITLE</td>
    <td>DESCRIPTION</td>
    <td>AMOUNT</td>
    <td>DATE</td>
     <td>FROM CURRENT TO NEXT</td>
    <td>INSERTED BY</td>
    <td>ACTION</td>
  </tr>
<?php
$sum=0;
$sql="select*from daily_expenditure";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	$id=$row["id"]; 	
	$voucher_no=$row["voucher_no"]; 	
	$title=$row["title"]; 	
	$description=$row["description"]; 	
	$amount=$row["amount"]; 	
	$date=$row["date"]; 	
	$inserted_by=$row["inserted_by"];
	$sum=$sum+$row["amount"];
	
?>




  <tr>
    
    <td><?php echo $id;?></td>
    <td><?php echo $voucher_no;?></td>
    <td><?php echo $title;?></td>
    <td><?php echo $description;?></td>
    <td><?php echo $amount;?></td>
    <td><?php echo $date;?></td>
    <td><?php echo $sum;?></td>
    <td><?php $cID=$inserted_by; $s=mysqli_query($con,"SELECT * FROM admin WHERE user_id='$cID'");  
	$d=mysqli_fetch_array($s);
	 echo $d['username']; ?></td>
     
     <td><a href="daily_expenditure_edit.php?id=<?php echo $id;?>"><img src="images/edit.png" title="Edit document" /></a>&nbsp;&nbsp;<a href="delete.php?id=<?php echo $id ;?>" onclick="return confirm('Are you sure you want to delete?')"><img src="images/delete.png" title="Delete document" /></a></td>
  </tr>
  <?php 
  }?>
</table>
<br />
 <a href="javascript:;" style="color:#000"  onClick="window.open('printexpence.php?id=<?php echo $id; ?>','msgWindow','toolbar=no, scrollbars=no, resizable=no, top=30, left=100, width=1000, height=640')"> Print View </a>
</form>
<?php include('footer.php');?>