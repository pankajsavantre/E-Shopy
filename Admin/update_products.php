<?php 
include "config.php";

$id=$_POST['id'];

$sql="SELECT * FROM e_products WHERE id='$id'" or die("Error");
$res=mysqli_query($con,$sql);

if(mysqli_num_rows($res) > 0)
{
		while ($row=mysqli_fetch_assoc($res))
		 {
			?>

		
<form method="POST" class="save_update_form" accept-charset="utf-8" enctype="multipart/form-data">
      
      <small>
        Product Status:
        <select name="status" class="status form-control"> 
          <option value="In Stock">In Stock</option>
          <option value="Out of Stock">Out of Stock</option>
       </select>
      </small>

      <small> Product Name :</small> <input type="text" name="p_uname" class="form-control p_uname" placeholder="Product Name" value="<?php echo $row['p_name'] ?>" required>

        <input type="text" name="upid" class="upid" hidden value="<?php echo $row['id']; ?>">

         <small class="my-2">Product Price : </small><input type="number" name="p_uprice" class="form-control p_uprice " placeholder="Product Price" value="<?php echo $row['p_price'] ?>" required>

         <small>Product Category : </small>
         <select name="p_ucategory" class="form-control p_ucategory" required>
            <option value="Electronics">Electronics</option>
            <option value="Furniture">Furniture</option>
          </select>

       <small class="my-2">Product Description :  </small><textarea type="text" name="p_udescription" rows="5" class="form-control text-secondary p_udescription " placeholder="Product Description" required><?php echo $row['p_description']?></textarea>
         

         
            <div class="row">
                 <input type="file" name="p_uimage" class="p_uimage form-control col-md-6 mt-5" value="<?php echo $row['p_image'] ?>" >
                <img src="<?php echo $row['p_image'] ?>" class="mt-2 col-md-6 img-fluid" width="100px" height="150px" alt="">
            </div>
          
         <button type="submit" name="save_update_btn" class="btn btn-success save_update_btn" data-upid="<?php echo $row['id'] ?>" >Update</button>
         <button type="reset" class="btn btn-danger">Reset<i class="fa fa-times"></i></button>
        </form> 
       			<?php
		 }
}


 ?>