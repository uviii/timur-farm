<?php
 include("./adminstatus/blogadmin/dbc.php"); // Database connection file
// require_once('./libs/fetch_data.php');  // PHP functions file
?>



<section class="main-content-w3layouts-agileits">
        <div class="m-2">
            <h3 class="w3-center"><b class="w3-left w3-text-orange">New Arrived</b></h3><br><br><br>
            <div class="row">
                <!--left-->
                <div class="col-lg-12 left-blog-info-w3-layouts-agileits text-left">
                    <!--grid blogs below-->
                    
                    <div class="blog-girds-sec">
                        <div class="row">
                             <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  productadd ORDER BY id DESC LIMIT 8";
            $query = mysqli_query($conn , $selectquery) or die("error");
         
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php 
$a=$result['price2'];
$b=$result['price1'];
$c=((($b-$a)/$b)*100);
 ?>
<?php


echo '<div class="col-md-4 col-sm-6 col-6 col-lg-3 blog-grid-top">
            <div class="b-grid-top">
            <div class="blog_info_left_grid">
            <a href="single.php?id='.$result['id'].'">
            <img src="./adminstatus/blogadmin/'.$result['photo1'].'" class="img-fluid" alt="fantastic cms" style="width:460px;height:270px">
            </a>
            </div>
            <h5 class="w3-center" >
            <a style="font-size:15px;" href="single.php?id='.$result['id'].'">'.$result['name'].'('.$result['weight'].''.$result['tar'].')</a>
            </h5>
            </div>
            <div class="w3-center">
                                   <span class="item_price"><b>Rs.'.$result['price2'].'</b></span>
                                    <del>Rs.'.$result['price1'].'</del><span class="ml-2 w3-text-orange">'.round($c).' % OFF</span>
                             </div><br>
                             <div class="w3-center"><a href="#"><button class="bg-success">view_detail</button></a></div>
            </div>';
            ?>
       
         <?php
              # code...
            }
            ?>
                            <!--bloggrids-->
                        </div>
                    </div>
                </div>
              

            </div></div></section>

</div>

<style >.blog-icons{list-style: none;}</style>

                        </div>
                    </div>
        </div>
            
        
    </div>
</div>


