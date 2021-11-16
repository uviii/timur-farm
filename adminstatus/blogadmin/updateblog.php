
<?php
include("dbc.php");
error_reporting();
if (isset($_POST["submit"])) {
    if (count($_POST["ids"]) > 0 ) {
        // Imploding checkbox ids
        $all = implode(",", $_POST["ids"]);
        $sql =mysqli_query($conn,"UPDATE FROM  blogs WHERE id in ($all)");
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









<?php include("dbc.php");?>
<?php include("header.php");?>

<?php include("link.php");?>
<br><br>
<hr>

<hr>
<!-- UPDATE `blogs` SET `id`=[value-1],`title`=[value-2],`keyword`=[value-3],`tags`=[value-4],`content`=[value-5],`photo`=[value-6],`authers`=[value-7],`categories`=[value-8],`status`=[value-9],`date`=[value-10] WHERE 1 -->
<!-- $sql="INSERT INTO `blogs`(`title`, `keyword`, `tags`, `content`, `photo`, `authers`, `categories`, `status`) VALUES ('$title','$keyword','$tags','$content','$destifile', '$authers','$categories','$status')"; -->
 <?php 

            include("./adminstatus/blogadmin/dbc.php");
            $id=$_GET['id'];
            $selectquery="UPDATE `blogs` SET `title`='$title',`keyword`='$keyword',`tags`='$tags',`content`='$content',`photo`='$destifile',`authers`='$authers',`categories`='$categories',`status`='$status' WHERE id=$id";
            $selectquery = "SELECT*FROM productadd WHERE id =$id";
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            while ($result= mysqli_fetch_array($query)) {
              
?>





<form name="multipledeletion" method="post">


<div class="container"><style>.none li a{border: 2px solid black;padding: 8px; margin: 4px;}  </style>
    
    <ul class="none" style="list-style: none; display: flex;">
<li><a href="http://localhost/timur%20farm/adminstatus/blogadmin/blogadd.php ">add new</a></li>
<li> <a href=""  onclick="window.print();">print</a>
</li>

<li><a href="">save_ccv</a></li>
<li><a href="">filter</a></li>
<li><a href="">show_all</a></li>

    

    </ul>
</div><br>



<hr>  
<table class="w3-responsible w3-table-all w3-containe">
    
    <tbody class="w3-display-stripe w3-display-border w3-hover- ">
         <tr>
           <td colspan="4">  <input type="submit" name="submit" value="Delete" class="btn btn-primary btn-md pull-left" onClick="return confirm('Are you sure you want to delete?');" ></td> 
        </tr>
        <tr class="bg-success container">

            <th>
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

<!-- For Selecting All -->
     <li><input type="checkbox" id="select_all "  > Select all</li></th>
            <th>id</th>
        <th>title</th>
        <th>keyword</th>
        <th>tag</th>
        <th>content</th>
        <th>ph</th>
        <th>auther</th>
        <th>auther</th> 
        <th>status</th>
        <th>date</th>
        
            </tr>
<tbody class="w3-display-stripe w3-display-border w3-hover- ">
  
            


    </tbody>
</table>
</form>

<hr>

<div class="w3-container"> <button style="border: none;"><a href=""><< previous</a></button>
<button class="w3-right" style="border: none;"><a href="">next >></a></button>
</div>
<br>
<br><hr>
<div class="row">
    

<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM  blogs ";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);

            
// $query=mysqli_query($con,"SELECT*FROM blogs");
$totalcnt = mysqli_num_rows($query);
if ($totalcnt > 0) {
while ($result=mysqli_fetch_array($query)) {

            // while ($result= mysqli_fetch_array($query)) {
              
?>
         <div class="col-sm-8 bg-dak">
        <form class="pl-5"  action="blogadddata.php" method="POST"  enctype="multipart/form-data"  >
        <div class="form-group container">
            <input type="hidden" name="id" value="<?php echo($id); ?>">
        <div  ><label> <b>title   :</b></label> <input class="form-control" placeholder="write your artical title here" type="text" class="" name="title" value=" <?php echo $result['title']; ?> "><br></div>
        <div  ><label> <b>keyword   :</b></label> <input class="form-control" placeholder="tage here" type="text" class="" name="keyword" value=" <?php echo $result['keyword']; ?>"><br></div>
        <div  ><label> <b>tags   :</b></label> <input class="form-control" placeholder="tage here" type="text" class="" name="tags" value=" <?php echo $result['tags']; ?> "><br></div>
        
        <div><label> <b>content   :</b></label> <textarea  name="content" id="text" class="  w3-round-large form-control  pl-" cols="105" rows="3" placeholder="write your artical here" name="content"  > <?php echo $result['content']; ?> </textarea></div>
        
</div>
        <div  ><label> <b>photo   :</b></label> <input type="file" name="photo" class="form-control pl-4 "  class=" ml-4 mr-1"  placeholder="contact no.*" value=" <?php echo $result['photo']; ?> "><br></div>
        

        <div  ><label> <b>auther   :</b></label> <input class="form-control" placeholder="auther name" type="text"  name="auther" value=" <?php echo $result['authers']; ?> "><br></div>
        

        <div><b>categories:</b>
        <select class="form-control " name="cat" >
            <option type="text" name="cat" value="posted">select catagories </option>
            

<?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM blog_categories";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<option name="cat" value="<?php echo htmlentities($result['name']);?>"><?php echo htmlentities($result['name']);?>  <?php echo $result['categories']; ?> </option>
    
         <?php
              # code...
            }
            ?>

        </select></div>
        <b>posted:</b>
        <select class="form-control " name="post">posted:
            <option type="text" name="post" value="posted"><?php echo $result['status']; ?> </option>
            <option type="text" name="post"> publish</option>
            <option type="text" name="post"> draft</option>

        </select>
        
     <div class="w3-center">
        <input class="w3-round-large w3-xlarge  form-control bg-success w3-hover-yellow"  type="submit" name="submit" value="UPDATE">
</div>
    
         <hr>
         
        

    </form>
    </div>

 <?php
              # code...
            }}
            else { ?> 
 
<tr>
<td  colspan="4"> No Record Found</td>
</tr>   
<?php } ?>








   


    <div class="col-sm-4 bg-dange w3-right"><br> <hr>

        <div> <ul class="w3-center" style="list-style: none;">
            
            <li style="list-style: none; border: 2px solid black; margin-left: 60px; margin-right: 60px; font-weight: bold; font-size: 20px;background-color: green; "><a href="">upload</a></li>
            <li style="background-color: white; list-style: none; border: 2px solid black; margin-left: 60px; margin-right: 60px;font-weight: bold;font-size: 20px;">print</li>
            <li  style="background-color: red; list-style: none; border: 2px solid black; margin-left: 60px; margin-right: 60px;font-weight: bold;font-size: 20px;">cancel</li>
        </ul ></div>

        <div class="w3-center "><p><b style="border: 2px solid black; background-color: yellow;">edit other artical</b></p></div>
         <div class="w3-dropdown-hover  w3-right">
      <button class="w3-padding-large w3-button w3-center bg-success" title="More">categories<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
       
        <?php 

            include("dbc.php");
            $selectquery = "SELECT*FROM blog_categories";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $result = mysqli_fetch_assoc($query);
            while ($result= mysqli_fetch_array($query)) {
              
?>
<a href="" class="w3-bar-item w3-button"><?php echo htmlentities($result['name']);?></a>

    
         <?php
              # code...
            }
            ?>
        
      </div>
    </div>

        <div></div>

     </div>
    
</div><hr>

 
 <?php


  include("footer.php");
 ?>