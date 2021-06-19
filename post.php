<?php 
include 'config.php'; 
include 'header.php'; ?>
<div class="container">
<?php
if(isset($_GET['id']) AND $_GET['id'] > 0 ){
 $sql = "SELECT * FROM posts where id = '$_GET[id]' ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
		 
		echo "
		<div>
		<a href='post.php?id=$row[id]'>
		<h1>$row[title]</h1>
		</a>
		<p class='text-muted'>
		$row[date]
		</p>
		<p>
		$row[post]
		</p>
		</div>
		";
		
   //  echo "title: " . $row["title"]. " - post: " . $row["post"]. " " . $row["date"].$row["id"]. "<br>";
     
} else {
    echo "0 results";
}}



?>

</div>






<?php include 'footer.php'; ?>
     