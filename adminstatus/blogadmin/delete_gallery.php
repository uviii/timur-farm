<?php
session_start();
$id= $_GET['id'];
$deletequery = "DELETE FROM `gallery` where id=$id";
$query= mysqli_query($conn,$deletequery);



if ($query) {


 $_SESSION['action1']=" your account of $bname,$branch, Nepal updated successfully ....";


 header('location:gallery_manage.php');
}
else{
  ?>
  <script>alert("sorry delete fail</script>
  <?php
}


?>