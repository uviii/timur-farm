
<?php
require_once('Database/db_connect.php'); // Database connection file
// require_once('includes/functions.php');  // PHP functions file
?>
<?php

function getblogridposts($table){
	
	$sql="SELECT * FROM productadd WHERE  ORDER BY id DESC LIMIT 4";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}
      	//if there are rows available display all the results
		foreach ($result as $bloggrid => $griditem) {
      	# code...
			echo '<div class="col-md-6 blog-grid-top">
			<div class="b-grid-top">
			<div class="blog_info_left_grid">
			
			<img src="blogadmin/uplode/'.$griditem['photo1'].'" class="img-fluid" alt="fantastic cms" style="width:350px;height:250px">
			</a>
			</div>
			<h3>
			
			</h3>
			</div>
			
			</div>';
		}
	}

	mysqli_close($con);

}


?>

