<!DOCTYPE html>
<html>
<head>

<title> kupindetimur | nurserry product | kupindedaha timur krishi farm pvt.ltd </title>
<meta name="keywords" content="nursery near me,buy plants online in Nepal,growbag in Nepal ,growbag near me,gamala price in nepal,best plant nursery in Nepal ,best nuresry near me,wholeselle greenhouse plants,commercial nuresry puts,office plant,home garden,roof garden plant,nuresry online,best lemon plant,reetha ,lemon nursery,orange nursery,best orange nursery,okhar,okhar nursery,apple nursery, best apple nursery plant, kupindedaha lake,kupindedaha timur farm ,online shopping,krishi samagri,best organic product ,nepal,salyan ,karnali ,karnali pardesh,buy and sell agriculture product,fresh product,">
<meta name="discription" content="Buy Plants Online in Nepal: Shop all plants include flowering plant, live green plants,commercial plants ,vegetable & crop seed..Home delivery all over the Nepal and other country... ">
<!-- <meta name="auther" content="<?php echo $result['authers']; ?> "> -->


<?php include("link.php");?>
<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
</head>
<body class="ml-2 mr-2" >
<?php include("header.php");?>
<?php include("desktop_nav.php");?>
<br><br><br><br><br><br><br><br>
<?php include("mobile_nav.php");?>

<br><br><br>

  <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.php"><b> <i class="fa fa-home"></i> Home</b></a></li>>>
                    <li class="activ"><a href="nurserry.php"><b class="w3-text-orange">Nerserry product</b></a> </li>
                </ul>
            </div>
 
<div class="row w3-re ">
  <div class="col-lg-9 col-md-8 col-sm-12 col-12  w3-gree">
  
<?php 
      include("./adminstatus/blogadmin/dbc.php");
// INSERT INTO `herb`(`id`, `content`, `date`) VALUES ([value-1],[value-2],[value-3])
           
            $selectquery = "SELECT*FROM `herb` WHERE cat='nurserry' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>

<div> <p>
 <?php echo $result['content']; ?>
</p></div>

     <?php
              # code...
            }
            ?>
            <div style="border-bottom: 4px solid gray;"></div><br><br>

 
     <!--block-col-1-row-1-->
   <div class="b" >
<div class="row "> 
   <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  productadd WHERE categories='nurserry' ORDER BY id DESC";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>

  <div class="col-lg-3 col-md-3 col-sm-6 col-6 col-lg-3sub w3-orang">
 <!-- <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">Latest update..<span></span> -->
  </b> </strong> </a><span></span></h3>
   
<div>  <a href="single.php?id=<?php echo $result['id']; ?>"><img src=" ./adminstatus/blogadmin/<?php echo $result['photo1']; ?>" style="width: 100%; height: 190px;" target="blank"></a>

 </div>
 <h5 class="w3-center">
             
          <a  href="single.php?id=<?php echo $result['id']; ?>"><?php echo $result['name']; ?>(<?php echo $result['weight']; ?><?php echo $result['tar']; ?>)</a>
            </h5>
               <div class="w3-center">
                                   <span class="item_price">Rs.<?php echo $result['price2']; ?></span>
                                    <del>Rs.<?php echo $result['price1']; ?></del>
                             </div>
                           
                             <div class="w3-center"><a href="single.php?id=<?php echo $result['id']; ?>"><button class="bg-success">view_detail</button></a></div> <br> <br> 
  </div>

  <?php
              # code...
            }
            ?>
 
  
  
 
 
   </div>
    </div>

  <!--block--2--->

    <hr> <!--block-col-1-row-1-->
  
 

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
  <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">product list...<span></span>
  </b> </strong> </a><span></span></h3>

  <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  productadd  WHERE categories='nurserry'  ORDER BY id DESC";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>

<a  style="color: #004d00;" href="single.php?id=<?php echo $result['id'] ?>"><button class="collapsible" style="color: #004d00;"><b > <?php echo $result['name']; ?></b> </button></a> 
<?php
              # code...
            }
            ?>


<br><br>
  <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">Popular <span></span>
  </b> </strong> </a><span></span></h3>
<ul class="news-list">
                    <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  page_hits order by count DESC LIMIT 10";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>

                  <li>
            <div class="place-image  place-thumbnail" style=" height:50px; width:50px;  background-image: url( ./adminstatus/blogadmin/<?php echo $result['photo']; ?>)"    ></div>
           <h4 ><a href="single.php?id=<?php echo $result['pid'] ?>"><b><?php echo $result['page']; ?></b></a></h4>
          

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
 


<?php include("contactproduct.php");?><br><br>
    
<?php include("footer.php");?>


</div>

</div>


</body>
</html>