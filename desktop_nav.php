

<nav class="navbar navbar-expand-md fixed-buttom w3-blu " style="height: 8vh;">

  <button class=" ml-0 w3-hover-green ok w3-hover-text-light-grey " id="btnn" style="border:none;" ><i class="fa fa-bars fa-2x"></i></button>
 
<?php 
      // error_reporting(0);
     $csc=$_SESSION['id'];

    if(isset($_SESSION['id']))
      {
 ?>


  <div class="w3-dropdown-hover mt-3 navbar-toggler w3-text-orange " data-toggle="collapse"  style="border: none; background-color: transparent; ">
      <a href="order_kart.php" class="notificatio" > <p class="w3-text-orange"><i class="fa fa-shopping-cart"></i></p> <span class="badge">
        <?php 
        include("./adminstatus/blogadmin/dbc.php");
  $csc=$_SESSION['id'];
  $query = "SELECT*FROM `order` WHERE cid ='$csc' AND subtotal=1";
 $querys = mysqli_query($conn , $query) or die("error");
  $num_row=mysqli_num_rows($querys);
  echo $num_row;
  ?>
        
      </span></a>
 </div>



<?php
                        }
                        else
                        {
                         ?>

                         <div class="w3-dropdown-hover mt-3 navbar-toggler w3-text-orange " data-toggle="collapse"  style="border: none; background-color: transparent; ">
      <a href="#" class="notificatio" > <p class="w3-text-orange"><i class="fa fa-shopping-cart"></i></p> <span class="badge">
    0
        
      </span></a>
 </div>
                        
                        <?php
                      }
                       ?> 
                       <?php 
      // error_reporting(0);
     $csc=$_SESSION['id'];

    if(isset($_SESSION['id']))
      {
 ?>


  <div class="w3-dropdown-hover mt-3 navbar-toggler w3-text-orange " data-toggle="collapse"  style="border: none; background-color: transparent; ">
      <a href="order_wishlist.php" class="notificatio" > <p class="w3-text-orange"><i class="fa fa-heart" style="color: red;"></i></p> <span class="badge">
        <?php 
        include("./adminstatus/blogadmin/dbc.php");
  $csc=$_SESSION['id'];
  $query = "SELECT*FROM `order` WHERE cid ='$csc' AND subtotal=2";
 $querys = mysqli_query($conn , $query) or die("error");
  $num_row=mysqli_num_rows($querys);
  echo $num_row;
  ?>
        
      </span></a>
 </div>



<?php
                        }
                        else
                        {
                         ?>

                         <div class="w3-dropdown-hover mt-3 navbar-toggler w3-text-orange " data-toggle="collapse"  style="border: none; background-color: transparent; ">
      <a href="#" class="notificatio" > <p class="w3-text-orange"><i class="fa fa-shopping-cart"></i></p> <span class="badge">
    0
        
      </span></a>
 </div>
                        
                        <?php
                      }
                       ?> 
       
        <?php 

if(isset($_SESSION['id']))
                         {
   echo '

 <div class="w3-dropdown-hover navbar-toggler w3-text-orange " data-toggle="collapse"  style="border: none; background-color: transparent;">
 
        <button style="border: none; background-color: transparent;  " class="w3-text-orange" title=""><b><i class="fa fa-user mr-2">'.$_SESSION['name'].'</i></b><i class="fa fa-caret-down "></i></button>    
      <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-left" style="text-align:left;">
      
        <a href="myprofile.php"><button class="form-control  bg-primary w3-text-white" type="button"  data-toggle="modal" data-target="#mymodle">
  <i class="fa fa-user"></i>view_profile
</button></a>
<a href="order_checkout.php"><button class="form-control  bg-primary w3-text-white" ><i class="fa fa-shopping-cart"></i>
  order/kart
</button></a>
<a href="logout.php"><button class="form-control  w3-red w3-hover-blue" ><i class="fa fa-power-off"></i>
  logout
</button></a>
 </div>
</div>

 ';
          }
           else
                {
                   echo '
 <div class="w3-dropdown-hover navbar-toggler w3-text-orange " data-toggle="collapse"  style="border: none; background-color: transparent;">
 <a href="logint.php" class="w3-text-orange"><i class="fa fa-user">signin/signup</i></a>
      
 </div>
';
                        } ?>






<a href=""></a>








<!--  <div class="w3-dropdown-hover navbar-toggler w3-text-orange " data-toggle="collapse"  style="border: none; background-color: transparent;">
      <i class="fa fa-user"></i>usernaem is
 </div> -->
 <div class="w3-dropdown-hover navbar-toggler w3-text-orange " data-toggle="collapse"  style="border: none; background-color: transparent;">
      <a href="logout.php"><i class="fa fa-power-off w3-text-orange"></i></a>
 </div>
  
  <div class="collapse navbar-collapse  nav1 "
  id="collapsibleNavbar">
    <ul class="navbar-nav  menu">
  
<style type="text/css">
  .nav1 ul li{ padding: 10px; float: right; margin-right: 20px; margin-left: 20px; font-size: 20px; text-shadow:3px 2px 10px green; }
  .nav1 ul{float: right;}
</style>

  <li class="" ><a href="index.php"  >Home</a>
    

</li>
<li class="dropdown" ><a href=""  class=" dropdown-toggle" data-toggle="dropdown">About Us</a>
      
    
    <div class="dropdown-menu">
      <a href="intro.php" class="dropdown-item"> Introduction</a>
      <a href="compny profile.php" class="dropdown-item"> Company Profile</a>
 
     </div>

</li>

<li class="dropdown" ><a href="#"  class=" dropdown-toggle" data-toggle="dropdown">Product & Service</a>
      
    
    <div class="dropdown-menu">
      <a href="medicinal.php" class="dropdown-item">Herbal Product</a>
      <a href="masala.php" class="dropdown-item">Spice </a>
      <a href="food_veg.php" class="dropdown-item">Vegetable & Food Items</a>
      <a href="nurserry.php"class="dropdown-item" >Nurssery</a>
      
      
    </div>

</li>

<li class="" ><a href="blog.php">Blog</a>
</li>
<li class="dropdown" ><a href="#"  class=" dropdown-toggle" data-toggle="dropdown">Gallery</a>
      
    
    <div class="dropdown-menu">
      <a href="gallery_view.php" class="dropdown-item">Image Gallery</a>
      <a href="gallery_view_vedio.php" class="dropdown-item">Vedio Gallery</a>

      
      
    </div>

</li>
<li class="dropdown" ><a href="#"  class=" dropdown-toggle" data-toggle="dropdown">Contact Us</a>
      
    
    <div class="dropdown-menu">
      <a href="enquery.php" class="dropdown-item">Enquery</a>
      <a href="contactus.php" class="dropdown-item">Visit Information</a>
 </div>

</li>

<!-- <li><a href="#"> contact</a></li> -->
</ul>
    

  </div>
</nav>


</header>



<style>

.notificatio {
  
  color: white;
  text-decoration: none;
 
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

/*.notification:hover {
  background: red;
}*/

.notificatio .badge {
  position: absolute;
  top: -10px;
  right: -25px;
  padding: 1px 10px;
  border-radius: 60%;
  background-color: orang;
  color:red;
  font-size: 15px;

}

#grad1 {
 
  background-color: #FF69B4; /* For browsers that do not support gradients */

}
</style>
<!-- <div class="w3-dropdown-hover navbar-toggler w3-text-orange " data-toggle="collapse"  style="border: none; background-color: transparent;">
 
        <button style="border: none; background-color: transparent;  " class="w3-text-orange" title=""><b><i class="fa fa-user mr-2">'.$_SESSION['name'].'</i></b><i class="fa fa-caret-down "></i></button>    
      <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-left" style="text-align: left;">
      
        <a href="myprofile.php"><button class="form-control  bg-primary w3-text-white" type="button"  data-toggle="modal" data-target="#mymodle">
  <i class="fa fa-user"></i>view_profile
</button></a>
<a href="order_checkout.php"><button class="form-control  bg-primary w3-text-white" ><i class="fa fa-shopping-cart"></i>
  order/kart
</button></a>
<a href="logout.php"><button class="form-control  w3-red w3-hover-blue" ><i class="fa fa-power-off"></i>
  logout
</button></a>
 </div>
</div> -->