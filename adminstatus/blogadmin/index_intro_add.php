<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>




<?php include("header.php");?>

<?php include("link.php");?>
<br><div> <h2 class="w3-center"><b> blog sub_catagories</b></h2></div>

<br>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>

 
<!-- INSERT INTO `cat_b_sub`(`id`, `categories`, `subcategories`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4]) -->
<div class="row ">
	<div class="col-sm-4"> </div>
	<hr>
	<div class="col-sm-4"><div class="container">
	<hr>
	<form class="container" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"  enctype="multipart/form-data">

			<label><b>heading:</b></label><input class="form-control" placeholder="eg.fast delevery" type="text" name="cat">
			<label><b>discription:</b></label><input class="form-control" type="text" placeholder="eg. we serve fast delevery all over the nepal" name="subcat">


		<div class="w3-panel"><button class="w3-right"><input type="submit" name="submit" value="save_new"></button>
		<button class="w3-right mr-3"><input type="submit" name="submit" value="cancel"></button></div>
	</form>
</div></div><div class="col-sm-4"> </div>

</div>
<br>
<br><hr><hr>
<hr>
  <div class="container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>

<?php 

if(isset($_POST['submit'])){

// INSERT INTO `blog_sub_cat`(`id`, `cat`, `subcat`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4])
$cat = $_POST['cat'];
$subcat = $_POST['subcat'];

$sql="INSERT INTO `blog_sub_cat`(`cat`,`subcat`) VALUES ('$cat','$subcat')";


// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {

 echo "<script>alert('index intro  created successfully......');</script>"; 

}

else{echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
// header('location:registration.php');
}

//  else { echo "not clicked register bottm";
// }
?>

<?php } ?>