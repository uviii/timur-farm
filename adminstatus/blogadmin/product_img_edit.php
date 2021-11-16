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
             $idn=$_GET['pid'];
            $selectquery = "SELECT*FROM `product_img`  WHERE id='$idn'   ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>  

<div class="row w3-container">
  <div class="col-lg-4 col-12 col-md-4"></div>
  <div class="col-lg-4 col-12 col-md-4"> <form class="container" action="product_img_eddit.php" method="POST"  enctype="multipart/form-data">
 

<div>
<input type="hidden" value="<?php echo $result['id']; ?>" name="img">
    
    <label><b>product id:</b> </label><input  class="form-control" value="<?php echo $result['pid']; ?>" type="text" name="pid">

    <br>
    <div><b>choose type of file:</b>
    <select class="form-control " name="type" >
      <option type="text" name="type" value="<?php echo $result['type']; ?>"><?php echo $result['type']; ?></option>
       <option type="text" name="type" value="1">image</option>
      <option type="text" name="type" value="2"> vedio</option>
      <option type="text" name="type" value="0"> youtube vedio</option>
     
    </select></div>
    <details>vedio shold be less then 8 Mb for direct file uploade</details><br>
     
<label><b> file name:</b></label><input  class="form-control" type="text" value="<?php echo $result['iname']; ?>" name="iname"><br>


<label><b>into of image:</b></label><input class="form-control " value="<?php echo $result['intro']; ?>" type="text" name="intro"><br>
<label><b>You tube URL:</b></label><input class="form-control" placeholder=" youtube URL if you uploading from youtube" value="<?php echo $result['youtube']; ?>" type="text" name="youtube">
<details>copy youtube url from your you tube chanal than insert here, eg.https://www.youtube.com/watch?v=ncUSdi4Hgv0</details><br>
<label><b>choose image or vedio:</b></label><input  class="form-control" type="file" value="<?php echo $result['file']; ?>" name="file"><br>


</div>


       <div class="w3-panel form-control"><button class="w3-right form-control  w3-blue w3-hover-green"><input class="form-control w3-blue w3-hover-green" type="submit" name="submit" value="upload"></button></div>
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









