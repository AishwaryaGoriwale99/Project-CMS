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
                <h1>TRACE YOUR APPLICATION</h1>
                <h2>From Here You Can Check Your VISA APROVEL</h2>
            </div>
        </div>
        <div class="left">
	                <ul class="right_menu">
                    <li><a href="javascript:;">History</a></li>
                        <li><a href="javascript:;">Management Team</a></li>
                        <li><a href="javascript:;">Group Investments</a></li>
                    </ul>
                     &nbsp;
        </div>
        <head><title>:ONLINE TRAVEL AGENCY SYSTEM::TRACE APPLICATION</title></head>
<?php
      include('admin/connection/connection.php');
?>

<?php if(isset($_POST["searc"]))
 {
				$search = isset($_REQUEST['search'])?trim($_REQUEST['search']):""; 
				$qry  = "select * from `costomer`";
				$qry  .= "where `passport_no` like '".$search."'";
				$res = mysqli_fetch_row(mysqli_query($con,$qry));
				if($res)
				   {
					   echo "<br><br> ";
					  echo "<table width='600' border='0' style='border:1px solid #ccc;'>
					           <tr>
							   <td  align='left' valign='top' colspan='3' style='text-align:center; padding:10px; background:#036; color:#FFF; font-weight:bold;'>Record  found</td>
							   </tr>
								<tr>
								  <td width='26%' rowspan='4' align='left' valign='top'><img src='admin/$res[1]' align='left' style='' width='100' /></td>
								  <td width='22%' align='left' valign='top'><strong>Name:</strong></td>
								  <td width='52%' align='left' valign='top'>$res[2]</td>
								</tr>
								<tr>
								  <td align='left' valign='top'><strong>Father name</strong></td>
								  <td align='left' valign='top'>$res[3]</td>
								</tr>
								<tr>
								  <td align='left' valign='top'><strong>Visa Status</strong></td>
								  <td align='left' valign='top'>$res[4]</td>
								</tr>
								<tr>
								  <td align='left' valign='top'>&nbsp;</td>
								  <td align='left' valign='top'>&nbsp;</td>
								</tr>
							  </table>"; 
					   
					   
					
					}
					
					else
					   { echo "<h2>Record not found</h2>";}
?>



<?php }

?>

  <h2>Please Enter you Passport/NIC Number </h2>
  <form action="" method="post">
  <input type="text" name="search" id="search" /><input type="hidden" name="searc" id="searc" /><input type="submit" name="sumbit" id="submit" />
  </form>
    </div>
     <?php include('inc_footer.php'); ?>
</div>
</body>

</html>
	