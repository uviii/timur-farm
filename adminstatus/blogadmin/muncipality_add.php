<?php 
 include("dbc.php");
// error_reporting(0);
if(isset($_POST['submit'])){
$munci = $_POST['munci'];
$district = $_POST['district'];
$charge_nepal = $_POST['charge_nepal'];
$currency = $_POST['currency'];
$courier = $_POST['courier'];
$service = $_POST['service'];
$contact = $_POST['contact'];
$warda = $_POST['warda'];


$charge_other = $_POST['charge_other'];
// INSERT INTO `shiping_charge`(`id`, `munci`, `district`, `charge_nepal`, `currency`, `courier`, `service`, `contact`, `charge_other`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])

$sql="UPDATE `shiping_charge` SET `munci`='$munci',`warda`='$warda',`district`='$district',`charge_nepal`='$charge_nepal',`charge_other`='$charge_other',`currency`='$currency',`courier`='$courier',`service`='$service',`contact`='$contact' WHERE id=$id   ";

// $sql="INSERT INTO `shiping_charge`( `munci`,`warda`, `district`, `charge_nepal`, `currency`, `courier`, `service`, `contact`,`charge_other`)  VALUES ('$munci','$warda','$district','$charge_nepal','$currency','$courier','$service','$contact','$charge_other')";

// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
  echo  $munci.   ' Uploaded successfully !';
  // $_SESSION['action1']=" A New shiping charge for $country added successfully ....";
  // header('location:shiping_district_add.php');
  
}else{echo "<script>alert('sorry! failed to upload in database');</script>"; 
}

 
// header('location:registration.php');
}



?>