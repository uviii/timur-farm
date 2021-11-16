
<!-- <style>
div.sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 0;
  background-color: yellow;
  padding: 50px;
  font-size: 20px;
}
</style> -->

<?php
session_start();

  
?>


  <header  class="w3-top">

<style type="text/css">

  .id3{list-style: none;

background-color: ; display: inline-flex; float: right;}
.id3 li{ padding: 0px  10px 0px; margin-top: 0px;
text-decoration: none;}</style>




  

  
        <div class="row " style="background-color: pink;">
          <div class="col-sm-9 col-xs-12  " style=" ">


            <a class="navbar-brand w3-center" href="index.php" >
              <img src="images/logo.png" alt="kupindedaha timur farm pvt.ltd logo" width="80px" height="" style="margin-left: 0px;">
               <h3 style="display: inline-flex;" class="w3-text-orange w3-center">Kupinde Timur </h3> </a>&nbsp; &nbsp; &nbsp;
<style >.our li{ display: inline-flex; padding: 2px; }</style>
             
             
              
          </div>
        
	
 <!--  <div class="mt-1">
    <script type="text/javascript">
  function active(){
    var sb=document.getElementById('searchbox');
    if (sb.value=='search...') {
      sb.value='';
      sb.placeholder='search...'
    }
  }
  function inactive(){
    var sb=document.getElementById('searchbox');
    if (sb.value=='') {
      sb.placeholder=''
      sb.value='search...'
    }
  }
</script>

<form action="search.php" method="GET" id="searchform">
   <input type="text" class="w3-round pl-4"id="searchbox"  name="q" placeholder="search product by name.." maxlength="100" autocomplete style="width: 70%; height: 6vh;"> 
    <button class="w3-round w3-text-orange w3-hover-green " type="submit" value="search" name="submit" style=" height: 6vh;"> <i class="fa fa-search"></i> search</button>
</form>
  </div> -->


   
    
     <div class="col-sm-3 col-xs-12 w3-center w3-blu  " style=" ">

      <ul class="id" style="">

   


       
        <?php 

   echo '<li class="ml-2 w3-dropdown-hover  mt-2 " >
        <button style="border: none; background-color: pink; font-size:25px;  " class="w3-text-white" title=""><b><i class="fa fa-user mr-2">'.$_SESSION['name'].'</i></b><i class="fa fa-caret-down "></i></button>    
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="myprofile.php"><button class="form-control  bg-primary w3-text-white" type="button"  data-toggle="modal" data-target="#mymodle">
  <i class="fa fa-user"></i>view_profile
</button></a>

<a href="logout.php"><button class="form-control  w3-red w3-hover-blue" ><i class="fa fa-power-off"></i>
  logout
</button></a>
        
        
     
    </div></li>';
         ?>

           <!--  <li>jfj</li> -->
      </ul>


<style type="text/css">.idd{list-style: none;
background-color: re; display: inline-flex;}
.idd li{ padding: 0px  10px 0px; margin-top: 10px;
text-decoration: none;}
@media(max-width: 767px)
{.idd{display: none;}}
</style>

     </div>
 </div>
          
</header>

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
  top: -15px;
  right: -25px;
  padding: 5px 10px;
  border-radius: 60%;
  /*background-color: orange;*/
  color:white;
  font-size: 15px;

}

#grad1 {
 
  background-color: #FF69B4; /* For browsers that do not support gradients */

}
</style>
<!-- Button to Open the Modal -->

