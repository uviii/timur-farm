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



<div class="row"  style="background-color: ;">
	<div class="col-sm-2"></div>
	<div class="col-sm-8 w3-orang" style="background-color: ;">


<?php 

            include("dbc.php");
             $id=$_GET['id'];
             $selectquery = "SELECT*FROM productadd WHERE id =$id";
         
            $query = mysqli_query($conn , $selectquery) or die("error");
          
            while ($result= mysqli_fetch_array($query)) {
              
?>
		
		 <form class="container" action="product_update.php" method="POST"  enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo($id); ?>">

		<div class="form-group container">

			<!-- INSERT INTO `productadd`(`id`, `name`, `weight`, `price1`, `price2`, `tag`, `intro`, `keyword`, `benefit`, `ingredient`, `use`, `info`, `avail`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `sold_by`, `categories`, `status`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23]) -->
			
		
		<div  ><label class="w3-left"> <b>product name   :</b></label> <input class="form-control"value=" <?php echo $result['name']; ?>"  type="text" class="" name="name" ><br></div>
		<div  ><label class="w3-left"> <b>available weight   :</b></label> <input class="form-control"value=" <?php echo $result['weight']; ?>"  type="text" class="" name="weight"><br></div>
		<div><b class="w3-left">select unit:</b>
		<select class="form-control " name="tar" >
			
				<option type="text" name="tar" value="<?php echo $result['tar']; ?>">-<?php echo $result['tar']; ?>-</option>
				<option type="text" name="tar" value="Gm">Gm</option>
				<option type="text" name="tar" value="Kg"> Kg </option>
				<option type="text" name="tar" value="per">per</option>

			<option type="text" name="tar" value="Quintal">Quintal</option>
			
		
		</select></div>
		<div  ><label class="w3-left"> <b>main price   :</b></label> <input class="form-control"value=" <?php echo $result['price1']; ?>"  type="text" class="" name="price1"><br></div>
		<div  ><label class="w3-left"> <b> offer price   :</b></label> <input class="form-control"value=" <?php echo $result['price2']; ?>" type="text" class="" name="price2"><br></div>
		<div><label class="w3-left"> <b>meta intro (less then 30 word)  :</b></label> <textarea  name="tag" id="text " class="  w3-round-large form-control  pl-" cols="105" rows="3"><?php echo $result['tag']; ?></textarea></div>

		<!-- <div  ><label class="w3-left"> <b>meta intro   :</b></label> <input class="form-control"value=" <?php echo $result['tag']; ?>"  placeholder="specification of this this product" type="text" class="" name="tag"><br></div>
		 -->
	
		<div  ><label class="w3-left"> <b>place of origin   :</b></label> <input class="form-control"value=" <?php echo $result['packaging']; ?>"  type="text" class="" name="origin"><br></div>
		
		<div  ><label class="w3-left"> <b>product code  :</b></label> <input class="form-control"value=" <?php echo $result['code']; ?>"  type="text" class="" name="code"><br></div>


<div  ><label class="w3-left"> <b>packaging type  :</b></label> <input class="form-control"value=" <?php echo $result['origin']; ?>"  type="text" class="" name="packaging" ><br></div>


	<!-- 	<div><b>packaging type available:</b>
		<select class="form-control " name="packaging" >
			<option type="text" name="packaging" value="<?php echo $result['packaging']; ?>"><?php echo $result['packaging']; ?> </option>
			<option type="text" name="packaging"> carton</option>
			<option type="text" name="packaging">pp bag</option>
			<option type="text" name="packaging">other</option>
			

		</select></div> -->
		<div><b class="w3-left">quality:</b>
		<select class="form-control " name="qlty" >
			
			<option type="text" name="qlty" value="A grade"> A grade</option>
			<option type="text" name="qlty" value="medium"> medium</option>
			<option type="text" name="qlty" value="best">best</option>
			

		</select></div>
		<div><b class="w3-left">is it imorted:</b>
		<select class="form-control " name="imported" >
						<option type="text" name="imported" value="no its local product"> no its local product</option>
			<option type="text" name="imported" value=" yes, from other country"> yes, from other country</option>
			<option type="text" name="imported" value="yes ,from inter district of nepal">yes ,from inter district of nepal</option>
			

		</select></div><div><b class="w3-left">is it organic:</b>
		<select class="form-control " name="organic" >
			
			<option type="text" name="organic">produced without using herbicide ,pesticide ,fungicide (pure organic)</option>
			<option type="text" name="organic">naturally prodce in salyan district (pure organic)</option>
			
			<option type="text" name="organic" value="no"> no</option>
			<option type="text" name="organic" value="medium">medium</option>
			

		</select></div>
		<br><label class=" w3-left"> <b class="w3-left">product discription:</b></label><br><br>
		<div> <textarea  name="intro" id="text " class="  w3-round-large form-control ckeditor pl-" cols="105" rows="3" ><?php echo $result['intro']; ?></textarea></div>

	
	<!-- 	<div> <textarea  name="intro" id="text" class="  w3-round-large form-control  ckeditor" cols="105" rows="3"><?php echo $result['intro']; ?></textarea></div><br> -->
	
		<div><label class="w3-left"> <b>keyword   :</b></label> <textarea  name="keyword" id="text" class="w3-round-large form-control  pl-" cols="105" rows="3"value=" <?php echo $result['keyword']; ?>" ><?php echo $result['keyword']; ?></textarea></div>
		<br><label class=" w3-left"> <b class="w3-left">how to use-benefit-store-other information:</b></label><br><br>
		<div><textarea  name="benefit" class="  w3-round-large form-control ckeditor" cols="105" rows="3"><?php echo $result['benefit']; ?></textarea></div>
	<br><label class=" w3-left"> <b class="w3-left">ingredient:</b></label><br><br>
		<div> <textarea  name="ingredient" id="text " class="  w3-round-large form-control ckeditor pl-" cols="105" rows="3" ><?php echo $result['ingredient']; ?></textarea></div>
		<!-- <br><label class=" w3-left"> <b class="w3-left">how to use:</b></label><br><br>
		<div> <textarea  name="use" id="text" class=" ckeditor w3-round-large form-control  pl-" cols="105" rows="3" ><?php echo $result['use']; ?></textarea></div> -->
<!-- 		<div><label class="w3-left"> <b> other information :</b></label> <textarea  name="info" id="text" class=" ckeditor w3-round-large form-control  pl-" class="" cols="105" rows="3" >

			<?php echo $result['info']; ?></textarea></div> -->
<div class="w3-left"><b>availbility:</b>
		<select class="form-control " name="avail" >
	
			<option type="text" name="avail" value="<?php echo $result['avail']; ?>"> <?php echo $result['avail']; ?></option>
			<option type="text" name="avail" value="onstock"> onstock</option>
			<option type="text" name="avail" value="outstock"> outstock</option>
			<option type="text" name="avail" value="its take time ">its take time</option>
			

		</select></div>
</div>


		<div  ><label class="w3-left"> <b>photo-1   :</b></label> <input type="file" name="photo1" class="form-control pl-4 "  class=" ml-4 mr-1" value=" <?php echo $result['photo1']; ?>" ><br></div>
		<!-- <div  ><label class="w3-left"> <b>photo-2   :</b></label> <input type="file" name="photo2" class="form-control pl-4 "  class=" ml-4 mr-1" value=" <?php echo $result['date']; ?>"  placeholder="contact no.*"><br></div>
		<div  ><label class="w3-left"> <b>photo-3   :</b></label> <input type="file" name="photo3" class="form-control pl-4 "  class=" ml-4 mr-1" value=" <?php echo $result['date']; ?>"  placeholder="contact no.*"><br></div>
		<div  ><label class="w3-left"> <b>photo -4 :</b></label> <input type="file" name="photo4" class="form-control pl-4 "  class=" ml-4 mr-1" value=" <?php echo $result['date']; ?>"  placeholder="contact no.*"><br></div>
		<div  ><label class="w3-left"> <b>photo-5   :</b></label> <input type="file" name="photo5" class="form-control pl-4 "  class=" ml-4 mr-1" value=" <?php echo $result['date']; ?>"  placeholder="contact no.*"><br></div>
		<div  ><label class="w3-left"> <b>photo-6   :</b></label> <input type="file" name="photo6" class="form-control pl-4 "  class=" ml-4 mr-1" value=" <?php echo $result['date']; ?>"  placeholder="contact no.*"><br></div> -->
		

		<div  ><label class="w3-left"> <b>sold by  :</b></label> <input class="form-control"value=" <?php echo $result['sold_by']; ?>"   type="text" class="" name="sold_by"><br></div>
		

		<div><b class="w3-left">categories:</b>
		<select class="form-control " name="cat" >
			<option name="cat" value="<?php echo htmlentities($result['categories']);?>"><?php echo htmlentities($result['categories']);?></option>
			
			<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM productcat";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<option name="cat" value="<?php echo htmlentities($result['name']);?>"><?php echo htmlentities($result['name']);?></option>
	
		 <?php
              # code...
            }
            ?>

		</select></div>
		<b class="w3-left">posted:</b>
		<select class="form-control " name="post" >posted:
			
			<option type="text" name="post" value="publish"> publish</option>
			<option type="text" name="post" value="draft"> draft</option>

		</select>
		
	
	
		 <hr>
		 <div class="w3-center">
		<input class="w3-round-large w3-xlarge  form-control bg-success w3-hover-yellow"  type="submit" name="submit" value="upload">
</div>
		
	</form>
	</div>
	<hr><br><br>

<!-- 
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
            $selectquery = "SELECT*FROM productcat";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<a href="" class="w3-bar-item w3-button"><?php echo htmlentities($result['name']);?></a>


	
		 <?php
              # code...
            }
            ?>

             <?php
              # code...
            }
            ?>

      </div>
    </div>

		<div></div>

	 </div> -->

	
</div><hr>

<?php include("footer.php");?>
<?php } ?>