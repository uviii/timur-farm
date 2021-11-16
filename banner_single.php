
  <?php 
session_start();
include("./adminstatus/blogadmin/dbc.php");
//Genrating CSRF Token
if (empty($_SESSION['token'])) {
 $_SESSION['token'] = bin2hex(random_bytes(32));
}

if(isset($_POST['submit']))
{
  //Verifying CSRF Token
if (!empty($_POST['csrftoken'])) {
    if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$postid=intval($_GET['nid']);
$st1='0';
$query=mysqli_query($conn,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
if($query):
  echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
  unset($_SESSION['token']);
else :
 echo "<script>alert('Something went wrong. Please try again.');</script>";  

endif;

}
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>timur farm</title>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<link rel="stylesheet" type="text/css" href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link rel="stylesheet" type="text/css" href="">
<script type="text/javascript" src="js/jquery-3.5.1.js" ></script>
<script type="text/javascript" src="js/bootstrap.min.js" ></script>
<script type="text/javascript" src="js/html5shiv.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/jquery.scrollUp.min.js"></script>
<script type="text/javascript" src="js/gmaps.js"></script>
<script type="text/javascript" src="js/contact.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
  
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>  



<link rel="shortcut icon" href="./p.image/logo.png" type="image/x-icon" />
</head>

<body>




<!-- front covver image -->
<!-- 
<div class="row">
		<div class="col-lg-6 col-md-12">   <div id="fixed" class="responsive">
        <div class="popup">
            <div class="img1">
                <img src="./p.image/remove.png" alt='quit' class="x"
                    id="x" />
                <img src="./p.image/about.png" class="img-align" alt="cursr"/>
            </div>
        </div>
    </div>  </div>
	</div>
   
     <script type='text/javascript'>
        $(function () {
            var overlay = $('<div id="overlay"></div>');
            overlay.show();
            overlay.appendTo(document.body);
            $('.popup').show();
            $('.x').click(function () {
                $('.popup').hide();
                overlay.appendTo(document.body).remove();
                return false;
            });

            $('.x').click(function () {
                $('.popup').hide();
                overlay.appendTo(document.body).remove();
                return false;
            });
        });
    </script> -->
<style>


 body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>





<div class="header-top-row  " >
                <div class="container ">
                    <div class="row ">
                       
                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                            <div class="">
                                <a class="" target="_blank" href="http://bit.ly/2OISEkI"><div class="play-icon"></div></a>
                                  <div id="lang" class="pull-right pl-1">
                                        <a href="https://www.patanjaliayurved.net/contact" class="lang-title">admin </a>
                                    </div>
                                                                    <!-- header - language -->
                                    
                                    <div id="lang" class="pull-right">
                                        <a href="https://www.patanjaliayurved.net/customer/login" class="lang-title">Login </a>|
                                    </div>
                                <div class="w3  w3-left w3-hide-small "  style="margin-left: -35px;">
                                    <ul style="list-style: none; display: inline-flex; margin-left: 0px;" >
                                        <li><a title="Facebook" target="_blank" href="#"><img src="./images/facebook.png"></a></li>
                                        <li><a title="Twitter" target="_blank" href="https://twitter.com/pypayurved"><img src="./images/twiter.png"></a></li>
                                        <li><a title="Youtube" target="_blank" href="https://www.youtube.com/user/patanjaliayurveda"><img src="./images/youtube.png"></a></li>
                                        <li><a title="Instagram" target="_blank" href="https://www.instagram.com/patanjaliproducts"><img src="./images/instagram.png"></a></li>
                               
                               <style>
                               	.w3 li{padding: 5px; }
                               </style>        
                                </div>
                                <!-- /header - currency -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>








	<header role="banner " class="">
    <!--Top Bar [START]-->
    <div class="top-bar">
      <div class="container">
        <div class="row ">
          <div class="col-sm-12 col-xs-12 top-left " style=" ">
              <a class="navbar-brand" href="$">
                  <img src="images/logo.png" alt="swayam-logo" width="115px" height="" style="margin-left: 0px;">
              </a><h2 style="display: inline-flex; ">||</h2>  <h3 style="display: inline-flex;">kupindedaha timur krishi farm pvt.ltd</h3>&nbsp; &nbsp; &nbsp;

              
              <!-- <a href="#">
                  <img src="images/logo.png" alt="nc-logo" width="48px" height="auto">
              </a> -->
              
          </div>
          <!-- <div class="col-sm-6 col-xs-12	w3-hide-small" style="height: 15vh;">
            <div class="top-navigation">
              -->  <!--  <a href="/about">About Swayam</a> |
                <a href="/explorer">All Courses</a> |
                <a href="/nc_details/">National Coordinators</a> |
                <a href="https://nptel.ac.in/LocalChapter/">Local Chapters</a> -->

              
			<!-- <marquee  >
				 <img src="images/logo.png" alt="swayam-logo" width="100px" height="auto" > --> -->
    <!-- <h6> every thing depend opn uou ao you re ea</h6> -->
     </marquee>
		


<!-- 
                <div class="dropdown ">
                     
                        <a href="https://onlinecourses.swayam2.ac.in/cec20_bt13/#" class="dropdown-toggle" data-toggle="dropdown">yubrajbudhathoki.ag2018@ritroorkee.com <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            

                            

                            

                            
                            

                            
                            <li>
                                <a href="https://swayam.gov.in/profile" class="dropdown-item">
                                    <img src="icon_my_profile_normal.png" class="normalimg">
                                    <img src="icon_my_profile_selected.png" class="selectedimg">
                                    MY PROFILE
                                </a>
                            </li>
                            <li>
                                <a href="https://swayam.gov.in/mycourses" class="dropdown-item">
                                    <img src="icon_my_courses_normal.png" class="normalimg">
                                    <img src="icon_my_courses_selected.png" class="selectedimg">
                                    MY COURSES
                                </a>
                            </li>
                            

                            

                            
                                <li class="divider"></li>
                            

                            <li>
                                <a href="https://login.microsoftonline.com/te/swayamopenid.onmicrosoft.com/B2C_1_swayam2/oauth2/v2.0/logout?post_logout_redirect_uri=https://onlinecourses.swayam2.ac.in/m/clearcookies"  class="dropdown-item">
                                    <img src="icon_sign_out_normal.png" class="normalimg">
                                    <img src="icon_sign_out_selected.png" class="selectedimg">
                                    SIGN-OUT
                                </a>
                            </li>
                        </ul>
                      
                </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <!--Top Bar [END]-->




	
	<!-- <div class="row " style="height: auto; width: 100%; background-color: red;">
		<div class="col-lg-2 col-md-12 col-12 bg-primary">
			<a href="#"><img src="./p.image/logo.png" alt="logo" class="logo" ></a>
		</div>
		<div class="col-lg-2 col-md-12 col-12 bg-secondary">
			<marquee  >
    <p class="aim" style="align-items: center; font-weight: bold;font-size: 20px; color: blue;" > all in one! for  all information,technique,research update and news article related to agriculture and allied sector </p>
     </marquee>
		</div>
			<div class="col-lg-2 col-md-12 col-12 bg-danger">
			<ul style="display: inline-flex;float: right;">
      <li style="list-style: none; margin-right: 0px;"><a class="login" href="#"> <button class="button"> login</button></a></li>
  
  
    <li style="list-style: none; margin-left: 15px;"><a class="login" href="#"><button class="button">registration</button></a></li>
  
</ul>
		</div>
		
	</div>
 -->
<!-- <div class="row my ">

      <div class="col-lg-2 col-md-8 col-sm-2 col-12 "  >
            <a href="#"><img src="./p.image/logo.png" alt="logo" class="logo" ></a>
  </div>

  <div class="col-lg-6 col-md-8 col-sm-2 col-12 " >
<marquee  >
    <p class="aim" style="align-items: center; font-weight: bold;font-size: 20px; color: blue;" > all in one! for  all information,technique,research update and news article related to agriculture and allied sector </p>
     </marquee>
      </div>
      
      <div class="col-lg-4 col-md-8 col-sm-1 col-12 "  >
        <ul style="display: inline-flex;float: right;">
      <li style="list-style: none; margin-right: 0px;"><a class="login" href="#"> <button class="button"> login</button></a></li>
  
  
    <li style="list-style: none; margin-left: 15px;"><a class="login" href="#"><button class="button">registration</button></a></li>
  
</ul>
      </div>
    </div> -->


</header>


<!-- Navbar -->
<div class="sticky-top ">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="http://localhost/timur%20farm/index2.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
     <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">about us<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">company profile</a>
        <a href="#" class="w3-bar-item w3-button">mission &vission</a>
       
      </div>
    </div>
    


     <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">product& service
        <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">organic medicinal product
        </a>
        <a href="#" class="w3-bar-item w3-button">organic aromatic product
        </a>
        <a href="#" class="w3-bar-item w3-button">nurserry
        </a>
       
      </div>
    </div>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">blog</a>
    
     <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">contact us</a>
   
    <form  class="form-inline" class="">
    <input type="text" name="fa-search" class="w3-round-xlarge mt-2 w3-hover-white w3-black pl-4 pr-3" placeholder="search" style="width: 77%;"> <button style=" height: 30px; margin-top: 0px;" class="w3-round-xlarge mt-2"><a href="javascript:void(0)" class=" w3-hover-red  w3-right"><i class="fa fa-search"></i></a></button></form>
  </div>
</div>


<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
	<!-- <ul>
	<li >
		 <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">company profile<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">introduction</a>
        <a href="#" class="w3-bar-item w3-button">mission &vission</a>
        <a href="#" class="w3-bar-item w3-button">out team</a>
      </div>
    </div>
	</li> -->

	<a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">company profile</a>
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()"> product & service</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">quality assurance</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">social impact</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">contact us</a>
<!-- </ul> -->
</div>


<!-- Page content -->
	<br>


                    
                  




 <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $id=$_GET['id'];
            $selectquery = "SELECT*FROM productadd WHERE id =$id";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>

<section>
  <div class="container">
    <div class="block-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="">Home</a></li>>>
                                                    <li>
                                <a href="">Natural Health Care</a> 
                              </li>>>
                                                    <li>
                                <a href="">Health drinks</a>
                                 </li>>>
                                                    <li class="active bg-danger">
                                <span class="ml-3"><?php echo ($result['name']) ;?></span>                           </li>
                        

                    </ul>
                </div>

     <div class="row">
    <div class="col-sm-6 bg-prmary">




                           <?php

 echo '<div class="product-imag">
 <img src="./adminstatus/blogadmin/'.$result['photo1'].'" class="img-fluid" alt="fantastic cms" style="width:100%;height:auto;">

                              </div>


                                <div class="vegicon">
    <img src="./images/palp-2.png">
                          </div>


<div class="w3-center"><button class="pro">product_profile</button><button class="m-3 cons">consumer experience&#039;s </button></div>

                         </div>
    <div class="col-sm-6 bg-rimary">
     <div class="product-detail-section">
                                    <h3 class="w3-center">
                                   

                                    '.$result['name'].'('.$result['weight'].')
                                     


                                                        </h3>
                                                         <div class="clearfix">
                                        <label class="pull-left stock"><span> <h4><b>Price:</b></span> 
                                            
                                           Rs. '.$result['price1'].' 

                                            </h4></label>
                                            <span class="ml-3">(Inclusive of all taxes)</span>

                                            

                                        </div>
                                       
                                   
                                    <span>By: <a href="#"><i class=""></i>'.$result['sold_by'].'</a></span><br>
                                    <span><div class="error" id="wishlisterror"></div></span>
                                    <div class="product-rating">
                                        <div class="stars">
                                         <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                        
                                        <a href="#" class="review">6 Reviews</a>
                                        
                                        <a href="#"><button type="button" class="btn btn-primar" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>write_review</button></a>

                                       
                                       <span><a href="" class="write-review"><i class="fa fa-heart" aria-hidden="true"></i>Add to Wishlist</a></span>
                                    </div>

                                    <div class="product-information">

                                       
                                       <div> <span><b>pacling size avaiable:</b></span><span class=" ml-3"> '.$result['weight'].'</span></div>
                                        <div> <span><b>packaging type avaiable:</b></span><span class=" ml-3"> '.$result['packaging'].'</span></div>
                                        <div> <span><b>place of orgin:</b></span><span class=" ml-3">'.$result['origin'].' </span></div>
                                        <div> <span><b>commodities code:</b></span><span class=" ml-3"> '.$result['code'].'</span></div>
                                        <div> <span><b>is it imported:</b></span><span class=" ml-3">'.$result['imported'].'</span></div>
                                        <div> <span><b>is it organic   :</b></span><span class=" ml-3">'.$result['organic'].'     </span></div>

                                        <hr>
                                        <div class="clearfix">
                                            <label class="pull-left stock"><span> <b>'.$result['avail'].' </b></span> 
                                            
                                            

                                            </label>
                                                     <div class="text-right">

                                                 
                                                
                                                <meta property="og:title" content="ALOEVERA JUICE WITH FIBER">
                                                <meta property="og:site_name" content="Patanjaliayurved.net">
                                                <meta property="og:url" content="https://www.patanjaliayurved.net/product/natural-health-care/health-drinks/aloevera-juice-with-fiber/578">
                                                <meta property="og:description" content="Patanjali Aloe vera Juice contains pulp extract from the green juicy leaf which is rich in natural nutrients and fiber with great medicinal value. It is colorless to pale yellow liquid with suspended fibers and have a blend, slightly astringent, bitter taste with characteristic acidic odor. It provides complete nourishment to the body. The juice comes loaded with a bevy of vitamins, minerals, and antioxidants essential for our body.">
                                                <meta property="fb:app_id" content="[FB_APP_ID]">
                                                <meta property="og:type" content="Product">
                                                <meta property="og:locale" content="en_US">            <!-- Default -->
                                                <meta property="og:image" content="https://www.patanjaliayurved.net/assets/product_images/400x300/1513233817aloeverafibreplain400x300.png">

                                                <link rel="image_src" type="image" href="./Patanjali Aloevera Juice with Fiber 1 ltr - Buy Aloe Vera Juice Online_files/1513233817aloeverafibreplain400x300.png">
                                                <a class="" target="_blank" href="http://www.facebook.com/sharer.php?s=100&amp;p[title]=ALOEVERA%20JUICE%20WITH%20FIBER&amp;p[url]=https://www.patanjaliayurved.net/product/natural-health-care/health-drinks/aloevera-juice-with-fiber/578&amp;p[image][0]=https://www.patanjaliayurved.net/assets/product_images/400x300/1513233817aloeverafibreplain400x300.png"><img src="./Patanjali Aloevera Juice with Fiber 1 ltr - Buy Aloe Vera Juice Online_files/facebook(1).png" height="32"></a>
                                                <a href="http://twitter.com/share?url=https://www.patanjaliayurved.net/product/natural-health-care/health-drinks/aloevera-juice-with-fiber/578&amp;text=Patanjali%20Ayurved&amp;hashtags=Patanjali" target="_blank"><img src="./Patanjali Aloevera Juice with Fiber 1 ltr - Buy Aloe Vera Juice Online_files/twitter.png" height="24"></a>

                                            </div>
                                        </div>

                                       
<div class="clearfix">
<p class="pull-left">(  <label class="pull-left stock"><span> <b>delevery:</b></span> 
                                            
                                         acroding to situation 

                                            </label> )</p></div>

                                        <div class="clearfix">
                                            
                                                <div class="row">
                                                <div class="col-md-6 col-sm-6 details-custom w3-cente">
                                                    <form name="addproductqty" id="addproductqty" method="">
                                                        <input type="hidden" name="authtoken" value="58ed26f1fabb8221263688a94e1f33b8">
                                                        <label class="pull-left qun">Quantity: </label>
                                                        <input type="number" name="quantity" id="quantity" class=" onlynumber" value="1" min="1">
                                                        <div id="quantityerror" class="error"></div>
                                                    </form>
                                                </div> <br><br>
                                            <div class="col-md-6 col-sm-6 details-custom">
                                                
                                                    <form name="addproductqty" id="addproductqty" method="">
                                                        <input type="hidden" name="authtoken" value="58ed26f1fabb8221263688a94e1f33b8">
                                                        <label class="pull-left qun">weight: </label>
                                                        <input type="number" name="quantity" id="quantity" class=" onlynumber" value="1" min="1">
                                                        <div id="quantityerror" class="error"></div>
                                                    </form>
                                                </div>
                                            </div>
                                           


                                        </div><br>


                                        <div class="clearfix">

                                            <div class="col-md-12 col-sm-12 details-custom container ">

                                                    
                                                                <div class="shopping-cart-buttons w3-center " style=";">

                                                                <button class="" itemid="578" itemprice="200" itemname="ALOEVERA JUICE WITH FIBER" isdetail="1" buynow="0" type="button" id="btn-add-cart578"><i class="fa fa-shopping-cart"></i>order</button>&nbsp;&nbsp;&nbsp;
                                                                </div>
                                                        
                                                    </div>
                                         </div><br>
 </div>
                                </div>
                            </div></div>



<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
          <div class="blog-grid-top">
            <div class="b-grid-top">
              <div class="blog_info_left_grid">


              
              </div>
              
                    </div>

                    
                    <!--sharing script-->
                   
                  </div>
                 
                </div>';

                  ?>
       
         <?php
              # code...
            }
            ?>



                                    <div class="product-imag">
                  <!-- <img id="product-zoom" src="./images/palp-2.jpg" width="100%" height="auto" data-zoom-image="./images/palp-2.jpg" alt="ALOEVERA JUICE WITH FIBER" > -->
                                    
                                </div>
                              </div>
    <div class="col-sm- bg-primar"> <div class="widget-block right-side-ad">
                                                                           <!--  <img alt="Natural Health Care" src="./images/flower.jpg" width="263"> -->
                                       </div>
</div>
  </div>
   <div class="row" style="color: rgba(14, 14, 14, 0.7);">

       

 <?php  include("discription.php"); ?> 
       


    </div>


      </div>

<script >
  $(document).ready(function(){
    $('.cons1').hide();
    $('.cons').click(function(){
      $('.cons1').toggle();

    });

  });
</script>

 </div> 
 <section class="cons1">

 <div class="row ">
                    <div class="col-md-8 col-sm-6 col-xs-12 pull-letft big-star-rating">
                        <div class="widget-title">
                            <i class="fa fa-thumbs-up"></i>Reviews


                        </div>
                        <div class="col-md-6 text-center">
                            <div class="row">
                                                                <!--<small class="point">4.2</small>-->
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>

                                <p class="text-center review-star">Average Rating Based on 6 ratings </p> 

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                    <span class="sr-only">1 star</span>
                                </div>
                            </div>
                            <div class="right-arrow"></div>

                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                    <span class="sr-only">2 star</span>
                                </div>
                            </div>
                            <div class="right-arrow"></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                    <span class="sr-only">3 star</span>
                                </div>
                            </div>
                            <div class="right-arrow"></div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 33.333333333333%">
                                    <span class="sr-only">4 star</span>
                                </div>
                            </div>
                            <div class="right-arrow"></div>

                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66.666666666667%">
                                    <span class="sr-only">5 star</span>
                                </div>
                            </div>
                            <div class="right-arrow"></div>

                        </div>


                    </div>



                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="message">
                            <p class="ask-product-review-message"><strong>Have you used this product?</strong></p>
                            <div>Rate it now.</div>
                        </div>
                        <div class="product-rating">
                            <div class="stars">
                                    
                                     <i class="fa fa-star" ></i>
                                     <span class="star-active"></span>
                                    <span class="star active"></span>
                                    <span class="star active"></span>
                                    <span class="star active"></span>
                            </div>
                        </div>
                        <br>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  write_review
</button>


                    </div>

                </div>
				 
                        <br>
                       


                    </div>

                </div>
                <!-- review coment-->

                <div class="row container">
                    <div class="col-md-8">
					 <div class="widget-title">
                           <h3> <i class="fa fa-thumbs-up"></i>recent review</h3>

                        </div><hr><div class="row">
                        <div class="col-md-4">
                                                <div class="review-header">

                                                    <div class="product-rating">
                                                        <div class="stars">
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                            </div>
                                                    </div>
                                                    <h5>Vimlesh&nbsp;Verma</h5>
                                                    <small class="text-muted">12-11-2018 05:35 PM</small>
                                                </div>
                                            </div> <div class="col-md-8">
                                                <div class="review-body">
                                                    <p>it's  very useful and makes u feel fresh and energetic every time.</p>


                                                    <div class="review-footer-new">
                                                                <p class="review-feedback">
                                                                Was this review helpful? <span><i class="fa fa-thumbs-up"></i>
                                                                    <a href=""> Yes </a>
                                                                </span>
                                                                <span><i class="fa fa-thumbs-down"></i><a href=""> No </a></span>
                                                            </p><div class="review-helpfulMessage">
                                                                <span id="rev_">
                                                                    </span> of 
                                                                <strong></strong> users found this review helpful.</div>
                                                            <div class="error" id="review_error_"></div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr><div class="row">
                        <div class="col-md-4">
                                                <div class="review-header">

                                                    <div class="product-rating">
                                                        <div class="stars">
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                            </div>
                                                    </div>
                                                    <h5>Vimlesh&nbsp;Verma</h5>
                                                    <small class="text-muted">12-11-2018 05:35 PM</small>
                                                </div>
                                            </div> <div class="col-md-8">
                                                <div class="review-body">
                                                    <p>it's  very useful and makes u feel fresh and energetic every time.</p>

<!-- 
                                                    <div class="review-footer-new">
                                                                <p class="review-feedback">
                                                                Was this review helpful? <span><i class="fa fa-thumbs-up"></i>
                                                                    <a href=""> Yes </a>
                                                                </span>
                                                                <span><i class="fa fa-thumbs-down"></i><a href=""> No </a></span>
                                                            </p><div class="review-helpfulMessage">
                                                                <span id="rev_">
                                                                    </span> of 
                                                                <strong></strong> users found this review helpful.</div>
                                                            <div class="error" id="review_error_"></div>

                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <hr><div class="row">
                        <div class="col-md-4">
                                                <div class="review-header">

                                                    <div class="product-rating">
                                                        <div class="stars">
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                            </div>
                                                    </div>
                                                    <h5>Vimlesh&nbsp;Verma</h5>
                                                    <small class="text-muted">12-11-2018 05:35 PM</small>
                                                </div>
                                            </div> <div class="col-md-8">
                                                <div class="review-body">
                                                    <p>it's  very useful and makes u feel fresh and energetic every time.</p>


                                                   <!--  <div class="review-footer-new">
                                                                <p class="review-feedback">
                                                                Was this review helpful? <span><i class="fa fa-thumbs-up"></i>
                                                                    <a href=""> Yes </a>
                                                                </span>
                                                                <span><i class="fa fa-thumbs-down"></i><a href=""> No </a></span>
                                                            </p><div class="review-helpfulMessage">
                                                                <span id="rev_">
                                                                    </span> of 
                                                                <strong></strong> users found this review helpful.</div>
                                                            <div class="error" id="review_error_"></div>

                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div><hr><div class="row">
                        <div class="col-md-4">
                                                <div class="review-header">

                                                    <div class="product-rating">
                                                        <div class="stars">
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                            </div>
                                                    </div>
                                                    <h5>Vimlesh&nbsp;Verma</h5>
                                                    <small class="text-muted">12-11-2018 05:35 PM</small>
                                                </div>
                                            </div> <div class="col-md-8">
                                                <div class="review-body">
                                                    <p>it's  very useful and makes u feel fresh and energetic every time.</p>


                                                   <!--  <div class="review-footer-new">
                                                                <p class="review-feedback">
                                                                Was this review helpful? <span><i class="fa fa-thumbs-up"></i>
                                                                    <a href=""> Yes </a>
                                                                </span>
                                                                <span><i class="fa fa-thumbs-down"></i><a href=""> No </a></span>
                                                            </p><div class="review-helpfulMessage">
                                                                <span id="rev_">
                                                                    </span> of 
                                                                <strong></strong> users found this review helpful.</div>
                                                            <div class="error" id="review_error_"></div>

                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div><hr><div class="row">
                        <div class="col-md-4">
                                                <div class="review-header">

                                                    <div class="product-rating">
                                                        <div class="stars">
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                            </div>
                                                    </div>
                                                    <h5>Vimlesh&nbsp;Verma</h5>
                                                    <small class="text-muted">12-11-2018 05:35 PM</small>
                                                </div>
                                            </div> <div class="col-md-8">
                                                <div class="review-body">
                                                    <p>it's  very useful and makes u feel fresh and energetic every time.</p>


                                                    <!-- <div class="review-footer-new">
                                                                <p class="review-feedback">
                                                                Was this review helpful? <span><i class="fa fa-thumbs-up"></i>
                                                                    <a href=""> Yes </a>
                                                                </span>
                                                                <span><i class="fa fa-thumbs-down"></i><a href=""> No </a></span>
                                                            </p><div class="review-helpfulMessage">
                                                                <span id="rev_">
                                                                    </span> of 
                                                                <strong></strong> users found this review helpful.</div>
                                                            <div class="error" id="review_error_"></div>

                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div><hr><div class="row">
                        <div class="col-md-4">
                                                <div class="review-header">

                                                    <div class="product-rating">
                                                        <div class="stars">
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                                    <span class="star active"></span>
                                                            </div>
                                                    </div>
                                                    <h5>Vimlesh&nbsp;Verma</h5>
                                                    <small class="text-muted">12-11-2018 05:35 PM</small>
                                                </div>
                                            </div> <div class="col-md-8">
                                                <div class="review-body">
                                                    <p>it's  very useful and makes u feel fresh and energetic every time.</p>


                                                    <div class="review-footer-new">
                                                                <p class="review-feedback">
                                                                Was this review helpful? <span><i class="fa fa-thumbs-up"></i>
                                                                    <a href=""> Yes </a>
                                                                </span>
                                                                <span><i class="fa fa-thumbs-down"></i><a href=""> No </a></span>
                                                            </p><div class="review-helpfulMessage">
                                                                <span id="rev_">
                                                                    </span> of 
                                                                <strong></strong> users found this review helpful.</div>
                                                            <div class="error" id="review_error_"></div>

                                                        </div>
                                                    </div><a class="w3-right" href="#"><b class="w3-center">...more review....</b></a>
                                                </div>
                                            </div>


                     <hr>
                    

                    </div>
                    <div class="col-md-4">

                        <div class="widget-title">
                          <h3>  <i class="fa fa-thumbs-up"></i>Top Reviews</h3>

                        </div><hr>
                        <div class="widget-block">
                            <div class="row">

                                <div class="col-md-12">
                                        <div class="review-header">

                                            <div class="product-rating">
                                                <div class="stars">
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                    </div>
                                            </div>
                                            <h5>UTKARSH&nbsp;CHOUDHARY</h5>
                                            <small class="text-muted">26-08-2018 11:20 PM</small>
                                        </div>

                                        <p class="description">
                                        Very helpful in skin problems
                                        </p>
                                        <div class="review-header">

                                            <div class="product-rating">
                                                <div class="stars">
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                    </div>
                                            </div>
                                            <h5>B MADHUSUDHAN &nbsp;SINGH</h5>
                                            <small class="text-muted">07-05-2018 01:34 PM</small>
                                        </div>

                                        <p class="description">
                                        Om... Amazing, Superb results. Perfect for all over body from top to bottom. Thank You .
                                        </p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="widget-block">
                            <div class="row">

                                <div class="col-md-12">
                                        <div class="review-header">

                                            <div class="product-rating">
                                                <div class="stars">
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                    </div>
                                            </div>
                                            <h5>UTKARSH&nbsp;CHOUDHARY</h5>
                                            <small class="text-muted">26-08-2018 11:20 PM</small>
                                        </div>

                                        <p class="description">
                                        Very helpful in skin problems
                                        </p>
                                        <div class="review-header">

                                            <div class="product-rating">
                                                <div class="stars">
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                    </div>
                                            </div>
                                            <h5>B MADHUSUDHAN &nbsp;SINGH</h5>
                                            <small class="text-muted">07-05-2018 01:34 PM</small>
                                        </div>

                                        <p class="description">
                                        Om... Amazing, Superb results. Perfect for all over body from top to bottom. Thank You .
                                        </p>
                                </div>
                            </div>
                        </div>
<hr>
                        <div class="widget-block">
                            <div class="row">

                                <div class="col-md-12">
                                        <div class="review-header">

                                            <div class="product-rating">
                                                <div class="stars">
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                    </div>
                                            </div>
                                            <h5>UTKARSH&nbsp;CHOUDHARY</h5>
                                            <small class="text-muted">26-08-2018 11:20 PM</small>
                                        </div>

                                        <p class="description">
                                        Very helpful in skin problems
                                        </p>
                                        <!-- <div class="review-header">

                                            <div class="product-rating">
                                                <div class="stars">
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                            <span class="star active"></span>
                                                    </div>
                                            </div>
                                            <h5>B MADHUSUDHAN &nbsp;SINGH</h5>
                                            <small class="text-muted">07-05-2018 01:34 PM</small>
                                        </div>

                                        <p class="description">
                                        Om... Amazing, Superb results. Perfect for all over body from top to bottom. Thank You .
                                        </p> -->
                                </div>
                            </div>
                        </div><a class="w3-right" href="#"><b class="w3-center">...more review....</b></a> <br>


<hr>

                    </div></div>
                </div>

						
  </div>
 
</section>




</section>

<br>


<div class="container">
  <h3 class="w3-center"><b>similar</b></h3><br>
  <div class="row">

 <?php 



            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  productadd WHERE categories='masala' limit 5 ";

            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php


echo '<div class="col-md-3 blog-grid-top">
            <div class="b-grid-top">
            <div class="blog_info_left_grid">
            <a href="single.php?id='.$result['id'].'">
            <img src="./adminstatus/blogadmin/'.$result['photo1'].'" class="img-fluid" alt="fantastic cms" style="width:350px;height:250px">
            </a>
            </div>
            <h5 class="w3-center">
             
            <a  href="single.php?id='.$result['id'].'">'.$result['name'].'('.$result['weight'].')</a>
            </h5>
            </div>

            <div class="w3-center">
                                   <span class="item_price">Rs.'.$result['price2'].'</span>
                                    <del>Rs.'.$result['price1'].'</del>
                             </div>
                             <div class="w3-center"><a href="#">view_detail</a></div>

            </div>';
            ?>
       
         <?php
              # code...
            }
            ?>
            <style >.w3 ul li{display: inline-flex;}</style>
                      

    <div class="col-md-3 col-sm-6 bg-dange" >
      <div class="">
                        <div class=""><a href=""> <img src="./images/flower.jpg" alt="" class="pro-image-front" width="100%" height=""></a>
             

            </div>
                        <style > </style>
                        <div class="item-info-product ">
                          <h6 class="w3-center pt-2">
                                <a href="#.com/products" ><b class="w3-center">wiliam  hybrid banana(Poly Bag)</b></a>
                            </h6>
                            <div class="w3-center">
                                   <span class="item_price">Rs. 35</span>
                                    <del>Rs. 35</del>
                             </div>
                            <div class="w3-center"><a href="#">view</a></div>
                        </div>
                    </div></div>
    <div class="col-md-3 col-sm-6 bg-seconary" >
      <div class="">
                        <div class="">
                          <a href=""> <img src="./images/flower.jpg" alt="" class="pro-image-front" width="100%" height=""></a>
             
            </div>
                        <style > </style>
                        <div class="item-info-product ">
                          <h6 class="w3-center pt-2">
                                <a href="#.com/products" ><b class="w3-center">wiliam  hybrid banana(Poly Bag)</b></a>
                            </h6>
                            <div class="w3-center">
                                   <span class="item_price">Rs. 35</span>
                                    <del>Rs. 35</del>
                             </div>
                            <div class="w3-center"><a href="#">view</a></div>
                        </div><!-- <div class="w3-right w3-hide-large"><a href="#" class=""><b>...more....</b></a></div> -->
  </div>
                    </div>

    <div class="col-md-3 col-sm-6 w3-hide-small" >
      <div class="">
                        <div class="">
                          <a href=""><img src="./images/flower.jpg" alt="" class="pro-image-front" width="100%" height=""></a>
              
            </div>
                        <style > </style>
                        <div class="item-info-product ">
                          <h6 class="w3-center pt-2">
                                <a href="#.com/products" ><b class="w3-center">wiliam  hybrid banana(Poly Bag)</b></a>
                            </h6>
                            <div class="w3-center">
                                   <span class="item_price">Rs. 35</span>
                                    <del>Rs. 35</del>
                             </div>
                            <div class="w3-center"><a href="#">view</a></div><div class="w3-right w3-hide-large"><a href="#" class=""><b>...more....</b></a></div>
                        </div>
                    </div>
    </div>
    <div class="col-md-3 col-sm-6 bg-pimary" >
      <div class="">
                        <div class="">
              <a href=""><img src="./images/flower.jpg" alt="" class="pro-image-front" width="100%" height=""></a>
            </div>
                        <style > </style>
                        <div class="item-info-product ">
                          <h6 class="w3-center pt-2">
                                <a href="#.com/products" ><b class="w3-center">wiliam  hybrid banana(Poly Bag)</b></a>
                            </h6>
                            <div class="w3-center">
                                   <span class="item_price">Rs. 35</span>
                                    <del>Rs. 35</del>
                             </div>
                            <div class="w3-center"><a href="#">view</a></div><div class="w3-right w3-hide-large"><a href="#" class=""><b>...more....</b></a></div>
                        </div>
                    </div>
    </div>
      
    
  </div>
</div>

<br>


</div><br><br>


<?php include("contactproduct.php");?><br><br>
<?php include("footer.php");?>





<div class="row" style="margin-top: %">
   <div class="col-md-8">
<div class="card my-4">
  <!-- Button to Open the Modal -->


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
     
       <h4 class="card-header w3-center">leave review of this product</h4>
       <br><hr>
            
       <form name="Comment" method="post" class="container">
      <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
 <div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Enter your fullname" required>
</div>

 <div class="form-group">
 <input type="email" name="email" class="form-control" placeholder="Enter your Valid email" required>
 </div>


                <div class="form-group">
                  <textarea class="form-control" name="comment" rows="3" placeholder="write here review about this product" required></textarea>
                </div>
              <div class="w3-center">  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button></div>
                <br><br>
              </form>

      <!-- Modal footer -->
     

    </div>
  </div>
</div>

<hr>
           
            </div>
          </div>

  <!---Comment Display Section --->

 

        </div>

</body>
</html>
