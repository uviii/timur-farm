
<?php 
 include("./adminstatus/blogadmin/dbc.php");
error_reporting(0);
session_start();
if(isset($_POST['shiping']))
{
  $cboy=$_POST['cboy'];
    $mobile=$_POST['mobile'];
      $courier=$_POST['courier'];
        $branch=$_POST['branch'];
          $id=$_POST['id'];
          $did=$_POST['did'];
           $ddate=$_POST['ddate'];
  $name=$_POST['name'];
  $pname=$_POST['pname'];
 
  

$sql="UPDATE `order` SET  `status`='Handovered',`cboy`='$cboy',`mobile`='$mobile',`courier`='$courier',`branch`='$branch',`did`='$did',`ddate`='$ddate' WHERE cid='$id' and status='Proceeding'  ";
// echo $sql;
$data = mysqli_query($conn ,$sql);
echo "$data";
if($data)
 {
 // echo $sql;
  $_SESSION['action1']=" Hi!, congratulation custumer $name .product name :$pname Handovered updated successfully. thank you being our parter @kupindetimur.com  ....";
 header('location:courier.php'); 
   

  
}

else{ echo "<script>alert('Something went wrong. Please try again.');</script>"; 
}

}

 else {   
}
?>



