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
            <div class="right">
                <h1>Contact Us</h1>
                <h2>Visit one of our offices and let one of our experienced travel and tour consultants guide you to your next adventure.</h2>
            </div>
        </div>
         <?php include("inc_left.php"); ?> 
        <div class="right">
            <a name='error'></a>                        
          <form enctype="multipart/form-data" method="post" action="contact_insert.php" class="contact_insert">
                <p>
                    <span><input type="text" name="name" value="Name *" onblur="_hint(this,'Name *',1)" onclick="_hint(this,'Name *',0)" class="text" /></span>
                    <span><input type="text" name="company" value="Company" onblur="_hint(this,'Company',1)" onclick="_hint(this,'Company',0)" class="text" /></span>
                </p>
                <p>
                    <span><input type="text" name="email"  value="Email *" onblur="_hint(this,'Email *',1)" onclick="_hint(this,'Email *',0)" class="text" /></span><span>
                    <input name="topic" type="text" class="text" id="topic" onblur="_hint(this,'Topic',1)" onclick="_hint(this,'Topic',0)" value="Topic" />
                    </span>
                    </p>
                <p>
                    <span><input type="text" name="phone" value="Phone *" onblur="_hint(this,'Phone *',1)" onclick="_hint(this,'Phone *',0)" class="text" /></span>
                </p>
                <p><textarea name="comments" cols="50" rows="10" id="comments" onblur="_hint(this,'Comments',1)" onclick="_hint(this,'Comments',0)">Comments</textarea></p>
                <p><input name="save" type="submit" class="btn" id="save" value="Send Message" /></p>
            </form>
        </div>
    </div>
     <?php include('inc_footer.php'); ?>
</div>
</body>

</html>
	