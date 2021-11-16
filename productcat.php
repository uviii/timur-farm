<?php
 include("./adminstatus/blogadmin/dbc.php"); // Database connection file
// require_once('./libs/fetch_data.php');  // PHP functions file
?>



<section class="main-content-w3layouts-agileits">
        <div class="m-2">
           <h3 class="w3-center"><b class="w3-left w3-text-orange">Popular product</b></h3><br><br><br>
            <div class="row">
                <!--left-->
                <div class="col-lg-12 left-blog-info-w3-layouts-agileits text-left">
                    <!--grid blogs below-->
                    
                    <div class="blog-girds-sec">
                        <div class="row">
                             <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $selectquery = "SELECT*FROM  productadd ORDER BY id ASC LIMIT 4";
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
            <div class="blog_info_left_grid w3-container-fluid">
            <a href="single.php?id='.$result['id'].'">
            <img src="./adminstatus/blogadmin/'.$result['photo1'].'" class="img-fluid w3-container-fluid" alt="fantastic cms" style="width:460px;height:250px">
            </a>
            </div>
            <h5 class="w3-center" style="font-size:15px; margin-top:10px;">
             
            <a  href="test_pro_gal.php?id='.$result['id'].'">'.$result['name'].'('.$result['weight'].''.$result['tar'].')</a>
            </h5>
            </div>
            <div class="w3-center">
                                   <span class="item_price"><b style="font-size:14px;">Rs.'.$result['price2'].'</b></span>
                                    <del style="font-size:12px;">Rs.'.$result['price1'].'</del><span style="font-size:13px;" class="ml-2 w3-text-orange">'.round($c).' % OFF</span>
                             </div>
                           <br>
                             <div class="w3-center"><a href="single.php?id='.$result['id'].'"><button class="bg-success">view_detail</button></a></div><br><br><br>
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


