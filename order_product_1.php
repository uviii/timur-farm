
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
$sql="INSERT INTO `order`( `pname` ,`photo` , `pquantity`, `unit`, `tunit`,`pid`, `price`  , `subtotal`, `tax`, `shiping`, `total`, `cid`, `cname`, `email`, `phone`, `country`, `state`, `district`, `city`, `local_ad`, `zipcode`, `status`, `cas`)VALUES ('$pname','$photo','$uni','$unit','$tunit','$pid' ,'$price','0','$tax','$shipings','$totals','$cid' ,'$cname' ,'$email' ,'$phone' ,'$country' ,'$state' ,'$district' ,'$city' ,'$local_ad','$zipcode' ,'Pending' ,'0' )";



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
$sql="INSERT INTO `order`( `pname` ,`photo` , `pquantity`, `unit`, `tunit`,`pid`, `price`  , `subtotal`, `tax`, `shiping`, `total`, `cid`, `cname`, `email`, `phone`, `country`, `state`, `district`, `city`, `local_ad`, `zipcode`)VALUES ('$pname','$photo','$uni','$unit','$tunit','$pid' ,'$price','1','$tax','$shipings','$totals','$cid' ,'$cname' ,'$email' ,'$phone' ,'$country' ,'$state' ,'$district' ,'$city' ,'$local_ad','$zipcode' )";



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
$sql="INSERT INTO `order`( `pname` ,`photo` , `pquantity`, `unit`, `tunit`,`pid`, `price`  , `subtotal`, `tax`, `shiping`, `total`, `cid`, `cname`, `email`, `phone`, `country`, `state`, `district`, `city`, `local_ad`, `zipcode`)VALUES ('$pname','$photo','$uni','$unit','$tunit','$pid' ,'$price','2','$tax','$shipings','$totals','$cid' ,'$cname' ,'$email' ,'$phone' ,'$country' ,'$state' ,'$district' ,'$city' ,'$local_ad','$zipcode' )";



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
