<?php 

include "config.php";
if (isset($_POST['submit']))
 {
	$user_name=$_POST['user_name'];
	$user_password=$_POST['user_password'];
	$role="Admin";
		$sql="SELECT * FROM e_admin WHERE admin_name='$user_name' AND admin_password='$user_password' AND role='$role'";
	$res=mysqli_query($con,$sql);
	if(mysqli_num_rows ($res) > 0)
	{

		while($row=mysqli_fetch_assoc($res))
		{
			
			session_start();
			$_SESSION['name']=$row['admin_name'];
		}
			
			
			header("location:home.php");
	}
	else
	{
		?>
			<script>
				alert ("Invalid Details");
				window.location.replace("index.php");
			</script>
		<?php
	}
	
}
 ?>