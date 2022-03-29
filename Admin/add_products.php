<?php 
include "config.php";

	$p_name=$_POST['p_name'];
	$p_price=$_POST['p_price'];
	$p_category=$_POST['p_category'];
	$p_description=$_POST['p_description'];

	$status="In Stock";

	$filename=$_FILES['p_image']['name'];

	// $temp=$_FILES['p_image']['tmp_name'];

	$extension=pathinfo($filename,PATHINFO_EXTENSION);

	$valid_extension=array("jpg","jpeg","png","gif");

	if (in_array($extension,$valid_extension)) {
		
			$new_name=rand() . "." . $extension;
			$path="images/" . $filename;

			if (move_uploaded_file($_FILES['p_image']['tmp_name'], $path)) {

				session_start();
				$p_id=$_SESSION['name'];

				$sql="INSERT INTO e_products(p_name,p_price,p_category,p_description,p_image,p_id,status) VALUES ('$p_name','$p_price','$p_category','$p_description','$path','$p_id','$status')";
				$res=mysqli_query($con,$sql);
				if ($res) {
					echo 1;
				}
				else{
					echo "Something Went Wrong";
				}
				
				




			}

	}




 ?>