


<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>



<?php include("header.php");?>


<?php include("link.php");?>


<?php 

            include("dbc.php");
            
              
?>
    

<br><br><div> <h4 class="w3-center"><b class="" style="font-size: 23px; color: green;"> Welcome <span class="w3-text-pink"><?php echo $_SESSION['name']?></span>  In Blog Managment Segment</b></h4></div>
<hr style="border-bottom: 2px dotted green;">
<br>







<center>
<div class="w3-center container">

<table class="container">
  <tr><th><button style="border: transparent;" title="click here for all blog file" class="form-control w3-blue"><a href="blogview.php"><span class="text-light">All Artical Details</span></a> </button>
</th>
<th>   <button style="border: transparent;" title="click here for all blog categories" class="form-control  w3-blue"><a href="categories.php"><span class="text-light">Artical Categories</span></a> </button></th></tr>

<table class="container">
  <tr>
  <th>
    <br>
     <button style="border: transparent;" title="click here for all gallery" class="form-control  w3-blue"><a href="gallery_manage.php"><span class="text-light">Gallery</span></a> </button>

  </th>
</tr>
</table>
<table class="container">
  <tr>
  <th>
    <br>

       <button style="border: transparent;" title="click here for all gallery" class="form-control  w3-blue"><a href="index_intro_view.php"><span class="text-light">Index Introduction</span></a> </button>
  </th>
</tr>
</table>
</table>

</div></center>




<div class=""><?php include("footer.php"); ?>
</div>
<?php } ?>













