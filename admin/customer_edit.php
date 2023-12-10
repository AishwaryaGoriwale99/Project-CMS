<head><title>ONLINE TRAVEL AGENCY SYSTEM::CUSTOMER EDIT</title></head>
<link rel="stylesheet" href="css/styles.css" type="text/css"/>
<link href="datepicker/core.css" rel="stylesheet" type="text/css" />
	<link href="datepicker/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
    <script src="datepicker/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="datepicker/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
<script src="datepicker/core.js" type="text/javascript"></script>
 <script src="js/validation.js" type="text/javascript"></script>
<?php include('header.php');?>
<link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">CUSTOMER EDIT</h2>
  <p class="ph2"><a href="index.php">home&gt;&gt;</a><a href="customer_view.php">customer view&lt;&lt;</a><a href="customer_view.php">customer edit</a></p>
<?php
require_once('connection\connection.php');
?>

<?php
  $sql="select*from costomer where costomer_id='$_GET[costomer_id]'";
$result=mysqli_query($con,$sql) or die(mysqli_error($con));
while($row=mysqli_fetch_array($result))
{
	$costomer_id=$row['costomer_id'];
	$full_name=$row['full_name'];
	$son_of=$row['son_of'];
	$status=$row['status'];
	$date_of_birth=$row['date_of_birth'];
	$place_of_birth=$row['place_of_birth'];
	$previous_nationality=$row['previous_nationality'];
	$present_nationality=$row['present_nationality'];
	$sex=$row['sex'];
	$marital_status=$row['marital_status'];
	$sect=$row['sect'];
	$religion =$row['religion'];
	$place_of_issue=$row['place_of_issue'];
	$qualification=$row['qualification'];
	$profession=$row['profession'];
	$home_address=$row['home_address'];
	$telephone_no=$row['telephone_no'];
	$purpose_of_travel=$row['purpose_of_travel'];
	$date_of_passport=$row['date_of_passport'];
	$passport_no=$row['passport_no'];
	$date_of_passport_expiry=$row['date_of_passport_expiry'];
	$duration_of_stay_in_kindom=$row['duration_of_stay_in_kindom'];
	$date_of_arrival =$row['date_of_arrival'];
	$date_of_departure=$row['date_of_departure'];
	$mode_of_payment=$row['mode_of_payment'];
	$relationship=$row['relationship'];
	$destination=$row['destination'];
	$carriers_name=$row['carriers_name'];
	$visa_no=$row['visa_no'];
	$date_of_insertion=$row['date_of_insertion'];
	$inserted_by=$row['inserted_by'];
}
?>

<form name="form1" method="post" action="update.php" enctype="multipart/form-data" onsubmit="return validate1();">
<input type="hidden" name="hiden" value="<?php echo $costomer_id; ?>" />
<fieldset>
<legend>personal info</legend>
<table width="100%" border="0" align="center">


  <tr>
    <td width="36%">&nbsp;</td> 
    <td width="16%">FULL NAME:</td>
    <td width="40%"><input type="text" name="full_name"  value="<?php echo $full_name ;?>"/></td>
    <td width="8%">&nbsp;</td>
  </tr>
  <tr> 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 	 		 	 	 	 	 	
    <td>&nbsp;</td>
    <td>S/O:</td>
    <td><input type="text" name="son_of" value="<?php echo $son_of ;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>STATUS</td>
    <td><select name="status"><OPTION  <?php if($status=='-1'){echo 'selected="selected"'; }?> value="-1">STATUS</OPTION><option <?php if($status=='APPENDED'){echo 'selected="selected"'; }?> value="APPENDED">APPENDED</option><option  <?php if($status=='APPROVED'){echo 'selected="selected"'; }?>value="APPROVED">APPROVED</option><option <?php if($status=='REJECTED'){echo 'selected="selected"'; }?> value="REJECTED">REJECTED</option></select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DATE OF BIRTH:</td>
    <td><input type="text" name="date_of_birth"  class="datepicker" value="<?php echo $date_of_birth;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>PLACE OF BIRTH:</td>
    <td><input type="text" name="place_of_birth" value="<?php echo $place_of_birth;?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>PREVIOUS NATIONALITY:</td>
    <td><input type="text" name="previous_nationality" value="<?php echo $previous_nationality;?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>PRESENT NATIONALITY:</td>
    <td><input type="text" name="present_nationality" value="<?php echo $present_nationality;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>SEX:</td>
    <td><select name="sex"><option <?php if($sex=='-1'){echo 'selected="selected"'; }?> value="-1"> Gender</option><option  <?php if($sex=="MALE"){echo 'selected="selected"'; }?> value="MALE">Male</option><option <?php if($sex=='FEMALE'){echo 'selected="selected"'; }?>value="FEMALE">Female</option></select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>MARITAL STATUS:</td>
    <td><select name="marital_status">
    <option   value="-1">marital status</option>
    <option  <?php if($marital_status=='SINGLE'){echo 'selected="selected"'; }?> value="SINGLE">single</option>
    <option  <?php if($marital_status=='MARREID'){echo 'selected="selected"'; }?> value="MARRIED">married</option>
    <option  <?php if($marital_status=='DIVORCED'){echo 'selected="selected"'; }?> value="DIVORCED">divorced</option>
    <option   <?php if($marital_status=='WIDOWED'){echo 'selected="selected"'; }?>value="WIDOWED">widowed</option></select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>SECT:</td>
    <td><input type="text" name="sect"  value="<?php echo $sect;?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>RELIGION:</td>
    <td><input type="text" name="religion" value="<?php echo $religion;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>PLACE OF ISSUE:</td>
    <td><input type="text" name="place_of_issue" value="<?php echo $place_of_issue;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>QUALIFICATION:</td>
    <td><select name="qualification"><option value="-1" >-Qualification-</option><option <?php if($qualification=='MATRIC'){echo 'selected="selected"'; }?> value="MATRIC" >Matric</option><option <?php if($qualification=='INTERMEDIATE'){echo 'selected="selected"'; }?> value="INTERMEDIATE">Intermediate</option><option <?php if($qualification=='GRADUATION'){echo 'selected="selected"'; }?> value="GRADUATION">Graduation</option><option <?php if($qualification=='MASTER'){echo 'seleted="selected"'; }?> value="MASTER">Master</option><option <?php if($qualification=='DOCTORATE'){echo 'selected="selected"'; }?> value="DOCTORATE" >Doctorate</option><option <?php if($qualification=='NONE'){echo 'selected="selected"'; }?> value="NONE">None</option></select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Profession:</td>
    <td><input type="text" name="profession"  value="<?php echo $profession;?>"/></td>
    <td>&nbsp;</td>
  </tr>
  </fieldset>
  </table>
  <fieldset>
  <legend>contact info</legend>
  <table>
  <tr>
    <td>&nbsp;</td>
    <td>HOME ADDRESS:</td>
    <td><input type="text" name="home_address"  size="50" value="<?php echo $home_address;?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>TELEPHONE NO:</td>
    <td><input type="text" name="telephone_no" value="<?php echo $telephone_no;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
  </table>
  </fieldset>
  <fieldset>
  <legend>travel info</legend>
  <table>
  <tr>
    <td>&nbsp;</td>
    <td>PURPOSE OF TRAVEL:</td>
    <td><select name="purpose_of_travel"><option value="-1">-purpose of travel-</option> <option <?php if($purpose_of_travel=='WORK'){echo 'selected="selected"'; }?> value="WORK">work</option><option <?php if($purpose_of_travel=='TRANSIT'){echo 'selected="selected"'; }?> value="TRANSIT">transit</option><option <?php if($purpose_of_travel=='VISIT'){echo 'selected="selected"'; }?> value="VISIT">visit</option><option<?php if($purpose_of_travel=='UMRAH'){echo 'selected="selected"'; }?> value="UMRAH">umrah</option><option <?php if($purpose_of_travel=='RESIDENCE'){echo 'selected="selected"'; }?> value="RESIDENCE">residence</option><option <?php if($purpose_of_travel=='HAJJ'){echo 'selected="selected"'; }?> value="HAJJ">hajj</option ><OPTION <?php if($purpose_of_travel=='DIPLOMACY'){echo 'selected="selected"'; }?> value="DIPLOMACY">diplomacy</option></select></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DATE OF PASSPORT:</td>
    <td><input type="text" name="date_of_passport" class="datepicker" value="<?php echo $date_of_passport;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>PASSPORT NO:</td>
    <td><input type="text" name="passport_no"  value="<?php echo $passport_no;?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DATE OF PASSPORT EXPIRY:</td>
    <td><input type="text" name="date_of_passport_expiry" value="<?php echo $date_of_passport_expiry;?> " class="datepicker"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DURATION OF STAY IN KINDOM:</td>
    <td><input type="text"  name="duration_of_stay_in_kindom" value="<?php echo $duration_of_stay_in_kindom;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DATE OF ARRIVAL:</td>
    <td><input type="text" name="date_of_arrival"  value="<?php echo $date_of_arrival;?>" class="datepicker"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DATE OF DEPARTURE:</td>
    <td><input type="text" name="date_of_departure"  value="<?php echo $date_of_departure;?>" class="datepicker"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>MODE OF PAYMENT:</td>
    <td><input type="text" name="mode_of_payment"  value="<?php echo $mode_of_payment ;?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>RELATIONSHIP:</td>
    <td><input type="text" name="relationship" value="<?php echo $relationship;?>"/></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>DESTINATION:</td>
    <td><input type="text" name="destination"value="<?php echo $destination;?>"/>  </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>CARRIER'S NAME:</td>
    <td><input type="text" name="carriers_name" value="<?php echo $carriers_name;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>VISA NO:</td>
    <td><input type="text" name="visa_no" value="<?php echo $visa_no;?>"/> </td>
    <td>&nbsp;</td>
  </tr>
 
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="submit" name="costomerform" /><a href="customer_view.php"><input type="button" value="back to list" /></a></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
</fieldset>
</form>
<?php include('footer.php'); ?>
