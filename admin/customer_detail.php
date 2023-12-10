<head><title>ONLINE TRAVEL AGENCY SYSTEM::CUSTOMER DETAIL</title>
<link href="../css/styles.css" rel="stylesheet" type="text/css" />
</head>
<?php include('session.php'); ?>

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
	$photo = $row['uploadimage'];
	$son_of=$row['son_of'];
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
<form name="form1">
<h1 align="center" class="btn_ad"> AlMOQADAS TRAVEL AGENCY ::: CUSTOMER DETAIL </h1>
<div align="center" style="border:1px solid #333; width:850px; margin:0 auto;">
<p><img src="<?php echo $photo;?>" alt="" width="111" height="132"><strong><u></u></strong></p>
<table width="782" border="1">
  <tr>
    <td width="85">FULL NAME</td>
    <td width="241">&nbsp;<?php echo $full_name; ?></td>
    <td width="59">&nbsp;</td>
    <td width="183">S/0</td>
    <td width="180">&nbsp;<?php echo $son_of; ?></td>
  </tr>
  <tr>
    <td>Date of birth</td>
    <td>&nbsp;<?php echo $date_of_birth; ?></td>
    <td>&nbsp;</td>
    <td>Place of Birth;</td>
    <td>&nbsp;<?php echo $place_of_birth; ?></td>
  </tr>
  <tr>
    <td>Previous Nationality</td>
    <td>&nbsp;<?php echo $previous_nationality; ?></td>
    <td>&nbsp;</td>
    <td>Present Nationality</td>
    <td>&nbsp;<?php echo $present_nationality; ?></td>
  </tr>
  <tr>
    <td>sex</td>
    <td>&nbsp;<?php echo $sex; ?></td>
    <td>&nbsp;</td>
    <td>Marital Status</td>
    <td>&nbsp;<?php echo $marital_status; ?></td>
  </tr>
  <tr>
    <td>Sect</td>
    <td><?php echo $sect; ?></td>
    <td>&nbsp;</td>
    <td>Religion</td>
    <td><?php echo $religion; ?></td>
  </tr>
  <tr>
    <td>place_of_issue</td>
    <td><?php echo $place_of_issue; ?></td>
    <td>&nbsp;</td>
    <td>Qualification</td>
   <td><?php echo $qualification; ?></td>
  </tr>
  <tr>
    <td>Profession</td>
    <td><?php echo $profession; ?></td>
    <td>&nbsp;</td>
    <td>Home Address</td>
    <td><?php echo $home_address; ?></td>
  </tr>
  <tr>
    <td>Telephone No</td>
    <td><?php echo $telephone_no; ?></td>
    <td>&nbsp;</td>
    <td>Purpose of Travel</td>
    <td><?php echo $purpose_of_travel; ?></td>
  </tr>
  <tr>
    <td>Date of Passport</td>
    <td><?php echo $date_of_passport; ?></td>
    <td>&nbsp;</td>
    <td>Passport No</td>
    <td><?php echo $passport_no; ?></td>
  </tr>
  <tr>
    <td>Date of Passport Expiry</td>
    <td><?php echo $date_of_passport_expiry; ?></td>
    <td>&nbsp;</td>
    <td>Duration of stay in Kindom</td>
    <td><?php echo $duration_of_stay_in_kindom; ?></td>
  </tr>
  <tr>
    <td>Date of Arrival</td>
    <td><?php echo $date_of_arrival; ?></td>
    <td>&nbsp;</td>
    <td>Date of Departure</td>
    <td><?php echo $date_of_departure; ?></td>
  </tr>
  <tr>
    <td>Mode of Payment</td>
    <td><?php echo $mode_of_payment; ?></td>
    <td>&nbsp;</td>
    <td>Relationship</td>
   <td><?php echo $relationship; ?></td>
  </tr>
  <tr>
    <td>Destination</td>
   <td><?php echo $destination; ?></td>
    <td>&nbsp;</td>
    <td>Carriers name</td>
    <td><?php echo $carriers_name; ?></td>  </tr>
  <tr>
    <td>Visa No</td>
    <td><?php echo $visa_no; ?></td>
    <td>&nbsp;</td>
    <td>Date of Insertion</td>
   <td><?php echo $date_of_insertion; ?></td>
  </tr>
</table>

  <table border="0" cellspacing="0" cellpadding="0" width="800">
   <tr>
      <td width="358" colspan="34" align="left"><p><br />The undersigned hereby certify that all information I have provided are correct,
        I will abide by the laws of the Kingdom during the period of my residence in it.</p></td>
      <td width="387" colspan="28"></td>
    </tr>
    <tr>
      <td width="745" colspan="62"><p align="center">&nbsp;</p></td>
    </tr>
    <tr>
      <td width="48" align="left"><p>Date:</p></td>
      <td width="74" colspan="8"><p>&nbsp;</p></td>
      <td width="60" colspan="8"><p align="right"></p></td>
      <td width="75" colspan="7"><p>Signatures:</p></td>
      <td width="66" colspan="7"><p>&nbsp;</p></td>
      <td width="57" colspan="6"><p align="right"></p></td>
      <td width="47" colspan="4"><p>Name:</p></td>
      <td width="213" colspan="20"><p><strong><?php echo $full_name; ?></strong><strong> </strong></p></td>
      <td width="106"><p align="right"></p></td>
    </tr>
    <tr>
      <td width="48"><p>&nbsp;</p></td>
      <td width="74" colspan="8"><p>&nbsp;</p></td>
      <td width="60" colspan="8"><p align="right">&nbsp;</p></td>
      <td width="75" colspan="7"><p>&nbsp;</p></td>
      <td width="66" colspan="7"><p>&nbsp;</p></td>
      <td width="57" colspan="6"><p align="right">&nbsp;</p></td>
      <td width="47" colspan="4"><p>&nbsp;</p></td>
      <td width="213" colspan="20"><p>&nbsp;</p></td>
      <td width="106"><p align="right">&nbsp;</p></td>
    </tr>
    <tr>
      <td width="341" colspan="32" align="left"><p><strong><u>For official use only:</u></strong></p></td>
      <td width="404" colspan="30"><p align="right"><strong><u></u></strong></p></td>
    </tr>
    <tr>
      <td width="58" colspan="2" align="left"><p>Date:</p></td>
      <td width="83" colspan="8"><p>&nbsp;</p></td>
      <td width="84" colspan="10"><p align="right"></p></td>
      <td width="83" colspan="7" align="left"><p>Authorization:</p></td>
      <td width="209" colspan="23"><p>&nbsp;</p></td>
      <td width="228" colspan="12"><p align="right"></p></td>
    </tr>
    <tr>
      <td width="341" colspan="32" align="left"><p>Visit / Work for:</p></td>
      <td width="404" colspan="30"><p align="right"></p></td>
    </tr>
    <tr>
      
      <td width="83" colspan="7" align="left"><p>Visa No.:</p></td>
      <td width="84" colspan="10"><p align="right"></p></td>
      <td width="209" colspan="23"><p>&nbsp;</p></td>
      <td width="228" colspan="12"><p align="right"></p></td>
    </tr>
  </table>


  <table border="0" cellspacing="0" cellpadding="0" width="750">
    <tr>
      <td width="61"><p>Fee Collected:</p></td>
      <td width="84" colspan="10"><p align="right"></p></td>
      <td width="71"><p>&nbsp;</p></td>
      <td width="107"><p align="right"></p></td>
      <td width="49"><p>Type:</p></td><td width="55"><p>&nbsp;</p></td><td width="55"><p>&nbsp;</p></td>
      <td width="49"><p>&nbsp;</p></td>
      <td width="49"><p align="right"></p></td>
      <td width="77"><p>Duration:</p></td>
      <td width="55"><p>&nbsp;</p></td>
      <td width="384"><p align="right"></p></td>
    </tr>
    <tr>
    
      <td width="384"><p>Head of consular section</p></td>
 <td width="55"><p>&nbsp;</p></td><td width="55"><p>&nbsp;</p></td><td width="55"><p>&nbsp;</p></td><td width="55"><p>&nbsp;</p></td>
      <td width="49"><p>Checked by:</p></td>
    </tr>
  </table>

</div>
<input type="button" value="print" onclick="window.print() ;" />
</form>