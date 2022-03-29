<?php
include "config.php";
$id=$_POST['id'];
$sql="SELECT * FROM e_order WHERE id='$id'";
$res=mysqli_query($con,$sql);
if(mysqli_num_rows($res) > 0)
{
	while($row=mysqli_fetch_assoc($res)){
?>
<div>
	<div class="card">
		<div class="card-deck">
			<div class="card-body">
				<form  class="order_save_update_form" method="post" accept-charset="utf-8">
						
						<select name="status" class="status form-control w-75" >
							<option value="Packed">Packed</option>
							<option value="Dispatched">Dispatched</option>
							<option value="Transported">Transported</option>
							<option value="Delivered">Delivered</option>}
						</select>

					 <br>
					<small class="text-center float-right" align="center">
						<button class="btn btn-primary btn-sm order_save_update_btn" name="submit" type="submit" data-orid="<?php echo $row['id'] ?>">Update</button>
					</small>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
}
}
?>