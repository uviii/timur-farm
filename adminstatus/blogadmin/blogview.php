<?php
session_start();
if (strlen($_SESSION['admin']==0)) {
  header('location:logout.php');
  } else{
  
?>

<?php include("dbc.php");?>
<?php

error_reporting();
if (isset($_POST["submit"])) {
    if (count($_POST["ids"]) > 0 ) {
        // Imploding checkbox ids
        $all = implode(",", $_POST["ids"]);
        $sql =mysqli_query($conn,"DELETE FROM  blogs WHERE id in ($all)");
        if ($sql) {
            $errmsg ="Data has been deleted successfully";
        } else {
            $errmsg ="Error while deleting. Please Try again."; 
        }
    } else {
        $errmsg = "You need to select atleast one checkbox to delete!";
    }  
}
?>



<?php include("header.php");?>
<hr>

<div class=" container"><button class="w3-left" style="border: transparent;"><a  href="blog_view_index.php"><i class="fa fa-home"></i> back_index_file</a></button></div>

<hr>
<?php include("link.php");?>
<br><div> <h2 class="w3-center container"><b style="font-size: 25px; color: green;"> Blog Control  panel</b></h2></div>
<hr style="border-bottom: 2px dotted green;">
<br>
<p style="color:#F00; padding-top:20px;" align="center"><?php echo $_SESSION['action1'];?><?php echo $_SESSION['action1']="";?></p>
<hr>



<div class="container"><style>.none li a{border: 2px solid black;padding: 8px; margin: 4px;}  </style>

    <table border="1" cellspacing="0" cellpadding="10"
style="text-align:center;">
    <tr>
      <th class="w3-hover-pink"><a href="blogadd.php"> <i class="fa fa-plus"></i> add</a></th>
      <th class="w3-hover-pink"><a href=""  onclick="window.print();"> <i class="fa fa-print"></i> print</a></th>
      <th class="w3-hover-pink"><a href="blog_export_ccv.php"> <i class="fa fa-download"></i>ccv</a></th>
        <th class="w3-hover-pink"><a href="comment_by_user.php"><i class="fa fa-comment"></i></a></th>
      <th class="w3-hover-pink"><button class="kkk w3-hover-pink" style="border:none;"><a href="#"> <i class="fa fa-eye"></i> all</a></button></th>

    </tr>
  </table>
</div><br>

<hr>
</



<hr>  <form action="" method="POST">
   <caption class="w3-border"><b style="color: red;"><span style="color: green;">Total Articals:</span><?php 
  


            include("dbc.php");
            $query = "SELECT * FROM blogs ";
            $querys = mysqli_query($conn , $query) or die("error");
            $num_row=mysqli_num_rows($querys);
            echo $num_row;
            ?></b> </caption>
<table class="w3-responsive w3-table-al " border="1" style="border:2px solid gray" cellpadding="10" cellspacing="0">
    
    
        
         <!--   <td colspan="4">  </td>  -->
        
        <tr class="  w3-indigo  ">
            <th>
<!-- For Selecting All -->
     <input type="checkbox" id="select_all "> </th>
            <th>id</th>
        <th >title</th>
       <!--  <th>keyword</th> -->
       <!--  <th>tag</th> -->
        <th>content</th>
        <th>ph</th>
        <th>auther</th>
        <!-- <th>auther</th>  -->
        <th  class="r">Editor</th>
        <th>status</th>
       
        
 <th>date</th>
        

  <?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM  blogs";
            $query = mysqli_query($conn , $selectquery) or die("error");
        

            
// $query=mysqli_query($con,"SELECT*FROM blogs");
$totalcnt = mysqli_num_rows($query);
if ($totalcnt > 0) {
while ($result=mysqli_fetch_array($query)) {

            // while ($result= mysqli_fetch_array($query)) {
              
?>
<?php  

$b=$result['date'];
$n=strtotime("$b");
// echo $id;
?>

        <tr >

            <td><input type="checkbox" class="checkbox" name="ids[]" value="<?php echo htmlentities($result['id']);?>"/></td>
             <td  class="w3-smal  ">  <?php echo $result['id']; ?>  </td>
             <td  class="w3-small   "> <a href="blog_update.php?id=<?php echo $result['id']; ?>" style="color: green;"> <?php echo $result['title']; ?> </a> </td>
              <!-- <td  class="w3-small   ">  <?php echo $result['keyword']; ?>  </td> -->
              <!--  <td  class="w3-small   ">  <?php echo $result['tags']; ?>  </td> -->
               <td class="w3-small  w3-table-all ">  <a href="blog_update.php?id=<?php echo $result['id']; ?>" style="color: green;">  <?php echo substr($result['content'], 4, 150); ?></a> </td> 
                   <td  class="w3-small "> <img src=" <?php echo $result['photo']; ?>" height="80" width="auto">   </td>
                  <td  class="w3-small   ">  <?php echo $result['authers']; ?>  </td>
                  <!--  <td  class="w3-small   ">  <?php echo $result['categories']; ?>  </td> -->
                   
                   

                    <td> <a href="blog_update.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="edit" ><i class="fa fa-edit fa-2x" style="color: green;" aria-hidden="true"></i> </a></td>

       <!--    <td> <a href="blog_update.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="edit" ><i class="fa fa-edit fa-2x" style="color: red;" aria-hidden="true"></i>  </a></td> -->
           <td  class="w3-small   ">  <?php echo $result['status']; ?>  </td>
          <td  class="w3-small   "> <?php echo date('d_M_yy_h:ma',$n);?>   </td>

          
      </a>
    
        </tr>

 <?php
              # code...
            }}
            else { ?> 
 
<tr>
<td  colspan="4"> No Record Found</td>
</tr>   
<?php } ?>
            


   
</table>
<br>
<div class="w3-center" style="color: red;"><input  style="color: red; background-color: pink; font-weight: bold; font-size: 30px; width: 50%;" class="w3-center form-contro w3-circle w3-red w3-hover-pink" type="submit" name="submit" value="Delete" class="btn btn-primary btn-md pull-left" onClick="return confirm('Are you sure you want to delete?');" ></div>
</form>


<hr>

<!-- <div class="w3-container"> <button style="border: none;"><a href=""><< previous</a></button>
<button class="w3-right" style="border: none;"><a href="">next >></a></button>
</div> -->
<br>
<br><hr>





<br>
<br><hr><hr>
  <div class="container  w3-center w3-opacity w3-black">
  
    <div class="copyright container">Copyright © 2020 <a href="#" title="kupindedaha timur"><span>kupindedaha timur krishifarm</span></a>. Powered by <a href="#" target="_blank" title="yuvraj"><span>u soo </span></a>.</div>
</div>


<script type="text/javascript">
$(document).ready(function(){
    $('#select_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#select_all').prop('checked',true);
        }else{
            $('#select_all').prop('checked',false);
        }
    });
});
</script>
 
 <?php

  include("footer.php");
 ?>


<?php } ?>
