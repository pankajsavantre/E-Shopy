<?php 
include "config.php";

$sql="DELETE FROM e_cart";
$res=mysqli_query($con,$sql);
if($res){
	echo 1;
}else{
	echo 2;
}

 ?>