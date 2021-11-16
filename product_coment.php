
          <?php
require_once("./adminstatus/blogadmin/dbc.php");




if(isset($_POST['review'])){


$pid = $_POST['pid'];
$postname = $_POST['postname'];
$email = $_POST['email'];
$name = $_POST['name'];

$text = $_POST['text'];

// INSERT INTO `product_comment`(`id`, `pid`, `postname`, `name`, `email`, `title`, `text`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])

$sql="INSERT INTO `product_comment`( `pid` , `postname` , `name` , `email`,`status`,  `text`) 
VALUES ('$pid','$postname','$name','$email','0' ,'$text')";


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