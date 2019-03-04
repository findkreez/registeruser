<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


	<title>PHP and MySQL user registration system</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
	footer {
      background-color: black;
      color: white;
      padding: 15px;
      margin-top: 214px;
    }
	</style>

</head>
<body>

	<div class="navbar navbar-inverse">
    <div class="container">

      <div class="navbar-header">
      
        <a href="" class="navbar-brand">Our Brand</a>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">

          <span class="sr-only">Toggle navigation</span>

          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          
        </button>

      </div>

      <div class="collapse navbar-collapse">

        <ul class="nav navbar-nav">

          <li class="active"><a href="">Home</a></li>
          <li><a href="">About</a></li>
          <li><a href="">Gallery</a></li>
          <li><a href="">Contact</a></li>

        </ul>

      </div>
 


    </div>

  </div>


	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>

<footer class="container-fluid text-center">
  <p>Our Company</p>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>


</body>
</html>