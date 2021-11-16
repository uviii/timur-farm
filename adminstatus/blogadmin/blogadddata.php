<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "con";

$conn = mysqli_connect($servername , $username , $password ,$dbname);

if ($conn) {
	// echo "conetion ok";
	# code...
}else{echo "conection failed" .mysqli_connect_error();

}

?>

<?php 
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
	// print_r($destifile);

	move_uploaded_file($filepath, $destifile);
	
}
$sql="INSERT INTO `blogs`(`title`, `keyword`, `tags`, `content`, `photo`, `authers`, `categories`, `status`) VALUES ('$title','$keyword','$tags','$content','$destifile', '$authers','$categories','$status')";


// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
  echo "data inserted into database";
  
}

else{echo "failed to insert to database";
}
// header('location:registration.php');
}

 else { echo "not clicked register bottm";
}
?>



<!-- INSERT INTO `productadd`(`id`, `name`, `weight`, `price1`, `price2`, `tag`, `intro`, `keyword`, `benefit`, `ingredient`, `use`, `info`, `avail`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `sold_by`, `categories`, `status`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23]) -->

<!-- productcat -->





<!-- adminprofile -->



<?php 
session_start();
error_reporting(0);
if(isset($_POST['submit'])){


$name = $_POST['name'];
$country = $_POST['country'];
$state = $_POST['state'];
$district = $_POST['district'];
$city = $_POST['city'];
$local_ad = $_POST['local_ad'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$profession = $_POST['profession'];
$leval = $_POST['level'];
$file = $_FILES['photo'];



// print_r($file);


$filename = $file['name'];
$filepath = $file['tmp_name'];
$fileerror = $file['error'];

if ($fileerror == 0) {
	$destifile = 'uploade/' .$filename;
	print_r($destifile);

	move_uploaded_file($filepath, $destifile);
	}
	$sql = "INSERT INTO `admindetail`( `name`, `country`, `state`, `district`, `city`, `local_ad`, `phone`, `email`, `profession`, `level`, `photo`) VALUES ('$name','$country','$state','$district','$city', '$local_ad','$phone','$email','$profession','$leval','$destifile')";


// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {
  echo "data inserted into database";
  
}

else{echo "failed to insert to database";
}
// header('location:registration.php');
}

 else { echo "not clicked register bottm";
}
?>



