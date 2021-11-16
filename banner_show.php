<!DOCTYPE html>
<html>
<head>
    <title>timur farm</title>


<?php include("link.php");?><br><br>
<style>  



<link rel="shortcut icon" href="./p.image/logo.png" type="image/x-icon" />
</head>


<body>


<?php include("header.php");?>
<?php include("mobile_nav.php");?>



    <br>


<?php
 include("./adminstatus/blogadmin/dbc.php"); // Database connection file
// require_once('./libs/fetch_data.php');  // PHP functions file
?>



<section class="main-content-w3layouts-agileits">
        <div class="container">
            <h3 class="w3-center"><b>our_special_product</b></h3><br>
            <div class="row">
                <!--left-->
                <div class="col-lg-12 left-blog-info-w3-layouts-agileits text-left">
                    <!--grid blogs below-->
                    
                    <div class="blog-girds-sec">
                        <div class="row">
                             <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  banner ORDER BY id ASC LIMIT 2";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>


 <section  class="container-fluid">
    <?php


 echo ' <div id="demo" class="carousel slide  container-fluid" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner ">
    <div class="carousel-item active container ">
      <div class="row">
         <div class="col-sm-6 col-md-6 bg-"> <div class="w3-center"><h1 class="text-success"> <u> 

          '.$result['name'].' </u></h1><br>

                  <h2>    delevery allover the nepal</h2>

                  <p> '.$result['intro'].' organic timur powder,bulky timur grain,and timur mix masala  </p>

                  <button type="button" class="btn btn-default get">

                  <a href="single.php?id='.$result['id'].'"><b class=" w3-center">  get information</b></a>

                  </button></div>
 </div>
<div class="col-sm-6 col-md-6  container-fluid "> <img src="./product/timur2.png" alt="Los Angeles" style="height: 320px;  width: 100%;
      " >
</div>
      </div>
     


    </div>
    
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>';
?>


</style>



 <section  class="container-fluid">


  <div id="demo" class="carousel slide  container-fluid" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner ">
    <div class="carousel-item active container ">
      <div class="row">
         <div class="col-sm-6 col-md-6 bg-"> <div class="w3-center"><h1 class="text-success"> <u> <span>Timur</span> ripe grain </u></h1><br>
                  <h2>   delevery allover the nepal</h2>
                  <p> organic timur powder,bulky timur grain,and timur mix masala  </p>
                  <button type="button" class="btn btn-default get"><a href=""><b class=" w3-center"> get information</b></a></button></div>
 </div>
<div class="col-sm-6 col-md-6  container-fluid "> <img src="./product/timur2.png" alt="Los Angeles" style="height: 320px;  width: 100%;
      " >
</div>
      </div>
     


    </div>
    <div class="carousel-item container">
    <div class="row">

    <div class="col-sm-6 col-md-6 bg-"> <div class="w3-center"><h1 class="w3-green"><span>Timur</span>-grain</h1>
                  <h4>Free home delevery allover the nepal</h4>
                  <p>ok right the trend of agriculte senariao is the main f\pronlem in the conteo htos htsde indo nesila kjdj soj that </p>
                  <button type="button" class="btn btn-default get">Get it now</button></div>
 </div>  <div class="col-sm-6"><img src="./product/ritha.jpg" alt="Chicago" style="height: 320px;  width: 100%;

      " ></div>
      
    </div>
    </div>
     <div class="carousel-item container">
    <div class="row">

    <div class="col-sm-6 col-md-6 bg-"> <div class="w3-center"><h1 class="w3-green"><span>Timur</span>-grain</h1>
                  <h4>Free home delevery allover the nepal</h4>
                  <p>ok right the trend of agriculte senariao is the main f\pronlem in the conteo htos htsde indo nesila kjdj soj that </p>
                  <button type="button" class="btn btn-default get">Get it now</button></div>
 </div>  <div class="col-sm-6"><img src="./product/timur.jpg" alt="Chicago" style="height: 320px;  width: 100%;

      " ></div>
      
    </div>
    </div>
     <div class="carousel-item container">
    <div class="row">

    <div class="col-sm-6 col-md-6 bg-"> <div class="w3-center"><h1 class="w3-green"><span>Timur</span>-grain</h1>
                  <h4>Free home delevery allover the nepal</h4>
                  <p>ok right the trend of agriculte senariao is the main f\pronlem in the conteo htos htsde indo nesila kjdj soj that </p>
                  <button type="button" class="btn btn-default get">Get it now</button></div>
 </div>  <div class="col-sm-6"><img src="./product/view.jpg" alt="Chicago" style="height: 320px;  width: 100%;

      " ></div>
      
    </div>
    </div> <div class="carousel-item container">
    <div class="row">

    <div class="col-sm-6 col-md-6 bg-"> <div class="w3-center"><h1 class="w3-green"><span>Timur</span>-grain</h1>
                  <h4>Free home delevery allover the nepal</h4>
                  <p>ok right the trend of agriculte senariao is the main f\pronlem in the conteo htos htsde indo nesila kjdj soj that </p>
                  <button type="button" class="btn btn-default get">Get it now</button></div>
 </div>  <div class="col-sm-6"><img src="./product/besarfield.jpg" alt="Chicago" style="height: 320px;  width: 100%;

      " ></div>
      
    </div>
    </div>
    <div class="carousel-item container">
     <div class="row">

    <div class="col-sm-6 col-md-6 bg-"> <div class="w3-center"><h1 class="w3-green
      "><span>E</span>-store</h1>
                  <h3>Free home delevery allover the nepal</h3>
                  <p>ok right the trend of agriculte senariao is the main f\pronlem in the conteo htos htsde indo nesila kjdj soj that </p>
                  <button type="button" class="btn btn-default get">Get it now</button></div>
 </div>




                   <div class="col-sm-6"><img src="./product/ourpro.png" alt="Chicago" style="height: 320px;  width: 100%;
      " ></div>
      
    </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div></section>



<!-- echo '<div class="col-md-3 blog-grid-top">
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
                           <br>
                             <div class="w3-center"><a href="single.php?id='.$result['id'].'"><button class="bg-success">view_detail</button></a></div>
            </div>';
             -->

</section>







       
         <?php
              # code...
            }
            ?>
                            <!--bloggrids-->
                        </div>
                    </div>
                </div>
                <div class="col-sm- bg-danger">h</div>

            </div></div></section>

</div>

<style >.blog-icons{list-style: none;}</style>

                        </div>
                    </div>
    </div>
      
    
  </div>
</div>









<br><br><br>






<?php include("contact.php");?>
<br>
<?php include("footer.php");?>





