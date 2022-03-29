<?php
include 'config.php';

if (isset($_SESSION['email'])) {
$username=$_SESSION['email'];
$sql="SELECT *,SUBSTRING_INDEX(status,',',4) FROM e_order WHERE username='$username' ORDER BY id DESC";
$res=mysqli_query($con,$sql);
if (mysqli_num_rows($res) > 0) {
while ($row=mysqli_fetch_array($res)) {
	$status=$row['status'];
	$st=explode("," , $status);
?>


		<div class="card-body">
			
			<div class="row">
				<div class="col-md-6">
					
					<div class="card">
						<h5 class="card-header text-center bg-success text-light">Order Details</h5>
						<div class="card-deck">
							<div class="card-body">
								<div>
									<span class="text-secondary mx-3">
										<strong>Products:</strong>	<?php echo $row['p_name']  ?> .
									</span>  <br>
									<span class="text-secondary mx-3">
										<strong>Total Price:</strong>	<?php echo $row['p_price']  ?> Rs.
									</span> <br>
									<span class="text-secondary mx-3">
										<strong>Shipping Address:</strong>	<?php echo $row['cust_deladdress']  ?>.
									</span> <br>
									<span class="text-secondary mx-3">
										<strong>Payement Mode:</strong>	<?php echo $row['p_mode']  ?>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<h5 class="card-header text-center text-dark bg-warning">Order Status</h5>
						<div class="card-deck">
							<div class="card-body text-center">
								<h5 class="text-center">
									<span class="text-success"><?php echo $row['status'] ?>
										<input type="checkbox" name="status" disabled="true" checked="true">
									</span> ->

								</h5>
								<span><small> <strong><?php echo $row['dates'] ?></strong></small></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			
	</div>
<?php
}
}}else{
	?>
	<div class="text-center mx-auto my-3 w-25">
		<h5 class=" card-header text-dark bg-warning">
			No Orders Pending&nbsp;&nbsp;
			<i class="fa fa-truck"></i>
			<br>
			
		</h5>
		<a href="index.php" class="text-success" title="Home">Back To Home <i class="fa fa-home"></i></a>
	</div>
	<?php

}
?>