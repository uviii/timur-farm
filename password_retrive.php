



<?php 
include("./adminstatus/blogadmin/dbc.php");
error_reporting(0);
	
if(isset($_POST['submit']))
{
 $x=$_POST['x'];
$fname=$_POST['fname'];
   $newpassword=  mysqli_real_escape_string($conn,   $_POST['newpassword']);
    $password=  mysqli_real_escape_string($conn,   $_POST['password']);

   $newpass= password_hash($newpassword, PASSWORD_BCRYPT);
    $pass= password_hash($password, PASSWORD_BCRYPT);

// UPDATE `user` SET `id`=[value-1],`fname`=[value-2],`lname`=[value-3],`email`=[value-4],`contactno`=[value-5],`country`=[value-6],`state`=[value-7],`district`=[value-8],`city`=[value-9],`localaddress`=[value-10],`localaddress1`=[value-11],`zipcode`=[value-12],`password`=[value-13],`cpassword`=[value-14],`file`=[value-15],`tokan`=[value-16],`status`=[value-17],`posting_date`=[value-18] WHERE 1
    if ($newpassword===$password) {
    	# code...
    	$sql=" UPDATE `user` SET `password`='$newpass',`password`='$pass'WHERE tokan='$x'";

echo "$sql";
$data = mysqli_query($conn ,$sql);
echo "$data";
if($data)
 {
 echo "<script>alert('your newpassword updated successfully.');</script>"; 
  header('location:login.php');

}

else{  echo "<script>alert('somethig gone wrong !please try again.');</script>"; 
}


    }else{ echo "<script>alert('your newpassword and comform password not matching,please try again.');</script>"; 
    }
     
// $sql=" UPDATE `user` SET `fname`='$fname', `password`='$newpass', `cpassword`='$pass' , WHERE tokan='$x'   ";

// header('location:activate.php');
}

 else {   
}
?>
