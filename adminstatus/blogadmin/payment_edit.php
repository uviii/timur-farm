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
<div class="w3-center"> <h1><b>payment_method control panel</b></h1></div>
<hr>


<?php 
 
            include("dbc.php");
           $id=$_GET['pid'];
            $selectquery = "SELECT*FROM `payments` WHERE id='$id'  ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
		
		
		
	<form class="container" action="payment_eddit.php" method="POST"  enctype="multipart/form-data">
 

<div>

  <label><b>bank name:</b></label><input  class="form-control" type="text" value="<?php echo $result['bname']; ?>"  name="bname"><br><br>
  <input  class="form-control" type="hidden" value="<?php echo $result['id']; ?>"  name="id">
    <label><b>account holder name:</b></label><input  class="form-control" type="text" value="<?php echo $result['name']; ?>"  name="name"><br><br>
<label><b>account no:</b></label><input  class="form-control" type="text" value="<?php echo $result['account']; ?>"  name="account"><br><br>
<label><b>country:</b></label><input class="form-control" type="text" value="<?php echo $result['country']; ?>"  name="country"><br><br>
<label><b>branch:</b></label><input  class="form-control" type="text" value="<?php echo $result['branch']; ?>"  name="branch"><br><br>
<label><b>ifsc code:</b></label><input  class="form-control" type="text" value="<?php echo $result['ifsc']; ?>"  name="ifsc"><br><br>
<div><b>type of transaction:</b>
    <select class="form-control " name="type" >
      <option type="text" name="type" value="<?php echo $result['type']; ?>"><?php echo $result['type']; ?></option>
      <option type="text" name="type" value="cash/bank/eSewa/khalti"> cash/bank/eSewa/khalti </option>
      <option type="text" name="type" value="paypal/"> paypal/</option>
    
      

    </select></div>
</div>

       <div class="w3-panel form-control"><button class="w3-right form-control  w3-blue w3-hover-green"><input class="form-control w3-blue w3-hover-green" type="submit" name="submit" value="update" onClick="return confirm('Are you sure you want to update?');"></button></div>
    <button class="w3-right mr-3"><input type="submit" name="submit" value="cancel"></button>
  </form>



	 <?php
              # code...
            }
            ?>



  <div class="container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>


<?php } ?>









