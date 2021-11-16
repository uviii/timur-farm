
<!DOCTYPE html>
<html>
<head>
  <title></title>
<?php include("link.php");?>
</head>
<body>
<br>
<hr>



<!-- for mobile view -->



<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top  w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button   w3-hover-none ok w3-hover-text-light-grey" id="btnn" ><i class="fa fa-bars"></i>  Menu</button>

<script >
  $(document).ready(function(){
    $('.mmm').hide();
    $('.2').hide();
    $('.kkk').click(function(){
      $('.mmm').toggle();
    
      $('.ss').focus(function(){

        $('.2').show();
        $('.1').hide();

        $('.ss') .blur(function(){
          $('.2').hide();
          $('.1').show();
        })
      })

  
      })
      

    });

</script> 

                        

<div id="myOverlay" class="container-fluid">
  <button class="kkk w3-right" ><i class="fa fa-search k"><span class="1">search</span> <span class="2">Xclose</span></i></button>
<form>
  <table class="w3-right w3-container mmm">
  <tr class="container-fluid " >
    <th  style="width: 100%;"><input  style="width: 100%; height: 5vh;" class="ss" type="text" placeholder="Search.."  name="search"></th>
       <th > <button style=" width: 100%; padding-left: 5px; height: 5vh;" type="submit" class="b"><i class="fa fa-search k"></i></button></th>
  </tr>
</table>
</form>

  </div>


                        <div class="col-md-12 col-sm-9 col-xs-12 ">
                            <div class="">
                                <a class="" target="_blank" href=""><div class="play-icon"></div></a>
                                  <div id="lang" class="pull-right pl-1 ">
                                     <div class="w3-dropdown-click">
      <button class="w3-padding-large our w3-button" title="More">about us<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
           <a href="C:\Users\hp\Desktop\timur farm\intro.html" class="w3-bar-item w3-button">introduction</a>
        <a href="C:\Users\hp\Desktop\timur farm\compny profile.html" class="w3-bar-item w3-button">company profle</a>
        <a href="C:\Users\hp\Desktop\timur farm\mission.html" class="w3-bar-item w3-button">mission &vission</a>
       
      </div>
    </div>

                                      <!--  <button> <a href="C:\Users\hp\Desktop\timur farm\admin.html" class="lang-title w3-medium">logout </a></button> -->
                                    </div>
                                                                    <!-- header - language -->
                                    
                                   <!--  <div id="lang" class="pull-right">
                                        <button><a href="C:\Users\hp\Desktop\timur farm\registration.html" class="lang-title w3-medium">admin_area </a></button>
                                    </div>
 -->

                                    
                             
                                <!-- /header - currency - -->
                            </div>

</div>


  <!-- <script >
  $(document).ready(function(){
    $('.mm').hide();
    $('.ok').click(function(){
      $('.mm').toggle();

    });

  });
</script> -->
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar  w3-top  w3-white w3-animate-left mm  w3-food-lime"  style="z-index:3;  width:60%;" id="mySidebar"><br>
  <div class="w3-container w3-row w3-food-lime ">




    <hr>

    
    
  </div>
  <div class="container w3-center"> <h5 class="center">welcome</h5>

    <a class="w3-center" href="3">kupindedaha timur krishi farm pvt.ltd</a></div>

  <hr>
  <div class="w3-container ">
    <h5><b><i class="fa fa-dashboard"></i><a href="http://localhost/timur%20farm/adminstatus/blogadmin/main.php"><b>dashboard</b></a> </h5>
  </div>

 

  <div class="w3-bar-block  ">
    <!-- <a href="#" class="w3-bar-item w3-button w3-padding-16  w3-dark-grey w3-hover-black"  id="hide" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a> -->



  
   <button class="ok  w3-bar-item w3-button w3-padding-16  " ><i class="fa fa-remove fa-fw" class=""></i>  Close Menu</button>

    <a href="C:\Users\hp\Desktop\timur farm\index2.html" class="w3-bar-item w3-button w3-padding-large"><i class="fa fa-desktop"></i> website home</a>  
     <a href="C:\Users\hp\Desktop\timur farm\index2.html" class="w3-bar-item w3-button w3-padding-large"><i class="fa fa-rss"></i>blog</a> 
      <a href="C:\Users\hp\Desktop\timur farm\index2.html" class="w3-bar-item w3-button w3-padding-large"><i class="fa fa-tags"></i> blog categories</a>
       <a href="C:\Users\hp\Desktop\timur farm\index2.html" class="w3-bar-item w3-button w3-padding-large"> <i class="fa fa-tasks"></i> product</a>
        <a href="C:\Users\hp\Desktop\timur farm\index2.html" class="w3-bar-item w3-button w3-padding-large"> <i class="fa fa-check"></i> pulish</a>
         <a href="C:\Users\hp\Desktop\timur farm\index2.html" class="w3-bar-item w3-button w3-padding-large"> <i class="fa fa-tasks"></i> draft</a>
          <a href="C:\Users\hp\Desktop\timur farm\index2.html" class="w3-bar-item w3-button w3-padding-large"><i class="fa fa-trophy"></i> editor choice</a>
           <a href="C:\Users\hp\Desktop\timur farm\index2.html" class="w3-bar-item w3-button w3-padding-large"><i class="fa fa-bar-chart-o"></i> admin status</a>

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
   
    <a href="C:\Users\hp\Desktop\timur farm\registration.html" class="w3-bar-item w3-button w3-padding"><i class="fa fa-lock"></i> login/register</a><br><br>
  </div>

  </nav>

<hr>
<div class="container"> <a href="">dashboard</a> >><a href="">website</a></div>


</header>





<?php include("footer.php");?>
   
   