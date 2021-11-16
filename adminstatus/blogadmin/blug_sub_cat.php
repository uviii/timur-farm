<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>







<?php 
// error_reporting(0);
 include("dbc.php");
if(isset($_POST['submit'])){


$subcategories = $_POST['subcategories'];
$categories = $_POST['categories'];
$catid = $_POST['catid'];

$sql="INSERT INTO `cat_b_sub`(`categories`, `catid`, `subcategories`)  VALUES ('$categories','$catid','$subcategories')";

// INSERT INTO `cat_b_sub`(`id`, `categories`, `catid`, `subcategories`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])

echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
$_SESSION['action']=" contatulation subcategories $subcategories, updated successfully ....";
 header('location:categories.php'); 
  
}

else{echo "<script>alert('failed to upload ,please try again.');</script>"; 
}
// header('location:registration.php');
}

 else {
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
	<form class="container" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"  enctype="multipart/form-data">
		


            <div><b>select categories name:</b><br>
		<select class="form-control " name="categories" >
			<option type="text" name="categories" value="posted">-select- </option>
			
			<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM  blog_categories";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<option name="categories" value="<?php echo htmlentities($result['name']);?>">(<?php echo htmlentities($result['id']);?>)<?php echo htmlentities($result['name']);?></option>
	
		 <?php
              # code...
            }
            ?>
        </select></div><br>
        <label><b>select categories id:</b></label><input class="form-control" placeholder="enter categories id eg 23" type="text" name="catid">
        <details> choose categories id from categories name eg:-(23).agriculture>(23 is the cat id)</details><br>

		<label><b>add sub categories:</b></label><input class="form-control" type="text" name="subcategories">

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