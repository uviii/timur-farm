


<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>

<?php include("header_product.php") ?>

<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM  admindetail  LIMIT 2 ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
    <br><br>

<br><div class="container"> <h4 class="w3-center"><b class=""> welcome <span class="w3-text-pink"><?php echo $result['name']; ?></span>  in blog managment segment</b></h4></div>
<hr>
<br>


 <?php
              # code...
            }
            ?>






<center>
<div class="w3-center container">

<table class="container">
  <tr><th><button style="border: transparent;" class="form-control w3-blue"><a href="prooduct_view1.php"><span class="text-light">click here for all product file</span></a> </button>
</th>
<th>   <button style="border: transparent;" class="form-control  w3-blue"><a href="product_categories1.php"><span class="text-light">product categories</span></a> </button></th></tr>

<table class="container">
  <tr>
  <th>
    <br>
     <button style="border: transparent;" class="form-control  w3-blue"><a href="medicinal_add_view1.php"><span class="text-light">click here for introduction of product categories file</span></a> </button>
  </th>
</tr>
</table>
</table>

</div></center>




<div class=""><?php include("footer.php"); ?>
</div>
<?php } ?>













