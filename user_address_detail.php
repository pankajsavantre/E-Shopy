<?php 

include "config.php";

$proid=$_POST["proid"];
$p_rid=$_SERVER['REMOTE_ADDR'];
$sql="SELECT * FROM e_cart ";
$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res) > 0)
{

	while ($row=mysqli_fetch_assoc($res)) {
	?>
		

			
		
		
		<span class="text-success">
			Product-Details:
						<span><?php echo $row['p_name'] ?></span>,
						<span><?php echo $row['p_qty'] ?></span>,
						<span><?php echo $row['p_total'] ?></span>
						<span><?php echo $row['zip'];?></span>
		</span>
	<?php
	}
	
}
else
{
	echo "Something Went Wrong";
}

 ?>