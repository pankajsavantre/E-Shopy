<?php
include "config.php";
if (isset($_SESSION['email'])) {

	$p_rid=$_SESSION['email'];
	$sql="SELECT *,SUM(p_total) AS p_tot,SUM(p_qty) AS p_qt,group_concat(p_name separator ',') AS p_nm,group_concat(p_price separator ',') AS p_prc FROM e_cart WHERE p_rid='$p_rid' GROUP BY(p_rid)";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res) > 0)
{
	while($row=mysqli_fetch_assoc($res))
	{
?>
<div class="container">
	
	<div class="card  my-3">
		<span class="card-header">Total-Price</span>
		<div class="card-deck">
			<div class="card-body">
				
				<div class="row">
					<div class="col-md-8 ml-2">
						<strong>
						<span>Total Price:- <?php echo number_format($row['p_tot'],2,'.',',') ?> Rs</span> <br>
						<span>Total Items:- <?php echo $row['p_qt'] ?></span> <br>
						<span>Product:- <?php echo $row['p_nm'] ?></span>
						
						</strong>
					</div>
					<div class="col-md-3">
						<button type="submit" class="btn btn-warnig" data-toggle="modal" data-target="#proceed_cart_dailog_btn" style="background:#ffff60;color:#000">Proceed To Buy</button>
					
						<!-- The Modal -->
						<div class="modal" id="proceed_cart_dailog_btn">
							<div class="modal-dialog">
								<div class="modal-content">
									<!-- Modal Header -->
									<div class="modal-header bg-secondary">
										<span class="modal-title text-center text-light mx-auto">
											<span class="text-center">Product Details:</span> <br>
											<span>Products: <?php echo $row['p_nm'] ?></span> <br>
											<span>Total Price:- <?php echo number_format($row['p_tot'],2,'.',',') ?></span>
										</span>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<!-- Modal body -->
									<div class="modal-body">
										<center>
										<div class="load mx-auto">
											
										</div>

										</center>
										<form class="place_order_form" method="POST" accept-charset="utf-8">
							<input hidden type="text" name="p_name" class="p_name" value="<?php echo $row['p_nm'] ?>" required>
							<input hidden type="text" name="p_price" class="p_price" value="<?php echo $row['p_prc'] ?>" required>
							<input hidden type="text" name="p_qty" class="p_qty" value="<?php echo $row['p_qt'] ?>" required>
							<input hidden type="text" name="p_total" class="p_total" value="<?php echo $row['p_tot'] ?>" required>
								<input hidden type="text" name="p_img" class="p_img" value="<?php echo $row['p_image'] ?>" required>
							<input hidden type="text" name="username" class="username" value="<?php echo $_SESSION['email'] ?>">
							<small class="text-danger detext">* If You Want To Change The Details Then you can Change The Details</small> <br>

							<small>
								Full Name:
								<input type="text" name="cust_name" class="cust_name form-control" value="<?php echo $_SESSION['name'] ?>" required>
							</small>

							<small>
								Mobile Number:
								<input type="tel" name="cust_phone" class="cust_phone form-control" value="<?php echo $_SESSION['mobile']; ?>" required>
							</small>
							<small>
								Email Address:
								<input type="tel" name="username" class="username form-control" value="<?php echo $_SESSION['email']; ?>" required>
							</small>
							<small>
								Delivery Address:
								<textarea type="text" name="cust_deladdress" class="cust_deladdress form-control" required><?php echo $_SESSION['address']; ?> </textarea>
							</small>

							<small>
								Zip code:
								<input type="number"  name="cust_zipcode" class="cust_zipcode form-control" value="<?php echo $_SESSION['zip']; ?>" required>
							</small>
							<h5>Payement:</h5>
							<small>
								1: Cash On Delivery

								<input type="radio" name="p_mode" class="p_mode" checked="true" required value="cod"> <br>
								<small class="text-danger">Online Payement Not Available due to Payement Risks</small>
							</small>
								<!-- <input type="radio" name="p_mode" class="p_mode"  value="cod"  required> -->
								<button class="btn btn-success w-50 btn-block my-2 btn_order" type="submit" data-order="<?php echo $row['id'] ?>">Place Order</button>

						</form>	
									</div>
									<!-- Modal footer -->
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<?php
		}
	}
}

else if(!isset($_SESSION['email'])){
$p_rid=$_SERVER['REMOTE_ADDR'];
$sql="SELECT *,SUM(p_total) AS p_tot,SUM(p_qty) AS p_qt,group_concat(p_name separator ',') AS p_nm,group_concat(p_price separator ',') AS p_prc FROM e_cart WHERE p_rid='$p_rid' GROUP BY(p_rid)";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res) > 0)
{
	while($row=mysqli_fetch_assoc($res))
	{
?>
<div class="container">
	
	<div class="card  my-3">
		<span class="card-header">Total-Price</span>
		<div class="card-deck">
			<div class="card-body">
				
				<div class="row">
					<div class="col-md-8 ml-2">
						<strong>
						<span>Total Price:- <?php echo number_format($row['p_tot'],2,'.',',') ?> Rs</span> <br>
						<span>Total Items:- <?php echo $row['p_qt'] ?></span> <br>
						<span>Product:- <?php echo $row['p_nm'] ?></span>
						
						</strong>
					</div>
					<div class="col-md-3">
						<button type="submit" class="btn btn-warnig" data-toggle="modal" data-target="#proceed_cart_dailog_btn" style="background:#ffff60;color:#000">Proceed To Buy</button>
					
						<!-- The Modal -->
						<div class="modal" id="proceed_cart_dailog_btn">
							<div class="modal-dialog">
								<div class="modal-content">
									<!-- Modal Header -->
									<div class="modal-header bg-secondary">
										<span class="modal-title text-center text-light mx-auto">
											<span class="text-center">Product Details:</span> <br>
											<span>Products: <?php echo $row['p_nm'] ?></span> <br>
											<span>Total Price:- <?php echo number_format($row['p_tot'],2,'.',',') ?></span>
										</span>
										<button type="button" class="close" data-dismiss="modal">&times;</button>
									</div>
									<!-- Modal body -->
									<div class="modal-body">
										<form  class="place_order_form" method="POST" accept-charset="utf-8">
							<input hidden type="text" name="p_name" class="p_name" value="<?php echo $row['p_nm'] ?>" required>
							<input hidden type="text" name="p_price" class="p_price" value="<?php echo $row['p_prc'] ?>" required>
							<input hidden type="text" name="p_qty" class="p_qty" value="<?php echo $row['p_qt'] ?>" required>
							<input hidden type="text" name="p_total" class="p_total" value="<?php echo $row['p_tot'] ?>" required>
					<strong class="text-warning">Please Login to Place Order !!</strong> <br>
							<small>
								Full Name:
								<input type="text" disabled="true"  name="cust_name" class="cust_name form-control" required>
							</small>

							<small>
								Mobile Number:
								<input type="tel" disabled="true" name="cust_phone" class="cust_phone form-control" required>
							</small>

							<small>
								Delivery Address:
								<textarea type="text" disabled="true" name="cust_deladdress" class="cust_deladdress form-control" required></textarea>
							</small>

							<small>
								Zip code:
								<input type="number" disabled="true" name="cust_zipcode" class="cust_zipcode form-control" required>
							</small>
							<h5>Payement:</h5>
							<small>
								
								<select name="p_mode" disabled="true" class="form-control p_mode w-50">
									<option value="cod"  selected="true">Cash On Delivery</option>
									<option class="text-warning" disabled="true">Other[Not Available]</option>
								</select>
								<!-- <input type="radio" name="p_mode" class="p_mode"  selected="true"> --> <br>
								<small class="text-danger">Online Payement Not Available due to Payement Risks</small>
							</small>
								<input type="radio" name="p_mode" class="p_mode" checked="true" value="cod" hidden required>
								<button class="btn btn-success w-50 btn-block my-2 btn_order" type="submit" data-order="<?php echo $row['id'] ?>" disabled="true">Place Order</button>

								<strong class="text-warning">Please Login to Place Order !!</strong>

						</form>	
									</div>
									<!-- Modal footer -->
									<div class="modal-footer">
										<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<?php
		}
	}
}
else{
	echo "SOmething Went Wrong!";
}
?>