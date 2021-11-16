
<?php 
 include("dbc.php");
  $id=$_GET['id'];

if(isset($_POST['submit'])){
 

$name = $_POST['name'];
 $ids=$_GET['id'];

$sq="UPDATE `blog_categories` SET `name`='$name' WHERE id='$ids'";   

// $sq="INSERT INTO `blog_categories`(`name`) VALUES ('$title')";


echo "$sq";
$dat = mysqli_query($conn ,$sq);

if($dat)
 {
  echo "data inse into database";
  
}

else{echo "failed to insert to database";
}
// header('location:registration.php');
}

 else { echo "not clicked register bottm";
}
?>