

<?php  ?>

<!DOCTYPE html>
<html>
<head>

<title> kupindetimur | order product |  kupindedaha timur krishi farm pvt.ltd </title>
<meta name="keywords" content="kupindedaha lake,kupindedaha timur farm ,online shopping,krishi samagri,best organic product ,nepal,salyan ,karnali ,karnali pardesh,buy and sell agriculture product,fresh product,">
<meta name="discription" content=" ">
<!-- <meta name="auther" content="<?php echo $result['authers']; ?> "> -->


<?php include("link.php");?>
 <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
</head>
<body class="mr-2 ml-2">
<?php include("header.php");?>
<?php include("desktop_nav.php");?>
<br><br><br><br><br><br><br><br><br><br>
<?php include("mobile_nav.php");?>

</style>

 <h2 class="w3-center"><b style="color: orange;"> Your Wish  List </b></h2>
<hr>

<form method="POST" action=""enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit" name="shiping">
</form>


  <?php include('footer.php') ?>

<?php 
 include("./adminstatus/blogadmin/dbc.php");
// error_reporting(0);
if(isset($_POST['shiping']))
{
  $id=$_POST['file'];
echo $id;
  
  
}
?>