<html>
<head>
<script src="jquery.min.js"></script>
<script src="bootstrap.min.js"></script>
<link href="css files/bootstrap.min.css" rel="stylesheet">
<link href="css files/menustyle.css" rel="stylesheet">
</head>
<body>
<script>
$(document).ready(function(){
	setInterval(function(){
	$('#bl').animate({
top:'200px'},4000).animate({left:'860px'},4000).animate({top:'260px'},4000).animate({top:'200px'},4000).animate({left:'370px'},4000).animate({top:'260px'},4000);
	},1000);
});
</script>
<div class="container">
	<img src="boyy.jpg" id="bo">
	<img src="girll.png" id="go">
	<img src="black.png" id="bl">
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>                        
				</button>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"><b>HELP</b> 
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li>
								<a href="about.php">About</a>
							</li>
							<li>
								<a href="create.php">How To Create a Gmail Account</a>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="registermodal.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
					</li>
					<li>
					<a href="modal.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</div>