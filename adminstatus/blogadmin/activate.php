


<!DOCTYPE html>
<html>
<head>
  <title></title>
<?php include("link.php");?>
</head>
<body>
<br>
<hr>

<body>
  <style > body{background-image:url(./uploade/flower.jpg);
 background-size:cover;
 background-position:center;
 box-sizing:border-box;
 } </style>
  <br><br><br><br><br><br><br>



  <div class="row"> 
    <div class="col-sm-4 bg-dange container"></div>
     <div class="col-sm-4 bg-succes w3-container">
      <div id="login-page w3-container " class="">
      <div class="container w3-border w3-round-xlarge w3-container w3-blue ">
       <div class="bg-primary container w3-round-large w3-panel p-2 mt-0 mr-0 ml-0"> 
        <h2 class="form-login-heading  w3-center ">retrive your password</h2></div>

         <?php 
session_start();
           include("dbc.php");
           $token=$_GET['token'];
          

            $selectquery = "SELECT*FROM admin  WHERE token='$token' ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
//<!-- <?php echo htmlentities($_SERVER['PHP_SELF']);  -->
            while ($result= mysqli_fetch_array($query)) {
              
              
?>
         <form class="form-login w3-container  w3-round-large" action="retrive.php" method="post">
          
            <div class="login-wrap">
                   <input type="hidden" name="x" value="<?php echo($token); ?>">
                 <input type="email" name="email" value="<?php echo htmlentities($result['email'])?>" class="form-control" ><br >
                 <input type="password" name="newpassword" class="form-control" placeholder="create new Password"><br >
                <input type="password" name="cpassword" class="form-control" placeholder="comform Password"><br >
                <input  name="submit" class="btn btn-theme btn-block bg-primary" type="submit" value="register">
                <br>
              
             
            </div>
          </form> <br>

        <?php
              # code...
            }
            ?>
             <br>    
      
      </div>
    </div>

    <br><br><hr>

    </div>

    <div class="col-sm-4">d</div>
  </div>

<script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>

</body>
</html>





