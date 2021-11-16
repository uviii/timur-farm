

<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>



<?php include("dbc.php");?>
<?php
$img=$_POST['img']; 

$iname = $_POST['iname'];
$type = $_POST['type'];
$intro = $_POST['intro'];
$youtube = $_POST['youtube'];

$file = $_FILES['file'];


 $file=  $_FILES['file'];

 $filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];
 // print_r($file);
if ($filename=='') {

$sql="UPDATE `product_img` SET `iname`='$iname',`type`='$type',`intro`='$intro',`youtube`='$youtube' ,`file`='00' WHERE id=$img";


	



}else{

  if ($fileerror == 0 && $file>0) {
  $destifile = 'uploade/' .$filename;
  // print_r($destifile);

  move_uploaded_file($filepath, $destifile);
  
}
$sql="UPDATE `product_img` SET `iname`='$iname',`type`='$type',`intro`='$intro',`file`='$destifile' ,`youtube`='00' WHERE id=$img";

}


// $sql="UPDATE `product_qty` SET `iname`='$iname',`type`='$type',`intro`='$intro',`file`='$file' WHERE id=$img";


// echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";
if($data)
 {
 	// echo "update";
 $_SESSION['action1']=" your product $pname, updated successfully ....";
 header('location:product_img_view.php'); 
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
// header('location:registration.php');


?>


<?php } ?>





