


<br>
<h3 class="w3-center" style="font-size: 27px; color: green;">Order Detail</h3>
<hr style="border-bottom: 2px dashed green;"><br>
	<?php 
	session_start();
	error_reporting(0);

           include("./adminstatus/blogadmin/dbc.php");
$id=$_GET['q'];
     // echo $id;

            $selectquery = "SELECT * FROM `order` WHERE  status='Proceeding' AND cid=$id || id=$id  order by id desc ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
           $result= mysqli_fetch_array($query);

            $name=$result['cname'];
            // echo $name;
              
?>
<div><h3 style="font-size: 16px; color: orange;">Delever To:<span style="font-size: 14px; color: black;"><?php echo $name; ?>,</span><br>
<span style="font-size: 14px; color: green;">
      <span style="color: orange; font-size: 15px;">Add:</span> <?php echo $result['city']; ?>, <?php echo $result['local_ad']; ?>, <?php echo $result['district']; ?>, <?php echo $result['state']; ?>, <?php echo $result['zipcode']; ?>, <?php echo $result['country']; ?></span style="font-size: 20px;"></h3></div>
<br><br>
<center>
	
<table class=" w3-table-ll w3-responsive" border="0"  cellspacing="10" cellpadding="10">


<tr>
	<th>Heading</th>
	<th>Data</th>
</tr>
<?php 
	error_reporting(0);

           include("./adminstatus/blogadmin/dbc.php");
$id=$_GET['q'];
     // echo $id;


            $selectquery = "SELECT * FROM `order` WHERE  status='Proceeding' AND cid=$id or id=$id  order by id desc ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            
            while ($result= mysqli_fetch_array($query)) {
            
            $cid=$result['cid'];
            $name=$result['cname'];
            $pname=$result['pname'];
              $tax=$result['photo'];


            // echo $name;
              
?>



<?php
$price=$result['total'] ; 
$subtotal= $shiping+$price;
$total+=$price; 

 ?>
<tr>
		<td>Order id :</td>
		 <td  class=" ">  <?php echo $result['id']; ?>  </td>
	</tr>
	<tr>
		<td>Custumer id:</td>
		<td><?php echo $result['cid']; ?> </td>
	</tr>
	
	<tr>
		<td>Item name: </td>
		<td  class="w3-small    ">  <?php echo $result['pname']; ?>  </td>
	</tr>
	<tr>
		<td>Quantity:</td>
		<td  class=" ">  <?php echo $result['pquantity']; ?>.<?php echo $result['tax']; ?>  </td>
	</tr>
	<tr>
		<td>Price: </td>
		<td><?php echo $result['photo']; ?>.<?php echo $result['price']; ?></td>
	</tr>
	<tr>
		<td>Total</td>
		<td class=" "> <?php echo $result['photo']; ?>. <?php echo $result['total']; ?>  </td>
	</tr>
	<tr>
		<td>district:</td>
		 <td  class=" ">  <?php echo $result['district']; ?>  </td>
	</tr>
	<tr>
		<td>local add:<hr style="border-bottom: 2px dashed red;"></td>
		<td  class=" ">  <?php echo $result['cid']; ?> <hr style="border-bottom: 2px dashed red;"> </td>

	</tr>

	<?php }?>

</table>

</center>
<form method="POST" action="courier_update.php">
	<table border="1"><th style="width: 50%;">Total:</th><th style="width:50%;"><?php echo $tax; ?>.<?php echo $total; ?>|-</th></table>
<!-- <input type="text" style="width: 50%; "   value="<?php echo $tax; ?>.<?php echo $total; ?>|-"> -->
<br><br>
<input type="hidden" name="id" value="<?php echo $cid; ?>">
<input type="hidden" name="name" value="<?php echo $name; ?>">
<input type="hidden" name="pname" value="<?php echo $pname; ?>">
<input type="hidden" name="mobile" value="<?php echo $_SESSION['contactno']; ?>">
<input type="hidden" name="cboy" value="<?php echo $_SESSION['name']; ?>-<?php echo $_SESSION['lname']; ?>">
<input type="hidden" name="courier" value="<?php echo $_SESSION['zipcode'] ; ?>">
<input type="hidden" name="branch" value="<?php echo $_SESSION['localaddress1'] ; ?>">
<input type="hidden" name="did" value="<?php echo $_SESSION['id'] ; ?>">

<input type="hidden" name="ddate" value="<?php echo date('yy-D-M,h:sa'); ?>">


<div><button style="width: 40%; height: 6vh; font-weight: bold; font-size: 20px; background-color: pink; margin-right: 10%;" class="w3-round-large w3-hover-blue" type="submit" name="shiping" value="shiping">Handover</button><button style="width: 40%; height: 6vh; font-weight: bold; font-size: 20px; background-color: pink;" name="delet" type="delet" class="w3-round-large w3-hover-blue" >Cancell</button></div>

</form>

<div><h2></h2></div>
	


<hr>


<?php 
 include("./adminstatus/blogadmin/dbc.php");
// error_reporting(0);
if(isset($_POST['shiping']))
{
  $id=$_POST['id'];
 
  

$sql="UPDATE `order` SET  `status`='Handovered',`cboy`='$cboy',`mobile`='$mobile',`courier`='$courier',`branck`='$branck' WHERE cid='$id' and status='Proceeding'  ";
echo $sql;

$data = mysqli_query($conn ,$sql);
echo "$data";
if($data)
 {
  
   echo "<script>alert(' Conformation Successfully Updated. thank you for your support ');</script>";

  // header('location:order_checkout.php'); 
  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

 else {   
}
?>











