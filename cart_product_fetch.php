<?php 

include "config.php";

if(isset($_SESSION['email'])){

$p_rid=$_SESSION['email'];
$sql="SELECT * FROM e_cart WHERE p_rid='$p_rid'";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res) > 0)
{
	while($row=mysqli_fetch_assoc($res))
	{
	?>


<!-- The Modal -->
<div class="modal modal_proceed" id="myModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header text-center">
        <h4 class="modal-title text-primary text-primary" align="center">Address Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body proceed-data">
       
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
	<div class="col-md-11 mx-auto" id="cart-bg" >
			<div class="container">
				<span class="shoping-cart-text"><img src="img/logo.png" width="40px" alt="logo">Shopping Cart</span>
				<span class="float-right cart-top-price">Price</span>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-3">
					<img src="Admin/<?php echo $row['p_image'] ?>" width="200rem" height="250rem;" />
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-11 ">
							<ul>
								<li>
									<h6>
									<?php echo $row['p_description'] ?>
									</h6>
									
									<span class="text-success"><?php echo $row['status'] ?></span>
								</li>
								<li>
									<span class="bg-secondary">
										<small><img src="img/logo.png" class="" width="40px" height="30px" alt=""><span class="text-light mr-2">Fullfilled</span></small>
									</span>
								</li>
								<li>
									<ul  class="cart-desc">
										<!-- <li><strong>Color : </strong><span>Campaign Gold</span></li> -->
										<!-- <li><strong>Style Name : </strong><span>4 GB RAM +128 GB Storage</span></li> -->
										<li><strong>Pattern Name : </strong><span><?php echo $row['p_name'] ?></span></li>
										<li>
											<div class="input-group mb-3 w-25">
												<div class="input-group-prepend">
													<button type="submit" class="input-group-text plus" data-inc="<?php echo $row['id'] ?>">+</button>
												</div>
												
												<input type="number" name="qtyvalue" class="form-control w-25 qtyvalue" min="1" value="<?php echo $row['p_qty'] ?>">
												
												<div class="input-group-prepend">
													<button type="submit" class="input-group-text minus" data-dec="<?php echo $row['id'] ?>">-</button>
												</div>
											</div>
										</li>
									</ul>
									
								</li>
							</ul>
						</div>
						<div class="col-md-1 float-right">
							<span class="text-center ml-4"><?php echo number_format($row['p_price'],2,'.',',') ?></span>
							<input hidden type="text" class="cart_price" name="cart_price" value="<?php echo $row['p_price'] ?>">

						</div>
							<small>
						<i class="fa fa-trash text-danger mx-4 delbtn" type="submit" data-delid="<?php echo $row['id'] ?>">
							<small class="text-danger">Delete Item</small>
						</i>
						</small>
					</div>

				</div>
				
			</div>
			<hr>
			<div class="float-right">
                <input type="hidden" name="hidden_total_price" class="hidden_total_price" value="14999">
				<span>Sub Total(1 item) :<span class="total_price"> <?php echo number_format($row['p_total'],2,'.',',') ?></span> Rs</span>
					<input hidden type="text" class="cart_total_price" name="cart_total_price" value="<?php echo $row['p_total'] ?>">
			</div>

		</div>

 	
	<?php
	}
}
else{
	?>
		<div class="text-center mx-auto">
		<h5 class=" card-header text-danger">
			No Items Available&nbsp;&nbsp;
			<i class="fa fa-database"></i>
			<br>
			
		</h5>
		<a href="index.php" title="Home">Back To Home <i class="fa fa-home"></i></a>
	</div>
	<?php
}
}
else{
$p_rid=$_SERVER['REMOTE_ADDR'];
$sql="SELECT * FROM e_cart WHERE p_rid='$p_rid'";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res) > 0)
{
	while($row=mysqli_fetch_assoc($res))
	{
	?>


<!-- The Modal -->
<div class="modal modal_proceed" id="myModal">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header text-center">
        <h4 class="modal-title text-primary text-primary" align="center">Address Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body proceed-data">
       
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
	<div class="col-md-11 mx-auto" id="cart-bg" >
			<div class="container">
				<span class="shoping-cart-text"><img src="img/logo.png" width="40px" alt="logo">Shopping Cart</span>
				<span class="float-right cart-top-price">Price</span>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-3">
					<img src="Admin/<?php echo $row['p_image'] ?>" width="200rem" height="250rem;" />
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-11 ">
							<ul>
								<li>
									<h6>
									<?php echo $row['p_description'] ?>
									</h6>
									
									<span class="text-success">In Stock</span>
								</li>
								<li>
									<span class="bg-secondary">
										<small><img src="img/logo.png" class="" width="40px" height="30px" alt=""><span class="text-light mr-2">Fullfilled</span></small>
									</span>
								</li>
								<li>
									<ul  class="cart-desc">
										<!-- <li><strong>Color : </strong><span>Campaign Gold</span></li> -->
										<!-- <li><strong>Style Name : </strong><span>4 GB RAM +128 GB Storage</span></li> -->
										<li><strong>Pattern Name : </strong><span><?php echo $row['p_name'] ?></span></li>
										<li>
											<div class="input-group mb-3 w-25">
												<div class="input-group-prepend">
													<button type="submit" class="input-group-text plus" data-inc="<?php echo $row['id'] ?>">+</button>
												</div>
												
												<input type="number" name="qtyvalue" class="form-control w-25 qtyvalue" min="1" value="<?php echo $row['p_qty'] ?>">
												
												<div class="input-group-prepend">
													<button type="submit" class="input-group-text minus" data-dec="<?php echo $row['id'] ?>">-</button>
												</div>
											</div>
										</li>
									</ul>
									
								</li>
							</ul>
						</div>
						<div class="col-md-1 float-right">
							<span class="text-center ml-4"><?php echo number_format($row['p_price'],2,'.',',') ?></span>
							<input hidden type="text" class="cart_price" name="cart_price" value="<?php echo $row['p_price'] ?>">

						</div>
						<small>
						<i class="fa fa-trash text-danger mx-4 delbtn" type="submit" data-delid="<?php echo $row['id'] ?>">
							<small class="text-danger">Delete Item</small>
						</i>
						</small>
					</div>

				</div>
				
			</div>
			<hr>
			<div class="float-right">
                <input type="hidden" name="hidden_total_price" class="hidden_total_price" value="14999">
				<span>Sub Total(1 item) :<span class="total_price"> <?php echo number_format($row['p_total'],2,'.',',') ?></span> Rs</span>
					<input hidden type="text" class="cart_total_price" name="cart_total_price" value="<?php echo $row['p_total'] ?>">
			</div>
		</div>

 	
	<?php
	}
}
else{
	?>
	<div class="text-center mx-auto">
		<h5 class=" card-header text-danger">
			No Items Available&nbsp;&nbsp;
			<i class="fa fa-database"></i>
			<br>
			
		</h5>
		<a href="index.php" title="Home">Back To Home <i class="fa fa-home"></i></a>
	</div>
	<?php
}
}

 ?>