<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>


<?php include("header.php");?>

<?php include("link.php");?>
<br><br>
<div class="w3-left w3-container ml-3"><h5><a href="order_enquery_index.php"> <i class="fa fa-home"></i> go to front page</a></h5></div>
<br>

<br><div> <h2 class="w3-center container"><b style="font-size: 22px; color: green;"> Order Details Control Panel</b></h2></div>
<hr style="border-bottom: 2px dotted green;">

<div class="container"><style>.none li a{border: 2px solid black;padding: 4px; margin: 2px;}  </style>
	
	<ul class="none" style="list-style: none; display: flex;">
<!-- <li><a href="http://localhost/timur%20farm/adminstatus/blogadmin/productadd.php ">add new</a></li> -->
<li> <a href=""  onclick="window.print();">print</a></li>
<li><a href="order_export_ccv.php" >save_ccv</a></li>
<li><a href="">filter</a></li>
<li><a href="">show_all</a></li>
	

	</ul>
</div>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>

 
<!-- 
<caption class="w3-border"><b style="color: orange; font-size: 20px;"> Order Details</b></caption><br> -->
<caption class="w3-border"><b style="color: red;"><span style="color: green;">Total Order:</span><?php 
	


            include("dbc.php");
            $query = "SELECT * FROM `order` where status='pending'  ";
            $querys = mysqli_query($conn , $query) or die("error");
            $num_row=mysqli_num_rows($querys);
            echo $num_row;
            ?></b> </caption>
<table class="w3-responsive w3-table-all w3-container">
	
	<tbody class="w3-display-stripe w3-display-border w3-hover- ">
		<tr class="w3-indigo container">
			<!-- <th >s.n</th> -->
			<th >id</th>
			<!-- <th >p.ID</th> -->
		<th>product_name</th>
		<th>quantites</th>
		<!-- <th>price</th>
		<th>subtotal</th>
		<th>tax</th>
		<th>shiping</th> -->
		<th>total</th>
		<!-- <th>cid</th> -->
		<th>custumr_name</th>
		<!-- <th>email</th> -->
		<th>phone</th>
		<th>country</th>
		<!-- <th>state</th> -->
		<th>district</th> 
		<!-- <th>city</th> -->
		<!-- <th>local_ad</th>
		<th>local_ad1</th> -->
		<!-- <th>zipcode</th> -->
		<th  class="w3-center">Procced</th>
		<th>order_date    </th>
		
		</tr>

		<tbody class="w3-display-stripe w3-display-border w3-hover- ">
			
				<?php 

            include("dbc.php");


            $selectquery = "SELECT * FROM `order` where status='pending' order by id desc ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php  

$b=$result['date'];
$n=strtotime("$b");
// echo $id;
?>
<tr> 

			<!-- <td> <ol>
				<li>.</li>
			</ol> </td> -->
			 <td  class="w3-smal  w3-table-all ">  <?php echo $result['id']; ?>  </td>
			 <!-- <td  class="w3-smal  w3-table-all ">  <?php echo $result['pid']; ?>  </td> -->
			 <td  class="w3-small w3-table-all   ">  <?php echo $result['pname']; ?>  </td>
			  <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['pquantity']; ?>.<?php echo $result['unit']; ?>  </td>
			   <!--  <td class="w3-small w3-table-all w3-responsible w3-table-all "> 	Rs. <?php echo $result['price']; ?>  </td> -->
			    <!-- <td class="w3-small w3-table-all w3-responsible w3-table-all "> Rs. <?php echo $result['subtotal']; ?>  </td>
			    <td class="w3-small w3-table-all w3-responsible w3-table-all ">Rs.  <?php echo $result['tax']; ?>  </td>

			    <td class="w3-small w3-table-all w3-responsible w3-table-all ">Rs. <?php echo $result['shiping']; ?>  </td> -->
			    <td class="w3-small w3-table-all w3-responsible w3-table-all "> Rs. <?php echo $result['total']; ?>  </td>
			    <!-- <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['cid']; ?>  </td> -->
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['cname']; ?>  </td>
			    <!-- <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['email']; ?>  </td> -->
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['phone']; ?>  </td>
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['country']; ?>  </td>
			    <!--  <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['state']; ?>  </td> -->
			      <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['district']; ?>  </td>
			       <!-- <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['city']; ?>  </td> -->
			      <!--   <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['local_ad']; ?>  </td>
			         <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['localaddress1']; ?>  </td> -->
			         <!-- <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['zipcode']; ?>  </td> -->
			         
			          <td><a href="send_order_conformation_mail.php?pid=<?php echo $result['id']; ?>" style="color: green;"> <i class="fa fa-save fa-2x"></i></a></td>
			          <td  class="w3-small w3-table-all w3-responsible  " style="color: red; font-weight: bold;">  <?php echo date('d_M_h:ma',$n);?>  </td>
			         




		
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

<?php } ?>
















