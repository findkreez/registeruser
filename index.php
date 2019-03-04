<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style>
	footer {
      background-color: black;
      color: white;
      padding: 15px;
      margin-top: 373px;
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


<!-- <img src="image/userregister.jpg" alt="image"> -->
	<div class="header">
		<h2>Home Page</h2>
	</div>
	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>

<footer class="container-fluid text-center">
  <p>Our Company</p>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

		
</body>
</html>