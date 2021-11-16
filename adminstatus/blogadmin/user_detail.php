<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>

<?php include("header.php");?>

<?php include("link.php");?>
<br><br><br><div> <h2 class="w3-center"><b style="color: green; font-size: 25px;">User Details Segment</b></h2></div>
<hr style="border-bottom: 2px dotted red;">
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
	
	<?php $id=$result['id']; ?>
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
		<td>full_address:</td>
		<td><?php echo $result['city']; ?> ,<?php echo $result['warda']; ?>,<?php echo $result['localaddress1']; ?>,<?php echo $result['district']; ?>,<?php echo $result['country']; ?> ,<?php echo $result['state']; ?> </td>
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
<div>
	<form method="POST" action="">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<input type="submit" name="submit" value="Activate User" style="width: 50%; height: 6vh; font-size: 22px; font-weight: bold;background-color: pink;" class="w3-circle">
	</form>
</div>

<!-- <div class="w3-container"> <button style="border: none;"><a href=""><< previous</a></button>
<button class="w3-right" style="border: none;"><a href="">next >></a></button>
</div> -->
<br>
<br>
<div class="container ">
	<caption class="w3-border"><b style="color: green; font-size: 25px;">Order Pending</b></caption>
<table class="container-fluid w3-rose responsive table-stripe w3 w3-border w3-responsive" border="2" cellpadding="10"  cellspacing="10">
	<tbody class="w3-border" >
		<tr border="3" class="w3-border  w3-blue "   >
		
		
		<th class="w3-center">product name</th>
		<th class="w3-center">price</th>
		<th class="w3-center">quentites</th>
		<th class="w3-center"> shiping charge</th>
		<th class="w3-center">subtotal</th>

	</tr>

	<?php 


             include("dbc.php");
            // $id=$_GET['$cc'];
             $totalll=0;
            $selectquery = "SELECT*FROM `order` WHERE cid ='$id' AND status='0' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>
	<tr>
		 
		    	<!-- <td class="w3-center"> <a href="delete.php?id=<?php echo $result['id']; ?> "  data-toggle="tooltip" data-placement="bottom" title="delete" ><i class="fa fa-trash w3-center" aria-hidden="true">delet</i> </a></td>
		    	<td class="w3-center"> <a href="order_product_update.php?id=<?php echo $result['id']; ?> "  data-toggle="tooltip" data-placement="bottom" title="delete" ><i class="fa fa-edit w3-center" aria-hidden="true"> update</i> </a></td> -->
		    	<td class="w3-center">  <?php echo $result['pname']; ?></td>
		<td class="w3-center">   <?php  echo 'NPR. '.$result['price'].'|-' ; ?></td>
		<td class="w3-center">	
<input  type="number" name="pquantity" id="quantity"
 class=" onlynumber  " value="<?php echo $result['pquantity']; ?>" min="1" style="width: 90px;" >


		 <select class=" " name="unit" style="width: 90px;" >
		<option type="text" name="unit"> <?php echo $result['unit']; ?></option> 	
   
      

    </select></td>

  <?php
$a=$result['price'];



$shipinggg=$result['shiping'];


   $priceee=$result['price'] *$result['pquantity'] ; 
$subtotalll= $shipinggg+$priceee;
$totalll+=$subtotalll;

  ?>

		<td class="w3-center">NPR.<?php echo $result['shiping']; ?>|-</td>
		<td class="w3-center">NPR.<?php echo "$subtotalll"; ?>|-</td>

	</tbody>
	</tr>


		
	<?php
              # code...
            }
            ?>
            <tbody>
            	<tr><th colspan="2"><h4><b class="w3-text-orange">total subtotal:-</b></h4></th>
            		<th colspan="3" ><h4 class=""><b class="w3-text-orange w3-right">NPR.<?php echo "$totalll"; ?>|-</b></h4></th>
            		

            	</tr>
			
		</tbody>
	</tbody></table>
</div>


<hr>
<br>
<div class="container ">
	<caption class="w3-border"><b style="color: green; font-size: 25px;">Order Aproved</b></caption>
<table class="container-fluid w3-rose responsive table-stripe w3 w3-border w3-responsive" border="2" cellpadding="10"  cellspacing="10">
	<tbody class="w3-border" >
		<tr border="3" class="w3-border  w3-blue "   >
		
		
		<th class="w3-center">product name</th>
		<th class="w3-center">price</th>
		<th class="w3-center">quentites</th>
		<th class="w3-center"> shiping charge</th>
		<th class="w3-center">subtotal</th>

	</tr>

	<?php 


             include("dbc.php");
            // $id=$_GET['$cc'];
             $totall=0;
            $selectquery = "SELECT*FROM `order` WHERE cid ='$id' and status='1'  ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>
	<tr>
		 
		    	<!-- <td class="w3-center"> <a href="delete.php?id=<?php echo $result['id']; ?> "  data-toggle="tooltip" data-placement="bottom" title="delete" ><i class="fa fa-trash w3-center" aria-hidden="true">delet</i> </a></td>
		    	<td class="w3-center"> <a href="order_product_update.php?id=<?php echo $result['id']; ?> "  data-toggle="tooltip" data-placement="bottom" title="delete" ><i class="fa fa-edit w3-center" aria-hidden="true"> update</i> </a></td> -->
		    	<td class="w3-center">  <?php echo $result['pname']; ?></td>
		<td class="w3-center">   <?php  echo 'NPR. '.$result['price'].'|-' ; ?></td>
		<td class="w3-center">	
<input  type="number" name="pquantity" id="quantity"
 class=" onlynumber  " value="<?php echo $result['pquantity']; ?>" min="1" style="width: 90px;" >


		 <select class=" " name="unit" style="width: 90px;" >
		<option type="text" name="unit"> <?php echo $result['unit']; ?></option> 	
   
      

    </select></td>

  <?php
$a=$result['price'];



$shipingg=$result['shiping'];


   $pricee=$result['price'] *$result['pquantity'] ; 
$subtotall= $shipingg+$pricee;
$totall+=$subtotall;

  ?>

		<td class="w3-center">NPR.<?php echo $result['shiping']; ?>|-</td>
		<td class="w3-center">NPR.<?php echo "$subtotall"; ?>|-</td>

	</tbody>
	</tr>


		
	<?php
              # code...
            }
            ?>
            <tbody>
            	<tr><th colspan="2"><h4><b class="w3-text-orange">total subtotal:-</b></h4></th>
            		<th colspan="3" ><h4 class=""><b class="w3-text-orange w3-right">NPR.<?php echo "$totall"; ?>|-</b></h4></th>
            		

            	</tr>
			
		</tbody>
	</tbody></table>
</div>
<br><hr>
<div class="container ">
	<caption class="w3-border"><b style="color: green; font-size: 25px;">Order delevered</b></caption>
<table class="container-fluid w3-rose responsive table-stripe w3 w3-border w3-responsive" border="2" cellpadding="10"  cellspacing="10">
	<tbody class="w3-border" >
		<tr border="3" class="w3-border  w3-blue "   >
		
		
		<th class="w3-center">product name</th>
		<th class="w3-center">price</th>
		<th class="w3-center">quentites</th>
		<th class="w3-center"> shiping charge</th>
		<th class="w3-center">subtotal</th>

	</tr>

	<?php 


             include("dbc.php");
            // $id=$_GET['$cc'];
             $totals=0;
            $selectquery = "SELECT*FROM `order` WHERE cid ='$id' AND status='2' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>
	<tr>
		 
		    	<!-- <td class="w3-center"> <a href="delete.php?id=<?php echo $result['id']; ?> "  data-toggle="tooltip" data-placement="bottom" title="delete" ><i class="fa fa-trash w3-center" aria-hidden="true">delet</i> </a></td>
		    	<td class="w3-center"> <a href="order_product_update.php?id=<?php echo $result['id']; ?> "  data-toggle="tooltip" data-placement="bottom" title="delete" ><i class="fa fa-edit w3-center" aria-hidden="true"> update</i> </a></td> -->
		    	<td class="w3-center">  <?php echo $result['pname']; ?></td>
		<td class="w3-center">   <?php  echo 'NPR. '.$result['price'].'|-' ; ?></td>
		<td class="w3-center">	
<input  type="number" name="pquantity" id="quantity"
 class=" onlynumber  " value="<?php echo $result['pquantity']; ?>" min="1" style="width: 90px;" >


		 <select class=" " name="unit" style="width: 90px;" >
		<option type="text" name="unit"> <?php echo $result['unit']; ?></option> 	
   
      

    </select></td>

  <?php
$a=$result['price'];



$shipings=$result['shiping'];


   $prices=$result['price'] *$result['pquantity'] ; 
$subtotals= $shipings+$prices;
$totals+=$subtotals;

  ?>

		<td class="w3-center">NPR.<?php echo $result['shiping']; ?>|-</td>
		<td class="w3-center">NPR.<?php echo "$subtotals"; ?>|-</td>

	</tbody>
	</tr>


		
	<?php
              # code...
            }
            ?>
            <tbody>
            	<tr><th colspan="2"><h4><b class="w3-text-orange">total subtotal:-</b></h4></th>
            		<th colspan="3" ><h4 class=""><b class="w3-text-orange w3-right">NPR.<?php echo "$totals"; ?>|-</b></h4></th>
            		

            	</tr>
			
		</tbody>
	</tbody></table>
</div><hr>
  <?php include('footer.php') ?>

<?php } ?>



<?php 
require_once("dbc.php");

if(isset($_POST['submit']))
{


 // UPDATE `order` SET `id`=[value-1],`pname`=[value-2],`photo`=[value-3],`pquantity`=[value-4],`unit`=[value-5],`pid`=[value-6],`price`=[value-7],`subtotal`=[value-8],`tax`=[value-9],`shiping`=[value-10],`total`=[value-11],`cid`=[value-12],`cname`=[value-13],`email`=[value-14],`phone`=[value-15],`country`=[value-16],`state`=[value-17],`district`=[value-18],`city`=[value-19],`local_ad`=[value-20],`localaddress1`=[value-21],`zipcode`=[value-22],`date`=[value-23] WHERE 1



  $id=  $_POST['id'];
  

 
  $sql=" UPDATE `user` SET `status`='active' WHERE id='$id' ";

// echo "$sql";
$data = mysqli_query($conn ,$sql);
// echo "$data";


if($data)
 {
	// $_SESSION['action1']="your Cancelation successfull. Thanks for being family of kupindetimur.com @kupindetimur Team..!";
  echo "Activated successfully"; 
 // header('location:order_checkout.php');
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

 
?>
