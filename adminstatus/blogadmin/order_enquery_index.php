


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
    

<br><div> <h3 class="w3-center"><b class="" style="font-size: 23px; font-weight: bold;color: green;"> स्वागत छ <span class="w3-text-pink"><?php echo $_SESSION['name']?></span> कु्रिएर र अडर व्यवस्थापन बिभागमा</b></h3></div>
<hr style="border-bottom: 2px dashed green;">
<br>


<center>
<div class="w3-center container">

<table class="container" cellpadding="10" cellspacing="10">
  <tr><th><button style="border: transparent;height: 7vh; height: 7vh;" class="form-control w3-blue"><a href="order_enquiry.php"><span class="text-light">उत्तपादन जानकारि प्रशनहरू</span></a> </button>
</th>
<th>   <button style="border: transparent;height: 7vh;" class="form-control  w3-blue"><a href="order_manag.php"><span class="text-light">उत्तपादन माग</span></a> </button></th><th>   <button style="border: transparent;height: 7vh;" class="form-control  w3-blue"><a href="order_cancel.php"><span class="text-light"> Cancell माग</span></a> </button></th></tr>

<table class="container">
  <tr>
  <th>
    <br>
     <button style="border: transparent;height: 7vh;" class="form-control  w3-blue"><a href="payment_view.php"><span class="text-light">Payment or Company Transaction Details</span></a> </button>
  </th>
   <th>
    <br>
     <button style="border: transparent;height: 7vh;" class="form-control  w3-blue"><a href="http://localhost/timur%20farm/courier_add.php"><span class="text-light">डेलिभरि गर्ने मान्छेकाे जानकारि</span></a> </button>
  </th>
</tr>
</table>
<table class="container">
  <tr>
  <th>
    <br>
     <button style="border: transparent;height: 7vh;" class="form-control  w3-blue"><a href="shiping_charge_view.php"><span class="text-light">कु्रिएर चा्रज सुचि</span></a> </button>
  </th>
   <th>
    <br>
     <button style="border: transparent;height: 7vh;" class="form-control  w3-blue"><a href="courier_view.php"><span class="text-light">कु्रिएर सुचि</span></a> </button>
  </th>
</tr>
</table>
</table>

</div></center>


<br><br><br><br><br><br><br><br><br>

<?php include("footer.php"); ?>

<?php } ?>













