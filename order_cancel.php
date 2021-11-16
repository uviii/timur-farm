<html>
<head>

<title> kupindetimur | enquery | contact us | kupindedaha timur krishi farm pvt.ltd,Nepal </title>
<meta name="keywords" content=" introduction of kupinde timur farm,kupidetimur vedio gallery,where is kupindedaha,best online shoping store,online store on salyan ,company introduction,list of online shoping in Nepal ,buy online nursery from salyan,buy online herbal product from salyan,bio techonology,smart farming,kupindedaha lake,kupindedaha timur farm ,online shopping,krishi samagri,best organic product ,nepal,salyan ,karnali ,karnali pardesh,buy and sell agriculture product,fresh product,">
<meta name="discription" content="Buy:fresh ,dry ,powdery form vegetables...herbal product,nursery product,spicey ..local organic product.. +977 9840059908 ,+977 9866600866..Email:krishi@kupindetimur.com">
<!-- <meta name="auther" content="<?php echo $result['authers']; ?> "> -->


<?php include("link.php");?>
 <link rel="shortcut icon" href="C:\Users\hp\Desktop\agrotech.com\p.image/logo.png" type="image/x-icon" />
</head>
<body class="mr-2 ml-2">
<?php include("header.php");?>
<?php include("desktop_nav.php");?>
<br><br><br><br><br><br><br><br>
<?php include("mobile_nav.php");?>

<br><br><br><br>

<div><h1 class="w3-center w3-text-orang"><b style="font-size: 30px; color: green;">Product Cancellation</b></h1></div>
<hr style="border-bottom: 2px dashed red;">
<br>
<?php 
$cc=$_GET['id'];
// echo $cc;

             include("./adminstatus/blogadmin/dbc.php");
            // $id=$_GET['$cc'];
            $selectquery = "SELECT*FROM `order` WHERE id ='$cc' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            $result= mysqli_fetch_assoc($query);
            $pid=$result['pid'];
            // echo $pid;
              
?>
<?php 



             include("./adminstatus/blogadmin/dbc.php");
            // $id=$_GET['$cc'];
            $select = "SELECT*FROM  productadd where id=$pid ";
            $quer = mysqli_query($conn , $select) or die("error");
           
            $resul= mysqli_fetch_assoc($quer);
            $photo1=$resul['photo1'];
              
?>
<div class="w3-center"><?php echo '  <img src="./adminstatus/blogadmin/'.$photo1.'" class="img-fluid w3-container-fluid" alt="fantastic cms" style="width:460px;height:250px">'; ?></div>
<div><h1 class="w3-center" style="font-size: 20px;"><?php echo $result['pname']; ?> </h1> </div>
<div><h1>Terms and Condition</h1>
<ol>
  <li>hey man this is youb raj from the afdajsfo</li>
  <li>hey man this is youb raj from the afdajsfo</li>
  <li>hey man this is youb raj from the afdajsfo</li>
  <li>hey man this is youb raj from the afdajsfo</li>
  <li>hey man this is youb raj from the afdajsfo</li>
  <li>hey man this is youb raj from the afdajsfo</li>
  <li>hey man this is youb raj from the afdajsfo</li>
  <li>hey man this is youb raj from the afdajsfo</li>
  <li>hey man this is youb raj from the afdajsfo</li>
  <li>hey man this is youb raj from the afdajsfo</li>
  <li>hey man this is youb raj from the afdajsfo</li>
</ol><br>
<center>

 <form action="order_cancel_last.php" method="POST">
    <div>
      <input type="hidden" name="id" value="<?php echo $cc; ?>">
      <input type="submit" name="submit" value="Poceed to Cancellation" style="width: 50%; height: 6vh; font-size: 20px; font-weight: bold; background-color: red;" class="w3-hover-blue">

      <!-- <a href="order_delet.php?id=<?php echo $cc; ?> " class="w3-text-white w3-center" style="width: 50%;"><button style="width: 50%;" type="button" class="btn w3-blue" >Proceed to cancell</button></a> -->
    </div>

 </form>
</center>
</div>

</div>
<br>


<?php include("footer.php");?>