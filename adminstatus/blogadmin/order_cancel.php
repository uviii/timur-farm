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
<br><br>
<p style="color:#F00; padding-top:20px; font-weight: bold;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
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

<hr><caption class="w3-border"><b style="color: red;"><span style="color: green;">Total Cancel Order:</span><?php 
	


            include("dbc.php");
            $query = "SELECT * FROM `order` where subtotal='3'  ";
            $querys = mysqli_query($conn , $query) or die("error");
            $num_row=mysqli_num_rows($querys);
            echo $num_row;
            ?></b> </caption>
<table class="w3-responsive w3-table-all w3-container">
	
	<tbody class="w3-display-stripe w3-display-border w3-hover- ">
		<tr class=" container" style="background-color: pink;">
			<th >s.n</th>
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
		
		<th>email</th>
		<th>phone</th>	
		<th>country</th>
		
		<th>district</th> 
		<th>munciPality</th>
		
		<th>warda</th>
		<th>local_ad</th>
		<th>local_ad1</th>
		<th>zipcode</th>
		<th>order_date    </th>
		<th>cancell_date    </th>
		<th colspan="" class="w3-center">status</th>
		</tr>

		<tbody class="w3-display-stripe w3-display-border w3-hover- ">
			
				<?php 

            include("dbc.php");


            $selectquery = "SELECT * FROM `order` WHERE subtotal='3' order by id desc";
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

			<td> <ol>
				<li>.</li>
			</ol> </td>
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
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['email']; ?>  </td>
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['phone']; ?>  </td>
			    <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['country']; ?>  </td>
			    
			      <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['district']; ?>  </td>
			       <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['city']; ?>  </td>
			        <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['tunit']; ?>  </td>
			        <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['local_ad']; ?>  </td>
			         <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['localaddress1']; ?>  </td>
			         <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['zipcode']; ?>  </td>
			         <td  class="w3-small w3-table-all w3-responsible  " style="color: red;">  <?php echo date('d_M_h:ma',$bt);?> </td>
			          <td  class="w3-small w3-table-all w3-responsible  ">  <?php echo $result['ddate']; ?>  </td>
			          <td style="color: green;"><a href="order_delet.php?id=<?php echo $result['id']; ?>"><?php echo $result['status']; ?><i class="fa fa-trash" style="font-size: 24px;"></i></a> </td>




		
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
















