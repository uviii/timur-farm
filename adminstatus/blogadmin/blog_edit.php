
<?php include("dbc.php");?>

<?php 
error_reporting(0);
session_start();
 include("dbc.php");

$id=$_POST['bid'];
$title = $_POST['title'];
$keyword = $_POST['keyword'];
$tags = $_POST['tags'];
$content = $_POST['content'];
$authers = $_POST['authers'];
$cat=$_POST['cat'];
$lang=$_POST['lang'];
$abst=$_POST['abst'];
$date=$_POST['date'];
$status = $_POST['post'];


 $file1=  $_FILES['photo'];

 $filename = $file1['name'];
$filepath = $file1['tmp_name'];
$fileerror = $file1['error'];
// echo $filename;
//  print_r($file1);
if ($filename =='') {
$sql="UPDATE `blogs` SET `title`='$title',`keyword`='$keyword',`tags`='$tags',`content`='$content'
,`authers`='$authers',`categories`='$cat',`status`='$status',`abst`='$abst',`date`='$date',`lang`='$lang'  WHERE id='$id'   ";

}else{

  if ($fileerror == 0 && $file1>0) {
  $destifile = 'uploade/' .$filename;
  // print_r($destifile);

  move_uploaded_file($filepath, $destifile);
  
}	$sql="UPDATE `blogs` SET `title`='$title',`keyword`='$keyword',`tags`='$tags',`content`='$content'
,`authers`='$authers',`categories`='$cat',`status`='$status',`photo`='$destifile',`abst`='$abst' ,`date`='$date',`lang`='$lang'  WHERE id='$id'   ";
}

// echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";
if($data)
 {
  // echo "inset";
   $_SESSION['action1']="your blog title $title value updated successfully. ....";
 header('location:blogview.php');
  echo "<script>alert('your database value updated successfully.');</script>"; 
  
}

else{$_SESSION['action1']="sorry ! anable to updatate ,try again. ....";
 header('location:blogview.php');
}

?>
























<!-- <?php include("dbc.php");  ?>



<?php 

	$id=$_POST['bid'];

	$title = $_POST['title'];
$keyword = $_POST['keyword'];
$tags = $_POST['tags'];
$content = $_POST['content'];
// $file = $_FILES['photo'];
$authers = $_POST['authers'];
$cat=$_POST['cat'];
$status = $_POST['post'];
echo "$cat";
	

$sql= " UPDATE `blogs` SET  `title`='$title',`keyword`=''$keyword,`tags`='$tags',`content`='$content',
`categories`='$cat' ,`authers`='$authers' WHERE id='$id' ";


echo "$sql";
$data = mysqli_query($conn ,$sql);
echo "$data";
if($data)
 {
  echo "<script>alert('your database value updated successfully.');</script>"; 
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}



?> -->