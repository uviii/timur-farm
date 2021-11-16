

<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>

<?php include("header.php");?>
<?php include("link.php");?>
<br><div> <h2 class="w3-center"><b style="font-size: 24px; color: green;"> Admin Profile Management Segment</b></h2></div>
<hr style="border-bottom: 2px dashed green;">
<br>

<hr>




	<table border="1" cellspacing="10" cellpadding="10"
style="text-align:cente;">
		<tr style="background-color:pink;">
			<th class="w3-hover-pink"><a href="user_add_new.php" > <i class="fa fa-plus"></i> New</a></th>
			<th class="w3-hover-pink"><a href=""  onclick="window.print();"> <i class="fa fa-print"></i> Print</a></th>
			<th class="w3-hover-pink"><a href=""><i class="fa fa-download"></i> ccv</a></th>
			<!-- <th class="w3-hover-pink"><button class="kkk w3-hover-pink" style="border:none;"><a href="#"> <i class="fa fa-eye"></i> All</a></button></th> -->

		</tr>
	</table>

	
<br>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
<hr>


<table class="w3-responsive w3-table-all w3-con container" border="5px" 
style="text-align:center; background-color: ">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>
<!-- INSERT INTO `user`(`id`, `fname`, `lname`, `email`, `contactno`, `country`, `state`, `district`, `city`, `localaddress`, `password`, `cpassword`, `posting_date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13]) -->
	
		<tr class=" container r " style="background-color: indigo; color: white;">
			<th class="r">id</th>
		<th class="r">Admin Name</th>
		<th class="r">Email</th>
		<th class="r">Mobile NO</th>
		<th class="r">Status</th>
		<th class="r">Joining since</th>
		
		
		<th colspan="3" class="r">action</th>
		<!-- INSERT INTO `blog_categories`(`id`, `name`, `date`) VALUES ([value-1],[value-2],[value-3]) -->
		
		</tr>
<tbody class="w3-display-stripe w3-display-border container w3-center ">
		<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM admin  limit 10 ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php $status=$result['status'];
 ?>
		<tr class="tr">
			
		
		    <td class="r"> <?php echo $result['id']; ?> </td>
				<td class="r"><?php echo $result['username']; ?> </td>
		<td class="r"><?php echo $result['email']; ?> </td>
		<td class="r"><?php echo $result['contactno']; ?> </td>
		<td class="r">
<?php if ($status<=0) {?>

<span style="font-weight: bold;color: red;">Inactive</span>
<?php
}else{

if ($status=='1') {?>
	<span style="font-weight: bold;color: green;">System Admin</span>
	<?php
}if ($status=='2') {
	?>
	<span style="font-weight: bold;color: indig;" class="w3-text-pink">Artical Manager</span>
	<?php
}if ($status=='3') {
	?>
	<span style="font-weight: bold;color: indigo;">Product Manager</span>
	<?php
}if ($status=='4') {
	?>
	<span style="font-weight: bold;color: orange;">Product & Artical Manager</span>
	<?php
}
	

} 

?>
		 </td>
		<td class="r"><?php echo $result['date']; ?> </td>
		
		
		    
		    <td> <a href="admin_profile_edit.php?id=<?php echo $result['id']; ?>"> <i class="fa fa-edit fa-2x"></i></a></td>
		    	<td> <a href="admin_delete.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete" onClick="return confirm('Are you sure you want to delete?');" ><i class="fa fa-trash fa-2x" style="color: red;" aria-hidden="true" ></i> </a></td>
		    	<td> <a href="activate.php?token=<?php echo $result['token']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete"  ><i class="fas fa-lock fa-2x" aria-hidden="true" ></i></a></td>
		    	
		  

 
		</tr>
		 <?php
              # code...
            }
            ?>
	</tbody>
</table>

<hr>

<!-- <div class="w3-container"> <button style="border: none;"><a href=""><< previous</a></button>
<button class="w3-right" style="border: none;"><a href="">next >></a></button>
</div> -->
<br>
<br>


<hr>
<br>
<br><hr><hr>
  <?php include('footer.php'); ?>
<?php } ?>