


<?php 
require_once("./adminstatus/blogadmin/dbc.php");
session_start();
if(isset($_POST['submit']))
{


 // UPDATE `order` SET `id`=[value-1],`pname`=[value-2],`photo`=[value-3],`pquantity`=[value-4],`unit`=[value-5],`pid`=[value-6],`price`=[value-7],`subtotal`=[value-8],`tax`=[value-9],`shiping`=[value-10],`total`=[value-11],`cid`=[value-12],`cname`=[value-13],`email`=[value-14],`phone`=[value-15],`country`=[value-16],`state`=[value-17],`district`=[value-18],`city`=[value-19],`local_ad`=[value-20],`localaddress1`=[value-21],`zipcode`=[value-22],`date`=[value-23] WHERE 1



  $id=  $_POST['id'];
  

 
  $sql=" UPDATE `order` SET `status`='cancel',`subtotal`='3',`ddate`='' WHERE id='$id' ";

// echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";


if($data)
 {
	$_SESSION['action1']="your Cancelation successfull. Thanks for being family of kupindetimur.com @kupindetimur Team..!";
  // echo "your Cancelation successfull. Thans for being family of kupindetimur.com @kupindetimur Team"; 
 header('location:order_checkout.php');
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

 
?>
