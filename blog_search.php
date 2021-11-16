<html>
<head>
 

<title> kupindetimur | blogs | artical | kupindedaha timur krishi farm pvt.ltd,Nepal </title>
<meta name="keywords" content=",introduction of kupinde timur farm,where is kupindedaha,best online shoping store,online store on salyan ,company introduction,list of online shoping in Nepal ,buy online nursery from salyan,buy online herbal product from salyan,bio techonology,smart farming,kupindedaha lake,kupindedaha timur farm ,online shopping,krishi samagri,best organic product ,nepal,salyan ,karnali ,karnali pardesh,buy and sell agriculture product,fresh product,">
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



<br><br>
<div class="row w3-re ">
  <div class="col-lg-9 col-md-8 col-sm-12 col-12  w3-gree">

    <?php
  error_reporting(0);
  if ($_GET['q']==="search..") {
    header('location:index.php');
    # code...
  }
if($_GET['q']!=='') {
  $q=$_GET['q'];
include("./adminstatus/blogadmin/dbc.php");
  $query = "SELECT * FROM blogs where title like '%$q%' or keyword like '%$q%'or keyword like '%$q%'or content like '%$q%' or categories like '%$q%' LIMIT 4" ;

 $querys = mysqli_query($conn , $query) or die("error");
  $num_row=mysqli_num_rows($querys);
  ?>
  <?php

  if ($num_row>0) {
    echo '  <div > <p><strong class="w3-text-blue">'.$num_row.'</strong> <b>result for <span class="w3-text-blue"> '.$q.'</span></b> </p></div>
    ';
    # code...
  }
  else{ echo '  <div > <p><strong class="w3-text-red"> sorry<span class="w3-text-blue">'.$num_row.'</span></strong> <b class="w3-text-red">result for <span class="w3-text-blue"> '.$q.' <span class="w3-text-red">please try  again !..</span></span></b> </p></div>
  <div class="w3-text-blue"><p>suggestion</p></div>
  <div class="w3-text-blue">Your search item is not matching with our database<br>
Try being more specific with key words and name eg.salyani besar<br>
if you tring to search product then go home page then search it may work<br>
Enter key word using title<br>
Try search using category<br>
if you are searching blog artical you go blog page then search with titile or keyword<br>
Try again later</div>';}
  ?>
 
     <!--block-col-1-row-1-->
   <div class="b" >
<div class="row "> 
   <div class="col-lg-7 col-md-8 col-sm-12 col-12 sub w3-orang">

  <?php
          while ($row=mysqli_fetch_array($querys)) {
$title = $row['title'];
$keyword = $row['keyword'];
$tags = $row['tags'];
$content = $row['content'];
$authers = $row['auther'];
$categories = $row['cat'];
$status = $row['post'];
echo '   
   <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">

  
  </b> </strong> </a><span></span></h3>
  <div> <a href="./adminstatus/blogadmin/'.$row['photo'].'"><img src=" ./adminstatus/blogadmin/'.$row['photo'].'" style="width: 100%; height: 300px;" target="blank"></a>

 </div>
    <div class="category_page-video-content">
      <a class="truncate_title" href="#"><h4 class="w3-"><a href="blog_detail.php?id='.$row['id'].'">'.$row['title'].'</a></h4></a>

      <span class="w3-text-orange"><i class=" ml-2 fa fa-date"></i>'.$row['date'].'</span> <span class="w3-text-orange"><i class=" ml-2 fa fa-tag"></i>'.$row['tags'].'</span> <span class="w3-text-orange"><i class=" ml-2 fa fa-edit"></i>'.$row['authers'].'</span>

<div class="time_ago_container"><span class="field-content">
<!--   <em class="placeholder">2 years</em> ago -->
</span></div><br>
<div class="description"><div class="field-content"><a class="w3-text-black" href="blog_detail.php?id='.$row['id'].'">'.$row['abst'].'</a>  <span class="w3-text-blue"><a href="blog_detail.php?id='.$row['if'].'">more.....</a></span> </div></div></div><hr><hr>

';
 }}
          else{header('location:index.php');}
?>

 
    
  </div>
  
  <br>
  



  
  <div class="col-lg-5 col-md-8 col-12  w3-yelow">
   <div class="section"><hr>
 
 <h4 class="section-heading"> <a href="#"><strong><B></B> </strong> </a><span></span></h4>
 <div class="vticker" ><!--this is the vertical animation tag-->
  
   <?php
  error_reporting(0);
  if ($_GET['q']==="search..") {
    header('location:index.php');
    # code...
  }
if($_GET['q']!=='') {
  $q=$_GET['q'];
include("./adminstatus/blogadmin/dbc.php");
  $query = "SELECT * FROM blogs where title like '%$q%' or keyword like '%$q%'or keyword like '%$q%'or content like '%$q%' or categories like '%$q%' " ;

 $querys = mysqli_query($conn , $query) or die("error");
  $num_row=mysqli_num_rows($querys);
  ?>
  <?php

  if ($num_row>0) {
    echo '  <div > <p><strong class="w3-text-blue">'.$num_row.'</strong> <b>result for <span class="w3-text-blue"> '.$q.'</span></b> </p></div>
    <div style="border-bottom:4px solid orange;"></div>
    <br>
    ';

    # code...
  }
  else{ echo '  <div > <p><strong class="w3-text-red"> sorry<span class="w3-text-blue">'.$num_row.'</span></strong> <b class="w3-text-red">result for <span class="w3-text-blue"> '.$q.' <span class="w3-text-red">please try  again !..</span></span></b> </p></div>
  <div class="w3-text-blue"><p>suggestion</p></div>
  <div class="w3-text-blue">Your search item is not matching with our database<br>
Try being more specific with key words and name eg.salyani besar<br>
if you tring to search product then go home page then search it may work<br>
Enter key word using title<br>
Try search using category<br>
if you are searching blog artical you go blog page then search with titile or keyword<br>
Try again later</div>';}
  ?>

<ul class="news-list">
    <?php
          while ($row=mysqli_fetch_array($querys)) {
$title = $row['title'];
$keyword = $row['keyword'];
$tags = $row['tags'];
$content = $row['content'];
$authers = $row['auther'];
$categories = $row['cat'];
$status = $row['post'];

echo '
                  <li>
            <div class="place-image  place-thumbnail" style=" height:50px; width:50px;  background-image: url( ./adminstatus/blogadmin/'.$row['photo'].')"    ></div>
            <h4><a href="blog_detail.php?id='.$row['id'].'">'.$row['title'].'</a></h4>
            <span class="w3-text-orange"><i class=" ml-2 fa fa-date"></i>
              <a class="w3-text-orange" href="blog_detail.php?id='.$row['id'].'">'.$row['date'].'</a></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-tag"></i>
                <a class="w3-text-orange"  href="blog_detail.php?id='.$row['id'].'">'.$row['tags'].'</a></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-edit"></i>
                  <a class="w3-text-orange" href="blog_detail.php?id='.$row['id'].'">'.$row['authers'].'</a></span>

          </li>';
       
 }}
          else{header('location:index.php');}
?>



      </ul>
    </div>
    </div>
  </div>
 
   </div>
    </div>

  
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



<br><br>
 <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">Popular artical<span></span>
  </b> </strong> </a><span></span></h3>

<ul class="news-list">
                    <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs ORDER BY id ASC LIMIT 10";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>

                  <li>
            <div class="place-image  place-thumbnail" style=" height:50px; width:50px;  background-image: url( ./adminstatus/blogadmin/<?php echo $result['photo']; ?>)"    ></div>
            <h4><a title="" href="#" rel="bookmark"><?php echo $result['title']; ?></a></h4>

          </li>
           <?php
              # code...
            }
            ?>
                 
      </ul>

  <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">categories...<span></span>
  </b> </strong> </a><span></span></h3>

<?php 

            $selectquery = "SELECT*FROM  blog_categories ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php $name=$result['id']; ?>
<button class="collapsible" style="color: #004d00;"><b > <a  style="color: #004d00;" href="blog_categories_views.php?id=<?php echo $result['id'] ?>"><?php echo $result['name']; ?></a> </b> </button>
<?php
              # code...
            }
            ?>
  
</div>
      <br>
   
    </div><hr>
  </div>
     </div>
  <br>
      <hr>
  





  <!--footer--->
  
    
 <?php include("footer.php");?>

</div>

</div>


</body>
</html>