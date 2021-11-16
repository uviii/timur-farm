
<?php include("dbc.php");?>

<?php 

 include("dbc.php");






$id=$_POST['id'];
 $content = $_POST['content'];

$cat = $_POST['cat'];
 $file1=  $_FILES['photo'];

 $filename = $file1['name'];
$filepath = $file1['tmp_name'];
$fileerror = $file1['error'];

 // print_r($file1);
if ($filename=='') {
// UPDATE `gallery` SET `id`=[value-1],`content`=[value-2],`photo`=[value-3],`cat`=[value-4],`date`=[value-5] WHERE 1

  // $sql=" INSERT INTO `gallery`(`content`, `photo`, `cat`) VALUES ('$content','$destifile','$cat')";


	$sql="UPDATE `gallery` SET  `content`='$content'

 WHERE id='$id'   ";

}else{

  if ($fileerror == 0 && $file1>0) {
  $destifile = 'uploade/' .$filename;
  print_r($destifile);

  move_uploaded_file($filepath, $destifile);
  
}	$sql="UPDATE `gallery` SET  `content`='$content',`photo`='$destifile'

 WHERE id='$id'   ";
}

// echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";
if($data)
 {
  echo "<script>alert('your database value updated successfully.');</script>"; 
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

?>

