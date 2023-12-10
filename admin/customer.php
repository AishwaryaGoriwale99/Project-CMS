<head><title>ONLINE TRAVEL AGENCY SYSTEM::ADD CUSTOMER</title></head>
<?php require('header.php'); ?>


<link href="datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="datepicker/core.js" type="text/javascript"></script>
  <script src="js/validation.js"></script>
  <link rel="stylesheet" href="css/bar.css" type="text/css" />
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
  <h2 class="ph">ADD CUSTOMER</h2>
  <div class="ph2"><a href="index.php">FELL THE FORM</a></div>
  
  <form name="form1" method="post" action="insert.php" enctype="multipart/form-data" onsubmit="return validate();">
  <fieldset>
  <legend>personal info</legend>
<table width="100%" border="0" align="center">

  
  
<tr>
    <td width="8%">&nbsp;</td>
    <td width="21%">PHOTO</td>
    <td width="23%"><img src="images/profile.jpg" width="80" height="80"/><br /><input type="file"  name="userfile" /></td>
    <td width="48%">&nbsp;</td>
  </tr>
  <tr>
    <td width="8%">&nbsp;</td>
    <td width="21%">FULL NAME:</td>
    <td width="23%"><input type="text" name="full_name" /></td>
    <td width="48%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>S/O:</td>
    <td><input type="text" name="son_of" /></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>STATUS</td>
    <td><select name="status"><option value="-1">STATUS</option><option value="APPENDED">APPENDED </option><option value="APPROVED"> APPROVED </option><option value="">REJECTED  </option></select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DATE OF BIRTH:</td>
    <td><input type="text" name="date_of_birth"  class="datepicker" /></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>PLACE OF BIRTH:</td>
    <td><input type="text" name="place_of_birth" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>PREVIOUS NATIONALITY:</td>
    <td><input type="text" name="previous_nationality" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>PRESENT NATIONALITY:</td>
    <td><input type="text" name="present_nationality" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>SEX:</td>
    <td><select  name="sex" ><option  value="-1">-Gender-</option><option value="MALE">MALE</option><option  value="FEMALE">FEMALE</option></select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>MARITAL STATUS:</td>
    <td><select name="marital_status"><option value="-1">-marital status-</option><option value="SINGLE">SINGLE</option><option  value="MARRIED">MARRIED</option><option value="DIVORCED">DIVORCED</option><option value="WIDOWED">widowed</option></select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>SECT:</td>
    <td><input type="text" name="sect" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>RELIGION:</td>
    <td><input type="text" name="religion" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>PLACE OF ISSUE:</td>
    <td><input type="text" name="place_of_issue" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>QUALIFICATION:</td>
    <td><select name="qualification"><option value="-1">-Qualification-</option><option value="MATRIC">Matric</option><option value="INTERMEDIATE">Intermediate</option><option value="GRADUATION">Graduation</option><option value="MASTER">Master</option><option value="DOCTORATE">Doctorate</option><option value="NONE">None</option></select></td>
    <td>&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
    <td>Profession:</td>
    <td><input type="text" name="profession" /></td>
    <td>&nbsp;</td>
  </tr>
  </table>
  </fieldset>
  <fieldset>
  <legend>contact info</legend>
  <table width="100%" border="0" align="left">
  <tr>
    <td>&nbsp;</td>
    <td>HOME ADDRESS:</td>
    <td><input type="text" name="home_address" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>TELEPHONE NO:</td>
    <td><input type="text" name="telephone_no" /></td>
    <td>&nbsp;</td>
  </tr>
  </table>
  </fieldset>
  <fieldset>
  <legend>travel info</legend>
  <table width="100px"  align="left" border="0">
  <tr>
    <td>&nbsp;</td>
    <td>PURPOSE OF TRAVEL:</td>
    <td><select name="purpose_of_travel"><option value="-1">-purpose of travel-</option> <option value="WORK">WORK</option><option value="TRANSIT">TRANSIT</option><option value="VISIT">VISIT</option><option value="UMRAH">UMRAH</option><option value="RESIDENCE">RESIDENSE</option><option value="HAJJ">HAJJ</option><option value="DIPLOMACY">DIPLOMACY</option></select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DATE OF PASSPORT:</td>
    <td><input type="text" name="date_of_passport" class="datepicker"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>PASSPORT NO:</td>
    <td><input type="text" name="passport_no" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DATE OF PASSPORT EXPIRY:</td>
    <td><input type="text" name="date_of_passport_expiry"  class="datepicker" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DURATION OF STAY IN KINDOM:</td>
    <td><input type="text"  name="duration_of_stay_in_kindom" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DATE OF ARRIVAL:</td>
    <td><input type="text" name="date_of_arrival"  class="datepicker" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DATE OF DEPARTURE:</td>
    <td><input type="text" name="date_of_departure" class="datepicker" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>MODE OF PAYMENT:</td>
    <td><input type="text" name="mode_of_payment" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>RELATIONSHIP:</td>
    <td><input type="text" name="relationship" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DESTINATION:</td>
    <td><input type="text" name="destination" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>CARRIER'S NAME:</td>
    <td><input type="text" name="carriers_name" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>VISA NO:</td>
    <td><input type="text" name="visa_no" /></td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="submit" name="costomerform" /><input type="reset" value="clear" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>

</form>
<?php include('footer.php');?>