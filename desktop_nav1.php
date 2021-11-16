
<!-- Navbar -->
<style >
nav{
  max-width:100%; height:10vh;
 background-color:white;
color:blue;
display:flex;
justify-content:space-between;
align-item:center;
}
nav .logo{
  
  width:10%;
  display:flex;
  justify-content:space-around;
  item-align:center;
  text-align:center;
  background-color:#fff;
  color:#5067a0;
  float:left;
  
}
nav .logo  h1{
color:#5067a0;
align-items: center;
margin:0px;
padding:0px;
text-shadow:2px 1px 5px  #5067a0;
}

nav .menu{
  width:65%;
  display:inline-flex;
  justify-content:space-around;
  text-align-center;
  margin-top: 0px;
  padding:px;
  color:white;
}
nav .navv{
  width:90%;
  display:flex;
  justify-content:space-around;
  text-align-center;
  margin-top: 1px;
  padding:px;
  color:white;
}
nav .menu a{
text-decoration:none;
text-shadow:2px 1px 5px  #5067a0;
color:#5067a0;
font-size: 16px;
}
nav .menu .mt-3 button{
text-decoration:none;
text-shadow:2px 1px 5px  #5067a0;
color:#5067a0;
font-size: 16px;
}

</style>

<nav class="sticky-top w3-hide-small">

<div class="logo "><h4 class=" mt-3 "> <i class="fa fa-home"></i> <a href="index2.php">Home </a></h4></div>
<div class="navv">
<div class="menu ">
  <div class="w3-dropdown-hover w3-hide-small mt-3 " style="border: none; background-color: transparent;">
      <button style="border: none; background-color: transparent; " class="text-primary" title=""><i class="fa fa-home"></i>about us<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a href="http://localhost/timur%20farm/intro.php" class="w3-bar-item w3-button"><i class="fa fa-home"></i>introduction</a>
        <a href="C:\Users\hp\Desktop\timur farm\compny profile.html" class="w3-bar-item w3-button"><i class="fa fa-home"></i>company profle</a>
        <a href="C:\Users\hp\Desktop\timur farm\mission.html" class="w3-bar-item w3-button">mission &vission</a>
        
      </div>
    </div>


 <div class="w3-dropdown-hover w3-hide-small mt-3 " style="border: none; background-color: transparent;">
        <button style="border: none; background-color: transparent; " class="text-primary" title=""><i class="fa fa-home"></i>prosuct&service<i class="fa fa-caret-down"></i></button>    
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="medicinal.php" class="w3-bar-item w3-button">organic medicinal product</a>
        <a href="fmasala.php" class="w3-bar-item w3-button">masala </a>
        <a href="food_veg.php" class="w3-bar-item w3-button">food& vegetables </a>
        <a href="nurserry.php" class="w3-bar-item w3-button">nurserry product </a>
        
      </div>
    </div>
<!-- <a href="#" class="mt-3"> <i class="fa fa-home"></i>production and service</a> -->
<a href="http://localhost/timur%20farm/blog.php" class="mt-3"><i class="fa fa-home"></i>social impact</a>
 <div class="w3-dropdown-hover w3-hide-small mt-3 " style="border: none; background-color: transparent;">
        <button style="border: none; background-color: transparent; " class="text-primary" title=""> <i class="fa fa-photo"></i>gallery<i class="fa fa-caret-down"></i></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="gallery_view.php" class="w3-bar-item w3-button">photos gallery</a>
        <a href="gallery_view_vedio.php" class="w3-bar-item w3-button">videos gallery </a>
        
        
      </div>
    </div>
 <div class="w3-dropdown-hover w3-hide-small mt-3 " style="border: none; background-color: transparent;">
        <button style="border: none; background-color: transparent; " class="text-primary" title=""> <i class="fa fa-phone"></i>contact us<i class="fa fa-caret-down"></i></button>
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="" class="w3-bar-item w3-button">enquiry</a>
        <a href="C:\Users\hp\Desktop\timur farm\contact.html" class="w3-bar-item w3-button">visit info. </a>
        
        
      </div>
    </div>
 <div class="w3-dropdown-hover w3-hide-small mt-3 " style="border: none; background-color: transparent;">
  <button   style="border: none; background-color: transparent; " type="button" class="  text-primary" data-toggle="modal" data-target="#myModal">
  <a href="#"><i class="fa fa-search">search</i></a></button>
</div>


  
</div>




<div class="w3-dropdown-hover w3-hide-small mt-3 " style="border: none; background-color: transparent;">
        <button style="border: none; background-color: transparent; " class="w3-text-pink" title=""><b><i class="fa fa-user"><?php echo $_SESSION['name'];?></i></b><i class="fa fa-caret-down"></i></button>    
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#"><button class="form-control  bg-primary w3-text-white" type="button"  data-toggle="modal" data-target="#myyModal">
  <i class="far fa-id-card"></i>view_profile
</button></a>
<a href="order_checkout.php"><button class="form-control  bg-primary w3-text-white" ><i class="fas fa-shopping-cart"></i>
  order/kart
</button></a>
<a href="logout.php"><button class="form-control  w3-red w3-hover-blue" ><i class="fas fa-power-off"></i>
  logout
</button></a>
        
        
      </div>
    </div>
</div>
</nav>





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
<div class="modal" id="myyModal">
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
     

      
      

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" ><a href="user_update.php?id=<?php echo $result['id']; ?> ">edit</a></button>
         <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
      </div>
     

    </div>
  </div>
         
       
         <?php
              # code...
            }
            ?>




<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">


  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">company profile</a>
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()"> product & service</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">quality assurance</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">social impact</a>
   <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">media</a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">contact us</a>

</div>
<div class="row" style="margin-top: %">
   <div class="col-md-8">

  <!-- Button to Open the Modal -->


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
     
      
      <div class="container-fluid">  <form action="search.php" method="post" class="form-inline my-2 my-lg-0 header-search" name="form">
        <div class="row">
          <div class="col-sm-10">  <input  class="form-control"  type="text" placeholder="Search.."  name="search"></div>
          <div class="col-sm-2"><button type="submit" class=" form-control"><i class="fa fa-search "> search</i></button></div>
        </div>
         
          
         
        
         <br>

</form> </div>

       
     

    </div>
  </div>





<hr>
           
            </div>
          </div>

  <!---Comment Display Section --->

 

        </div>
