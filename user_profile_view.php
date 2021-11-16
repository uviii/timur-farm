 <?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:login.php');
  } else{
  
?>









<!DOCTYPE html>
<html>
<head>
  <title>timur farm pk</title>


<?php include("link.php");?>
<link rel="shortcut icon" href="images/logo.png" type="image/x-icon" />
 



<link rel="shortcut icon" href="./p.image/logo.png" type="image/x-icon" />
</head>
<body class="ml-3 mr-3" >
<?php include("header.php");?>
<?php include("desktop_nav.php");?>
<br><br>
<?php include("mobile_nav.php");?>



<!-- UPDATE `user` SET `id`=[value-1],`fname`=[value-2],`lname`=[value-3],`email`=[value-4],`contactno`=[value-5],`country`=[value-6],`state`=[value-7],`district`=[value-8],`city`=[value-9],`localaddress`=[value-10],`password`=[value-11],`cpassword`=[value-12],`file`=[value-13],`tokan`=[value-14],`status`=[value-15],`posting_date`=[value-16] WHERE 1 -->

  <br>


<div><h4 class="w3-center w3-text-orange"><b>update your profile information</b></h4></div><hr><hr>
          <div class="row container">

             <div class="col-sm-3"></div>
            <div class="col-sm-6">





<!-- The Modal -->
 <?php 

if(($_SESSION['id']=='0'))
      {
           include("./adminstatus/blogadmin/dbc.php");
            // $id=$_GET['$cc'];
            $selectquery = "SELECT*FROM user WHERE id =$cc";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>

             
              <br><br> 



      <!-- Modal body -->
        <div>
        

       
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
     
     

      
      
         
       
         <?php
              # code...
            }
            ?>



<?php
                        }
                        else
                        
                         ?>

                          

</div>




            <div class="col-sm-3"></div>
          </div>

         <br><hr>
          

        
<br>
<?php include("footer.php");?>





































