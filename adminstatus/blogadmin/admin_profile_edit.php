


<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>

<?php include("header.php");?>

<?php include("link.php");?>
<br>

<hr>
<div class="w3-center"> <h1><b style="font-weight: bold;font-size: 24px; color: green;">Admin Profile Update Portal</b></h1></div>
<hr style="border-bottom: 2px dotted green;">







<?php 

            include("dbc.php");

             $id=$_GET['id'];
            $selectquery = "SELECT*FROM admin WHERE id =$id";
           
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>

<!-- <?php echo htmlentities($_SERVER['PHP_SELF']); ?> -->
	
		
	<form name="" method="POST" action="admin_pro_up.php" enctype="multipart/form-data" class="container ">
		<input type="hidden" name="id" value="<?php echo($id); ?>">
		<label class="w3-left ml-0 w3-panel"> <b>Admin Full Name:</b></label><input readonly="" class="form-control p-4"   type="text"  required    value="<?php echo $result['username']; ?>"  name="username">						
			<label class="w3-left ml-0 w3-panel"> <b>Admin Position:</b></label><input class="form-control p-4"   type="text"  required    value="<?php echo $result['position']; ?>"  name="position">
		<label class="w3-left ml-0 w3-panel"> <b>Admin Email Id:</b></label><input readonly="" class="form-control p-4 "   type="text"  required    value="<?php echo $result['email']; ?>"  name="email">
	
<!-- 	<label class="w3-left ml-0 w3-panel"> <b>role:</b></label><input class="form-control p-4"   type="text"  required    value="<?php echo $result['status']; ?>"  name="country">

 -->
 <label class="w3-left ml-0 w3-panel"> <b>Admin Full Address:</b></label><input class="form-control p-4"   type="text"  required    value="<?php echo $result['address']; ?>"  name="address">	
 <label class="w3-left ml-0 w3-panel"> <b>Admin Phone:</b></label><input class="form-control p-4"   type="text"  required    value="<?php echo $result['contactno']; ?>"  name="contactno">	
 <label class="w3-left ml-0 w3-panel"> <b>Upload Profile Picture:</b></label><input class="form-control p-4"   type="file"      value="<?php echo $result['file']; ?>"  name="file"><br>	

<div><b class="w3-left ml-2">Update Permission:</b><br>
		<select class="form-control " name="status" >
			<option type="text" name="status" value="<?php echo $result['status']; ?>"><?php echo $result['status']; ?> </option>
			<option type="text" name="status" value="0"> Block Admin </option>
			<option type="text" name="status" value="1"> System Admin </option>
			<option type="text" name="status" value="2">Artical Manager</option>
			<option type="text" name="status" value="3"> Product Manager</option>
			<option type="text" name="status" value="4">Product & Artical Manager</option>
			
			
			

		</select></div><br><br>
	
	
										

	
	
	<div class="sign-up">

		<table class="w3-responsive" style="width: 100%;"><th ><input style="width: 100%; font-size: 30px;" type="submit" name="submit" class="form-control w3-green w3-hover-pink"  value="update Details" onClick="return confirm('Are you sure you want to update?');"></th>
			<th><input style="width: 100%; font-size: 30px;"  type="reset" class="form-control w3-hover-green w3-pink"  value="Reset">
									</th></table>
									
									
								</div>

	
	</form><br><br><br><br>



	 <?php
              # code...
            }
            ?>



  <?php include('footer.php'); ?>







<?php } ?>