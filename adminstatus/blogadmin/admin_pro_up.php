

<?php include("dbc.php");?>

<?php 
$idss=$_POST['id'];
session_start();
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$fname=$_POST['username'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$contactno=$_POST['contactno'];
	$position=$_POST['position'];
	$status=$_POST['status'];
 $file=  $_FILES['file'];
// print_r($file);
	
$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];
// UPDATE `admin` SET `id`=[value-1],`username`=[value-2],`password`=[value-3],`email`=[value-4],`address`=[value-5],`position`=[value-6],`contactno`=[value-7],`file`=[value-8],`token`=[value-9],`status`=[value-10],`date`=[value-11] WHERE 1

if ($filename=='') {

$sql="UPDATE `admin` SET `username`='$fname',`email`='$email',`address`='$address',`contactno`='$contactno',`position`='$position',`status`='$status' WHERE id=$idss";


  # code...
}else{

  if ($fileerror == 0 && $file>0) {
  $destifile = 'uploade/' .$filename;
  // print_r($destifile);

  move_uploaded_file($filepath, $destifile);
  
}


$sql="UPDATE `admin` SET `username`='$fname',`email`='$email',`address`='$address',`contactno`='$contactno',`position`='$position',`status`='$status',`file`='$destifile' WHERE id=$idss";

}

// echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";
if($data)
 {
 	  $_SESSION['action1']="$username,$email your profile updated successfully ....";
 header('location:admin_profile.php');

}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
// header('location:registration.php');
}

 else {   
}
?>

