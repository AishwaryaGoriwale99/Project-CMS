
<?php include('header.php');?>
<?php include('connection/connection.php');?>
 <link rel="stylesheet" href="css/bar.css" type="text/css" />
  <h2 class="ph">SEARCH CUSTOMER</h2>
  <div class="ph2"><a href="index.php">HOME &GT;&gt;</a><a href="customer_search.php">CUSTOMER SEARCH</a></div>

<?php


if(isset($_POST['search']))

{
	$tab="<table width='300' border='0'><tr class='header-tr'><td align='center'>Action</td><td align='center'>Photo</td><td align='center'>Name</td><td align='center'>Son of</td><td align='center'>Passport No</td><td align='center'>Manipulation</td></tr>";
	$customer_name=$_POST["customer_name"];
	$a=trim($customer_name);//avoid extra spaces
	
$sql="select*from costomer where full_name like '%$a%' or telephone_no like '%$a%'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num>=1 and $a!="")	//avoid null condition
{
while($res=mysqli_fetch_array($result))
{
	$costomer_id=$res["costomer_id"];
	$uploadimage=$res["uploadimage"];
$name=$res["full_name"];
$son_of=$res['son_of'];
$passport_no=$res["passport_no"];

$tab.="<tr class='header-tr'><td ><table border='1'><td>Document</td><td><a href='document.php?costomer_id=$costomer_id'><img src='images/file_add.png' width='20' height='20' alt='' title'add document'/></a><a href='document_view.php?costomer_id=$costomer_id'><img src='images/icon_view_new.gif' title='View document' /></a></td></tr> </table></td><td width=100 height=100 align='center'><img src='$uploadimage' width=100 height=100/> </td><td align='center'>$name</td><td align='center'>$son_of</td><td align='center'>$passport_no</td><td><table><tr><td><a href='customer_detail.php?costomer_id=$costomer_id'><img src='images/icon_view_new.gif' title='View Customer' /></a></td> <td align='left' valign='top'><a href='customer_edit.php?costomer_id= $costomer_id'><img src='images/edit.png' title='Edit Customer' /></a></td> <td align='left' valign='top'><a href='delete.php?costomer_id= $costomer_id' onclick='return confirm('Are you sure you want to delete?')'><img src='images/delete.png' title='Delete Customer' /></a></td></tr></table></tr>";
}
$tab.='</table>';//table should be end othersise it will not work.
echo $tab;

}else
{
	echo'<div style="color:red" >not found</div>';
}
}
else
{
?>

<form name="form1" action="customer_search_doc.php" method="post">
Customer Name Or Contact No:<input type="text" name="customer_name" />
<input type="submit" value="search" name="search" />
</form>
<?php }?>
<?php include('footer.php');?>