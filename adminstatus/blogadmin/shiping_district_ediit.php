<?php 
 include("dbc.php");
error_reporting(0);
session_start();
if(isset($_POST['submit'])){
$munci = $_POST['munci'];
$country = $_POST['country'];
$state = $_POST['state'];
$district = $_POST['district'];
$charge_nepal = $_POST['charge_nepal'];
$currency = $_POST['currency'];
$courier = $_POST['courier'];
$service = $_POST['service'];
$contact = $_POST['contact'];
$warda = $_POST['warda'];
$id = $_POST['id'];
$charge_other = $_POST['charge_other'];

// UPDATE `warda_munci` SET `id`=[value-1],`country`=[value-2],`state`=[value-3],`district`=[value-4],`munci`=[value-5],`warda`=[value-6],`charge_nepal`=[value-7],`currency`=[value-8],`courier`=[value-9],`service`=[value-10],`contact`=[value-11],`charge_other`=[value-12],`date`=[value-13] WHERE 1
$sql="UPDATE `muncipality` SET `state`='$state', `country`='$country',`munci`='$munci',`warda`='$warda',`district`='$district',`charge_nepal`='$charge_nepal',`charge_other`='$charge_other',`currency`='$currency',`courier`='$courier',`service`='$service',`contact`='$contact' WHERE id=$id   ";

// $sql="INSERT INTO `shiping_charge`( `munci`,`warda`, `district`, `charge_nepal`, `currency`, `courier`, `service`, `contact`,`charge_other`)  VALUES ('$munci','$warda','$district','$charge_nepal','$currency','$courier','$service','$contact','$charge_other')";

// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
  echo  $munci. $warda.  ' Uploaded successfully !';
  // $_SESSION['action1']="$munci and warda no $warda updated successfully ....";
  // header('location:shiping_warda_view.php?id= $warda ');
  
}else{echo "<script>alert('sorry! failed to upload in database');</script>"; 
}

 
// header('location:registration.php');
}



?>