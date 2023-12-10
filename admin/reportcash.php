<?php include('session.php');?>
<?php include('header.php');?>
<h2>  Create Cash Reports Select Dates You want to create Report </h2>
<form method="post" name="f1" action="report1.php" style="height:250px">
  <table width="200" border="1">
    <tr>
      <td width="37%">SEARCH START DATE 
        <input name="sdate" type="date" id="sdate" /></td>
      <td width="38%">SEARCH END DATE 
        <input name="edate" type="date" id="edate" /></td>
    </tr>
    <tr class="asad">
    
    <form name="r1" action="report1.php"><td align="center" valign="top" colspan="2"><input type="submit" name="b1" value="Cash Book Report" /></td></form>
    
      </tr>
      
  </form>
</table>

<p>&nbsp;</p>
<?php include('footer.php');?>