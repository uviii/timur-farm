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
// INSERT INTO `comment_ad`(`id`, `pid`, `name`, `email`, `phone`, `title`, `text`, `date`, `status`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])

// INSERT INTO `comment_ad`(`id`, `name`, `email`, `phone`, `title`, `text`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])

$sql="INSERT INTO `comment_ad`( `pid` , `name` , `email`, `phone` , `title`,  `text`) 
VALUES ('$pid','$name','$email','$phone','$title' ,'$text')";



$data = mysqli_query($conn ,$sql);
// echo "$sql";
if($data)
 {

  
  echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
  header('location:blog.php');
  
}

else{
   echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
// header('location:registration.php');
}

 
?>   