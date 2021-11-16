
<?php 
require_once("./adminstatus/blogadmin/dbc.php");
session_start();
// error_reporting(0);
 $ship=  mysqli_real_escape_string($conn,   $_POST['ship']);

if ($ship==='cp') {

  




if(isset($_POST['submit']))
{?>
  <?php

 $nae=$_SESSION['id'];
 

  // $fname=  mysqli_real_escape_string($conn,   $_POST['fname']);
  // $lname=  mysqli_real_escape_string($conn,   $_POST['lname']);

  // $contactno=  mysqli_real_escape_string($conn,   $_POST['contactno']);
  $id=  mysqli_real_escape_string($conn,   $_POST['id']);
  $country=  mysqli_real_escape_string($conn,   $_POST['country']);
  $state=  mysqli_real_escape_string($conn,   $_POST['state']);
  $district=  mysqli_real_escape_string($conn,   $_POST['district']);
  $city=  mysqli_real_escape_string($conn,   $_POST['city']);
  
  $money=  mysqli_real_escape_string($conn,   $_POST['money']);

 $file=  $_POST['file'];


// print_r($file);



if ($file=='1') {

  $sql=" UPDATE `user` SET`country`='$country',`state`='$state',`district`='$district',`city`='$city',`warda`='$money' WHERE id='$id'";

  # code...
}

  

// echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";


if($data)
 {
echo "<script>alert('sucess');</script>"; 

  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

 
?>
<?php
}
else{




// session_start();
error_reporting(0);
require_once("./adminstatus/blogadmin/dbc.php");

if(isset($_POST['submit']))
{

 $cc=$_SESSION['id'];
 

  $fname=  mysqli_real_escape_string($conn,   $_POST['fname']);
   $warda=  mysqli_real_escape_string($conn,   $_POST['warda']);
  $lname=  mysqli_real_escape_string($conn,   $_POST['lname']);

  $contactno=  mysqli_real_escape_string($conn,   $_POST['contactno']);
  $country=  mysqli_real_escape_string($conn,   $_POST['country']);
  $state=  mysqli_real_escape_string($conn,   $_POST['state']);
  $district=  mysqli_real_escape_string($conn,   $_POST['district']);
  $city=  mysqli_real_escape_string($conn,   $_POST['city']);
  $local_ad=  mysqli_real_escape_string($conn,   $_POST['local_ad']);
  $file=  $_FILES['file'];






// print_r($file);


$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];

if ($filename=='') {

  $sql=" UPDATE `user` SET `warda`='$warda', `fname`='$fname',`lname`='$lname', `contactno`='$contactno',`country`='$country',`state`='$state',`district`='$district',`city`='$city',`localaddress`='$local_ad' WHERE id='$cc'";


  # code...
}else{

  if ($fileerror == 0 && $file>0) {
  $destifile = 'uploade/' .$filename;
  // print_r($destifile);

  move_uploaded_file($filepath, $destifile);
  
}



$sql=" UPDATE `user` SET `warda`='$warda',`fname`='$fname',`lname`='$lname', `contactno`='$contactno',`country`='$country',`state`='$state',`district`='$district',`city`='$city',`localaddress`='$local_ad',`file`='$destifile' WHERE id='$cc'";




}
 


echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";


if($data)
 {

$_SESSION['action1']="congratulation your profile updated successfully.......!";
  header('location:index.php');
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

 
?>

}


 <?php
}
?>
