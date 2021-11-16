<html>
<head>

<title> kupindetimur | about us | gallery | kupindedaha timur krishi farm pvt.ltd,Nepal </title>
<meta name="keywords" content=" introduction of kupinde timur farm,where is kupindedaha,best online shoping store,online store on salyan ,company introduction,list of online shoping in Nepal ,buy online nursery from salyan,buy online herbal product from salyan,bio techonology,smart farming,kupindedaha lake,kupindedaha timur farm ,online shopping,krishi samagri,best organic product ,nepal,salyan ,karnali ,karnali pardesh,buy and sell agriculture product,fresh product,">
<meta name="discription" content="Buy:fresh ,dry ,powdery form vegetables...herbal product,nursery product,spicey ..local organic product... at low prices in Nepal .Home delivery all over the Nepal and other country.. easy payment method. ">
<!-- <meta name="auther" content="<?php echo $result['authers']; ?> "> -->


<?php include("link.php");?>
<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
</head>
<body class="mr-2 ml-2">
<?php include("header.php");?>
<?php include("desktop_nav.php");?>
<br><br><br><br><br><br><br>
<?php include("mobile_nav.php");?>
<br><br>


<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2 style="font-size: 25px; color: green;">OUR GALLERY</h2>
<p style="color: orange;">Meet us:</p>
<hr style="border-bottom: 2px dashed green;">
<div class="w3-row"><br>
  <?php 
// INSERT INTO `gallery`(`id`, `content`, `photo`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4])
      
 include("./adminstatus/blogadmin/dbc.php"); // Database connection file

             $selectquery = "SELECT*FROM  gallery  WHERE cat='photos' ORDER BY id DESC";
//             $selectquery = "SELECT*FROM  gallery WHERE cat='photos' ORDER BY id DESC";
            $query = mysqli_query($conn , $selectquery) or die("error");
          
            while ($result= mysqli_fetch_array($query)) {
              
?>
  




<div class="w3-quarter w3-boder col-md-4 col-sm-6 col-6 col-lg-3">
  <div class="w3-border">

  <?php 
echo '<div class="w3-center"> <a href="./adminstatus/blogadmin/'.$result['photo'].'"><img src="./adminstatus/blogadmin/'.$result['photo'].'" class="img-fluid" alt="fantastic cms" style="width:295px;height:190px" target="blank"></a>  </div>';
?>

  <p><b><?php echo $result['content']; ?></b> </p></div>

</div>

 <?php
              # code...
            }
            ?>





</div>
</div>

<br>
<?php include("footer.php");?>