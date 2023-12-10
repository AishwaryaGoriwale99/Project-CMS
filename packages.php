<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php require('inc_head.php'); ?>
</head>

<body>

<div class="wrapper">
    
        <?php require('inc_top.php'); ?>
        
        <?php include('inc_menu.php'); ?>
        
      	<div class="content">
        <div class="page_headings">
            
            <div class="center">
                <h1 align="center">packages</h1>
                <h2 align="center">Any Package you want we provide you high services with full conformation.</h2>
                <h3 align="center"> * * * * * * * * * * * * * * * * * * * *</h3> 
                
      
            </div>
        </div>
         <?php 
		include ("admin/connection/connection.php");
	$sql=mysqli_query($con,
	"SELECT * FROM pages WHERE page_type='packages' ORDER BY page_id DESC ") or die(mysqli_error($con));
	while($resultP=mysqli_fetch_array($sql)) { ?>
       
        <div class="" align="center">
        	<h2><?php echo $resultP['title']; ?></h2>
           <p><img src="admin/uploaded/<?php  echo $resultP['picture']; ?>" width="700" height="369"></p>
		   <h2><?php echo $resultP['description']; ?></h2>
      
        </div>
        
        <h1 align="center"> - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - </h1>
        <?php } ?>

        
  
  
  
  
  </div>
     <?php include('inc_footer.php'); ?>
</div>
</body>

</html>
	