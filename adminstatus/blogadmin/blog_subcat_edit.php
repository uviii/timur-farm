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



<div class="row w3-container">
	<div class="col-lg-4 col-12 col-md-4"></div>
	<div class="col-lg-4 col-12 col-md-4"><form class="container" action="blog_subcat_eddit.php" method="POST"  enctype="multipart/form-data">
 

<div>
  <!--   <label><b>product name:</b></label><input  class="form-control" type="text" name="name"><br><br> -->
<div><b>categories name:</b>
    <select class="form-control " name="categories" >
        <?php 

            include("dbc.php");
             $id=$_GET['pid'];
            $selectquery = "SELECT*FROM `cat_b_sub`  WHERE id='$id'   ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>  
      <option type="text" name="categories" value="<?php echo $result['catid']; ?>">(<?php echo $result['catid']; ?>)<?php echo $result['categories']; ?></option>
       <?php
              # code...
            }
            ?>


      <?php 

           
            $selectquery = "SELECT*FROM  blog_categories ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
              
?>
      <option type="text" name="categories" value="<?php echo $result['name']; ?>">(<?php echo $result['id']; ?>)<?php echo $result['name']; ?></option>
       <?php
              # code...
            }
            ?>
             </select></div><br>
             <?php 

           
             $id=$_GET['pid'];
            $selectquery = "SELECT*FROM `cat_b_sub`  WHERE id='$id'   ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?> 

    <label><b>categories id:</b> </label><input  class="form-control" value="<?php echo $result['catid']; ?>" type="text" name="catid">
    <input  class="form-control" value="<?php echo $result['id']; ?>" type="hidden" name="id">
   
<!-- Button to Open the Modal -->
<button type="button" class="btn w3-text-red " data-toggle="modal" data-target="#qty" style="border:none; background: transparent;">
  <b>how to choose product ID? <span class="w3-text-blue">help</span></b>
</button>
    <br><br>
     
<label><b>subcategories name:</b></label><input  class="form-control" type="text" value="<?php echo $result['subcategories']; ?>" name="subcategories"><br>


</div>
   <?php
              # code...
            }
            ?>


       <div class="w3-panel form-control"><button class="w3-right form-control  w3-blue w3-hover-green"><input class="form-control w3-blue w3-hover-green" type="submit" name="submit" value="update" onClick="return confirm('Are you sure you want to update?');"></button></div>

  </form>


</div>
	<div class="col-lg-4 col-12 col-md-4"></div>
</div>


<br><br>

  <div class="container-fluid  w3-center w3-opacity w3-black w3-bottom">
  
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









