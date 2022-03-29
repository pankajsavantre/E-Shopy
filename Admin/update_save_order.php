<?php 
include "config.php";
$id=$_POST['id'];
$status=$_POST['status'];
$date=date("d-M-Y h:i:s A");
$sql="UPDATE e_order SET status='$status',dates='$date' WHERE id=$id";
$res=mysqli_query($con,$sql);
if($res){
	echo 1;
}
else{
	echo "Something Went Wrong";
}

 ?>