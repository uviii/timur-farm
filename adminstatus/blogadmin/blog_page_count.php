<?php
include("dbc.php");
$sql="SELECT * FROM  blog_page_hit ORDER BY id";

if ($result=mysqli_query($conn,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("%d",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($conn);
?>