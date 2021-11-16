<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>
<?php 
 include("dbc.php");
// error_reporting(0);
if(isset($_POST['submit'])){
$pname = $_POST['pname'];
$pqty = $_POST['pqty'];
$unit = $_POST['unit'];
$price = $_POST['price'];
$offer = $_POST['offer'];
$avail = $_POST['avail'];
$pid = $_POST['pid'];


$sql="INSERT INTO `product_qty`(`pid`, `pname`, `pqty`, `unit`, `price`, `offer`, `avail`,`status`)VALUES ('$pid','$pname','$pqty','$unit','$price','$offer','$avail','0')";


// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)

 { 
// echo "$data";
  $_SESSION['action1']=" weldone A New size of $pname  added successfully ....";
 header('location:product_qty_view.php');
}else{$_SESSION['action1']=" sorry  $pname failed to upload please try again ....!";
 header('location:product_qty_view.php');
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
  <!--   <label><b>product name:</b></label><input  class="form-control" type="text" name="name"><br><br> -->
    <div><b>product naem:</b>
    <select class="form-control " name="pname" >
      <option type="text" name="pname" value="">choose a product:</option>
      <?php 
error_reporting(0);
            include("dbc.php");
            $selectquery = "SELECT*FROM  productadd WHERE status='publish' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
      <option type="text" name="pname" value=" <?php echo $result['name']; ?> "> (<?php echo $result['id']; ?>)  <?php echo $result['name']; ?> </option>
      <?php
              # code...
            }
            ?>
    
    </select></div>
    <label><b>product id:</b> </label><input  class="form-control" placeholder="choose product id from product name" type="text" name="pid">
<!-- Button to Open the Modal -->
<button type="button" class="btn w3-text-red " data-toggle="modal" data-target="#qty" style="border:none; background: transparent;">
  <b>how to choose product ID? <span class="w3-text-blue">help</span></b>
</button>
    <br><br>
     
<label><b>quantity:</b></label><input  class="form-control" type="text" placeholder="enter quantity" name="pqty"><br>
<div><b>unit:</b>
    <select class="form-control " name="unit" >
      
        <option type="text" name="unit" value="<?php echo $result['unit']; ?>">--select--</option>
        <option type="text" name="unit" value="Gm">Gm</option>
        <option type="text" name="unit" value="Kg"> Kg </option>
        <option type="text" name="unit" value="per">per</option>

      <option type="text" name="unit" value="Quintal">Quintal</option>
      
    
    </select></div><br>

<label><b>main price:</b></label><input class="form-control" placeholder="enter main market price" type="text" name="price"><br>
<label><b>offer price:</b></label><input  class="form-control" type="text" placeholder="enter offer price from you" name="offer"><br>

<div><b>availability:</b>
    <select class="form-control " name="avail" >
      <option type="text" name="avail" value="on stuck">on stuck</option>
      <option type="text" name="avail" value="out stuck"> out stuck </option>
     
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




<!-- The Modal -->
<div class="modal" id="qty">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">product id selection guide</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <ol>
         <li>frist select product name</li>
          <li>just starting line of product name there is some number</li>
           <li>that number is eg.<span class="w3-text-red">(123)</span><span class="w3-text-blue">salyani besar</span>,<span class="w3-text-red">(454)</span><span class="w3-text-blue">timur xup</span></li>
            <li>this number <span class="w3-text-red">123</span>,<span class="w3-text-red">123</span>indicate product Id</li>
            <li>copy that number and paste into product id section</li><br>
            <p class="w3-text-red"> dont choose wrong product id </p>
       </ol>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<?php } ?>


