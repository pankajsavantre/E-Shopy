<?php 
include "config.php";
// $id=$_POST['id'];
if(isset($_SESSION['email'])){
	
	
	$p_rid=$_SESSION['email'];
	$sql="SELECT * FROM e_cart WHERE p_rid='$p_rid'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	echo $count;
}else{
	
	$p_rid=$_SERVER['REMOTE_ADDR'];
	$sql="SELECT * FROM e_cart WHERE p_rid='$p_rid'";
	$res=mysqli_query($con,$sql);
	$count=mysqli_num_rows($res);
	echo $count;
}
 ?>
