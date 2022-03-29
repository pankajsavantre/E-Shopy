<?php 
include "config.php";

	$id=$_POST['upid'];
	$p_name=$_POST['p_uname'];
	$p_price=$_POST['p_uprice'];
	$p_category=$_POST['p_ucategory'];
	$p_description=$_POST['p_udescription'];

	$status=$_POST['status'];

if ($_FILES['p_uimage']['name']!=' ') {

	$filename=$_FILES['p_uimage']['name'];

	// $temp=$_FILES['p_image']['tmp_name'];

	$extension=pathinfo($filename,PATHINFO_EXTENSION);

	$valid_extension=array("jpg","jpeg","png","gif");

	if (in_array($extension,$valid_extension)) {
		
			$new_name=rand() . "." . $extension;
			$path="images/" . $new_name;

			if (move_uploaded_file($_FILES['p_uimage']['tmp_name'], $path)) {

				
				session_start();
				$name=$_SESSION['name'];
				$sql="UPDATE e_products SET p_name='$p_name',p_price='$p_price',p_category='$p_category',p_description='$p_description',p_image='$path',p_id='$name',status='$status' WHERE id=$id ";

				$res=mysqli_query($con,$sql);
				if ($res) {
					echo 1;
				}
				else{
					echo "Something Went Wrong";
				}
		
			}

	}
}

else{
	echo "Error";
}

 ?>