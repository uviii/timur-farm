<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>
<?php include("header.php");?>
<?php include("link.php");?>

<br><div class="w3-orang">
<div class="container">
	
 <h2 class="w3-center"><b>admin-1: bog status  </b></h2>
	<button class="none w3-right mb-5"> <a  href=""  onclick="window.print();">print</a></button>





	
</div>


<br>

<hr>


<div class="w3-panel bg-success container"><p >TOTAL NUMBERS OF UNIQUE VISITOR:.....</p> </div>

</div>


<div class="w3-panel bg-info container">
	<p class="w3-panel" >HIGHEST PAGE VIEWS:
		<?php include("dbc.php");
$result = "SELECT MAX(count) AS 'max_page' FROM  blog_page_hit ";
$q = mysqli_query($conn , $result) or die("error");

$data=mysqli_fetch_array($q);

$totalcnt = mysqli_num_rows($q);

echo "highest page viewed :".$data['max_page'];
?>

 </div>


<hr>

<div class="w3-panel bg-primary container"><p class="w3-panel w3-center" >latest total page views (<?php 

            include("dbc.php");
            $selectquery = "SELECT  id, SUM(count)  FROM `BLOG_page_hit` ORDER BY count ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            
// $query=mysqli_query($con,"SELECT*FROM blogs");
$totalcnt = mysqli_num_rows($query);

while( $result = mysqli_fetch_assoc($query)){
	echo " ". $result['SUM(count)'];
	echo " )";
}
?>
<strong class="w3-center">from:<?php include("blog_page_count.php"); ?> page</strong>
	

</p> </div>

<table class="w3-responsible w3-table-all w3-con container" border="5px" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>
<tbody class="w3-display-stripe w3-display-border container w3-center ">
		<tr class="bg-success container r ">
			<th class="r">id</th>
		<th class="r">PRODUCT NAME</th>
		<th  class="r">NOMBER OF VIEWES</th>
		
		</tr>

		 <?php 

            include("dbc.php");
            $selectquery = "SELECT * FROM `blog_page_hit` ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);

            
// $query=mysqli_query($con,"SELECT*FROM blogs");
$totalcnt = mysqli_num_rows($query);
if ($totalcnt > 0) {
while ($result=mysqli_fetch_array($query)) {

            // while ($result= mysqli_fetch_array($query)) {
              
?>

		<tr class="tr">
			
 <td  class="w3-smal  ">  <?php echo $result['pid']; ?>  </td>
             <td  class="w3-small   ">  <?php echo $result['page']; ?>  </td>
              <td  class="w3-small w3-responsible  ">  <?php echo $result['count']; ?>  </td>


		   
 
		</tr>


 <?php
              # code...
            }}
            else { ?> 
 
<tr>
<td  colspan="4"> No Record Found</td>
</tr>   
<?php } ?>
	</tbody>
</table>



<hr>

<br>
<br>

<hr>


<br>

<br><div class="w3-gray">
<div class="container">
	
 <h2 class="w3-center"><b>admin-2: product status  </b></h2>
	





	
</div>


	

</p></div>

<hr>



<div class="w3-panel bg-success container"><p >TOTAL NUMBERS OF UNIQUE VISITOR:....</p> </div>

<div class="w3-panel bg-info container"><p class="w3-panel" >higest product views: <?php 

            include("dbc.php");

 
$result = "SELECT MAX(count) AS max_page FROM page_hits ORDER BY id ";
$q = mysqli_query($conn , $result) or die("error");



$totalcnt = mysqli_num_rows($q);

while( $re = mysqli_fetch_assoc($q)){
	 echo $re["max_page"];
	

	
	echo " )<br />";
}
?></p>

 </div>


<hr>

<div class="w3-panel bg-primary container">


	<p class="w3-panel w3-center" >latest product status (total product viewed: <?php 

            include("dbc.php");
            $selectquery = "SELECT  id, SUM(count)  FROM `page_hits` ORDER BY count ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            
// $query=mysqli_query($con,"SELECT*FROM blogs");
$totalcnt = mysqli_num_rows($query);

while( $result = mysqli_fetch_assoc($query)){
	echo " ". $result['SUM(count)'];
	echo " )<br />";
}
?></p> </div>
<table class="w3-responsible w3-table-all w3-con container" border="5px" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>





	<tbody class="w3-display-stripe w3-display-border container w3-center ">
		<tr class="bg-success container r ">
			<th class="r">id</th>
		<th class="r">PRODUCT NAME</th>
		<th  class="r">NOMBER OF VIEWES</th>
		
		</tr>

		 <?php 

            include("dbc.php");
            $selectquery = "SELECT * FROM `page_hits` ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);

            
// $query=mysqli_query($con,"SELECT*FROM blogs");
$totalcnt = mysqli_num_rows($query);
if ($totalcnt > 0) {
while ($result=mysqli_fetch_array($query)) {

            // while ($result= mysqli_fetch_array($query)) {
              
?>

		<tr class="tr">
			
 <td  class="w3-smal  ">  <?php echo $result['pid']; ?>  </td>
             <td  class="w3-small   ">  <?php echo $result['page']; ?>  </td>
              <td  class="w3-small w3-responsible  ">  <?php echo $result['count']; ?>  </td>


		   
 
		</tr>


 <?php
              # code...
            }}
            else { ?> 
 
<tr>
<td  colspan="4"> No Record Found</td>
</tr>   
<?php } ?>
	</tbody>
</table>

<hr>



<hr>



<div class="w3-panel bg-primary container"><p class="w3-panel" >latest visitor detali (unique visitor:)</p> </div>
<table class="w3-responsible w3-table-all w3-con container" border="5px" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>
	<tbody class="w3-display-stripe w3-display-border container w3-center ">
		<tr class="bg-success container r ">
			<th class="r">id</th>
			<th class="r">ip address</th>
		<th class="r">USER AGENTS</th>
		<th  class="r">TIME ACCESSED</th>
		
		</tr>


		 <?php 

            include("dbc.php");
            $selectquery = "SELECT * FROM `visitor_info` LIMIT 10";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);

            
// $query=mysqli_query($con,"SELECT*FROM blogs");
$totalcnt = mysqli_num_rows($query);
if ($totalcnt > 0) {
while ($result=mysqli_fetch_array($query)) {

            // while ($result= mysqli_fetch_array($query)) {
              
?>

		<tr class="tr">
			<!-- INSERT INTO `visitor_info`(`id`, `ip_address`, `user_agent`, `time_accessed`) VALUES ([value-1],[value-2],[value-3],[value-4]) -->

 <td  class="w3-smal  ">  <?php echo $result['id']; ?>  </td>
             <td  class="w3-small   ">  <?php echo $result['ip_address']; ?>  </td>
              <td  class="w3-small   ">  <?php echo $result['user_agent']; ?>  </td>
              <td  class="w3-small w3-responsible  ">  <?php echo $result['time_accessed']; ?>  </td>


			
 
		</tr>

 <?php
              # code...
            }}
            else { ?> 
 
<tr>
<td  colspan="4"> No Record Found</td>
</tr>   
<?php } ?>
            
 
 
	</tbody>
</table>

<hr>

<div class="w3-container"> <button style="border: none;"><a href=""><< previous</a></button>
<button class="w3-right" style="border: none;"><a href="">next >></a></button>
</div></div>
<br>

<br><hr><hr>
  <div class="container  w3-center w3-opacity w3-black">
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>
<?php } ?>