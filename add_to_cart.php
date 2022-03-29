<?php 


include "config.php";

	$p_name=$_POST['p_name'];
	$p_price=$_POST['p_price'];
	$p_category=$_POST['p_category'];
	$p_description=$_POST['p_description'];
	$p_image=$_POST['p_image'];
	$p_qty=1;
	$p_total=$p_price*$p_qty;
	$id=$_POST['id'];
	// session_start();
if (!isset($_SESSION['email']))
 {
 	$p_rid=$_SERVER['REMOTE_ADDR'];
 	
	$sql1="SELECT * FROM e_cart WHERE p_id='$id' AND p_rid='$p_rid'";
	$res=mysqli_query($con,$sql1);
	if(mysqli_num_rows($res) > 0)
	{
		echo 1;
	}
	else
	{

		$sql="INSERT INTO e_cart(p_name,p_price,p_category,p_image,p_description,p_qty,p_id,p_total,p_rid) VALUES ('$p_name','$p_price','$p_category','$p_image','$p_description','$p_qty','$id','$p_total','$p_rid')";
		$res=mysqli_query($con,$sql);
		if($res)
		{
			echo 2;
		}
		else
		{
			echo "something went wrong";
		}
}
 }
 else
 {	
	$p_rid=$_SESSION['email'];
	
	$sql1="SELECT * FROM e_cart WHERE p_id='$id' AND p_rid='$p_rid' ";
	$res=mysqli_query($con,$sql1);
	if(mysqli_num_rows($res) > 0)
	{
		echo 1;
	}
	else
	{

		$sql="INSERT INTO e_cart(p_name,p_price,p_category,p_image,p_description,p_qty,p_id,p_total,p_rid) VALUES ('$p_name','$p_price','$p_category','$p_image','$p_description','$p_qty','$id','$p_total','$p_rid')";
		$res=mysqli_query($con,$sql);
		if($res)
		{
			echo 2;
		}
		else
		{
			echo "something went wrong";
		}
}
}

 ?>
