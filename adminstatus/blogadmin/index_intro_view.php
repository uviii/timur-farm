
<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>


<?php include("header.php");?>

<?php include("link.php");?>
<br><br>

<hr>
<div> <h2 class="w3-center"><b> blog_sub_categories_update_panel</b></h2></div>

<br><br>
<hr>

<div class="container"><style>.none li a{border: 2px solid black;padding: 8px; margin: 4px;}  </style>
	 <table border="1" cellspacing="0" cellpadding="10"
style="text-align:center;">
    <tr>
      <th class="w3-hover-pink"><a href="index_intro_add.php"> <i class="fa fa-plus"></i> add</a></th>
      <th class="w3-hover-pink"><a href=""  onclick="window.print();"> <i class="fa fa-print"></i> print</a></th>
      <th class="w3-hover-pink"><a href="#"> <i class="fa fa-download"></i>ccv</a></th>
      <th class="w3-hover-pink"><button class="kkk w3-hover-pink" style="border:none;"><a href="#"> <i class="fa fa-eye"></i> all</a></button></th>

    </tr>
  </table>
</div><br>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action'];?><?php echo $_SESSION['action']="";?></p>
<hr>

<table class="w3-responsible w3-table-all w3-con container" border="5px" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>
	
		<tr class="bg-success container r ">
		<th>id</th>
		<th>heading</th>
		<th>discription</th>
		
	
		<th colspan="2" class="r">opration</th>
	<!-- 	// INSERT INTO `blog_sub_cat`(`id`, `cat`, `subcat`, `date`) VALUES ([value-1],[value-2],[value-3],[value-4]) -->
		</tr>
<tbody class="w3-display-stripe w3-display-border container w3-center ">
		<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM `blog_sub_cat` ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
              
?>
		<tr class="tr">
			
		    <td  class="w3-sm ">  <?php echo $result['id']; ?>  </td>
		   
		    <td  class="w3-sma   ">  <?php echo $result['cat']; ?>  </td>
		       <td  class="w3-sma   ">  <?php echo $result['subcat']; ?>  </td>
		    
		   <td> <a href="index_intro_update.php?pid=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="edit" ><i class="fa fa-edit" aria-hidden="true"></i> edit</a></td>

		    	<td> <a href="index_intro_delete.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete" ><i class="fa fa-trash" aria-hidden="true"></i> delete</a></td>
		    	
		  

 
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
<br><hr><hr>
  <div class="container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>


<?php } ?>
