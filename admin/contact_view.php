<head><title>ONLINE TRAVEL AGENCY SYSTEM::</title></head>
<?php include('header.php');?>
<?php
require_once('connection\connection.php');
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">Artical VIEW</h2>

<table width="100%" border="0" align="center">

  <tr>
    <td width="80">CONTACT ID</td> 	 	 	 	 	 	 	
    <td width="90">NAME</td>
    <TD width="80"> COMPANY</TD>
    <td width="100">EMAIL</td>
    <td width="90">TOPIC</td>
    <td width="90">PHONE</td>
   <td width="200">COMMENTS</td>
   <td width="200">DATE & TIME</td>
    <?php /*?><TD class="specail">ACTION </TD><?php */?>
  </tr>
                  
  
  <tr>
  <?php
$sql=mysqli_query($con,"select * from contact ORDER BY contact_id desc")or die("Query Error");
while($row=mysqli_fetch_array($sql)){
	$contact_id=$row['contact_id'];
	?>
     		<td><?php echo $row['contact_id']; ?></td
             ><td><?php echo $row['name']; ?></td>
            <td><?php echo $row['company']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['topic']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['comments']; ?></td>
            <td><?php echo $row['date']; ?></td>
            <?php /*?><td><a href="#">Delete</a> <td></td></td><?php */?>


         </tr>
  <?php }?>
  
</table> 

 <?php include('footer.php');?>