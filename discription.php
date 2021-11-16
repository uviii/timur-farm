


    <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $id=$_GET['id'];
            $selectquery = "SELECT*FROM productadd WHERE id =$id";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php $photo=$result['photo1']; 
$weight=$result['weight'];?>




<div class="">

       
          <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 pro1 ">
                                
         <!-- product_qty -->

<div class="m-3">
<h4 class="w3-left ml-3 w3-text-blue "><b>Product detail <i class="Fa fa-angle-down "></i></b></h4><br><br>
<button class="collapsible"> Techqnical product detail</button>
<div class="content container">
  <div class="">
    <br><table class="w3-rose w3-responsive w3-table-stripe w3-tabale-all" border="1" cellpadding="10" cellspacing="0">
     
       <tr>
        <td class="    " style="width:40%;"><b  class="w3-text-green">produced by:</b></td>
        <td class=" w3-center"><span class=" ml-3 w3-text-blue"> <?php echo $result['sold_by']; ?></span></td>
      </tr>
        <tr>
        <td class="   "><span><b class="w3-text-green">avaiable  weight:</b></span></td>

        
        <td class="ligh w3-center"><span class=" ml-3 w3-text-blue"> 
           <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $id=$_GET['id'];
            $selectqueryy = "SELECT*FROM product_qty WHERE pid =$id";
            $queryy = mysqli_query($conn , $selectqueryy) or die("error");
           
            while ($resultt= mysqli_fetch_array($queryy)) {
              
?>

          <?php echo $resultt['pqty'].$resultt['unit'];  ?>,
       
         <?php
              # code...
            }
            ?><?php echo $weight;  ?>
          </span></td>
      </tr>
      <tr>
        <td class="   "><b class="w3-text-green"> packaging type:</b></td>
        <td class=" w3-center"><span class=" ml-3 w3-text-blue"> <?php echo $result['origin']; ?></span></td>
      </tr>
      <tr>
        <td class="   "><b class="w3-text-green">Location:</b></td>
        <td class=" w3-center"><span class=" ml-3 w3-text-blue"><?php echo $result['packaging']; ?> </span></td>
      </tr>
      <tr>
        <td class="   "><b class="w3-text-green">Product Code:</b></td>
        <td class=" w3-center"><span class=" ml-3 w3-text-blue"><?php echo $result['code']; ?></span></td>
      </tr>
      <tr>
        <td class="   "><b class="w3-text-green">Is it imported:</b></td>
        <td class=" w3-center"><span class=" ml-3 w3-text-blue"><?php echo $result['imported']; ?></span></td>
      </tr>
      <tr>
        <td class="   "><b class="w3-text-green">Is it organic:</b></td>
        <td class=" w3-center"><span class=" ml-3 w3-text-blue"><?php echo $result['organic']; ?></span></td>
      </tr>
      <tr>
        <td class="   "><b class="w3-text-green">Avaiablity:</b></td>
        <td class=" w3-center"><span class=" ml-3 w3-text-blue"><?php echo $result['avail']; ?></span></td>
      </tr>

      

      
      
    </table>
    <br></div>
</div>
<button class="collapsible">Product discription</button>
<div class="content">
  <p><?php echo $result['intro']; ?></p>
</div>
<button class="collapsible">Additional infromation</button>
<div class="content">

  <div><?php echo $result['benefit']; ?></div><br>


</div>
<button class="collapsible">Ingradient</button>
<div class="content">
  <div><?php echo $result['Ingradient']; ?></div>

 
</div>


                  
       
         <?php
              # code...
            }
            ?>
<button class="collapsible">Product Gallery</button>
<div class="content"><br>
<div> <h3><b class="w3-text-orange">product gallery</b></h3></div><hr>
 




<div class="w3-row"><br>
   <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $id=$_GET['id'];
            $selectquery = "SELECT*FROM product_img WHERE pid =$id  AND type='1'";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>




<div class="w3-quarter w3-boder col-md-4 col-sm-4 col-12 col-lg-3">
  <div class="w3-border">

  <?php 
echo '<div class="w3-center"> <a href="./adminstatus/blogadmin/'.$result['file'].'"><img src="./adminstatus/blogadmin/'.$result['file'].'" class="img-fluid" alt="'.$result['pname'].'" style="width:295px;height:250px" target="blank"></a>  </div>';
?>

  <p><b><?php echo $result['intro']; ?></b> </p></div>

</div>
<?php
              # code...
            }
            ?>





</div>
<div class="w3-row"><br>
   <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $id=$_GET['id'];
            $selectquery = "SELECT*FROM product_img WHERE pid =$id AND type='0'";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>




<div class="w3-quarter w3-bode col-md-4 col-sm-4 col-12 col-lg-3">
  <div class="w3-borer">
<?php 

echo '
<div class="w3-center"> 

<iframe  width="100%" height="260" src="'.$result['youtube'].'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>

 ';
?>

  <p><b><?php echo $result['intro']; ?></b> </p></div>

</div>
<?php
              # code...
            }
            ?>





</div>
 
 <div class="w3-row"><br>
   <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $id=$_GET['id'];
            $selectquery = "SELECT*FROM product_img WHERE pid =$id AND type='2'";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>




<div class="w3-quarter w3-bode col-md-4 col-sm-4 col-12 col-lg-3">
  <div class="w3-borer">
<?php 

echo '
<div class="w3-center">  <a href="./adminstatus/blogadmin/'.$result['file'].'"></a>
 <video width="100%" height="260" controls>
 <source src="adminstatus/blogadmin/'.$result['file'].'" type="video/mp4">yuor brwser doesnot sopport html file vedio</video>
   </div>';
?>

  <p><b><?php echo $result['intro']; ?></b> </p></div>

</div>
<?php
              # code...
            }
            ?>





</div>
 
  <!-- <img src="./adminstatus/blogadmin/<<?php echo($photo) ?>" class="img-fluid" alt="fantastic cms" style="width:100%;height:auto;"> -->
</div>
</div>


                            </article>


    </div>


         <!--     <script >
  $(document).ready(function(){
    $('.pro1').hide();
    $('.pro').click(function(){
      $('.pro1').toggle();

    });

  });
</script> -->

  <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>
 <style>
.collapsible {
  background-color:#ff66ff


;
  color: black;
  font-weight: bold;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color:   #ffcce0;
}

.collapsible:after {
  content: '\002B';
  color: black;
  font-weight: bold;
  float: right;
  margin-left: 5px;
}

.active:after {
  content: "\2212";
}

.content {
  padding: 0 18px;
  max-height: 0;
  overflow: hidden;
  transition: max-height 0.2s ease-out;
  background-color: #f1f1f1;
}
</style>