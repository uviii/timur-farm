<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>

<?php include("header.php");?>

<?php include("link.php");?>
<br>


<br><div> <h2 class="w3-center"><b> blog catagories update panel</b></h2></div>
<hr>
<br>




<?php 
include("dbc.php");
error_reporting(0);
if(isset($_GET['submit']))
{
  $id=$_GET['id'];
 
  $name = $_GET['name'];

// UPDATE `blog_categories` SET `id`=[value-1],`name`=[value-2],`date`=[value-3] WHERE 1 



$sql=" UPDATE `blog_categories` SET `name`='$name' WHERE id='$id'  ";


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

<hr>



 <?php 
   $catid=$_GET['id'];

            include("dbc.php");

          
            $selectquery = "SELECT*FROM blog_categories  WHERE id =$catid";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
           $result= mysqli_fetch_array($query);
              

 
?>        


<div class="container">

    <div><h2 class="w3-center"><b>blog</b></h2></div>

    <form class="container" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> " method="GET"  enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo($catid); ?>">
        <label><b>name:</b></label><input class="form-control" type="text" name="name" value=" <?php echo $result['name']; ?>">



        <div class="w3-panel"><button class="w3-right"><input type="submit" name="submit" value="update"></button>
        
    </form>
</div>
<br>
<br><hr><hr>
 <?php
              # code...
            
            ?>
<hr>











  <div class="container  w3-center w3-opacity w3-black">
  
    <div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>

<?php } ?>




