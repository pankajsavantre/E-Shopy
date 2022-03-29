<?php 
include "config.php";

$id=$_POST["id"];

$sql="DELETE FROM e_products WHERE id='$id' ";
$res=(mysqli_query($con,$sql));
if($res)
{
	echo 1;
}else{
	echo 0;
}

 ?>