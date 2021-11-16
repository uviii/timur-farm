 <!--  -->


             <option value="">-Select rural/muncipality-</option>

     <?php 
     include("./adminstatus/blogadmin/dbc.php");
    $id=$_GET['q'];
     echo $id;
               
              // INSERT INTO `state`(`id`, `country`, `state`) VALUES ([value-1],[value-2],[value-3])
             $selectquery = "SELECT*FROM muncipality where district='$id' order by id desc ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
                ?>
  
         
         


  
   
    <option value="<?php echo $result['munci'] ?>" name="city"><?php echo $result['munci'] ?></option>
    
  
    
    <?php
              # code...
            }
            ?>

            
