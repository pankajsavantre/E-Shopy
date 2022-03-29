<?php 

include "config.php";

$sql="SELECT * FROM e_products";
$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res) > 0)
{
		while ($row=mysqli_fetch_assoc($res)) {
			?>
				<tr>
		          <td>
		          	<?php echo $row['p_name']?>
		          </td>
		          <td>
		          	<img src="<?php echo $row['p_image']?>" width="70px" height="70px" alt="">
		          </td>
		          <td>
		          	<?php echo $row['p_price']?>
		          </td>
		          <td class="w-50">
		          	<?php echo $row['p_description']?>
		          </td>
		          <td class="w-50">
		          	<?php echo $row['p_category']?>
		          </td>
		          <td data-toggle="modal" data-target="#Edit_product">
		          	<button class="btn btn-primary update_btn" data-uid="<?php echo $row['id']; ?>">Edit</button>
		          </td>
		          <td>
		          	<button class="btn btn-danger delete_btn" data-id="<?php echo $row['id']; ?>">Delete</button>
		          </td>
		          <td>
		          	<small class="text-sm-center"><?php
		          	 if($row['status']=="In Stock"){
		          	 ?>
		          	 <span class="text-success"><?php echo $row['status'] ?></span>
		          	 <?php
		          	}else{
		          		 ?>
		          	 <span class="text-danger"><?php echo $row['status'] ?></span>
		          	 <?php
		          	}
		          	  ?>
		          	 	

		          	 </small>
		          </td>
         	</tr>
         <?php
		}
}else{
echo "error";
}

 ?>