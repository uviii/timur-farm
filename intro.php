<!DOCTYPE html>
<html>
<head>

<title> kupindetimur | about us | introduction | kupindedaha timur krishi farm pvt.ltd,Nepal </title>
<meta name="keywords" content=" introduction of kupinde timur farm,where is kupindedaha,best online shoping store,online store on salyan ,company introduction,list of online shoping in Nepal ,buy online nursery from salyan,buy online herbal product from salyan,bio techonology,smart farming,kupindedaha lake,kupindedaha timur farm ,online shopping,krishi samagri,best organic product ,nepal,salyan ,karnali ,karnali pardesh,buy and sell agriculture product,fresh product,">
<meta name="discription" content="Buy:fresh ,dry ,powdery form vegetables...herbal product,nursery product,spicey ..local organic product... at low prices in Nepal .Home delivery all over the Nepal and other country.. easy payment method. ">
<!-- <meta name="auther" content="<?php echo $result['authers']; ?> "> -->


<?php include("link.php");?>
<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
</head>
<body class="mr-2 ml-2">
<?php include("header.php");?>
<?php include("desktop_nav.php");?>
<br><br><br><br><br><br><br><br>
<?php include("mobile_nav.php");?>
<br><br>




   <?php 
include("./adminstatus/blogadmin/dbc.php");
          
            $selectquery =  "SELECT*FROM  intro ";
            $query = mysqli_query($conn , $selectquery) or die("error");
       
            while ($result= mysqli_fetch_array($query)) {
              
?>
</style>

<article id="post-18" class="post-18 page type-page status-publish hentry w3-center container">
  
 

  
   
  


<div class=" w3-panel container-fluid" style="background-color:pink;" ><h2 class="w3-panel"><?php echo $result['title']; ?></h2>
</div>
<div class="textwidget container">
<P> <?php echo $result['content']; ?></P>
      </div>

 <?php
              # code...
            }
            ?>
    

  </article>

<br>
<hr>
<div class="row container">
<div class="col-sm-6"><article id="post-18" class="post-18 page type-page status-publish hentry w3-center container">
  
  <header class="entry-header">
    <h3 class="entry-title w3-text-orange">our vision</h3> </header><hr>

  <div class="entry-content clearfix">
    <div class="textwidget">
<p class="w3-text-green"> our main vission is marketization of local  agriculture product . motivate local empower to  increase  production of organic product.
reduce the unemployment  specially house woman and youth in remote area. </p> 
    
</div>
      </div>

  </article> </div>
<div class="col-sm-6"><article id="post-18" class="post-18 page type-page status-publish hentry w3-center container">
  
  <header class="entry-header">
    <h3 class="entry-title w3-text-orange">our mission</h3> </header><hr>

  <div class="entry-content clearfix">
    <div class="textwidget">
<p class="w3-text-green"> one house one product, agriculture's chemical free society , healthy soli ,healthy environment ,healthy society and organic-natural agriculture product..</p> 
</div>
      </div>

  </article> </div> </div>


<br>


<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2 class="w3-text-orange">OUR TEAM</h2>
<p class="w3-text-green">Meet  our team</p>
<hr>

<div class="w3-row "><br>
  <?php 

      
 include("./adminstatus/blogadmin/dbc.php"); // Database connection file
$selectquery = "SELECT*FROM admin  order by id limit 4 ";

            // $selectquery = "SELECT*FROM  admindetail ORDER BY id ASC LIMIT 5 ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
  

<div class="w3-quarter w3-boer col-md-4 col-sm-6 col-6 col-lg-3">
  <div class="w3-bordr">
    <div class="w3-center "> <img  src=" <?php echo $result['file']; ?>"  height="170"  width="200" class="w3-circle w3-center w3-border" style="width:80%">
     </div>
 <!--  <img src="./product/purna.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity"> -->
  <h4 class="w3-text-orange"> <?php echo $result['username']; ?> </h4>

  <p class="w3-text-green"><b><?php echo $result['position']; ?></b></p>
</div>

</div>

 <?php
              # code...
            }
            ?>





</div>
</div>
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2 class="w3-text-orange">OUR ACHEIVEMENT</h2>

<hr style="border-bottom: 2px dotted green;">

<div class="w3-row "><br>

  

<div class="w3-quarter w3-boer col-md-4 col-sm-6 col-6 col-lg-3">
  <div class="w3-bordr">
    <div class="w3-center "> <a href="achievement/officee register.jpg"><img  src="achievement/officee register.jpg"  height="170"  width="200" class="w3-circl w3-center w3-border" style="width:80%"></a>
      
     </div>
 <!--  <img src="./product/purna.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity"> -->
  <h4 class="w3-text-orange" style="font-weight: bold;font-size: 15px;">Regestor Certificate</h4>

 <hr style="border-bottom:2px dotted green;">
</div>

</div>
<div class="w3-quarter w3-boer col-md-4 col-sm-6 col-6 col-lg-3">
  <div class="w3-bordr">
    <div class="w3-center "> <img src="achievement/certificate_salyan.jpg"  height="170"  width="200" class="w3-circl w3-center w3-border" style="width:80%">
     </div>
 <!--  <img src="./product/purna.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity"> -->
  <h4 class="w3-text-orange" style="font-weight: bold;font-size: 15px;"> Achievement-1 </h4>

 <hr style="border-bottom:2px dotted green;">
</div>

</div>
<div class="w3-quarter w3-boer col-md-4 col-sm-6 col-6 col-lg-3">
  <div class="w3-bordr">
    <div class="w3-center "> <img  src="achievement/certificate ktm.jpg"  height="170"  width="200" class="w3-circl w3-center w3-border" style="width:80%">
     </div>
 <!--  <img src="./product/purna.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity"> -->
  <h4 class="w3-text-orange" style="font-weight: bold;font-size: 15px;"> Achievement-2 </h4>

 <hr style="border-bottom:2px dotted green;">
</div>

</div>
<div class="w3-quarter w3-boer col-md-4 col-sm-6 col-6 col-lg-3">
  <div class="w3-bordr">
    <div class="w3-center "> <img  src="achievement/cerificate ktm1.jpg"  height="170"  width="200" class="w3-circl w3-center w3-border" style="width:80%">
     </div>
 <!--  <img src="./product/purna.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity"> -->
  <h4 class="w3-text-orange" style="font-weight: bold;font-size: 15px;"> Achievment-3 </h4>

 <hr style="border-bottom:2px dotted green;">
</div>

</div>
<div class="w3-quarter w3-boer col-md-4 col-sm-6 col-6 col-lg-3">
  <div class="w3-bordr">
    <div class="w3-center "> <img  src="achievement/cerificate ktm1.jpg"  height="170"  width="200" class="w3-circl w3-center w3-border" style="width:80%">
     </div>
 <!--  <img src="./product/purna.jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity"> -->
  <h4 class="w3-text-orange" style="font-weight: bold;font-size: 15px;"> Achievment-3 </h4>

 <hr style="border-bottom:2px dotted green;">
</div>

</div>
</div>

</div>






</div>
</div>

 
<br>
<?php include("footer.php");?>
     
</body>
</html>

          
                   


