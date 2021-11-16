<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>




<?php include("header.php");?>

<?php include("link.php");?>
<br><div> <h2 class="w3-center"><b> blog sub_catagories</b></h2></div>
<hr>
<br>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
<hr>
 
<!-- INSERT INTO `cat_b_sub`(`id`, `categories`, `subcategories`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4]) -->
<div class="container">
	<div><h2 class="w3-center"><b>blog</b></h2></div>
	<form class="container" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"  enctype="multipart/form-data">
<div><b>categories:</b>
		<select class="form-control " name="categories" >
			<option type="text" name="" value="choose categories">choose categories</option>
			
			<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM blog_categories";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<option name="categories" value="<?php echo htmlentities($result['name']);?>"><?php echo htmlentities($result['name']);?></option>
	
		 <?php
              # code...
            }
            ?>

		</select></div>
			<label><b>subcategories name:</b></label><input class="form-control" type="text" name="subcategories">

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

<?php 

if(isset($_POST['submit'])){


$categories = $_POST['categories'];
$subcategories = $_POST['subcategories'];

$sql="INSERT INTO `cat_b_sub`(`categories`,`subcategories`) VALUES ('$categories','$subcategories')";


// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {

 echo "<script>alert('subcategories created......');</script>"; 

}

else{echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
// header('location:registration.php');
}

//  else { echo "not clicked register bottm";
// }
?>

<?php } ?>