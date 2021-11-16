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
$name = $_POST['name'];
$bname = $_POST['bname'];
$account = $_POST['account'];
$country = $_POST['country'];
$branch = $_POST['branch'];
$ifsc = $_POST['ifsc'];
$type = $_POST['type'];

 // <!-- INSERT INTO `payments`(`id`, `name`, `account`, `country`, `branch`, `ifsc`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7]) -->

$sql="INSERT INTO `payments`(`name`,`bname`, `account`, `country`, `branch`, `ifsc`, `type`) VALUES ('$name','$bname','$account','$country','$branch','$ifsc','$type')";


// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
  $_SESSION['action1']=" A New account of $bname,$branch, Nepal added successfully ....";
 header('location:payment_view.php');
}else{echo "<script>alert('sorry! failed to upload in database');</script>"; 
}

 
// header('location:registration.php');
}



?>





<?php include("header.php");?>

<?php include("link.php");?>
<br><br>
<div class="w3-left w3-container ml-3"><h5><a href="order_enquery_index.php"> <i class="fa fa-home"></i> go to front page</a></h5></div>
<br>

<div class="w3-center"><h2><b >payment method control</b></h2></div>

<hr>
<br>

<hr>

<div class="container">
  
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4"><form class="container" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"  enctype="multipart/form-data">
 

<div>
  <label><b>bank name:</b></label><input  class="form-control" type="text" name="bname"><br><br>
    <label><b>account holder name:</b></label><input  class="form-control" type="text" name="name"><br><br>
<label><b>account no:</b></label><input  class="form-control" type="text" name="account"><br><br>
<label><b>country:</b></label><input class="form-control" type="text" name="country"><br><br>
<label><b>branch:</b></label><input  class="form-control" type="text" name="branch"><br><br>
<label><b>ifsc code:</b></label><input  class="form-control" type="text" name="ifsc"><br><br>
<div><b>type of transaction:</b>
    <select class="form-control " name="type" >
      <option type="text" name="type" value="">choose type of account:</option>
      <option type="text" name="type" value="cash/bank/eSewa/khalti"> cash/bank/eSewa/khalti </option>
      <option type="text" name="type" value="paypal/"> paypal/</option>
    
      

    </select></div>
</div>

       <div class="w3-panel form-control"><button class="w3-right form-control  w3-blue w3-hover-green"><input class="form-control w3-blue w3-hover-green" type="submit" name="submit" value="upload"></button></div>
    <button class="w3-right mr-3"><input type="submit" name="submit" value="cancel"></button>
  </form></div>
<div class="col-sm-4"></div>

  </div>
</div>
<br>
<br><hr><hr>
<hr>
  <div class="container  w3-center w3-opacity w3-black">
  
    <div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>

<?php } ?>