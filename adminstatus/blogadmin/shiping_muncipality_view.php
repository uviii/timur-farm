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
<br><?php  
$id=$_GET['id'];

// echo $id;
?>

<br><div> <h2 class="w3-center container"><b style="font-size: 25px; color: green;"> <?php echo $id; ?> District shiping_charge_control panel</b></h2></div>
<hr style="border-bottom: 2px dotted green;">
<br>
<br>







<div class="container"><style>.none li a{border: 2px solid black;padding: 8px; margin: 4px;}  </style>
	
	<ul class="none" style="list-style: none; display: flex;">
		<?php 
		$id=$_GET['id'];
// echo $id;
            include("dbc.php");
            $selectquery = "SELECT*FROM `shiping_charge` where district='$id'  ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            $result= mysqli_fetch_array($query);
              
?>
<?php  

$did=$result['id'];

// echo $id;
?>
<li><a href="muncipalityad.php?id=<?php echo $did; ?>" title="add new muncipality"> <i class="fa fa-plus"></i>  new</a></li>
<li> <a href=""  onclick="window.print();" title="Print"><i class="fa fa-print"></i> print</a>
</li>

<li><a href="shiping_charge_ccv.php" title="download"><i class="fa fa-download"></i> ccv</a></li>
<li><a href=""><i class="fa fa-eye"></i> all</a></li>


	</ul>
</div>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>

<?php  
$id=$_GET['id'];

// echo $id;
?>
<caption class="w3-border"><b style="color: orange; font-size: 20px;"> <?php echo $id; ?> District</b></caption><br>
<caption class="w3-border"><b style="color: red;"><span style="color: indigo;">Total Rural/muncipality:</span><?php 
	

$id=$_GET['id'];
            include("dbc.php");
            $query = "SELECT*FROM `muncipality` where district='$id'  ";
            $querys = mysqli_query($conn , $query) or die("error");
            $num_row=mysqli_num_rows($querys);
            echo $num_row;
            ?> </b></caption>

<table class="w3-responsive w3-table-all w3-con container" border="5px" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>

	
		<tr class="bg-success container r ">
			<th class="r">id</th>
		<!-- <th class="r">country name</th> -->
		<th class="r">muncipality</th>
		
		
		<th class="r">courier_service_provider</th>
		<th class="r">contact</th>
		<th class="r">shipping_time</th>
		<th class="r">currency</th>
		<th class="r">Charge </th>
		
		<th class="r">updated</th>
		<th colspan="4" class="r">action</th>
	<!-- 	$sql="INSERT INTO `shiping_charge`( `country`, `district`, `charge_nepal`, `currency`, `charge_other`) VALUES ('$country','$district','$charge_nepal','$currency','$charge_other')";
 -->
		</tr>
<tbody class="w3-display-stripe w3-display-border container w3-center ">
	
		<?php 
		$id=$_GET['id'];
// echo $id;
            include("dbc.php");
            $selectquery = "SELECT*FROM `muncipality` where district='$id'  ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php  

$b=$result['date'];
$n=strtotime("$b");
// echo $id;
?>
   
          
		<tr class="tr">
			
		  
		    <td class="r"> <?php echo $result['id']; ?> </td>
			<!-- 	<td class="r"><?php echo $result['country']; ?> </td> -->
		<td class="r"><?php echo $result['munci']; ?> </td>
		<td class="r"><?php echo $result['courier']; ?> </td>
		<td class="r"><?php echo $result['contact']; ?></td>
		<td class="r"><?php echo $result['service']; ?> </td>
		<td class="r"><?php echo $result['currency']; ?> </td>
		<td class="r"><?php echo $result['charge_nepal']; ?> </td>
		
		<td class="r"> <?php echo date('M-Y',$n); ?>  </td>
		
		    
		    <td> <a href="shiping_district_edit.php?id=<?php echo $result['id']; ?>" > <i class="fa fa-edit"></i></a></td>
		    	<td> <a href="shiping_district_delet.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete" onClick="return confirm('Are you sure you want to delete?');" ><i class="fa fa-trash" aria-hidden="true"></i> </a></td>
		    	<td> <a href="warda_ad.php?id=<?php echo $result['id']; ?>" > <i class="fa fa-plus"></i>warda</a></td>
	
 <td> <a href="shiping_warda_view.php?id=<?php echo $result['munci']; ?>" > <i class="fa fa-eye"></i>warda</a></td>
 
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