


<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>






<?php include("header.php");?>

<?php include("link.php");?>

<script src="./summernote/summernote.js"></script>
<br><br>
<div><h2 class="w3-center"><b >product-control-panel</b></h2></div>
<hr>



<div class="row">
	<div class="col-sm-2"></div>
		<div class="col-sm-8 w3-border">


<?php 

            include("dbc.php");
             $id=$_GET['id'];
             $selectquery = "SELECT*FROM blogs WHERE id =$id";
         
            $query = mysqli_query($conn , $selectquery) or die("error");
          
            while ($result= mysqli_fetch_array($query)) {
              
?>
		
		 <form class="container" action="blog_edit.php " method="POST"  enctype="multipart/form-data">
      <input type="hidden" name="bid" value="<?php echo($id); ?>">

		<div class="form-group container">

		<div  ><label> <b>title   :</b></label> <input class="form-control"value=" <?php echo $result['title']; ?>"  type="text" class="" name="title" ><br></div>
		<b> choose a language :</b>
		<select class="form-control " name="lang" >
			<option type="text" name="lang" value="2">choose a languase </option>
			<option type="text" name="lang" value="1">Nepali </option>
			<option type="text" name="lang" value="2">English </option>
</select>
  <script src="http://cdn.ckeditor.com/4.6.2/standard-all/ckeditor.js"></script>
<script>
    CKEDITOR.replace('ck', {
        filebrowserUploadUrl: 'ckupload.php',
        filebrowserUploadMethod: 'form'
    });
</script>
			<div><label> <b>content   :</b></label> <textarea  name="content" id="ck" class="  w3-round-large form-control  ckeditor" cols="105" rows="3"value=" <?php echo $result['content']; ?>" ><?php echo $result['content']; ?></textarea></div>

		<div  ><label> <b> key word  :</b></label> <input class="form-control"value=" <?php echo $result['keyword']; ?>"  type="text" class="" name="keyword"><br></div>
		<div><label> <b>abstract :</b></label> <textarea  name="abst" id="text" class="  w3-round-large form-control " cols="105" rows="3"value=" <?php echo $result['abst']; ?>" ><?php echo $result['abst']; ?></textarea></div>
		<div  ><label> <b> tag  :</b></label> <input class="form-control"value=" <?php echo $result['tags']; ?>" type="text" class="" name="tags"><br></div>
	
		
		<div  ><label> <b>photo :</b></label> <input class="form-control"value=" <?php echo $result['photo']; ?>"  type="file" class="" name="photo"><br></div>


<div  ><label> <b>auther name  :</b></label> <input class="form-control"value=" <?php echo $result['authers']; ?>"  type="text" class="" name="authers" ><br></div>
	
<input class=""value=" <?php echo $result['date']; ?>"  type="hidden" class="" name="date" >
</div>

<!-- UPDATE `blogs` SET `id`=[value-1],`title`=[value-2],`keyword`=[value-3],`tags`=[value-4],`content`=[value-5],`photo`=[value-6],`authers`=[value-7],`categories`=[value-8],`status`=[value-9],`date`=[value-10] WHERE 1 -->

<!-- UPDATE `blog_categories` SET `id`=[value-1],`name`=[value-2],`date`=[value-3] WHERE 1 -->
		<div><b>categories:</b>
		<select class="form-control " name="cat" >
			<option type="text" name="cat" value="<?php echo $result['categories']; ?>"><?php echo $result['categories']; ?></option>
			
			<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM blog_categories";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<option name="cat" value="<?php echo htmlentities($result['id']);?>"><?php echo htmlentities($result['name']);?></option>
	
		 <?php
              # code...
            }
            ?>

		</select>
		</div>
		<b>posted:</b>
		<select class="form-control " name="post" >
			
			<option type="text" name="post"> publish</option>
			<option type="text" name="post"> draft</option>

		</select>
		
	
	
		 <hr>
		 <div class="w3-center">
		<input class="w3-round-large w3-xlarge  form-control bg-success w3-hover-yellow"  type="submit" name="submit" value="upload">
</div>
		
	</form>
	</div>

	<div class="col-sm-2"></div>

	<hr><br><br>

<!-- 
	<div class="col-sm-4 bg-dange w3-right"><br> <hr>

		<div> <ul class="w3-center" style="list-style: none;">
			
			<li style="list-style: none; border: 2px solid black; margin-left: 60px; margin-right: 60px; font-weight: bold; font-size: 20px;background-color: green; "><a href="">upload</a></li>
			<li style="background-color: white; list-style: none; border: 2px solid black; margin-left: 60px; margin-right: 60px;font-weight: bold;font-size: 20px;">print</li>
			<li  style="background-color: red; list-style: none; border: 2px solid black; margin-left: 60px; margin-right: 60px;font-weight: bold;font-size: 20px;">cancel</li>
		</ul ></div>

		<div class="w3-center "><p><b style="border: 2px solid black; background-color: yellow;">edit other artical</b></p></div>

             <?php
              # code...
            }
            ?>

      </div> -->
    </div>

		<div></div>

	 </div>
	
</div><hr>

  <div class="container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>
<?php } ?>





