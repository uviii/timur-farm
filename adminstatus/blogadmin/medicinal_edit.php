
<?php 
session_start();
 include("dbc.php");
error_reporting(0);
if(isset($_POST['submit'])){
$id = $_POST['id'];

$content = $_POST['content'];
$cat = $_POST['cat'];


$sql="UPDATE `herb` SET `content`='$content' ,`cat`='$cat' where id='$id' ";


// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
 	// echo "inset";
 $_SESSION['action1']=" new discription of $cat  updated successfully ....";
 header('location:medicinal_add_view.php'); 
  
}

else{
	 $_SESSION['action1']=" sorry ! fail to update discription of $cat  ....";
 header('location:medicinal_add_view.php'); 
  
}
// header('location:registration.php');
}



?>