
<?php require_once('connection/connection.php'); ?>
<?php include('session.php');?>
<!-- AUI Framework -->
<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body style="overflow: hidden;">
        

        <div id="loading" class="ui-front loader ui-widget-overlay bg-white opacity-100">
            
        </div>

        <div id="page-wrapper" class="demo-example">

           
    <!-- #page-sidebar -->
            <div id="page-content-wrapper">
                <div id="page-title">

       
<h3>
   Search Student Info
    
</h3> <a href="javascript:;" class="float-right font-bold"  onClick="window.open('printStudentKankorProgram.php?kankorID=<?php echo $kankorid; ?>&programID=<?php echo $program; ?>','msgWindow','toolbar=no, scrollbars=no, resizable=no, top=30, left=100, width=1000, height=640')">Print View</a>
                    
</div><!-- #page-title -->
<div id="page-content">

<div class="example-box">
    <div class="example-code">

<div class="row">
<div class="col-md-6 center-margin" style="margin-bottom:30px; ">

                <div class="content-box drop-shadow-alt" style="height:44px; ">
                   
                    <div class="content-box-wrapper" style="padding:4px 20px 4px 50px;">
                 
                    
                  </div>

            </div>
</div>
</div>


    <div class="row">
  
    
    <table class="table table-striped center-margin">
        
                    <thead>
        
                        <tr>
                            <th width="14%">S.No</th>
                            <th width="14%">Student ID</th>
                            <th width="18%">Student Name</th>
                            <th width="18%">Father Name</th>
                            <th width="18%">Contact No</th>
							<th width="18%">Tazkera</th>
                            <th width="14%"> &nbsp; Actions</th>
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
      <td><?php echo $id;?></td>
    <td><?php echo $voucher_no;?></td>
    <td><?php echo $title;?></td>
    <td><?php echo $description;?></td>
    <td><?php echo $amount;?></td>
    <td><?php echo $date;?></td>
        
        <div class="dropdown">
                                    <a href="javascript:;" title="" class="btn medium bg-blue" data-toggle="dropdown">
                                        <span class="button-content">
                                            <i class="glyph-icon font-size-11 icon-cog"></i>
                                            <i class="glyph-icon font-size-11 icon-chevron-down"></i>
                                        </span>
                                    </a>
                                    <ul class="dropdown-menu float-right">

                                        <li>
  <a href="studentInfoShow.php?id=<?php echo $ts['kankorStudentID']; ?>" title="View Detail">
                                                <i class="glyph-icon icon-edit mrg5R"></i>
                                               Detail
                                          </a>
                                        </li>
                                       <li>
<a href="kankor_actions.php?stdID=<?php echo $ts['sequence']; ?>&action=deleteStudentInfo" class="font-red" title="" onClick="<?php echo "return confirm('Are you sure you want to delete?')"; ?>">
                                                <i class="glyph-icon icon-remove mrg5R"></i>
                                                Delete
                                         </a>
                                      </li>
                                    </ul>
              </div>
        
        
        
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
        </div><!-- #page-wrapper -->

    </body>
</html>
<?php ob_flush(); ?>
