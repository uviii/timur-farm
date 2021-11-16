<div>
  
  
<style>


.containe {
  border: px solid #dedede;
  background-color: #f1f1f1;
  border-radius: px;
  padding: 10px;
  margin: 10px 0;
}


.containe::after {
  content: "";
  clear: both;
  display: table;
}

.containe .x {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  
}


.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.sun{ font-size: 10px; font-weight: bold; margin-right: 4px; }


/*section heading*/
.section-heading {
    width: 100%;
}

.h4 a{color: white;
background-color: black;}

</style>


<!-- INSERT INTO `comment_ad`(`id`, `name`, `email`, `phone`, `title`, `text`, `date`, `status`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8]) -->
<h4 class="section-headin w3-center  w3-text-orange" style="border-bottom: 4px solid black"> <strong ><b class="w3-center w3-text-orange">This post have<span class="w3-text-blue"> <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $query = "SELECT*FROM  comment_ad WHERE pid='$pid' " ;
            $querys = mysqli_query($conn , $query) or die("error");
            $num_row=mysqli_num_rows($querys);
            echo $num_row;
            ?></span>

            review </b></strong></h4>
<hr>


<?php 

            include("./adminstatus/blogadmin/dbc.php");
            $pid=$_GET['id'];

            $selectquery = "SELECT*FROM  comment_ad WHERE pid='$pid' ORDER BY id DESC";
            $query = mysqli_query($conn , $selectquery) or die("error");
         
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php

echo '


<div class="containe ">
  <a href="C:\Users\hp\Desktop\timur farm\subblog.html"><img class="x" src="./images/flower.jpg" alt="Avatar" style="width:100%;">

  </a><div class="container">
  <a href="C:\Users\hp\Desktop\timur farm\subblog.html"><h3>'.$result['name'].'</h3> </a><br>
<span class="time-righ"><span class="sun" style="color: green;">'.$result['date'].' ||</span><i class="fa fa-tag"></i> <!-- Button to Open the Modal -->
<button type="button" class="btn " data-toggle="modal" data-target="#mModal">
<i class="fa fa-reply w3-text-blue" aria-hidden="true"></i>
</button></span><br>

 <br><p class="w3-center"> '.$result['text'].' </p>
 
</div>

</div>';


  ?>
       
         <?php
              # code...
            }
            ?>

</div>

