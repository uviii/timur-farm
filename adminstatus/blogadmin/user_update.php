<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>


<?php include("dbc.php");?>



<?php 


if(isset($_POST['signup']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contactno=$_POST['contactno'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$district=$_POST['district'];
	$city=$_POST['city'];
	$local_ad=$_POST['local_ad'];

	






if(isset($_POST['submit'])){



$content = $_POST['content'];
$file = $_FILES['photo'];



print_r($file);


$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];

if ($fileerror == 0) {
	$destifile = 'uploade/' .$filename;
	// print_r($destifile);

	move_uploaded_file($filepath, $destifile);
	
	// <!-- INSERT INTO `gallery`(`id`, `content`, `photo`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4]) -->
// INSERT INTO `gallery`(`id`, `content`, `photo`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4])
}
$sql=" INSERT INTO `gallery`(`content`, `photo`) VALUES ('$content','$destifile')";


echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
  echo "data inserted into database";
  
}

else{echo "failed to insert to database";
}
// header('location:registration.php');
}

 else { echo "not clicked register bottm";
}
?>





<?php include("header.php");?>

<?php include("link.php");?>
<br>
<div><h2 class="w3-center"><b>blog control-panel</b></h2></div>
<hr><hr>







<?php 

            include("dbc.php");

             $id=$_GET['id'];
            $selectquery = "SELECT*FROM USER WHERE id =$id";
           
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
	
		
	<form name="" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" enctype="multipart/form-data" class="container ">
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
									<input type="submit" name="update"  value="Sign Up" >
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
<?php } ?>











