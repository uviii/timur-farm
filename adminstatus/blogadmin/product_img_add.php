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
$iname = $_POST['iname'];
$type = $_POST['type'];
$intro = $_POST['intro'];
$youtube = $_POST['youtube'];
$file = $_FILES['file'];

$pid = $_POST['pid'];
 // <!-- INSERT INTO `product_img`(`id`, `pid`, `pname`, `iname`, `type`, `intro`, `file`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8]) -->
echo "$youtube";

print_r($file);


$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];

if ($fileerror == 0) {
  $destifile = 'uploade/' .$filename;
  print_r($destifile);

  move_uploaded_file($filepath, $destifile);
// INSERT INTO `gallery`(`id`, `content`, `photo`, `cat`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
}
$sql="INSERT INTO `product_img`(`pid`, `pname`, `iname`, `type`, `intro`, `file`, `youtube`) VALUES ('$pid','$pname','$iname','$type','$intro','$destifile','$youtube')";

// echo "$sql";
$data = mysqli_query($conn ,$sql);


if($data)

 { 
echo "inserted";
  $_SESSION['action1']=" weldone A New Image of $pname  added successfully ....";
 header('location:product_img_view.php');
}else{$_SESSION['action1']=" sorry  $pname failed to upload please try again ....!";
 header('location:product_img_view.php');
}

 
// header('location:registration.php');
}



?>





<?php include("header.php");?>

<?php include("link.php");?>
<br><br>
<div class="w3-left w3-container ml-3"><h5><a href="order_enquery_index.php"> <i class="fa fa-home"></i> go to front page</a></h5></div>
<br>

<div class="w3-center"><h2 class="w3-center"><b class="w3-center" >Product image vedio file upload</b></h2></div>

<hr>
<br>

<hr>



<div class="container">
  
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-6">

      <form class="container" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST"  enctype="multipart/form-data">
 

<div>

    <div ><b class="w3-left">product name:</b>
    <select class="form-control " name="pname" >
      <option type="text" name="pname" > -select- </option>
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
    <label class="w3-left"><b>product id:</b> </label><input  class="form-control" placeholder="choose product id from product name" required type="text" name="pid">
<!-- Button to Open the Modal -->
<button type="button" class="btn w3-text-red " data-toggle="modal" data-target="#qty" style="border:none; background: transparent;">
  <b>how to choose product ID? <span class="w3-text-blue">help</span></b>
</button>
    <br><br>
    <div ><b class="w3-left">file type:</b>
    <select class="form-control " name="type" required >
      <option type="text" name="type" >-select-</option>
      <option type="text" name="type" value="1">image</option>
      <option type="text" name="type" value="2"> vedio</option>
       <option type="text" name="type" value="0">youtube vedio</option>
     
    </select></div>
    <details>vedio shold be less then 8 Mb for direct file uploade</details><br>
     
<label class="w3-left"><b> file name:</b></label><input  class="form-control" type="text" placeholder="enter image name (same as product name)" required name="iname"><br>


<label class="w3-left"><b>into of image:</b></label><input class="form-control" placeholder="enter introduction maxi 30 word" type="text" required name="intro"><br>
<label class="w3-left"><b>You tube URL:</b></label><input class="form-control" placeholder=" youtube URL if you uploading from youtube" type="text" name="youtube">
<details>copy youtube url from your you tube chanal than insert here, eg.https://www.youtube.com/watch?v=ncUSdi4Hgv0</details><br>
<label class="w3-left"><b>choose image or vedio:</b></label><input  class="form-control" type="file" placeholder="enter offer price from you" name="file"><details>you should't choose file if you insert youtube Url</details><br>


</div>


       <div class="w3-panel form-control"><button class="w3-right form-control  w3-blue w3-hover-green"><input class="form-control w3-blue w3-hover-green" type="submit" name="submit" value="upload"></button></div>
    <button class="w3-right mr-3"><input type="submit" name="submit" value="cancel"></button>
  </form></div>
<div class="col-sm-3"></div>

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


