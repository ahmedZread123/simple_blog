<?php
session_start();
if(!isset($_SESSION['id'])){
	header("Location: index.php");
	die();
}
include 'config.php';
//include 'header.php'; ?>

<div class="container">
   <form action="registration_code.php" method="POST">
   <div class="form-group">
      <label >First Name:</label>
      <input type="text" class="form-control"   placeholder="Enter firstname" name="firstname">
    </div>
	<div class="form-group">
      <label >Last Name:</label>
      <input type="text" class="form-control"   placeholder="Enter lastname" name="lastname">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Register</button>
  </form>


</div>






<?php include 'footer.php'; ?>
