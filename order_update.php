


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

  $sql=" UPDATE `order` SET `cname`='$cname', `phone`='$phone',`country`='$country',`state`='$state',`district`='$district',`city`='$city',`localaddress1`='$localaddress1',`local_ad`='$local_ad',`zipcode`='$zipcode',`subtotal`='0' ,status='pending' WHERE cid='$ids' and subtotal='1' ";

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
echo  "<script>alert('Your account registered Successfully,please check your email to activate your account');</script>";

}else{
  echo "<script>alert('Something gone wrong please try again.......! ,
  please try again.');</script>";

}

  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

 
?>
