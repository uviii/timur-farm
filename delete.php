
<!-- producrt -->

<?php require_once("./adminstatus/blogadmin/dbc.php");?>
<?php

$id= $_GET['id'];
$deletequery = "DELETE FROM `order` WHERE  id=$id";
$query= mysqli_query($conn,$deletequery);



if ($query) {

?>

<script> alert("removed successfully");</script>
<?php
	# code...
}
else{
	?>
	<script>alert("sorry ! somthing wrong please try again");</script>
	<?php
}

// header('location:categories.php')
?>