<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>
<?php include("header.php");?>
<?php include("dbc.php");?>
<?php

error_reporting();
if (isset($_POST["submit"])) {

    if (count($_POST["ids"]) > 0 ) {
        // Imploding checkbox ids
        $all = implode(",", $_POST["ids"]);
        $sql =mysqli_query($conn,"DELETE FROM  productadd WHERE id in ($all)");
        if ($sql) {
             echo "<script>alert(' attention! data had been deleted successfully.');</script>"; 
        } else {
            echo "<script>alert(' sorry! somthing error to delete ,please try again.');</script>"; 
        }
    } 

    else {

    	echo "<script>alert(' You need to select atleast one checkbox to delete!');</script>"; 
     
    }  
}
?>

<?php include("link.php");?>
<br><br>

<div class="container"><button style="border: transparent;" class="w3-left"><a href="product_index.php"> <i class="fa fa-home"></i> go_product_index_page</a></button></div>
<hr>
<div class="container"><h4 class="w3-center w3-text-orange"><strong >All Product Control Portal	</strong></h4></div>
<hr>

 
<div class="container"><style>.none li a{border: 2px solid black;padding: 4px; margin: 2px;}  </style>
	
	<ul class="none" style="list-style: none; display: flex;">
<li><a href="http://localhost/timur%20farm/adminstatus/blogadmin/productadd.php "><i class="fa fa-plus"></i> new</a></li>
<li> <a href=""  onclick="window.print();"><i class="fa fa-print"></i>print</a></li>
<li><a href="product_export_ccv.php" > <i class="fa fa-download"></i>ccv</a></li>
<li><button class="kkk" style="border: none;"><a href="#"> <i class="fa fa-eye"></i> show_all</a></button></li>
	

	</ul>
</div><br>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
<hr>
 <form action="" method="POST">

  

<table class="w3-responsive w3-table-all w3-container 2">
	
	<tbody class="w3-display-stripe w3-display-border w3-hover- ">
		<tr class="bg-success container">
			<tr class=" container-fluid w3-orange ">
            <th>
<!-- For Selecting All -->
     <input type="checkbox" name="ids" id="select_all"><span></span></th>
			<th style="cellspace:" cellspacing="2" cellpadding="3">id</th>
		<th>product_name</th>
		<th>avaible_weight</th>
		<th>market_price</th>
		<th>offer_price</th>
		<!-- <th>tag</th> -->
	<!-- 	<th>introduction</th> -->
		<th>keyword</th>
		
	<!-- 	<th>benefit</th>
		-->
<!-- 
		<th>ingredient</th>  -->		
		<!-- 
		<th>how_to_use</th>
		<th> other_info_</th> -->
		<th>availbility</th>
		<th>photo_1com.</th>
		<!-- <th>photo_2com.</th>
		<th>photo_3com.</th>
		<th>photo_4</th>
		<th>photo_5</th>
		<th>photo_6</th>
		<th>sold_by</th>-->
		<th>action</th>
		<th>categories</th> 
		<th>status</th>
		<th>date</th>
		
		
		
		</tr>
<!-- INSERT INTO `productadd`(`id`, `name`, `weight`, `price1`, `price2`, `tag`, `intro`, `keyword`, `benefit`, `ingredient`, `use`, `info`, `avail`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `sold_by`, `categories`, `status`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23]) -->
		<tbody class="w3-display-stripe w3-display-border w3-hover- ">
			 <?php 
error_reporting(0);
            include("dbc.php");
            $selectquery = "SELECT*FROM  productadd WHERE status='publish' order by id desc ";
            $query = mysqli_query($conn , $selectquery) or die("error");
          
            while ($result= mysqli_fetch_array($query)) {
              
?>
		<tr>
			<td><input type="checkbox" class="checkbox" name="ids[]" value="<?php echo htmlentities($result['id']);?>"/></td>
			 <td  class="w3-smal  w3-table-all ">  <?php echo $result['id']; ?>  </td>
			 <td  class="w3-small w3-table-all   ">  <?php echo $result['name']; ?>  </td>
			  <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['weight']; ?>  </td>
			    <td class="w3-small w3-table-all w3-responsible w3-table-all ">  <?php echo $result['price1']; ?>  </td>
			    <td class="w3-small w3-table-all w3-responsible w3-table-all ">  <?php echo $result['price2']; ?>  </td>
			   <!--  <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['tag']; ?>  </td> -->
			
<!-- FOR TOGGLE -->
			<!--    <script >
  $(document).ready(function(){
    $('.intro').hide();
    $('.view').click(function(){
      $('.intro').toggle();

    });

  });
</script> -->



			 <!--    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['intro']; ?> </td> -->
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo substr($result['keyword'], 0, 20); ?> </td>
	<!-- 		  <td  class="w3-small w3-table-all w3-responsible  "> <?php echo $result['benefit']; ?>  </td> -->
			<!--   <td  class="w3-small w3-table-all w3-responsible  "> <?php echo $result['ingredient']; ?>  </td> -->
			   
			  <!--   <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['ingredient']; ?>  </td>
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['use']; ?>  </td>
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['info']; ?>  </td> -->
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['avail']; ?>  </td>

			       <td  class="w3-small w3-table-all "> <img src=" <?php echo $result['photo1']; ?>" height="50" width="auto">   </td>
			        <!-- <td  class="w3-small w3-table-all "> <img src=" <?php echo $result['photo1']; ?>" height="30" width="auto">   </td>
			         <td  class="w3-small w3-table-all "> <img src=" <?php echo $result['photo1']; ?>" height="30" width="auto">   </td>
			          <td  class="w3-small w3-table-all "> <img src=" <?php echo $result['photo1']; ?>" height="30" width="auto">   </td>
			           <td  class="w3-small w3-table-all "> <img src=" <?php echo $result['photo1']; ?>" height="30" width="auto">   </td>
			            <td  class="w3-small w3-table-all "> <img src=" <?php echo $result['photo1']; ?>" height="30" width="auto">   </td> -->
			       <!-- <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['sold_by']; ?>  </td> -->
			        <td> <a href="product_up.php?id=<?php echo $result['id']; ?>"> <i class="fa fa-edit fa-2x"></i> </a></td>
			      
			       <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['categories']; ?>  </td>
			       <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['status']; ?>  </td>
			       <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['date']; ?>  </td>
			     


		
		</tr>
		 <?php
              # code...
            }
            ?>
	</tbody>
</table>



<!-- 
<div class="w3-container 2"> <button style="border: none;"><a href=""><< previous</a></button>
<button class="w3-right" style="border: none;"><a href="">next >></a></button>
</div>
 -->



<table class="w3-responsive w3-table-all w3-container mmm">
	
	<tbody class="w3-display-stripe w3-display-border w3-hover- ">
		<tr class="bg-success container">
			<th style="cellspace:" cellspacing="2" cellpadding="3">id</th>
		<th>product_namcddcde</th>
		<th>avaible_weight</th>
		<th>market_price</th>
		<th>offer_price</th>
		<!-- <th>tag</th> -->
		<th>introduction</th>
	<!-- 	<th>keyword</th> -->
		
		<th>benefit</th>
		
		<th>ingredient</th>
		<!-- 
		<th>how_to_use</th>
		<th> other_info_</th> -->
		<th>availbility</th>
		<th>photo_1com.</th>
		<!-- <th>photo_2com.</th>
		<th>photo_3com.</th>
		<th>photo_4</th>
		<th>photo_5</th>
		<th>photo_6</th>
		<th>sold_by</th>-->
		<th>categories</th> 
		<th>status</th>
		<th>date</th>
		<th>action</th>
		
		
		</tr>
<!-- INSERT INTO `productadd`(`id`, `name`, `weight`, `price1`, `price2`, `tag`, `intro`, `keyword`, `benefit`, `ingredient`, `use`, `info`, `avail`, `photo1`, `photo2`, `photo3`, `photo4`, `photo5`, `photo6`, `sold_by`, `categories`, `status`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19],[value-20],[value-21],[value-22],[value-23]) -->
		<tbody class="w3-display-stripe w3-display-border w3-hover- ">
			 <?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM  productadd ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
		<tr>
			 <td  class="w3-smal  w3-table-all ">  <?php echo $result['id']; ?>  </td>
			 <td  class="w3-small w3-table-all   ">  <?php echo $result['name']; ?>  </td>
			  <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['weight']; ?>  </td>
			    <td class="w3-small w3-table-all w3-responsible w3-table-all ">  <?php echo $result['price1']; ?>  </td>
			    <td class="w3-small w3-table-all w3-responsible w3-table-all ">  <?php echo $result['price2']; ?>  </td>
			   <!--  <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['tag']; ?>  </td> -->
			 

			  <!--  <script >
  $(document).ready(function(){
    $('.intro').hide();
    $('.view').click(function(){
      $('.intro').toggle();

    });

  });
</script> -->



			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['intro']; ?> </td>
			  <!--   <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['keyword']; ?>  </td> -->
			  <td  class="w3-small w3-table-all w3-responsible  "> <?php echo $result['benefit']; ?>  </td>
			  <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['ingredient']; ?>  </td>
			   
			  <!--   <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['ingredient']; ?>  </td>
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['use']; ?>  </td>
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['info']; ?>  </td> -->
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['avail']; ?>  </td>

			       <td  class="w3-small w3-table-all "> <img src=" <?php echo $result['photo1']; ?>" height="30" width="auto">   </td>
			        <!-- <td  class="w3-small w3-table-all "> <img src=" <?php echo $result['photo1']; ?>" height="30" width="auto">   </td>
			         <td  class="w3-small w3-table-all "> <img src=" <?php echo $result['photo1']; ?>" height="30" width="auto">   </td>
			          <td  class="w3-small w3-table-all "> <img src=" <?php echo $result['photo1']; ?>" height="30" width="auto">   </td>
			           <td  class="w3-small w3-table-all "> <img src=" <?php echo $result['photo1']; ?>" height="30" width="auto">   </td>
			            <td  class="w3-small w3-table-all "> <img src=" <?php echo $result['photo1']; ?>" height="30" width="auto">   </td> -->
			       <!-- <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['sold_by']; ?>  </td> -->
			       <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['categories']; ?>  </td>
			       <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['status']; ?>  </td>
			       <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['date']; ?>  </td>
			       <td> <a href="product_up.php?id=<?php echo $result['id']; ?>"><i class="fa fa-edit fa-2x"></i></a></td>
			      


		
		</tr>
		 <?php
              # code...
            }
            ?>
	</tbody>
</table><br><br>
<div class="w3-center"><input class="w3-center w3-red w3-hover-blue w3-circle" style="width: 50%; font-size: 30px;" type="submit" name="submit" value="Delete" class="btn btn-primary btn-md pull-left" onClick="return confirm('Are you sure you want to delete?');" ></div><br>
</form>

<script >
  $(document).ready(function(){
    $('.mmm').hide();
    $('.2').show();
    $('.kkk').click(function(){
      $('.mmm').toggle();
    $('.2').hide();
    $('.mmm').show();
      

  
      })
      

    });

</script> 

<script type="text/javascript">
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>
<?php include("footer.php");?>
<?php } ?>