
<?php  ?>

<!DOCTYPE html>
<html>
<head>

<title> kupindetimur | kupindedaha timur krishi farm pvt.ltd </title>
<meta name="keywords" content="kupindedaha lake,kupindedaha timur farm ,online shopping,krishi samagri,best organic product ,nepal,salyan ,karnali ,karnali pardesh,buy and sell agriculture product,fresh product,">
<meta name="discription" content=" ">
<!-- <meta name="auther" content="<?php echo $result['authers']; ?> "> -->

<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />

<?php include("link.php");?>
 
</head>
<body class="ml-2 mr-2">
<?php include("header.php");?>
<?php include("desktop_nav.php");?>

<br><br><br><br><br><br><br>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p><br>
	<div class="overflowWrap">
<?php include("mobile_nav.php");?>

<?php 
// include("desktop_nav.php");
?>
<br>

<?php include("slide.php");?>
<br><br>


<div class="row m-2">
	<div class="col-sm-4 w3-gree ">
	<div class="w3-center">
<img src="https://img.icons8.com/nolan/64/private2.png"/>
	</div>

		<div class="w3-center"><b class="w3-text-orange"> High secured & trusted </b></div>
			<div class="w3-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div>
	</div>
	<div class="col-sm-4 w3-gree ">
		<div class="w3-center">
<img src="https://img.icons8.com/nolan/50/delivery.png"/>
	</div>

	
		<div class="w3-center"><b class="w3-text-orange">Fast home delevery </b></div>
			<div class="w3-center">we provide home delevery fast as well as  all over the Nepal and other country </div>
	</div>
	<div class="col-sm-4 w3-gree ">
		<div class="w3-center"><img src="https://img.icons8.com/fluent/24/000000/card-in-use.png"/>

	</div>
		<div class="w3-center"><b class="w3-text-orange"> Easy payment method </b></div>
			<div class="w3-center">wwe accept eSewa for online payment and also cash on delevery</div>
	</div>
	
	</div> 

</div>

	<br>

	              
	<?php include("productcat.php");?>

	<hr>

<?php include("latestproduct.php");?>
<br><hr>
<?php include("latestnews.php");?>
<br>
<?php 
include("news_all.php");
?>



<br><hr>



<?php include("contactproduct.php");?>
<br></div>
<?php include("footer.php");?>


