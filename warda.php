 <!--  -->
 <?php 
    include("./adminstatus/blogadmin/dbc.php");
    $id=$_GET['q'];
     // echo $id;
     ?>

             <option value="">-Select Warda-</option>

     <?php 
     include('dbc.php');
    $id=$_GET['q'];
     echo $id;
               
             $selectquery = "SELECT*FROM  warda_munci where munci='$id' order by id ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
                ?>
  
         
         


  
   
    <option><?php echo $result['warda'] ?></option>
    
  
    
    <?php
              # code...
            }
            ?>

            
