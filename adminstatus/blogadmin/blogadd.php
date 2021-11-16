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


	
	<div class="col-sm-8 bg-dak">
		<form class="pl-5"  action="blogadddata.php" method="POST"  enctype="multipart/form-data"  >
		<div class="form-group container">
			
		<div  ><label> <b>title   :</b></label> <input class="form-control" placeholder="write your artical title here" type="text" class="" name="title"><br></div>
		<div  ><label> <b>keyword   :</b></label> <input class="form-control" placeholder="tage here" type="text" class="" name="keyword"><br></div>
		<div  ><label> <b>tags   :</b></label> <input class="form-control" placeholder="tage here" type="text" class="" name="tags"><br></div>
		
		<div><label> <b>content   :</b></label> <textarea  name="content" id="text" class=" container w3-round-large form-control ckeditor pl-" cols="105" rows="3" placeholder="write your artical here" name="content" >okman</textarea></div>
		
</div>
		<div  ><label> <b>photo   :</b></label> <input type="file" name="photo" class="form-control pl-4 "  class=" ml-4 mr-1"  placeholder="contact no.*"><br></div>
		

		<div  ><label> <b>auther   :</b></label> <input class="form-control" placeholder="auther name" type="text"  name="auther"><br></div>
		

		<div><b>categories:</b>
		<select class="form-control " name="cat" >
			<option type="text" name="cat" value="posted">select catagories </option>
			

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

		</select></div>
		<b>posted:</b>
		<select class="form-control " name="post">posted:
			<option type="text" name="post" value="posted"> </option>
			<option type="text" name="post"> publish</option>
			<option type="text" name="post"> draft</option>

		</select>
		
	 <div class="w3-center">
		<input class="w3-round-large w3-xlarge  form-control bg-success w3-hover-yellow"  type="submit" name="submit" value="upload">
</div>
 <div class="w3-center">
		<input class="w3-round-large w3-xlarge  form-control bg-success w3-hover-yellow"  type="reset"  value="reset/cancel">
</div>



	
		 <hr>
		 
		

	</form>
	</div>


	<div class="col-sm-4 bg-dange w3-right"><br> <hr>

		<div> <ul class="w3-center" style="list-style: none;">
			
			<li style="list-style: none; border: 2px solid black; margin-left: 60px; margin-right: 60px; font-weight: bold; font-size: 20px;background-color: green; "><a href="">upload</a></li>
			<li style="background-color: white; list-style: none; border: 2px solid black; margin-left: 60px; margin-right: 60px;font-weight: bold;font-size: 20px;">print</li>
			<li  style="background-color: red; list-style: none; border: 2px solid black; margin-left: 60px; margin-right: 60px;font-weight: bold;font-size: 20px;">cancel</li>
		</ul ></div>

		<div class="w3-center "><p><b style="border: 2px solid black; background-color: yellow;">edit other artical</b></p></div>
		 <div class="w3-dropdown-hover  w3-right">
      <button class="w3-padding-large w3-button w3-center bg-success" title="More">categories<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
       
        <?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM blog_categories";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<a href="" class="w3-bar-item w3-button"><?php echo htmlentities($result['name']);?></a>

	
		 <?php
              # code...
            }
            ?>
        
      </div>
    </div>

		<div></div>

	 </div>
	
</div><hr>

  <?php include("footer.php"); ?>
  <?php } ?>