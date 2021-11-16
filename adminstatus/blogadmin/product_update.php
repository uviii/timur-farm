<?php include("dbc.php");?>

<?php 
session_start();
 include("dbc.php");


$id=$_POST['id'];
$name = $_POST['name'];
$weight = $_POST['weight'];
$price1 = $_POST['price1'];
$price2 = $_POST['price2'];
$tag = $_POST['tag'];
$tar = $_POST['tar'];
$packaging = $_POST['packaging'];
$ingredient = $_POST['ingredient'];
$intro = $_POST['intro'];
$keyword = $_POST['keyword'];
$benefit = $_POST['benefit'];
$sold_by = $_POST['sold_by'];
$code = $_POST['code'];
$imported = $_POST['imported'];
$organic = $_POST['organic'];
$origin = $_POST['origin'];
$qlty = $_POST['qlty'];
$cat = $_POST['cat'];
 $file1=  $_FILES['photo1'];

 $filename = $file1['name'];
$filepath = $file1['tmp_name'];
$fileerror = $file1['error'];


 // print_r($file1);

if ($filename=='') {
	$sql="UPDATE `productadd` SET `name`='$name',
`weight`='$weight',
`price1`='$price1',
`price2`='$price2',
`tag`='$tag',
`intro`='$intro',
`keyword`='$keyword',
`benefit`='$benefit',
`sold_by`='$sold_by',
`categories`='$cat',
`code`='$code',
`qlty`='$qlty',
`tar`='$tar',
`imported`='$imported',
`organic`='$organic',
`packaging`='$packaging',
`origin`='$origin',
`ingredient`='$ingredient'
 WHERE id='$id'   ";

}else{

  if ($fileerror == 0 && $file1>0) {
  $destifile = 'uploade/' .$filename;
  // print_r($destifile);

  move_uploaded_file($filepath, $destifile);
  
}


$sql="UPDATE `productadd` SET `name`='$name',
`weight`='$weight',
`price1`='$price1',
`price2`='$price2',
`tag`='$tag',
`tar`='$tar',
`intro`='$intro',
`keyword`='$keyword',
`benefit`='$benefit',
`sold_by`='$sold_by',
`categories`='$cat',
`code`='$code',
`qlty`='$qlty',
`imported`='$imported',
`organic`='$organic',
`packaging`='$packaging',
`origin`='$origin',
`ingredient`='$ingredient'
,`photo1`='$destifile'
 WHERE id='$id'   ";
}

// echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";
if($data)
 {
 	// echo "insert";
   $_SESSION['action1']=" congratulation! your  product $name, updated successfully ....";
 header('location:prooduct_view.php'); 
  
}

else{

 $_SESSION['action1']=" sorry! your product $name, has not updated ,please try again ....";
 header('location:prooduct_view.php'); 

}

?>
