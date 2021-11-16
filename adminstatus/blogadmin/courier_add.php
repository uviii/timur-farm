<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>
<?php 
 include("dbc.php");
error_reporting(0);
if(isset($_POST['submit'])){
$country = $_POST['country'];
$district = $_POST['district'];
$charge_nepal = $_POST['charge_nepal'];
$currency = $_POST['currency'];
$courier = $_POST['courier'];
$service = $_POST['service'];
$contact = $_POST['contact'];
$charge_other = $_POST['charge_other'];
// INSERT INTO `shiping_charge`(`id`, `country`, `district`, `charge_nepal`, `currency`, `courier`, `service`, `contact`, `charge_other`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])
$sql="INSERT INTO `courier`( `country`, `district`, `charge_nepal`, `currency`, `courier`, `service`, `contact`, `charge_other`)  VALUES ('$country','$district','$charge_nepal','$currency','$courier','$service','$contact','$charge_other')";


// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
  // $_SESSION['action1']=" A New shiping charge for $country added successfully ....";
 header('location:shiping_charge_add.php');
  
}else{echo "<script>alert('sorry! failed to upload in database');</script>"; 
}

 
// header('location:registration.php');
}



?>

<?php include("header.php");?>

<?php include("link.php");?>
<br><br>
<div class="w3-left w3-container ml-3 "><h5><a href="order_enquery_index.php"> <i class="fa fa-home"></i> go to front page</a></h5></div>
<br><br>

<div class="w3-center container"><h2><b >Courier service Management control</b></h2></div>


<hr style="border-bottom: 2px dotted green;">
<br><br>
 

<div class="container">
  
  <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8"><form class="container" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"  enctype="multipart/form-data">
 

<div>
  <label class="w3-left"><b class=""> Name of Courier Provider:</b></label><input  class="form-control" type="text" placeholder="eg.sajha express " name="district"><br>

   

   <label class="w3-left"><b class="">Contact Person:</b></label><input  class="form-control" placeholder="contact person full Name" type="text" name="contact"><br>
<label class="w3-left"><b class="">Country Name:</b></label><input  placeholder="Which Country Its Office " class="form-control" type="text" name="charge_nepal"><br>
<label class="w3-left"><b class="">District Name :</b></label><input class="form-control" placeholder="District Name" type="text" name="country"><br>

<label class="w3-left"><b class="">Local Address:</b></label><input  class="form-control" placeholder="Local Address" type="text" name="currency"><br>
<label class="w3-left"><b class=""> Phone number:</b></label><input  class="form-control" type="text" placeholder="contact no" name="courier"><br>
<label class="w3-left"><b class="">Email Address:</b></label><input  class="form-control" placeholder="Email id" type="text" name="service"><br>

<label class="w3-left"><b class="">select staturs:</b></label>
<select type="text" name="charge_other" id="tsubjects" value="" class="form-control" required="true">
<option >courier</option>

<option ></option>
  </select><br>
</div>

<div class="w3-panel form-control"><button class="w3-right form-control  w3-blue w3-hover-green"><input class="form-control w3-blue w3-hover-green" type="submit" name="submit" ></button></div>
      
    <!-- <button class="w3-right mr-3"><input type="submit" name="submit" value="cancel"></button> -->
  </form></div>
<div class="col-sm-2"></div>

  </div>
</div>
<br>
<br><hr><hr>
<hr>
  <div class="container  w3-center w3-opacity w3-black">
  
    <div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>

<?php } ?>