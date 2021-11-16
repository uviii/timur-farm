<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>




<?php include("header.php");?>

<?php include("link.php");?>
<br>

<hr>
<div class="w3-center"> <h1><b>user control panel</b></h1></div>
<hr>







<?php 

            include("dbc.php");

             $id=$_GET['id'];
            $selectquery = "SELECT*FROM USER WHERE id =$id";
           
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>

<!-- <?php echo htmlentities($_SERVER['PHP_SELF']); ?> -->
	
		
	<form name="" method="GET" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> " enctype="multipart/form-data" class="container ">
		<input type="hidden" name="id" value="<?php echo($id); ?>">
		<label class="w3-left ml-0 w3-panel"> <b>first name:</b></label><input class="form-control p-4"   type="text"  required    value="<?php echo $result['fname']; ?>"  name="fname">						
		<label class="w3-left ml-0 w3-panel"> <b>last name:</b></label><input class="form-control p-4"   type="text"  required    value="<?php echo $result['lname']; ?>"  name="lname">
	
	<label class="w3-left ml-0 w3-panel"> <b>contry:</b></label><input class="form-control p-4"   type="text"  required    value="<?php echo $result['country']; ?>"  name="country">
	<label class="w3-left ml-0 w3-panel"> <b>state:</b></label><input class="form-control p-4"   type="text"  required    value="<?php echo $result['state']; ?>"  name="state">
	<label class="w3-left ml-0 w3-panel"> <b>district:</b></label><input class="form-control p-4"   type="text"  required    value="<?php echo $result['district']; ?>"  name="district">
	<label class="w3-left ml-0 w3-panel"> <b>city:</b></label><input class="form-control p-4"   type="text"  required    value="<?php echo $result['city']; ?>"  name="city">
	<label class="w3-left ml-0 w3-panel"> <b>local address:</b></label><input class="form-control p-4"   type="text"  required    value="<?php echo $result['localaddress']; ?>"  name="local_ad">
		<label class="w3-left ml-0 w3-panel"> <b>email:</b></label><input class="form-control p-4"   type="text"  required    value="<?php echo $result['email']; ?>"  name="email">
	<label class="w3-left ml-0 w3-panel"> <b>contactno:</b></label><input class="form-control p-4"  type="text"  required    value="<?php echo $result['contactno']; ?>"  name="contactno">
	
	
										

	
	
	<div class="sign-up">
									<input type="reset" value="Reset">
									<input type="submit" name="submit"  value="update" >
									<div class="clear"> </div>
								</div>

	
	</form>



	 <?php
              # code...
            }
            ?>



  <div class="container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>












<?php include("dbc.php");?>



<?php 
$id=$_GET['id'];

if(isset($_GET['submit']))
{
	$id=$_GET['id'];
	$fname=$_GET['fname'];
	$lname=$_GET['lname'];
	$email=$_GET['email'];
	$contactno=$_GET['contactno'];
	$country=$_GET['country'];
	$state=$_GET['state'];
	$district=$_GET['district'];
	$city=$_GET['city'];
	$local_ad=$_GET['local_ad'];

// UPDATE `user` SET `id`=[value-1],`fname`=[value-2],`lname`=[value-3],`email`=[value-4],`contactno`=[value-5],`country`=[value-6],`state`=[value-7],`district`=[value-8],`city`=[value-9],`localaddress`=[value-10],`password`=[value-11],`cpassword`=[value-12],`tokan`=[value-13],`status`=[value-14],`posting_date`=[value-15] WHERE 1

$sql="UPDATE `user` SET `fname`='$fname',`lname`='$lname',`email`='$email',`contactno`='$contactno',`country`='$country',`state`='$state',`district`='$district',`city`='$city',`localaddress`='$local_ad' WHERE id=$id   ";


echo "$sql";
$data = mysqli_query($conn ,$sql);
echo "$data";
if($data)
 {
  echo "<script>alert('your database value updated successfully.');</script>"; 
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
// header('location:registration.php');
}

 else {   
}
?>

<?php } ?>