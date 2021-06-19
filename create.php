<?php
session_start();
 include 'config.php';  
 include 'header.php'; ?>
 <?php 
 if(isset($_POST['submit'])){
	 if(empty($_POST['title']) OR empty($_POST['xxx'] )){
		 echo '
		 <div class="container">
		 <p class="alert alert-warning">
		 You cannot leave one of the fields blank
		 
		 </p>
		 </div>
		 ';
		 
	 }else{
		 
 		 
		 $date =  date("Y/m/d") ; 
		  $sql = "INSERT INTO posts (title, post , date)
VALUES ('$_POST[title]','$_POST[xxx]' ,'$date' )";
 		 if (mysqli_query($conn,$sql)) {
    echo 
	'
		 <div class="container">
		 <p class="alert alert-warning">
		 created successfully
		 
		 </p>
		 </div>
		 '
	;
} else {
    echo "Error: "  . "<br>" . mysqli_error($conn);
	 
}  
 
 
	 }
	 
 }
 ?>
 
 
<div class="container">
<h1>add post</h1>
<form action="create.php" method="post">
<div class="form-group">
<input type="text" name="title" class="form-control" placeholder="add title">
</div>
<div class="form-group">
<textarea name="xxx" rows="10" class="form-control"
placeholder="add content"></textarea>

</div>

<input type="submit" name="submit" class="btn btn-lg btn-primary" value="add post">
 
</form>


</div>




<?php include 'footer.php'; ?>

 