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
<br><div> <h2 class="w3-center container"><b> shiping_charge_control panel</b></h2></div>
<hr>
<br>

<hr>



<div class="container"><style>.none li a{border: 2px solid black;padding: 8px; margin: 4px;}  </style>
	
	<ul class="none" style="list-style: none; display: flex;">
<li><a href="shiping_charge_add.php"> <i class="fa fa-plus"></i>  new</a></li>
<li> <a href=""  onclick="window.print();"><i class="fa fa-print"></i> print</a>
</li>

<li><a href="shiping_charge_ccv.php"><i class="fa fa-download"></i> ccv</a></li>
<li><a href=""><i class="fa fa-eye"></i> all</a></li>


	</ul>
</div><br>
<div ><a href="#country"> <i class="fa fa-eye fa-2x" style="color: green;"> view country</i> </a></div>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
<hr>
<caption class="w3-border"><b style="color: orange; font-size: 20px;">District of Nepal</b></caption>

<table class="w3-responsive w3-table-all w3-con container" border="5px" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>

	
		<tr class="w3-indigo container r ">
			<th class="r">id</th>
		
		<th class="r">Province</th>
		<th class="r">district</th>
		
		<th class="r">courier_service_provider</th>
		<th class="r">contact</th>
		<th class="r">Shiping_time</th>
		<th class="r">Shipping_charge</th>

		<th colspan="3" class="r">action</th>
		<th class="r">Updated-date</th>
	<!-- 	$sql="INSERT INTO `shiping_charge`( `country`, `district`, `charge_nepal`, `currency`, `charge_other`) VALUES ('$country','$district','$charge_nepal','$currency','$charge_other')";
 -->
		</tr>
<tbody class="w3-display-stripe w3-display-border container w3-center ">
		<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM `shiping_charge` where charge_other='district nepal'  ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php  

$b=$result['date'];
$n=strtotime("$b");?>
   
          
		<tr class="tr">
			
		  
		    <td class="r"> <?php echo $result['id']; ?> </td>
				
				<td class="r"><?php echo $result['state']; ?> </td>
		<td class="r"><?php echo $result['district']; ?> </td>
		<td class="r"><?php echo $result['courier']; ?> </td>
		<td class="r"><?php echo $result['contact']; ?> </td>
		<td class="r"><?php echo $result['service']; ?> </td>
		<td class="r"><?php echo $result['charge_nepal']; ?> </td>
		
		
		    
		   <td> <a href="shiping_charge_nepal_district_edit.php?id=<?php echo $result['id']; ?>" > <i style="color: green;" class="fa-2x fa fa-edit"></i></a></td>
		     <td> <a href="shiping_muncipality_view.php?id=<?php echo $result['district']; ?>" > <i style="color: orange;" class="fa-2x fa fa-eye"></i></a></td>
		    	<td> <a href="delete_shiping_charge.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete" onClick="return confirm('Are you sure you want to delete?');" ><i style="color: red;" class="fa-2x fa fa-trash" aria-hidden="true"></i></a></td>
		    	
	<td class="r"> <?php echo date('M-Y',$n); ?>  </td>
		</tr>
		 <?php
              # code...
            }
            ?>
	</tbody>
</table>
<br>
<hr style="border-bottom: 2px dotted red;">
<br>
<div id="country"><caption class="w3-border"><b style="color: orange; font-size: 20px;">Country details</b></caption>
<table class="w3-responsive w3-table-all w3-con container" border="5px" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>

	
		<tr class="w3-indigo container r ">
			<th class="r">id</th>
		
		<th class="r">country</th>
		<!-- <th class="r">Province</th>
		<th class="r">district</th> -->
		<th class="r"> <i class="fa fa-money"></i></th>
		<th class="r">courier_service_provider</th>
		<th class="r">contact</th>
		<th class="r">shiping_time</th>
		<th class="r">shiping_charge</th>
		
		<th colspan="3" class="r">action</th>
		<th class="r">Updated_date</th>
	<!-- 	$sql="INSERT INTO `shiping_charge`( `country`, `district`, `charge_nepal`, `currency`, `charge_other`) VALUES ('$country','$district','$charge_nepal','$currency','$charge_other')";
 -->
		</tr>
<tbody class="w3-display-stripe w3-display-border container w3-center ">
		<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM `shiping_charge` where charge_other='country' order by id";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php  

$b=$result['date'];
$n=strtotime("$b");?>
   
          
		<tr class="tr">
			
		  
		    <td class="r"> <?php echo $result['id']; ?> </td>
				
				<td class="r"><?php echo $result['country']; ?> </td>
				<!-- <td class="r"><?php echo $result['state']; ?> </td>
		<td class="r"><?php echo $result['district']; ?> </td> -->
		<td class="r"><?php echo $result['currency']; ?> </td>
		<td class="r"><?php echo $result['courier']; ?> </td>
		<td class="r"><?php echo $result['contact']; ?> </td>
		<td class="r"><?php echo $result['service']; ?> </td>
		<td class="r"><?php echo $result['charge_nepal']; ?> </td>
		
		
		    
		    <td> <a href="shiping_charge_edit.php?id=<?php echo $result['id']; ?>" > <i style="color: green;" class="fa-2x fa fa-edit"></i></a></td>
		     <td> <a href="shiping_muncipality_view.php?id=<?php echo $result['district']; ?>" > <i style="color: orange;" class="fa-2x fa fa-eye"></i></a></td>
		    	<td> <a href="delete_shiping_charge.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete" onClick="return confirm('Are you sure you want to delete?');" ><i style="color: red;" class="fa-2x fa fa-trash" aria-hidden="true"></i></a></td>
		    	
	<td class="r"> <?php echo date('M-Y',$n); ?>  </td>

 
		</tr>
		 <?php
              # code...
            }
            ?>
	</tbody>
</table></div>

<hr>

<div class="w3-container"> <button style="border: none;"><a href=""><< previous</a></button>
<button class="w3-right" style="border: none;"><a href="">next >></a></button>
</div>
<br>
<br>

  <?php  include('footer.php'); ?>
<?php } ?>