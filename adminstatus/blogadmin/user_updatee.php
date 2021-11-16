
<?php 
include("dbc.php");
;
if(isset($_GET['submit']))
{
	$id=$_GET['id'];
 
  $name = $_GET['name'];

// UPDATE `blog_categories` SET `id`=[value-1],`name`=[value-2],`date`=[value-3] WHERE 1 



$sql=" UPDATE `blog_categories` SET `name`='$name' WHERE id='$id'  ";


// echo "$sql";
$data = mysqli_query($conn ,$sql);
echo "$data";
if($data)
 {
  echo "<script>alert('your database value updated successfully.');</script>"; 
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
// header('location:registration.php');
}

 else {   
}
?>