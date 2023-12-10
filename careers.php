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
		$sql1=mysqli_query($con,"SELECT * FROM pages WHERE page_type='career' ORDER BY 'date'") or die(mysqli_error($con));
		}
		else {
		$sql1=mysqli_query($con,"SELECT * FROM pages WHERE page_type='career'") or die(mysqli_error($con));			
		}
		$resultP1=mysqli_fetch_array($sql1);
		?>
            
            <div class="right">
                <div class="right">
                  <h1>We need some expert staff</h1>
                  <h2>Fill the form and attach your CVs we will cantact you as soon as possible. if our partners need employees we can suggest you Free.</h2>
                </div>
                <h1>&nbsp;</h1>
                <h2></h2>
            </div>
        </div>
         <?php include("inc_left.php"); ?> 
        <div class="right">
            <a name='error'></a>                        <form enctype="multipart/form-data" method="post" action="Thanks.php" class="contact_form">
                <div class="right">
	        <p>&nbsp; </p>
	        <p> <span>
	          <input type="text" name="name" value="Name *" onblur="_hint(this,'Name *',1)" onclick="_hint(this,'Name *',0)" class="text" />
	          </span>
	          <input type="text" name="phone2" value="Phone *" onblur="_hint(this,'Phone *',1)" onclick="_hint(this,'Phone *',0)" class="text" />
	        </p>
            <p> <span>
              <input type="text" name="email"  value="Email *" onblur="_hint(this,'Email *',1)" onclick="_hint(this,'Email *',0)" class="text" />
              </span><span>
                <input type="file" class="news_blog_post"  value="Attach Your CV" />
              </span> </p>
            <p>
              <textarea name="experiencee" cols="50" rows="10" id="experiencee" onblur="_hint(this,'Comments',1)" onclick="_hint(this,'Comments',0)">Short Title of your Experience</textarea>
            </p>
            <p>
              <input name="save" type="submit" class="btn" id="save" value="Send Document" />
            </p>
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
	