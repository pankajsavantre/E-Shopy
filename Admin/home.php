<?php 
session_start();
if(!isset($_SESSION['name'])){
  header("location:index.php");
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin | Home</title>
	<?php include "../assets/newcss.php" ?>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-md">
  <!-- Brand -->
  <a class="navbar-brand" href="#"> <img class="brand-logo" src="../img/logo.png" width="60px"  alt="">
  	<span class="text-light">Welocme, Admin</span>
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
 <ul class="nav nav-tabs ml-auto" role="tablist">
    <li class="nav-item float-right">
      <a class="nav-link active" data-toggle="tab" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#product">Products</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#order">Orders</a>
    </li>
    
     <li class="nav-item admin_name">
      <a class="nav-link name" href="logout.php"> <span class="text-uppercase namespan"> <?php echo $_SESSION['name']; ?></span></a>
    </li>
  </ul>
  </div>
</nav>

<div class="container-fluid">
  
  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class=" tab-pane active"><br>
  
        <!-- Header - set the background image for the header in the line below-->
        <header class="py-5 bg-image-full" style="background: url(../img/pos7.jpg) no-repeat  center;background-size: 100%; ">
            <div class="text-center my-5">
                <img class="img-fluid  rounded-circle mb-4 " src="../img/logo.png" width="150" alt=".hh.." /> 
                <h1 class="text-white float-left p-2  fs-3 fw-bolder text-uppercase"><img src="../img/star.png" width="100px" height="100px" alt=""> <br>Welcome , <?php echo $_SESSION['name']; ?> </h1>
                <p class="text-white-50 mb-0">E-shop Admin</p>
            </div>
        </header>
        <!-- Content section-->
        <section class="my-3">
          
        </section>
        </section>
        <!-- Image element - set the background image for the header in the line below-->
        
                <!-- Content section-->
       <div class="row my-2">
         <div class="col-md-6">
           <div class="py-5 bg-image-full" style="background: url('../img/pos8.jpg') no-repeat fixed center;background-size:100%;">
            <!-- Put anything you want here! The spacer below with inline CSS is just for demo purposes!-->
            <div style="height: 20rem"></div>
        </div>

         </div>
         <div class="col-md-6">
            <h4 class="text-center font-weight-bold">Admin Panel Features</h4>
           <ul class="text-center">
             <li class="my-3">Explore All The Products Present</li>
             <li class="my-3">Explore All Orders Made By Customers</li>
             <li class="my-3">Modify The Products & Update</li>
             <li class="my-3">Modify The Orders & Update</li>
             <li class="my-3">Search Particular Products</li>
              <li>
                                  <small>
                                      <style>
                                      .checked {
                           color: orange;
                        } 
                                      </style>
                                      <h5 class="fa fa-star checked"></h5>
                                      <h5 class="fa fa-star checked"></h5>
                                      <h5 class="fa fa-star checked"></h5>
                                      <h5 class="fa fa-star checked"></h5>
                                      <h5 class="fa fa-star"></h5>
                                   </small>
                              </li>
           </ul>
         </div>
       </div>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; E-Shop 2022</p></div>
        </footer>


    </div>
    <div id="product" class="container-fluid tab-pane fade "><br>
    
     <div class="container-fluid">
    <div class="float-right">
    <button class="btn  btn-primary" data-toggle="modal" data-target="#myModal">Add Products <i class="fa fa-plus"></i></button>
  </div>
      
      <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-primary mx-auto">ADD PRODUCTS</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        
        <form action="add_products.php" method="POST" class="form-group add_form_data" accept-charset="utf-8">
          <input type="text" name="p_name" class="form-control p_name" placeholder="Product Name" required="">
          <input type="number" name="p_price" class="form-control p_price my-2" placeholder="Product Price" required="">
          <select name="p_category" class="form-control p_category" required="">
            <option selected disabled="">Select Category</option>}
            <option value="Electronics">Electronics</option>
            <option value="Electronics">Furniture</option>
          </select>
          <textarea name="p_description" class="form-control p_description my-2" rows="5" placeholder="Product Description" required=""></textarea>
          <input type="file" name="p_image" class="p_image form-control mb-2" required="">
         <button type="submit" name="add_products" class="btn btn-primary add_products"><i class="fa fa-plus"></i>Add Products</button>
         <button type="reset" class="btn btn-danger" >Reset <i class="fa fa-times"></i></button>
        </form>

      </div>

         </div>
  </div>
</div>

  <h2>Alter Products</h2>
 
  <div class="text-center my-3">
   <strong>Search Products:</strong> <input type="text" name="product_search" class="pl-1 product_search">
  </div>

   <table class="table table-bordered table-hover text-center">
        
          <thead>
              <tr>
                <th>Product Name</th>
                <th>Product Image</th>
                <th>Product Price</th>
                <th>Description</th>
                <th>Category</th>
                <th colspan="2">Action</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody class="datas">

            </tbody>


        </table>



         
 <!-- ===========================================Update Product= art========================Modal===========  -->
         <div class="modal" id="Edit_product">
          <div class="modal-dialog">
          <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-success mx-auto">Product Change</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body update_data">
       
      </div>
    </div>
  </div>
</div>
    <!-- =======================update products Ends=========================Modal===========  --> 
</div>	
    </div>
    
<!-- ===============================orders============================================== -->
 <div id="order" class="container-fluid tab-pane "><br>
  <div class="text-center my-3">
   <strong>Search Products:</strong> <input type="text" name="product_search" class="pl-1 product_search">
  </div>
         <table class="table table-bordered table-hover text-center">
        
          <thead>
              <tr>
                <th>Products</th>
                <th>Product Total Prices</th>
                <th>Customer Name</th>
                <th>Mobile No.</th>
                <th>Address</th>
                <th>Zip code</th>
                <th>Payement Mode</th>
                <th>Status</th>
                <th colspan="2">Action</th>
               
              </tr>
            </thead>

            <tbody class="order_detail">

            </tbody>


        </table>
</div>

<!-- =================================================order_modal================================ -->
 <div class="modal" id="Edit_order_product">
          <div class="modal-dialog">
          <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title text-success mx-auto">Order Status</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body order_update_data">
       
      </div>
    </div>
  </div>
</div>

  </div>
</div>


<?php include "../assets/newjs.php" ?>	

</body>
</html>


<script>
  $(document).ready(function(){
     $('.add_form_data').on("submit",function(e){
      e.preventDefault();
      
      var formdata=new FormData(this);

       $.ajax({
        url:"add_products.php",
        type:"POST",
        data:formdata,
        contentType:false,
        processData:false,
        success:function(data)
        {
            if (data==1) {
              alert("Added Successfully");
            }else{
              alert("Something Went Wrong");
            }
        }
       });
     });


     $.ajax({
      url:"fetch_products.php",
      type:"post",
      success:function(res)
      {
        $('.datas').html(res);
      }
     });
// ==============================================order_fetch==============================
     $.ajax({
      url:"order_fetch.php",
      type:"post",
      success:function(res)
      {
        $('.order_detail').html(res);
      }
     });

function datashow(){
   $.ajax({
      url:"fetch_products.php",
      type:"get",
      success:function(res)
      {
        $('.datas').html(res);
      }
     });
}
// ================================Delete Products Start===============================

$(document).on("click",".delete_btn",function(){
  if(confirm("Are You Sure Want to Remove Products?")){


  var id=$(this).data("id");
  var ele=this;
    $.ajax({
        url:"delete_products.php",
        type:"POST",
        data:{id:id},
        success:function(data){
         if (data==1) {
           $(ele).closest('tr').fadeOut();
         }else{
          alert("Unable to Delete Products");
         }
        }
    });
}

});

// ================================Delete Products Ends===============================
// ============================delete orders================================================
$(document).on("click",".order_delete_btn",function(){
  if(confirm("Are You Sure Want to Remove Products?")){


  var id=$(this).data("odid");
  var ele=this;
    $.ajax({
        url:"delete_order.php",
        type:"POST",
        data:{id:id},
        success:function(data){
         if (data==1) {
           $(ele).closest('tr').fadeOut();
         }else{
          alert("Unable to Delete Products");
         }
        }
    });
}

});
// ================================Update Products====================================

$(document).on("click",".update_btn",function(){

  var uid=$(this).data("uid");

  $.ajax({
    url:"update_products.php",
    type:"POST",
    data:{id:uid},
    success:function(data){
      $('.update_data').html(data);
    }
  });
});

$(document).on("submit",".save_update_form",function(e){

e.preventDefault();
var fileName = $(".p_uimage").val();
var formdata=new FormData(this);


    if(fileName) { 
       $.ajax({
        url:"save_update_products_with_image.php",
        type:"POST",
        data:formdata,
        contentType:false,
        processData:false,
        success:function(data)
        {
            if (data==1) {
              alert("Updated Successfully");
              datashow();
            }
            else if(data==2)
            {
                alert("Updated Successfully");
            }
            else{
              alert("Something Went Wrong");
            }
        }
       });

    } else { // no file was selected
        $.ajax({
        url:"save_update_products_without_image.php",
        type:"POST",
        data:formdata,
        contentType:false,
        processData:false,
        success:function(data)
        {
            if (data==1) {
              alert("Updated Successfully");
              datashow();
            }
            else if(data==2)
            {
                alert("Updated Successfully without Image");
                 datashow();
            }
            else{
              alert("Something Went Wrong");
            }
        }
       });
    }

});

// $(document).on("click",".p_uimage",function(){
//   var id=$(this).data("imgid");
//   var conf=confirm("Are you Sure Want to update Image?");
//   if(conf){
   
//   }else{
   
//   }
// });
// =============================update_order===============================================

$(document).on("click",".update_btn",function(){

  var uid=$(this).data("oeid");

  $.ajax({
    url:"update_order_detail.php",
    type:"POST",
    data:{id:uid},
    success:function(data){
      $('.order_update_data').html(data);
    }
  });
});
// ========================================update order==================save===========
$(document).on("click",".order_save_update_btn",function(e){
  e.preventDefault();
  var id=$(this).data("orid");
  var status=$('.status').val();
  // var check_value=[];
  // $('.status').each(function(){  
  //               if($(this).is(":checked"))  
  //               {  
  //                    check_value.push($(this).val());  
  //               }  
  //          });  
  //          check_value = check_value.toString();  
  $.ajax({
      url:"update_save_order.php",
      type:"POST",
        data:{
          id:id,
          status:status
        },
        success:function(res){
          alert("Updated Successfully")
           window.location.reload();
        }
  });
});

// ===============================search products==================================
$('.product_search').on("keyup",function(){
 var search=$(this).val();
 $.ajax({
  url:"product_search.php",
  type:"POST",
  data:{search:search},
  success:function(res){
    $('.datas').html(res);
  }
 });
});
// ====================================ordersearch====================================
$('.order_search').on("keyup",function(){
 var search=$(this).val();
 $.ajax({
  url:"order_search.php",
  type:"POST",
  data:{search:search},
  success:function(res){
    $('.order_detail').html(res);
  }
 });
});
// =====================================end==============================
  });

</script>