<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>
<?php include("header.php");?>
<?php include("link.php");?>
<script src="./summernote/summernote.js"></script>
<br><br>
<div class="w3-center"><h5> welcome to <span class="w3-text-red"><?php echo $_SESSION['name'];?> </span> in control_panel</h5></div>
<br>
<hr>
<section class="container">
  <div class="row w3-container ">

  <?php 
  $in= $_SESSION['admin'];
   include("dbc.php");
     $selectquery = "SELECT *FROM admin WHERE id='$in' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
             $result= mysqli_fetch_array($query);
              $status=$result['status'];
              if ($status==='3'|| $status==='4') {
              
?>

<div class="col-lg-3 bg-danger"><div class=" container">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row ">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 w3-left">
                    <a href=" product_index.php"><i class="fa fa-tasks fa-5x"></i></a>
                    
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                   <p style="font-size: 48px; color: white;">   
                    <?php 

            include("dbc.php");
            $selectquery = "SELECT `id`, `langose`, `name` FROM `productadd`";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

           if ($query) {
            $row=mysqli_num_rows($query);
            if ($row) {
             

               echo $row;  
              
            
            }
             # code...
           }

?></p>
                    <p class="w3-text-white"><strong>products</strong></p>
                  </div>
                </div>
              </div>
              <a href=" product_index.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div></div>
 <?php
              # code...
            }
            ?>

           <?php 

            $ki= $_SESSION['admin'];

          include("dbc.php");


            $selectquery = "SELECT *FROM admin WHERE id='$ki' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
             $result= mysqli_fetch_array($query);
              $status=$result['status'];


           if ($status==='3' || $status==='4') {
              
?>

 <div class="col-lg-3 w3-brown">
      <div class="panel panel-info ml-2">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 ">
                    <a href="order_enquery_index.php"><i class="fa fa-shopping-cart fa-5x"></i></a>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6  text-right">
                   <p style="font-size: 48px; color: white;">   
                    <?php 

            include("dbc.php");
            $selectquery = "SELECT `id`, `pname` FROM `order`";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

           if ($query) {
            $row=mysqli_num_rows($query);
            if ($row) {
             

               echo $row;  
              
            
            }
             # code...
           }

?></p>
                    <p class="announcement-text w3-text-white"><strong>order/enquiry</strong></p>
                  </div>
                </div>
              </div> 
              <!-- <div class="col-sm-12"><a href="order_enquery_index.php"><i class="fa fa-arrow-circle-right"></i> <b>View</b></a></div> -->
              <a href="order_enquery_index.php"><i class="fa fa-arrow-circle-right"></i> <b>View</b></a>
              
            
            </div>
          </div>
        </div>




 <?php
              # code...
            }

            ?>




  










  <?php 
  $kpi= $_SESSION['admin'];

            include("dbc.php");
             

            $selectquery = "SELECT *FROM admin WHERE id='$kpi' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
             $result= mysqli_fetch_array($query);
              $status=$result['status'];
              if ($status==='2'||$status==='4') {
              ?>
          <div class="col-lg-3 w3-pink"><div class="">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 ">
                     <a href="blog_view_index.php"><i class="fa fa-rss fa-5x"></i></a>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-right">
                    <p style="font-size: 48px; color: white;">   
                    <?php 

            include("dbc.php");
            $selectquery = "SELECT `id`, `title` FROM `blogs`";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

           if ($query) {
            $row=mysqli_num_rows($query);
            if ($row) {
             

               echo $row;  
              
            
            }
             # code...
           }

?></p>
                    <p class="announcement-text w3-text-white"><strong>Blogs</strong></p>
                  </div>
                </div>
              </div>
              <a href="blog_view_index.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row ">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div></div>

           <?php
              # code...
            }

            ?>
</div>
</section>
<hr>
<section class="container">
  <div class="row w3-container ">

 


 <?php 
  $kim= $_SESSION['admin'];

            include("dbc.php");
             

            $selectquery = "SELECT *FROM admin WHERE id='$kim' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
             $result= mysqli_fetch_array($query);
              $status=$result['status'];

          

         if ($status==='4' OR '2' OR '3') {
              
?>


     <div class="col-lg-3 bg-danger"><div class="">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6 ">
                    <a href="draft_index.php"><i class="fa fa-tasks fa-5x"></i></a>
                    
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-6  text-right ">
                  <div class="inline-flex">
                     <p style="font-size: 27px; color: white;">   
                    <?php 

            include("dbc.php");
            $selectquery = "SELECT `id`, `pname` FROM `order` WHERE status='1'";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

           if ($query) {
            $row=mysqli_num_rows($query);
            if ($row) {
             

               echo $row;  
              
            
            }
             # code...
           }

?> , <?php 

            include("dbc.php");
             $selectquery = "SELECT*FROM contact_product WHERE status='1'";
            
            $query = mysqli_query($conn , $selectquery) or die("error");
           

           if ($query) {
            $row=mysqli_num_rows($query);
            if ($row) {
             

               echo $row;  
              
            
            }
             # code...
           }

?>,
   <?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM blogs WHERE status='draft'";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

           if ($query) {
            $row=mysqli_num_rows($query);
            if ($row) {
             

               echo $row;  
              
            
            }
             # code...
           }

?>,
 <?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM  productadd WHERE status='draft' " ;
            $query = mysqli_query($conn , $selectquery) or die("error");
           

           if ($query) {
            $row=mysqli_num_rows($query);
            if ($row) {
             

               echo $row;  
              
            
            }
             # code...
           }

?>
</p>



                  </div>

                    <p class="w3-text-white "><strong>draft</strong></p>
                  </div>
                </div>
              </div>
              <a href="draft_index.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      View
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          </div></div>

           <?php
              # code...
            }
            ?>
</div>
</section>




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
</div><br><br>
<?php include("footer.php"); ?>

</body>
</html>
<?php } ?>