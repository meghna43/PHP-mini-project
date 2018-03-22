<!DOCTYPE HTML>
<?php
session_start();
?>
<html>

<head>
  <title>Index page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
<div id="main">
	<div id="header">
		<div id="logo">
			<div id="logo_text">
				<h1><a href="index.html">Comic Alliance<span class="logo_colour"></span></a></h1>
				<h2>Read Comic books online</h2>
			</div>
		</div>
		<div id="menubar">
			<ul id="menu">
			<li class="selected"><a href="index.php">Home</a></li>
			<li><a href="readsect.php">Read comics</a></li>
			<li><a href="register.php">Sign Up</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<?php
			if(!isset($_SESSION['login']))
			{
			?>
				<li><a href="login.php">Login</a></li>
			<?php
			}
			else
			{
			?>
				<li><a href="logout.php">Logout</a></li>
			<?php
			}
			?>
			</ul>
		</div>
	</div>
	<div id="site_content">
		<div id="content">
			<div><img src="jl.jpg" width="100%" height="100%"></div>
			<img src="avenger.jpeg" width="20%" height="25%">
			<img src="dc.jpeg" width="20%" height="25%">
			<img src="daredevil.jpeg" width="20%" height="25%">
			<img src="dc2.jpg" width="20%" height="25%">
		</div>
	</div>
	<div id="content_footer"></div>
		<div id="footer">
			<p><a href="index.php">Home</a> | <a href="readsect.php">Read comics</a> | <a href="login.php">Login</a> | <a href="register.php">Sign Up</a> | <a href="contact.php">Contact Us</a></p>
		</div>
	</div>
</div>
</body>
</html>
