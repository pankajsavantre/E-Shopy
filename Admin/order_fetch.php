<?php 

include "config.php";

$sql="SELECT * FROM e_order";
$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res) > 0)
{
		while ($row=mysqli_fetch_assoc($res)) {
			?>
				<tr>
		          <td>
		          	<?php echo $row['p_name']?>
		          </td>
		         	         
		          <td class="w-50">
		          	<strong><?php echo number_format($row['p_total'],2,'.',',')?> Rs</strong>
		          </td>
		           <td class="w-50">
		          	<strong><?php echo $row['cust_name']?></strong>
		          </td>
		          <td class="w-50">
		          	<strong><?php echo $row['cust_phone']?></strong>
		          </td>
		          <td class="w-50">
		          	<?php echo $row['cust_deladdress']?>
		          </td>
		          <td class="w-50">
		          	<?php echo $row['cust_zipcode']?>
		          </td>
		          <td class="w-50">
		          	<strong><?php echo $row['p_mode']?></strong>
		          </td>
		          <td class="w-50 text-success">
		          	<strong><?php echo $row['status']?></strong>
		          </td>
		          <td data-toggle="modal" data-target="#Edit_order_product">
		          	<button class="btn btn-primary update_btn" data-oeid="<?php echo $row['id']; ?>">Edit</button>
		          </td>
		          <td>
		          	<button class="btn btn-danger order_delete_btn" data-odid="<?php echo $row['id']; ?>">Delete</button>
		          </td>
		          
         	</tr>
         <?php
		}
}else{
	?>
	<div class="text-center mx-auto">
		<h5 class=" card-header text-danger">
			No Orders Available&nbsp;&nbsp;
			<a href="index.php" title="Home"><i class="fa fa-home"></i></a>
			<br>
			
		</h5>
		<!-- <a href="index.php" title="Home">Back To Home <i class="fa fa-home"></i></a> -->
	</div>

	<?php
}

 ?>