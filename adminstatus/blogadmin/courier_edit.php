<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>


<?php include("header.php");?>

<?php include("link.php");?>
<br><br>
<div class="w3-left w3-container ml-3 "><h5><a href="order_enquery_index.php"> <i class="fa fa-home"></i> go to front page</a></h5></div>
<br><br>

<div class="w3-center container"><h2><b style="font-weight: bold; font-size: 23px; color: green;">Muncipality level shiping charge update</b></h2></div>


<hr style="border-bottom: 2px dotted green;">
 
<?php 
$id=$_GET['id'];


            

          
            $selectqueryy = "SELECT*FROM  `courier` WHERE id =$id";
           
            $query = mysqli_query($conn , $selectqueryy) or die("error");
           

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
// echo $id;
 ?>
<div class="container">
  
  <div class="row">
    <div class="col-sm-12 col-lg-2 col-md-12 col-12"></div>
    <div class="col-sm-12 col-lg-8 col-md-12 col-12"><form class="container" action="courier_ediit.php" method="POST"  enctype="multipart/form-data">
 

<div>
<input type="hidden" name="id" value="<?php echo $id; ?>">
  <label class="w3-left"><b>Courier Provider :</b></label>
<select class="form-control" name="district">
  
  <option value="<?php echo $district; ?>"><?php echo $district; ?></option>
  

  <option value=""></option>
</select>
<br>
<label class="w3-left"><b>Country:</b></label><input  class="form-control" type="text" value="<?php echo $charge_nepal ?>" name="charge_nepal"><br>
  <label class="w3-left"><b>District :</b></label>
<select class="form-control" name="country">
  
  <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
  

  <option value=""></option>
</select>
  <br>
  <label class="w3-left"><b>Local Add:</b></label><input  class="form-control" type="text" value="<?php echo $currency ?>" name="currency"><br>
  <label class="w3-left"><b>Phone:</b></label><input  class="form-control"value="<?php echo $courier ?>" type="text" name="courier"><br>
    <label class="w3-left"><b>Email:</b></label><input  class="form-control" value="<?php echo $service ?>" type="text" name="service"><br>
    <label class="w3-left"><b>Contact Person:</b></label><input  class="form-control" value="<?php echo $contact ?>" type="text" name="contact"><br>
      <!-- <label class="w3-left"><b>district name :</b></label><input  class="form-control" value="<?php echo $district ?>" type="text" name="district"><br> -->

    
  

<!-- <label class="w3-left"><b>muncipality/rural:</b></label><input class="form-control" value="<?php echo $munci ?>" type="text" name="munci"><br> -->

<div class="w3-panel form-control"><button class="w3-right form-control  w3-blue w3-hover-green"><input class="form-control w3-blue w3-hover-green" type="submit" name="submit" value="upload"></button></div> 





   <!-- <div class="w3-panel form-control"><button class="w3-right form-control  w3-blue w3-hover-green"><input class="form-control w3-blue w3-hover-green" type="submit" name="submit" value="upload"></button></div>  -->  
  
  </form></div>
<div class="col-sm-12 col-lg-2col-md-12 col-12"></div>

  </div>
</div>
<br>
<hr>
<br>
  <div class="container  w3-center w3-opacity w3-black">
  <?php include('footer.php') ?>
</div>

<?php } ?>