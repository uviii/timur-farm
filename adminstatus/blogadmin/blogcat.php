



<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
  
?>

<?php 
 include("dbc.php");
error_reporting(0);
if(isset($_POST['submit'])){


$name = $_POST['name'];
// INSERT INTO `blog_categories`(`id`, `name`, `date`) VALUES ([value-1],[value-2],[value-3])
$sql=" INSERT INTO `blog_categories`(`name`) VALUES ('$name')";


// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
 	
 $_SESSION['action1']="weldone! A New categories  $name created successfully ....";
 header('location:categories.php');
}

else{
 $_SESSION['action1']="something gone wrong! please try again ....";
 header('location:categories.php');
}
// header('location:registration.php');
}

?>


<?php include("header.php");?>

<?php include("link.php");?>
<br><div> <h2 class="w3-center"><b> blog catagories</b></h2></div>
<hr>
<br>

<hr>
 

<div class="container">
	<div><h2 class="w3-center"><b>blog</b></h2></div>
	<form class="container" action="" method="POST"  enctype="multipart/form-data">
		<label><b>name:</b></label><input class="form-control" type="text" name="name">

		<div class="w3-panel"><button class="w3-right"><input type="submit" name="submit" value="save_new"></button>
		<button class="w3-right mr-3"><input type="submit" name="submit" value="cancel"></button></div>
	</form>
</div>
<br>
<br><hr><hr>
<hr>
  <div class="container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>

<?php } ?>