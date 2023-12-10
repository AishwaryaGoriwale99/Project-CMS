<head><title>ONLINE TRAVEL AGENCY SYSTEM::ADD DEPENDENT</title></head>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
<?php include('header.php');?>
<link href="datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="datepicker/core.js" type="text/javascript"></script>
<script language="javascript" src="js/validation.js"></script>

<h2 class="ph">ADD SALARY</h2>
  <p class="ph2">&nbsp;</p>

<form name="form1" action="insert.php" method="post" onsubmit="return salary_validate();">
<fieldset>
<legend>Salary Info
</legend><table width="100%" border="0" align="center">
 <tr>
    <td width="40%">&nbsp;</td>
    <td width="13%">EMPLOYEE NAME</td>
    <td width="37%"><select name="employee" id="employee">
    <option value="Selectemp">-Select Emloyee-</option>
<?php include("connection/connection.php");$sql=mysqli_query($con,"select emp_name from employee") or die(mysqli_error($con)); while($row=mysqli_fetch_array($sql)){ ?>
<option><?php echo $row['emp_name']; ?> </option> 
<?php } ?>

</select>
</td>
    <td width="10%">&nbsp;</td>
  </tr>
  <tr>
    <td width="40%">&nbsp;</td>
    <td width="13%">Month:</td>
    <td width="37%"><select name="month" id="month">
    <option value="-1">-Select Month-</option>
    <option value="jan">jan</option> 
    <option value="feb">feb</option> 
    <option value="mar">mar</option> 
    <option value="apr">apr</option> 
    <option value="may">may</option> 
    <option value="june">june</option> 
    <option value="july">july</option> 
    <option value="aug">aug</option> 
    <option value="sep">sep</option> 
    <option value="oct">oct</option> 
    <option value="nov">nov</option> 
    <option value="dec">dec</option>    
    </select></td>
    <td width="10%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Amount:</td>
    <td><input name="amount" type="text" id="amount"/> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Description:</td>
    <td><input name="description" type="text" id="desc" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input name="salaryform" type="submit" id="salaryform" value="submit" /><input type="reset" name="reset" value="clear" /></td>
    <td><a href="salary_view.php"><input type="button" value="back to list"></a></td>
    <td>&nbsp;</td>
  </tr>
  
</table>
</fieldset>

</form>
<?php include('footer.php');?>