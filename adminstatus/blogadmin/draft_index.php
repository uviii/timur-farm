


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

<br><div class="container"> <h4 class="w3-center"><b class=""> welcome <span class="w3-text-pink"><?php echo $_SESSION['name']?></span>  in draft managment segment</b></h4></div>
<hr>
<br>






<center>
<div class="w3-center container">

<table class="container">
  <tr>



    <th><?php 

            $ki= $_SESSION['admin'];

          include("dbc.php");


            $selectquery = "SELECT *FROM admin WHERE id='$ki' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
             $result= mysqli_fetch_array($query);
              $status=$result['status'];


           if ($status==='1' || $status==='4') {
              
?>

<button style="border: transparent;height: 7vh;" class="form-control w3-blue"><a href="conformed_product.php"><span class="text-light">conformed product</span></a> </button>

 <?php
              # code...
            }

            ?>
</th>


            
<th>  <?php 

            $ki= $_SESSION['admin'];

          include("dbc.php");


            $selectquery = "SELECT *FROM admin WHERE id='$ki' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
             $result= mysqli_fetch_array($query);
              $status=$result['status'];


           if ($status==='3' or $status==='1' or $status==='4') {
              
?>

<button style="border: transparent;height: 7vh;" class="form-control  w3-blue"><a href="conformed_product_order.php"><span class="text-light"> Handover Order </span></a> </button>

 <?php
              # code...
            }

            ?> </th>
            <th>  <?php 

            $ki= $_SESSION['admin'];

          include("dbc.php");


            $selectquery = "SELECT *FROM admin WHERE id='$ki' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
             $result= mysqli_fetch_array($query);
              $status=$result['status'];


           if ($status==='3' or $status==='1' or $status==='4') {
              
?>

<button style="border: transparent;height: 7vh;" class="form-control  w3-blue"><a href="action_enquery.php"><span class="text-light"> previewed enquery </span></a> </button>

 <?php
              # code...
            }

            ?> </th>

<table class="container">
  <tr>
  <th>
    <br>
    <?php 

            $ki= $_SESSION['admin'];

          include("dbc.php");


            $selectquery = "SELECT *FROM admin WHERE id='$ki' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
             $result= mysqli_fetch_array($query);
              $status=$result['status'];


           if ( $status==='1' or $status==='3' || $status==='4') {
              
?>

 <button style="border: transparent;height: 7vh;" class="form-control  w3-blue"><a href="draft_product.php"><span class="text-light">draft product</span></a> </button>

 <?php
              # code...
            }

            ?>
    
  </th>
</tr>
</table>
<table class="container">
  <tr>
  <th>
    <br>

 <?php 

            $ki= $_SESSION['admin'];

          include("dbc.php");


            $selectquery = "SELECT *FROM admin WHERE id='$ki' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
             $result= mysqli_fetch_array($query);
              $status=$result['status'];


           if ( $status==='1' or $status==='2' || $status==='4') {
              
?>

 <button style="border: transparent;height: 7vh;" class="form-control  w3-blue"><a href="draft_blog.php"><span class="text-light">draft blog</span></a> </button>

 <?php
              # code...
            }

            ?>
    

    
  </th>
</tr>
</table>
</table>

</div></center>


<div class=""><?php include("footer.php"); ?>
</div>
<?php } ?>













