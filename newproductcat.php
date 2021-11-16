<!DOCTYPE html>
<html>
<head>
	<title>timur farm</title>


<?php include("link.php");?><br><br>
 



<link rel="shortcut icon" href="./p.image/logo.png" type="image/x-icon" />
</head>


<body>


<?php include("header.php");?>
<?php include("mobile_nav.php");?>



	<br>

<?php 
// include("slide.php");
?>


<br><br><br>




<?php include("latestproduct.php");?>

<?php include("latestnews.php");?>

<br>



<?php include("contact.php");?>
<br>




			 <?php 

//             include("database/db_connect.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "con";

$conn = mysqli_connect($servername , $username , $password ,$dbname);

if ($conn) {
	echo "conetion ok";
	# code...
}else{echo "conection failed" .mysqli_connect_error();

}
?> <?php
            $selectquery = "SELECT*FROM  productadd  order by id ASC LIMIT 1";
            $query = mysqli_query($conn , $selectquery) or die("error");
          
            $num = mysqli_num_rows($query);
            echo "$num";
            if ($num>0) {
                # code...
            
            while ($result= mysqli_fetch_array($query)) {
//             	$id=$result['id'];
            	// $name= $result['name'];
            	// $weight=$result['weight'];
//             	$price1= $result['price1'];
//             	$price2=$result['price2'];
//             	$tag= $result['tag'];
//             	$intro= $result['intro'];
//             	$keyword= $result['keyword'];
//             	$benefit= $result['benefit'];
//             	$ingredient= $result['ingredient'];
//             	$use=$result['use'];
//             	$info= $result['info'];
//             	$avail= $result['avail'];
            	// $photo1= $result['photo1'];
//             	$sold_by= $result['sold_by'];
//             	$categories= $result['categories'];
//             	 $status =$result['status'];
             
            ?>

            <div class="container">

<div class="row ">
    <div class="col-sm-3 bg-success">
        <form>

                           <div> <h4> <?php echo $result['name']; ?></h4> </div>
                           <div> <img src="<?php echo $result['photo1']; ?>" alt="photo1" >    </a></div>
                        </div>
                        </form>

                       
                       
    <div class="col-sm-3 bg-danger"><div> <h4> <?php echo $result['name']; ?></h4></div></div>
    <div class="col-sm-3 bg-primary"><div> <img src="<?php echo $result['photo1']; ?>" alt="photo1" >    </a>
     <h4> <?php echo $result['name']; ?></h4></div></div>
    <div class="col-sm-3 bg-primary"><div> <img src="<?php echo $result['photo1']; ?>" alt="photo1" >    </a></div></div>





             
<?php
        }
    }




  




	?>	
	<br>


<?php include("footer.php");?>