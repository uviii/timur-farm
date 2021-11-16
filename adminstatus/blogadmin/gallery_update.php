<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>
<?php include("dbc.php");?>
<?php include("header.php");?>

<?php include("link.php");?>
<br>
<div><h2 class="w3-center"><b>blog control-panel</b></h2></div>
<hr><hr>




<div class="row">

	<?php 
        
           $id=$_GET['gid'];
// SELECT `id`, `content`, `photo`, `cat`, `date` FROM `gallery` WHERE 1
            $selectquery = " SELECT * FROM gallery WHERE id=$id ";
            $query = mysqli_query($conn , $selectquery) or die("error");
          
            while ($result= mysqli_fetch_array($query)) {
              
?>
	
	<div class="col-sm-8 bg-dak">
		<form class="pl-5"  action="gallery_up.php" method="POST"  enctype="multipart/form-data"  >
		<div class="form-group container">
		 
		 <input type="hidden" name="id" value=" <?php echo $result['id']; ?>">	
		<div><b>categories:</b>
		<select class="form-control " name="cat" >
			<option type="text" name="cat"> photos</option>
			<option type="text" name="cat">vedios</option>
		
		</select></div>
		<div><label> <b>content   :</b></label> <textarea  name="content" id="text" class="  w3-round-large form-control  pl-" cols="105" rows="3" placeholder="write your artical here" name="content"  > <?php echo $result['content']; ?> </textarea></div>
		
</div>
		<div  ><label> <b>photo   :</b></label> <input type="file" name="photo" class="form-control pl-4 "  class=" ml-4 mr-1"  placeholder="contact no.*" value="<?php echo $result['photo']; ?>"><br></div>

		

	
		

	
		
		
	 <div class="w3-center">
		<input class="w3-round-large w3-xlarge  form-control bg-success w3-hover-yellow"  type="submit" name="submit" value="upload">
</div>
	
		 <hr>
		 
		

	</form>
	 <?php
              # code...
            }
            ?>
	</div>


	
</div><hr>

  <div class="container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>
<?php } ?>