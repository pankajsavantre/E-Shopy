<div id="footers">
	<div class="bg-secondary text-center">
		<a href="#top"><span class="text-light"><img src="img/logo.png" width="40px" alt="logo">BACK TO TOP</span></a>
	</div>
	<footer class="card-footer bg-dark text-light cards" >
		<span>Copyright © E-Shop 2022</span>
		</footer>
		<div class="email">
			
		</div>
</div>
<?php include "assets/newjs.php" ?>
<script>
$(document).ready(function(){
	$(window).scrollTop(0);
	$(".nav-left").click(function()
	{
		$('.nav-left').removeClass("active");
		$(this).addClass("active");
	});


// ===================================================user-signup====================================================
	$('.signup').click(function(e) {
	
		e.preventDefault();
		var user_name=$('#user_name').val();
		var user_email=$('#user_email').val();
		var user_mobile=$('#user_mobile').val();
		var user_password=$('#user_password').val();
		var user_address=$('#user_address').val();
		var zip_code=$('#zip_code').val();
		var user_name_pattern=/^[a-zA-Z. ]*$/;
		var user_mobile_pattern=/^[0-9]{10}$/;
		var user_email_pattern=/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-.]+$/;
		var a=[$('#user_name'),$('#user_email'),$('#user_mobile'),$('#user_address'),$('#zip_code'),$('#user_password')];
		var all=[user_name,user_email,user_mobile,user_address,zip_code,user_password];
		if(all[0]=="" && all[1]=="" && all[2]=="" && all[3] == "" && all[4]=="" && all[5]=="")
		{
			a[0].addClass('is-invalid');
			a[1].addClass('is-invalid');
			a[2].addClass('is-invalid');
			a[3].addClass('is-invalid');
			a[4].addClass('is-invalid');
			a[5].addClass('is-invalid');
		}
		else{
			if(all[0]=="")
			{
				a[0].addClass('is-invalid');
				return false;
			}
			else
			{
				a[0].addClass('is-valid');
				a[0].removeClass('is-invalid');
			}
			if(all[1]=="")
			{
				a[1].addClass('is-invalid');
				return false;
			}
			else
			{
				a[1].addClass('is-valid');
				a[1].removeClass('is-invalid');
			}
			if(all[2]=="")
			{
				a[2].addClass('is-invalid');
				return false;
			}
			else
			{
				a[2].addClass('is-valid');
				a[2].removeClass('is-invalid');
			}
			if(all[3]=="")
			{
				a[3].addClass('is-invalid');
				return false;
			}
			else
			{
				a[3].addClass('is-valid');
				a[3].removeClass('is-invalid');
			}
			if(all[4]=="")
			{
				a[4].addClass('is-invalid');
				return false;
			}
			else
			{
				a[4].addClass('is-valid');
				a[4].removeClass('is-invalid');
			}
			if(all[5]=="")
			{
				a[5].addClass('is-invalid');
				return false;
			}
			else
			{
				a[5].addClass('is-valid');
				a[5].removeClass('is-invalid');
			}
			$.ajax({
				url:"user_signup.php",
				type:'POST',
				data:{
					user_name:user_name,
					user_email:user_email,
					user_mobile:user_mobile,
					user_address:user_address,
					zip_code:zip_code,
					user_password:user_password
				},
				success:function(res){
					if(res==2)
						alert("User Already Exists");
					else if(res==1){
						alert("Registered SuccessFully");
						location.reload();
					}
					else
						alert("Something Went Wrong"+res);
						// location.reload();
				}
			});
		}
});
// =======================================User ogin=====================================

	
		$('.login').click(function(e) {
			e.preventDefault();
			
			var username=$('#username').val();
			var userpassword=$('#userpassword').val();
			var a=[$('#username'),$('#userpassword')];
			var all=[username,userpassword];
			
			if(all[0]=="" && all[1]=="" )
			{
				a[0].addClass('is-invalid');
				a[1].addClass('is-invalid');
				
			}
			else
			{
				if(all[0]=="")
				{
					a[0].addClass('is-invalid');
					return false;
				}
				else
				{
					a[0].addClass('is-valid');
					a[0].removeClass('is-invalid');
				}
				if(all[1]=="")
				{
					a[1].addClass('is-invalid');
					return false;
				}
				else
				{
					a[1].addClass('is-valid');
					a[1].removeClass('is-invalid');
				}
				
				$.ajax({
					url:"user_login.php",
					type:"POST",
					data:{
						username:username,
						userpassword:userpassword
					},
					success:function(res){

						if(res==1)
						{
							alert("Login SuccessFully");
							location.reload();
						}
						else
							alert("Invalid Credentials");
							location.reload();
					}
				});
			}
		
		});
// =====================================================Logout===============================================
$('#logout').click(function(){
	var conf=confirm("Are Sure? Logout from this window");
	if(conf==true)
	{
		$.ajax({
			url:"logout.php",
			type:'POST',
			data:{
				logout_id:1
			},
			success:function(res)
			{
				
					location.reload();
					window.location.replace("index.php");
			}
		});
	}
});
// ==================================================Cart qty value============================================

	var count=1;
	var price=$('.hidden_total_price').val();
	
	$(document).on("click",".plus",function(e){
		var cart_price=$('.cart_price').val();
		var cart_total_price=$('.cart_total_price').val();
		var qtyvalue=$('.qtyvalue').val();
		var inc=$(this).data("inc");

		if(qtyvalue < 5)
		{
			qtyvalue++;
			// var tprice=count * price;
			// $('.total_price').html(tprice.toLocaleString());
			$('.qtyvalue').val(qtyvalue);
			window.location.reload("cart.php");
			$.ajax({
				url:"product_increment.php",
				type:"POST",
				data:{
					inc:inc,
					count:qtyvalue,
					cart_price:cart_price,
					cart_total_price:cart_total_price
				},
				success:function(res){

					$('.total_price').html(res);
				
				}
			});

		}
		else
		{
			alert("Max 5 Allowed");
		}

		

	});
// =================================================decrement quantity===================================
	$(document).on("click",".minus",function(e){

		var cart_price=$('.cart_price').val();
		var cart_total_price=$('.cart_total_price').val();
		var qtyvalue=$('.qtyvalue').val();
		// alert(qtyvalue)
		var dec=$(this).data("dec");

		if(qtyvalue > 1)
		{
			qtyvalue--;
			$('.qtyvalue').val(qtyvalue);
			window.location.reload("cart.php");
			$.ajax({
				url:"product_decrement.php",
				type:"POST",
				data:{
					dec:dec,
					count:qtyvalue,
					cart_price:cart_price,
					cart_total_price:cart_total_price
				},

				success:function(res)
				{
					$('.total_price').html(res);

					
				}
			});
		
		}
		else
		{
			alert("Quantity Cannot be Nagetive");
		}
		
	});

// -----------------------------------------product_indexpage_electronics_fetch______________________

$.ajax({
	url:"product_index_electronics_fetch.php",
	method:"get",
	success:function(res){
		$('.card_products').html(res);
	}

});
// ===========================================product_indexpage_furniture_fetch=========================
$.ajax({
	url:"product_index_furniture_fetch.php",
	method:"get",
	success:function(res){
		$('.furniture_products').html(res);
	}

});
// ------------------------------------Add_to cart-----------------------------------------

$(document).on("submit",".add_to_cart_form",function(e){
	e.preventDefault();
	var uid=$(this).data("cid");
	var formdata=new FormData(this);
	var id=uid*2;
	
	

	$.ajax({
			url:"add_to_cart.php",
			type:"POST",
	        data:formdata,
	        processData: false, 
			contentType: false,
    	   	success:function(data){
    	   		 if(data==1)
        		{
        			alert("Product Already Exists");

        		}else if(data==2){
        			alert("Product added to cart Successfully!!");
        			location.reload();
        		}else{
        			alert(data);
        		}
        	}
	});
});

// ------------------------------------cart-count============================================
$.ajax({
	url:"cart_product_count.php",
	method:"POST",
		success:function(res)
	{
		$('.cart-badge').html(res);
			}
});
// ===========================================cart-page===========================================
$.ajax({
	url:"cart_product_fetch.php",
	method:"post",
	success:function(res){
		$('.cart_products_detail').html(res);
		
	}
});
// ================================================cart-right-proceed================================
$.ajax({
	url:"proceed_cart_details.php",
	method:"post",
	success:function(res){
		$('.proceed_cart').html(res);
		
	}
});

// ==========================================Proceed to buy button=================================

$(document).on("click",".pro_buy_btn",function(){
	var proid=$(this).data("proid");
	$.ajax({
		url:"user_address_detail.php",
		method:"post",
		data:{proid:proid},
		success:function(data){
		$('.proceed-data').html(data);
		}
	});
});
// ================================================place order==============================
$(document).on("submit",'.place_order_form',function(e){
e.preventDefault();
	var formdata=new FormData(this);
	$('.load').html('</div><div class="spinner-border text-primary"></div><div class="spinner-border text-success"></div><div class="spinner-border text-info"></div><div class="spinner-border text-warning"></div><div class="spinner-border text-danger"></div><div class="spinner-border text-secondary"></div><div class="spinner-border text-dark"></div><div class="spinner-border text-light"></div><br> <h5>Loading...</h5> <small class="text-danger text-center"><strong>Important! => *Dont Hit Back button or Refresh</strong></small>');
	$('.detext').hide();
	$.ajax({
		url:"place_order_detail.php",
		method:"POST",
		data:formdata,
		processData: false, 
		contentType: false,
		success:function(data){
			if (data==1) {
				alert("Placed Successfully");
				setTimeout(function(){
					$.ajax({
						url:"delete_order.php",
						method:"post",
						data:formdata,
						processData: false, 
						contentType: false,
						success:function(res){
							
							window.location.replace("index.php");
						}
					});
				},500);
				}
			else{
				alert(data);
			}
		}
	});

});
// ===========================================delete cart========================================
$(document).on("click",'.delbtn',function(){
	var id=$(this).data("delid");
	
	if(confirm("Are You Sure Delete Item ??")){
		$.ajax({
			url:"delete_cart_item.php",
			type:"POST",
			data:{id:id},
			success:function(res){

				window.location.replace("index.php");
			}
		});
	}else{
		window.location.reload();	
	}
});
// ==============================order_track======================================
$.ajax({
	url:"order_track_detail.php",
	type:"POST",
	success:function(res){
		$('#track_order').html(res);
	}
});
// ================================view all furniture products===================================

	$.ajax({
	url:"furniture_products_fetchall.php",
	type:"POST",
	success:function(res){
		$('.all_furniture_products').html(res);
	}
});

	// ============================view all Electronics=============================================
	$.ajax({
	url:"electronics_product_fetchall.php",
	type:"POST",
	success:function(res){
		$('.all_electronic_products').html(res);
	}
});
// ===========================de3scription=============================
$(document).on("click",".img-descid",function(){
	var id=$(this).data("imgid");
	// alert(id);
	$.ajax({
		url:"description_detail.php",
		type:"POST",
		data:{id:id},
		success:function(res){
			$('.show-desc').html(res);
				window.location="description_detail.php?id="+id;
	}
	});
});
$('.furnitures').hide();
$('.product_search').on("keyup",function(){
	var pro=$('.product_search').val();
	if(pro !=""){
		$.ajax({
		url:"product_search.php",
		type:"POST",
		data:{pro:pro},
		success:function(res){
			$('.furnitures').show();
			$('#poster-bg').hide();
			$('#electronics').hide();
			$('#furniture').hide();
			$('.search_products').html(res);

		}

	});
		}
		else
		{
			$('.furnitures').hide();
			$('#poster-bg').show();
			$('#electronics').show();
			$('#furniture').show();
			$('.search_products').html("");
		}
});
// ================================Electronic search======================================
$('.electronic_search').on("keyup",function(){
	var key=$('.electronic_search').val();
	if(key !=""){
		$.ajax({
		url:"electronic_search.php",
		type:"POST",
		data:{key:key},
		success:function(res){
			$('.all_electronic_products').html(res);
			
		}

	});
		}
		
});
// ------------------------------furniture search---------------------------------------
$('.furniture_search').on("keyup",function(){
	var key=$('.furniture_search').val();
	if(key !=""){
		$.ajax({
		url:"furniture_search.php",
		type:"POST",
		data:{key:key},
		success:function(res){
			$('.all_furniture_products').html(res);
			
		}

	});
		}
		
});
// ============================================Email===================================

// -----------------------------------------end----------------------------------------------
});
</script>
</body>
</html>