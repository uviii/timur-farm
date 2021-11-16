


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
    <br><br>

<br><div class="container"> <h4 class="w3-center" ><b class="" style="font-size: 20px; color: green;"> welcome <span class="w3-text-pink"><?php echo $_SESSION['name']?></span>  in blog managment segment</b></h4></div>
<hr style="border-bottom: 2px dotted green;">
<br>







<center>
<div class="w3-center container">

<table class="container" cellpadding="1" cellspacing="0">
  <tr><th><button style="border: transparent;height: 7vh;" class="form-control w3-blue"><a href="prooduct_view.php"><span class="text-light">All Product</span></a> </button>
</th>
<th>   <button style="border: transparent;height: 7vh;" class="form-control w3-hover-green w3-blue"><a href="product_categories.php"><span class="text-light">Product Categories</span></a> </button></th></tr>

<table class="container" cellpadding="1" cellspacing="0">
  <tr>
  <th>
    <br>
     <button style="border: transparent;height: 7vh;" class="form-control w3-hover-green w3-blue"><a href="medicinal_add_view.php"><span class="text-light">Introduction Product Categories</span></a> </button>
  </th>
</tr>
</table>
<table class="container" cellpadding="1" cellspacing="0">
  <tr>
  <th>
    <br>
     <button style="border: transparent;height: 7vh;" class="form-control w3-hover-green w3-blue"><a href="product_qty_view.php"><span class="text-light">Available Product QTY</span></a> </button>
  </th>
 <th>
    <br>
     <button style="border: transparent;height: 7vh;" class="form-control w3-hover-green w3-blue"><a href="comment_product.php"><span class="text-light"> Product Reviews </span></a> </button>
  </th>
</tr>
</table>
<table class="container" cellpadding="1" cellspacing="0">
  <tr>
  <th>
    <br>
     <button style="border: transparent;height: 7vh;" class="form-control w3-hover-green w3-blue"><a href="product_img_view.php"><span class="text-light">Product Img Add</span></a> </button>
  </th>
</tr>
</table>
</table>

</div></center>
<br>

<br><br><br><br><br>
<div class=""><?php include("footer.php"); ?>
</div>
<?php } ?>













