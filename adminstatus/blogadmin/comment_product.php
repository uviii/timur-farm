


<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>




<?php include("header.php");?>

<?php include("link.php");?>
<br><div> <h2 class="w3-center container"><b style="font-size: 25px; color: green;"> Product Reviews Control Panel</b></h2></div>
<hr style="border-bottom: 2px dotted green;">
<br>





<div class="container"><style>.none li a{border: 2px solid black;padding: 8px; margin: 4px;}  </style>
	<table border="1" cellspacing="0" cellpadding="10"
style="text-align:center;">
		<tr>
			<th class="w3-hover-pink"><a href=""  onclick="window.print();"> <i class="fa fa-print"></i> print</a></th>
			<th class="w3-hover-pink"><a href=""><i class="fa fa-download"></i> ccv</a></th>
			<th class="w3-hover-pink"><button class="kkk w3-hover-pink" style="border:none;"><a href="#"> <i class="fa fa-eye"></i> all</a></button></th>

		</tr>
	</table>

</div>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
<hr>
<!-- 
<caption class="w3-border"><b style="color: orange; font-size: 20px;"> Order Details</b></caption><br> -->
<caption class="w3-border"><b style="color: red;"><span style="color: green;">Total Reviews:</span><?php 
	


            include("dbc.php");
            $query = "SELECT * FROM product_comment order by id desc  ";
            $querys = mysqli_query($conn , $query) or die("error");
            $num_row=mysqli_num_rows($querys);
            echo $num_row;
            ?></b> </caption>

<table class="w3-responsive w3-table-all w3-con container 2"  border="1" cellspacing="100" cellpadding="10"
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>
<!-- INSERT INTO `user`(`id`, `fname`, `lname`, `email`, `contactno`, `country`, `state`, `district`, `city`, `localaddress`, `password`, `cpassword`, `posting_date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13]) -->
	<tbody class="w3-display-stripe w3-display-border container w3-center " border="5" cellspacing="10">
		<tr class="w3-indigo container r ">
		<th class="r">s.n</th>
		<th class="r">username</th>
		<th class="r">email</th>
		<th class="r">product_name</th>
		<th class="r">comment</th>
		
		<th class="r">status</th>
		<th class="r">action</th>
		<th class="r">date</th>
		<!-- INSERT INTO `blog_categories`(`id`, `name`, `date`) VALUES ([value-1],[value-2],[value-3]) -->
		
		</tr>
<?php 


            include("dbc.php");
            $selectquery = "SELECT*FROM product_comment order by id desc ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php  

$b=$result['date'];
$n=strtotime("$b");
// echo $id;
?>
		<tr class="tr">
					   
    <td  class=""><?php echo $result['id']; ?></td>
				<td class="r"><?php echo $result['name']; ?> </td>
		<td class="r"><?php echo $result['email']; ?> </td>
		<td class="r"><?php echo $result['postname']; ?> </td>
		<td class="r"><?php echo $result['text']; ?> </td>
		
<td class="r w3-text-pink"><?php echo $result['status']; ?> </td> 
		
		
		     <td><a href="comment_product_approve.php?pid=<?php echo $result['id']; ?>"> <i class="fa fa-check fa-2x" style="color: green;"></i> </a></td>
		    	
		    	
		  <td class="r"><?php echo date('d_M_yy_h:ma',$n);?> </td>


 
		</tr>
		 <?php
              # code...
            }
            ?>
	</tbody>
</table>

<table class="w3-responsive w3-table-all w3-con container mmm"  border="1" cellspacing="100" cellpadding="10"
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>
<!-- INSERT INTO `user`(`id`, `fname`, `lname`, `email`, `contactno`, `country`, `state`, `district`, `city`, `localaddress`, `password`, `cpassword`, `posting_date`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13]) -->
	<tbody class="w3-display-stripe w3-display-border container w3-center " border="5" cellspacing="10">
		<tr class="bg-success container r ">
			<th class="r">s.n</th>
		<th class="r">username</th>
		<th class="r">email</th>
		<th class="r">product name</th>
		<th class="r">comment</th>
		<th class="r">date</th>
		<th class="r">status</th>
		<th class="r">action</th>
		<!-- INSERT INTO `blog_categories`(`id`, `name`, `date`) VALUES ([value-1],[value-2],[value-3]) -->
		
		</tr>

		<?php 


            include("dbc.php");
            $selectquery = "SELECT*FROM product_comment order by id asc  ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
		<tr class="tr">
			
		  
		   
    <td  class=""><?php echo $result['id']; ?></td>
				<td class="r"><?php echo $result['name']; ?> </td>
		<td class="r"><?php echo $result['email']; ?> </td>
		<td class="r"><?php echo $result['postname']; ?> </td>
		<td class="r"><?php echo $result['text']; ?> </td>
		<td class="r"><?php echo $result['date']; ?> </td>
<td class="r w3-text-pink"><?php echo $result['status']; ?> </td> 
		
		
		    
		    <td> <a href="#"> edit</a></td>
		    
		    	
		  


 
		</tr>
		 <?php
              # code...
            }
            ?>
	</tbody>
</table>

<script >
  $(document).ready(function(){
    $('.mmm').hide();
    $('.2').show();
    $('.kkk').click(function(){
      $('.mmm').toggle();
    $('.2').hide();
    $('.mmm').show();
      

  
      })
      

    });

</script> 
<hr>

<div class="w3-container"> <button style="border: none;"><a href=""><< previous</a></button>
<button class="w3-right" style="border: none;"><a href="">next >></a></button>
</div>
<br>
<br>


<hr>
<br>
<br><hr><hr>
 <?php include("footer.php"); ?>


<?php } ?>