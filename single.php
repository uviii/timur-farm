



  <?php 

include("./adminstatus/blogadmin/dbc.php");
//Genrating CSRF Token
error_reporting(0);
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


?>






<!DOCTYPE html>
<html>
<head>

 <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $id=$_GET['id'];
            $selectquery = "SELECT*FROM productadd WHERE id =$id";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>

   <title><?php echo $result['name']; ?> | <?php echo $result['weight']; ?> | <?php echo $result['organic']; ?> | tiumr farm</title>
<meta name="keywords" content="<?php echo $result['keyword']; ?>">
<meta name="og:discription" content="<?php echo $result['tag']; ?> ">
<meta property="og:image" content="./adminstatus/blogadmin/<?php echo $result['photo1']; ?>" />
<!-- <meta name="auther" content="<?php echo $result['authers']; ?> "> -->
 <link rel="shortcut icon" href="./adminstatus/blogadmin/<?php echo $result['photo1']; ?>" type="image/x-icon" />

<?php
              # code...
            }
            ?>

<?php include("link.php");?>
</head>
<body class="mr-2 ml-2">
<?php include("header.php");?>
<?php include("desktop_nav.php");?>
<br><br><br><br><br><br><br><br>


 
<?php include("mobile_nav.php");?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v9.0&appId=351798216004907&autoLogAppEvents=1" nonce="U3qyiqci"></script>

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
$pname=$result['name'];
$pid=$result['id'];
$a=$result['price1'];
$b=$result['price2'];
$c=$a-$b;
$rate=(($c/$a)*100);
$cat=$result['categories'];


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
$page_url = "https://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
?>


                           <?php

 echo '<div class="product-imag">

<div class="w3-hide-large">
<h3 style="font-size:21px;color:green;" class="w3-center">
                                   

                                    '.$result['name'].'('.$result['weight'].''.$result['tar'].')
                                     


                                                        </h3>
                                                         <div class="clearf w3-center ">
                                         <p style="font-weight:bold; color:indig; font-size:14px;">MRP:<span><del>Rs'.$result['price1'].'</del></span></span> 
                                            <b><span class="w3-">      <span>price:</span>Rs.'.$result['price2'].'</span></b><br>
                                           
                                          <span class="ml-1 w3-text-pink" style="font-size:9px;"><b>You save:'.round($rate).'%</b></span><span class="ml-1" style="font-size:11px;">(Inclusive of all taxes)</span>

                                            </p>

                                            

                                        </div>
                                       <div class="stars w3-center" style="color:orange;">
                                         <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                   
                                    <span ><span style="font-size:12px; font-weight:bold; color:indigo;"> A Product Of:</span> <a href="#" style="font-size:14px; font-weight:bold; color:pink;"><i class=""></i>'.$result['sold_by'].'</a></span><br>
                                    <span><div class="error" id="wishlisterror"></div></span>
                                    <div class="product-rating">
                                        
                                        <a href="#comment" style="color:green; font-weight:bold;" class="review"><strong class="w3-text-red">'.$rating.'</strong> Reviews </a>
                                        
                                        <a href="#"><button type="button" class="btn btn-primar w3-text-orange" style="font-weight:bold;" data-toggle="modal" data-target="#review"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>write_review</button></a>

                                       
                                       <span><a href="" style="font-weight:bold;" class="write-review"><i class="fa fa-heart" aria-hidden="true"></i>Add to Wishlist</a></span>
                                 
                                    </div>
</div>


 
                                 

 <a href="./adminstatus/blogadmin/'.$result['photo1'].'"><img src="./adminstatus/blogadmin/'.$result['photo1'].'" class="img-fluid" alt="fantastic cms" style="width:100%;height:auto;"></a>
 

                              </div><br> <div class="fb-share-button w3-center" data-href="'.$page_url.'" data-layout="button" data-size=""><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fkupindetimur.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div><hr>






                         </div>
    <div class="col-sm-6 bg-rimary">
     <div class="product-detail-section ">

                                   <div class="w3-hide-small">
                                    <h3 class="w3-center " style="font-size:21px; color:green;">
                                   

                                    '.$result['name'].'('.$result['weight'].''.$result['tar'].')
                                     


                                                        </h3>
                                                         <div class="w3-center">
                                        <p style="font-weight:bold; color:indig; font-size:14px;">MRP:<span><del>Rs'.$result['price1'].'</del></span></span> 
                                            <b><span class="w3-">      <span>price:</span>Rs.'.$result['price2'].'</span></b>
                                           
                                          <span class="ml-1 w3-text-pink" style="font-size:9px;"><b>You save:'.round($rate).'%</b></span><span class="ml-1" style="font-size:11px;">(Inclusive of all taxes)</span>

                                            </p>
                                            

                                            

                                        </div>
                                       
                                   
                                     <div class="stars w3-center" style="color:orange;">
                                         <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i>
                                        </div>
                                   
                                    <span ><span style="font-size:12px; font-weight:bold; color:indigo;"> A Product Of:</span> <a href="#" style="font-size:14px; font-weight:bold; color:pink;"><i class=""></i>'.$result['sold_by'].'</a></span><br>
                                    <span><div class="error" id="wishlisterror"></div></span>
                                    <div class="product-rating">
                                        
                                        <a href="#comment" style="color:green; font-weight:bold;" class="review"><strong class="w3-text-red">'.$rating.'</strong> Reviews </a>
                                        
                                        <a href="#"><button type="button" class="btn btn-primar w3-text-orange" style="font-weight:bold;" data-toggle="modal" data-target="#review"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>write_review</button></a>

                                       
                                       <span><a href="" style="font-weight:bold;" class="write-review"><i class="fa fa-heart" aria-hidden="true"></i>Add to Wishlist</a></span>

                                    <div class="fb-share-button" data-href="'.$page_url.'" data-layout="button" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fkupindetimur.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
                                    </div>
                                    </div>

<div class="w3-center w3-blu" style="background-color:pink; "><p><b style="font-size:20px; color:indigo;">Basic Product Information</b></p>
                                        </div>

                                    <div class="product-information">

                                       
                                     <div><table class="container-fluid w3-rose responsiv table-stripe" border="1" cellspacing="20" cellpadding="6">
     
       <tr>
        <td class=" w3-left fo  style="width=190px;" border="0"><b class="w3-text-green">produced by:</b></td>
        <td class=" w3-center"><span class=" ml-2 w3-text-blue"> '.$result['sold_by'].'</span></td>
       
      </tr>
        
      <tr>
          <td class=" w3-left fo  style="width=190px;" border="0"><b class="w3-text-green">package type:</b></td>
        <td class=" w3-center"><span class=" ml-2 w3-text-blue"> '.$result['origin'].'</span></td>
      </tr>
      <tr>
        <td class=" w3-left fo  style="width=190px;" border="0"><b class="w3-text-green">produced in:</b></td>
        <td class=" w3-center"><span class=" ml-2 w3-text-blue">'.$result['packaging'].' </span></td>
      </tr>
      <tr>
        <td class=" w3-left fo  style="width=190px;" border="0"><b class="w3-text-green">product Id:</b></td>
        <td class=" w3-center"><span class=" ml-2 w3-text-blue"> '.$result['id'].'</span></td>
      </tr>
      <tr>
        <td class=" w3-left fo  style="width=190px;" border="0"><b class="w3-text-green">Is it imported:</b></td>
        <td class=" w3-center"><span class=" ml-2 w3-text-blue">'.$result['imported'].'</span></td>
      </tr>
      <tr>
        <td class=" w3-left fo  style="width=190px;" border="0"><b class="w3-text-green">Is it oganic:</b></td>
        <td class=" w3-center"><span class=" ml-2 w3-text-blue">'.$result['organic'].'</span></td>

      </tr>
     

      

      
      
    </table></div>
    ';

                  ?>
                  <br>
                  <p class="w3-center">(  <label class="w3-center stock w3-text-red"><span> <b>delevery:</b></span> 
                                            
                                        Delevery all over the Nepal and other shortlisted country.

                                            </label> )</p>
       
         <?php
              # code...
            }
            ?>
    <div class="clearfix">
      <?php $ed=$_SESSION['id']; 
      // echo $ed;;
         $selectquery = "SELECT*FROM  user WHERE id='$ed' ";
         $query = mysqli_query($conn , $selectquery) or die("error");
            $resul= mysqli_fetch_array($query);
            $nam=$resul['city'];
            $namew=$resul['warda'];
            $name=$resul['country'];
            // echo $name;
            //  echo $namew;
            // echo $nam;



            ?>

           <?php 
// error_reporting(0);

                                        if ($name==='Nepal')
                         {
                           // include("order_product.php");
                          $selectqueryyy = "SELECT*FROM warda_munci where munci='$nam' and warda=$namew ";
                          $queryyy = mysqli_query($conn , $selectqueryyy) or die("Sorry ! Something going wrong please try again");
                          $resul= mysqli_fetch_array($queryyy);
                          // $name=$resul['warda'];
                          //  $n=$resul['charge_nepal'];
                          // $muncipality=$resul['munci'];
                          // $district=$resul['district'];
                          // $country=$resul['country'];
                        
                          $name=$resul['warda'];
                         
                           $charge_nepal=$resul['charge_nepal'];
                          $munci=$resul['munci'];
                           // echo $munci;
                          $district=$resul['district'];
                          $country=$resul['country'];
                          $currency=$resul['currency'];
                          $service=$resul['service'];
?>
<p class="w3- w3-text-green"style="font-weight:bold; font-size: 14px;"> <?php echo $munci ;?>,<span style="margin-left:5px;"><?php echo $district ;?> </span> ,<span style="margin-left:5px;"><?php echo $country ;?> </span> => <span style="color:orange; font-size:bold;"><?php echo $service ;?></span>(<span class="w3-text-pink" style="font-size: 10px; font-weight: bold;color:pink;"><span style="font-size: 10px; font-weight: bold;color:red;"> ..  Note:</span>     Minimum  Day to delever </span>) <br> Delevery Charge.. : <span style="color:orange; font-size:bold;"><?php echo $currency ;?>-<?php echo $charge_nepal ;?>|-</span>(<span class="w3-text-pink" style="font-size: 10px; font-weight: bold;color:pink;"><span style="font-size: 10px; font-weight: bold;color:red;"> ..  Note:</span> This Minimum  Charge Will Be Depend on Product Quantity </span>) </p>

<br>

<?php

                        }
                        else
                        {

                          if ($name !='Nepal')
                         {
                           // include("order_product.php");
                          $selectquery = "SELECT*FROM  shiping_charge where country='$name' ";
                          $query = mysqli_query($conn , $selectquery) or die("error");
                          $resul= mysqli_fetch_array($query);
                          $name=$resul['warda'];
                           $charge_nepal=$resul['charge_nepal'];
                          $munci=$resul['munci'];
                          $district=$resul['district'];
                          $country=$resul['country'];
                          $currency=$resul['currency'];
                          $service=$resul['service'];
                        
                          // echo $name .'<br>';
                          // echo $n .'<br>';
                          // echo $muncipality .'<br>';
                          // echo $district .'<br>';
                          // echo $country .'<br>';
                          // echo ;
                          ?>

  <div id="money"><p class="w3- w3-text-green"style="font-weight:bold;"> Delevere to.. <span style="margin-left:5px;"><?php echo $country ;?> </span> => <span style="color:orange; font-size:bold;"><?php echo $service ;?></span>(<span class="w3-text-pink" style="font-size: 10px; font-weight: bold;color:pink;"><span style="font-size: 10px; font-weight: bold;color:red;"> ..  Note:</span>     Minimum  Day to delever  </span>) <br> Delevery Charge.. : <span style="color:orange; font-size:bold;"><?php echo $currency ;?>-<?php echo $charge_nepal ;?>|-</span>(<span class="w3-text-pink" style="font-size: 10px; font-weight: bold;color:pink;"><span style="font-size: 10px; font-weight: bold;color:red;"> ..  Note:</span> This Minimum  Charge Will Be Depend on Product Quantity </span>) </p></div>

 <?php


                        }


                          // echo '<div class="w3-center w3-green form-contrl"><a href="logint.php"> <h4 class="form-control w3-blue w3-hover-green" style="font-size:20px;"> </> order now</h4></a></div>';
                        } ?>
<div id="demo" class="w3-center">
<button type="button" onclick="loadDoc()" class="w3-circle w3-hover-blue " style="width: 100%; height: 5vh; background-color: pink;">  Re-Calculate Delevery Charge on your Location:</button>
</div>
                  



   <div id="txtHint"></div>
  <!--   <div id="money"></div> -->
   <!-- muncipality -->

<script>
function showcity(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txt").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txt").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "warda.php?q="+str, true);
  xhttp.send();   
}
</script>
<!-- mony -->
<script>
function showmoney(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("money").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("money").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "d_money.php?q="+str, true);
  xhttp.send();   
}
</script>
<!-- charge -->

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "dd_charge.php", true);
  xhttp.send();
}
</script>


<!-- district -->


<script>
function showdistrict(strrr) {
  var xhttp;  
  if (strrr == "") {
    document.getElementById("txtHinttt").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHinttt").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "dddd.php?q="+strrr, true);
  xhttp.send();
}
</script>

<!-- state -->

<script>
function showstate(strr) {
  var xhttp;  
  if (strr == "") {
    document.getElementById("txtHintt").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHintt").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ddddd.php?q="+strr, true);
  xhttp.send();
}
</script>

<!-- country -->

<script>
function showcountry(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "dd.php?q="+str, true);
  xhttp.send();
}
</script>
 </form>


                                          </div>

                                        
                                        <div class="clearfix">
                                           



                                                     <div class="text-center">

                                                 
                                                
                                               

                                                

                                            </div>
                                        </div>

                                       

<br><br>

                                

                                       <?php 
error_reporting(0);

                                        if ($_SESSION['id']>0)
                         {
                           include("order_product.php");
                        }
                        else
                        {
                          echo '<div class="w3-center w3-green form-contrl"><a href="logint.php"> <h4 class="form-control w3-blue w3-hover-green" style="font-size:20px;"> </> Login for order </h4></a></div>';
                        } ?>




                         <section> <div><table class="container-fluid  responsive table-stripe" border="0" cellspacing="0"  cellpadding="4">
                                  <div><b class="w3-left w3-text-orange"> packege size:</b></div>
      <?php 
 $pid=$_GET['id'];
            $selectquery = "SELECT*FROM  `product_qty` WHERE pid='$pid' ";
           
          
            $query = mysqli_query($conn , $selectquery) or die("error");
          
           

            while ($result= mysqli_fetch_array($query)) {
              
$a=$result['price'];
$b=$result['offer'];
$c=$a-$b;
$rate=(($c/$a)*100);


              
?>

       <tr class="w3-borde" style="border-bottom: 2px solid black; border: 1px solid green; background-color:" >
        <td class=" " > <?php echo $result['pqty']; ?>-<?php echo $result['unit']; ?></td>
        
        <td class="  ">MRP.<del><?php echo $result['price']; ?></del> <b> Rs.<?php echo $result['offer']; ?></b> <span class="w3-text-red"><?php echo round($rate); ?>%off</span></td> 
        
        <td class=""><span class=" ml-3 w3-text-blue form-contrl"> <?php echo $result['avail']; ?></span></td>
        
        
      </tr>
      <?php
              # code...
            }
            ?>
      </tr>

      

      
      
    </table></div></section>



<!-- 
                           <div class="w3-center w3-green form-contrl"><a href="login.php"> <h4 class="form-control w3-blue w3-hover-green" style="font-size:20px;">  </> please login to order</h4></a></div>
                      
     -->
<br><br>

<!-- <div> <a href="logint.php" class="w3-text-white"><button class="form-control w3-blue w3-hover-green ">order now</button></a></div>
                      
                   
 -->


 </div>
                                </div>
                            </div></div>
</div>
    
  </div>


 

 <?php  include("discription.php"); ?> 
       
 <div id="comment"></div>




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

<hr><br>
 <section class="cons1" >

 <div class="row " >
                    <div class="col-md-8 col-sm-6 col-xs-12 pull-letft big-star-rating" >
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
                     


                <div class="row container ml-2" >
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
            $selectquery = "SELECT*FROM  `product_comment` WHERE pid='$pid'  ORDER BY id DESC LIMIT 6";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
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



<div style="font-weight: bold; " class=" form-control w3-center "><a href="product_review_all.php?id=<?php echo $_GET['id']; ?>"style="font-weight: bold;  color:green;"  >View All <?php 

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
       Reviews <i class="Fa fa-angle-right "></i><i class="Fa fa-angle-right "></i></a></div><hr>


                   
                    

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

            $selectquery = "SELECT*FROM  `product_comment` WHERE pid='$pid' AND status='approved' ORDER BY id DESC LIMIT 6";
            $query = mysqli_query($conn , $selectquery) or die("error");
        
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


<div class=" m-2">
  <h3 class="w3-left ml-2"><b class="w3-text-orange">Similar Items</b></h3><br>
  <hr style="border-bottom: 2px dashed green;">
  <br>

  <div class="row ">

 <?php 



            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  productadd WHERE categories='$cat' ";

            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php


echo '<div class="col-md-4 col-sm-6 col-6 col-lg-3  blog-grid-top">
            <div class="b-grid-top">
            <div class="blog_info_left_grid">
            <a href="single.php?id='.$result['id'].'">
            <img src="./adminstatus/blogadmin/'.$result['photo1'].'" class="img-fluid" alt="fantastic cms" style="width:350px;height:180px">
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
  <?php 
$email= $_SESSION['login'];
$id=$_SESSION['id'];
$fname=$_SESSION['name'];

            include("./adminstatus/blogadmin/dbc.php");
            
            $selectquery = "SELECT*FROM user WHERE id =$id";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
          $result= mysqli_fetch_array($query);
           
           $name=$result['fname'];
           $name1=$result['lname'];
           $Email=$result['email'];   
?>

<!-- The Modal -->
<div class="modal" id="review">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
     
       <h4 class="card-header w3-center">Leave Review Of This Product</h4>
       <br>
       <hr>
            <div><p class="w3-center ">Hi! <?php echo  $name; ?></p></div>
        <form action="" method="post" class="container">
     <!--  <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" /> -->
 <div class="form-group">
  <style>#review{color: green; margin: 10px;}</style>
 
<!-- <button id="review" name="select" onchange="showselect(this.value)">Very Bad</button><button id="review">Bad</button><button id="review">Avrage</button><button id="review">Good</button><button id="review">Very Good</button>
 -->
<!-- <input type="text" name="name" class="form-control" placeholder="Enter your fullname" required> -->
</div>



<?php if ($id>0) {

?>
 <div class="form-group">
 
<input type="hidden" name="name" class="form-control" value="<?php echo  $name; ?>-<?php echo  $name1; ?>"  placeholder="<?php echo  $name; ?>-<?php echo  $name1; ?>" required>
</div>
<input type="hidden" name="pid" class="form-control" value="<?php echo  $pid; ?>"  >


<input type="hidden" name="postname" class="form-control" value="<?php echo  $pname;  ?>" >
<div class="form-group">
 <input type="hidden" name="email" class="form-control" value="<?php echo  $Email;  ?>"  placeholder="Enter your Valid email" required>
 </div>
<div class="form-group">
                  <textarea class="form-control" name="text" rows="3" placeholder="write here review about this product" required></textarea>
                </div>


<?php
}else{
?>

<div class="form-group">
 <input type="email" name="email" class="form-control" placeholder="Enter your Valid email" required>
 </div>


                <div class="form-group">
                  <textarea class="form-control" name="text" rows="3" placeholder="write here review about this product" required></textarea>
                </div>

<?php

} ?>


 
       



 
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
<script>
function showreview(review) {
  var xhttp;  
  if (review == "") {
    document.getElementById("review").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("review").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "c_morphology2.php?q="+review, true);
  xhttp.send();
}
</script>
 




  <?php 
require_once("./adminstatus/blogadmin/dbc.php");
session_start();
// error_reporting(0);
//  $ship=  mysqli_real_escape_string($conn,   $_POST['ship']);

// if ($ship==='cp') {

  




if(isset($_POST['update']))
{?>
  <?php

 $nae=$_SESSION['id'];
 

  // $fname=  mysqli_real_escape_string($conn,   $_POST['fname']);
  // $lname=  mysqli_real_escape_string($conn,   $_POST['lname']);

  // $contactno=  mysqli_real_escape_string($conn,   $_POST['contactno']);
  $id=  mysqli_real_escape_string($conn,   $_POST['id']);
  $country=  mysqli_real_escape_string($conn,   $_POST['country']);
  $state=  mysqli_real_escape_string($conn,   $_POST['state']);
  $district=  mysqli_real_escape_string($conn,   $_POST['district']);
  $city=  mysqli_real_escape_string($conn,   $_POST['city']);
  
  $money=  mysqli_real_escape_string($conn,   $_POST['money']);

 $file=  $_POST['file'];


// print_r($file);





  $sql=" UPDATE `user` SET`country`='$country',`state`='$state',`district`='$district',`city`='$city',`warda`='$money' WHERE id='$id'";

  # code...


  

echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";


if($data)
 {

echo "<script>alert('Delevery Charge Calculated successfully.Please Check It');</script>"; 
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

 
?>




        </div>

</body>
</html>

          <?php
require_once("./adminstatus/blogadmin/dbc.php");




if(isset($_POST['review'])){


$pid = $_POST['pid'];
$postname = $_POST['postname'];
$email = $_POST['email'];
$name = $_POST['name'];

$text = $_POST['text'];

// INSERT INTO `product_comment`(`id`, `pid`, `postname`, `name`, `email`, `title`, `text`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])

$sql="INSERT INTO `product_comment`( `pid` , `postname` , `name` , `email`,`status`,  `text`) 
VALUES ('$pid','$postname','$name','$email','0' ,'$text')";


// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {

  
  echo "<script>alert('Your Reviews successfully submited. Review will be display after admin review ');</script>";
  
}

else{
   echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
// header('location:registration.php');
}

 
?>