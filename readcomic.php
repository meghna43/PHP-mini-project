<!DOCTYPE HTML>
<?php
session_start();
$folder_name=$_GET['fn'];
?>
<html>
<head>
<style type="text/css">
img{
float:left; 
}
</style>
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
				<!-- class="logo_colour", allows you to change the colour of the text -->
				<h1><a href="index.html">Comic Alliance<span class="logo_colour"></span></a></h1>
				<h2>Read Comic books online</h2>
			</div>
		</div>
		<div id="menubar">
			<ul id="menu">
		        <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
			<li><a href="index.php">Home</a></li>
			<li class="selected"><a href="readsect.php">Read comics</a></li>
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

	<div id="content_header">
	</div>
	<div id="site_content">
		<div id="content">
			<?php
			$pages = array ();
			$dirname = "comics/".$folder_name."/";
			$files = glob($dirname."*.jpg");
			for($i=0;$i<count($files);$i++)
			{
			$images=$files[$i];
			echo "<br><br>";
			echo '<img src="'.$images.'" alt="Random Images"/>';
			}
			?>
		</div>
	</div>
	<div id="content_footer">
	</div>
	<div id="footer">
		<p><a href="index.php">Home</a> | <a href="readsect.php">Read comics</a> | <a href="login.php">Login</a> | <a href="register.php">Sign Up</a> | <a href="contact.php">Contact Us</a></p>
	</div>
</div>
</body>
</html>
