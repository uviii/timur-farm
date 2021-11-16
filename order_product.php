



<?php


include("./adminstatus/blogadmin/dbc.php");
?>




<?php 

session_start();
if(isset($_POST['submit'])){

$pname = $_POST['pname'];
$pquantity = $_POST['pquantity'];
// $unit = $_POST['unit'];
$pid = $_POST['pid'];
$cid = $_POST['cid'];
$price = $_POST['price']; 
$photo = $_POST['photo']; 

$cname = $_POST['cname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$country = $_POST['country'];
$state = $_POST['state'];
$district = $_POST['district'];
$city = $_POST['city'];
$local_ad = $_POST['local_ad'];

$tax = $_POST['tax'];
$shiping = $_POST['shiping'];
$total = $_POST['total'];
$subtotal = $_POST['subtotal'];
$zipcode = $_POST['zipcode'];
$unit = $_POST['unit'];
$tunit = $_POST['tunit'];

$uni=$unit*$pquantity;
$shipi=$uni/100;
// $a=$result['price'];
// $taxi= (($price*13)/100);

$ship = $_POST['shiping'];
$shipings=$shipi+$ship;
$subtotals=$price*$pquantity;


   $totals= ($shipings+$subtotals) ; 
// $subtotal= $shiping+$tax+$price;


// INSERT INTO `order`(`id`, `pname`, `photo`, `pquantity`, `unit`, `tunit`, `pid`, `price`, `subtotal`, `tax`, `shiping`, `total`, `cid`, `cname`, `email`, `phone`, `country`, `state`, `district`, `city`, `local_ad`, `localaddress1`, `zipcode`, `status`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23],[value-24],[value-25])
$sql="INSERT INTO `order`( `pname` ,`photo` , `pquantity`, `unit`, `tunit`,`pid`, `price`  , `subtotal`, `tax`, `shiping`, `total`, `cid`, `cname`, `email`, `phone`, `country`, `state`, `district`, `city`, `local_ad`, `zipcode`, `status`, `cas`)

VALUES ('$pname','$photo','$uni','$unit','$tunit','$pid' ,'$price','0','$tax','$shipings','$totals','$cid' ,'$cname' ,'$email' ,'$phone' ,'$country' ,'$state' ,'$district' ,'$city' ,'$local_ad','$zipcode' ,'Pending' ,'0' )";



 echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
// echo "inserted";
 	$_SESSION['piddd']=$_POST['pid'];


$_SESSION['ciddd']=$_POST['cid'];

  echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";

   header('location:order_proccess.php');
}

else{
  echo "failed";
	 echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

 
?>



<?php


include("./adminstatus/blogadmin/dbc.php");
?>




<?php 


if(isset($_POST['kart'])){

$pname = $_POST['pname'];
$pquantity = $_POST['pquantity'];
// $unit = $_POST['unit'];
$pid = $_POST['pid'];
$cid = $_POST['cid'];
$price = $_POST['price']; 
$photo = $_POST['photo']; 
$cname = $_POST['cname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$country = $_POST['country'];
$state = $_POST['state'];
$district = $_POST['district'];
$city = $_POST['city'];
$local_ad = $_POST['local_ad'];

$tax = $_POST['tax'];
$shiping = $_POST['shiping'];
$total = $_POST['total'];
$subtotal = $_POST['subtotal'];
$zipcode = $_POST['zipcode'];
$unit = $_POST['unit'];
$tunit = $_POST['tunit'];

$uni=$unit*$pquantity;
$shipi=$uni/100;
// $a=$result['price'];
// $taxi= (($price*13)/100);

$ship = $_POST['shiping'];
$shipings=$shipi+$ship;
$subtotals=$price*$pquantity;


   $totals= ($shipings+$subtotals) ; 
// $subtotal= $shiping+$tax+$price;


// INSERT INTO `order`(`id`, `pname`, `photo`, `pquantity`, `unit`, `tunit`, `pid`, `price`, `subtotal`, `tax`, `shiping`, `total`, `cid`, `cname`, `email`, `phone`, `country`, `state`, `district`, `city`, `local_ad`, `localaddress1`, `zipcode`, `status`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23],[value-24],[value-25])
$sql="INSERT INTO `order`( `pname` ,`photo` , `pquantity`, `unit`, `tunit`,`pid`, `price`  , `subtotal`, `tax`, `shiping`, `total`, `cid`, `cname`, `email`, `phone`, `country`, `state`, `district`, `city`, `local_ad`, `zipcode`)

VALUES ('$pname','$photo','$uni','$unit','$tunit','$pid' ,'$price','1','$tax','$shipings','$totals','$cid' ,'$cname' ,'$email' ,'$phone' ,'$country' ,'$state' ,'$district' ,'$city' ,'$local_ad','$zipcode' )";



 echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
// echo "inserted";
  $_SESSION['pname']=$_POST['pname'];

$_SESSION['pid']=$data['pid'];

  echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";

   header('location:order_kart.php');
}

else{
  // echo "failed";
   echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

 
?>


<?php


include("./adminstatus/blogadmin/dbc.php");
?>




<?php 


if(isset($_POST['wish'])){

$pname = $_POST['pname'];
$pquantity = $_POST['pquantity'];
// $unit = $_POST['unit'];
$pid = $_POST['pid'];
$cid = $_POST['cid'];
$price = $_POST['price']; 
$photo = $_POST['photo']; 
$cname = $_POST['cname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$country = $_POST['country'];
$state = $_POST['state'];
$district = $_POST['district'];
$city = $_POST['city'];
$local_ad = $_POST['local_ad'];

$tax = $_POST['tax'];
$shiping = $_POST['shiping'];
$total = $_POST['total'];
$subtotal = $_POST['subtotal'];
$zipcode = $_POST['zipcode'];
$unit = $_POST['unit'];
$tunit = $_POST['tunit'];

$uni=$unit*$pquantity;
$shipi=$uni/100;
// $a=$result['price'];
// $taxi= (($price*13)/100);

$ship = $_POST['shiping'];
$shipings=$shipi+$ship;
$subtotals=$price*$pquantity;


   $totals= ($shipings+$subtotals) ; 
// $subtotal= $shiping+$tax+$price;


// INSERT INTO `order`(`id`, `pname`, `photo`, `pquantity`, `unit`, `tunit`, `pid`, `price`, `subtotal`, `tax`, `shiping`, `total`, `cid`, `cname`, `email`, `phone`, `country`, `state`, `district`, `city`, `local_ad`, `localaddress1`, `zipcode`, `status`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23],[value-24],[value-25])
$sql="INSERT INTO `order`( `pname` ,`photo` , `pquantity`, `unit`, `tunit`,`pid`, `price`  , `subtotal`, `tax`, `shiping`, `total`, `cid`, `cname`, `email`, `phone`, `country`, `state`, `district`, `city`, `local_ad`, `zipcode`)

VALUES ('$pname','$photo','$uni','$unit','$tunit','$pid' ,'$price','2','$tax','$shipings','$totals','$cid' ,'$cname' ,'$email' ,'$phone' ,'$country' ,'$state' ,'$district' ,'$city' ,'$local_ad','$zipcode' )";



 echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
// echo "inserted";
  $_SESSION['pname']=$_POST['pname'];

$_SESSION['pid']=$data['pid'];

  echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";

   header('location:order_wishlist.php');
}

else{
  // echo "failed";
   echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

 
?>



<div class="">
	<div class="ro w3- pb-4" style="background-color: pink;">
			


			<div class=" bg-primar cin">
				<form class="pl-"action="order_product.php" method="POST"  enctype="multipart/form-data" >
  <div class="  row pt-4">
<?php 

            include("./adminstatus/blogadmin/dbc.php");
            $id=$_GET['id'];
            $selectquery = "SELECT*FROM productadd WHERE id =$id";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            $result= mysqli_fetch_array($query);
              $tar=$result['tar'];

?>
 
    <div class="col-lg-12  w3-center">

<label style="font-weight: bold; color: green;">Quantity:</label>
<input style="width: 50%; height: 5vh;" type="number" name="pquantity" id="quantity" class=" w3-round-large onlynumber form-cont" value="1" min="1">
  
   
<!-- 
  	<div class="col-lg-6">
       <div><b>unit:</b>
    <select class="form-control " name="unit"  class="w3-red">
      <option value="<?php echo  $tar; ?>" >--Packet--</option>
      <option  value="Kg"> Kg </option>
      <option value="Quintal">Quintal</option>
      <option value="Gm">Gm</option>
      <option value="number" >number</option>
      

      
      

    </select></div> -->




</div>  
  

<div class=" w3-center col-lg-12 ml- mr-"><br>
    <button type="submit" name="kart" class="w3-round-large"> <i class="fa fa-shopping-cart" style="color: orange;"></i> Add to Cart</button> <button style="font-weight: bold; color: orange;" type="submit" name="submit" class="w3-round-large"><i class="fa fa-hand " style="color: red; font-size: " aria-hidden="true"></i> Order Now</button> <button type="submit" name="wish" class="w3-round-large"><i class="fa fa-heart " style="color: red;" aria-hidden="true"></i> Add to wish list</button>
   <!--  <br><input style="width: 80%;" type="submit" name="submit" value="Order Now" class=" w3-round-large form-control w3-medium w3-green w3-hover-blue " > -->
</div>


  <input type="hidden" name="tax" value="<?php echo  $tar; ?>">
<div class="w3-hide">
  

<?php 

            include("./adminstatus/blogadmin/dbc.php");
            $id=$_GET['id'];
            $selectquery = "SELECT*FROM productadd WHERE id =$id";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>

<?php
$weight=$result['weight'];
$tar=$result['tar'];
$per=1;
$gm=$weight;
$kg=$weight*1000;
$quental=$weight*100000;
?>
<!-- <option value="<?php echo  $tar; ?>" >--Packet--</option>
      <option  value="Kg"> Kg </option>
      <option value="Quintal">Quintal</option>
      <option value="Gm">Gm</option>
      <option value="number" >number</option>
      
 -->

<?php
if ($tar==='Gm') {
  ?>
<input type="text" name="unit" value="<?php echo $gm ?>">
  
<?php
}if ($tar==='Kg') {
 ?>

<input type="text" name="unit" value="<?php echo $kg ?>">
  
<?php
}if ($tar==='Quintal') {
 ?>


 
<input type="text" name="unit" value="<?php echo $quental ?>">
  
<?php
}
 if ($tar==='per'){
  echo '<input type="text" name="unit" value="'. $per.'">';
 }

?>


<!-- <input type="text" name="unit" value="<?php echo $result['weight'] ?>"> -->
                          
<!-- <input type="submit" name="submit" value="order" class="ml-4 w3-round-large w3-medium"> -->
 <input type="hidden" name="hidden" value=" <?php echo($result['id']) ?>">
      <div class="col-lg-6  w3-hide  ">

       <div class="container form-group w3-hide w3-center "><input type="text" name="pid" class="form-control  " value=" <?php echo htmlentities($result['id']) ?>" class=" ml-4 mr-1" ></div>



     </div>

              <br><br>    

               <div class="col-lg-6  w3-hide "> <div class="container form-group w3-hide w3-center"><input type="text" name="pname" class="form-control  " value=" <?php echo htmlentities($result['name']) ?>" class=" ml-4 mr-1" ></div></div>

              <br><br> 


      

      <div class="col-lg-6  w3-hide "> <div class="container form-group w3-hide w3-center"><input type="text" name="price" class="form-control  " value=" <?php echo htmlentities($result['price1']) ?>" class=" ml-4 mr-1" ></div></div>
     <!--   -->
      <!-- <div class="col-lg-6  w3-hide "> <div class="container form-group w3-hide w3-center"><input type="text" name="total" class="form-control  " value=" " class=" ml-4 mr-1" ></div></div>
      <div class="col-lg-6  w3-hide "> <div class="container form-group w3-hide w3-center"><input type="text" name="subtotal" class="form-control  " value=" " class=" ml-4 mr-1" ></div></div> -->
      <br>
      

              <br><br>  



 </div> 

  <?php
              # code...
            }
            ?>

<!-- <div class="col-lg-6  w3-hidecontainer"><p class="bg-danger"><?php echo $_SESSION['name'];?></p>
<p class="bg-primary container"><?php echo $_SESSION['id'];?></p> -->

</div>

<?php 
$cc=$_SESSION['id'];

             include("./adminstatus/blogadmin/dbc.php");
            // $id=$_GET['$cc'];
            $selectquery = "SELECT*FROM user WHERE id =$cc";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {

               $country=$result['country'];
             $district=$result['district'];
              
              
?>
            

              <div class="col-sm-12 w3-hide">

      <div class="col-lg-6  w3-hide "> 

        <div class="container form-group w3-hide w3-center"><input type="text" name="cid" class="form-control  " value=" <?php echo htmlentities($result['id']) ?>" class=" ml-4 mr-1" ></div>

         <div class="container form-group w3-hide w3-center"><input type="text" name="cname" class="form-control  " value=" <?php echo htmlentities($result['fname']) ?>- <?php echo($result['lname']) ?>" class=" ml-4 mr-1" ></div>
      </div>

     

              <br><br> 


      <div class="col-lg-6  w3-hide "> <div class="container form-group w3-hide w3-center"><input type="text" name="country" class="form-control  " value=" <?php echo($result['country']) ?>" class=" ml-4 mr-1" ></div></div>

              <br><br>  <div class="col-lg-6  w3-hide "> <div class="container form-group w3-hide w3-center"><input type="text" name="zipcode" class="form-control  " value=" <?php echo($result['zipcode']) ?>" class=" ml-4 mr-1" ></div></div>

              <br><br>  

      <div class="col-lg-6  w3-hide "> <div class="container form-group w3-hide w3-center"><input type="text" name="state" class="form-control  " value=" <?php echo($result['state']) ?>" class=" ml-4 mr-1" ></div></div>

              <br><br>   

      <div class="col-lg-6  w3-hide "> <div class="container form-group w3-hide w3-center"><input type="text" name="district" class="form-control  " value=" <?php echo htmlentities($result['district']) ?>" class=" ml-4 mr-1" ></div></div>

              <br><br>  

      <div class="col-lg-6  w3-hide "> <div class="container form-group w3-hide w3-center"><input type="text" name="city" class="form-control  " value="  <?php echo($result['city']) ?>" class=" ml-4 mr-1" ></div></div>

              <br><br>  

      <div class="col-lg-6  w3-hide "> <div class="container form-group w3-hide w3-center"><input type="text" name="local_ad" class="form-control  " value="  <?php echo($result['localaddress']) ?>" class=" ml-4 mr-1" ></div></div>

              <br><br>  

  <div class="col-lg-6  w3-hide "> <div class="container form-group w3-hide w3-center"><input type="email" name="email" class="form-control  " value=" <?php echo($result['email']) ?>" class=" ml-4 mr-1" ></div></div>

              <br><br>  

  <div class="col-lg-6  w3-hide "> <div class="container form-group w3-hide w3-center"><input type="text" name="phone" class="form-control  " value="  <?php echo($result['contactno']) ?>" class=" ml-4 mr-1" ></div></div>

              <br><br>  

      </div>
      <?php $ed=$_SESSION['id']; 
      // echo $ed;;
         $selectquery = "SELECT*FROM  user WHERE id='$ed' ";
         $query = mysqli_query($conn , $selectquery) or die("error");
            $resul= mysqli_fetch_array($query);
            $nam=$resul['city'];
            $namew=$resul['warda'];
            $name=$resul['country'];
            // echo $name;
             // echo $namew;
            // echo $nam;



            ?>

           <?php 
error_reporting(0);

                                        if ($name==='Nepal')
                         {
                           // include("order_product.php");
                          $selectqueryyy = "SELECT*FROM warda_munci where munci='$nam' And warda=$namew ";
                          $queryyy = mysqli_query($conn , $selectqueryyy) or die("error");
                          $resul= mysqli_fetch_array($queryyy);
                         
                          $name=$resul['warda'];
                         
                           $charge_nepal=$resul['charge_nepal'];
                          $munci=$resul['munci'];
                           // echo $munci;
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

echo '
 <div class="col-lg-6  w3-hide "> <div class="container form-group w3-hide w3-center"><input type="text" name="shiping" class="form-control  " value="'.$charge_nepal.' " class=" ml-4 mr-1" ></div></div>';


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
                           $n=$resul['charge_nepal'];
                          $muncipality=$resul['munci'];
                          $district=$resul['district'];
                          $country=$resul['country'];
                        
                          // echo $name .'<br>';
                          // echo $n .'<br>';
                          // echo $muncipality .'<br>';
                          // echo $district .'<br>';
                          // echo $country .'<br>';
                          // echo ;

echo '

 <div class="col-lg-6  w3-hide "> <div class="container form-group w3-hide w3-center"><input type="text" name="shiping" class="form-control  " value="  '.$n.' " class=" ml-4 mr-1" ></div></div>';


                        }


                          // echo '<div class="w3-center w3-green form-contrl"><a href="logint.php"> <h4 class="form-control w3-blue w3-hover-green" style="font-size:20px;"> </> order now</h4></a></div>';
                        } ?>
<!-- 
<?php 

           
   
            $selectquery = "SELECT*FROM shiping_charge WHERE district ='$district' 
            -- OR  district ='$district'
             ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>
UPDATE `shiping_charge` SET `id`=[value-1],`country`=[value-2],`district`=[value-3],`charge_nepal`=[value-4],`currency`=[value-5],`charge_other`=[value-6],`date`=[value-7] WHERE 1



 
  <?php
              # code...
            }
            ?> -->


       <input type="hidden" class="form-contrl" name="tunit" value="<?php echo $namew ?>">

      
                  
       
         <?php
              # code...
            }
            ?>
            <div class="col-lg-6  w3-hide "> <div class="container form-group w3-hide w3-center"><input type="text" name="photo" class="form-control  " value="<?php echo $currency ?>" class=" ml-4 mr-1" ></div></div>

<!-- 
<div class="pt-4"><input type="submit" name="submit" value="order" class="ml-4 w3-round-large w3-medium"></div>
 -->
 
  
</form >
    </div>
  </div>
</div>

</div>

