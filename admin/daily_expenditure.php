
<?php include("header.php"); ?>
<script language="javascript" type="text/javascript" src="js/validation.js"></script>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">ADD VOUCHER</h2>
  <DIV class="ph2"><a href="index.php">HOME &gt;&gt;</a><a href="daily_expenditure.php">ADD VOUCHER</a></DIV>
  <form name="form1" action="insert.php" method="post" onSubmit="return daily();">
<fieldset>
<legend>Voucher Form</legend>
<table width="329" border="0" align="center">
  
  <tr>
    <td width="41">&nbsp;</td>
    <td width="72">Voucher No:</td>
    <td width="144"><input type="text" name="voucher_no"/></td>
    <td width="44">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Title:</td>
    <td><input type="text" name="title" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Description:</td>
    <td><input type="text" name="description"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Amount:</td>
    <td><input type="text" name="amount" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="35">&nbsp;</td>
    <td><input type="submit" value="submit" name="daily_expenses"></td>
     <td><input type="reset" value="Clear"></td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>
</form>

<?php include("footer.php");?>

</html>