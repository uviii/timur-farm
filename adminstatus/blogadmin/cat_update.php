









<?php include("header.php");?>

<?php include("link.php");?>
<br><div> <h2 class="w3-center"><b> blog catagories</b></h2></div>
<hr>
<br>

<hr>
 <?php 

            include("dbc.php");
            $ids=$_GET['id'];
            $selectquery = "SELECT*FROM blog_categories  WHERE id =$ids";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
           $result= mysqli_fetch_array($query);
              

 


if(isset($_POST['submit'])){
 

$name = $_POST['name'];
 $idss=$_GET['id'];

 // UPDATE `blog_categories` SET `id`=[value-1],`name`=[value-2],`date`=[value-3] WHERE 1

$sq="UPDATE `blog_categories` SET `name`='$name' WHERE id=$idss";   




echo "$sq";
$dat = mysqli_query($conn ,$sq);

if($dat)
 {
  echo "data inse into database";
  
}

else{echo "failed to insert to database";
}
// header('location:registration.php');
}

 else { echo "not clicked register bottm";
}
?>


<div class="container">

	<div><h2 class="w3-center"><b>blog</b></h2></div>

	<form class="container" action="cat_update.php" method="POST"  enctype="multipart/form-data">
		<label><b>name:</b></label><input class="form-control" type="text" name="name" value=" <?php echo $result['name']; ?>">



		<div class="w3-panel"><button class="w3-right"><input type="submit" name="submit" value="update"></button>
		
	</form>
</div>
<br>
<br><hr><hr>
 <?php
              # code...
            
            ?>
<hr>



  <div class="container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>








