<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php 
include ('connection/connection.php')

?>
<body>
<div id="loading" class="ui-front loader ui-widget-overlay bg-white opacity-100" align="center"> <img src="../css/header.png" alt="" /> </div>
<div id="page-content-wrapper">
  <div id="page-title">
    <h1 align="center"> ALOMOQADAS Travel Agency Bill </h1>
  </div>
  <!-- #page-title -->
          <table width="75%" class="table table-striped center-margin" align="center" border="1" bordercolor="#666666" bordercolordark="#666666">
            <thead>
              <tr>
                <th width="4%">T.ID</th>
                <th width="7%">Ticket No</th>
                <th width="13%">Customer ID</th>
                <th width="13%">Sector From</th>
                <th width="12%">Sector to</th>
                <th width="13%">Airline Name</th>
                <th width="8%">Airline No</th>
                <th width="6%">Seat No</th>
                <th width="10%">Date of Ticket</th>
                <th width="14%">Date of submit</th>
              </tr>
            </thead>
            <tbody>
     <?php 
	 
	 
  $sql="select*from ticket";
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
 
  while($row=mysqli_fetch_array($result))
  { 	 	
	  $ticket_id=$row["ticket_id"];
	  $ticket_no=$row["ticket_no"];
	  $costomer_id=$row["costomer_id"];
	  $sector_from=$row["sector_from"];
	  $sector_to=$row["sector_to"];
	  $airline_name=$row["airline_name"];
	  $airline_no=$row["airline_no"];
	  $pnr_no=$row["pnr_no"];
	  $date=$row["date"];
	  $date_of_insertion=$row["date_of_insertion"];
	  $inserted_by=$row["inserted_by"];
	 
  ?>
              <tr>
                    <td><?php       echo $ticket_id;         ?></td>
                    <td><?php       echo $ticket_no;         ?></td>
   					<td><?php       echo $costomer_id;       ?></td>
    				<td><?php       echo $sector_from;       ?></td>
  					<TD><?php       echo $sector_to;             ?></td> 
    				<TD><?PHP       echo $airline_name;        ?></TD>    
                    <TD><?PHP       echo $airline_no;        ?></TD>    
                    <TD><?PHP       echo $pnr_no;        ?></TD>    
                    <TD><?PHP       echo $date;        ?></TD>    
                    <td><?php       echo $date_of_insertion;  ?></td>
    				
              </tr>
              <?php
  }
	  ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <!-- #page-content -->
  </div>
  <!-- #page-main -->
</div>
<div style="height:150px">
</div>
<div id="loading" class="ui-front loader ui-widget-overlay bg-white opacity-100" align="center"> <img src="../css/header.png" alt="" /> </div>
<div id="page-content-wrapper">
  <div id="page-title">
    <h1 align="center"> ALOMOQADAS Travel Agency Bill </h1>
  </div>
  <!-- #page-title -->
          <table width="75%" class="table table-striped center-margin" align="center" border="1" bordercolor="#666666" bordercolordark="#666666">
            <thead>
              <tr>
                <th width="4%">T.ID</th>
                <th width="7%">Ticket No</th>
                <th width="13%">Customer ID</th>
                <th width="13%">Sector From</th>
                <th width="12%">Sector to</th>
                <th width="13%">Airline Name</th>
                <th width="8%">Airline No</th>
                <th width="6%">Seat No</th>
                <th width="10%">Date of Ticket</th>
                <th width="14%">Date of submit</th>
              </tr>
            </thead>
            <tbody>
     <?php 
	 
	 
  $sql="select*from ticket where payment_id='$payment_id'";
  $result=mysqli_query($con,$sql) or die(mysqli_error($con));
 
  while($row=mysqli_fetch_array($result))
  { 	 	
	  $ticket_id=$row["ticket_id"];
	  $ticket_no=$row["ticket_no"];
	  $costomer_id=$row["costomer_id"];
	  $sector_from=$row["sector_from"];
	  $sector_to=$row["sector_to"];
	  $airline_name=$row["airline_name"];
	  $airline_no=$row["airline_no"];
	  $pnr_no=$row["pnr_no"];
	  $date=$row["date"];
	  $date_of_insertion=$row["date_of_insertion"];
	  $inserted_by=$row["inserted_by"];
	 
  ?>
              <tr>
                    <td><?php       echo $ticket_id;         ?></td>
                    <td><?php       echo $ticket_no;         ?></td>
   					<td><?php       echo $costomer_id;       ?></td>
    				<td><?php       echo $sector_from;       ?></td>
  					<TD><?php       echo $sector_to;             ?></td> 
    				<TD><?PHP       echo $airline_name;        ?></TD>    
                    <TD><?PHP       echo $airline_no;        ?></TD>    
                    <TD><?PHP       echo $pnr_no;        ?></TD>    
                    <TD><?PHP       echo $date;        ?></TD>    
                    <td><?php       echo $date_of_insertion;  ?></td>
    				
              </tr>
              <?php
  }
	  ?>
            </tbody>
          </table>
<input type="button" value="print" onclick="window.print() ;" />
</body>
</html>