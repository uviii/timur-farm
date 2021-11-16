



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



<?php //code to get the item using its id


$id=$_REQUEST['id']; 

$query="SELECT*FROM productadd WHERE id='".$id."'";
 $result=mysqli_query($conn,$query) or die ( ((is_object($conn))? mysqli_error($conn) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$row = mysqli_fetch_assoc($result);
//pageview count query
$page=$row['name'];
$count="SELECT * FROM page_hits WHERE page='".$page."'";$feedback=mysqli_query($conn,$count) or die ( ((is_object($conn))? mysqli_error($conn) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$roo=mysqli_fetch_assoc($feedback);

?>






<!DOCTYPE html>
<html>
<head>
	<title>timur farm</title>

<?php include("link.php");?>


<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />


<?php include("header.php");?>
<?php  require_once("./adminstatus/blogadmin/dbc.php");



### EDIT HERE ###

// DB CONNECT INFO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "con";

$db_host = "localhost";
$db_name = "con";
$db_user = "root";
$db_pw = "";

// DB TABLE INFO
$GLOBALS['hits_table_name'] = "page_hits";
$GLOBALS['info_table_name'] = "visitor_info";

### STOP EDITING HERE ###

// CONNECT TO DB




try {
  $GLOBALS['db'] = new PDO("mysql:host=".$servername.";dbname=".$db_name, $username, $password, array(PDO::ATTR_PERSISTENT => false, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false));
}
catch(PDOException $e) {
    echo $e->getMessage();
}

?>

<?php 
  require_once('counter.php');
  
  $pn=updateCounter(''.$row['name'].''); // Updates page hits
  echo $pn;
  updateInfo(); // Updates hit info ?>


 
<?php include("mobile_nav.php");?>
<?php include("desktop_nav.php");?>

     <?php 

             include("./adminstatus/blogadmin/dbc.php");
            
            $pid=$_GET['id'];
            $selectquery = "SELECT*FROM  `product_comment` WHERE pid='$pid' ";
             // $selectquery = "SELECT*FROM productadd WHERE id =$id";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

           if ($query) {
            $row=mysqli_num_rows($query);
            $rating=$row;
            
           }

?>               
                  




 <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $id=$_GET['id'];
            $selectquery = "SELECT*FROM productadd WHERE id =$id";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>

  <?php
$a=$result['price1'];
$b=$result['price2'];
$c=$a-$b;
$rate=(($c/$a)*100);

// $shiping=$result['shiping'];


//    $price=$result['price'] *$result['pquantity'] ; 
// $subtotal= $shiping+$price;
// $total+=$subtotal;

  ?>

<section>
  <div class="container">
    <div class="block-breadcrumb">
                    <ul class="breadcrumb">
                        <li><a href="">Home</a></li>>>
                                                    <li>
                                <a href=""> <?php echo htmlentities($result['categories']) ?></a> 
                              </li>>>
                                                  
                                            <li class=" w3-text-red">
                                <span class="ml-3"><?php echo ($result['name']) ;?></span>                           </li>
                        

                    </ul>
                </div>

     <div class="row">
    <div class="col-sm-6 bg-prmary">




                           <?php

 echo '<div class="product-imag">




 
                                 

 <a href="./adminstatus/blogadmin/'.$result['photo1'].'"><img src="./adminstatus/blogadmin/'.$result['photo1'].'" class="img-fluid" alt="fantastic cms" style="width:100%;height:250px;"></a>
 

                              </div><br>

                              



                         </div>
    <div class="col-sm-6 bg-rimary">
     <div class="product-detail-section ">

                                   <div class="">
                                    <h3 class="w3-center ">
                                   

                                    '.$result['name'].'('.$result['weight'].')
                                     


                                                        </h3>
                                                         <div class="w3-center">
                                        <p>MRP:<span><del>Rs'.$result['price1'].'</del></span></span> 
                                            <b><span class="w3-">      <span>price:</span>Rs.'.$result['price2'].'</span></b>
                                           
                                          <span class="ml-1 w3-text-pink" style="font-size:10px;"><b>You save:'.round($rate).'%</b></span><span class="ml-1" style="font-size:11px;">(Inclusive of all taxes)</span>

                                            </p>
                                            

                                            

                                        </div>
                                       
                                   <div class="w3-center">
                                  
                                    <span><div class="error" id="wishlisterror"></div></span>
                                    <div class="product-rating">
                                        <div class="stars">

                                         <i class="fa fa-star w3-text-orange" aria-hidden="true"></i><i class="fa fa-star w3-text-orange" aria-hidden="true"></i><i class="fa fa-star w3-text-orange" aria-hidden="true"></i><i class="fa fa-star w3-text-orange" aria-hidden="true"></i><i class="fa fa-star w3-text-orange" aria-hidden="true"></i>
                                        </div>
                                        
                                        <a href="#" class="review">'.$rating.' Reviews </a>
                                        
                                        <a href="#"><button type="button" class="btn btn-primar" data-toggle="modal" data-target="#review"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>write_review</button></a>

                                       
                                       <span><a href="" class="write-review"><i class="fa fa-heart" aria-hidden="true"></i>Add to Wishlist</a></span></div>
                                    </div></div>


                                        
                                        <div class="clearfix">
                                           



                                                     <div class="text-center">

                                                 
                                                
                                               

                                                

                                            </div>
                                        </div>

                                       
';

                  ?>
       
         <?php
              # code...
            }
            ?>

              

                       
 <br><br>


            




 </div>
                                </div>
                            </div></div>












                              </div>
    
  </div>
   <div class="row" style="color: rgba(14, 14, 14, 0.7);">

       

       


    </div>


      </div>

<!-- <script >
  $(document).ready(function(){
    $('.cons1').hide();
    $('.cons').click(function(){
      $('.cons1').toggle();

    });

  });
</script> -->

 </div> 




<hr>





 <section class="cons1">

 <div class="row ">
                    <div class="col-md-8 col-sm-6 col-xs-12 pull-letft big-star-rating">
                        <div class="widget-title container w3-text-orange">
                            <i class="fa fa-thumbs-up w3-text-orange"></i>Reviews


                        </div>
                        <div class="col-md-6 text-center ml-2">
                            <div class="row container">
                              <i class="fa fa-star w3-text-orange" ></i><i class="fa fa-star w3-text-orange" ></i><i class="fa fa-star w3-text-orange" ></i><i class="fa fa-star w3-text-orange" ></i><i class="fa fa-star w3-text-orange" ></i>
                                                                <!--<small class="point">4.2</small>-->
                              <!--       <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i> -->
                                    <br>

                               
                            </div>
                             <p class="text-center review-star w3-text-orange"><b>Average Rating Based on 6 ratings </b></p> 

                        </div>
                        <div class="col-md-5 ml-2">
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger bg-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                    <span class="sr-only">1 star</span>
                                </div>
                            </div>
                            <div class="right-arrow"></div>

                            <div class="progress">
                                <div class="progress-bar progress-bar-warning bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
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
                            <p class="ask-product-review-message"><strong class="w3-text-orange">Have you used this product?</strong></p>
                           <!--  <div class="w3-text-pink"><b>Rate it now.</b></div> -->

                        </div>
                        <div class="product-rating">
                            <div class="stars">
                                    
                                     <i class="fa fa-star w3-text-orange" ></i><i class="fa fa-star w3-text-orange" ></i><i class="fa fa-star w3-text-orange" ></i><i class="fa fa-star w3-text-orange" ></i><i class="fa fa-star w3-text-orange" ></i>
                                   <!--   <span class="star-active"></span>
                                    <span class="star active"></span>
                                    <span class="star active"></span>
                                    <span class="star active"></span> -->
                                    <button type="button" class="btn w3-orange w3-hover-blue form-control container" data-toggle="modal" data-target="#review">write_review</button>
                             
                            </div>
                        </div>
                        <br>
                        


                    </div>

                </div>
         
                        <br>
                     


                <div class="row container ml-2">
                    <div class="col-md-8">
           <div class="widget-title">
                           <h3 class="w3-text-orange"> <i class="fa fa-thumbs-up"></i>recent   <?php 

             include("./adminstatus/blogadmin/dbc.php");
            
            $pid=$_GET['id'];
            $selectquery = "SELECT*FROM  `product_comment` WHERE pid='$pid' ";
             // $selectquery = "SELECT*FROM productadd WHERE id =$id";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

             if ($query) {
            $row=mysqli_num_rows($query);
            if ($row) {
             

               echo $row;  
              
            
            }
            
           }

?>               
   review</h3>

                        </div><hr>


<?php 

            include("./adminstatus/blogadmin/dbc.php");
            $pid=$_GET['id'];
            $selectquery = "SELECT*FROM  `product_comment` WHERE pid='$pid'  ORDER BY id DESC";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php

echo '


<div class="row">
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
                                                    <h5 style="color:#99e600;">'.$result['name'].'</h5>
                                                    <small class="text-muted">'.$result['date'].' </small>
                                                </div>
                                            </div> <div class="col-md-8">
                                                <div class="review-body">
                                                    <p style="color:#ff0000;">'.$result['text'].' .</p>

                                                   
                                                    </div>
                                                </div>
                                            </div>';


  ?>


<hr>

       
         <?php
              # code...
            }
            ?>






                   
                    

                    </div>
                    <div class="col-md-4">

                        <div class="widget-title">
                          <h4 class="w3-text-orange">  <i class="fa fa-thumbs-up"></i>Top Reviews</h4>

                        </div><hr>
                        <div class="widget-block">
                            <div class="row">

                                <div class="col-md-12">




<?php 

            include("./adminstatus/blogadmin/dbc.php");
            $pid=$_GET['id'];

            $selectquery = "SELECT*FROM  `product_comment` WHERE pid='$pid' AND status='approved' ORDER BY id DESC";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php

echo '


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
                                            <h5 style="color:#99e600;">'.$result['name'].'</h5>
                                            <small class="text-muted">'.$result['date'].' </small>
                                        </div>

                                        <p class="description" style="color:#ff0000;">
                                        '.$result['text'].' 
                                        </p>';


  ?>


<hr>
  
       
         <?php
              # code...
            }
            ?>

                                    

            

                    </div></div>
                </div>

            
  </div>
</div>
 
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
            <h5 class="w3-center" >
             
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
<div class="modal" id="review">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
     
       <h4 class="card-header w3-center">leave review of this product</h4>
       <br><hr>
            
        <form name="Comment" action="product_coment.php" method="post" class="container">
     <!--  <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" /> -->
 <div class="form-group">
<input type="text" name="name" class="form-control" placeholder="Enter your fullname" required>
</div>
  <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $id=$_GET['id'];
            $selectquery = "SELECT*FROM productadd WHERE id =$id";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>





<input type="hidden" name="pid" class="form-control" value="<?php echo($result['id']) ?>"  >

<input type="hidden" name="postname" class="form-control" value="<?php echo($result['name']) ?>" >


 
       
         <?php
              # code...
            }
            ?>



 <div class="form-group">
 <input type="email" name="email" class="form-control" placeholder="Enter your Valid email" required>
 </div>


                <div class="form-group">
                  <textarea class="form-control" name="text" rows="3" placeholder="write here review about this product" required></textarea>
                </div>
              <div class="w3-center">  <button type="submit" class="btn btn-primary" name="review">Submit</button>
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
