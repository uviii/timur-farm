<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>



<?php include("header.php");?>
<?php include("dbc.php");?>
<?php include("link.php");?>






<br><div class="w3-oran">
<div class="w3-container">
	
 <h2 class="w3-center"><b>about_company.....  </b></h2>
<!-- 	<button class="none w3-right mb-5"> <a  href=""  onclick="window.print();">print</a></button> -->


<div class="row"> 

<div class="col-sm-12 ">

	<?php 

            include("dbc.php");
            $selectquery =  "SELECT*FROM  intro ORDER BY id DESC LIMIT 2 ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
              
?>
	


<div class="w3-blue w3-panel container-fluid" ><p class="w3-panel">introduction of company</p></div>


<div class="w3-center"> <p class="r"><b class="mr-3 w3-center"></b> <?php echo $result['title']; ?> </p></div>
<div class="w3-center"> <p class=""><b class="mr-3 w3-center"></b> <?php echo $result['content']; ?> </p></div>



 <?php
              # code...
            }
            ?>


	<br>
<hr>


<div>
	
		<div class="w3-blue w3-panel container-fluid" ><p class="w3-panel">your access permission</p></div>
		
			<tbody class=" w3-display-border container w3-center ">
				<tr>
					<th>id</th>
					<th>table</th>
					<th>view</th>
					<th>Add new</th>
					<th>edit</th>
					<th>delete</th>
				</tr>
				
			</tbody>
</div>

	
</div>
</sdiv></div>
<!-- INSERT INTO `admindetail`(`id`, `name`, `country`, `state`, `district`, `city`, `local_ad`, `phone`, `email`, `profession`, `level`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12]) -->


<div class="col-sm-12 bg-dangr">
	
<div>
	<?php 

            include("dbc.php");
            $selectquery =  "SELECT*FROM  intro  ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
              
?>
	

<form  action="introduct.php" method="POST"  enctype="multipart/form-data">
		<div class="w3-blue w3-panel container-fluid" ><p class="w3-panel">edit_introduction</p></div>
		<input type="hidden" value="<?php echo $result['id']; ?>" name="id">
	<label><b>Title:</b></label><input class="form-control" type="text" name="title" value=" <?php echo $result['title']; ?> ">

	<label> <b>content   :</b></label> <textarea  name="content" id="text" class=" ckeditor  w3-round-large form-control  pl-" cols="105" rows="3" placeholder="give detail introduction of you company"> <?php echo $result['content']; ?></textarea>

	
	<br>
	<input class="form-control w3-blue" type="submit" name="update" value="update">

 <?php
              # code...
            }
            ?>



	

	<!-- INSERT INTO `intro`(`id`, `title`, `content`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4]) -->
	</form>
	
</div>


</div>
 </div>

</div>

<hr>


<br>

<br><hr><hr>
  



<?php include("footer.php");?>





<?php } ?>

<?php 


// error_reporting(0);
if(isset($_POST['update'])){
 $id=$_POST['id'];
$title = $_POST['title'];
$content = $_POST['content'];
$sql=" UPDATE `intro` SET `title`='$title',`content`='$content' WHERE id='$id'  ";

// echo $sql;
$data = mysqli_query($conn ,$sql);

if($data)
 {
   echo "<script>alert('data inserted successfully.');</script>"; 
  
}

else{  echo "<script>alert('somthing wrong,please try again.');</script>"; 
}
// header('location:registration.php');
}

 
?>