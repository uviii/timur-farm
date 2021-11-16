



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
<br><br><div> <h2 class="w3-center"><b style="color: green; font-size: 25px;">Enquiry Details Control Panel</b></h2></div>
<hr style="border-bottom: 2px dotted green;">
<br>



<div class="container"><style>.none li a{border: 2px solid black;padding: 8px; margin: 4px;}  </style>
	
	<ul class="none" style="list-style: none; display: flex;">

<li> <a href=""  onclick="window.print();">print</a>
</li>

<li><a href="enquery_export_ccv.php">save_ccv</a></li>
<li><a href="">filter</a></li>
<li><a href="">show_all</a></li>


	</ul>
</div><br>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>


<hr>


<table class="w3-responsible w3-table-all w3-con container" border="5px" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>
	
		<tr class="bg-success container r ">
			<th class="r">id</th>
		<th class="r"> custumer's name</th>
		<th class="r"> custumer's phone</th>
		<th class="r"> custumer's email</th>
		<th class="r"> custumer's requirement/enquiry</th>
		
		<th colspan="2" class="r">Action</th>
		<th class="r"> date</th>
		<!-- INSERT INTO `blog_categories`(`id`, `name`, `date`) VALUES ([value-1],[value-2],[value-3]) -->
		
		</tr>
<tbody class="w3-display-stripe w3-display-border container w3-center ">
		<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM contact_product order by id desc ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
              
?>
		<tr class="tr">
			
		    <td  class="w3-sm ">  <?php echo $result['id']; ?>  </td>
		    <td  class="w3-sma   ">  <?php echo $result['name']; ?>  </td>
		    <td  class="w3-sma   ">  <?php echo $result['phone']; ?>  </td>
		    <td  class="w3-sma   ">  <?php echo $result['email']; ?>  </td>
		    <td  class="w3-sma   ">  <?php echo $result['text']; ?>  </td>
		    
		    
		    <td> <a href="#" style="color: green;"><i class="fa fa-reply fa-2x" aria-hidden="true"></i> </a></td>
		    	<td> <a href="order_enquiry_delet.php?id=<?php echo $result['id']; ?> " style="color: red;" data-toggle="tooltip" data-placement="bottom" title="delete" onClick="return confirm('Are you sure you want to delete?');"><i class="fa fa-trash fa-2x" aria-hidden="true"></i></a></td>
		    	<td  class="w3-sma   ">  <?php echo $result['date']; ?>  </td>
		  

 
		</tr>
		 <?php
              # code...
            }
            ?>
	</tbody>
</table>

<hr>


<br>
<br><hr><hr>
  <div class="container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>

<?php } ?>
