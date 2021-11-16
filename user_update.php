









<!DOCTYPE html>
<html>
<head>
  <title>timur farm pk</title>


<?php include("link.php");?>
<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />

</head>
<body class="ml-3 mr-3" >
<?php include("header.php");?>
<?php include("desktop_nav.php");?>
<br><br><br><br><br><br><br><br><br><br><br><br>
<?php include("mobile_nav.php");?>



<!-- UPDATE `user` SET `id`=[value-1],`fname`=[value-2],`lname`=[value-3],`email`=[value-4],`contactno`=[value-5],`country`=[value-6],`state`=[value-7],`district`=[value-8],`city`=[value-9],`localaddress`=[value-10],`password`=[value-11],`cpassword`=[value-12],`file`=[value-13],`tokan`=[value-14],`status`=[value-15],`posting_date`=[value-16] WHERE 1 -->

  <br>

<?php 

 // $id=$_session['$id'];

             include("./adminstatus/blogadmin/dbc.php");
             $cc=$_SESSION['id'];
            // $id=$_GET['$cc'];
             // $id=$_GET['$id'];
            $selectquery = "SELECT*FROM user WHERE id ='$cc'";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>

<!--  <div class="w3-center" > <img class="w3-border" src="./images/1000.jpg " width="187" height="190">
<br><br>
          <div><button class="">update profile picture</button></div></div> -->

<div><h4 class="w3-center w3-text-orange"><b>update your profile information</b></h4></div><hr><hr>
          <div class="row container">

             <div class="col-sm-3"></div>
            <div class="col-sm-6">
<form name="registration" method="POST" action="user_profilee.php" enctype="multipart/form-data" class="container ">
   <input type="hidden" name="id" value="<?php echo($cc); ?>">
 <label class="w3-left ml-0 w3-panel"> <b> choose your profile picture:</b></label><input class="form-control "   placeholder="enter first name **" type="file"  value="<?php echo($result['file']) ?>" name="file"> 

    <label class="w3-left ml-0 w3-panel"> <b>update your first name:</b></label><input class="form-control p-4"   placeholder="enter first name **" type="text" required value="<?php echo($result['fname']) ?>" name="fname">            
  
    <label class="w3-left ml-0 w3-panel"> <b> update your last name:</b></label><input class="form-control p-4"   placeholder="enter last name **" type="text" required value="<?php echo($result['lname']) ?>" name="lname">
  
<label class="w3-left ml-0 w3-panel"> <b>Email id:</b></label><input readonly="" class="form-control p-4"   placeholder=" country **" type="text" required value="<?php echo($result['email']) ?>" name="country">
<label class="w3-left ml-0 w3-panel"> <b> update your Country:</b></label><input readonly="" class="form-control p-4"   placeholder=" country **" type="text" required value="<?php echo($result['country']) ?>" name="country">
<label class="w3-left ml-0 w3-panel"> <b> update your state:</b></label><input class="form-control p-4"   placeholder=" state **" type="text" required value="<?php echo($result['state']) ?>" name="state">
  <label class="w3-left ml-0 w3-panel"> <b> update your district:</b></label><input class="form-control p-4"   placeholder=" district **" type="text" required value="<?php echo($result['district']) ?>" name="district">
<label class="w3-left ml-0 w3-panel"> <b> update your muncipality:</b></label><input class="form-control p-4"   placeholder=" munci **" type="text" required value="<?php echo($result['city']) ?>" name="city">
<label class="w3-left ml-0 w3-panel"> <b> update your warda:</b></label><input class="form-control p-4"   placeholder=" warda **" type="text" required value="<?php echo($result['warda']) ?>" name="warda">
<input type="hidden" name="ship" value="o">
  <label class="w3-left ml-0 w3-panel"> <b> update local address:</b></label><input class="form-control p-4"   placeholder="enter local address **" type="text" required value="<?php echo($result['localaddress']) ?>" name="local_ad">
  <label class="w3-left ml-0 w3-panel"> <b> update contact no:</b></label><input class="form-control p-4"  placeholder=" inter contact no **" type="text" required value="<?php echo($result['contactno']) ?>" name="contactno">
  

  <br>
  
  <div class="sign-up">
                  <input type="reset" value="Reset" class="form-control w3-orange w3-hover-blue">
                  <input type="submit" class="form-control w3-orange w3-hover-blue" name="submit"  value="update" >
                  <div class="clear"> </div>
                </div>

  
  </form>
</div>
            <div class="col-sm-3"></div>
          </div>

         <br><hr>
          

         <?php
              # code...
            }
            ?>
<br>
<?php include("footer.php");?>






































