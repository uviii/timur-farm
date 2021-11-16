
<?php 
require_once("./adminstatus/blogadmin/dbc.php");
session_start();
if(isset($_POST['cash']))
{


 // UPDATE `order` SET `id`=[value-1],`pname`=[value-2],`photo`=[value-3],`pquantity`=[value-4],`unit`=[value-5],`pid`=[value-6],`price`=[value-7],`subtotal`=[value-8],`tax`=[value-9],`shiping`=[value-10],`total`=[value-11],`cid`=[value-12],`cname`=[value-13],`email`=[value-14],`phone`=[value-15],`country`=[value-16],`state`=[value-17],`district`=[value-18],`city`=[value-19],`local_ad`=[value-20],`localaddress1`=[value-21],`zipcode`=[value-22],`date`=[value-23] WHERE 1
 $ip=$_SESSION['piddd'];
  // echo $ip;
  $ips=$_SESSION['ciddd'];
  // echo $ips;

$br=$_POST['b'];
  // $id=  $_POST['id'];
  
  $cas=  $_POST['cas'];
   $file=$_FILES['file'];
  
print_r($file);



 $filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];

 $destifile = 'uploade/' .$filename;
  // print_r($destifile);
  print_r($destifile);

  move_uploaded_file($filepath, $destifile);
if ($file<0 and $br==='cas') {

   $sql=" UPDATE `order` SET `cas`='$cas',file='$file' WHERE pid='$ip' and cid='$ips' and status='pending' and cas='0' ";

echo $sql;

  # code...
}else{

  if ($fileerror == 0 && $filename>0  and $br!=='cas') {
  
 
  
}


$sql=" UPDATE `order` SET `cas`='$cas',file='$destifile' WHERE pid='$ip' and cid='$ips' and status='pending'and cas='0' ";




}



echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";


if($data)
 {

 header('location:order_checkout.php');
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
 header('location:order_wishlist.php');
}

}

 
?>
