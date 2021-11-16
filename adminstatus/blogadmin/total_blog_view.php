<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>

<?php


include("dbc.php");

$sql="SELECT * FROM `visitor_info`  ORDER BY page";

if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo('$rowcount')
  // Free result set
  mysqli_free_result('$result');
  }

mysqli_close($conn);
?>



<div class="panel-heading text-center">LATEST PAGE VIEWS&nbsp;&nbsp;(TOTAL PAGES VIEWED:<?php require_once("total_blog_view.php"); ?>)</div><?php } ?>