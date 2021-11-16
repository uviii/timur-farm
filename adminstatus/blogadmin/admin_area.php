
<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
<?php include("link.php");?>
</head>
<body>





<?php include("mobilenav.php"); ?>





  
<div class="w3-center"><h3>welcome to <span class="w3-text-red"><?php echo $_SESSION['login'];?> </span> in control_panel</h3></div>
 

<hr>
<br>


    







<hr>
<section class="m-2">
  <div class="row ">
  <div class="col-sm-4 bg-dangr w3-border">

    <div class="col-lg- w3-border">
         <div class=""> <h4 class="w3-center  w3-text-orange"> <b>newest blog update</b></h4></div>
   

      <center><div class="w3-cente">
        <table class="w3-responsive w3-table-all w3-container-fluid " border="5" style="border:2px solid gray" cellpadding="0" cellspacing="10">
    
          <tr>
            <th>id</th>
            <th>name</th>
            <th>date</th>
             <th><i class="fa fa-eye " style="font-size:26px; color:indigo;"></i></th>
             
          </tr>
            <?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM  blogs order by id DESC LIMIT 10";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $totalcnt = mysqli_num_rows($query);

while ($result=mysqli_fetch_array($query)) {

              
?>
          <tr>
            <td> <?php echo $result['id']; ?> </td>
             <td> <?php echo $result['title']; ?> </td>
              <td> <?php echo $result['date']; ?> </td>
            <td> <a href="blog_update.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="edit" ><i class="fa fa-eye " style="font-size:26px; color:indigo;" aria-hidden="true"></i></a></td>
          </tr>
           <?php
              # code...
            }
            ?>

        </table>
      </div></center>



            
          </div>
        </div>
        <div class="col-sm-4 bg-dangr w3-border">

    <div class="col-lg- w3-border">
        <div class=""> <h4 class="w3-center  w3-text-orange"> <b>newest product update</b></h4></div>

       <center><div class="w3-cente">
        <table class="w3-responsive w3-table-all w3-container-fluid " border="5" style="border:2px solid gray" cellpadding="0" cellspacing="10">
    
          <tr>
            <th>id</th>
            <th>name</th>
            <th>categories</th>
            <th>date</th>
             <th><i class="fa fa-eye " style="font-size:26px; color:indigo;"></i></th>
             
          </tr>
           <?php 
error_reporting(0);
          
            $selectquery = "SELECT*FROM  productadd WHERE status='publish' order by id DESC LIMIT 10 ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            while ($result= mysqli_fetch_array($query)) {
              
?>
          <tr>
            <td> <?php echo $result['id']; ?> </td>
             <td> <?php echo $result['name']; ?> </td>
             <td> <?php echo $result['categories']; ?> </td>
              <td> <?php echo $result['date']; ?> </td>
            <td> <a href="product_up.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="edit" ><i class="fa fa-eye " style="font-size:26px; color:indigo;" aria-hidden="true"></i></a></td>
          </tr>
           <?php
              # code...
            }
            ?>

        </table>
      </div></center>

            
          </div>
        </div>
        <div class="col-sm-4 bg-dangr w3-border">

    <div class="col-lg- w3-border">
      <div class=""> <h4 class="w3-center  w3-text-orange"> <b>newest conform product</b></h4></div>

       <center><div class="w3-cente">
        <table class="w3-responsive w3-table-all w3-container-fluid " border="5" style="border:2px solid gray" cellpadding="0" cellspacing="10">
    
          <tr>
            <th>id</th>
            <th>cname</th>
            <th>name</th>
            <th>date</th>
             <th><i class="fa fa-eye " style="font-size:26px; color:indigo;"></i></th>
             
          </tr>
               <?php 
error_reporting(0);
          
       $selectquery = "SELECT * FROM `order` where status='0' order by id DESC limit 11 ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
              
?>
          <tr>
            <td> <?php echo $result['id']; ?> </td>
             <td> <?php echo $result['cname']; ?> </td>
             <td> <?php echo $result['pname']; ?> </td>
              <td> <?php echo $result['date']; ?> </td>
            <td> <a href="conformed_product_admin.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="edit" ><i class="fa fa-eye " style="font-size:26px; color:indigo;" aria-hidden="true"></i></a></td>
          </tr>
           <?php
              # code...
            }
            ?>

        </table>
      </div></center>

            
          </div>
        </div>

</div>
</section>
<br><hr>
<section class="container">
  <div class="row ">
  <div class="col-sm-4 bg-dangr w3-border">

    <div class="col-lg- w3-border">
         <div class=""> <h4 class="w3-center  w3-text-orange"> <b>custumer detail</b></h4></div>
   

      <center><div class="w3-cente">
        <table class="w3-responsive w3-table-all w3-container-fluid " border="5" style="border:2px solid gray" cellpadding="0" cellspacing="10">
    
          <tr>
            <th>id</th>
            <th>name</th>
            <th>country</th>
            <th>phone</th>
            <th>date</th>
             <th><i class="fa fa-eye " style="font-size:26px; color:indigo;"></i></th>
             
          </tr>
          <?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM user order by id limit 10";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
          <tr>
            <td> <?php echo $result['id']; ?> </td>
             <td> <?php echo $result['fname']; ?> </td>
              <td> <?php echo $result['country']; ?> </td>
             <td><?php echo $result['contactno']; ?> </td>
              <td> <?php echo $result['posting_date']; ?> </td>
            <td> <a href="blog_update.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="edit" ><i class="fa fa-eye " style="font-size:26px; color:indigo;" aria-hidden="true"></i></a></td>
          </tr>
           <?php
              # code...
            }
            ?>

        </table>
      </div></center>



            
          </div>
        </div>
        <div class="col-sm-4 bg-dangr w3-border">

    <div class="col-lg- w3-border">
        <div class=""> <h4 class="w3-center  w3-text-orange"> <b>admin detail</b></h4></div>

       <center><div class="w3-cente">
        <table class="w3-responsive w3-table-all w3-container-fluid " border="5" style="border:2px solid gray" cellpadding="0" cellspacing="10">
    
          <tr>
            <th>id</th>
            <th>name</th>
            <th>contact no</th>
            <th>status</th>
             <th><i class="fa fa-eye " style="font-size:26px; color:indigo;"></i></th>
             
          </tr>
           <?php 
error_reporting(0);
         
            $selectquery = "SELECT*FROM admin  limit 10 ";
            $query = mysqli_query($conn , $selectquery) or die("error");
             while ($result= mysqli_fetch_array($query)) {
              
?>
  
          <tr>
            <td> <?php echo $result['id']; ?> </td>
             <td> <?php echo $result['username']; ?> </td>
              <td> <?php echo $result['contactno']; ?> </td>
               <td> <?php echo $result['status']; ?> </td>
            <td> <a href="blog_update.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="edit" ><i class="fa fa-eye " style="font-size:26px; color:indigo;" aria-hidden="true"></i></a></td>
          </tr>
           <?php
              # code...
            }
            ?>

        </table>
      </div></center>

            
          </div>
        </div>
        <div class="col-sm-4 bg-dangr w3-border">

    <div class="col-lg- w3-border">
      <div class=""> <h4 class="w3-center  w3-text-orange"> <b>revenew detail</b></h4></div>

       <center><div class="w3-cente">
        <table class=" w3-responsive w3-table-all w3-container-fluid " border="5" style="border:2px solid gray" cellpadding="0" cellspacing="10">
    
          <tr>
            <th>time</th>
            <th>product</th>
            <th>shiping</th>
            <th>tax</th>
            <th>total</th>
            <th>margin</th>
             
             
          </tr>
        <?php 

            include("dbc.php");
             $taxi=0;
            $amount=0;
            $total_amount=0;
            $shiping=0;


            $selectquery = "SELECT * FROM `order` WHERE status='1'";
            $query = mysqli_query($conn , $selectquery) or die("error");
            while ($result= mysqli_fetch_array($query)) {
             
             $shiping= $result['shiping']; 
              $total= $result['subtotal'];
 // $tax= ($result['price']*13)/100;             
// $price_total=$result['price']*$result['pquantity'] ;
 
//  $taxi+=$tax;
// $amount+=$price_total;
// $shiping+=$shipings;
// $total_amount=($amount+$shiping);


?>

 <?php $shipings+=$shiping;

 $total_amount+=$total;
 $tax=($total_amount*13)/100;
 $total=($total_amount+$shipings);
 $margin=($total-($tax+$shipings));
  ?>
                  <?php
              # code...
            }
            ?>
            <tr>
          <td>baishakh</td>
          
           <td>Rs.<?php echo $total_amount; ?>|- </td>
            <td>Rs.<?php echo $shipings; ?>|-</td>
             <td>Rs.<?php echo $tax; ?>|-</td>
              <td>Rs.<?php echo $total; ?>|-</td>
              <td>Rs.<?php echo $margin; ?>|-</td>

           
             </tr>
              <tr>
          <td>jesth</td>
          
           <td>Rs.<?php echo $total_amount; ?>|- </td>
            <td>Rs.<?php echo $shipings; ?>|-</td>
             <td>Rs.<?php echo $tax; ?>|-</td>
              <td>Rs.<?php echo $total; ?>|-</td>
              <td>Rs.<?php echo $margin; ?>|-</td>

           
             </tr>
              <tr>
          <td>asar</td>
          
           <td>Rs.<?php echo $total_amount; ?>|- </td>
            <td>Rs.<?php echo $shipings; ?>|-</td>
             <td>Rs.<?php echo $tax; ?>|-</td>
              <td>Rs.<?php echo $total; ?>|-</td>
              <td>Rs.<?php echo $margin; ?>|-</td>

           
             </tr>
              <tr>
          <td>shrawon</td>
          
           <td>Rs.<?php echo $total_amount; ?>|- </td>
            <td>Rs.<?php echo $shipings; ?>|-</td>
             <td>Rs.<?php echo $tax; ?>|-</td>
              <td>Rs.<?php echo $total; ?>|-</td>
              <td>Rs.<?php echo $margin; ?>|-</td>

           
             </tr>
              <tr>
          <td>bhadra</td>
          
           <td>Rs.<?php echo $total_amount; ?>|- </td>
            <td>Rs.<?php echo $shipings; ?>|-</td>
             <td>Rs.<?php echo $tax; ?>|-</td>
              <td>Rs.<?php echo $total; ?>|-</td>
              <td>Rs.<?php echo $margin; ?>|-</td>

           
             </tr>
              <tr>
          <td>asoj</td>
          
           <td>Rs.<?php echo $total_amount; ?>|- </td>
            <td>Rs.<?php echo $shipings; ?>|-</td>
             <td>Rs.<?php echo $tax; ?>|-</td>
              <td>Rs.<?php echo $total; ?>|-</td>
              <td>Rs.<?php echo $margin; ?>|-</td>

           
             </tr>
              <tr>
          <td>kartik</td>
          
           <td>Rs.<?php echo $total_amount; ?>|- </td>
            <td>Rs.<?php echo $shipings; ?>|-</td>
             <td>Rs.<?php echo $tax; ?>|-</td>
              <td>Rs.<?php echo $total; ?>|-</td>
              <td>Rs.<?php echo $margin; ?>|-</td>

           
             </tr>
              <tr>
          <td>manshir</td>
          
           <td>Rs.<?php echo $total_amount; ?>|- </td>
            <td>Rs.<?php echo $shipings; ?>|-</td>
             <td>Rs.<?php echo $tax; ?>|-</td>
              <td>Rs.<?php echo $total; ?>|-</td>
              <td>Rs.<?php echo $margin; ?>|-</td>

           
             </tr>
              <tr>
          <td>paush</td>
          
           <td>Rs.<?php echo $total_amount; ?>|- </td>
            <td>Rs.<?php echo $shipings; ?>|-</td>
             <td>Rs.<?php echo $tax; ?>|-</td>
              <td>Rs.<?php echo $total; ?>|-</td>
              <td>Rs.<?php echo $margin; ?>|-</td>

           
             </tr>
              <tr>
          <td>malgh</td>
          
           <td>Rs.<?php echo $total_amount; ?>|- </td>
            <td>Rs.<?php echo $shipings; ?>|-</td>
             <td>Rs.<?php echo $tax; ?>|-</td>
              <td>Rs.<?php echo $total; ?>|-</td>
              <td>Rs.<?php echo $margin; ?>|-</td>

           
             </tr>
              <tr>
          <td>phalgun</td>
          
           <td>Rs.<?php echo $total_amount; ?>|- </td>
            <td>Rs.<?php echo $shipings; ?>|-</td>
             <td>Rs.<?php echo $tax; ?>|-</td>
              <td>Rs.<?php echo $total; ?>|-</td>
              <td>Rs.<?php echo $margin; ?>|-</td>

           
             </tr>
              <tr>
          <td>chaitra</td>
          
           <td>Rs.<?php echo $total_amount; ?>|- </td>
            <td>Rs.<?php echo $shipings; ?>|-</td>
             <td>Rs.<?php echo $tax; ?>|-</td>
              <td>Rs.<?php echo $total; ?>|-</td>
              <td>Rs.<?php echo $margin; ?>|-</td>

           
             </tr>
              
               <tr>
          <td>total</td>
          
           <td>Rs.<?php echo $total_amount; ?>|- </td>
            <td>Rs.<?php echo $shipings; ?>|-</td>
             <td>Rs.<?php echo $tax; ?>|-</td>
              <td>Rs.<?php echo $total; ?>|-</td>
              <td>Rs.<?php echo $margin; ?>|-</td>

           
             </tr>
              


            

        </table>
      </div></center>

            
          </div>
        </div>

</div>
</section>
<hr>

<br>




 
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



        <?php include("footer.php"); ?>
</body>
</html>
<?php } ?>