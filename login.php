<?php 
include 'config.php'; 
include 'header.php'; ?>

<div class="container">
   <form method="POST" action="login_code.php">
    <div class="form-group">
      <label >Email:</label>
      <input type="email" class="form-control"  placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label >Password:</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>


</div>






<?php include 'footer.php'; ?>
     