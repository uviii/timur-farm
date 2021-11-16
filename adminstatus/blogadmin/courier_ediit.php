<?php 
 include("dbc.php");
error_reporting(0);
session_start();
if(isset($_POST['submit'])){

$country = $_POST['country'];

$district = $_POST['district'];
$charge_nepal = $_POST['charge_nepal'];
$currency = $_POST['currency'];
$courier = $_POST['courier'];
$service = $_POST['service'];
$contact = $_POST['contact'];

$id = $_POST['id'];

// UPDATE `warda_munci` SET `id`=[value-1],`country`=[value-2],`state`=[value-3],`district`=[value-4],`munci`=[value-5],`warda`=[value-6],`charge_nepal`=[value-7],`currency`=[value-8],`courier`=[value-9],`service`=[value-10],`contact`=[value-11],`charge_other`=[value-12],`date`=[value-13] WHERE 1
$sql="UPDATE `courier` SET  `country`='$country',`district`='$district',`charge_nepal`='$charge_nepal',`currency`='$currency',`courier`='$courier',`service`='$service',`contact`='$contact' WHERE id=$id   ";

// $sql="INSERT INTO `shiping_charge`( `munci`,`warda`, `district`, `charge_nepal`, `currency`, `courier`, `service`, `contact`,`charge_other`)  VALUES ('$munci','$warda','$district','$charge_nepal','$currency','$courier','$service','$contact','$charge_other')";

// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
  // echo  $munci. $warda.  ' Uploaded successfully !';
  $_SESSION['action1']="$district and $country, $charge_nepal, updated successfully ....";
  header('location:courier_view.php?id= $warda ');
  
}else{echo "<script>alert('sorry! failed to upload in database');</script>"; 
}

 
// header('location:registration.php');
}



?>