<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>
<?php include("dbc.php");?>
<?php 
error_reporting(0);
$id=$_GET['id'];

if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$country=$_POST['country'];
	$state=$_POST['state'];
	$district=$_POST['district'];
	$charge_nepal=$_POST['charge_nepal'];
	$charge_other=$_POST['charge_other'];
	$currency=$_POST['currency'];
	$courier=$_POST['courier'];
	$service=$_POST['service'];
		$contact=$_POST['contact'];

// UPDATE `shiping_charge` SET `id`=[value-1],`country`=[value-2],`state`=[value-3],`district`=[value-4],`munci`=[value-5],`charge_nepal`=[value-6],`currency`=[value-7],`courier`=[value-8],`service`=[value-9],`contact`=[value-10],`charge_other`=[value-11],`date`=[value-12] WHERE 1
$sql="UPDATE `shiping_charge` SET `state`='$state',`country`='$country',`district`='$district',`charge_nepal`='$charge_nepal',`charge_other`='$charge_other',`currency`='$currency',`courier`='$courier',`service`='$service',`contact`='$contact' WHERE id=$id   ";


// echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";
if($data)
 {

 	$_SESSION['action1']="your requested data value updated successfully..!";
 	header('location:shiping_charge_view.php');
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
// header('location:registration.php');
}

 else {   
}
?>
<?php include("header.php");?>
<?php include("link.php");?>
<br>

<hr>
<div class="w3-center"> <h1><b>user control panel</b></h1></div>
<hr>



<?php 
$id=$_GET['id'];

            include("dbc.php");

          
            $selectquery = "SELECT*FROM  `shiping_charge` WHERE id =$id";
           
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result= mysqli_fetch_array($query);

 $district=$result['district'];
$country=$result['country'];
$state=$result['state'];
$warda=$result['warda'];
$charge_nepal=$result['charge_nepal'];
$contact=$result['contact'];
$service=$result['service'];
$courier=$result['courier'];
$currency=$result['currency'];
$munci=$result['munci'];
$charge_other=$result['charge_other'];
$id=$result['id'];
              
?>

	
		
	<form name="" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> " enctype="multipart/form-data" class="container ">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<label class="w3-left ml-0 w3-panel"> <b>country name:</b></label><input style="  cursor:not-allowed; " class="form-control p-4"   type="text"     value="Nepal"  name="country">						
		<label class="w3-left ml-0 w3-panel"> <b>district name incase nepal:</b></label><input class="form-control p-4"   type="text"     value="<?php echo $district; ?>"  name="district">

		<label class="w3-left ml-0 w3-panel"> <b>state of province:</b></label>
		<select class="form-control" name="state">
			<option value="<?php echo $state; ?>"><?php echo $state; ?></option>


     <?php 
     include('dbc.php');
   
               
              // INSERT INTO `state`(`id`, `country`, `state`) VALUES ([value-1],[value-2],[value-3])
             $selectquery = "SELECT*FROM state where country='Nepal' order by id desc ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
                ?>
                <option value="<?php echo $result['state'] ?>" name="state"><?php echo $result['state'] ?></option>
    
  
    
    <?php
              # code...
            }
            ?>

          
		</select>
		<br>
	<div class="sign-up">
	<input type="submit" name="submit" class="form-control w3-blue w3-hover-pink"  value="update" onClick="return confirm('Are you sure you want to update this ?');">
	</div><br><br>

	<label class="w3-left ml-0 w3-panel"> <b>currency:</b></label><input class="form-control p-4"   type="text"     value="<?php echo $currency; ?>"  name="currency">
	<label class="w3-left ml-0 w3-panel"> <b>courier service provider:</b></label><input class="form-control p-4"   type="text"     value="<?php echo $courier; ?>"  name="courier">
	<label class="w3-left ml-0 w3-panel"> <b>special service:</b></label><input class="form-control p-4"   type="text"     value="<?php echo $service; ?>"  name="service">
	<label class="w3-left ml-0 w3-panel"> <b>contactinfo:</b></label><input class="form-control p-4"   type="text"     value="<?php echo $contact; ?>"  name="contact">
	<label class="w3-left ml-0 w3-panel"> <b>charge shiping charge:</b></label><input class="form-control p-4"   type="text"     value="<?php echo $charge_nepal; ?>"  name="charge_nepal">
	<!-- <label class="w3-left ml-0 w3-panel"> <b>charge for other country:</b></label><input class="form-control p-4"   type="text"     value="<?php echo $result['charge_other']; ?>"  name="charge_other"> -->
	<label><b>status:</b></label>
<select type="text" name="charge_other" id="tsubjects" value="" class="form-control" required="true">
	<option value="district nepal" name="charge_other">district nepal</option>
	<option value="">-Select-</option>
	<option value="country" name="charge_other">country</option>
	<option value="<?php echo $charge_other; ?>">--select--</option>
<option value="district nepal" name="charge_other">district nepal</option>
<option value="Muncipality" name="charge_other">Muncipality</option>
<option value="Rural muncipality" name="charge_other">Rural muncipality</option>
  </select><br>
	<!-- <div class="sign-up">
	<input type="submit" name="submit" class="form-control w3-blue w3-hover-pink"  value="update" onClick="return confirm('Are you sure you want to update this ?');">
	</div><br><br>
 -->
	
	</form>



	 



  <div class="container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>




<?php } ?>









