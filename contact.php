<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
<head>
<title>Contact page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
<style>
img{
height: 20px;
width: 20px;
}
.fa {
    padding: 10px;
    font-size: 30px;
    width: 50px;
    text-align: center;
    text-decoration: none;
}
.fa:hover {
    opacity: 0.7;
}
}
</style></head>
<body>
<div id="main">
	<div id="header">
		<div id="logo">
			<div id="logo_text">
				<!-- class="logo_colour", allows you to change the colour of the text -->
				<h1><a href="index.html">Comic Alliance<span class="logo_colour"></span></a></h1>
				<h2>Read Comic books online</h2>
			</div>
		</div>
		<div id="menubar">
			<ul id="menu">
		        <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
			<li><a href="index.php">Home</a></li>
			<li><a href="readsect.php">Read comics</a></li>
			<li><a href="register.php">Sign Up</a></li>
			<li class="selected"><a href="contact.html">Contact Us</a></li>
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
			?></ul>
		</div>
	</div>

	<div id="content_header"></div>
	<div id="site_content">
		<div id="content">	
			<h2>CONTACT US</h2>	
			Like our page on <a href="https://www.facebook.com/ComicsAlliance" class="fa fa-facebook"><img src="fb.png"></a>
			<br>
			Follow us on <a href="https://twitter.com/comicsalliance " class="fa fa-facebook"><img src="twitter.png"></a>
			<br>
			Follow us on <a href="https://instagram.com/comicsalliance " class="fa fa-facebook"><img src="insta.jpeg"></a>
			<br>
			Subscribe to our channel on<a href="https://www.youtube.com/user/comicsalliance" class="fa fa-facebook"><img src="youtube.jpeg"></a>
		</div>
	</div>
	<div id="content_footer"></div>
		<div id="footer">
			<p><a href="index.php">Home</a> | <a href="readsect.php">Read comics</a> | <a href="login.php">Login</a> | <a href="register.php">Sign Up</a> | <a href="contact.html">Contact Us</a></p>		</div>
	</div>
</div>
</body>
</html>
