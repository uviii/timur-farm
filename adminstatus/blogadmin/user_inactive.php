<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>

<?php include("header.php");?>

<?php include("link.php");?>
<br><br><br><div> <h2 class="w3-center" style="font-size: 30px; font-weight: bold;color: green;"><b> Inactive User details</b></h2></div>
<hr style="border-bottom: 2px dotted red;">
<br>

<hr>





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
		<th class="r">view_detail</th>
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
            $selectquery = "SELECT*FROM user  where status='inactive' ORDER BY id DESC ";
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
		<td><a href="user_detail.php?id=<?php echo $result['id']; ?>"><i class="fa fa-eye fa-2x"></i></a></td>
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
 <?php include('footer.php') ;?>

<?php } ?>


