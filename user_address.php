<?php include "header.php"?>

<div>

		<div class="row">

			<div class="col-md-4">
				
			</div>
			<div class="col-md-8">
				<div class="card ">
					<h4 class="card-header text-center text-success">Address Details</h4>
					<div class="card-deck">
						<div class="card-body">
						
						<form class="place_order_form" method="POST" accept-charset="utf-8">
							<input hidden type="text" name="p_name" class="p_name" value="<?php echo $row['p_name'] ?>" required>
							<input hidden type="text" name="p_price" class="p_price" value="<?php echo $row['p_price'] ?>" required>
							<input hidden type="text" name="p_qty" class="p_qty" value="<?php echo $row['p_qty'] ?>" required>
							<input hidden type="text" name="p_total" class="p_total" value="<?php echo $row['p_total'] ?>" required>
					
							<small>
								Full Name:
								<input type="text" name="cust_name" class="cust_name form-control" required>
							</small>

							<small>
								Mobile Number:
								<input type="tel" name="cust_phone" class="cust_phone form-control" required>
							</small>

							<small>
								Delivery Address:
								<textarea type="text" name="cust_deladdress" class="cust_deladdress form-control" required></textarea>
							</small>

							<small>
								Zip code:
								<input type="number"  name="cust_zipcode" class="cust_zipcode form-control" required>
							</small>
								<input type="radio" name="p_mode" class="p_mode" checked="true" value="cod">
								<button class="btn btn-success w-50 btn-block my-2 btn_order" type="submit" data-order="<?php echo $row['id'] ?>">Place Order</button>

						</form>	
						</div>
					</div>
				</div>
			</div>
			
		</div>	

<?php include "footer.php"?>
	<script>
		$.ajax({
			url:"user_address_detail.php",
			method:"post",
			success:function(data){
				$('.product_detail').html(data);
			}
		})
	</script>