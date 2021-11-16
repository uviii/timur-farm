<?php include("dbc.php");?>
<?php

$id= $_GET['id'];
$deletequery = "DELETE FROM blog_categories where id=$id";
$query= mysqli_query($conn,$deletequery);



if ($query) {

?>

<script> alert("deleted successfully"</script>
<?php
	# code...
}
else{
	?>
	<script>alert("sorry delete fail</script>
	<?php
}

// header('location:categories.php')
?>


<!-- producrt -->

<?php include("dbc.php");?>
<?php

$id= $_GET['id'];
$deletequery = "DELETE FROM productcat where id=$id";
$query= mysqli_query($conn,$deletequery);



if ($query) {

?>

<script> alert("deleted successfully");</script>
<?php
	# code...
}
else{
	?>
	<script>alert("sorry delete fail");</script>
	<?php
}

// header('location:categories.php')
?>



<!-- deletfile of product cat intro -->

<?php

$id= $_GET['id'];
$deletequery = "DELETE FROM herb where id=$id";
$query= mysqli_query($conn,$deletequery);



if ($query) {

?>

<script> alert("deleted successfully"</script>
<?php
  # code...
}
else{
  ?>
  <script>alert("sorry delete fail</script>
  <?php
}

header('location:product_index.php')
?>


<!-- delet admin acount -->



