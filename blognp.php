<?php
 include("./adminstatus/blogadmin/dbc.php"); // Database connection file
// require_once('./libs/fetch_data.php');  // PHP functions file
?>




<!DOCTYPE html>
<html>
<head>
  <title>timur farm</title>


<?php include("link.php");?><br><br>
 



<link rel="shortcut icon" href="./p.image/logo.png" type="image/x-icon" />
</head>
<body style="padding: 0;margin:1px ;"><div style="padding: 0; ">
  
<?php include("header.php");?>

<?php include("mobile_nav.php");?>
<?php include("desktop_nav.php");?>



 


<?php
 include("mobile_nav.php"); // Database connection file
// require_once('./libs/fetch_data.php');  // PHP functions file
?>


<!-- Page content -->
 
 

<h1 class="w3-center">blog</h1>
<hr>


  <dir class="container">
    <div class="row">
      <div class="col-sm-2 " style="background-color: transparent;">
        <style>
.collapsible {
  background-color: ;
  color: black;
  cursor: pointer;
  padding: 10px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: green;
}

.collapsible:after {
  content: '\002B';
  color: black;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0px px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: f1;
}
.p{ padding-top: 10px; }
.p a li{padding: 5px;}
</style>





<h4 class="w3-center">catagories</h4>
<?php 

            $selectquery = "SELECT*FROM  blog_categories ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php $name=$result['id']; ?>
<button class="collapsible"> <?php echo $result['name']; ?> </button>
<?php
              # code...
            }
            ?>

     
           
  <div class="content">
<ul class="p" style="list-style: none;">

    <a href=""><li>जलवायु सम्बन्धी जानकारी</li></a>
    <a href=""><li>माटो सुधार</li>
</a>  </ul>
</div>


<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script></div>
       <div class="col-sm-10 bg-secndary">

        <div class="container-fluid">
          <div class="row">
          <div class="col-sm-8 ">

          <style>


.img1 {
  float: right;
}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

.img2 {
  float: right;
}
</style>


 <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs ORDER BY id ASC LIMIT 3";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php


echo '<div>
  <div class=" w3-hide-small"><br>
  <h3 class="w3-center"> <a class="w3-center" href="blog_detail.php?id='.$result['id'].'">'.$result['title'].'</a>
</h3>

  <div class="post-meta w3-center"  style="display: inline-block;">

            <span class="mt-0">
            <a class="w3-center" href="#"><i class="fa fa-time"></i> '.$result['date'].'</a>| 
            <span class="mt-0">
            <a class="w3-center" href="#"><i class="fa fa-edit"></i> '.$result['authers'].'</a>|
            </span><span><i class="fa fa-tag"></i> <a class="w3-center" href="#">
             '.$result['tags'].'</a></span>
                                                            </div><hr>
      <img src="./adminstatus/blogadmin/'.$result['photo'].'" class="img1" alt="fantastic cms" width="auto" height="300">
      '.$result['content'].'                                                       
 
<a href="blog_detail.php?id='.$result['id'].'"></a>
.<button id="btt" class="w3-center"><a href="blog_detail.php?id='.$result['id'].'">...more..</a></button><br> <div id="tog"> ।</div>

</div></div><hr>




            ';
            ?>
       



                

               
         <?php
              # code...
            }
            ?>




 <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs ORDER BY id ASC LIMIT 3";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php


echo '<div class="w3-hide-large">
  <div class="w3-center"><br>
  

  
      <img src="./adminstatus/blogadmin/'.$result['photo'].'" class="img1" alt="fantastic cms" width="auto" height="300">
      <br><hr><br>
     


<div class="post-meta w3-center"  style="display: inline-block;">

 <h3> <a class="w3-center w3=blue" href="blog_detail.php?id='.$result['id'].'"><b class="w3-text-blue w3-hover-green">'.$result['title'].'</b></a>
</h3>
            <span class="mt-0"><i class="fa fa-user"></i>
            <a class="w3-center" href="#"><i class="fa fa-user"></i> '.$result['date'].'</a>| 
            <span class="mt-0">
            <a class="w3-center" href="#"><i class="fa fa-user"></i> '.$result['authers'].'</a>|
            </span><span><i class="fa fa-tag"></i> <a class="w3-center" href="#">
             '.$result['tags'].'</a></span>
                                                            </div><hr>



      '.$result['content'].'                                                       
 
<a href="blog_detail.php?id='.$result['id'].'"></a>
.<button id="btt" class="w3-center"><a href="blog_detail.php?id='.$result['id'].'">...more..</a></button><br> <div id="tog"> ।</div>

</div></div><hr>




            ';
            ?>
       



                

               
         <?php
              # code...
            }
            ?>




             <hr>



<div>
  <div class="clearfix"><br>
  <h3>दिगो कृषि स्वास्थ्य र सुखी जीवनको लागि खेती</h3>
  <div class="post-meta"  style="display: inline-block;"><p> 24th july 2020</p>
            <span class="mt-0"><i class="fa fa-user"></i><a href=".com/Main#">kupindedaha timur krishi farm.com</a> </span><span><i class="fa fa-tag"></i> <a href=".com/Main#">smart agri</a></span>
                                                            </div><hr>
  <img class="img1" src="images/kafl.jpg" alt="Pineapple" width="170" height="170">
 दिगो कृषि भनेको लामो समयसम्म मानिस र जमीनको स्वास्थ्यको लागि गरिने कृषि हो । दिगो कृषि प्रणाली प्रयोग गर्ने कृषकहरूले पौष्टिक खानाको लागि परिवार र समुदायको जरुरत पूरा गर्नुको साथै पानी, माटो र भविष्यको लागि बीउको संरक्षण पनि गर्छन् । धेरैजसो खाना जमीनबाटै आउँछ । तर धेरै मानिसहरूसँग स्वस्थ खानाको जरुरत पूरा गर्न थोरै जमीन हुन्छ वा जमीन नै हुँदैन । दिगो कृषि, सहकारी खाद्यान्न बजार (पृष्ठ ३१३) र खाद्यन्नको बराबर बाँडफाँडले यी समस्याबाट छुट्कारा पाउन मद्दत गर्छ ..<button id="btt" class="w3-center">...more..</button><br> <div id="tog"> </div>
</div></div><hr>






<div class="clearfix">
  <h3>तपाईको माटो चिन्नुहोस्</h3><div class="post-meta"  style="display: inline-block;"><p> 24th july 2020</p>
            <span class="mt-0"><i class="fa fa-user"></i><a href=".com/Main#">kupindedaha timur krishi farm.com</a> </span><span><i class="fa fa-tag"></i> <a href=".com/Main#">smart agri</a></span>
                                                            </div><hr>
  <img class="img2" src="./images/kafl.jpg" alt="Pineapple" width="170" height="170">
 
 तपाईको माटो चिन्नुहोस्
माटो भनेको बालुवा, बलौटे, चिम्ट्याइलो र जैविक पदार्थ जस्तैः कीराहरू, जीवाणु, हरियो पातहरू, कुहिएका बिरुवाहरू र मलको मिश्रण हो । <br>
यी पदार्थहरूको परिमाण र जमीनमा तपाईको कामको तरीकाले माटोको बनोट (कति खस्रो र मसिनो छ भन्ने), उर्बरा (बालीहरू बढ्नको लागि कति उपयुक्त छ) र माटोको संरचना (माटोहरू कसरी आपसमा समेटेका छन्) मा असर गर्छ । माटोको राम्रो बनोट, संरचना र उर्बरा शक्तिले हावा ..<button id="bt">...more..</button><br> <div id="togle"></div>
 

 <style > #bt{ border: none; background-color: transparent;color: blue; }
#btt{ border: none; background-color: transparent;color: blue; }</style>


</div> <br><br></div>

<script >
  $(document).ready(function(){
    $('#togle').hide();
    $('#bt').click(function(){
      $('#togle').toggle();

    });

  });
</script><script >
  $(document).ready(function(){
    $('#tog').hide();
    $('#btt').click(function(){
      $('#tog').toggle();

    });

  });
</script>

          <div class="col-sm-4 bg-daner"><style>


.containe {
  border: px solid #dedede;
  background-color: #f1f1f1;
  border-radius: px;
  padding: 10px;
  margin: 10px 0;
}


.containe::after {
  content: "";
  clear: both;
  display: table;
}

.containe .x {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  
}


.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.sun{ font-size: 10px; font-weight: bold; margin-right: 4px; }


/*section heading*/
.section-heading {
    width: 100%;
}

.h4 a{color: white;
background-color: black;}


.section-heading strong {
  display: inline-block;
  padding: 7px 20px;
  background: #252525;
  color: #FCFCFC;
}


.section-heading span {
  border-bottom: 7px solid #252525;
  display: block;
margin-top: 0px;}
</style>



<h4 class="section-heading"> <a href=""><strong><B>famous</B> </strong> </a><span></span></h4>

 <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs ORDER BY id ASC LIMIT 8";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php


echo '<div>

<div class="containe">
  <a href="blog_detail.php?id='.$result['id'].'"><img class="x" src="./adminstatus/blogadmin/'.$result['photo'].'" alt="Avatar" style="width:100%;"></a>
  <a href="blog_detail.php?id='.$result['id'].'">'.$result['title'].'.....</a>

  <span class="time-right"><span class="sun" style="color: green;">'.$result['date'].' ||</span><i class="fa fa-tag"></i> <a  href=".com/Main#"> '.$result['tags'].'</a></span>
</div>

<hr>';
            ?>
           
         <?php
              # code...
            }
            ?>









          </div>
        </div></div>
        
    </div>
  </dir>


<br>







<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>



  


<?php
 include("./adminstatus/blogadmin/dbc.php"); // Database connection file
// require_once('./libs/fetch_data.php');  // PHP functions file
?>



<section class="main-content-w3layouts-agileits">
        <div class="container">
            <h3 class="w3-center"><b>latest_artical</b></h3><br>
            <div class="row">
                <!--left-->
                <div class="col-lg-12 left-blog-info-w3-layouts-agileits text-left">
                    <!--grid blogs below-->
                    
                    <div class="blog-girds-sec">
                        <div class="row">
                             <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs ORDER BY id ASC LIMIT 5";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php


echo '<div class="col-md-3 blog-grid-top" >
            <div class="b-grid-top" style="border:2px solid gray;">
            <div class="blog_info_left_grid" >
            <a href="blog_detail.php?id='.$result['id'].'">
            <img src="./adminstatus/blogadmin/'.$result['photo'].'" class="img-fluid" alt="fantastic cms" style="width:350px;height:250px">
            </a>
            </div>
           
           
            <ul class="blog-icons w3-center">
            
            <li>
            <a href="#">
            <i class="fa fa-user"></i> '.$result['authers'].'</a>|
            </li>
            <li>
            <a href="#">
            <i class="fa fa-tag"></i> '.$result['tags'].'</a>
            </li>

           
            

            </ul>
             <div> <h5 class="w3-center">
            <a href="blog_detail.php?id='.$result['id'].'">'.$result['title'].'</a>
            </h5></div>
           
                             <div class="w3-center"><a href="#"><button class="bg-success">view_detail</button></a></div><br> </div><br>

            </div>';
            ?>
       <!--  <th>
             <td  class="w3-smal  w3-table-all ">  <?php echo $result['id']; ?>  </td>
             <td  class="w3-small w3-table-all   ">  <?php echo $result['name']; ?>  </td>
              <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['weight']; ?>  </td>
                <td class="w3-small w3-table-all w3-responsible w3-table-all ">  <?php echo $result['price1']; ?>  </td>
                <td class="w3-small w3-table-all w3-responsible w3-table-all ">  <?php echo $result['price2']; ?>  </td>
              
               <script >
  $(document).ready(function(){
    $('.intro').hide();
    $('.view').click(function(){
      $('.intro').toggle();

    });

  });
</script>



                

                 <td  class="w3-small w3-table-all ">  <img src="<?php echo './adminstatus/blogadmin/'. $result['photo1'];?>" width="100%" height="200px">  </td>
                 
        
        </th> -->
         <?php
              # code...
            }
            ?><hr>
                            <!--bloggrids-->
                        </div>
                    </div>
                </div>
              

            </div></div></section>

</div>

<style >.blog-icons{list-style: none; display:inline-flex; margin-left:  50px; }</style>


                                                        

  
      
 <br>
</div>
<?php include("footer.php");?>