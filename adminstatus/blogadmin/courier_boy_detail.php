<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>

<?php include("header.php");?>

<?php include("link.php");?>
<br><br><br><div> <h2 class="w3-center"><b> user_controls_ &_update_panel(totaluser)</b></h2></div>
<hr>
<br>

<hr>



<div class="container"><style>.none li a{border: 2px solid black;padding: 8px; margin: 4px;}  </style>
	
	<ul class="none" style="list-style: none; display: flex;">
<li><a href="user_ad.php" title="add new"><i class="fa fa-plus"></i> new</a></li>
<li> <a href="#"  onclick="window.print();" title="print"><i class="fa fa-print"></i>print</a>
</li>

<li><a href="user_detail_export_ccv.php" title="download microsoft spreadshet file"><i class="fa fa-download"></i>ccv</a></li>
<li><a href="#"title="view all"><i class="fa fa-eye"></i>all</a></li>


	</ul>
</div><br>

<hr>

<caption class="w3-border"><b style="color: green; font-size: 25px;">Personal Details</b></caption>
<table class="w3-responsiv w3-table-all w3-con container" border="5px" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>
<!-- INSERT INTO `user`(`id`, `fname`, `lname`, `email`, `contactno`, `country`, `state`, `district`, `city`, `localaddress`, `password`, `cpassword`, `posting_date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13]) -->
<?php 
$id=$_GET['id'];
            include("dbc.php");
            $selectquery = "SELECT*FROM user where id='$id' ORDER BY id DESC ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
	
	<tr>
		<td>Full_Name:</td>
		<td><?php echo $result['fname']; ?>-<?php echo $result['lname']; ?></td>
	</tr>
	<tr>
		<td>Mobile_no:</td>
		<td><?php echo $result['contactno']; ?></td>
	</tr>
	<tr>
		<td>Email_id:</td>
		<td><?php echo $result['email']; ?></td>
	</tr>
	<tr>
		<td>Courier:</td>
		<td><?php echo $result['zipcode']; ?>,<?php echo $result['localaddress1']; ?></td>
	</tr>
	<tr>
		<td>full_address:</td>
		<td><?php echo $result['city']; ?> ,<?php echo $result['warda']; ?>,<?php echo $result['district']; ?>,<?php echo $result['country']; ?> ,<?php echo $result['state']; ?> </td>
	</tr>
	<tr>
		<td>Local_address:</td>
		<td><?php echo $result['localaddress']; ?></td>
	</tr>
	<tr>
		<td>date_of_joining:</td>
		<td><?php echo $result['posting_date']; ?> </td>
	</tr>
	
 <?php
              # code...
            }
            ?>
	<br><br>
		
	</tbody>
</table>

<hr>

<!-- <div class="w3-container"> <button style="border: none;"><a href=""><< previous</a></button>
<button class="w3-right" style="border: none;"><a href="">next >></a></button>
</div> -->
<br>
<br>


<div class="container ">
	<caption class="w3-border"><b style="color: green; font-size: 25px;">Order Handover By Him</b></caption>
<table class="w3-responsive w3-table-all w3-container">
	
	<tbody class="w3-display-stripe w3-display-border w3-hover- ">
		<tr class=" container" style="background-color: pink;">
			
			<th >p.s.id</th>
			<th >p.ID</th>
<th>C.id</th>
		<th>product_name</th>
		<th>Qty</th>
		<th>Wt/Pac</th>
		<th>Rs/pac</th>
		<th>shiping</th>
		<th>Rs_total</th>
		
		<th>total</th>
		<th>C.Name</th>
		
		<!-- <th>email</th>
		<th>phone</th> -->
		<th>country</th>
		
		<th>district</th> 
		<th>munciPality</th>
		
		<th>warda</th>
		<th>1st_Address</th>
		<th>2nd_Address</th>
		<th>zipcode</th>
		<th>order_date    </th>
		<th>Delevery_date    </th>
		<th colspan="" class="w3-center">status</th>
		<!-- <th colspan="" class="w3-center">Delever by</th>
		<th colspan="" class="w3-center">Courier_name</th>
		<th colspan="" class="w3-center">Contact_no</th> -->
		</tr>

		<tbody class="w3-display-stripe w3-display-border w3-hover- ">
			
				<?php 

            include("dbc.php");


            $selectquery = "SELECT * FROM `order` WHERE status='Handovered' and did=$id order by id desc";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
              
?>

<?php
$pquantity=$result['pquantity'];
$unit=$result['unit'];
// $qty=$result['qty'];
// $qty=$result['qty'];
$quant=$pquantity/$unit;


$b=$result['date'];
$bt=strtotime("$b");
  ?>

		<tr> 

			
			 <td  class="w3-smal  w3-table-all ">  <?php echo $result['id']; ?>  </td>
			 <td  class="w3-smal  w3-table-all ">  <?php echo $result['pid']; ?>  </td>
			 <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['cid']; ?>  </td>
			 <td  class="w3-small w3-table-all   ">  <?php echo $result['pname']; ?>  </td>
			  <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $quant; ?>  </td>
			    <td class="w3-small w3-table-all w3-responsible w3-table-all "><?php echo $result['unit']; ?>.<?php echo $result['tax']; ?>  </td>
			    <td class="w3-small w3-table-all w3-responsible w3-table-all "><?php echo $result['photo']; ?>. <?php echo $result['price']; ?>  </td>
			    <td class="w3-small w3-table-all w3-responsible w3-table-all "><?php echo $result['photo']; ?>.<?php echo $result['shiping']; ?>  </td>
			    

			    <td class="w3-small w3-table-all w3-responsible w3-table-all "> <?php echo $result['photo']; ?>.<?php echo $result['total']; ?>  </td>
			    <td class="w3-small w3-table-all w3-responsible w3-table-all "> Rs. <?php echo $result['total']; ?>  </td>
			    
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['cname']; ?>  </td>
			    <!-- <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['email']; ?>  </td>
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['phone']; ?>  </td> -->
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['country']; ?>  </td>
			    
			      <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['district']; ?>  </td>
			       <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['city']; ?>  </td>
			        <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['tunit']; ?>  </td>
			        <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['local_ad']; ?>  </td>
			         <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['localaddress1']; ?>  </td>
			         <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['zipcode']; ?>  </td>
			         <td  class="w3-small w3-table-all w3-responsible  " style="color: red;">  <?php echo date('d_M_h:ma',$bt);?> </td>
			         <td  class="w3-small w3-table-all w3-responsible  " style="color: red;">  <?php echo $result['ddate']; ?> </td>
			          <td style="color: green;"><?php echo $result['status']; ?> </td>
			          <!-- <td style="color: green;"><a href="courier_boy_detail.php?id=<?php echo $result['did']; ?>"><?php echo $result['cboy']; ?> </a></td>
			           <td style="color: green;"><?php echo $result['courier']; ?>,<?php echo $result['branch']; ?> </td>
			            <td style="color: green;"><?php echo $result['mobile']; ?> </td>
 -->



		
		</tr>
		 <?php
              # code...
            }
            ?>
	</tbody>
</table>

</div>


<hr><hr>
  <?php include('footer.php') ?>

<?php } ?>