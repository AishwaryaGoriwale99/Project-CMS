<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<?php require('inc_head.php'); ?>
</head>

<body>

<div class="wrapper">
    
        <?php require('inc_top.php'); ?>
        
        <?php include('inc_menu.php'); ?>
              <?php 
		include ("admin/connection/connection.php");
		$id=isset($_GET['id'])? $_GET['id'] : "" ;
		if($id==""){
		$sql1=mysqli_query($con,"SELECT * FROM pages WHERE page_type='term_condition' ORDER BY 'date'") or die(mysqli_error($con));
		}
		else {
		$sql1=mysqli_query($con,"SELECT * FROM pages WHERE page_type='term_condition'") or die(mysqli_error($con));			
		}
		$resultP1=mysqli_fetch_array($sql1);
		?>
      	<div class="content">
        <div class="page_headings">
            <div class="left">&nbsp;</div>
            <div class="right">
              <h1><?php echo $resultP1['title']; ?></h1>
                <h2>The Term and condition of the Employers are conyed to the internding emigrants which approximately as under.</h2></div>
        </div>
         <?php include("inc_left.php"); ?> 
        <div class="right">
            <a name='error'></a>                        <form enctype="multipart/form-data" method="post" action="http://www.shirazitravels.com/contact" class="contact_form">
                <ul>
                   <?php echo $resultP1['description']; ?>
                </ul>
                <p style="text-align:left";>&nbsp;</p>
            </form>
        </div>
    </div>
     <?php include('inc_footer.php'); ?>
</div>
</body>

</html>
	