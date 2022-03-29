<?php include "header.php" ?>
<?php 

// include "config.php";
$con=mysqli_connect("localhost","root","","eshop") or die("Unable to connect");
$imgid=$_GET['id'];

$sql="SELECT * From e_products WHERE id='$imgid'";

$res=mysqli_query($con,$sql);
if (mysqli_num_rows($res) > 0) {
	while ($row=mysqli_fetch_assoc($res)) {
	?>
	



	<div class="container desc-main my-5">
	<div class="row">
		<div class="col-md-6 col-12">
			<img data-toggle="magnify" class="desc-img" src="Admin/<?php echo $row['p_image'] ?>" alt="product 1">		
			<ul class="mt-3">
				<li><h3>Product Name: <?php echo $row['p_name']; ?></h3></li>
				<li>Category: <?php echo $row['p_category'] ?></li>
				<!-- <li class="mt-3">
					<button type="submit" class="btn btn-outline-danger mr-3">Add To Bag</button>
					<button  type="submit" class="btn btn-outline-warning ml-3">Wish List</button>
				</li> -->	
				<form method="POST" class="add_to_cart_form" accept-charset="utf-8" enctype="multipart/form-data">
                		<input hidden type="text" name="id" class="id"  value="<?php echo $row['id'] ?>">
                		<input hidden type="text" name="p_name" class="p_name" value="<?php echo $row['p_name'] ?>">
                		<input hidden type="number" name="p_price" class="p_price" value="<?php echo $row['p_price'] ?>">
                		<input hidden type="text" name="p_category" class="p_category" value="<?php echo $row['p_category'] ?>">
                		<input hidden type="text" name="p_image" class="p_image" value="<?php echo $row['p_image'] ?>">
                		<input hidden type="text" name="p_description" class="p_description" value="<?php echo $row['p_description'] ?>">
               	            <?php 

                             if($row['status']=="Out of Stock"){
                                        ?>
                                         <button disabled="true" class="btn btn-danger btn-cart" type="submit" data-cid="<?php echo $row['id'] ?>">Cart | Buy</button> 
                                       
                                        <?php
                                    }else{
                                         ?>
                                        <button class="btn btn-outline-danger mt-3 btn-cart" type="submit" data-cid="<?php echo $row['id'] ?>">Add To Bag</button> 
                                    	
                                    	<a href="index.php#furniture" title="More"><button  type="button" class="btn btn-outline-warning mt-3">More Products</button></a>
                                        <?php
                                    }

                                     ?>

                          
	                            </form>
			</ul>
		</div>

		<div class="col-md-6 product-list">
			<ul>
				<li><h3>Product Name: <?php echo $row['p_name']; ?></h3></li>
				<!-- <li><small class="text-secondary ">QHD+ Display with 90Hz Refresh Rate</small></li> -->
				<li class="my-3">
					<p>
						<span class="desc-product-price">Price: <?php echo number_format($row['p_price'],2,'.',','); ?></span>
						
					<span class="text-success">Inclusive All Taxes</span>
					</p>
				</li>
				<li >
					<ul class="about-product">
					<h5>About This Item</h5>
					<li><?php echo $row['p_description'] ?></li>
					
					</ul>

				</li>
				
			</ul>
		</div>
	</div>
		<hr>
		<div class="text-center">
			<a href="index.php"><i class="fa fa-home"></i><span> Home</span></a>
			  
		</div>
</div>
	<?php
	}
	// echo 1;
}else{
	echo "Something Went Wrong";
}


 ?>
 <?php include "footer.php" ?>
