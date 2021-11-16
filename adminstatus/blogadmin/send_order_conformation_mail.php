
<?php 
include("dbc.php");

session_start();


if (isset($_GET['pid'])) {
  # code...
  $ci=$_GET['pid'];
  $selectquery = "SELECT * FROM `order` WHERE id='$ci' ";
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
            $status=$result['status'];
            $id=$result['id'];

 // UPDATE `order` SET `id`=[value-1],`pname`=[value-2],`photo`=[value-3],`pquantity`=[value-4],`unit`=[value-5],`pid`=[value-6],`price`=[value-7],`subtotal`=[value-8],`tax`=[value-9],`shiping`=[value-10],`total`=[value-11],`cid`=[value-12],`cname`=[value-13],`email`=[value-14],`phone`=[value-15],`country`=[value-16],`state`=[value-17],`district`=[value-18],`city`=[value-19],`local_ad`=[value-20],`localaddress1`=[value-21],`zipcode`=[value-22],`status`=[value-23],`date`=[value-24] WHERE 1
 $sql=" UPDATE `order` SET `status`='Proceeding' WHERE id='$id'";


// echo "$sql";
$query = mysqli_query($conn ,$sql);

if ($query) {
$subject = " confirmed your Order by vender";
$message = "Hi 
dear $fname,

  We kupindedaha krishi farm pvt.ltd. have recieved your order an shortly .
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
        https://kupindetimur.com

                                                      visit our website
                                                    loginto your account
                                                        get support


                coppy right kupindedaha timur krishi farm pvt.ltd. All rights reserved
 ";
mail($email, $subject, $message, "From: yubrajbudhathoki01@gmail.com");

    $_SESSION['action1']="confirmmation mail for $fname,$oid and $pname had been sended successfully....";
 header('location:order_manag.php');

}else{
   $_SESSION['action1']="confirmmation mail for $fname,$oid and $pname  not sended,
  please try again............";
 header('location:order_manag.php');
}


}else{
     $_SESSION['action1']="somethig gone wrong ,try again.......";
 header('location:order_manag.php');
}


?>
<?php
           




