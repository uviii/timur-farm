<!DOCTYPE html>
<html>
<head>
  <title>timur farm</title>


<?php include("link.php");?><br><br>
 
<link rel="stylesheet" href="css/style2.css"> 


<link rel="shortcut icon" href="./p.image/logo.png" type="image/x-icon" />
</head>

<body class="m-3" >

<?php include("header.php");?>

<?php include("mobile_nav.php");?>
<?php include("desktop_nav.php");?>



 


<?php
 include("mobile_nav.php"); // Database connection file
// require_once('./libs/fetch_data.php');  // PHP functions file
?>

<section class="main-content-w3layouts-agileits"><br><br><br>
        <div class="w3-center"><h3><b class="w3-text-orange w3-left ml-5">product item</b></h3></div>
        <br><hr><br><br>
                    <div class="blog-girds-sec">
                        <div class="row">
                             <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  productadd ORDER BY id DESC";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php


echo '<div class="col-md-4 col-sm-6 col-6 col-lg-3 blog-grid-top">
            <div class="b-grid-top">
            <div class="blog_info_left_grid w3-container-fluid">
            <a href="single.php?id='.$result['id'].'">
            <img src="./adminstatus/blogadmin/'.$result['photo1'].'" class="img-fluid w3-container-fluid" alt="fantastic cms" style="width:460px;height:270px">
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
            ?>
       
         <?php
              # code...
            }
            ?>
                            <!--bloggrids-->
                        </div>
                    </div>
                </section>




  <!--footer--->
  <br>  <br> <hr><hr> <br>
  
    <?php include("contact.php");?>
<br>
<?php include("footer.php");?>


</div>

</div>


</body>
</html>