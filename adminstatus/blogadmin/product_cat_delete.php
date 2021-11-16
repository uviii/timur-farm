<?php include("dbc.php");?>
<?php

$id= $_GET['id'];
$deletequery = "DELETE FROM productcat where id=$id";
$query= mysqli_query($conn,$deletequery);



if ($query) {


	 $_SESSION['action1']=" deleted successfully ....";
 header('location:product_categories.php'); 


	# code...
}
else{
	?>
	<script>alert("sorry delete fail");</script>
	<?php
}

// header('location:categories.php')
?>