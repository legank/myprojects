<!DOCTYPE HTML>
<html lang="en">
<head>
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/mystyles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scaling=no">
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
</head>
  
<body style="background-color: #b2b2b2;">
	<!-- Navbar -->
	<?php include 'nav.php'; ?>
	
	<div class="container-fluid">
		<div class="col-md-6">
			<div class="well well-lg">
				<h2>MySQL Login</h2>
				<form class="form-horizontal" method="post" action="/index.php">
					<div id="success" class="alert <?php
							$hid = "hidden";
							$text = "";
							$class= "";
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$hid = "";
								$servername = "localhost";
								$username = $_POST["username"];
								$password = $_POST["password"];
								
								$conn = new mysqli($servername, $username, $password);
								
								
								if ($conn->connect_error) {	
									$GLOBALS['text'] = "Connection failed: " . $conn->connect_error;
									$GLOBALS['class'] = "alert-danger ";  
								} else {
									$GLOBALS['text'] = "Logged in";
									$GLOBALS['class'] = "alert-success ";
								};								
							};
							echo $GLOBALS["class"] . $hid;	
						?>">
						<?php echo $GLOBALS["text"]; ?>
					</div>
					
					<div class="form-group">
						<label class="col-md-2 control-label" for="namebox">Username: </label>
					
						<div class="col-md-6">
							<input class="form-control" id="namebox" type="text" name="username">
						</div>
						<div class="col-md-4"></div> <!-- To fill in the row -->
					</div>
				
					<div class="form-group">
						<label class="col-md-2 control-label" for="passwordbox">Password: </label>	

						<div class="col-md-6">
							<input class="form-control" type="password" id="passwordbox" name="password">
						</div>
						<div class="col-md-4"></div> <!-- To fill in the row -->
					</div>
					
					
					<div class="form-group">
						<div class="col-md-2">
							<input id="mybtn" type="submit" class="btn-default btn btn-sm" value="Submit">
						</div>
					</div>
				</form>
			</div>
		</div>
		
		<div class="col-md-6">
		
		</div>
		
	</div>
	
	<?php include 'footer.php'; ?>
</body>
</html>

