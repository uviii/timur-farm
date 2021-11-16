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

<br>

<div><h4 class="w3-center w3-text-orange"><b>my profile</b></h4></div>







<?php 
$cc=$_SESSION['id'];

             include("./adminstatus/blogadmin/dbc.php");
            // $id=$_GET['$cc'];
            $selectquery = "SELECT*FROM user WHERE id =$cc";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>

             
              <br><br> 

<!-- Button to Open the Modal -->


<!-- The Modal -->

        

       
         <div class="w3-center" > <img class="w3-border" src="<?php echo ' '.$result['file'].''; ?> " width="160" height="190" >


<br><br>
          <div><button type="button" class="btn w3-blue" ><a href="user_update.php?id=<?php echo $result['id']; ?> " class="w3-text-white">update your profile picture</a></button></div></div>


         
          <center><div class="col-sm-"> 

            <table border="1" cellspacing="0" cellpadding="10"
style="text-align:center;">

<tr>
<td rowspan=""><b>name:</b></td>

<td><?php echo($result['fname']) ?>-<?php echo($result['lname']) ?></td>


</tr>

<tr>
<td rowspan=""><b>cutumer ID:</b></td>
<td><?php echo($result['id']) ?></td>

</tr>


<tr>
<td rowspan=""><b>email ID:</b></td>
<td><?php echo($result['email']) ?></td>

</tr>
<tr>
<td rowspan=""><b>contact info:</b></td>
<td><?php echo($result['contactno']) ?></td>

</tr>
<tr>
<td rowspan=""><b>country:</b></td>
<td><?php echo($result['country']) ?></td>

</tr>
<tr>
<td rowspan=""><b>address:</b></td>
<td><?php echo($result['localaddress']) ?></td>

</tr>
 <tr>
<td rowspan=""><b>member since:</b></td>
<td><?php echo($result['posting_date']) ?></td>

</tr>

</table></div>




</center>
           
       </div>
      </div>
     

      
      

       
         <?php
              # code...
            }
            ?>

<br><br><br><br><br>

<?php include("footer.php");?>