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


<table class="w3-responsive w3-table-all w3-con container" border="5px" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>
<!-- INSERT INTO `user`(`id`, `fname`, `lname`, `email`, `contactno`, `country`, `state`, `district`, `city`, `localaddress`, `password`, `cpassword`, `posting_date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13]) -->
	
		<tr class="bg-success container r ">
			<th class="r">id</th>
		<th class="r">fname</th>
		<th class="r">lname</th>
		<th class="r">email</th>
		<th class="r">contno</th>
		<th class="r">country</th>
		<th class="r">state</th>
		<th class="r">district</th>
		<th class="r">city</th>
		<th class="r">local_ad</th>
		<th class="r">date</th>
		
		<!-- <th colspan="2" class="r">opration</th> -->
		<!-- INSERT INTO `blog_categories`(`id`, `name`, `date`) VALUES ([value-1],[value-2],[value-3]) -->
		
		</tr>
<tbody class="w3-display-stripe w3-display-border container w3-center ">
		<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM user where status='inactive' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
		<tr class="tr">
			
		   <!--  <td  class="w3-sm ">  <?php echo $result['id']; ?>  </td>
		    <td  class="w3-sma   ">  <?php echo $result['fname']; ?>  </td> -->
		    <td class="r"> <?php echo $result['id']; ?> </td>
				<td class="r"><?php echo $result['fname']; ?> </td>
		<td class="r"><?php echo $result['lname']; ?> </td>
		<td class="r"><?php echo $result['email']; ?> </td>
		<td class="r"><?php echo $result['contactno']; ?> </td>
		<td class="r"><?php echo $result['country']; ?> </td>
		<td class="r"><?php echo $result['state']; ?> </td>
		<td class="r"><?php echo $result['district']; ?> </td>
		<td class="r"><?php echo $result['city']; ?> </td>
		<td class="r"><?php echo $result['localaddress']; ?> </td>
		<td class="r"><?php echo $result['posting_date']; ?> </td>
		
<!-- 		    
		    <td> <a href="user_update_text.php?id=<?php echo $result['id']; ?>"> edit</a></td>
		    	<td> <a href="delete.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete" ><i class="fa fa-trash" aria-hidden="true"></i> delete</a></td> -->
		    	
		  

 
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
  
  	<div class="copyright container">Copyright ?? 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>

<?php } ?>