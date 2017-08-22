<!DOCTYPE HTML>
<html lang="en">
<head>
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/mystyles.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scaling=no">
	<script src="/js/jquery-3.2.1.min.js"></script>
	<script src="/js/bootstrap.js"></script>
	<script src="myjs.js"></script>
	<style>
		html {
			position: relative;
			min-height: 100%;
		}
		
		.footer {
			position: absolute;
			bottom: 0;
			width: 100%;
			height: 30px;
			background-color: #f5f5f5;
		}
	</style>
</head>
  
<body style="background-color: #c0c0c0;">
	<!-- Navbar -->
	<?php require 'nav.php'; ?>
	
	<div class="container-fluid">
		<div class="col-md-6">
			<div id="wellcon" class="well well-lg">
				
				<!-- Content -->
				<h2>MySQL Login</h2>
				
				<div id="alert" class="hidden alert alert-danger">
					<p>Error logging in.</p>
				</div>
				<div class="form-horizontal">
				
					<div class="form-group">
						<label class="col-md-2 control-label" for="namebox">Username: </label>
						<div class="col-md-10">
							<input type="text" style="z-index:1!important" id="namebox" class="form-control"  autocomplete="off">					
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-md-2 control-label" for="password">Password: </label>
						<div class="col-md-10">
							<input type="password" id="pass" class="form-control">
						</div>
					</div>
					
					<div class="form-group">
						<div class="col-md-2">
							<button class="form-control btn btn-primary" onclick="baloo();" id="subbtn">Login</button>
						</div>
					</div>
					
				</div>
				
				<!-- /Content -->
			</div>
		</div>
		
		<div class="col-md-6">
		
		</div>
		
	</div>
	
	<?php include 'footer.php'; ?>
</body>
</html>

