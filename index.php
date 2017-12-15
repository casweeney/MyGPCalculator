<?php
	$select = "--Select--";
	$date = date('Y');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>MYGP Calculator</title>
		<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
		<meta content="utf-8" http-equiv="encoding">
		<meta name="keywords" content="MYGP"/>
		<meta name="description" content="MYGP Calculator">
		<meta name="author" content="Toxaswift">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link type='text/css' rel='stylesheet' href='css/bootstrap.css' />
		<link type='text/css' rel='stylesheet' href='css/defined.css' />
		<link type='text/css' rel='stylesheet' href='css/blink.css' />
		<link rel="shortcut icon" href="img/logo.png">
		<script type='text/javascript' src='js/jquery-1.11.3.min.js'></script>
		<script type='text/javascript' src='js/bootstrap.js'></script>
		<script type='text/javascript' src='js/toxaswift.js'></script>
		<script type='text/javascript' src='js/blink.js'></script>
	</head>
	<body>
		<nav class='navbar navbar-default'>
			<div class='container'>
				<div class='navbar-header'>
					<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
						<span class='sr-only'>Toggle navigation</span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					<a class='navbar-brand' href='index.php'><img class='img-responsive logo' src='img/logo.png' /></a>
				</div>
				<div id='navbar' class='navbar-collapse collapse'>
					<ul class='nav navbar-nav navbar-right'>
						<li><a href='index.php'>Home</a></li>
						<li><a href='gp.php'>Check GP</a></li>
						
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</nav>
		
		<section id='white_bg'>
			<br />
			<br />
			<div class='container'>
				<div class='row'>
					<div class='col-md-6 col-sm-6 col-xs-12'>
						<img class='img-responsive' src='img/gp.png' />
						<br />
					</div>
					<div class='col-md-1'>
					
					</div>
					<div class='col-md-4 col-sm-6 col-xs-12'>
						<h2 class='tag'>Fast. Accurate. <br />Reliable. <br />Trustworthy.</h2>
						<p class='text-justify about'>MYGP Calculator is an online application that help students to calculate their Grade Point Average(GPA). It is an accurate and reliable application that saves students and lecturers the time and stress involved in computation and calculation of students Grade Points. </p>
						<p class='text-justify about'>With MYGP Calculator you can calculate all your semester results with just a click a button. All you need to do is click on the big button below, fill in your grades and their credit power or units after which you click on the Calculate GP button and you will get your Grade Point Average ...  </p>
						<p><a href="gp.php" type='submit' id='go_btn' class='btn btn-block btn-lg btn-warning'>CALCULATE GP NOW</a></p>
					</div>
					
					<div class='col-md-2'>
					
					</div>
				</div>
			</div>
		</section>
		<br />
		<br />
		
		<footer>
			<div class='container-fluid'>
				<div class='row'>
					<div class='col-xs-12 col-md-3 col-sm-3'>
						<div class='container-fluid'>
							<ul class='footer_nav'>
								<h5 class='links'>MYGP</h5>
								<li><a href=''>Features</a></li>
								<li><a href=''>Security</a></li>
								<li><a href=''>Download</a></li>
								<li><a href=''>MYGP Web</a></li>
							</ul>
						</div>
					</div>
					<div class='col-xs-12 col-md-3 col-sm-3'>
						<ul class='footer_nav'>
							<h5 class='links'>COMPANY</h5>
							<li><a href=''>About</a></li>
							<li><a href=''>Careers</a></li>
							<li><a href=''>Brand Center</a></li>
							<li><a href=''>Get in Touch</a></li>
							<li><a href=''>Blog</a></li>
						</ul>
					</div>
					<div class='col-xs-12 col-md-3 col-sm-3'>
						<ul class='footer_nav'>
							<h5 class='links'>DOWNLOAD</h5>
							<li><a href=''>iPhone</a></li>
							<li><a href=''>Android</a></li>
							<li><a href=''>Windows Phone</a></li>
							<li><a href=''>BlackBerry</a></li>
							<li><a href=''>Nokia</a></li>
						</ul>
					</div>
					<div class='col-xs-12 col-md-3 col-sm-3'>
						<ul class='footer_nav'>
							<h5 class='links'>HELP</h5>
							<li><a href=''>FAQ</a></li>
							<li><a href=''>Twitter</a></li>
							<li><a href=''>Facebook</a></li>
							<li><a href=''>Instagram</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<footer id='footer2'>
			<div class='container-fluid'>
				<div class='row'>
					<div class='container-fluid'>
						<div class='col-md-3 col-sm-3'>
							<p class='terms'><?php echo $date ?> &#169 MYGP</p>
						</div>
						<div class='col-md-3 col-sm-3'>
							<p class='terms'><a href='#'>Privacy & Terms</a></p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		
	</body>
</html>