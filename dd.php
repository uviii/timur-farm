 <form method="POST" action="">

<?php 
session_start();
$ccs=$_SESSION['id'];
// echo $ccs;

             include("./adminstatus/blogadmin/dbc.php");
            // $id=$_GET['$cc'];
            $selectquery = "SELECT*FROM user WHERE id =$ccs";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
           $result= mysqli_fetch_array($query);
               $id=$result['id'];
               
              
              
?>           

<?php 
    include("./adminstatus/blogadmin/dbc.php");
    $id=$_GET['q'];
         // echo $id;    
// error_reporting(0);



            $selectquer = "SELECT *FROM state WHERE id='4' and country='$id' ";
            $query = mysqli_query($conn , $selectquer) or die("error");
             $resultt= mysqli_fetch_array($query);
              $coun=$resultt['country'];

          

           if ($coun==='Nepal' ) {
              
?>

  <input type="hidden" required  name="country" value="<?php echo $id ?>">

  <label style="font-weight:bold;">Choose state :</label><select  name="state" class="form-control" onchange="showstate(this.value)">
 <option value="">-Select State-</option>

     <?php 
    //  include('dbc.php');
    // $id=$_GET['q'];
     // echo $id;
               
              // INSERT INTO `state`(`id`, `country`, `state`) VALUES ([value-1],[value-2],[value-3])
             $selectquery = "SELECT*FROM state where country='Nepal' order by id desc ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
                ?>
  
         
         


  
   
    <option value="<?php echo $result['state'] ?>" name="state"><?php echo $result['state'] ?></option>
    
  
    
    <?php
              # code...
            }
            ?>

  </select>
  <div> <label style="font-weight:bold;">Choose district :</label><select id="txtHintt" required name="district" class="form-control" onchange="showdistrict(this.value)">
    <option value="">-Please select state first-</option>
  </select>
   <label style="font-weight:bold;">Choose muncci/rural muncipality :</label><select id="txtHinttt" required name="city" class="form-control" onchange="showcity(this.value)">
    <option value="">-Please select District first-</option>
  </select>
  <label style="font-weight:bold;">Choose Warda :</label><select id="txt" class="form-control" required name="money" onchange="showmoney(this.value)" >
    <option value="">-Please select Rural/muncipality first-</option>
  </select>
  <br>
  <input type="hidden" name="id" value="<?php echo $ccs; ?>">
   <input type="hidden" name="ship" value="cp">
   <input type="hidden" name="file" value="1">

  <div><input type="submit" name="update" value="Calculate" class="form-control w3-indigo w3-hover-green" ></div>
 </div>
    
   <?php
              # code...
            }else{

            
                ?>
                  <div>

              <label style="font-weight:bold;">State:</label><input type="text" class="form-control" name="state" placeholder="State">
               <label style="font-weight:bold;">District:</label><input type="text" class="form-control" name="district" placeholder="District">
               <label class="w3-left ml-0 w3-panel"> <b>city:</b></label><input class="form-control p-4"  required placeholder="enter city **" type="text"  name="city">
               <!--  <label style="font-weight:bold;">Muncipality:</label><input type="text" class="form-control" name="muncipality" placeholder="Muncipality"> -->
                <label class="w3-left ml-0 w3-panel"> <b> office add:</b></label><input class="form-control p-4"   placeholder="enter office address (optional) *" type="text"  name="localaddress1">
                <label class="w3-left ml-0 w3-panel"> <b> Home Add:</b></label><input class="form-control p-4"  required placeholder="enter Home address**" type="text"  name="local_ad">
            </div>
<?php
                # code...
             
             
            }

            ?>
          </form>
          <!--   <label class="w3-left ml-0 w3-panel"> <b>local address:</b></label><input class="form-control p-4"  required placeholder="enter local address **" type="text"  name="local_ad">
  <label class="w3-left ml-0 w3-panel"> <b> address_line-1:</b></label><input class="form-control p-4"  required placeholder="enter local address (optional) **" type="text"  name="localaddress1">
  <label class="w3-left ml-0 w3-panel"> <b>zip code or post code:</b></label><input class="form-control p-4"  required placeholder="insert zip code or post code  **" type="text"  name="zip"> -->

