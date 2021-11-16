<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>

<?php include("header.php");?>

<?php include("link.php");?>
<br><br>

<div class="container"><button style="border: transparent;"><a href="product_index.php" class="w3-left"> <i class="fa fa-home" ></i> go_product_index_page</a></button></div>
<br>
<br><div> <h2 class="w3-center container"><b style="font-size: 25px; color: green;">Product Categories Introduction Control Panel</b></h2></div>
<hr style="border-bottom: 2px dotted green;">
<br>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
<hr>



<div class="container"><style>.none li a{border: 2px solid black;padding: 8px; margin: 4px;}  </style>
  
  <ul class="none" style="list-style: none; display: flex;">
<li><a href="medicinal_add.php"><i class="fa fa-plus"></i>new</a></li>
<li> <a href=""  onclick="window.print();"><i class="fa fa-print"></i>print</a>
</li>

<li><a href="user_detail_export_ccv.php"><i class="fa fa-download"></i>ccv</a></li>
<li><a href=""><i class="fa fa-eye"></i>show_all</a></li>


  </ul>
</div><br>

<table class="w3-responsive  w3-table-all w3-container w3-center" border="5" 
style="text-align:center;">

 

  
    <tr class="w3-indigo container r ">
      <th class="r">id</th>
    <th class="r">introduction</th>
    <th class="r">categories</th>
    <th colspan="2" class="r">opration</th>
    <th class="r">date</th>
    <!-- INSERT INTO `blog_categories`(`id`, `name`, `date`) VALUES ([value-1],[value-2],[value-3]) -->
    
    </tr>
<tbody class="w3-display-stripe w3-display-border container w3-center containerfluid ">
    <?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM `herb`  ORDER BY id DESC";
            $query = mysqli_query($conn , $selectquery) or die("error");
           

            while ($result= mysqli_fetch_array($query)) {
              
?>
<?php  

$b=$result['date'];
$n=strtotime("$b");
// echo $id;
?>
    <tr class="tr">
      
        <td class="r"> <?php echo $result['id']; ?> </td>
        <td class="r"><?php echo $result['content']; ?> </td>
    <td class="r"><?php echo $result['cat']; ?> </td>
    
    
    
        
        <td> <a href="medicinal_up.php?id=<?php echo $result['id']; ?>"> <i class="fa fa-edit fa-2x" style="color: green;"></i></a></td>
          <td> <a href="delete.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="delete" ><i class="fa fa-trash fa-2x" style="color: red;" aria-hidden="true"></i> </a></td>
          <td class="r"><?php echo date('d_M_yy',$n);?></td>
          
      

 
    </tr>
     <?php
              # code...
            }
            ?>
  </tbody>
</table>

<hr>



<br>
<br>


<hr>
<?php include('footer.php'); ?>
</div>
<?php } ?>