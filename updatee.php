 
<?php

 include 'config.php';  
 include 'header.php'; ?>

<?php
  
 
if(isset($_POST['update']))
{   
 
     $id = $_POST['id'];
    
    $title=$_POST['title'];
    $post=$_POST['post'];
    $date =  date("Y/m/d") ;   
  //  echo $id.$title.$post.$date;
    // checking empty fields
    if(empty($title) || empty($post) ) {            
        if(empty($title)) {
            echo "<font color='red'>Title field is empty.</font><br/>";
        }
        
        if(empty($post)) {
            echo "<font color='red'>Post field is empty.</font><br/>";
        }
        
              
    } else {    
        //updating the table
		$sql = "UPDATE posts SET title='$title',post='$post',date='$date' WHERE id=$id";
        $result = mysqli_query($conn,$sql );
        
        //redirectig to the display page. In our case, it is index.php
         header("Location: index.php");
    }  
}
?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$sql = "SELECT * FROM posts WHERE id=$id";
$result = mysqli_query($conn, $sql);
 
while($res = mysqli_fetch_array($result))
{
    $title = $res['title'];
    $post = $res['post'];
     
}
?>
 
 
<div class="container">
<h1>Edit Post</h1>
<form action="updatee.php" method="post">
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
<div class="form-group">
<input type="text" name="title"  value="<?php echo $title;?>" class="form-control" placeholder="add title">
</div>
<div class="form-group">
<textarea name="post" rows="10" class="form-control"
placeholder="add content"><?php echo $post;?></textarea>

</div>

<input type="submit" name="update" class="btn btn-lg btn-primary" value="edit post">
 
</form>


</div>




<?php include 'footer.php'; ?>

 