<?php
include("./adminstatus/blogadmin/dbc.php");

error_reporting(0);
if(isset($_POST['submit'])){


$pid = $_POST['pid'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$text = $_POST['text'];
$title = $_POST['title'];
$sql="INSERT INTO `comment_ad`( `pid` , `name` , `email`, `phone` , `title`,  `text` ,`status`) 
VALUES ('$pid','$name','$email','$phone','$title' ,'$text','0')";


// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {

 	
  echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
  
}

else{
	 echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
// header('location:registration.php');
}

 
?>



<section class="container">
  
  <div class="  row pt-4">
    <div class="w3-left " style="margin-left: 60px;"><h5 ><b class="w3-text-orange">please gives us your valuable comment and suggestion</b></h5></div><br>
    <hr>
    
<!-- <?php echo htmlentities($_SERVER['PHP_SELF']); ?> -->
<form class="pl-5"action="comment_send.php" method="POST"  enctype="multipart/form-data" >
    <div class="col-lg-6"><input type="name"  name="name" class="form-control pl-4" value="" class=" ml-4"  placeholder=" entter your full  name*" required></div><br>
    <div class="col-lg-6 "><input type="phone" name="phone" class="form-control pl-4 " value="" class=" ml-4 mr-1"  placeholder="enter your phone no. with country code(optional)*"></div><br>

    <div class="container form-group w3-center"><input type="email" name="email" class="form-control  " value="" class=" ml-4 mr-1" placeholder="enter your email id*"  required></div>

<div class="mr-5"><textarea class="ml-3  w3-round-large form-control  pl-5" cols="105" rows="5" name="text" placeholder="enter your Requirement detail/enquiry" required></textarea></div>



<div class="ml-5 pt-4">
<span class=" checkbox"><span class="checkbox validates-as-required" required><span class="list-item first last"><input type="checkbox" name="checkbox" value="I am not a Robot"><span class="pl-2">I am not a Robot</span></span></span> </span></div>

<div class="pt-4"><input type="submit" name="submit" value="send" class="ml-4 w3-round-large w3-medium w3-green form-control"></div>

<?php 

            include("./adminstatus/blogadmin/dbc.php");
            $id=$_GET['id'];
            $selectquery = "SELECT*FROM blogs WHERE id =$id";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>

                          

 
      <div class="col-lg-6 w3-hide"> 

        <div class="container form-group w3-center w3-hide"><input type="text" name="title" class="form-control  " value=" ( <?php echo htmlentities($result['id']) ?>)- <?php echo($result['title']) ?>" class=" ml-4 mr-1" ></div>

 <div class="container form-group w3-center w3-hide"><input type="text" name="pid" class="form-control  " value=" <?php echo($result['id']) ?>" class=" ml-4 mr-1" ></div>

</div>

              <br><br>    
       
         <?php
              # code...
            }
            ?>



  </form >
  

</section>
