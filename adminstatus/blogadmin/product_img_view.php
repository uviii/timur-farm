<?php
session_start();
error_reporting(0);
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>
<?php include("header.php");?>

<?php include("link.php");?>
<br><br>
<div class="w3-left w3-container ml-3"><h5><a href="product_index.php"> <i class="fa fa-home"></i> go to front page</a></h5></div>
<br>
<br><div> <h2 class="w3-center container"><b class="w3-text-orange"> Product gallery  control panel</b></h2></div>
<hr>
<br>

<hr>



<div class="container"><style>.none li a{border: 2px solid black;padding: 8px; margin: 4px;}  </style>
	
	<ul class="none" style="list-style: none; display: flex;">
<li><a href="product_img_add.php"><i class="fa fa-plus"></i>new</a></li>
<li> <a href=""  onclick="window.print();"><i class="fa fa-print"></i>print</a>
</li>
<li><a href="product_qty_csv.php"><i class="fa fa-download"></i> ccv</a></li>

<li><a href=""><i class="fa fa-eye"></i>all</a></li>


	</ul>
</div><br>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
<hr>
<table border="1" cellspacing="0" cellpadding="10"
style="text-align:center;" class="w3-responsive w3-table-all  container">

<!-- <table class="w3-responsive w3-table-all  container" border="5" 
style="text-align:center;"> -->

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>
<tr class="bg-success  r ">
			<th class="r">Id</th>
		<th class="r">PId</th>
		<th class="r">Product name</th>
		<th class="r">Image name</th>
		<th class="r">Intro</th>
		<th class="r">File</th>
		<th class="r">File type</th>
		<th colspan="3" class="r">Action</th>
		<th class="r">Date</th>
		</tr>
<tbody class="  w3-center ">
		<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM  `product_img`order by id desc ";
            $query = mysqli_query($conn , $selectquery) or die("error");
          
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
		<?php  

$b=$result['date'];
$n=strtotime("$b");
// echo $id;
$type=$result['type'];
?><tr class="tr">
			
		  <!-- $sql="INSERT INTO `product_qty`(`pid`, `pname`, `pqty`, `unit`, `price`, `offer`, `avail`,`status`)VALUES ('$pid','$pname','$pqty','$unit','$price','$offer','$avail','0')"; -->
		    <td class="r"> <?php echo $result['id']; ?> </td>
		     <td class="r"> <?php echo $result['pid']; ?> </td>
				<td class="r"><?php echo $result['pname']; ?> </td>
		<td class="r"><?php echo $result['iname']; ?> </td>
		<td class="r"><?php echo $result['intro']; ?> </td>
		<td class="r"><img src=" <?php echo $result['file']; ?>" height="30" width="auto">  </td>
		<td class="r"> <?php if ($type=='0') {?>

<span style="font-weight: bold;color: red;">Youtube Vedio</span>
<?php
}else{

if ($type=='1') {?>
  <span style="font-weight: bold;color: green;">Image</span>
  <?php
}if ($type=='2') {
  ?>
  <span style="font-weight: bold;color: indig;" class="w3-text-pink">Vedio</span>
  <?php
}
}
  



?> </td>
		 <td> <a href="product_img_edit.php?pid=<?php echo $result['id']; ?>"><i class="fa fa-edit fa-2x" style="color: green;"></i></a></td>
		 <td> <a href="product_img_delet.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete" onClick="return confirm('Are you sure you want to delete?');" ><i class="fa fa-trash fa-2x" style="color: red;" aria-hidden="true"></i> </a></td>
		 <td> <a href="product_img_show.php?pid=<?php echo $result['pid']; ?>"><i class="fa fa-eye fa-2x" style="color: orange;"></i></a></td>
		  <td class="r"><?php echo date('M-yy',$n);?>  </td>
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
  
  	<div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>



<!-- The Modal -->
<div class="modal" id="qtyshow">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">product id selection guide</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <ol>
         <li>frist select product name</li>
          <li>just starting line of product name there is some number</li>
           <li>that number is eg.<span class="w3-text-red">(123)</span><span class="w3-text-blue">salyani besar</span>,<span class="w3-text-red">(454)</span><span class="w3-text-blue">timur xup</span></li>
            <li>this number <span class="w3-text-red">123</span>,<span class="w3-text-red">123</span>indicate product Id</li>
            <li>copy that number and paste into product id section</li><br>
            <p class="w3-text-red"> dont choose wrong product id </p>
       </ol>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>


<?php } ?>