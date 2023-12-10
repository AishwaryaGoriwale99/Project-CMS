<head><title>ONLINE TRAVEL AGENCY SYSTEM::</title></head>
<?php include('header.php');?>
<?php
require_once('connection\connection.php');
?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">Artical VIEW</h2>

<table width="100%" border="0" align="center">

  <tr bordercolor="#FFFFFF">
    <td width="86" bordercolor="#FFFFFF" >ARTICAL ID</td> 	 	 	 	 	 	 	
    <td width="105">TITLE</td>
    <TD width="99"> DESCRIPTION</TD>
    <td width="179">PAGE TYPE</td>
    <td width="99">PICTURE</td>
    <TD class="">ACTION </TD>
  </tr>
                  
  
  <tr>
  <?php
$sql=mysqli_query($con,"select * from pages ORDER BY 'Aid' DESC")or die("Query Error");
while($row=mysqli_fetch_array($sql)){
	$page_id=$row['page_id'];
	?>
     		<td><?php echo $row['page_id']; ?></td
             ><td><?php echo $row['title']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['page_type']; ?></td>
           <td><img src="uploaded/<?php  echo $row['picture']; ?>" width="120" height="100"></td>
            <td><a href="artical_delete.php?action=Delete&page_id=<?php echo $page_id; ?>" onclick="return confirm('Are you sure you want to delete?')"><img src="images/delete.png" title="Delete Artical" /></a><td><a href="artical_edit.php?page_id=<?php echo $page_id?>"><img src="images/edit.png" title="Edit Customer" /></a></td> <td align="left" valign="top"></td></td>


         </tr>
  <?php }?>
  
</table> 

 <?php include('footer.php');?>