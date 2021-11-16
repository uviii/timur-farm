


<!DOCTYPE html>
<html>
<head>
  <title></title>
<?php include("link.php");?>
</head>
<body>


<!-- for mobile view -->


<style>

.notification {
  
  color: white;
  text-decoration: none;
 
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

/*.notification:hover {
  background: red;
}*/

.notification .badge {
  position: absolute;
  top: -5px;
  right: -35px;
  padding: 1px 20px;
  border-radius: 90%;
  
  color:blue;
  font-size: 15px;

}

#grad1 {
 
  background-color: #FF69B4; /* For browsers that do not support gradients */

}
</style>



<!-- Top container -->
<header class="mb-0 "id="grad1">
<div class="w3-bar  ml-2  "id="">
  <?php 

            $kiu= $_SESSION['admin'];

          include("dbc.php");


            $selectquery = "SELECT *FROM admin WHERE id='$kiu' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
             $result= mysqli_fetch_array($query);
              $status=$result['status'];


           if ($status==='1') {
              
?>

 <button class="w3-bar-item w3-button   w3-hover-none ok w3-hover-text-light-grey" id="btnn" > <a href="main.php"><img src="uploade/logo_pic.png" alt="logo" width="60px" height="30px" style="margin-right: 3px; " ></a> 
<span  style="color:green; font-size: 15px; 
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">kupindedaha timur</span>
    <span style="color: red; font-size: 15px;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;"> krishi farm pvt.ltd</span> <i class="fa fa-bars"></i>  
</button>


 <?php
              # code...
            }
            else{
              echo '<button class="w3-bar-item w3-button   w3-hover-none ok w3-hover-text-light-grey" id="btnn" > <a href="main1.php"><img src="uploade/logo_pic.png" alt="logo" width="60px" height="30px" style="margin-right: 3px; " ></a> 
<span  style="color:green; font-size: 15px; 
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">kupindedaha timur</span>
    <span style="color: red; font-size: 15px;
  text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;"> krishi farm pvt.ltd</span> <i class="fa fa-bars"></i>  
</button>';
            }

            ?>
  

  <div id="myOverlay" class="w3-right pr-3">
  
 <!-- model search bottom -->
  <a href="#"><button type="button" class="btn btn-primar w3-right text-light" data-toggle="modal" data-target="#myModal"><i  class="fa fa-search fa-1x" aria-hidden="true"></i></button></a>

  </div>

    <div id="lang" class="float-right pr-3">
      <div class="w3-dropdown-hover ">
      <button style="background-color:#FF69B4;" class="our w3-button" title="admin area" style="width: 100px;"><span class="w3-text-white"><i class="fa fa-user pr-2 ml-2"></i><?php echo $_SESSION['name'];?></span></button>     
       <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#"><button class="form-control  bg-primary w3-text-white" type="button"  data-toggle="modal" data-target="#myyModanll">
  <i class="fa fa-user pr-2"></i>my profile
</button></a>
<a href="logout.php"><button class="form-control  w3-red w3-hover-blue" ><i class="fa fa-power-off"></i>logout</button></a>                         </div>
                                      </div>
                                       </div> 

                                        <div id="lang" class="pull-right pl-1 ">
                                       <div class="w3-dropdown-hover ">
                                        <button class="our w3-button" style="background-color:#FF69B4;" title="help desk for any problem" style="width: 100px;"><span class="w3-text-white"><i class="fa fa-question" aria-hidden="true"></i></span></button> 
    <!--   <button class="our w3-button  w3-pink" title="help desk for any problem" style="width: 60px;"><span class="w3-text-white">help</span><i class="fa fa-caret-down"></i></button>  -->    
      <div class="w3-dropdown-content w3-bar-block w3-card-4 w3-pin" >
           <a href="http://localhost/timur%20farm/adminstatus/blogadmin/myprofile.php" class="w3-bar-item w3-button">guide/tutorial</a>
        <a href="admin_area.php" class="w3-bar-item w3-button">fruad/hacking/other mallcious problem</a>
        <a href="logout.php" class="w3-bar-item w3-button logout">system problem</a>
       
                                    </div>
                                    </div>
                                  </div>


                                   


</div>
</header>

<!-- Sidebar/menu -->
<header>
<nav class="w3-sidebar  w3-top  w3-white w3-animate-left mm  w3-food-lime"  style="z-index:3;  width:60%;" id="mySidebar"><br>
  <div class="w3-container w3-row w3-food-lime ">




    <hr>

    
    
  </div>
  <div class="container w3-center"> <h5 class="center">welcome</h5>

    <a class="w3-center" href="3">kupindedaha timur krishi farm pvt.ltd</a></div>

  <hr>
  <div class="w3-container ">
      <?php 

            $kiu= $_SESSION['admin'];

          include("dbc.php");


            $selectquery = "SELECT *FROM admin WHERE id='$kiu' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
             $result= mysqli_fetch_array($query);
              $status=$result['status'];


           if ($status==='1') {
              
?>

 <h5><b><i class="fa fa-dashboard"></i><a href="main.php"><b>dashboard</b></a> </h5>


 <?php
              # code...
            }
            else{
              echo ' <h5><b><i class="fa fa-dashboard"></i><a href="main1.php"><b>dashboard</b></a> </h5>';
            }

            ?>
   
  </div>

 

  <div class="w3-bar-block  ">
    <!-- <a href="#" class="w3-bar-item w3-button w3-padding-16  w3-dark-grey w3-hover-black"  id="hide" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a> -->



  
   <button class="ok  w3-bar-item w3-button w3-padding-16  " ><i class="fa fa-remove fa-fw" class=""></i>  Close Menu</button>
<!-- <div class="w3-dropdown-hover ">
      <button class="w3-padding-large w3-button" title="More">about_us<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="introduct.php" class="w3-bar-item w3-button">introduction</a>
        <a href="C:\Users\hp\Desktop\timur farm\masala.html" class="w3-bar-item w3-button">company_profile </a>
        <a href="C:\Users\hp\Desktop\timur farm\nurserry.html" class="w3-bar-item w3-button">mission & vision </a>
        
      </div>
    </div> -->
    <a href="http://localhost/timur%20farm/index.php" class="w3-bar-item w3-button w3-padding-large"><i class="fa fa-desktop"></i> website home</a>  
     <?php 

            $ki= $_SESSION['admin'];

          include("dbc.php");


            $selectquery = "SELECT *FROM admin WHERE id='$ki' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
             $result= mysqli_fetch_array($query);
              $status=$result['status'];


           if ($status==='2' || $status==='4') {
              
?>

 <a href="blog_view_index.php" class="w3-bar-item w3-button w3-padding-large"><i class="fa fa-rss"></i>blog</a> 


 <?php
              # code...
            }

            ?>



             <?php 

            $ki= $_SESSION['admin'];

          include("dbc.php");


            $selectquery = "SELECT *FROM admin WHERE id='$ki' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
             $result= mysqli_fetch_array($query);
              $status=$result['status'];


           if ($status==='3' || $status==='4') {
              
?>

<a href="product_index.php" class="w3-bar-item w3-button w3-padding-large"> <i class="fa fa-tasks"></i> product</a>


 <?php
              # code...
            }

            ?>

             <?php 

            $ki= $_SESSION['admin'];

          include("dbc.php");


            $selectquery = "SELECT *FROM admin WHERE id='$ki' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
             $result= mysqli_fetch_array($query);
              $status=$result['status'];


           if ($status==='3' || $status==='4') {
              
?>

<a href="order_enquery_index.php" class="w3-bar-item w3-button w3-padding-large"> <i class="fa fa-tasks"></i> Order & enquery</a>


 <?php
              # code...
            }

            ?>
    
      
       

        <a href="" class="w3-bar-item w3-button w3-padding-large"> <i class="fa fa-check"></i> pulish</a>

         <a href="" class="w3-bar-item w3-button w3-padding-large"> <i class="fa fa-tasks"></i> draft</a>

         
    <style >.dropdown .dropdown-item:hover {color: white;background-color:  #ff0000;
 
}.dropdown-menu a{border-bottom: 2px solid gray;
padding: 10px;}
.dropdown-menu .dropdown-item{padding: 10px;
background-color: #200000 ;}
</style>



    <script >
  $(document).ready(function(){
    $('.mm').hide();
    $('.ok').click(function(){
      $('.mm').toggle();

    });

  });
</script>
   
    <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-lock"></i> logout</a><br><br>
  </div>

  </nav>
</header>





<?php 
$cc=$_SESSION['admin'];

             include("dbc.php");
            $selectquery = "SELECT*FROM admin WHERE id='$cc'";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>
             
              <br><br> 

<!-- Button to Open the Modal -->


<!-- The Modal -->
<div class="modal" id="myyModanll">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header w3-center">
        <h4 class="modal-title ">MY PROFILE</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <div>
        

       
         <div class="w3-center" > <img class="w3-border" src="<?php echo ' '.$result['file'].''; ?> " width="160" height="190" >


<br><br>
          <div><button type="button" class="btn w3-blue" ><a href="admin_profile_edit.php?id=<?php echo $result['id']; ?> " class="w3-text-white">update your profile picture</a></button></div></div>


         
          <center><div class="col-sm-"> 

            <table border="1" cellspacing="0" cellpadding="10"
style="text-align:center;">
<tr>
<td rowspan=""><b>admin ID:</b></td>
<td><?php echo($result['id']) ?></td>

</tr>
<tr>
<td rowspan=""><b>name:</b></td>

<td><?php echo($result['username']) ?></td>


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
<td rowspan=""><b>address:</b></td>
<td><?php echo($result['address']) ?></td>

</tr>
 <tr>
<td rowspan=""><b>member since:</b></td>
<td><?php echo($result['date']) ?></td>

</tr>

</table></div>




</center>
           
       </div>
      </div>
     

      
      

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger w3-text-white w3-hover-green" ><a href="activate_1.php?id=<?php echo $result['id']; ?> " ><b class="w3-text-white">change password</b></a></button>
          <button type="button" class="btn btn-danger w3-hover-green" ><a href="admin_profile_edit.php?id=<?php echo $result['id']; ?> "><b class="w3-text-white ">edit profile</b></a></button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </div>
     

    </div>
  </div>
</div>



<center> 
                  
       
         <?php
              # code...
            }
            ?>


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
     
      
      <div class="container-fluid"> <form >
        <div class="row">
          <div class="col-sm-10">  <input  class="form-control"  type="text" placeholder="Search.."  name="search"></div>
          <div class="col-sm-2"><button type="submit" class=" form-control"><i class="fa fa-search "> search</i></button></div>
        </div>
         
          
         
        
         <br>

</form> </div>

       
     

    </div>
  </div>
</div>




 




  



