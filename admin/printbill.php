
<?php 
 require('inc_session.php'); 
include('../dataAccess/connection.php'); 

$kankorid=$_REQUEST['kankorID'];
$program=$_REQUEST['programID'];

$sqlp=mysqli_query($con,"SELECT programName from ku_program where programID='$program'");
$prog=mysqli_fetch_array($sqlp);



?>
<!-- AUI Framework -->
<!DOCTYPE html>
    <html>
    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>KU - MIS</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Favicons -->

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/icons/apple-touch-icon-144-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/icons/apple-touch-icon-114-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/icons/apple-touch-icon-72-precomposed.png" />
        <link rel="apple-touch-icon-precomposed" href="assets/images/icons/apple-touch-icon-57-precomposed.png" />
        <link rel="shortcut icon" href="assets/images/icons/favicon.png" />

        <!--[if lt IE 9]>
          <script src="assets/js/minified/core/html5shiv.min.js"></script>
          <script src="assets/js/minified/core/respond.min.js"></script>
        <![endif]-->

        <!-- Fides Admin CSS Core -->

        <link rel="stylesheet" type="text/css" href="assets/css/minified/aui-production.min.css" />

        <!-- Theme UI -->

        <link id="layout-theme" rel="stylesheet" type="text/css" href="assets/themes/minified/fides/color-schemes/dark-blue.min.css" />

        <!-- Fides Admin Responsive -->

        <link rel="stylesheet" type="text/css" href="assets/themes/minified/fides/common.min.css" />
        <link rel="stylesheet" type="text/css" href="assets/themes/minified/fides/responsive.min.css" />

        <!-- Fides Admin JS -->

        <script type="text/javascript" src="assets/js/minified/aui-production.min.js"></script>

        <script>
            jQuery(window).load(
                function(){

                    var wait_loading = window.setTimeout( function(){
                      $('#loading').slideUp('fast');
                      jQuery('body').css('overflow','auto');
                    },1000
                    );

                });

        </script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    
    </head>
    <body style="overflow: hidden;">
        


                <div id="page-title">

       
<h3>
  Khurasan University, Kankor Result
    
</h3> <a href="javascript:;" class="float-right" onClick="window.print();">Print</a>
                    
</div><!-- #page-title -->
<div id="page-content">

<div>
    <div class="example-code">

<div class="row">
<div class="col-md-8 center-margin" style="margin-bottom:30px; ">

                <div class="content-box drop-shadow-alt" style="height:44px; ">
                   
                    <div class="content-box-wrapper" style="padding:4px 20px 4px 50px;">
                    <table width="100%" class="font-bold">
                    
                    <tr>
                    <td width="45%" height="36">Kankor ID: &nbsp; &nbsp; &nbsp;<?php echo $kankorid; ?></td>
                    <td  width="55%">Program Name: &nbsp; &nbsp; &nbsp;<?php echo $prog['programName']; ?></td>
                    
                    </tr>
                    
                    </table>
                    
                                          </div>

            </div>
</div>
</div>


    <div class="row">
  
    
    <table class="table table-striped center-margin">
        
                    <thead>
        
                        <tr>
                            <th width="10%">S.No</th>
                            <th width="15%">Student ID</th>
                            <th width="20%">Student Name</th>
                            <th width="20%">Father Name</th>
                            <th width="20%">Contact No</th>
							<th width="15%">Tazkera</th>
                           
                        </tr>
                    </thead>
                     <tbody>
                    <?php
	  $sqlSel=mysqli_query($con,"select * from  kankor_student_info where kankorID='$kankorid'") or die(mysqli_error($con));
	 while($ts=mysqli_fetch_array($sqlSel))
	  {
	  $stdkanid=$ts['kankorStudentID'];
	
	 $sqlSel2=mysqli_query($con,"SELECT programID FROM kankor_student_choice WHERE kankorStudentID='$stdkanid' AND choiceOrder='0' order by kankorStudentID LIMIT 1") or die(mysqli_error($con));
	  while($rsSel2=mysqli_fetch_array($sqlSel2))
	  {
	  $programoption=$rsSel2['programID'];
	  if($programoption==$program)
	  {
	   $i++;
	 
	  
	  
	  ?>
      <tr>
      	<td ><?php echo $i; ?></td>
        <td ><?php echo $ts['kankorStudentID']; ?></td>
        <td><?php echo $ts['studentName']; ?></td>
        <td><?php echo $ts['fatherName']; ?></td>
        <td><?php echo $ts['contact']; ?></td>
        <td><?php echo $ts['tazkera']; ?></td>
        </tr>
      <?php
	  }}}
	  ?>
                   
                    
                  </tbody>
                </table>
   
         
            
            
        </div>

    
    
</div>

                	</div><!-- #page-content -->
            </div><!-- #page-main -->
        
    </body>
</html>
<?php ob_flush(); ?>
