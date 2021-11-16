<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>
<?php include("dbc.php");?>
<?php 
error_reporting(0);
if(isset($_POST['submit'])){

$langose = $_POST['langose'];
$name = $_POST['name'];
$weight = $_POST['weight'];
$price1 = $_POST['price1'];
$price2 = $_POST['price2'];
$tag = $_POST['tag'];
$tar = $_POST['tar'];
$intro = $_POST['intro'];
$keyword = $_POST['keyword'];
$benefit = $_POST['benefit'];

$ingredient = $_POST['ingredient'];
// $use = $_POST['use'];
// $info = $_POST['info'];
$avail = $_POST['avail'];
$file1 = $_FILES['photo1'];
// $file2 = $_FILES['photo2'];
// $file3 = $_FILES['photo3'];
// $file4 = $_FILES['photo4'];
// $file5 = $_FILES['photo5'];
// $file6 = $_FILES['photo6'];
$sold_by = $_POST['sold_by'];
$code = $_POST['code'];
$imported = $_POST['imported'];
$organic = $_POST['organic'];
$origin = $_POST['origin'];
$packaging = $_POST['packaging'];
$qlty = $_POST['qlty'];
$cat = $_POST['cat'];

$status = $_POST['post'];


// INSERT INTO `productadd`(`id`, `name`, `weight`, `price1`, `price2`, `tag`, `intro`, `keyword`, `benefit`, `ingredient`, `use`, `info`, `avail`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `sold_by`, `categories`, `code`, `qlty`, `imported`, `organic`, `packaging`, `origin`, `status`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23],[value-24],[value-25],[value-26],[value-27],[value-28],[value-29])
// print_r($file1);


$filename1 = $file1['name'];
$filepath1 = $file1['tmp_name'];
$fileerror1 = $file1['error'];
// print_r($file1);

if ($fileerror1 == 0) {
	$destifile1 = 'uploade/' .$filename1;
	// print_r($destifile1);

	move_uploaded_file($filepath1, $destifile1);
	
}
$sql="INSERT INTO `productadd`(`langose`,`name`, `weight`,`tar`, `price1`, `price2`, `tag`, `intro`, `keyword`, `benefit`, `ingredient`, `use`, `info`, `avail`, `photo1`, `sold_by`, `categories`,`code`, `qlty`, `imported`, `organic`, `packaging`, `origin`, `status`)
 VALUES ( '$langose', '$name','$weight','$tar','$price1','$price2','$tag','$intro','$keyword','$benefit','$ingredient','$use','$info','$avail','$destifile1','$sold_by','$cat','$code','$qlty','$imported','$organic','$origin','$packaging', 
    '$status') ";



// echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";
if($data)
 {
 	// echo "inset";
   $_SESSION['action1']=" congratulation! your new  product $name, has been updated successfully ....";
 header('location:prooduct_view.php');  
  
}

else{ 
 $_SESSION['action1']=" sorry! your new  product $name, has not updated please try again....";
 header('location:prooduct_view.php');  

}
// header('location:registration.php');
}

 else { 
}
?>

<?php include("header.php");?>

<?php include("link.php");?>
<script src="./summernote/summernote.js"></script>

<br><br>
<div class="w3-left w3-container ml-3"><h5><a href="product_index.php"> <i class="fa fa-home"></i> go to front page</a></h5></div>
<br>
<br><br>
<div><h2 class="w3-center"><b >addtion of new product</b></h2></div>
<hr>



<div class="row">
	

	<hr><br><br>
<div class="col-sm-2"></div>
	<div class="col-sm-8 w3-border">
		<form class="pl-5"action="" method="POST"  enctype="multipart/form-data" >
		<div class="form-group container">

			<!-- INSERT INTO `productadd`(`id`, `name`, `weight`, `price1`, `price2`, `tag`, `intro`, `keyword`, `benefit`, `ingredient`, `use`, `info`, `avail`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `sold_by`, `categories`, `status`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23]) -->
			<div><b class="w3-left">select language:</b>
		<select class="form-control " name="langose" >
			<option type="text" name="langose" value="1"> -select-</option>
				<option type="text" name="langose" value="1"> engilsh </option>
			<option type="text" name="langose" value="2"> Nepali</option>
		
			

		</select></div>

		
		<div  ><label class="w3-left"> <b>product name   :</b></label> <input class="form-control" placeholder="your product name"  type="text" class="" name="name" ><br></div>
		<div  ><label class="w3-left"> <b> product weight   :</b></label> <input class="form-control" placeholder="your product weight eg. 10 " type="text" class="" name="weight"><br></div>
		<div><b class="w3-left">select unit:</b>
		<select class="form-control " name="tar" >
			<option type="text" name="tar" > -select-</option>
				<option type="text" name="tar" value="Kg"> Kg </option>
			<option type="text" name="tar" value="Quintal">Quintal</option>
			<option type="text" name="tar" value="Gm">Gm</option>
		
		</select></div>

		<div  ><label class="w3-left"> <b>main price   :</b></label> <input class="form-control" placeholder=" product price greater than market price " type="text" class="" name="price1"><br></div>
		<div  ><label class="w3-left"> <b> offer price   :</b></label> <input class="form-control" placeholder="write market price of product " type="text" class="" name="price2"><br></div>
	<!-- 	<div  ><label class="w3-left"> <b>avaiable weight of package   :</b></label> <input class="form-control" placeholder="specification of this this product" type="text" class="" name="tag"><br></div>
		
	 -->
		<div  ><label class="w3-left"> <b>place of origin   :</b></label> <input class="form-control" placeholder="specification of this this product" type="text" class="" name="origin"><br></div>
		
		<div  ><label class="w3-left"> <b>product code  :</b></label> <input class="form-control" placeholder="specification of this this product" type="text" class="" name="code"><br></div>


		<div><b class="w3-left">packaging type available:</b>
		<select class="form-control " name="packaging" >
			<option type="text" name="post" value=""> </option>

			<option type="text" name="packaging"> flexible plastic PET/LDPE packet</option>
			<option type="text" name="packaging"> jute bag</option>
			<option type="text" name="packaging">plastic bottle/can</option>
			<option type="text" name="packaging">LDPDE coated raffia bag</option>
			<option type="text" name="packaging">printed cartons </option>
			<option type="text" name="packaging">metal cans</option>
			<option type="text" name="packaging"> glass bottle</option>
			<option type="text" name="packaging">loosely woven gunny bags</option>
			<option type="text" name="packaging">wooden/plastic crates</option>
			<option type="text" name="packaging">net bag</option>
			<option type="text" name="packaging">bamboo basket or corrugated fiber box basket</option>
			<option type="text" name="packaging">grease-proof polyethylene</option>
			<option type="text" name="packaging">LDPDE coated jute bag</option>
			<option type="text" name="packaging"> nepali language</option>
			<option type="text" name="packaging"> nepali language</option>
			<option type="text" name="packaging"> nepali language</option>
			<option type="text" name="packaging"> nepali language</option>
			<option type="text" name="packaging"> nepali language</option>
			<option type="text" name="packaging"> nepali language</option>
			<option type="text" name="packaging"> nepali language</option>
			

		</select></div>
		<div><b class="w3-left">quality:</b>
		<select class="form-control " name="qlty" >
			<option type="text" name="post" value=""> </option>
			<option type="text" name="qlty"> A grade</option>
			<option type="text" name="qlty"> medium</option>
			<option type="text" name="qlty">best</option>
			

		</select></div>
		<div><b class="w3-left">is it imorted:</b>
		<select class="form-control " name="imported" >
						<option type="text" name="imported"> no its local product</option>
			<option type="text" name="imported"> yes, from other country</option>
			<option type="text" name="imported">yes ,from inter district of nepal</option>
			

		</select></div>
		<div><b class="w3-left">is it organic:</b>
		<select class="form-control " name="organic" >
			<option type="text" name="post" value=""> </option>
			<option type="text" name="organic">produced without using herbicide ,pesticide ,fungicide (pure organic)</option>
			<option type="text" name="organic">naturally prodce in salyan district (pure organic)</option>
			<option type="text" name="organic">no</option>
			<option type="text" name="organic">medium</option>
			

		</select></div><br>
<div><label class="w3-left"> <b>meta intro (less then 30 word)  :</b></label> <textarea  name="tag" id="text " placeholder="enter introduction less than 30 word for meta tag" class=" w3-round-large form-control  pl-" cols="105" rows="3"></textarea></div>
	<br><label class=" w3-left"> <b class="w3-left">product detail introduction:</b></label><br><br>
		<div><textarea  name="intro" id="text" class="  w3-round-large form-control  ckeditor" cols="105" rows="3" placeholder="unique introduction of this product"></textarea></div>
	<br>

		<div><label class="w3-left"> <b>key word  :</b></label> <textarea  name="tag" id="text" class="  w3-round-large form-control  pl-" cols="105" rows="3" placeholder="your product keyword lessthen 35"></textarea></div>

			<br><label class=" w3-left"> <b class="w3-left">how to use ,benefit,how to store:</b></label><br><br>
		<div> <textarea  name="benefit" id="text" class="  w3-round-large form-control ckeditor pl-" cols="105" rows="3" placeholder="all benefit here"></textarea></div>
		<div><label class="w3-left"> <b>ingredient   :</b></label> <textarea  name="ingredient" id="text" class="  w3-round-large form-control  pl-" cols="105" rows="3" placeholder="all ingredient here"></textarea></div>
	<!-- 	<div><label class="w3-left"> <b>how to use   :</b></label> <textarea  name="use" id="text" class=" ckeditor w3-round-large form-control  pl-" cols="105" rows="3" placeholder="procedure incase of new product here"></textarea></div> -->
		<!-- <div><label class="w3-left"> <b> other information :</b></label> <textarea  name="info" id="text" class=" ckeditor w3-round-large form-control  pl-" class="summernote" cols="105" rows="3" placeholder="other information releted to this product"></textarea></div> -->
<div><b class="w3-left">availbility:</b>
		<select class="form-control " name="avail" >
			<option type="text" name="post" value=""> </option>
			<option type="text" name="avail"> onstock</option>
			<option type="text" name="avail"> outstock</option>
			<option type="text" name="avail">we'll come soon!</option>
			

		</select></div>
</div>


		<div  ><label class="w3-left"> <b>photo-1   :</b></label> <input type="file" name="photo1" class="form-control pl-4 "  class=" ml-4 mr-1"  placeholder="contact no.*"><br></div>
<!-- 		<div  ><label class="w3-left"> <b>photo-2   :</b></label> <input type="file" name="photo2" class="form-control pl-4 "  class=" ml-4 mr-1"  placeholder="contact no.*"><br></div>
		<div  ><label class="w3-left"> <b>photo-3   :</b></label> <input type="file" name="photo3" class="form-control pl-4 "  class=" ml-4 mr-1"  placeholder="contact no.*"><br></div>
		<div  ><label class="w3-left"> <b>photo -4 :</b></label> <input type="file" name="photo4" class="form-control pl-4 "  class=" ml-4 mr-1"  placeholder="contact no.*"><br></div>
		<div  ><label class="w3-left"> <b>photo-5   :</b></label> <input type="file" name="photo5" class="form-control pl-4 "  class=" ml-4 mr-1"  placeholder="contact no.*"><br></div>
		<div  ><label class="w3-left"> <b>photo-6   :</b></label> <input type="file" name="photo6" class="form-control pl-4 "  class=" ml-4 mr-1"  placeholder="contact no.*"><br></div> -->
		

		<div  ><label class="w3-left"> <b>sold by  :</b></label> <input class="form-control" placeholder="auther name" type="text" class="" name="sold_by"><br></div>
		

		<div><b class="w3-left"> categories:</b>
		<select class="form-control " name="cat" >
			<option type="text" name="cat" value="posted">select categories </option>
			
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

		</select></div><br>
		<b class="w3-left">posted:</b>
		<select class="form-control " name="post" >posted:
			<option type="text" name="post" value=""> </option>
			<option type="text" name="post"> publish</option>
			<option type="text" name="post"> draft</option>

		</select>
		
	
	
		 <hr>
		 <div class="w3-center">
		<input class="w3-round-large w3-xlarge  form-control bg-success w3-hover-yellow"  type="submit" name="submit" value="upload">
</div>
		
	</form>
	</div>

	<div class="col-sm-2 bg-dange w3-right">

	

	
		 <div class="w3-dropdown-hover w3-center">
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
      </div>
    </div>

		<div></div>

	 </div>
	
</div><hr>

 
<?php include("footer.php");?>
<?php } ?>