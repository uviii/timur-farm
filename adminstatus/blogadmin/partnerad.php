<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>

<?php include("header.php");?>

<?php include("link.php");?>

<br><div class="w3-oran">
<div class="w3-container">
	
 <h2 class="w3-center"><b>admin_profile.....  </b></h2>
<!-- 	<button class="none w3-right mb-5"> <a  href=""  onclick="window.print();">print</a></button> -->

<div class="container"><style>.none li a{border: 2px solid black;padding: 4px; margin: 2px;}  </style>
	
	<ul class="none" style="list-style: none; display: flex;">
<li><a href="http://localhost/timur%20farm/adminstatus/blogadmin/productadd.php ">add new</a></li>
<li> <a href=""  onclick="window.print();">print</a></li>
<li><a href="" >save_ccv</a></li>
<li><a href="">filter</a></li>
<li><a href="">show_all</a></li>
	

	</ul>
</div><br>
<div class=""> 


<!-- INSERT INTO `admindetail`(`id`, `name`, `country`, `state`, `district`, `city`, `local_ad`, `phone`, `email`, `profession`, `level`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12]) -->

<div class="col-sm-bg-dangr">
	
<div>
	<form  action="blogadddata.php" method="POST"  enctype="multipart/form-data">
		<div class="w3-blue w3-panel container-fluid" ><p class="w3-panel">edit_your info</p></div>
	<label>name:</label><input class="form-control" type="text" name="name">
	<label>contry:</label><input class="form-control" type="text" name="country">
	<label>state:</label><input class="form-control" type="text" name="state">
	<label>district:</label><input class="form-control" type="text" name="district">
	<label>city:</label><input class="form-control" type="text" name="city">
	<label>local address:</label><input class="form-control" type="text" name="local_ad">
	<label>phone no:</label><input class="form-control" type="text" name="phone">
	<label>email:</label><input class="form-control" type="text" name="email">
	<label>profession:</label><input class="form-control" type="text" name="profession">
	
	<label>leval:</label><input class="form-control" type="text" name="level">
	<label> profile picture:</label><input class="" type="file" name="photo"><br>
	<input class="form-control w3-blue" type="submit" name="submit" value="update">

	
	</form>
	
</div>


</div>
 </div>

</div>

<hr>


<br>

<br><hr><hr>
  <div class="w3-container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>
<?php } ?>