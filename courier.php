<?php
session_start();
if ($_SESSION['role'] !=='courier') {
  header('location:logout.php');
  } else{
  
?>

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
<?php include("header_courier.php");?>


 <?php 

 include("mobile_nav.php");
 ?>

<br>
<br><br><br><br>
<!-- muncipality -->


<!-- 
$_SESSION['login']=$_POST['email'];
$_SESSION['zipcode']=$num['zipcode'];
$_SESSION['contactno']=$num['contactno'];
$_SESSION['lname']=$num['lname'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['fname'];
$_SESSION['role']=$num['status'];
$_SESSION['localaddress1']

 -->

  <div > <h2 class="w3-center" style="font-weight: bold; color: green; font-size: 23px;">Order Handover Conformation Portal</h2></div>

<hr style="border-bottom: 2px dashed green;">

<dir><h1 style="font-size: 25px; color: orange; font-weight: bold;">courier :<span style="color: indigo; font-size: 18px;"><?php echo $_SESSION['zipcode'] ; ?>,<?php echo $_SESSION['localaddress1'] ; ?></span></h1>
<h1 style="font-size: 13px; color: orange; font-weight: bold;">Delevered by:<span style="color: indigo;"><?php echo $_SESSION['name'] ; ?>-<?php echo $_SESSION['lname'] ; ?></span></h1>
</dir>















<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
<br>



<div class="row">
  <div class="col-lg-3 w3-gren"></div>
  <div class="col-lg-6">
<form action="">
  <label for="fname" ><b style="color: orange;">Start typing a Product ID or Custumer ID:</b></label>

  <input style="height: 6vh;"  class="form-control" placeholder="Enter Product ID or Custumer ID* eg. 256656" type="number" id="fname" name="fname" onkeyup="showHint(this.value)">
</form>

<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("eng").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("eng").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "courier_product_data.php?q="+str, true);
    xmlhttp.send();
  }
}
</script>
<div id="eng"></div>

<br>
<br>
<br></div>
  <div class="col-lg-3 w3-ed"></div>
</div>
 <div class="m-2" style="background-color: #fff; text-align: center; border: 2px solid #C0C0C0; padding: 3.5px; padding-left: 10px">
                         <b style="color: #02225B"><span style="color: #4E4E4E">&copy;</span>kupindedaha timur krishi farm pvt.ltd.
              </b><br /> 
                            <span style="color: #4E4E4E">&copy; powered by</span> <b style="color: #02225B; font-size: 12px"> U SOO YUvraj
              <br> <i class="fa fa-phone-square"></i> +977-9863325908 ,+91-7452004262 ,+977-9840059908 </b><br>
               
                        </div>



</body>
</html>

<?php } ?>
