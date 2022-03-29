<?php 
include "config.php";

	$id=$_POST['upid'];
	$p_name=$_POST['p_uname'];
	$p_price=$_POST['p_uprice'];
	$p_category=$_POST['p_ucategory'];
	$p_description=$_POST['p_udescription'];

	$status=$_POST['status'];
if($_FILES['p_uimage']['name']=' '){

				// session_start();
				// $name=$_SESSION['name'];
				$sql1="UPDATE e_products SET p_name='$p_name',p_price='$p_price',p_category='$p_category',p_description='$p_description',status='$status' WHERE id=$id ";

				$res1=mysqli_query($con,$sql1);
				if ($res1) {
					echo 2;
				}
				else{
					echo "Something Went Wrong";
				}
}

else{
	echo "Wrror";
}

 ?>