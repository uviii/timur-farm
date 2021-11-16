<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>

<?php 

include("dbc.php");

error_reporting(0);
if(isset($_POST['submit'])){


$name = $_POST['name'];

$sql="INSERT INTO productcat (`name`) VALUES ('$name')";


echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
 $_SESSION['action1']=" your product catagories  $name, added successfully ....";
 header('location:product_categories.php'); 
  
}

else{  $_SESSION['action1']=" sorry something gone wrong please try again....";
 header('location:product_categories.php'); 
}
// header('location:registration.php');
}

 

?>
<?php include("header.php");?>

<?php include("link.php");?>
<br><br>
<div class="w3-left w3-container ml-3"><h5><a href="product_index.php"> <i class="fa fa-home"></i> go to front page</a></h5></div>
<br>
<br><div> <h2 class="w3-center container"><b> product catagories panel</b></h2></div>
<hr>
<br>

<hr>
 

<br><hr><hr>
<div class="container">
	<div><h2 class="w3-center"><b>product</b></h2></div>
	<form class="container"  action="" method="POST"  enctype="multipart/form-data">
		<label><b>name:</b></label><input class="form-control" type="text" name="name">

		<div class="w3-panel"><button class="w3-right"><input type="submit" name="submit" value="save_new"></button>
		<button class="w3-right mr-3"><input type="submit" name="submit" value="cancel"></button></div>
	</form>
</div>
<br>
<br><hr><hr>
  <div class="container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div><?php } ?>