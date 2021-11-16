



<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>



<?php include("header.php");?>
<div class=" container"><button class="w3-left"><a  href="blog_view_index.php">back_index_file</a></button></div>

<?php include("link.php");?>
<hr>
<br><div> <h2 class="w3-center"><b>gallery managment segment</b></h2></div>
<hr>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
<br>





<div class="container"><style>.none li a{border: 2px solid black;padding: 8px; margin: 4px;}  </style>

	 <table border="1" cellspacing="0" cellpadding="10"
style="text-align:center;">
    <tr>
      <th class="w3-hover-pink"><a href="gallery_ad.php"> <i class="fa fa-plus"></i> add</a></th>
      <th class="w3-hover-pink"><a href="#"  onclick="window.print();"> <i class="fa fa-print"></i> print</a></th>
      <th class="w3-hover-pink"><a href="#"> <i class="fa fa-download"></i>ccv</a></th>
      <th class="w3-hover-pink"><button class="kkk w3-hover-pink" style="border:none;"><a href="#"> <i class="fa fa-eye"></i> all</a></button></th>

    </tr>
  </table>
</div><br>

<hr>


<table class="w3-responsible w3-table-all w3-con container" border="5px" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>
	
		<tr class="bg-success container r ">
			<th class="r">id</th>
		<th class="r"> discription</th>
		<th class="r"> photo</th>
		<th class="r"> date</th>
		
		<th colspan="2" class="r">action</th>


		</tr>
<tbody class="w3-display-stripe w3-display-border container w3-center ">
		<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM gallery limit 10 ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
              
?>

		<tr class="tr">
			
		    <td  class="w3-sm ">  <?php echo $result['id']; ?>  </td>
		    <td  class="w3-sma   ">  <?php echo $result['content']; ?>  </td>
		    <td  class="w3-small "> <img src=" <?php echo $result['photo']; ?>" height="80" width="auto">   </td>
		    <td  class="w3-sma   ">  <?php echo $result['date']; ?>  </td>
		   
		    
		    <td> <a href="gallery_update.php?gid=<?php echo $result['id']; ?> "><i class="fa fa-edit fa-2x" style="color: green;" aria-hidden="true"></i> </a></td>
		    	<td> <a href="delete_gallery.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete" ><i class="fa fa-trash fa-2x" aria-hidden="true " style="color: red;"></i> </a></td>
		    	
		  

 
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
 <?php include("footer.php"); ?>
<?php } ?>
