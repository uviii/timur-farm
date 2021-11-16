<?php include("dbc.php");?>
<?php 
// error_reporting(0);
$id=$_GET['id'];

if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$district=$_POST['district'];
	$charge_nepal=$_POST['charge_nepal'];
	$charge_other=$_POST['charge_other'];
	$currency=$_POST['currency'];
	$courier=$_POST['courier'];
	$service=$_POST['service'];
		$contact=$_POST['contact'];

// UPDATE `shiping_charge` SET `id`=[value-1],`country`=[value-2],`state`=[value-3],`district`=[value-4],`munci`=[value-5],`charge_nepal`=[value-6],`currency`=[value-7],`courier`=[value-8],`service`=[value-9],`contact`=[value-10],`charge_other`=[value-11],`date`=[value-12] WHERE 1
$sql="UPDATE `shiping_charge` SET `state`='$state',`country`='$country',`district`='$district',`charge_nepal`='$charge_nepal',`charge_other`='$charge_other',`currency`='$currency',`courier`='$courier',`service`='$service',`contact`='$contact' WHERE id=$id   ";


// echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";
if($data)
 {

 	$_SESSION['action1']="your requested data value updated successfully..!";
 	header('location:shiping_charge_view.php');
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
// header('location:registration.php');
}
?>