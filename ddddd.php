 <!--  -->


             <option value="">-Select District-</option>

     <?php 
     include("./adminstatus/blogadmin/dbc.php");
    $id=$_GET['q'];
     // echo $id;
               
              // INSERT INTO `state`(`id`, `country`, `state`) VALUES ([value-1],[value-2],[value-3])
             $selectquery = "SELECT*FROM shiping_charge where state='$id' order by id desc ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
                ?>
  
         
         


  
   
    <option value="<?php echo $result['district'] ?>" name="district"><?php echo $result['district'] ?></option>
    
  
    
    <?php
              # code...
            }
            ?>

            
