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

<div class=" container"><button class="w3-left" style="border: transparent;"><a  href="draft_index.php"><i class="fa fa-home"></i> back_index_file</a></button></div>

<hr>
<?php include("link.php");?>
<br><div> <h2 class="w3-center container"><b> product_catagories update panel</b></h2></div>
<hr>
<br>

<hr>



<div class="container"><style>.none li a{border: 2px solid black;padding: 8px; margin: 4px;}  </style>
    
    <ul class="none" style="list-style: none; display: flex;">
<li><a href="blogadd.php"> <i class="fa fa-plus"></i>add new</a></li>
<li> <a href=""  onclick="window.print();" target="print "><i class="fa fa-print" >print</i></a>
</li>

<li><a href="blog_generate_pdf.php"><i class="fa fa-download"></i> </a></li>
<li><a href="blog_export_ccv.php"> <i class="fa fa-download"></i>ccv</a></li>
<li><a href="comment_by_user.php"><i class="fa fa-comment"></i></a></li>



    </ul>
</div><br>

<hr>
</



<hr>  <form action="" method="POST">
<table class="w3-responsive w3-table-all w3-container-fluid " border="5" style="border:2px solid gray" cellpadding="0" cellspacing="10">
    
    
        
         <!--   <td colspan="4">  </td>  -->
        
        <tr class=" container-fluid w3-blue  ">
            <th>
<!-- For Selecting All -->
     <input type="checkbox" id="select_all "> Select all</th>
            <th>id</th>
        <th >title</th>
        <th>keyword</th>
        <th>tag</th>
        <th>content</th>
        <th>ph</th>
        <th>auther</th>
        <th>auther</th> 
        <th>status</th>
        <th>date</th>
        <th colspan="2" class="r">action</th>

        

  <?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM  blogs WHERE status='draft' ORDER BY id DESC ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            // $result = mysqli_fetch_assoc($query);

            
// $query=mysqli_query($con,"SELECT*FROM blogs");
$totalcnt = mysqli_num_rows($query);
if ($totalcnt > 0) {
while ($result=mysqli_fetch_array($query)) {

            // while ($result= mysqli_fetch_array($query)) {
              
?>
        <tr>
            <td><input type="checkbox" class="checkbox" name="ids[]" value="<?php echo htmlentities($result['id']);?>"/></td>
             <td  class="w3-smal  ">  <?php echo $result['id']; ?>  </td>
             <td  class="w3-small   ">  <?php echo $result['title']; ?>  </td>
              <td  class="w3-small w3-responsible  ">  <?php echo $result['keyword']; ?>  </td>
               <td  class="w3-small w3-responsible  ">  <?php echo $result['tags']; ?>  </td>
                <td class="w3-small w3-responsible w3-table-all ">  <?php echo $result['content']; ?>  </td>
                   <td  class="w3-small "> <img src=" <?php echo $result['photo']; ?>" height="30" width="auto">   </td>
                  <td  class="w3-small w3-responsible w3-table-all ">  <?php echo $result['authers']; ?>  </td>
                   <td  class="w3-small w3-responsible w3-table-all ">  <?php echo $result['categories']; ?>  </td>
                    <td  class="w3-small w3-responsible w3-table-all ">  <?php echo $result['status']; ?>  </td>
                   <td  class="w3-small w3-responsible w3-table-all ">  <?php echo $result['date']; ?>  </td>

                    <td> <a href="blog_update.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="edit" ><i class="fa fa-edit" aria-hidden="true"></i> edit</a></td>

          <td> <a href="blog_update.php?id=<?php echo $result['id']; ?> " data-toggle="tooltip" data-placement="bottom" title="edit" ><i class="fa fa-edit" aria-hidden="true"></i> delete </a></td>

          
      
    
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
<div class="w3-center"><input class="w3-center" type="submit" name="submit" value="Delete" class="btn btn-primary btn-md pull-left" onClick="return confirm('Are you sure you want to delete?');" ></div>
</form>


<hr>

<div class="w3-container"> <button style="border: none;"><a href=""><< previous</a></button>
<button class="w3-right" style="border: none;"><a href="">next >></a></button>
</div>
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
