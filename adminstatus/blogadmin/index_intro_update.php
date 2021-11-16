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
<div class="w3-center"> <h1><b>index intro</b></h1></div>
<hr>



<div class="row w3-container">
  <div class="col-lg-4 col-12 col-md-4"></div>
  <div class="col-lg-4 col-12 col-md-4"><form class="container" action="index_intro_edit.php" method="POST"  enctype="multipart/form-data">
 

<div>

  <?php 

           
             $id=$_GET['pid'];
            $selectquery = "SELECT*FROM `blog_sub_cat`  WHERE id='$id'   ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?> 

    <label><b>heading:</b> </label><input  class="form-control" value="<?php echo $result['cat']; ?>" type="text" name="cat"><br>
     <label><b>discription:</b> </label><input  class="form-control" value="<?php echo $result['subcat']; ?>" type="text" name="subcat"><br>
     <label><b>icon:</b> </label><input  class="form-control" value="<?php echo $result['date']; ?>"  type="text" name="date">
    <input  class="form-control" value="<?php echo $result['id']; ?>" type="hidden" name="id">
   
<!-- Button to Open the Modal -->
<br>
     
<!-- <img src="https://img.icons8.com/fluent/24/000000/card-in-use.png"/> -->


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


<?php } ?>









