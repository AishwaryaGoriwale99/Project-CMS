<head><title>ONLINE TRAVEL AGENCY SYSTEM::ADD TICKET</title></head>
<link href="datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="datepicker/core.js" type="text/javascript"></script>
<script language="javascript" src="js/validation.js"></script>
<?php include('header.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">ADD TICKET</h2>
  <p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="customer_view.php">Customer View&gt;&gt;</a><a href="ticket.php">add ticket</a></p>
 <?php  require_once('connection\connection.php');?>

<form name="form1" action="insert.php" method="post"  onsubmit="return ticket_validate();">
<fieldset>
<legend>Ticket Info</legend>
<table width="100%" border="0" align="center">

  <tr>
    <td width="36%">&nbsp;</td>
    <td width="14%">TICKET NO:</td>
    <td width="36%"><input type="text" name="ticket_no" /></td>
    <td width="14%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>CUSTOMER NAME</td>
    <td><input type="hidden" name="costomer_id" value="<?php echo $_REQUEST['costomer_id']; ?>" />
	
	<?php $cID=$_REQUEST['costomer_id']; $s=mysqli_query($con,"SELECT * FROM costomer WHERE costomer_id='$cID'");  
	$d=mysqli_fetch_array($s);
	 echo $d['full_name']; ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DATE:</td>
    <td><input type="text" class="datepicker" name="date" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>SECTOR FROM:</td>
    <td><input type="text" name="sector_from" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>SECTOR TO:</td>
    <td><input type="text" name="sector_to" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>AIRLINE NAME:</td>
    <td><input type="text" name="airline_name" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>PNR NO:</td>
    <td><input type="text" name="pnr_no" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>AIRLINE NO:</td>
    <td><input type="text" name="airline_no" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="submit" name="ticketform" /><input type="reset" name="clear" value="clear" /></td>
    <td><a href="customer_view.php"><input type="button" value="back to list"></a></td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>
</form>
<?php include('footer.php');?>