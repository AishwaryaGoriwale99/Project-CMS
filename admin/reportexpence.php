<?php include('session.php');?>
<?php include('header.php');?>
<h2> From Here you can easly create Daily Expendeture Date to date reports</h2></h2>
<form method="post" name="f1" action="report2.php" style="height:250px">
  <table width="200" border="1">
    <tr>
      <td width="37%">SEARCH START DATE 
        <input name="sdate" type="date" id="sdate" /></td>
      <td width="38%">SEARCH END DATE 
        <input name="edate" type="date" id="edate" /></td>
    </tr>
    <tr class="asad">
    
    <form name="r2" action="report2.php"> <td align="center" valign="top" colspan="2"><input type="submit" name="b2" value="Expence Report" /></td></form>
    
    </tr>
      
  </form>
</table>

<p>&nbsp;</p>
<?php include('footer.php');?>