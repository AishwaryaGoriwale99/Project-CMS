<?php 
echo $_POST["amount"];
$to = "	";
$from ='email';
$subject ='';
$message ='';
mail($to,$from,$suject,$message);



function delete($table,$id){
	echo $q = "DELETE FROM " .$table. "WHERE id =".$id;
	}
	
	
	delete('category',$_REQUEST['id']);