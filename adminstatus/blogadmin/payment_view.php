<?php
session_start();
error_reporting(0);
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>
<?php include("header.php");?>

<?php include("link.php");?>
<br><br>
<div class="w3-left w3-container ml-3"><h5><a href="order_enquery_index.php"> <i class="fa fa-home"></i> go to front page</a></h5></div>
<br>
<br><div> <h2 class="w3-center container"><b> payment_control panel</b></h2></div>
<hr>
<br>

<hr>



<div class="container"><style>.none li a{border: 2px solid black;padding: 8px; margin: 4px;}  </style>
	
	<ul class="none" style="list-style: none; display: flex;">
<li><a href="payment_add.php"><i class="fa fa-plus"></i>new</a></li>
<li> <a href=""  onclick="window.print();"><i class="fa fa-print"></i>print</a>
</li>
<li><a href="user_detail_export_ccv.php"><i class="fa fa-download"></i> ccv</a></li>

<li><a href=""><i class="fa fa-eye"></i>all</a></li>


	</ul>
</div><br>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
<hr>


<table class="w3-responsive w3-table-all w3-con container" border="5px" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>

	
		<tr class="bg-success container r ">
			<th class="r">id</th>
		<th class="r">account_holder</th>
		<th class="r">account_name</th>
		<th class="r">bank branch</th>
		<!-- <th class="r">ifsc code</th> -->
		<th class="r">type_of_transaction</th>
		
		<th colspan="2" class="r">action</th>
		<th class="r">updated_date</th>
	<!-- 	$sql="INSERT INTO `shiping_charge`( `country`, `district`, `charge_nepal`, `currency`, `charge_other`) VALUES ('$country','$district','$charge_nepal','$currency','$charge_other')";
 -->
		</tr>
<tbody class="w3-display-stripe w3-display-border container w3-center ">
		<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM `payments`   ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
		<tr class="tr">
			
		  
		    <td class="r"> <?php echo $result['id']; ?> </td>
				<td class="r"><?php echo $result['name']; ?> </td>
		<td class="r"><?php echo $result['account']; ?> </td>
		<td class="r"><?php echo $result['bname']; ?>,<?php echo $result['branch']; ?> </td>
		<!-- <td class="r"><?php echo $result['ifsc']; ?> </td> -->
		<td class="r"><?php echo $result['type']; ?> </td>
		
		
		    
		    <td> <a href="payment_edit.php?pid=<?php echo $result['id']; ?>"><i class="fa-2x fa fa-edit"></i></a></td>
		    	<td> <a href="delete_payment.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete" onClick="return confirm('Are you sure you want to delete?');" ><i class="fa-2x fa fa-trash" aria-hidden="true"></i> </a></td>
		    	<td class="r"><?php echo $result['date']; ?> </td>


 
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


<hr>
<br>
<br><hr><hr>
  <div class="container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>
<?php } ?>