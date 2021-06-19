<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<style>
	body {
   	padding-top:75px;

}
</style>
   </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
	<div class="container">
      <a class="navbar-brand" href="#">Blog Development</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="create.php">add post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="admin.php">Admin</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link " href="register.php">Register Admin</a>
          </li>
        
        </ul>
		
		    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>-->

		<!-- left-->
		<?php
		if(isset($_SESSION['id'])){
			echo '
			<ul class=" my-lg-0">
	 <li class=" mr-sm-2 ">
            <a style="color:#fff" class="nav-link" href="logout.php">Logout</a>
          </li>
      </ul>
			';
		}else{
			echo'
			<ul class=" my-lg-0">
	 <li class=" mr-sm-2 ">
            <a style="color:#fff" class="nav-link" href="login.php">Login</a>
          </li>
      </ul>
			
			';
		}
		?>
		
     
<!-- left-->
      </div>
	  </div>
    </nav>
