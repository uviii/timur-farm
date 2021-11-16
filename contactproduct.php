<?php require_once("./adminstatus/blogadmin/dbc.php");?>


<?php 

error_reporting(0);
if(isset($_POST['submit'])){


$name =  mysqli_real_escape_string($conn,$_POST['name'] );
$phone =  mysqli_real_escape_string($conn,$_POST['phone'] );
$email =  mysqli_real_escape_string($conn,$_POST['email'] );
$text =  mysqli_real_escape_string($conn,$_POST['text'] );

$sql="INSERT INTO `contact_product`( `name`, `phone`, `email`, `text`) VALUES ('$name','$phone','$email','$text')";


// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {

 	
   echo "<script>alert(' your query successfully submitted , please wait , you will updated  by call/massage/email.thank you');</script>"; 
  
}

else{

 echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

?>






<div class="container">
	<div class="row bg-pink pb-3"  style="background-color: pink;">
			<div class="col-lg-4 bg-dangr w3-padding-62">
				<div class="textwidget">
					<h2 class="white w3-center pt-4	"> Do you Want to know<br>
more about our products?</h2>
<p class="white w3-center ">Share your details with us and we will get back to you with the information.</p>
</div>
</div>
			<div class="col-lg-8 bg-primar cin">
				<form class="pl-5"action="" method="POST"  enctype="multipart/form-data" >
  <div class="  row pt-4">

  	<div class="col-lg-6"><input style="height: 6vh;"  type="name"  name="name" class="form-control pl-4" value="" class=" ml-4"  placeholder=" entter your full  name*"></div><br><br><br>

  	<div class="col-lg-6 "><input style="height: 6vh;" type="phone" name="phone" class="form-control pl-4 " value="" class=" ml-4 mr-1"  placeholder="enter your phone no. with country code*"></div><br><br><br>

  	<div class="container form-group w3-center"><input style="height: 6vh;" type="email" name="email" class="form-control  " value="" class=" ml-4 mr-1"  placeholder="enter your valid email id*"></div><br><br><br>

<div class="mr-5"><textarea class="ml-3  w3-round-large form-control  pl-5" cols="130" rows="10" name="text" placeholder="enter your Requirement detail/enquiry"></textarea></div>

<div class="row">
	<div class="col-sm-6"><div class="ml-5 pt-4">
<span class=" checkbox"><span class="checkbox validates-as-required"><span class="list-item first last"><input type="checkbox" name="checkbox" value="I am not a Robot" required ><span class="pl-2">I am not a Robot</span></span></span></span></div></div>
	<div class="col-sm-6"><div class="pt-4 w3-center"><input style="height: 6vh; font-weight: bold; font-size: 20px; background-color: pink;" type="submit" name="submit" value="submit query" class="ml-4 w3-round-large w3-hover-blue  w3-medium"></div></div>
</div>


  </div> 
  
</form ></div>
		</div>
	</div>
</div>
