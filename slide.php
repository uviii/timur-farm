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


 <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  productadd ORDER BY id DESC LIMIT 2 ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php


    echo ' <div class="carousel-item active  container-fluid">
    <div class="row">

<div class="col-sm-6 col-md-6 bg-"> 
      <div class="w3-center"><h3 class="w3-green">kupindedaha timur krishi farm pvt.ltd.</h3>
      <h4> <a  href="single.php?id='.$result['id'].'">Natural and organic product of salyan district nepal</a></h4>
                  <h4> <a  href="single.php?id='.$result['id'].'"><h2 class="w3-text-orange">'.$result['name'].'('.$result['weight'].')</h2></a></h4>

                  <p>'.$result['intro'].' </p>
                  <button  class=" get w3-pink w3-round" style="border:none;"> <a  href="single.php?id='.$result['id'].'"><h2 class="w3-text-white">get it now</h2></a></button></div>
                  <br><br>
 </div>  <div class="col-sm-6 w3-container-fluid">



<a  href="single.php?id='.$result['id'].'"><img src="./adminstatus/blogadmin/'.$result['photo1'].'" class=" w3-container-fluid" alt="fantastic cms" style="width:100%;height:400px"></a>
            
</div>
      
    </div>
    </div> ';

     ?>
       
         <?php
              # code...
            }
            ?>




 <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  productadd ORDER BY id ASC LIMIT 20";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php


    echo ' <div class="carousel-item  container-fluid">
    <div class="row">

    <div class="col-sm-6 col-md-6 bg-"> 
      <div class="w3-center"><h3 class="w3-green">kupindedaha timur krishi farm pvt.ltd.</h3>
      <h4> <a  href="single2.php?id='.$result['id'].'">Natural and organic product of salyan district nepal</a></h4>
                  <h4> <a  href="single2.php?id='.$result['id'].'"><h2 class="w3-text-orange">'.$result['name'].'('.$result['weight'].')</h2></a></h4>

                 
                  <button  class=" get w3-pink w3-round" style="border:none;"> <a  href="single.php?id='.$result['id'].'"><h2 class="w3-text-white">get it now</h2></a></button></div><br><br>
 </div>  <div class="col-sm-6">


<a href="single2.php?id='.$result['id'].'">
<a  href="single.php?id='.$result['id'].'"><img src="./adminstatus/blogadmin/'.$result['photo1'].'" class="img-fluid" alt="fantastic cms" style="width:100%;height:400px"></a>
            
</div>
      
    </div>
    </div> ';

     ?>
       
         <?php
              # code...
            }
            ?>







  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div></section>