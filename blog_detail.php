<?php
 include("./adminstatus/blogadmin/dbc.php"); // Database connection file

// require_once('./libs/fetch_data.php');  // PHP functions file
?>

<?php //code to get the item using its id


$id=$_REQUEST['id']; 

$query="SELECT*FROM blogs WHERE id='".$id."'";
 $result=mysqli_query($conn,$query) or die ( ((is_object($conn))? mysqli_error($conn) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$row = mysqli_fetch_assoc($result);
//pageview count query
$page=$row['title'];
$count="SELECT * FROM blog_page_hit WHERE page='".$page."'";$feedback=mysqli_query($conn,$count) or die ( ((is_object($conn))? mysqli_error($conn) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$roo=mysqli_fetch_assoc($feedback);

?>




<!DOCTYPE html>
<html>
<head>
   <?php 

             include("./adminstatus/blogadmin/dbc.php");
            $pid=$_GET['id'];
            $selectquery = "SELECT*FROM blogs WHERE id =$pid";
            $query = mysqli_query($conn , $selectquery) or die("error");
 
            while ($result= mysqli_fetch_array($query)) {
              
?>

   <title> kupindetimur | <?php echo $result['title']; ?> | artical | blog</title>
<meta name="keywords" content="<?php echo $result['keyword']; ?>">
<meta name="discription" content="<?php echo $result['abst']; ?> ">
<meta name="auther" content="<?php echo $result['authers']; ?> ">
 <link rel="shortcut icon" href="./adminstatus/blogadmin/<?php echo $result['photo']; ?>" type="image/x-icon" />

   <?php
              # code...
            }
            ?>


  

<?php include("link.php");?>
 
<link rel="stylesheet" href="css/style2.css"> 


<link rel="shortcut icon" href="./uplode/logo.png" type="image/x-icon" />
</head>

<body class="ml-2 mr-2" >
<?php include("header_blog.php");?>
<?php include("desktop_nav.php");?>

<br><br><br><br><br>

<?php  require_once("./adminstatus/blogadmin/dbc.php");



### EDIT HERE ###

// DB CONNECT INFO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "con";


// DB TABLE INFO
$GLOBALS['hits_table_name'] = "blog_page_hit";
$GLOBALS['info_table_name'] = "blog_visitor_info";

### STOP EDITING HERE ###

// CONNECT TO DB




try {
  $GLOBALS['db'] = new PDO("mysql:host=".$servername.";dbname=".$dbname, $username, $password, array(PDO::ATTR_PERSISTENT => false, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false));
}
catch(PDOException $e) {
    echo $e->getMessage();
}

?>

<?php 
  require_once('counter.php');
  
  $pn=updateCounter(''.$row['title'].''); // Updates page hits
  echo $pn;
  // updateInfo(); // Updates hit info ?>


<br><br><br><br><br><br><br>
<?php include("mobile_nav.php");?>


<div class="">
                <ul class="breadcrumb">
                    <li><a href="index.php"><b> <i class="fa fa-home"></i> Home</b></a></li>>>
                     <?php 

             include("./adminstatus/blogadmin/dbc.php");
            $pid=$_GET['id'];
            $selectquery = "SELECT*FROM blogs WHERE id =$pid";
            $query = mysqli_query($conn , $selectquery) or die("error");
 
           $result= mysqli_fetch_array($query);
          $title= $result['title'];
              
?>
                    <li class="activ"><a href="blog.php"><b class="w3-text-orange"><?php echo $title; ?></b></a> </li>
                </ul>
            </div>

<div class="row w3-re ">
  <div class="col-lg-9 col-md-8 col-sm-12 col-12  w3-gree">
  
 
     <!--block-col-1-row-1-->
   <div class="b" >
<div class="row "> 
 <div class="col-lg-12 col-md-8 col-sm-12 col-12 sub w3-orang">
   <!--   <div class="w3-hide-large">
       <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">categories...<span></span>
  </b> </strong> </a><span></span></h3>

<?php 
  include("./adminstatus/blogadmin/dbc.php");
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
    </div> -->
  
  
 <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">Latest update..<span></span>
  </b> </strong> </a><span></span></h3>
     <?php 

             include("./adminstatus/blogadmin/dbc.php");
            $pid=$_GET['id'];
            $selectquery = "SELECT*FROM blogs WHERE id =$pid";
            $query = mysqli_query($conn , $selectquery) or die("error");
 
            while ($result= mysqli_fetch_array($query)) {
              
?>


<?php
$b=$result['date'];
$n=strtotime("$b");?>



<div> <a href="./adminstatus/blogadmin/<?php echo $result['photo']; ?>"><img src=" ./adminstatus/blogadmin/<?php echo $result['photo']; ?>" style="width: 100%; height: 300px;" target="blank"></a>

 </div>
         
    <div class="category_page-video-content">
      <a class="truncate_title" href="#"><h4 class="w3-"><a href="blog_detail.php?id=<?php echo $result['id'] ?>"><?php echo $result['title']; ?></a></h4></a>

      <span class="w3-text-orange"><i class=" ml-2 fa fa-date"></i><?php echo date('d-M-Y',$n); ?></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-tag"></i><?php echo $result['tags']; ?></span> <span class="w3-text-orange"><i class=" ml-2 fa fa-edit"></i><?php echo $result['authers']; ?></span>

<div class="time_ago_container"><span class="field-content">
<!--   <em class="placeholder">2 years</em> ago -->
</span></div><br>
<div class="description"><div class="field-content"><?php echo $result['content']; ?>  <span class="w3-text-blue"></span> </div></div></div>

      <?php
              # code...
            }
            ?>
  
    <?php
$page_url = "https://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
?>
   
 
        <br><div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v8.0&appId=351798216004907&autoLogAppEvents=1" nonce="lwPLMjLK"></script>


<div class="fb-share-button" data-href="" data-layout="box_count" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fkupindetimur.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
<hr>

 <?php include("comment_ad.php");?> 
 
</div> 

<section class="container"> <div class="row">
  <div class="col-sm-2"></div>
   <div class="col-sm-8 "><?php include("comment_fetch.php");?></div>
    <div class="col-sm-2 "></div>
</div></section>     
    
  </div>
  
  <br>
  
  
 
 
   </div>
    </div>

    
    <hr>
   
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


<br><br>
 <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">Similar artical<span></span>
  </b> </strong> </a><span></span></h3>

<ul class="news-list">
                    <?php 

           
            $selectquery = "SELECT*FROM  blogs where categories='$cat' ORDER BY id ASC LIMIT 10";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>

                  <li>
            <div class="place-image  place-thumbnail" style=" height:50px; width:50px;  background-image: url( ./adminstatus/blogadmin/<?php echo $result['photo']; ?>)"    ></div>
            <h4><a title="" href="blog_detail.php?id=<?php echo $result['id'] ?>" rel="bookmark"><?php echo $result['title']; ?></a></h4>

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


</div>

</div>


</body>
</html>
