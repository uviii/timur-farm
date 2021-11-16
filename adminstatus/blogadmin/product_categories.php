
<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>


<?php include("header.php");?>

<?php include("link.php");?>
<br><br>

<div class="container"><button style="border: transparent;"><a href="product_index.php"> <i class="fa fa-home"></i> go_product_index_page</a></button></div>
<br><div> <h2 class="w3-center container"><b style="font-size: 25px; color: green;"> Product Catagories Control Panel</b></h2></div>
<hr style="border-bottom: 2px dotted green;">
<br>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
<hr>



<div class="container"><style>.none li a{border: 2px solid black;padding: 8px; margin: 4px;}  </style>
	
	<ul class="none" style="list-style: none; display: flex;">
<li><a href="productcatad.php?submit=save_new"><i class="fa fa-plus"></i>new</a></li>
<li> <a href=""  onclick="window.print();"><i class="fa fa-print"></i>print</a>
</li>

<li><a href="productcat_export_ccv.php
"><i class="fa fa-download"></i>ccv</a></li>
<li><a href=""><i class="fa fa-eye"></i>show_all</a></li>


	</ul>
</div><br>

<hr>
<!-- 
<caption class="w3-border"><b style="color: orange; font-size: 20px;"> Order Details</b></caption><br> -->
<caption class="w3-border"><b style="color: red;"><span style="color: green;">Total Categories:</span><?php 
	


            include("dbc.php");
            $query = "SELECT * FROM productcat ";
            $querys = mysqli_query($conn , $query) or die("error");
            $num_row=mysqli_num_rows($querys);
            echo $num_row;
            ?></b> </caption>

<table class="w3-responsible w3-table-all w3-con container" border="5px" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>
	
		<tr class="w3-indigo container r ">
			<th class="r">id</th>
		<th class="r">name of categories</th>
		<th colspan="2" class="r">opration</th>
		<!-- INSERT INTO `blog_categories`(`id`, `name`, `date`) VALUES ([value-1],[value-2],[value-3]) -->
		
		</tr>
<tbody class="w3-display-stripe w3-display-border container w3-center ">
		<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM productcat  limit 10 ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
		<tr class="tr">
			
		    <td  class="w3-sm ">  <?php echo $result['id']; ?>  </td>
		    <td  class="w3-sma   ">  <?php echo $result['name']; ?>  </td>

		   <td> <a href="procat_up.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="edit" ><i class="fa fa-edit fa-2x" style="color: green;" aria-hidden="true"></i> </a></td>

		    	<td> <a href="product_cat_delete.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete" ><i class="fa fa-trash fa-2x" style="color: red;" aria-hidden="true"></i> </a></td>
		    	
		  

 
		</tr>
		 <?php
              # code...
            }
            ?>
	</tbody>
</table>

<hr>

<div class="w3-container"> <button style="border: none;"><a href=""><< previous</a></button>
<button class="w3-right" style="border: none;"><a href="">next >></a></button>
</div>
<br>
<br>


  <div class="container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>


<?php } ?>
