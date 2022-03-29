
<?php include "header.php" ?>
<!-- ----------------------profile modal starts------------------------------------------------ -->
<div class="home_main container-fluid my-5"> 
    
</div>
<div class="home_body">
<div>

  <div class="modal fade" id="myModals">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
     <div class="modal-img">
        <img class="modal-logo" src="img/logo.png" alt="" >
    </div>    
      
<ul class="nav nav-tabs mx-auto">
  <li class="nav-item mr-5">
    <a class="nav-link active" data-toggle="tab" href="#home">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#menu1">Signup</a>
  </li>
  
</ul>

            <button type="button" class="close text-danger" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
            <div class="tab-content">
              <div class="tab-pane container active" id="home">
               <small class="text-danger">* Indicates All Fields Are Mandatory</small>
                <form>
                    <div class="form-group">
                        <label for="username">*Email address:</label>
                        <input type="email" class="form-control" placeholder="Enter Username" name="username" id="username">
                    </div>
                    <div class="form-group">
                        <label for="userpassword">*Password:</label>
                        <input type="password" class="form-control" placeholder="Enter password" name="userpassword" id="userpassword">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                        <input hidden class="form-check-input remember" name="remember" type="checkbox"> 
                        </label>
                    </div>
                <button type="submit" class="btn btn-success login" name="login">Login</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </form>
            </div>
              <div class="tab-pane container fade" id="menu1">
                   <small class="text-danger">* Indicates All Fields Are Mandatory</small>
                <form>
                    <div class="form-group">
                        <label for="name">*Full Name:</label>
                        <input type="text" name="user_name" class="form-control" placeholder="Enter Name" id="user_name">
                    </div>
                    <div class="form-group">
                        <label for="semail">*Email address:</label>
                        <input type="email" name="user_email" class="form-control" placeholder="Enter email" id="user_email">
                    </div>
                    <div class="form-group">
                        <label for="mobile">*Mobile Number:</label>
                        <input type="tel" name="user_mobile" class="form-control" placeholder="Enter Mobile No" id="user_mobile">
                    </div>
                    <div class="form-group">
                        <label for="user_address">*User Address:</label>
                        <textarea  name="user_address" class="form-control" placeholder="Enter valid Address" id="user_address"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="zip_code">*Zipcode:</label>
                        <input type="text" name="zip_code" min="5" max="7" class="form-control" placeholder="Enter Pin Code" id="zip_code">
                    </div>
                    <div class="form-group">
                        <label for="spwd">*Password:</label>
                        <input type="password" name="user_password" class="form-control" placeholder="Enter password" id="user_password">
                    </div>
                <button type="submit" class="btn btn-primary signup" name="signup">Signup</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

            </form>

              </div>
              
            </div>

          
        </div>
        </div>
        
            
      </div>
    </div>
  </div>

<!-- ------------------------------profile modal ends --------------------------------------- -->
<!-- --------------------------Poster start---------------------------------------------- -->
<section id="poster-bg">
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
     <li data-target="#demo" data-slide-to="3"></li>
      <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  <div class="carousel-inner">
     <div class="carousel-item active">
      <img src="img/pos1.gif" alt="Chicago" width="100%" height="450">
      <div class="carousel-caption">
    </div>
   </div>
    <div class="carousel-item ">
      <img src="img/pos4.jpg" alt="Los Angeles" width="100%" height="450">
      <div class="carousel-caption">
      </div>   
    </div>

      <div class="carousel-item ">
      <img src="img/pos2.jpg" alt="Los Angeles" width="100%" height="450">
      <div class="carousel-caption">
      </div>   
    </div> 

    <div class="carousel-item ">
      <img src="img/pos4.jpg" alt="Los Angeles" width="100%" height="450">
    </div>

   
    <div class="carousel-item ">
      <img src="img/pos3.jpg" alt="Los Angeles" width="100%" height="450">
      <div class="carousel-caption">
      </div>   
    </div> 

      </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</section>
<!-- ------------------------------------------poster end------------------------------------- -->

<div class="inputbox">
    <small>Search Products: </small>
 <input type="search" name="product_search furniture_search electronic_search" class="product_search  furniture_search electronic_search m-2" placeholder="Search Products">
</div>

<!-- -------------------------Deals of the day end here------------------------------------------- -->


<!-- -------------------------Electronic y start here------------------------------------------- -->
<section id="electronics">
    
    <div class="electronics-text">
    <h3 class="mx-3 my-5">Electronics</h3>
    <span class="mx-3 my-5"><a href="product_electronic.php" class="view-all-text view_electronic">View All</a></span>
    </div>
   
     <div class="electronics-products container-fluid">

        <div class="row card_products">
            
                 
                    
        
           
        </div>

    </div>
</section>
<!-- -------------------------Electronics end here------------------------------------------- -->

<!-- -------------------------------Furniture start here------------------------------------------------------ -->

<section id="furniture">
    
    <div class="furniture-text">
    <h3 class="mx-3 my-5">Furniture</h3>
    <span class="mx-3 my-5"><a href="product_furniture.php" class="view-all-text view_furniture">View All</a></span>
    </div>
   
     <div class="furniture-products container-fluid">

        <div class="row furniture_products">
         
            
        </div>

    </div>
</section>
<!-- -------------------------------Furniture Ends re------------------------------------ -->
<section id="furniture" class="furnitures">
    
    <div class="furniture-text">
    <h3 class="mx-3 my-5">Your Products</h3>
    <!-- <span class="mx-3 my-5"><a href="product_furniture.php" class="view-all-text view_furniture">View All</a></span> -->
    </div>
   
     <div class="furniture-products container-fluid">

        <div class="row search_products">
         
            
        </div>

    </div>
</section>
</div>
<hr>
<div class="show_descr">
    
</div>
<!-- --------------------------------------footer--------------------------- - -->
<?php   include "footer.php" ?>
