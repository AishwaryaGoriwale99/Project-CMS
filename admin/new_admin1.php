<head><title>ONLINE TRAVEL AGENCY SYSTEM::ADD ADMIN</title></head>
<?php include('header1.php'); ?>
<link href="../onlinetravelagency/admin/datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="../onlinetravelagency/admin/datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="../onlinetravelagency/admin/datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="../onlinetravelagency/admin/datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="../onlinetravelagency/admin/datepicker/core.js" type="text/javascript"></script>
  <script src="../onlinetravelagency/admin/js/validation.js"></script>
  <link rel="stylesheet" href="../onlinetravelagency/admin/css/bar.css" type="text/css" />
  <style>
  .ph2
  {
	  background:#069;
	  font-family:Georgia, "Times New Roman", Times, serif;
	  font-size:9px;
	  text-align:left;
	  height:auto;
	  margin:0 0 0 0;
	  
  }
  </style>
  <h2 class="ph">ADD NEW ADMIN </h2>
  <div class="ph2"><a href="index.php">FELL THE FORM</a></div>
  
  <form name="form1" method="post" action="new_admin_insert.php" enctype="multipart/form-data">
  <fieldset>
  <legend>personal info</legend>
<table width="100%" border="0" align="center">
  <tr>
    <td width="8%">&nbsp;</td>
    <td width="21%">USERNAME:</td>
    <td width="23%"><input name="username" type="text" id="username" /></td>
    <td width="48%">&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>PASSWORD:</td>
    <td><input name="password" type="text" id="password" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>EMAIL:</td>
    <td><input name="email" type="text" id="emp_employee" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>ADDRESS:</td>
    <td><input name="address" type="text" id="address" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>PHONE NUMBER:</td>
    <td><input name="phone_no" type="text" id="phone_no" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DESIGNATION:</td>
    <td><input name="designation" type="text" id="designation" /></td>
    <td>&nbsp;</td>
  </tr>
  </table>
  </fieldset>
  <fieldset>
    <td>&nbsp;</td>
    <td><input name="adminform" type="submit" id="adminform" value="submit" /><input type="reset" value="clear" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>

</form>
<?php include('footer.php');?>