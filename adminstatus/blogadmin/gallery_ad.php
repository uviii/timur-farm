<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>

<?php include("dbc.php");?>



<?php 

if(isset($_POST['submit'])){



$content = $_POST['content'];

$cat = $_POST['cat'];
$youtube = $_POST['youtube'];
$file = $_FILES['photo'];



print_r($file);


$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];

if ($fileerror == 0) {
	$destifile = 'uploade/' .$filename;
	// print_r($destifile);

	move_uploaded_file($filepath, $destifile);
// INSERT INTO `gallery`(`id`, `content`, `photo`, `cat`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
}
$sql=" INSERT INTO `gallery`(`content`, `photo`, `cat`, `youtube`) VALUES ('$content','$destifile','$cat','$youtube')";


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


<div class="row">

	<!-- INSERT INTO `gallery`(`id`, `content`, `photo`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4]) -->
	
	<div class="col-sm-8 bg-dak">
		<form class="pl-5"  action="gallery_ad.php" method="POST"  enctype="multipart/form-data"  >
		<div class="form-group container">
			
		<div><b>categories:</b>
		<select class="form-control " name="cat" >
			<option type="text" name="cat"> photos</option>
			<option type="text" name="cat">vedios</option>
		
		</select></div>
		<div><label> <b>content   :</b></label> <textarea  name="content" id="text" class="  w3-round-large form-control  pl-" cols="105" rows="3" placeholder="write your artical here" name="content" >okman</textarea></div>
		<div><label> <b>link youtube vedio :</b></label> <input type="text" name="youtube" placeholder="insert youtube like https://youtu.be/zQ1WZq5qiWM?list=UU_rdE8L_hslrTXrgpU_GWyQ" class="form-control"></div>
		
</div>
		<div  ><label> <b>choose file  :</b></label> <input type="file" name="photo" class="form-control pl-4 "  class=" ml-4 mr-1"  placeholder="contact no.*"><br></div>

		

	
		

	
		
		
	 <div class="w3-center">
		<input class="w3-round-large w3-xlarge  form-control bg-success w3-hover-yellow"  type="submit" name="submit" value="upload">
</div>
	
		 <hr>
		 
		

	</form>
	</div>


	
</div><hr>

  <div class="container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>
  <?php } ?>