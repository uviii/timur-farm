<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>

<?php include("header_product.php");?>

<?php include("link.php");?>
<br><br>

<div class="container"><button style="border: transparent;"><a href="product_index.php"> <i class="fa fa-home"></i> go_product_index_page</a></button></div>
<br>
<br><div> <h3 class="w3-center"><b>product categories introduction control panel</b></h3></div>
<hr>
<br>

<hr>



<div class="container"><style>.none li a{border: 2px solid black;padding: 8px; margin: 4px;}  </style>
  
  <ul class="none" style="list-style: none; display: flex;">
<li><a href="medicinal_add.php">add new</a></li>
<li> <a href=""  onclick="window.print();">print</a>
</li>

<li><a href="user_detail_export_ccv.php">save_ccv</a></li>
<li><a href="">filter</a></li>
<li><a href="">show_all</a></li>


  </ul>
</div><br>

<table class="w3-responsive  w3-table-all w3-container w3-center" border="5" 
style="text-align:center;">

 

  
    <tr class="bg-success container r ">
      <th class="r">id</th>
    <th class="r">introduction</th>
    <th class="r">categories</th>
   
    <th class="r">date</th>
    
    <th colspan="2" class="r">opration</th>
    <!-- INSERT INTO `blog_categories`(`id`, `name`, `date`) VALUES ([value-1],[value-2],[value-3]) -->
    
    </tr>
<tbody class="w3-display-stripe w3-display-border container w3-center containerfluid ">
    <?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM `herb`  ORDER BY id ";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
    <tr class="tr">
      
        <td class="r"> <?php echo $result['id']; ?> </td>
        <td class="r"><?php echo $result['content']; ?> </td>
    <td class="r"><?php echo $result['cat']; ?> </td>
    
    <td class="r"><?php echo $result['date']; ?> </td>
    
        
        <td> <a href="medicinal_up.php?id=<?php echo $result['id']; ?>"> edit</a></td>
          <td> <a href="delete.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete" ><i class="fa fa-trash" aria-hidden="true"></i> delete</a></td>
          
      

 
    </tr>
     <?php
              # code...
            }
            ?>
  </tbody>
</table>

<hr>

<div class="w3-container"> <button style="border: none;"><a href=""><< previous</a></button>
<button class="w3-right" style="border: none;"><a href="">next >></a></button>
</div>
<br>
<br>


<hr>
<br>
<br><hr><hr>
  <div class="container  w3-center w3-opacity w3-black">
  
    <div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>
<?php } ?>