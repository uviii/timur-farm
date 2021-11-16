<?php include("header.php");?>

<?php include("link.php");?>
<br><br>
<hr>

<hr>




<div class="container"><style>.none li a{border: 2px solid black;padding: 4px; margin: 2px;}  </style>

	<table border="1" cellspacing="0" cellpadding="10"
style="text-align:center;">
		<tr>
			<th class="w3-hover-pink"><a href="productadd.php" > <i class="fa fa-plus"></i> add</a></th>
			<th class="w3-hover-pink"><a href=""  onclick="window.print();"> <i class="fa fa-print"></i> print</a></th>
			<th class="w3-hover-pink"><a href=""><i class="fa fa-download"></i> ccv</a></th>
			<th class="w3-hover-pink"><button class="kkk w3-hover-pink" style="border:none;"><a href="#"> <i class="fa fa-eye"></i> all</a></button></th>

		</tr>
	</table>
</div><br>

<hr>
<table class="w3-responsive w3-table-all w3-containe">
	
	<tbody class="w3-display-stripe w3-display-border w3-hover- ">
		<tr class="bg-success container">
			<th style="cellspace:" cellspacing="2" cellpadding="3">id</th>
		<th>product_name</th>
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
            $selectquery = "SELECT*FROM  banner ";
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
			   <script >
  $(document).ready(function(){
    $('.intro').hide();
    $('.view').click(function(){
      $('.intro').toggle();

    });

  });
</script>



			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['intro']; ?> </td>
			  <!--   <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['keyword']; ?>  </td> -->
			  <td  class="w3-small w3-table-all w3-responsible  "> <button class="view">view_intro</button> <div class="intro"><?php echo $result['benefit']; ?>  </div> </td>
			  <td  class="w3-small w3-table-all w3-responsible  "> <button class="view">view_intro</button> <div class="intro"><?php echo $result['ingredient']; ?>  </div> </td>
			   
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
			       <td  class="w3-small w3-table-all w3-responsible  "> edit /delete	 </td>

		
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
<br><hr>








  <div class="container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>