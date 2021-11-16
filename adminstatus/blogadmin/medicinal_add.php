
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


$content = $_POST['content'];
$cat = $_POST['cat'];

// INSERT INTO `herb`(`id`, `content`, `date`) VALUES ([value-1],[value-2],[value-3])

$sql="INSERT INTO `herb`(`content`,`cat`) VALUES ('$content','$cat')";


// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
  echo "<script>alert('data uploaded sussccessfully');</script>"; 
  
}else{echo "<script>alert('sorry! failed to upload in database');</script>"; 
}

 
// header('location:registration.php');
}



?>





<?php include("header.php");?>

<?php include("link.php");?>
<br><br>
<br><br>

<div class="container"><button style="border: transparent;"><a href="product_index.php"> <i class="fa fa-home"></i> go_product_index_page</a></button></div>
<br>
<div class="w3-center"><h2><b > Product categories introduction</b></h2></div>

<hr>
<br>

<hr>
 

<div class="container">
  
  <form class="container" action="medicinal_add.php" method="POST"  enctype="multipart/form-data">
   <div><label> <b>content   :</b></label> <textarea  name="content" id="text" class=" container w3-round-large form-control ckeditor pl-" cols="105" rows="3" placeholder="write your artical here" name="content" >write here general information and introduction of herb </textarea></div><br><br>

   <div><b>categories:</b>
    <select class="form-control " name="cat" >
      <option type="text" name="cat" value="posted">select a categories which you want to write categories introduction </option>
      
      <?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM productcat";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<option name="cat" value="<?php echo htmlentities($result['name']);?>"><?php echo htmlentities($result['name']);?></option>
  
     <?php
              # code...
            }
            ?>

    </select></div>

   <!-- <div class=""> <input type="text" class="form-control" name="cat" value="place here type of categories like masala herb, or nurssery"></div> -->
       <div class="w3-panel form-control"><button class="w3-right form-control  w3-blue w3-hover-green"><input class="form-control w3-blue w3-hover-green" type="submit" name="submit" value="upload"></button></div>
    <button class="w3-right mr-3"><input type="submit" name="submit" value="cancel"></button>
  </form>
</div>
<br>
<br><hr><hr>
<hr>
  <div class="container  w3-center w3-opacity w3-black">
  
    <div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>

<?php } ?>