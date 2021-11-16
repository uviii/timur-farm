


<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>




<?php include("header.php");?>
<div class=" container"><button class="w3-left" style="border: transparent;"><a  href="blog_view_index.php"><i class="fa fa-home"></i> back_index_file</a></button></div>

<hr>

<?php include("link.php");?>
<br><div> <h2 class="w3-center container"><b style="font-size: 25px; color: green;">  Artical Reviewed By Public</b></h2></div>
<hr style="border-bottom: 2px dotted green;">
<br>





<div class="container"><style>.none li a{border: 2px solid black;padding: 8px; margin: 4px;}  </style>
	
	<ul class="none" style="list-style: none; display: flex;">

<li> <a href=""  onclick="window.print();">print</a>
</li>

<li><a href="">save_ccv</a></li>
<li><a href="">filter</a></li>
<li><button class="kkk" style="background:transparent; border: none;"><a href="#">show_all</a></button></li>


	</ul>
</div><br>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
<hr>
 <caption class="w3-border"><b style="color: red;"><span style="color: green;">Total Reviewes:</span><?php 
  


            include("dbc.php");
            $query = "SELECT * FROM comment_ad ";
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
		<tr class="bg-success container r ">
			<th class="r">id</th>
		<th class="r">username</th>
		<th class="r">useremail_ID.</th>
		<!-- <th class="r">userphone_no.</th> -->
		<th class="r">comment</th>
		<th class="r">titl_of_post</th>
		

		<th colspan="2" class="r">action</th>
		<th class="r">status</th>
		<th class="r">Review_date</th>
		<!-- INSERT INTO `blog_categories`(`id`, `name`, `date`) VALUES ([value-1],[value-2],[value-3]) -->
		
		</tr>

		<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM comment_ad ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
	<?php  

$b=$result['date'];
$n=strtotime("$b");
// echo $id;
?>
		<tr class="tr">
			
		  
		   
    <td  class="">  <?php echo $result['id']; ?>  </td>
				<td class="r"><?php echo $result['name']; ?> </td>
		<td class="r"><?php echo $result['email']; ?> </td>
		<!-- <td class="r"><?php echo $result['phone']; ?> </td> -->
		<td class="r"><?php echo $result['text']; ?> </td>
		<td class="r"><?php echo $result['title']; ?> </td>
		<td><a href="comment_aprove.php?pid=<?php echo $result['id']; ?>"><i class="fa fa-check fa-2x" style="color: green;"></i></a></td>
		    	<td> <a href="comment_by user_delet.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete" ><i class="fa fa-trash fa-2x" style="color: red;" aria-hidden="true"></i> </a></td>
		    	<td class="r w3-text-red"><?php echo $result['status']; ?> </td>
		    	<td class="r"><?php echo date('d_M_yy_h:ma',$n);?> </td>
		  


 
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