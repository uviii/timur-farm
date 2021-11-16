<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>


<!DOCTYPE html>
<html>
<head>
  <title></title>
<?php include("link.php");?>
</head>
<body style="overflow-x: hidden;">





<?php include("mobilenav.php"); ?>





<br><br>
<div class="w3-left w3-container ml-3"><h5><a href="draft_index.php"> <i class="fa fa-home"></i> go to front page</a></h5></div>
<br><br>
<hr>




<div class="container"><style>.none li a{border: 2px solid black;padding: 4px; margin: 2px;}  </style>
	
	<ul class="none" style="list-style: none; display: flex;">
<!-- <li><a href="http://localhost/timur%20farm/adminstatus/blogadmin/productadd.php ">add new</a></li> -->
<li> <a href=""  onclick="window.print();">print</a></li>
<li><a href="order_export_ccv.php" >save_ccv</a></li>
<li><a href="">filter</a></li>
<li><a href="">show_all</a></li>
	

	</ul>
</div><br>

<hr><div class="container w3-center"><details>tax rate is 13%</details></div>
<table class="w3-responsive w3-table-all w3-container">
	
	<tbody class="w3-display-stripe w3-display-border w3-hover- ">
		<tr class="bg-success container">
			<th >s.n</th>
			<th >p.s.id</th>
			<th >p.ID</th>
		<th>product_name</th>
		<th>quantites</th>
		<th>price</th>
		<th>subtotal</th>
		<th>tax</th>
		<th>shiping</th>
		<th>total</th>
		<th>cid</th>
		<th>custumr_name</th>
		<th>email</th>
		<th>phone</th>
		<th>country</th>
		<th>state</th>
		<th>district</th> 
		<th>city</th>
		<th>local_ad</th>
		<th>local_ad1</th>
		<th>zipcode</th>
		<th>order_date    </th>
		<th colspan="2" class="w3-center">action</th>
		</tr>

		<tbody class="w3-display-stripe w3-display-border w3-hover- ">
			
				<?php 

            include("dbc.php");

$ik=$_GET['id'];
            $selectquery = "SELECT * FROM `order` WHERE id='$ik'";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>


		<tr> 

			<td> <ol>
				<li>.</li>
			</ol> </td>
			 <td  class="w3-smal  w3-table-all ">  <?php echo $result['id']; ?>  </td>
			 <td  class="w3-smal  w3-table-all ">  <?php echo $result['pid']; ?>  </td>
			 <td  class="w3-small w3-table-all   ">  <?php echo $result['pname']; ?>  </td>
			  <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['pquantity']; ?>.<?php echo $result['unit']; ?>  </td>
			    <td class="w3-small w3-table-all w3-responsible w3-table-all "> 	Rs. <?php echo $result['price']; ?>  </td>
			    <td class="w3-small w3-table-all w3-responsible w3-table-all "> Rs. <?php echo $result['subtotal']; ?>  </td>
			    <td class="w3-small w3-table-all w3-responsible w3-table-all ">Rs.  <?php echo $result['tax']; ?>  </td>

			    <td class="w3-small w3-table-all w3-responsible w3-table-all ">Rs. <?php echo $result['shiping']; ?>  </td>
			    <td class="w3-small w3-table-all w3-responsible w3-table-all "> Rs. <?php echo $result['total']; ?>  </td>
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['cid']; ?>  </td>
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['cname']; ?>  </td>
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['email']; ?>  </td>
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['phone']; ?>  </td>
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['country']; ?>  </td>
			     <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['state']; ?>  </td>
			      <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['district']; ?>  </td>
			       <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['city']; ?>  </td>
			        <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['local_ad']; ?>  </td>
			         <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['localaddress1']; ?>  </td>
			         <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['zipcode']; ?>  </td>
			         <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['date']; ?>  </td>
			          <td>delet</td>




		
		</tr>
		 <?php
              # code...
            }
            ?>
	</tbody>
</table>


<hr>

<br><hr>








<?php include("footer.php");?>

<?php } ?>
















