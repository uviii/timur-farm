 


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
           $ids=$_GET['id'];

             include("dbc.php");
            $selectquery = "SELECT*FROM admin WHERE id='$ids'";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
              
?>
         <form class="form-login w3-container  w3-round-large" action="password_retrive.php" method="post">
          
            <div class="login-wrap">
              <p style="color:#F00; padding-top:20px;" align="center"><?php echo htmlentities($result['email'])?></p>
                   <input type="hidden" name="x" value="<?php echo($ids); ?>">
                 <input type="password" name="oldpassword" class="form-control" placeholder="enter your previous password"><br >
                  <input type="password" name="newpassword" class="form-control" placeholder="create new Password"><br >
                <input type="password" name="password" class="form-control" placeholder="comform Password"><br >
                <input  name="submit" class="btn btn-theme btn-block bg-primary w3-hover-red" type="submit" value="submit">
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

    <div class="col-sm-4"></div>
  </div>

<script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>

</body>
</html>










