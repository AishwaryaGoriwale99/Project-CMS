

<?php   include('header.php');?>
<?php
include('connection/connection.php');
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">DOCUMENT VIEW</h2>
  <p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="customer_view.php">Customer View&gt;&gt;</a><a href="document_view_all.php">document view</a></p>

  


<table width="200" border="0">
 
  <tr>
   
    <td>Document id</td>
    <td>Customer id</td>
    <td>Document type</td>
    <td>Document</td>
    <td>FULL VIEW/PRINT</td>
    <td>Inserted_by</td>
     <td>ACTION</td>
  </tr>
 

<?php 
$sql="select*from document";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
if(mysqli_num_rows($result)<1)
  {
	  echo"<script type='text/javascript'>alert('No document found');
	  document.location='customer_view.php'</script>";
	 
  }
while($row=mysqli_fetch_array($result))
{
$document_id=$row["document_id"]; 	
$costomer_id=$row["costomer_id"];
$document_type=$row["document_type"];
$document=$row["document"];
$inserted_by=$row["inserted_by"];
?>

<tr>
   
    <td><?php echo "$document_id";?></td>
    <td><?php echo "$costomer_id";?></td>
    <td><?php echo "$document_type";?></td>
    <td><a href="document_update.php?document_id=<?php echo $document_id;?>"><img src="<?php echo $document;?>" width="100" height="113" /></a></td>
    <td>
    
    
    <a href="javascript:;" style="color:#000"  onClick="window.open('document_print.php?document=<?php echo $document; ?>','msgWindow','toolbar=no, scrollbars=no, resizable=no, top=30, left=100, width=1000, height=640')"> Print View </a>
    
    
    
    </td>
 <td><?php $cID=$inserted_by; $s=mysqli_query($con,"SELECT * FROM admin WHERE user_id='$cID'");  
	$d=mysqli_fetch_array($s);
	 echo $d['username']; ?></td>
     <td><?php /*?><a href="document_edit.php?document_id=<?php echo $document_id;?>"><img src="images/edit.png" title="Edit document" /></a><?php */?>&nbsp;&nbsp;<a href="delete.php?document_id=<?php echo $document_id ;?>" onClick="return confirm('Are you sure you want to delete?')"><img src="images/delete.png" title="Delete document" /></a></td>
   
  </tr>

<?php  } ?>
</table>










<?php include('footer.php');?>