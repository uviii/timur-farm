 <!--  -->
 <?php 
    include("./adminstatus/blogadmin/dbc.php");
    // $id=$_GET['q'];
     // echo $id;
     ?>

             

     <?php 
     
    $id='sarada muncipality';
     // echo $id;
               
             $selectquery = "SELECT*FROM  warda_munci where munci='$id' order by id ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            $result= mysqli_fetch_array($query);

            $charge_nepal=$result['charge_nepal'];
            $munci=$result['munci'];
            $district=$result['district'];
            $country=$result['country'];
             $currency=$result['currency'];
              $service=$result['service'];
           
if ($country==='Nepal') {
    # code...
    ?>
    <p class="w3- w3-text-green"style="font-weight:bold;"> <?php echo $munci ;?>,<span style="margin-left:5px;"><?php echo $district ;?> </span> ,<span style="margin-left:5px;"><?php echo $country ;?> </span> => <span style="color:orange; font-size:bold;"><?php echo $service ;?></span>(<span class="w3-text-pink" style="font-size: 10px; font-weight: bold;color:pink;"><span style="font-size: 10px; font-weight: bold;color:red;"> ..  Note:</span>     Minimum  Day to delever </span>) <br> Delevery Charge.. : <span style="color:orange; font-size:bold;"><?php echo $currency ;?>-<?php echo $charge_nepal ;?>|-</span>(<span class="w3-text-pink" style="font-size: 10px; font-weight: bold;color:pink;"><span style="font-size: 10px; font-weight: bold;color:red;"> ..  Note:</span> This Minimum  Charge Will Be Depend on Product Quantity </span>) </p>

     

<?php
}else{
 ?>
    <p class="w3- w3-text-green"style="font-weight:bold;"> Delevere to.. <span style="margin-left:5px;"><?php echo $country ;?> </span> => <span style="color:orange; font-size:bold;"><?php echo $service ;?></span>(<span class="w3-text-pink" style="font-size: 10px; font-weight: bold;color:pink;"><span style="font-size: 10px; font-weight: bold;color:red;"> ..  Note:</span>     Minimum  Day to delever  </span>) <br> Delevery Charge.. : <span style="color:orange; font-size:bold;"><?php echo $currency ;?>-<?php echo $charge_nepal ;?>|-</span>(<span class="w3-text-pink" style="font-size: 10px; font-weight: bold;color:pink;"><span style="font-size: 10px; font-weight: bold;color:red;"> ..  Note:</span> This Minimum  Charge Will Be Depend on Product Quantity </span>) </p>

     
  
        
<?php } ?>

         


   
   
            
