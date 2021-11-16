<?php
 include("./adminstatus/blogadmin/dbc.php"); // Database connection file
// require_once('./libs/fetch_data.php');  // PHP functions file
?>



<section class="main-content-w3layouts-agileits">
        <div class="m-2">
            <h3 class="w3-center"><b class="w3-left w3-text-orange">Popular artical</b></h3><br><br><br>
            <div class="row">
                <!--left-->
                <div class="col-lg-12 left-blog-info-w3-layouts-agileits text-left">
                    <!--grid blogs below-->
                    
                    <div class="blog-girds-sec">
                        <div class="row">
                             <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  blogs ORDER BY id DESC LIMIT 8";
            $query = mysqli_query($conn , $selectquery) or die("error");
          
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php


echo '<div class="col-md-4 col-sm-6 col-12 col-lg-3 blog-grid-top" >
            <div class="b-grid-top" style="border:2px solid gray;">
            <div class="blog_info_left_grid" >
            <a href="blog_detail.php?id='.$result['id'].'">
            <img src="./adminstatus/blogadmin/'.$result['photo'].'" class="img-fluid" alt="fantastic cms" style="width:100%;height:270px">
            </a>
            </div>
           
           
            <ul class="blog-icons w3-center">
            
            <li>
            <a href="#">
            <i class="fa fa-user"></i> '.$result['authers'].'</a>|
            </li>
            <li>
            <a href="#">
            <i class="fa fa-tag"></i> '.$result['tags'].'</a>
            </li>

           
            

            </ul>
             <div> <h5 class="w3-center">
            <a href="blog_detail.php?id='.$result['id'].'">'.$result['title'].'</a>
            </h5></div>
           
                             <div class="w3-center"><a href="blog_detail.php?id='.$result['id'].'"><button class="bg-success">view_detail</button></a></div><br> </div><br>

            </div>';
            ?>
      
         <?php
              # code...
            }
            ?><hr>
                            <!--bloggrids-->
                        </div>
                    </div>
                </div>
              

            </div></div></section>

</div>

<style >.blog-icons{list-style: none; display:inline-flex; margin-left:  50px; }</style>


                        </div>
                    </div>
        </div>
            
        
    </div>
</div>





<hr>

