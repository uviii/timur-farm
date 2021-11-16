


<?php 
require_once("./adminstatus/blogadmin/dbc.php");
session_start();
if(isset($_GET['id']))
{

$ids=$_GET['id'];
 echo "$ids";
$cc=$_SESSION['id'];
 // UPDATE `order` SET `id`=[value-1],`pname`=[value-2],`photo`=[value-3],`pquantity`=[value-4],`unit`=[value-5],`pid`=[value-6],`price`=[value-7],`subtotal`=[value-8],`tax`=[value-9],`shiping`=[value-10],`total`=[value-11],`cid`=[value-12],`cname`=[value-13],`email`=[value-14],`phone`=[value-15],`country`=[value-16],`state`=[value-17],`district`=[value-18],`city`=[value-19],`local_ad`=[value-20],`localaddress1`=[value-21],`zipcode`=[value-22],`date`=[value-23] WHERE 1



            $selectquery = "SELECT * FROM `order` ORDER BY id DESC";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
           
            
              

  $pname=  $result['pname'];
    $price=  $result['price'];
  $shiping=  $result['shiping'];

  $total=  $result['total'];
  $subtotal=  $result['subtotal'];
  $tax=  $result['tax'];
  $pquantity=  $result['pquantity'];
  $unit=  $result['unit'];
 
  $sql=" UPDATE `order` SET `pname`='$pname', `price`='$price',`shiping`='$shiping',`total`='$total',`subtotal`='$subtotal',`tax`='$tax',`pquantity`='$pquantity',`unit`='$unit' WHERE id='$ids' && cid='$cc'";

echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";


if($data)
 {

  echo "<script>alert('your database value updated successfully.');</script>"; 
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

 
?>
