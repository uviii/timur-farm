<?php
 include("./adminstatus/blogadmin/dbc.php"); // Database connection file

// require_once('./libs/fetch_data.php');  // PHP functions file
?>

<?php //code to get the item using its id


$id=$_REQUEST['id']; 

$query="SELECT*FROM blogs WHERE id='".$id."'";
 $result=mysqli_query($conn,$query) or die ( ((is_object($conn))? mysqli_error($conn) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$row = mysqli_fetch_assoc($result);
//pageview count query
$page=$row['title'];
$count="SELECT * FROM blog_page_hit WHERE page='".$page."'";$feedback=mysqli_query($conn,$count) or die ( ((is_object($conn))? mysqli_error($conn) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$roo=mysqli_fetch_assoc($feedback);

?>






<!DOCTYPE html>
<html>
<head>
  <title>timur farm</title>

<?php include("link.php");?>





<?php include("header.php");?>

<?php  require_once("./adminstatus/blogadmin/dbc.php");



### EDIT HERE ###

// DB CONNECT INFO
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "con";


// DB TABLE INFO
$GLOBALS['hits_table_name'] = "blog_page_hit";
$GLOBALS['info_table_name'] = "blog_visitor_info";

### STOP EDITING HERE ###

// CONNECT TO DB




try {
  $GLOBALS['db'] = new PDO("mysql:host=".$servername.";dbname=".$dbname, $username, $password, array(PDO::ATTR_PERSISTENT => false, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_EMULATE_PREPARES => false));
}
catch(PDOException $e) {
    echo $e->getMessage();
}

?>

<?php 
  require_once('counter.php');
  
  $pn=updateCounter(''.$row['title'].''); // Updates page hits
  echo $pn;
  // updateInfo(); // Updates hit info ?>


 ?>

<?php include("mobile_nav.php");?>
<?php include("desktop_nav.php");?>



 


<?php
 include("mobile_nav.php"); // Database connection file
// require_once('./libs/fetch_data.php');  // PHP functions file
?>


<!-- Page content -->
 
 

<h1 class="w3-center">blog</h1>
<hr>




<div class="container">
  
  <div class="row">
    <!-- for right sidebar -->
    <div class="col-sm-2" style="background-color: transparent;">
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




<button class="collapsible"> फसल उत्पादन</button>
<div class="content">
  <ul class="p" style="list-style: none; padding: px;">
    <a href="C:\Users\hp\Desktop\timur farm\blog.html"><li>माटो स्वास्थ्य</li></a>
    <a href="C:\Users\hp\Desktop\timur farm\blog.html"><li>जलवायु सम्बन्धी जानकारी</li></a>
    <a href="C:\Users\hp\Desktop\timur farm\blog.html"><li>माटो सुधार</li>
</a>  </ul>
  
</div>
<button class="collapsible">Open Section 2</button>
<div class="content">
<ul class="p" style="list-style: none;">
    <a href=""><li>माटो स्वास्थ्य</li></a>
    <a href=""><li>जलवायु सम्बन्धी जानकारी</li></a>
    <a href=""><li>माटो सुधार</li>
</a>  </ul>
</div>
<button class="collapsible"> फसल उत्पादन</button>
<div class="content">
  <ul class="p" style="list-style: none;">
    <a href=""><li>माटो स्वास्थ्य</li></a>
    <a href=""><li>जलवायु सम्बन्धी जानकारी</li></a>
    <a href=""><li>माटो सुधार</li>
</a>  </ul>
  
</div>
<button class="collapsible">थप जानकारी...</button>
<div class="content">
   <ul class="p" style="list-style: none;">
     <a href=""><li>ok</li></a>
     <a href=""><li>ok</li></a>
     <a href=""><li>ok</li></a>
   </ul>
 

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
</script>
    </div>
    <!-- maain bodt -->
    <div class="col-sm-10">
      
      <div class="row">
        <!-- new detail -->
        <div class="col-sm-8"><style>


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
            $pid=$_GET['id'];
            $selectquery = "SELECT*FROM blogs WHERE id =$pid";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>

                           <?php

 echo '<div>
 <div><div class="clearfix"><br>
  <h3> '.$result['title'].'</h3>



  <div class="post-meta"  style="display: inline-block;"><p>'.$result['date'].'</p>
            <span class="mt-0"><i class="fa fa-user"></i><a href=".com/Main#">'.$result['authers'].'</a> </span><span><i class="fa fa-tag"></i> <a href=".com/Main#">'.$result['tags'].'</a></span>
                                                            </div><hr>

    
     <img src="./adminstatus/blogadmin/'.$result['photo'].'" class="img2" alt="fantastic cms" width="auto" height="270">                                                        
'.$result['content'].'


</div></div>
                  <style > #bt{ border: none; background-color: transparent;color: blue; }
#btt{ border: none; background-color: transparent;color: blue; }</style>
               
</div>';

                  ?>
       
         <?php
              # code...
            }
            ?>






<br><br>
<div class="w3-center"><button class="w3-blue"><i class="fas fa-like"></i> like </button>


<button class="w3-blue"><i class="fas fa-share"></i>share</button><br><hr>


</div>

 <?php include("comment_ad.php");?> 
  <?php include("comment_fetch.php");?> 





</div>

        <!-- rigt news list -->
        <div class="col-sm-4"> <style>


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
      </div>
    </div>
  </div>
</div>


<!-- end -->








<P>FJASOIFJAISJFSKLJ</P>






<!-- comentbox -->







 <br><br></div>

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


<br><br>


  
<!-- Button to Open the Modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mModal">
 <i class="fas fa-reply"></i>reply
</button>





<!-- The Modal -->
<div class="modal" id="mModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">replay and comment section</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "con";

$conn = mysqli_connect($servername , $username , $password ,$dbname);

if ($conn) {
  // echo "conetion ok";
  # code...
}else{echo "conection failed" .mysqli_connect_error();

}

?>


<?php 

error_reporting(0);
if(isset($_POST['submit'])){


$pid = $_POST['pid'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$text = $_POST['text'];
$title = $_POST['title'];
// INSERT INTO `comment_ad`(`id`, `pid`, `name`, `email`, `phone`, `title`, `text`, `date`, `status`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9])

// INSERT INTO `comment_ad`(`id`, `name`, `email`, `phone`, `title`, `text`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7])

$sql="INSERT INTO `comment_ad`( `pid` , `name` , `email`, `phone` , `title`,  `text`) 
VALUES ('$pid','$name','$email','$phone','$title' ,'$text')";


// echo "$sql";
$data = mysqli_query($conn ,$sql);

if($data)
 {

  
  echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
  
}

else{
   echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}
// header('location:registration.php');
}

 
?>




<div class="container">
  <div class="row bg-succes pb-3">
      
      <div class="col-lg-12 bg-primar cin">
        <form class="pl-5"action="" method="POST"  enctype="multipart/form-data" >
  <div class="  row pt-4">

    <div class="col-lg-6"><input type="name"  name="name" class="form-control pl-4" value="" class=" ml-4"  placeholder=" entter your full  name*" required></div>
    <div class="col-lg-6 "><input type="phone" name="phone" class="form-control pl-4 " value="" class=" ml-4 mr-1"  placeholder="enter your phone no. with country code(optional)*"></div><br><br>

    <div class="container form-group w3-center"><input type="email" name="email" class="form-control  " value="" class=" ml-4 mr-1" placeholder="enter your email id*"  required></div><br><br>

<div class="mr-5"><textarea class="ml-3  w3-round-large form-control  pl-5" cols="105" rows="5" name="text" placeholder="enter your Requirement detail/enquiry" required></textarea></div><br><br><br><br>



<div class="ml-5 pt-4">
<span class=" checkbox"><span class="checkbox validates-as-required" required><span class="list-item first last"><input type="checkbox" name="checkbox" value="I am not a Robot"><span class="pl-2">I am not a Robot</span></span></span></div><br><br>

<div class="pt-4"><input type="submit" name="submit" value="send" class="ml-4 w3-round-large w3-medium w3-green form-control"></div>

<?php 

            include("./adminstatus/blogadmin/dbc.php");
            $id=$_GET['id'];
            $selectquery = "SELECT*FROM blogs WHERE id =$id";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>

                          

 
      <div class="col-lg-6 w3-hide"> 

        <div class="container form-group w3-center w3-hide"><input type="text" name="title" class="form-control  " value=" ( <?php echo htmlentities($result['id']) ?>)- <?php echo($result['title']) ?>" class=" ml-4 mr-1" ></div></div>

 <div class="container form-group w3-center w3-hide"><input type="text" name="pid" class="form-control  " value=" <?php echo($result['id']) ?>" class=" ml-4 mr-1" ></div></div>

              <br><br>    
       
         <?php
              # code...
            }
            ?>



  </div> 
  
</form ></div>
    </div>
  </div>
</div>
<!-- INSERT INTO `contact_product`(`id`, `name`, `phone`, `email`, `text`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6]) -->
      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
</span></div>
  
<br>

<?php include("footer.php");?>









































