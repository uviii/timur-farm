<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>


<?php include("header.php");?>

<?php include("link.php");?>
<br><br>

<div class="w3-center"><h2><b >categories introduction</b></h2></div>

<hr>
<br>

<hr>
 

<div class="container">

  


 <?php 
   $catid=$_GET['id'];

            include("dbc.php");

          
            $selectquery = "SELECT*FROM herb  WHERE id =$catid";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
           $result= mysqli_fetch_array($query);
              

 
?>       
  
    <form class="container" action="medicinal_edit.php" method="POST"  enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo($catid); ?>">
   <div><label> <b>content   :</b></label> <textarea  name="content" id="text" class=" container w3-round-large form-control ckeditor pl-" cols="105" rows="3" placeholder="write your artical here" name="content" ><?php echo htmlentities($result['content']);?> </textarea></div><br><br>
<input type="hidden" name="id" value="<?php echo htmlentities($result['id']);?>">
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
   <?php
              # code...
            
            ?>
</div>
<br>
<br><hr><hr>
<hr>

<?php 
include("dbc.php");
error_reporting(0);
if(isset($_GET['submit']))
{
  $id=$_GET['id'];
 
  $content = $_GET['content'];
   $cat = $_GET['cat'];


// UPDATE `blog_categories` SET `id`=[value-1],`name`=[value-2],`date`=[value-3] WHERE 1 



$sql=" UPDATE `herb` SET `content`='$content',`cat`='$cat' WHERE id='$id'  ";


// echo "$sql";
$data = mysqli_query($conn ,$sql);
echo "$data";
if($data)
 {
  echo "<script>alert('your database value updated successfully.');</script>"; 
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

 else {   
}
?>

  <div class="container  w3-center w3-opacity w3-black">
  
    <div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>

<?php } ?>