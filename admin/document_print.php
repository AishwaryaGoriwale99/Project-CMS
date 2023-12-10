<style>
.print
{
	width:auto;
	height:100%;
	
	

	
 
 
}
</style>
<form name="form1">

<img   class="print" src="<?php echo $_REQUEST['document']; ?>" /> <br>
<input type="button" onClick="window.print() ;" value="print" size="20"  />
</form>
<?php
 ?>