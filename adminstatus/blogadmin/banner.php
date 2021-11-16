<?php include("dbc.php");?>
<?php 
session_start();
error_reporting(0);
if(isset($_POST['submit'])){


$name = $_POST['name'];
$weight = $_POST['weight'];
$price1 = $_POST['price1'];
$price2 = $_POST['price2'];
$tag = $_POST['tag'];
$intro = $_POST['intro'];
$keyword = $_POST['keyword'];
$benefit = $_POST['benefit'];

$ingredient = $_POST['ingredient'];
$use = $_POST['use'];
$info = $_POST['info'];
$avail = $_POST['avail'];
$file1 = $_FILES['photo1'];
$file2 = $_FILES['photo2'];
$file3 = $_FILES['photo3'];
$file4 = $_FILES['photo4'];
$file5 = $_FILES['photo5'];
$file6 = $_FILES['photo6'];
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
$sql="INSERT INTO `banner`(`name`, `weight`, `price1`, `price2`, `tag`, `intro`, `keyword`, `benefit`, `ingredient`, `use`, `info`, `avail`, `photo1`, `sold_by`, `categories`,`code`, `qlty`, `imported`, `organic`, `packaging`, `origin`, `status`)
 VALUES ( '$name','$weight','$price1','$price2','$tag','$intro','$keyword','$benefit','$ingredient','$use','$info','$avail','$destifile1','$sold_by','$cat','$code','$qlty','$imported','$organic','$origin','$packaging', 
    '$status') ";



// echo "$sql";
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
<script src="./summernote/summernote.js"></script>
<br><br>
<div><h2 class="w3-center"><b >product-control-panel</b></h2></div>
<hr>



<div class="row">
	
	<div class="col-sm-8 w3-gray">
		<form class="pl-5"action="banner.php" method="POST"  enctype="multipart/form-data" >
		<div class="form-group container">

			<!-- INSERT INTO `productadd`(`id`, `name`, `weight`, `price1`, `price2`, `tag`, `intro`, `keyword`, `benefit`, `ingredient`, `use`, `info`, `avail`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `sold_by`, `categories`, `status`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23]) -->
			
		
		<div  ><label> <b>product name with weight   :</b></label> <input class="form-control" placeholder="write your product weight under (--------)"  type="text" class="" name="name" ><br></div>
		<div  ><label> <b>available weight   :</b></label> <input class="form-control" placeholder="all available weight on  stock with,coma" type="text" class="" name="weight"><br></div>
		<div  ><label> <b>main price   :</b></label> <input class="form-control" placeholder=" product price greater than market price" type="text" class="" name="price1"><br></div>
		<div  ><label> <b> offer price   :</b></label> <input class="form-control" placeholder="write market price of product " type="text" class="" name="price2"><br></div>
		<div  ><label> <b>tag   :</b></label> <input class="form-control" placeholder="specification of this this product" type="text" class="" name="tag"><br></div>
		
	
		<div  ><label> <b>place of origin   :</b></label> <input class="form-control" placeholder="specification of this this product" type="text" class="" name="origin"><br></div>
		
		<div  ><label> <b>product code  :</b></label> <input class="form-control" placeholder="specification of this this product" type="text" class="" name="code"><br></div>


		<div><b>packaging type available:</b>
		<select class="form-control " name="packaging" >
			<option type="text" name="packaging"> plastic packet</option>
			<option type="text" name="packaging"> carton</option>
			<option type="text" name="packaging">pp bag</option>
			<option type="text" name="packaging">other</option>
			

		</select></div>
		<div><b>quality:</b>
		<select class="form-control " name="qlty" >
			
			<option type="text" name="qlty"> A grade</option>
			<option type="text" name="qlty"> medium</option>
			<option type="text" name="qlty">best</option>
			

		</select></div>
		<div><b>is it imorted:</b>
		<select class="form-control " name="imported" >
						<option type="text" name="imported"> no its local product</option>
			<option type="text" name="imported"> yes, from other country</option>
			<option type="text" name="imported">yes ,from inter district of nepal</option>
			

		</select></div><div><b>is it organic:</b>
		<select class="form-control " name="organic" >
			
			<option type="text" name="organic"> yes ,naturally prodce in salyan district</option>
			<option type="text" name="organic"> no</option>
			<option type="text" name="organic">medium</option>
			

		</select></div>


		<div><label> <b>introduction   :</b></label> <textarea  name="intro" id="text" class="  w3-round-large form-control  pl-" cols="105" rows="3" placeholder="unique introduction of this product"></textarea></div>
		<div  ><label> <b>keyword:</b></label> <input class="form-control" placeholder=" key word of product intro " type="text" class="" name="keyword"><br></div>
		<div><label> <b>benefit   :</b></label> <textarea  name="benefit" id="text" class="  w3-round-large form-control  pl-" cols="105" rows="3" placeholder="all benefit here"></textarea></div>
		<div><label> <b>ingredient   :</b></label> <textarea  name="ingredient" id="text" class="  w3-round-large form-control  pl-" cols="105" rows="3" placeholder="all ingredient here"></textarea></div>
		<div><label> <b>how to use   :</b></label> <textarea  name="use" id="text" class="  w3-round-large form-control  pl-" cols="105" rows="3" placeholder="procedure incase of new product here"></textarea></div>
		<div><label> <b> other information :</b></label> <textarea  name="info" id="text" class="  w3-round-large form-control  pl-" class="summernote" cols="105" rows="3" placeholder="other information releted to this product"></textarea></div>
<div><b>availbility:</b>
		<select class="form-control " name="avail" >
			<option type="text" name="avail" value="posted"> </option>
			<option type="text" name="avail"> instock</option>
			<option type="text" name="avail"> outstock</option>
			<option type="text" name="avail">its take time</option>
			

		</select></div>
</div>


		<div  ><label> <b>photo-1   :</b></label> <input type="file" name="photo1" class="form-control pl-4 "  class=" ml-4 mr-1"  placeholder="contact no.*"><br></div>
		<div  ><label> <b>photo-2   :</b></label> <input type="file" name="photo2" class="form-control pl-4 "  class=" ml-4 mr-1"  placeholder="contact no.*"><br></div>
		<div  ><label> <b>photo-3   :</b></label> <input type="file" name="photo3" class="form-control pl-4 "  class=" ml-4 mr-1"  placeholder="contact no.*"><br></div>
		<div  ><label> <b>photo -4 :</b></label> <input type="file" name="photo4" class="form-control pl-4 "  class=" ml-4 mr-1"  placeholder="contact no.*"><br></div>
		<div  ><label> <b>photo-5   :</b></label> <input type="file" name="photo5" class="form-control pl-4 "  class=" ml-4 mr-1"  placeholder="contact no.*"><br></div>
		<div  ><label> <b>photo-6   :</b></label> <input type="file" name="photo6" class="form-control pl-4 "  class=" ml-4 mr-1"  placeholder="contact no.*"><br></div>
		

		<div  ><label> <b>sold by  :</b></label> <input class="form-control" placeholder="auther name" type="text" class="" name="sold_by"><br></div>
		

		<div><b>categories:</b>
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

		</select></div>
		<b>posted:</b>
		<select class="form-control " name="post" >posted:
			<option type="text" name="post" value="posted"> </option>
			<option type="text" name="post"> publish</option>
			<option type="text" name="post"> draft</option>

		</select>
		
	
	
		 <hr>
		 <div class="w3-center">
		<input class="w3-round-large w3-xlarge  form-control bg-success w3-hover-yellow"  type="submit" name="submit" value="upload">
</div>
		
	</form>
	</div>
	<hr><br><br>


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
      </div>
    </div>

		<div></div>

	 </div>
	
</div><hr>
<?php include("footer.php") ?>

  