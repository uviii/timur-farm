
<table class="" border="1" cellpadding="10" cellspacing="10" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>

<?php  include("./adminstatus/blogadmin/dbc.php");
session_start();
	// $_SESSION['piddd']
	// $ip=$_SESSION['piddd'];
 $id=$_GET['q'];
   
    if ($id==='b') {?>




		<?php 

           
            $selectquery = "SELECT*FROM `payments` where ifsc='$id'  ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
<table class="" border="1" cellpadding="10" cellspacing="10" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>
<tbody>

	<tr>
		<td>Account Holder</td>
		<td><?php echo $result['name']; ?></td>
	</tr>
		<tr>
		<td>Account No</td>
		<td><?php echo $result['account']; ?></td>
	</tr>
		<tr>
		<td>Bank Name</td>
		<td><?php echo $result['bname']; ?>,<?php echo $result['branch']; ?> </td>
	</tr>
		
</tbody>
</table>

<hr style="border-bottom: 2px dotted red;">
<div>
<input type="hidden" name="b" value="Bank">
	<input type="hidden" name="cas" value="Bank ">
<label style="font-weight: bold;color: red;">Upload Vauchar Photo:</label>  <input type="file"  name="file">
</div>
<br><br>
		 <?php
              # code...
            }
            
    }else{
    	 
    if ($id==='e') {?>






		<?php 

           
            $selectquery = "SELECT*FROM `payments` where ifsc='$id'  ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
<table class="" border="1" cellpadding="10" cellspacing="10" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>
<tbody>
	<tr>
		<td>Account Holder</td>
		<td><?php echo $result['name']; ?></td>
	</tr>
		<tr>
		<td>Account No</td>
		<td><?php echo $result['account']; ?></td>
	</tr>
		<tr>
		<td>Bank Name</td>
		<td><?php echo $result['bname']; ?>,<?php echo $result['branch']; ?> </td>
	</tr>
		
</tbody>
</table>
<hr style="border-bottom: 2px dotted red;">
<div>
<input type="hidden" name="b" value="Esewa">
	<input type="hidden" name="cas" value="Esewa ">
<label style="font-weight: bold;color: red;">Upload Esewa vaucher:</label> <input type="file" name="file">
</div>
<br><br>
		 <?php
              # code...
            }
            ?>
	


    <?php
    }
    if ($id==='k') {?>
		<?php 

           
            $selectquery = "SELECT*FROM `payments` where ifsc='$id'  ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
<table class="" border="1" cellpadding="10" cellspacing="10" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>
<tbody>
	<tr>
		<td>Account Holder</td>
		<td><?php echo $result['name']; ?></td>
	</tr>
		<tr>
		<td>Account No</td>
		<td><?php echo $result['account']; ?></td>
	</tr>
		<tr>
		<td>Bank Name</td>
		<td><?php echo $result['bname']; ?>,<?php echo $result['branch']; ?> </td>
	</tr>
		
</tbody>
</table>
<hr style="border-bottom: 2px dotted red;">
<div>
<input type="hidden" name="b" value="Khalti">
	<input type="hidden" name="cas" value="Khalti ">
<label style="font-weight: bold;color: red;">Upload Khalti vaucher:</label>  <input type="file"  name="file">
</div>
<br><br>


    <?php
    }
}
 if ($id==='i') {

           
            $selectquery = "SELECT*FROM `payments` where ifsc='$id'  ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
<table class="" border="1" cellpadding="10" cellspacing="10" 
style="text-align:center;">

	<style > tbody .r{text-align:center;} .tr td{text-align:center;}


</style>
<tbody>
	<tr>
		<td>Account Holder</td>
		<td><?php echo $result['name']; ?></td>
	</tr>
		<tr>
		<td>Account No</td>
		<td><?php echo $result['account']; ?></td>
	</tr>
		<tr>
		<td>Bank Name</td>
		<td><?php echo $result['bname']; ?>,<?php echo $result['branch']; ?> </td>
	</tr>
		
</tbody>
</table>
<hr style="border-bottom: 2px dotted red;">
<div>
<input type="hidden" name="b" value="IME">
	<input type="hidden" name="cas" value="Esewa ">
<label style="font-weight: bold;color: red;">Upload IME vaucher:</label>  <input type="file"  name="file">
</div>
<br><br>

		 <?php
              # code...
            }
            ?>


    



    	<?php
    }
    
    
      ?>

</table>

<?php
 if ($id==='cash') {

           
            // $selectquery = "SELECT*FROM `payments` where ifsc='$id'  ";
            // $query = mysqli_query($conn , $selectquery) or die("error");
           

        
              
?>


<div>
<input type="hidden" name="b" value="cas">
	<select class="form-control" name="cas" style="height: 6vh; color: green; font-weight: bold; font-size: 20px;">
	<option value="Cash on Delevery">Cash On Delevery</option>
</select></div><br><br>

		 


    



    	<?php
    }
    
    
      ?>


<?php
    }
    
    
      ?>

