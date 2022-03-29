<?php 
include "config.php";
$id=$_POST["inc"];
$qty=$_POST["count"];

$cart_price=$_POST['cart_price'];
$cart_total_price=$_POST['cart_total_price'];

$total=$qty*$cart_price;

$sql="UPDATE e_cart SET p_qty='$qty',p_total='$total' WHERE id='$id'";
$res=mysqli_query($con,$sql);
if($res){
	echo number_format($total,2,'.',',');
}
else{
	echo "Something went wrong";
}


 ?>