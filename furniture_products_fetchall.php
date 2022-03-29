<?php 

include "config.php";

$sql="SELECT * FROM e_products WHERE p_category='furniture'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0)
{
	while ($row=mysqli_fetch_assoc($result)) {
		
		?>
		
            <div class="col-md-2 col-6 my-2">
                <div class="card" >
                    <div class="card_products">
                	<img class="card-img-top img-descid" data-imgid="<?php echo $row['id'] ?>" src="admin/<?php echo $row['p_image'] ?>" alt="Card image" width="180px" height="150px">
                    <div class="card-body">
                        <h4 class="card-title text-lowercase" style="display:inline-block; white-space: nowrap;  overflow: hidden; text-overflow: ellipsis; max-width: 10ch;"><?php echo $row['p_name'] ?></h4>
                        
                        <p class="card-text">
                            <ul class="furniture-product-desc">
                                <li>Price: <strong><?php echo number_format($row['p_price'],2,'.',',');
                                 ?>  </strong>&#8377;</li>
                                 <li>
                                 	<small>
		                                 	<style>
		                                 	.checked {
												 	 color: orange;
												}	
		                                 	</style>
		                                 	<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star checked"></span>
											<span class="fa fa-star"></span>
	                                 </small>
                             	</li>
                                <li>
                                	<?php 

                                    if($row['status']=="In Stock"){
                                        ?>
                                        <strong class="text-success"><?php echo $row['status'] ?></strong>
                                        <?php
                                    }else{
                                         ?>
                                        <strong class="text-danger"><?php echo $row['status'] ?></strong>
                                        <?php
                                    }

                                     ?>
                                </li>
                               
                            </ul>
                        </p>
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
                                        <button class="btn btn-danger btn-cart" type="submit" data-cid="<?php echo $row['id'] ?>">Cart | Buy</button> 
                                    
                                        <?php
                                    }

                                     ?>

                          
	                            </form>
                    </div>

</div>
</div>
                </div>
            </div>
		<?php
	}
}





 ?>