<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
<?php
session_start();
if(!isset($_SESSION['login']))
{
?>
	window.alert("Please Login first");
	window.stop();
<?php
}
?>
</script>
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
			<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
	</div>

	<div id="content_header">
	</div>
	<div id="site_content">
		<div id="content">
		<h2>Available Comic books</h2>
			<!-- insert the page content here --> 
				
				<?php
				$directory="comics";
				$folder = glob($directory . '/*' , GLOB_ONLYDIR);
				for($i=0;$i<count($folder);$i++)
				{
				$file=$folder[$i];
				$folder_name=basename($file);
				echo "<br><br>";
				echo "<a href='readcomic.php?fn=$folder_name'><img src='folder.png' width='25px' height='25px' /></a><br/>";	
				echo $folder_name;
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
