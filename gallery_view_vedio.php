<html>
<head>

<title> kupindetimur | about us | vedio gallery | kupindedaha timur krishi farm pvt.ltd,Nepal </title>
<meta name="keywords" content=" introduction of kupinde timur farm,kupidetimur vedio gallery,where is kupindedaha,best online shoping store,online store on salyan ,company introduction,list of online shoping in Nepal ,buy online nursery from salyan,buy online herbal product from salyan,bio techonology,smart farming,kupindedaha lake,kupindedaha timur farm ,online shopping,krishi samagri,best organic product ,nepal,salyan ,karnali ,karnali pardesh,buy and sell agriculture product,fresh product,">
<meta name="discription" content="Buy:fresh ,dry ,powdery form vegetables...herbal product,nursery product,spicey ..local organic product... at low prices in Nepal .Home delivery all over the Nepal and other country.. easy payment method. ">
<!-- <meta name="auther" content="<?php echo $result['authers']; ?> "> -->


<?php include("link.php");?>
<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
</head>
<body class="mr-2 ml-2">
<?php include("header.php");?>
<?php include("desktop_nav.php");?>
<br><br><br><br><br><br><br><br>
<?php include("mobile_nav.php");?>



<br><br>
<h2 class="w3-center" style="font-size: 25px; color: green;">Our Vedio Gallery</h2>
<hr style="border-bottom: 2px dashed green;">
<div class="row ">

   <?php 
      
 include("./adminstatus/blogadmin/dbc.php"); // Database connection file


            $selectquery = "SELECT*FROM  gallery  WHERE cat='vedios' ORDER BY id DESC";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
              
?>
  
  
  <div class="col-md-4 col-sm-6 col-12 col-xlg-3 ">
    

<?php echo '
 <a href="./adminstatus/blogadmin/'.$result['photo'].'">


 <video width="100%" height="260" controls>
 <source src="adminstatus/blogadmin/'.$result['photo'].'" type="video/mp4">yuor brwser doesnot sopport html file vedio</video>  </a><br>'; ?>

<!-- <iframe width="581" height="436" src="https://www.youtube.com/embed/zQ1WZq5qiWM?list=UU_rdE8L_hslrTXrgpU_GWyQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  -->
  



 

<br>
  <p><?php echo $result['content']; ?></p>

</div>
   <?php
              # code...
            }
            ?>

          
</div>


  
<br>
<?php include("footer.php");?>