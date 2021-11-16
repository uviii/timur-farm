





<?php include("dbc.php");
session_start();?>
<?php 

$x=$_POST['x'];
 $newpassword=  mysqli_real_escape_string($conn,   $_POST['newpassword']);
    $cpassword=  mysqli_real_escape_string($conn,   $_POST['cpassword']);

   $newpass= password_hash($newpassword, PASSWORD_BCRYPT);
if ($newpassword===$cpassword) {

  
$sql="UPDATE `admin` SET `password`='$newpass' WHERE token='$x'  ";
  # code...

echo "$sql";
$data = mysqli_query($conn ,$sql);
echo "$data";
if($data)
 {
 $_SESSION['action1']=" password changed  successfully ....";
  header('location:admin_profile.php');

}

else{  echo "<script>alert('somethig gone wrong !please try again.');</script>"; 
}
}else{echo "<script>alert('comform password not matching !please try again.');</script>"; }



