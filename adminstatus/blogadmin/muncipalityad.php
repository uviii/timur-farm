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

<div class="w3-center container"><h2><b >shiping charge update control</b></h2></div>


<hr>
 
<?php 
$id=$_GET['id'];


            

          
            $selectqueryy = "SELECT*FROM  `shiping_charge` WHERE id =$id";
           
            $query = mysqli_query($conn , $selectqueryy) or die("error");
           

            $result= mysqli_fetch_array($query);
              
$district=$result['district'];
$country=$result['country'];
$charge_nepal=$result['charge_nepal'];
$state=$result['state'];
$contact=$result['contact'];
$service=$result['service'];
$courier=$result['courier'];
$currency=$result['currency'];
$munci=$result['munci'];
$id=$result['id'];
// echo $id;
 ?>
<div class="container">
  
  <div class="row">
    <div class="col-sm-12 col-lg-4 col-md-12 col-12"></div>
    <div class="col-sm-12 col-lg-4 col-md-12 col-12"><form class="container" action="muncipaladd.php" method="POST"  enctype="multipart/form-data">
 

<div>


  <label class="w3-left"><b>country name :</b></label>
<select class="form-control" name="country">
  <option value="<?php echo $country ?>"><?php echo $country ?></option>
  <?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM `shiping_charge` where charge_other='country' order by id desc ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
              
?>
  <option value="<?php echo $result['country']; ?>" name="country"><?php echo $result['country']; ?></option>


 <?php
              # code...
            }
            ?>

  <option value=""></option>
</select>
  <br>
    <label class="w3-left"><b>state name :</b></label><select class="form-control" name="state">
  <option value="<?php echo $state ?>"><?php echo $state ?></option>
  <?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM `state` where country='Nepal' order by id desc ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
              
?>
  <option value="<?php echo $result['state']; ?>" name="state"><?php echo $result['state']; ?></option>


 <?php
              # code...
            }
            ?>

  <option value=""></option>
</select><br>
      <label class="w3-left"><b>district name :</b></label><input  class="form-control" value="<?php echo $district ?>" type="text" name="district"><br>
  
<label class="w3-left"><b>shiping chage :</b></label><input  class="form-control" type="text" name="charge_nepal" value="<?php echo $charge_nepal ?>"><br>
<label class="w3-left"><b>muncipality/rural:</b></label><input class="form-control" value="<?php echo $munci ?>" type="text" name="munci"><br>

   <div class="w3-panel form-control"><button class="w3-right form-control  w3-blue w3-hover-green"><input class="form-control w3-blue w3-hover-green" type="submit" name="submit" value="upload"></button></div>
<input class="form-control" placeholder="enter warda for <?php echo $munci ?>" type="hidden" name="warda"><br>

<label class="w3-left"><b>currency:</b></label><input  class="form-control" type="text" value="<?php echo $currency ?>" name="currency"><br>
<label class="w3-left"><b>courier service provider name:</b></label><input  class="form-control"value="<?php echo $courier ?>" type="text" name="courier"><br>
<label class="w3-left"><b>special_service:</b></label><input  class="form-control" value="<?php echo $service ?>" type="text" name="service"><br>
<label class="w3-left"><b>contact info:</b></label><input  class="form-control" value="<?php echo $contact?>" type="text" name="contact"><br>
<label class="w3-left"><b>select staturs:</b></label>
<select type="text" name="charge_other" id="tsubjects" value="" class="form-control" required="true">
  <option value="muncipality" name="charge_other">muncipality</option>
<option value="warda" name="charge_other">warda</option>
<option value="district nepal" name="charge_other">district nepal</option>
<option value="country" name="charge_other">country</option>
<option value="">-Select-</option>
<option value="country" name="charge_other">country</option>
<option value="district" name="charge_other">district</option>
<option value="Magazine" name="charge_other">Daily & National Magazine</option>
<option value="link" name="charge_other">Online Aritcal And Resources link</option>
<option value="" name="charge_other"></option>
  </select><br>
</div>
<!-- 
   <div class="w3-panel form-control"><button class="w3-right form-control  w3-blue w3-hover-green"><input class="form-control w3-blue w3-hover-green" type="submit" name="submit" value="upload"></button></div> -->   
  
  </form></div>
<div class="col-sm-12 col-lg-4 col-md-12 col-12"></div>

  </div>
</div>
<br>
<br><hr><hr>
<hr>
  <div class="container  w3-center w3-opacity w3-black">
  
    <div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>

<?php } ?>