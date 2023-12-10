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
            <div class="left">&nbsp;</div>
             
             <?php 
		include ("admin/connection/connection.php");
		$id=isset($_GET['id'])? $_GET['id'] : "" ;
		if($id==""){
		$sql1=mysqli_query($con,"SELECT * FROM pages WHERE page_type='services' ORDER BY 'date'") or die(mysqli_error($con));
		}
		else {
		$sql1=mysqli_query($con,"SELECT * FROM pages WHERE page_type='services'") or die(mysqli_error($con));			
		}
		$resultP1=mysqli_fetch_array($sql1);
		?>
            
            <div class="right">
                <h1><?php echo $resultP1['title']; ?></h1>
                <h2>Visit one of our offices and let one of our experienced travel and tour consultants guide you to your next adventure.</h2>
            </div>
        </div>
         <?php include("inc_left.php"); ?> 
        <div class="right">
            <a name='error'></a>                        <form enctype="multipart/form-data" method="post" action="http://www.almoqadastravel.com/contact" class="contact_form">
                <div class="right">
	        <p><img src="admin/uploaded/<?php  echo $resultP1['picture']; ?>" width="700" height="300"></p>
<!--<p>Need content for this page.</p>  -->      </div>
                <p style="text-align:left";>
                     <?php echo $resultP1['description']; ?>.</p>
                     
            </form>
        </div>
    </div>
     <?php include('inc_footer.php'); ?>
</div>
</body>

</html>
	