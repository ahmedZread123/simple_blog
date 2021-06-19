<?php 
session_start();
if(!isset($_SESSION['id'])){
	header("Location: index.php");
	die();
}  

include 'config.php'; 
include 'header.php'; ?>
<div class="container">
<br> 
  <table class="table table-bordered table-sm">
    <thead>
      <tr>
        <th>title</th>
        <th>content</th>
        <th>operation</th>
      </tr>
    </thead>
    <tbody>
	
<?php
$sql = "SELECT * FROM posts";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
     echo " <tr>
        <td style='text-align:center'>$row[title]</td>
        <td style='text-align:center'>$row[post]</td>
 
        <td><a href='delete.php?id=". $row['id'] ."'><button type='button' class='btn btn-danger'>Delete</button></a>||
 
		  <a href='updatee.php?id=". $row['id'] ."'><button type='button' class='btn btn-primary'>Update</button></a>

		
		
</td>
      </tr>";
       }
} else {
    echo "0 results";
}



?>
    </tbody>
  </table>




 

</div>






<?php include 'footer.php'; ?>
     