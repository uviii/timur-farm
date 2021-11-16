<html>
<head>
 

<title> kupindetimur | blogs | artical | kupindedaha timur krishi farm pvt.ltd,Nepal </title>
<meta name="keywords" content="  <?php 

             include("./adminstatus/blogadmin/dbc.php");
          
            $selectquery = "SELECT*FROM blogs";
            $query = mysqli_query($conn , $selectquery) or die("error");
 
            while ($result= mysqli_fetch_array($query)) {
              
?>

   <?php echo $result['title']; ?>, 

   <?php
              # code...
            }
            ?>,introduction of kupinde timur farm,where is kupindedaha,best online shoping store,online store on salyan ,company introduction,list of online shoping in Nepal ,buy online nursery from salyan,buy online herbal product from salyan,bio techonology,smart farming,kupindedaha lake,kupindedaha timur farm ,online shopping,krishi samagri,best organic product ,nepal,salyan ,karnali ,karnali pardesh,buy and sell agriculture product,fresh product,">
<meta name="discription" content="Buy:fresh ,dry ,powdery form vegetables...herbal product,nursery product,spicey ..local organic product... at low prices in Nepal .Home delivery all over the Nepal and other country.. easy payment method. ">
<!-- <meta name="auther" content="<?php echo $result['authers']; ?> "> -->


<?php include("link.php");?>
 <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
</head>
<body class="ml-2 mr-2" >
<?php include("header_blog.php");?>
<?php include("desktop_nav.php");?>
<br><br><br><br><br><br><br>
<?php include("mobile_nav.php");?>

<br><br><br><br>

 <div class="">
                <ul class="breadcrumb">
                    <li><a href="index.php"><b> <i class="fa fa-home"></i> Home</b></a></li>>>
                    <li class="activ"><a href="blog.php"><b class="w3-text-orange">Blog & artical</b></a> </li>
                </ul>
            </div>
<div class="row w3-re ">
  <div class="col-lg-9 col-md-8 col-sm-12 col-12  w3-gree">
  
 
     <!--block-col-1-row-1-->
   <div class="b" >
<div class="row "> 
  <div class="col-lg-7 col-md-8 col-sm-12 col-12 sub w3-orang">
    <div class="w3-hide-large">
       <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">categories...<span></span>
  </b> </strong> </a><span></span></h3>

<?php 
  include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blog_categories ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php $name=$result['id']; ?>
<a  style="color: #004d00;" href="blog_categories_views.php?id=<?php echo $result['id'] ?>"><button class="collapsible" style="color: #004d00;"><b > <?php echo $result['name']; ?></b> </button></a> 
<?php
              # code...
            }
            ?>
    </div>
  
  
 <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">Latest update..<span></span>
  </b> </strong> </a><span></span></h3>
     <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs ORDER BY id asc LIMIT 2";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<div> <a href="./adminstatus/blogadmin/<?php echo $result['photo']; ?>"><img src=" ./adminstatus/blogadmin/<?php echo $result['photo']; ?>" style="width: 100%; height: 300px;" target="blank"></a>

 </div>
         
    <div class="category_page-video-content">
      <a class="truncate_title" href="#"><h4 class="w3-"><a href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['title']; ?></a></h4></a>

      <span class="w3-text-orange"><i class=" ml-2 fa fa-date"></i><?php echo $result['date']; ?></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-tag"></i><?php echo $result['tags']; ?></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-edit"></i><?php echo $result['authers']; ?></span>

<div class="time_ago_container"><span class="field-content">
<!--   <em class="placeholder">2 years</em> ago -->
</span></div><br>
<div class="description"><div class="field-content"><a class="w3-text-black" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['abst']; ?></a>  <span class="w3-text-blue"><a href="blog_detail.php?id=<?php echo $result['id'] ?>">more.....</a></span> </div></div></div>

      <?php
              # code...
            }
            ?>
  
   
              
    
  </div>
  
  <br>
  
  
  <div class="col-lg-5 col-md-8 col-12  w3-yelow">
   <div class="section"><hr>
 
 <h4 class="section-heading"> <a href="#"><strong><B></B> </strong> </a><span></span></h4>
 <div class="vticker" ><!--this is the vertical animation tag-->
  
<ul class="news-list">
    <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs ORDER BY id ASC LIMIT 8";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>

                  <li>
            <div class="place-image  place-thumbnail" style=" height:50px; width:50px;  background-image: url( ./adminstatus/blogadmin/<?php echo $result['photo']; ?>)"    ></div>
            <h4><a href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['title']; ?></a></h4>
            <span class="w3-text-orange"><i class=" ml-2 fa fa-date"></i>
              <a class="w3-text-orange" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['date']; ?></a></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-tag"></i>
                <a class="w3-text-orange"  href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['tags']; ?></a></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-edit"></i>
                  <a class="w3-text-orange" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['authers']; ?></a></span>

          </li>
           <?php
              # code...
            }
            ?>
              


      </ul>
    </div>
    </div>
  </div>
 
   </div>
    </div>

  <!--block--2--->

    <hr> <!--block-col-1-row-1-->
  
  <!--block--2--->

    <hr>
     <!--block-col-1-row-1-->
   <div class="b" >
<div class="row "> 
  <div class="col-lg-7 col-md-8 col-sm-12 col-12 sub w3-orang">
  <br><br>
  
  <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">Smart farming...<span></span>
  </b> </strong> </a><span></span></h3>
     <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs WHERE categories='98' ORDER BY id LIMIT 2";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<div> <a href="./adminstatus/blogadmin/<?php echo $result['photo']; ?>"><img src=" ./adminstatus/blogadmin/<?php echo $result['photo']; ?>" style="width: 100%; height: 300px;" target="blank"></a>

 </div>
         
    <div class="category_page-video-content">
      <a class="truncate_title" href="#"><h4 class="w3-"><a href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['title']; ?></a></h4></a>

      <span class="w3-text-orange"><i class=" ml-2 fa fa-date"></i><?php echo $result['date']; ?></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-tag"></i><?php echo $result['tags']; ?></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-edit"></i><?php echo $result['authers']; ?></span>

<div class="time_ago_container"><span class="field-content">
<!--   <em class="placeholder">2 years</em> ago -->
</span></div><br>
<div class="description"><div class="field-content"><a class="w3-text-black" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['abst']; ?></a>  <span class="w3-text-blue"><a href="blog_detail.php?id=<?php echo $result['id'] ?>">more.....</a></span> </div></div></div>

      <?php
              # code...
            }
            ?>
  
   
              
    
  </div>
  
  <br>
  
  
  <div class="col-lg-5 col-md-8 col-12  w3-yelow">
   <div class="section"><hr>
 
 <h4 class="section-heading"> <a href="#"><strong><B></B> </strong> </a><span></span></h4>
 <div class="vticker" ><!--this is the vertical animation tag-->
  
<ul class="news-list">
    <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs WHERE categories='98' ORDER BY id LIMIT 8";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>

                  <li>
            <div class="place-image  place-thumbnail" style=" height:50px; width:50px;  background-image: url( ./adminstatus/blogadmin/<?php echo $result['photo']; ?>)"    ></div>
            <h4><a href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['title']; ?></a></h4>
            <span class="w3-text-orange"><i class=" ml-2 fa fa-date"></i>
              <a class="w3-text-orange" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['date']; ?></a></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-tag"></i>
                <a class="w3-text-orange"  href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['tags']; ?></a></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-edit"></i>
                  <a class="w3-text-orange" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['authers']; ?></a></span>

          </li>
           <?php
              # code...
            }
            ?>
              


      </ul>
    </div>
    </div>
  </div>
 
   </div>
    </div>

  <!--block--2--->

    <hr> <!--block-col-1-row-1-->
  
  <!--block--2--->

    <hr>
     <!--block-col-1-row-1-->
   <div class="b" >
<div class="row "> 
  <div class="col-lg-7 col-md-8 col-sm-12 col-12 sub w3-orang">
  <br><br>
  
  <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">Aryuveda..<span></span>
  </b> </strong> </a><span></span></h3>
     <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs WHERE categories='72' ORDER BY id LIMIT 2";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<div> <a href="./adminstatus/blogadmin/<?php echo $result['photo']; ?>"><img src=" ./adminstatus/blogadmin/<?php echo $result['photo']; ?>" style="width: 100%; height: 300px;" target="blank"></a>

 </div>
         
    <div class="category_page-video-content">
      <a class="truncate_title" href="#"><h4 class="w3-"><a href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['title']; ?></a></h4></a>

      <span class="w3-text-orange"><i class=" ml-2 fa fa-date"></i><?php echo $result['date']; ?></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-tag"></i><?php echo $result['tags']; ?></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-edit"></i><?php echo $result['authers']; ?></span>

<div class="time_ago_container"><span class="field-content">
<!--   <em class="placeholder">2 years</em> ago -->
</span></div><br>
<div class="description"><div class="field-content"><a class="w3-text-black" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['abst']; ?></a>  <span class="w3-text-blue"><a href="blog_detail.php?id=<?php echo $result['id'] ?>">more.....</a></span> </div></div></div>

      <?php
              # code...
            }
            ?>
  
   
              
    
  </div>
  
  <br>
  
  
  <div class="col-lg-5 col-md-8 col-12  w3-yelow">
   <div class="section"><hr>
 
 <h4 class="section-heading"> <a href="#"><strong><B></B> </strong> </a><span></span></h4>
 <div class="vticker" ><!--this is the vertical animation tag-->
  
<ul class="news-list">
    <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs WHERE categories='72' ORDER BY id LIMIT 8";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>

                  <li>
            <div class="place-image  place-thumbnail" style=" height:50px; width:50px;  background-image: url( ./adminstatus/blogadmin/<?php echo $result['photo']; ?>)"    ></div>
            <h4><a href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['title']; ?></a></h4>
            <span class="w3-text-orange"><i class=" ml-2 fa fa-date"></i>
              <a class="w3-text-orange" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['date']; ?></a></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-tag"></i>
                <a class="w3-text-orange"  href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['tags']; ?></a></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-edit"></i>
                  <a class="w3-text-orange" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['authers']; ?></a></span>

          </li>
           <?php
              # code...
            }
            ?>
              


      </ul>
    </div>
    </div>
  </div>
 
   </div>
    </div>

  <!--block--2--->

    <hr> <!--block-col-1-row-1-->
  
  <!--block--2--->

    <hr>
     <!--block-col-1-row-1-->
   <div class="b" >
<div class="row "> 
  <div class="col-lg-7 col-md-8 col-sm-12 col-12 sub w3-orang">
  <br><br>
  
  <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">Crop & forest prorection...<span></span>
  </b> </strong> </a><span></span></h3>
     <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs  WHERE categories='71' ORDER BY id LIMIT 2";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<div> <a href="./adminstatus/blogadmin/<?php echo $result['photo']; ?>"><img src=" ./adminstatus/blogadmin/<?php echo $result['photo']; ?>" style="width: 100%; height: 300px;" target="blank"></a>

 </div>
         
    <div class="category_page-video-content">
      <a class="truncate_title" href="#"><h4 class="w3-"><a href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['title']; ?></a></h4></a>

      <span class="w3-text-orange"><i class=" ml-2 fa fa-date"></i><?php echo $result['date']; ?></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-tag"></i><?php echo $result['tags']; ?></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-edit"></i><?php echo $result['authers']; ?></span>

<div class="time_ago_container"><span class="field-content">
<!--   <em class="placeholder">2 years</em> ago -->
</span></div><br>
<div class="description"><div class="field-content"><a class="w3-text-black" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['abst']; ?></a>  <span class="w3-text-blue"><a href="blog_detail.php?id=<?php echo $result['id'] ?>">more.....</a></span> </div></div></div>

      <?php
              # code...
            }
            ?>
  
   
              
    
  </div>
  
  <br>
  
  
  <div class="col-lg-5 col-md-8 col-12  w3-yelow">
   <div class="section"><hr>
 
 <h4 class="section-heading"> <a href="#"><strong><B></B> </strong> </a><span></span></h4>
 <div class="vticker" ><!--this is the vertical animation tag-->
  
<ul class="news-list">
    <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs WHERE categories='71' ORDER BY id LIMIT 8";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>

                  <li>
            <div class="place-image  place-thumbnail" style=" height:50px; width:50px;  background-image: url( ./adminstatus/blogadmin/<?php echo $result['photo']; ?>)"    ></div>
            <h4><a href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['title']; ?></a></h4>
            <span class="w3-text-orange"><i class=" ml-2 fa fa-date"></i>
              <a class="w3-text-orange" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['date']; ?></a></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-tag"></i>
                <a class="w3-text-orange"  href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['tags']; ?></a></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-edit"></i>
                  <a class="w3-text-orange" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['authers']; ?></a></span>

          </li>
           <?php
              # code...
            }
            ?>
              


      </ul>
    </div>
    </div>
  </div>
 
   </div>
    </div>

  <!--block--2--->

    <hr> <!--block-col-1-row-1-->
  
  <!--block--2--->

    <hr>
     <!--block-col-1-row-1-->
   <div class="b" >
<div class="row "> 
  <div class="col-lg-7 col-md-8 col-sm-12 col-12 sub w3-orang">
  <br><br>
  
 <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">Lives-tock.<span></span>
  </b> </strong> </a><span></span></h3>
     <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs  WHERE categories='88' ORDER BY id LIMIT 2";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<div> <a href="./adminstatus/blogadmin/<?php echo $result['photo']; ?>"><img src=" ./adminstatus/blogadmin/<?php echo $result['photo']; ?>" style="width: 100%; height: 300px;" target="blank"></a>

 </div>
         
    <div class="category_page-video-content">
      <a class="truncate_title" href="#"><h4 class="w3-"><a href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['title']; ?></a></h4></a>

      <span class="w3-text-orange"><i class=" ml-2 fa fa-date"></i><?php echo $result['date']; ?></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-tag"></i><?php echo $result['tags']; ?></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-edit"></i><?php echo $result['authers']; ?></span>

<div class="time_ago_container"><span class="field-content">
<!--   <em class="placeholder">2 years</em> ago -->
</span></div><br>
<div class="description"><div class="field-content"><a class="w3-text-black" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['abst']; ?></a>  <span class="w3-text-blue"><a href="blog_detail.php?id=<?php echo $result['id'] ?>">more.....</a></span> </div></div></div>

      <?php
              # code...
            }
            ?>
  
   
              
    
  </div>
  
  <br>
  
  
  <div class="col-lg-5 col-md-8 col-12  w3-yelow">
   <div class="section"><hr>
 
 <h4 class="section-heading"> <a href="#"><strong><B></B> </strong> </a><span></span></h4>
 <div class="vticker" ><!--this is the vertical animation tag-->
  
<ul class="news-list">
    <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs  WHERE categories='88' ORDER BY id LIMIT 8";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>

                  <li>
            <div class="place-image  place-thumbnail" style=" height:50px; width:50px;  background-image: url( ./adminstatus/blogadmin/<?php echo $result['photo']; ?>)"    ></div>
            <h4><a href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['title']; ?></a></h4>
            <span class="w3-text-orange"><i class=" ml-2 fa fa-date"></i>
              <a class="w3-text-orange" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['date']; ?></a></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-tag"></i>
                <a class="w3-text-orange"  href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['tags']; ?></a></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-edit"></i>
                  <a class="w3-text-orange" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['authers']; ?></a></span>

          </li>
           <?php
              # code...
            }
            ?>
              


      </ul>
    </div>
    </div>
  </div>
 
   </div>
    </div>

  <!--block--2--->

    <hr> <!--block-col-1-row-1-->
  
  <!--block--2--->

    <hr>
     <!--block-col-1-row-1-->
   <div class="b" >
<div class="row "> 
  <div class="col-lg-7 col-md-8 col-sm-12 col-12 sub w3-orang">
  <br><br>
 <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">General news..<span></span>
  </b> </strong> </a><span></span></h3>
     <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs  WHERE categories='74' ORDER BY id LIMIT 2";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<div> <a href="./adminstatus/blogadmin/<?php echo $result['photo']; ?>"><img src=" ./adminstatus/blogadmin/<?php echo $result['photo']; ?>" style="width: 100%; height: 300px;" target="blank"></a>

 </div>
         
    <div class="category_page-video-content">
      <a class="truncate_title" href="#"><h4 class="w3-"><a href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['title']; ?></a></h4></a>

      <span class="w3-text-orange"><i class=" ml-2 fa fa-date"></i><?php echo $result['date']; ?></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-tag"></i><?php echo $result['tags']; ?></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-edit"></i><?php echo $result['authers']; ?></span>

<div class="time_ago_container"><span class="field-content">
<!--   <em class="placeholder">2 years</em> ago -->
</span></div><br>
<div class="description"><div class="field-content"><a class="w3-text-black" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['abst']; ?></a>  <span class="w3-text-blue"><a href="blog_detail.php?id=<?php echo $result['id'] ?>">more.....</a></span> </div></div></div>

      <?php
              # code...
            }
            ?>
  
   
              
    
  </div>
  
  <br>
  
  
  <div class="col-lg-5 col-md-8 col-12  w3-yelow">
   <div class="section"><hr>
 
 <h4 class="section-heading"> <a href="#"><strong><B></B> </strong> </a><span></span></h4>
 <div class="vticker" ><!--this is the vertical animation tag-->
  
<ul class="news-list">
    <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs WHERE categories='74' ORDER BY id LIMIT 8";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>

                  <li>
            <div class="place-image  place-thumbnail" style=" height:50px; width:50px;  background-image: url( ./adminstatus/blogadmin/<?php echo $result['photo']; ?>)"    ></div>
            <h4><a href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['title']; ?></a></h4>
            <span class="w3-text-orange"><i class=" ml-2 fa fa-date"></i>
              <a class="w3-text-orange" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['date']; ?></a></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-tag"></i>
                <a class="w3-text-orange"  href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['tags']; ?></a></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-edit"></i>
                  <a class="w3-text-orange" href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['authers']; ?></a></span>

          </li>
           <?php
              # code...
            }
            ?>
              


      </ul>
    </div>
    </div>
  </div>
 
   </div>
    </div>

  <!--block--2--->

    <hr> <!--block-col-1-row-1-->
  
  <!--block--2--->

    <hr>

  
  </div>
   <style>
.collapsible {
  background-color: ;
  color: black;
  cursor: pointer;
  padding: 10px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: green;
}

.collapsible:after {
  content: '\002B';
  color: black;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0px px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: f1;
}
.p{ padding-top: 10px; }
.p a li{padding: 5px;}
</style>


  <div class="col-lg-3 col-md-4 col-sm-12 col-12  w3-gra">
     <div class="rollbar">
      <div class="section">
  <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">categories...
  </b> </strong> </a></h3>

<?php 

            $selectquery = "SELECT*FROM  blog_categories ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php $name=$result['id']; ?>
<a  style="color: #004d00;" href="blog_categories_views.php?id=<?php echo $result['id'] ?>"><button class="collapsible" style="color: #004d00;"><b > <?php echo $result['name']; ?></b> </button></a> 
<?php
              # code...
            }
            ?>


<br><br>
 <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">Popular artical
  </b> </strong> </a></h3>

<ul class="news-list">
                    <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blog_page_hit order by count DESC LIMIT 10";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>

                  <li>
            <div class="place-image  place-thumbnail" style=" height:50px; width:50px;  background-image: url( ./adminstatus/blogadmin/<?php echo $result['photo']; ?>)"    ></div>
           <h4 ><a href="blog_detail.php?id=<?php echo $result['pid'] ?>"><b><?php echo $result['page']; ?></b></a></h4>
          

          </li>
           <?php
              # code...
            }
            ?>
                 
      </ul>


  
</div>
      <br>
   
    </div><hr>
  </div>
     </div>
  <br>
      <hr>
  





  <!--footer--->
  
    
<?php include("footer.php");?>



</body>
</html>