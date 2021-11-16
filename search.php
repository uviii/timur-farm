<!DOCTYPE html>
<html>
<head>
  <title>timur farm</title>


<?php include("link.php");?>
 
<link rel="stylesheet" href="css/style2.css"> 

<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
</head>

<body class="ml-1 mr-2 w3-gren" >

<?php include("header.php");?>
<?php include("desktop_nav.php");?>
<br><br><br><br><br><br><br><br>
<?php include("mobile_nav.php");?>



<div class="row w3-re ">
  <div class="col-lg-9 col-md-8 col-sm-12 col-12  w3-gree">
  

        <div class="container"><br> <p>
           We offer a large and wide-ranging selection of freshly ground spices,herbal product,food &vegetable product and nurserry product. both wholesell as well as retail with Home delivery all over the Nepal and worldwide , fast, secured and easy 
        </p></div>


       
            <div style="border-bottom: 4px solid gray;"></div>

  <?php
  error_reporting(0);
  if ($_GET['q']==="search..") {
  	header('location:index.php');
  	# code...
  }
if($_GET['q']!=='') {
  $q=$_GET['q'];
include("./adminstatus/blogadmin/dbc.php");
  $query = "SELECT * FROM productadd where name like '%$q%' or avail like '%$q%'or keyword like '%$q%'or benefit like '%$q%' or benefit like '%$q%'" ;

 $querys = mysqli_query($conn , $query) or die("error");
  $num_row=mysqli_num_rows($querys);
  ?>
  <?php

  if ($num_row>0) {
  	echo '  <div > <p><strong class="w3-text-blue">'.$num_row.'</strong> <b>result for <span class="w3-text-blue"> '.$q.'</span></b> </p></div>
  	';
  	# code...
  }
  else{	echo '  <div > <p><strong class="w3-text-red"> sorry<span class="w3-text-blue">'.$num_row.'</span></strong> <b class="w3-text-red">result for <span class="w3-text-blue"> '.$q.' <span class="w3-text-red">please try  again !..</span></span></b> </p></div>
  <div class="w3-text-blue"><p>suggestion</p></div>
  <div class="w3-text-blue">Your search item is not matching with our database<br>
Try being more specific with key words and name eg.salyani besar<br>
if you tring to search product then go home page then search it may work<br>
Enter key word using title<br>
Try search using category<br>
if you are searching blog artical you go blog page then search with titile or keyword<br>
Try again later</div>';}
  ?>
   <span></span>
  <!-- <div class="w3-text-blue"><p>suggestion</p></div> -->
  
<!--   <div > <p><strong class="w3-text-blue"><?php echo $num_row; ?></strong> <b>result for <span class="w3-text-blue"><?php echo $q; ?></span></b> </p></div> -->
     <!--block-col-1-row-1-->
   <div class="b" >
<div class="row "> 


 <!-- <div > <p><strong><?php echo $num_row; ?></strong> result for <?php echo $q; ?> </p></div><br><br><br><br><br><br> -->
  <?php
          while ($row=mysqli_fetch_array($querys)) {
 
$langose = $row['langose'];
$name = $row['name'];
$weight = $row['weight'];
$price1 = $row['price1'];
$price2 = $row['price2'];
$tag = $row['tag'];
$intro = $row['intro'];
$keyword = $row['keyword'];
$benefit = $row['benefit'];
$photo1 = $row['photo1'];

$ingredient = $row['ingredient'];
$use = $row['use'];$id = $row['id'];
$info = $row['info'];
$avail = $row['avail'];

$sold_by = $row['sold_by'];
$code = $row['code'];
$imported = $row['imported'];
$organic = $row['organic'];
$origin = $row['origin'];
$packaging = $row['packaging'];
$qlty = $row['qlty'];

echo ' <div class="col-lg-3 col-md-3 col-sm-6 col-6 col-lg-3sub w3-orang">
 <!-- <h3 class="section-heading w3-blac" style="border-bottom: 4px solid gray;"> <a href="#"><strong style="background-color: #ffe6e6;" ><b class="w3-text-orange">Latest update..<span></span> -->
  </b> </strong> </a><span></span></h3>
   
<div>  <a href="single.php?id='.$id.'"><img src=" ./adminstatus/blogadmin/'.$photo1.'" style="width: 100%; height: 190px;" target="blank"></a>

 </div>
 <h5 class="w3-center">
             
            <a  href=""single.php?id='.$id.'"">'.$name.'('.$weight.')</a>
            </h5>
               <div class="w3-center">
                                   <span class="item_price">Rs.'.$price2.'</span>
                                    <del>Rs.'.$price1.'</del>
                             </div>
                           
                             <div class="w3-center"><a href="single.php?id='.$id.'""><button class="bg-success">view_detail</button></a></div> <br> <br> 
  </div>
';

// echo  $id .'<a href="single.php?id='.$id.'"><h4>'.$name.'</h4></a><p>'.$tag.$avail.'</p>'.'<br>';
//             # code...
          }}
          else{header('location:index.php');}
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
            $selectquery = "SELECT*FROM  productadd  WHERE categories='masala'  ORDER BY id DESC";
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
            $selectquery = "SELECT*FROM  productadd  WHERE categories='masala'  ORDER BY id DESC";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>

                  <li>
            <div class="place-image  place-thumbnail" style=" height:50px; width:50px;  background-image: url( ./adminstatus/blogadmin/<?php echo $result['photo1']; ?>)"    ></div>
            <h4><a title="" href="#" rel="bookmark"><?php echo $result['name']; ?></a></h4>

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