<?php include('session.php');?>
<?php include('header.php');?>
<h1> Welcome to Report Creation Page you can easly create reports from here</h1>
<form method="post" name="f1" action="report1.php">
  <table width="200" border="1">
    <tr>
      <td width="37%">SEARCH START DATE 
        <input name="sdate" type="date" id="sdate" /></td>
      <td width="38%">SEARCH END DATE 
        <input name="edate" type="date" id="edate" /></td>
    </tr>
    <tr class="asad">
    
    <form name="r1" action="report1.php"><td align="center" valign="top"><input type="submit" name="b1" value="Cash Book Report" /></td></form>
    <form name="r2" action="report2.php"> <td align="center" valign="top"><input type="submit" name="b2" value="Expence Report" /></td></form>
    <form name="r3" action="report3.php"> <td width="25%" align="center" valign="top"><input name="b3" type="submit" id="b3" value="Salary Report" /></td></form>
      </tr>
      
  </form>
</table>

<p>&nbsp;</p>
<?php include('footer.php');?>