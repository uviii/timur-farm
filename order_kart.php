

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

 <h2 class="w3-center"><b style="color: orange;"> Your Kart List </b></h2>
<hr>





<div class="container w3-hide-small">
<table class="container-fluid w3-rose responsive table-stripe w3 w3-border responsive" border="2" cellpadding="10"  cellspacing="10">
  <tbody class="w3-border" >
    <tr border="3" class="w3-border  w3-blue "   >
    <th  class="w3-center" colspan="2" >Cancel</th>
    
    <th class="w3-center">product name</th>
    <th class="w3-center">price/pac_wt</th>
    <th class="w3-center">quentites</th>
    <th class="w3-center"> shiping charge</th>
    <th class="w3-center">subtotal</th>
   

  </tr>
  <form method="POST" action="">

  <?php 
$cc=$_SESSION['id'];

             include("./adminstatus/blogadmin/dbc.php");
            // $id=$_GET['$cc'];
            $selectquery = "SELECT*FROM `order` WHERE cid ='$cc' AND subtotal=1 ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>
  <tr>
     
          <td class="w3-center"> <a href="delete.php?id=<?php echo $result['id']; ?> "  data-toggle="tooltip" data-placement="bottom" title="delete" onClick="return confirm('Are you sure you want to remove yur order Item,note: We are not responsible after remove from you.');"><i class="fa fa-trash w3-center fa-2x" style="color: red;" aria-hidden="true"></i> </a></td>
          <td class="">
            <button type="submit" name="order" style="border: none;"><i class="fa fa-edit  w3-center" style="color: green; font-size: 20px;" aria-hidden="true"> Conform</i></button></td>
          <input type="hidden" value="<?php echo $result['id']; ?>" name="id">
    <td class="w3-center">  <?php echo $result['pname']; ?></td>
    <td class="w3-center">   <?php  echo $result['photo']; ?>.<?php  echo $result['price']; ?>/<?php  echo $result['unit']; ?>.<?php  echo $result['tax']; ?> </td>
    <td class="w3-center"> <?php echo $result['pquantity']; ?>. <?php echo $result['tax']; ?></td>

  <?php
$a=$result['price'];
$pr=$a/100;


$shiping=$result['shiping'];
$photo=$result['photo'];


   $price=$result['total'] ; 
$subtotal= $shiping+$price;
$total+=$price;

  ?>

    <td class="w3-center"><?php echo "$photo"; ?>.<?php echo $result['shiping']; ?>|-</td>
    <td class="w3-center"><?php echo "$photo"; ?>.<?php echo "$price"; ?>|-</td>
  </tbody>
  </tr><?php
              # code...
            }
            ?>
            <tbody>
             <tr> <th colspan="2"><h4 style="font-weight: bold; color: orange;">Total sub total:</h4></th>
              <th colspan="6" ><b class="w3-right" style="font-size: 20px; color: orange;"><?php echo "$photo"; ?>.<?php echo "$total"; ?>|-</b></th>
              </tr>



              
            </tbody></form>
  
  
  </table>
</div>


<!-- for mobile veiw -->

<div class="container w3-hide-large">


<table class="container-fluid "><tr><th class="w3-left w3-orange">delete cart</th></tr></table>
  
    <table class="container-fluid w3-rose responsive table-stripe w3 w3- responsive" border="2" cellpadding="10"  cellspacing="10">

  <tbody class="" >
      <?php 
$cc=$_SESSION['id'];

             include("./adminstatus/blogadmin/dbc.php");
            // $id=$_GET['$cc'];
            $selectquery = "SELECT*FROM `order` WHERE cid ='$cc' AND subtotal=1 ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($resulte= mysqli_fetch_array($query)) {
              
?> <?php
$a=$resulte['total'];



$shiping=$resulte['shiping'];


   $price=$resulte['price'] *$resulte['pquantity'] ; 
$subtotal= $a;
$ttotal+=$subtotal;
$country=$resulte['country'];
$state=$resulte['state'];
$cname=$resulte['cname'];
$district=$resulte['district'];
$city=$resulte['city'];

$local_ad=$resulte['local_ad'];
$zipcode=$resulte['zipcode'];
$tunit=$resulte['tunit'];
// echo $cname;
$localaddress1=$resulte['localaddress1'];


  ?>
    <div ><tr border="3" class="w3-border "   >
      <tr>
<!--    <td><b class="w3-left ml-3">product ID:</b></td>
    <td class="w3-center mr-3"><?php echo($resulte['id']) ?></td>
  </tr> -->
    <tr>
    <td><b class="w3-left ml-3">product:</b></td>
    <td class=" mr-3"><b class="w3-text-blue"><?php echo($resulte['pname']) ?></b></td>
  </tr> 

  </tr>
  <tr>
    <td><b class="w3-left ml-3">price/<?php echo $resulte['unit']; ?><?php echo $resulte['tax']; ?>:</b></td>
    <td class="w3-righ mr-3"> <?php  echo $resulte['photo']; ?>.<?php echo($resulte['price']) ?>|-</td>
  </tr>
  <tr >
    <td ><b class="w3-left ml-3 " >quentites:</b>.</td>
    <td class="w3-righ"><?php echo $resulte['pquantity']; ?>.<?php echo $resulte['tax']; ?></td></tr>
     
  <tr>
    <td><b class="w3-left ml-3">shiping charge:</b></td>
    <td class="w3-righ mr-3"><?php  echo $resulte['photo']; ?>.<?php echo $resulte['shiping']; ?>|-</td>
  </tr>
  

  <tr>
    <td><b class="w3-left ml-3">subtotals:</b></td>
    <td class="w3-righ mr-3"><?php  echo $resulte['photo']; ?>.<?php echo "$subtotal"; ?>|-</td>
  </tr>

      <tr style="border-bottom:  2px solid gray; margin-top:  8px;" ><td class=" ml-3"><a href="order_delet.php?id=<?php echo $resulte['id']; ?> "  data-toggle="tooltip" data-placement="bottom" title="delete" onClick="return confirm('Are you sure you want to remove yur order Item,note: We are not responsible after remove from you.');"><i class="fa fa-trash w3-center fa-2x" style="color: green;" aria-hidden="true">Remove</i> </a>
</td>

  </tr>

</div>

  <?php
              # code...
            }
            ?>
            <table class="container-fluid w3-border w3-panel w3-gra "><tr><td class=" w3-center w3-gra" style="margin-left: 80%;"><h4><b class="w3-text-orange">total subtotal:-</b></h4></td>
    <td class="w3-right w3-gra mr-3"><h4><b class="w3-text-orange">NPR.<?php echo "$ttotal"; ?>|-</b></h4></td>
  </tr></table>
</tbody></table>

  

  
  
  
</table>
</div>
<br><hr>
<!-- shiping charge counter -->


<div class="row container">

  <div class="col-sm-8">
    <?php 
include("./adminstatus/blogadmin/dbc.php");
$munci= $city;
// echo $munci;
            
            $select = " SELECT * FROM `warda_munci` WHERE  warda='$tunit' ";
            $quer = mysqli_query($conn , $select) or die("error");
           

            $ress= mysqli_fetch_assoc($quer);
$time=$ress['service'];
// echo $time;
// echo $tunit;
            ?>

<br><br>
    <div><h2 style="border-bottom: 2px dotted red; color: orange;">Delevery Address:<h4 style="color: green;"><?php echo $cname; ?></h4><span style="font-size: 20px;">
      <?php echo $city; ?>,<?php echo $local_ad; ?>,<?php echo $district; ?>,<?php echo $state; ?>,<?php echo $zipcode; ?>,<?php echo $country; ?></span style="font-size: 20px;"></h2>

      <h5 style="color: orange;">Delevery time:  <span style="font-size: 15px; color: green; font-weight: bold;"> Minimum time <span style="color: red;"><?php echo $time;?></span> To Handover</span></h5></div>
      <hr style="border-bottom: 2px dotted red;">
      
      
      
  <!--   <div id="money"></div> -->
   <!-- muncipality -->

<script>
function showcity(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("txt").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txt").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "warda.php?q="+str, true);
  xhttp.send();   
}
</script>
<!-- mony -->
<script>
function showmoney(str) {
  var xhttp;
  if (str.length == 0) { 
    document.getElementById("money").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("money").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "d_money.php?q="+str, true);
  xhttp.send();   
}
</script>
<!-- charge -->

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("demo").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "dd_charge.php", true);
  xhttp.send();
}
</script>


<!-- district -->


<script>
function showdistrict(strrr) {
  var xhttp;  
  if (strrr == "") {
    document.getElementById("txtHinttt").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHinttt").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "dddd.php?q="+strrr, true);
  xhttp.send();
}
</script>

<!-- state -->

<script>
function showstate(strr) {
  var xhttp;  
  if (strr == "") {
    document.getElementById("txtHintt").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHintt").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "ddddd.php?q="+strr, true);
  xhttp.send();
}
</script>

<!-- country -->

<script>
function showcountry(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "dd.php?q="+str, true);
  xhttp.send();
}
</script>
<table class=" w3-table-stripe" id="shipp" >  
<form  action="" method="POST"  enctype="multipart/form-data">
  <div id="demo" class="">
<button  class="w3-circle w3-hover-blue " style="background-color: orange; font-weight: bold; width: 40%; height: 5vh; color: white;" value="Conform Checkout" type="submit" name="kaart"> Proceed All Checkout</button><a href="#shipp"><button type="button" class="w3-circle w3-hover-blue " style="background-color: pink; font-weight: bold; width: 60%; height: 5vh; color: red;" > Change Shipping Address</button></a>
<!-- <input class="form-control container w3-orange w3-hover-blue" type="submit" name="submit" required  value="proceed to checkout">
 -->
</div>
<!-- <button type="button" class="w3-circle w3-hover-blue " style="background-color: pink; font-weight: bold; width: 50%; color: red;" onclick="loadDoc()"> Re-Calculate shipping Charge</button> -->
                  



   <div id="txtHint"></div>
  <!-- <form  action="order_shiping_update.php" method="POST"  enctype="multipart/form-data">

    <tr>
      <p><b class="w3-text-orange">delevery provider<i class="Fa fa-angle-down ml-2"></i></b></p>
    <td class="w3-borde" style="border-bottom: 2px solid black; border: 1px solid green; background-color:"><b class="w3-left ml-3 mb-">country:</b></td>
    

    <td class="w3-borde" style="border-bottom: 2px solid black; border: 1px solid green; background-color:" class="w3-right ml-3 "><br> <?php 

            
            $selectquery = "SELECT*FROM `shiping_charge`  WHERE (charge_other='$shiping' || charge_nepal='$shiping') limit 1";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?><span class="w3-text-orange"><?php echo $result['courier']; ?>:</span><span  class="w3-text-red">(<?php echo $result['service']; ?>)<br>
 <?php
              # code...
            }
            ?>

      <button style="border:transparent; float: right;" type="submit" value="" name="shiping"><b class="w3-text-blue w3-hover-orange">calculate delevery charge</b></button>
    </td>
  </tr>
  <tr>
    <td style="  border: 1px solid green; background-color:" class=" ml-3 "><select class="form-control form-control" name="country" >
     <?php 
$cc=$_SESSION['id'];

             include("./adminstatus/blogadmin/dbc.php");
            
            $selectquery = "SELECT*FROM `order` WHERE cid ='$cc' LIMIT 1";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>
      <option type="text" name="country" class="form-control" value="<?php echo $result['shiping']; ?>"><?php echo($result['country']) ?></option>
      <?php
              # code...
            }
            ?>
            <?php 

            
            $selectquery = "SELECT*FROM `shiping_charge`   ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
      <option type="text" name="country" value="<?php echo $result['charge_other']; ?> "><?php echo $result['country']; ?></option>
        <option type="text" name="country" value="<?php echo $result['charge_nepal']; ?>"><?php echo $result['district']; ?></option>
       <?php
              # code...
            }
            ?>
        </select>

      </td>
    
     <?php 
$cc=$_SESSION['id'];

             
           
            $selectquery = "SELECT*FROM `order` WHERE cid ='$cc' LIMIT 1";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>
    <td  style="  border: 1px solid green; background-color:" class=" ml-3 "><span class="w3-right mr-2">NPR Rs.<?php echo $result['shiping']; ?></span></td>
    <input type="hidden" name="id" value="<?php echo htmlentities($result['cid']) ?>">
     <?php
              # code...
            }
            ?>
    
  </tr>
  </form> -->
</table>

</div></div>
<br>
<div class="w3-container w3-border">

<!-- fetching user information --> 

<br>
<!-- <div style="border-bottom: 2px solid gray"></div> -->
<div class="w3-voilet w3-panel container w3-border" ><h4 class="w3-panel w3-center w3-text-red  bg-light"><b>Attention ! Check And Edit Your Delevery Information </b> </h4></div>
<!-- <form  action="order_update.php" method="POST"  enctype="multipart/form-data"> -->
<div class="row container">
  <div class="col-sm-6 w3-borer">
<?php 
$cc=$_SESSION['id'];

             include("./adminstatus/blogadmin/dbc.php");
           $selectquery = "SELECT*FROM `order` WHERE cid ='$cc' order by id limit 1 ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>
  <input class="form-control" type="hidden"    value=" <?php echo htmlentities($result['cid']) ?>" name="pid">

  <label><b>full  name:</b></label><input class="form-control" type="text"  required  value=" <?php echo htmlentities($result['cname']) ?>" name="cname">
  <label><b>email ID:</b></label><input class="form-control" type="hidden" required  value=" <?php echo($result['email']) ?>" 
  name="email">
  <label><b>mobile:</b></label><input type="text" name="phone" class="form-control  " required  value="  <?php echo($result['phone']) ?>" class=" ml-4 mr-1" >
  <label><b>country:</b></label><input type="text" name="country" class="form-control  " required  value=" <?php echo($result['country']) ?>" class=" ml-4 mr-1" >
  <label><b>state:</b></label><input type="text" name="state" class="form-control  " required  value=" <?php echo($result['state']) ?>" class=" ml-4 mr-1" >
</div><br>

  <div class="col-sm-6 w3-bordr">
    
  <label><b>district:</b></label><input type="text" name="district" class="form-control  " required  value=" <?php echo htmlentities($result['district']) ?>" class=" ml-4 mr-1" >
  <label><b>city:</b></label><input type="text" name="city" class="form-control  " required  value="  <?php echo($result['city']) ?>">

  <label><b>local_address:</b></label><input type="text" name="local_ad" class="form-control  " required  value="  <?php echo($result['local_ad']) ?>" class=" ml-4 mr-1" >

  <label><b>nearest place:</b></label><input type="text" name="localaddress1" class="form-control  " required  value="  <?php echo($result['localaddress1']) ?>" class=" ml-4 mr-1" >
  
  <label><b>zip code:</b></label><input class="form-control" type="text" required value="<?php echo($result['zipcode']) ?>" name="zipcode">

  </div>

  <br><br><br><input class="form-control container w3-orange w3-hover-blue" type="submit" name="submit" required  value="proceed to checkout">

     <?php
              # code...
            }
            ?>  
</form> 
        </div> 
        </div>
<!-- <div><a href="checkout_pdf_enerate.php"> reciept</a></div> -->
<br>
<div><a href="index2.php"><i class="fa fa-home"></i> back to main menu</a></div><hr><hr>
  <?php include ('footer.php') ?>



<?php 
require_once("./adminstatus/blogadmin/dbc.php");

if(isset($_POST['order']))
{


 // UPDATE `order` SET `id`=[value-1],`pname`=[value-2],`photo`=[value-3],`pquantity`=[value-4],`unit`=[value-5],`pid`=[value-6],`price`=[value-7],`subtotal`=[value-8],`tax`=[value-9],`shiping`=[value-10],`total`=[value-11],`cid`=[value-12],`cname`=[value-13],`email`=[value-14],`phone`=[value-15],`country`=[value-16],`state`=[value-17],`district`=[value-18],`city`=[value-19],`local_ad`=[value-20],`localaddress1`=[value-21],`zipcode`=[value-22],`date`=[value-23] WHERE 1



  $id=  $_POST['id'];
  
  $pquantity=  $_POST['pquantity'];
  $tax=  $_POST['unit'];
 
  $sql=" UPDATE `order` SET `subtotal`='0',status='pending' WHERE id='$id' ";

// echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";


if($data)
 {

  echo "<script>alert('your order Conformed  successfully. please check on order and kart section for detail .thanks for being kupindetimur family @ kupindetimur.com Team.');</script>"; 
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

 
?>



<?php 
require_once("./adminstatus/blogadmin/dbc.php");

if(isset($_POST['kaart']))
{


$ids=$_POST['pid'];
 // echo "$ids";

  $cname=  mysqli_real_escape_string($conn,   $_POST['cname']);
  $email=  mysqli_real_escape_string($conn,   $_POST['email']);

  $phone=  mysqli_real_escape_string($conn,   $_POST['phone']);
  $country=  mysqli_real_escape_string($conn,   $_POST['country']);
  $state=  mysqli_real_escape_string($conn,   $_POST['state']);
  $district=  mysqli_real_escape_string($conn,   $_POST['district']);
  $city=  mysqli_real_escape_string($conn,   $_POST['city']);
  $local_ad=  mysqli_real_escape_string($conn,   $_POST['local_ad']);
   $localaddress1=  mysqli_real_escape_string($conn,   $_POST['localaddress1']);
    $zipcode=  mysqli_real_escape_string($conn,   $_POST['zipcode']);

  $sql=" UPDATE `order` SET `cname`='$cname', `phone`='$phone',`country`='$country',`state`='$state',`district`='$district',`city`='$city',`localaddress1`='$localaddress1',`local_ad`='$local_ad',`zipcode`='$zipcode',`subtotal`='0' ,status='pending' WHERE cid='$ids' and subtotal='1'";

// echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";


if($data)
 {

  $selectquery = "SELECT * FROM `order` WHERE id='$ids' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result= mysqli_fetch_array($query);
            $fname=$result['cname'];
            $email=$result['email'];
            $oid=$result['id'];
            $unit=$result['unit'];
            $pname=$result['pname'];
            $qntty=$result['pquantity'];
            $prize=$result['price'];
            $shiping=$result['shiping'];
            $total=$result['subtotal'];
 
 
if ($query) {
$subject = "Order Confirmation";
$message = "Hi 
dear $fname,

  We have recieved your order an will be processing it shortly .
---------------------------------------------------------
  your order detail  are:
---------------------------------------------------------
  Order reference num.:$oid
  product name:        $pname
  quentity:            $qntty $unit
  prize:               NPR. $prize |-
  shiping charge:      NPR.$shiping|-
  ------------------------------------------------------
  total:          NPR. $total|-

  you will recieve an email from us shortly once your account has been setup .please quote your irder reference number uf yiu wish to contact us.
                           or
  you can also join our team on whatsApp chat.our official whatsApp ID is 9099898498849,our team will quickly help you with all your queries.here is the quick link for whatsApp chat.quick link for whatsApp is
msg:http://localhost/timur%20farm/acount_activation.php?token=$total

............
        (kupindedaha timur krishi farm pvt.ltd)
        https://kupindetimur.com/checkout_pdf_enerate.php

                                                      visit our website
                                                    loginto your account
                                                        get support


                coppy right kupindedaha timur krishi farm pvt.ltd. All rights reserved
 ";
mail($email, $subject, $message, "From: yubrajbudhathoki01@gmail.com");
// header('location:checkout_pdf_enerate.php');
echo  "<script>alert('Your Request Submitted successfully ,please check your email to conform,thank you');</script>";

}else{
  echo "<script>alert('Something gone wrong please try again.......! ,
  please try again.');</script>";

}

  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

 
?>
