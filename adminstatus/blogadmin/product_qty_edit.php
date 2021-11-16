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
<div class="w3-center"> <h1 style="font-size: 25px; color: green;"><b>Product Qty Update Panel</b></h1></div>
<hr style="border-bottom: 2px dotted green;">

	<?php 

            include("dbc.php");
             $id=$_GET['pid'];
            $selectquery = "SELECT*FROM `product_qty`  WHERE id='$id'   ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>	

<div class="row w3-container">
	<div class="col-lg-4 col-12 col-md-4"></div>
	<div class="col-lg-4 col-12 col-md-4"><form class="container" action="product_qty_eddit.php" method="POST"  enctype="multipart/form-data">
 

<div>
  <!--   <label class="w3-left"><b>product name:</b></label><input  class="form-control" type="text" name="name"><br><br> -->

  <label class="w3-left"><b>prduct name:</b> </label><input  class="form-control" value="<?php echo $result['pname']; ?>" type="text" name="pname">
   <br>
    <label class="w3-left"><b>product id:</b> </label><input  class="form-control" value="<?php echo $result['pid']; ?>" type="text" name="pid">
   <input  class="form-control" value="<?php echo $result['id']; ?>" type="hidden" name="id">

<!-- Button to Open the Modal -->
<button type="button" class="btn w3-text-red " data-toggle="modal" data-target="#qty" style="border:none; background: transparent;">
  <b>how to choose product ID? <span class="w3-text-blue">help</span></b>
</button>
    <br>
     <div><b class="w3-left">unit:</b>
    <select class="form-control " name="unit" >
      
        <option type="text" name="unit" value="<?php echo $result['unit']; ?>">-<?php echo $result['unit']; ?>-</option>
        <option type="text" name="unit" value="Gm">Gm</option>
        <option type="text" name="unit" value="Kg"> Kg </option>
        <option type="text" name="unit" value="per">per</option>

      <option type="text" name="unit" value="Quintal">Quintal</option>
      
    
    </select></div><br>
<label class="w3-left"><b>Weight:</b></label><input  class="form-control" type="text" value="<?php echo $result['pqty']; ?>" name="pqty"><br>


<label class="w3-left"><b>main price:</b></label><input class="form-control" value="<?php echo $result['price']; ?>" type="text" name="price"><br>
<label class="w3-left"><b>offer price:</b></label><input  class="form-control" type="text" value="<?php echo $result['offer']; ?>" name="offer"><br>

<div><b class="w3-left">availability:</b>
    <select class="form-control " name="avail" >

      <option type="text" name="avail" value="<?php echo $result['avail']; ?>"><?php echo $result['avail']; ?></option>
      <option type="text" name="avail" value="on stuck">on stuck</option>
      <option type="text" name="avail" value="out stuck"> out stuck </option>
     
    </select></div>
</div>


       <div class="w3-panel form-control"><button class="w3-right form-control  w3-blue w3-hover-green"><input class="form-control w3-blue w3-hover-green" type="submit" name="submit" value="update" onClick="return confirm('Are you sure you want to update?');"></button></div>
    <button class="w3-right mr-3"><input type="submit" name="submit" value="cancel"></button>
  </form>


	 <?php
              # code...
            }
            ?>
</div>
	<div class="col-lg-4 col-12 col-md-4"></div>
</div>




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









