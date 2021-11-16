<?php 
include("dbc.php");
session_start();
error_reporting(0);
if(isset($_POST['submit'])){

$title = $_POST['title'];
$keyword = $_POST['keyword'];
$tags = $_POST['tags'];
$content = $_POST['content'];
$file = $_FILES['photo'];
$authers = $_POST['auther'];
$categories = $_POST['cat'];
$status = $_POST['post'];


// print_r($file);


$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];

if ($fileerror == 0) {
	$destifile = 'uploade/' .$filename;
	print_r($destifile);

	move_uploaded_file($filepath, $destifile);
	
}
$sql="INSERT INTO `blogs`(`title`, `keyword`, `tags`, `content`, `photo`, `authers`, `categories`, `status`) VALUES ('$title','$keyword','$tags','$content','$destifile', '$authers','$categories','$status')";


// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
   $_SESSION['action']=" congrate your New artical $title, Created successfully ....";
 header('location:blogview.php'); 
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>";
}
// header('location:registration.php');
}

?>
