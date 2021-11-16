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


<div class="row"> 

<div class="col-sm-6 ">

	<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM  admindetail ORDER BY id DESC LIMIT 2 ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
	
<!-- $sql = "INSERT INTO `admindetail`( `name`, `country`, `state`, `district`, `city`, `local_ad`, `phone`, `email`, `profession`, `level`, `photo`) VALUES ('$name','$country','$state','$district','$city', '$local_ad','$phone','$email','$profession','$level','$destifile')";
 -->
<div class="w3-blue w3-panel container-fluid" ><p class="w3-panel">your info</p></div>
<div class="w3-center"> <img src=" <?php echo $result['photo']; ?>" height="100"  width="auto" class="w3-circle w3-center"> </div>
<div class="w3-center"> <p class="r"><b class="mr-3 w3-center">id:</b> <?php echo $result['id']; ?> </p></div>
<div class="w3-center"> <p class="r"><b class="mr-3 w3-center">full name:</b> <?php echo $result['name']; ?> </p></div>
<div class="w3-center"> <p class="r"><b class="mr-3 w3-center">country:</b> <?php echo $result['country']; ?> </p></div>
<div class="w3-center"> <p class="r"><b class="mr-3 w3-center">state:</b> <?php echo $result['state']; ?> </p></div>
<div class="w3-center"> <p class="r"><b class="mr-3 w3-center">district:</b> <?php echo $result['district']; ?> </p></div>
<div class="w3-center"> <p class="r"><b class="mr-3 w3-center">city:</b> <?php echo $result['city']; ?> </p></div>
<div class="w3-center"> <p class="r"><b class="mr-3 w3-center">local_add:</b> <?php echo $result['local_ad']; ?> </p></div>

<div class="w3-center"> <p class="r"><b class="mr-3 w3-center">phone_no:</b> <?php echo $result['phone']; ?> </p></div>
<div class="w3-center"> <p class="r"><b class="mr-3 w3-center">email_ID:</b> <?php echo $result['email']; ?> </p></div>
<div class="w3-center"> <p class="r"><b class="mr-3 w3-center">profession:</b> <?php echo $result['profession']; ?> </p></div>
<div class="w3-center"> <p class="r"><b class="mr-3 w3-center">level:</b> <?php echo $result['level']; ?> </p></div>

 <?php
              # code...
            }
            ?>


	<br><div class="w3-center w3-blue"><button class="w3-center form-control w3-blue ">change_password</button></div>
<hr>


<div>
	
		<div class="w3-blue w3-panel container-fluid" ><p class="w3-panel">your access permission</p></div>
		
			<tbody class=" w3-display-border container w3-center ">
				<tr>
					<th>id</th>
					<th>table</th>
					<th>view</th>
					<th>Add new</th>
					<th>edit</th>
					<th>delete</th>
				</tr>
				
			</tbody>
</div>

	
</div>
<!-- INSERT INTO `admindetail`(`id`, `name`, `country`, `state`, `district`, `city`, `local_ad`, `phone`, `email`, `profession`, `level`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12]) -->

<div class="col-sm-6 bg-dangr">
	
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
	<label>update your profile picture:</label><input class="" type="file" name="photo"><br>
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
</div><?php } ?>