<?php 
include "config.php";
$username=$_POST['username'];
$userpassword=md5($_POST['userpassword']);
$name="";
$email="";
$mobile="";
$address="";
$zip="";
$sql="SELECT * FROM e_user WHERE user_email='$username' AND user_password='$userpassword'";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res) > 0 )
{
	while ($row=mysqli_fetch_assoc($res)) {
		// session_start();
		$name.=$row['user_name'];
		$email.=$row['user_email'];
		$mobile.=$row['user_mobile'];
		$address.=$row['user_address'];
		$zip.=$row['zip_code'];
	}
	echo 1;
	$_SESSION['name']=$name;
	$_SESSION['email']=$email;
	$_SESSION['address']=$address;
	$_SESSION['zip']=$zip;
	$_SESSION['mobile']=$mobile;
}else{
	echo "Something Crazy!";
}

 ?>
