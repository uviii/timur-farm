      
<!--  <form method="POST" action="user_profilee.php"> -->
      <label style="font-weight: bold;">choose country:</label>

    <select name="country" class="form-control" onchange="showcountry(this.value)">
    <option value="">-Select country-</option>
    
  
       <?php 
    include("./adminstatus/blogadmin/dbc.php");
    
    
               
              $selec = "SELECT*FROM  `shiping_charge` where charge_other='country' ";
            $query = mysqli_query($conn , $selec) or die("error");
           
            while ($resu= mysqli_fetch_array($query)) {
              
                ?>
  
         
         


  
   
    <option value="<?php echo $resu['country'] ?>" name=""><?php echo $resu['country'] ?></option>
    
  
    
    <?php
              # code...
            }
            ?>

  <!--   <option value="1st semestar">Select a customer:</option>
    <option value="2nd semestar">Alfreds Futterkiste</option>
    <option value="3rd semestar">North/South</option>
    <option value="8th semestar">Wolski Zajazd</option> -->
  </select>
 