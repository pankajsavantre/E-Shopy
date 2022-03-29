<?php 

include "config.php";
	$user_name=mysqli_real_escape_string($con,$_POST['user_name']);
	$user_email=mysqli_real_escape_string($con,$_POST['user_email']);
	$user_mobile=mysqli_real_escape_string($con,$_POST['user_mobile']);
	$user_address=mysqli_real_escape_string($con,$_POST['user_address']);
	$zip_code=mysqli_real_escape_string($con,$_POST['zip_code']);
	$user_password=mysqli_real_escape_string($con,md5($_POST['user_password']));

	$role="user";
	$check="SELECT user_email from e_user where user_email='$user_email'";
	$result=mysqli_query($con,$check);
	if(mysqli_num_rows($result) > 0)
	{
			echo 2;
	}
	else{

	$sql="INSERT INTO e_user(user_name,user_email,user_mobile,user_address,zip_code,user_password,role) VALUES ('$user_name','$user_email','$user_mobile','$user_address','$zip_code','$user_password','$role')";
	$q=mysqli_query($con,$sql);
	if($q)
	{
		echo 1;
	}
	else{
		echo "Something Went Wrong !";
	}
}
 ?>