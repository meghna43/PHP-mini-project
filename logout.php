<!DOCTYPE HTML>
<?php
session_start();
session_destroy(); 
?>
<html>
<head>
<script type="text/javascript">
window.alert("successfully logged out!");
</script>

<title>Index page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <style>
form.login{
border-style: inset;
width:300px;
}

input[type=text], input[type=password] {
    width: 60%;
    padding: 4px 15px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {
    font-family: "Times New Roman", Times, serif;
    font-size: 20px;
    background-color: #E1E1E1;
    color:#A2A2A2;
    padding: 10px 12px;
    margin: 4px 0;
    border-style: outset;
    cursor: pointer;
    width: 40%;
}
   </style>
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
			<li><a href="readsect.php">Read comics</a></li>
			<li><a href="register.php">Sign Up</a></li>
			<li><a href="contact.php">Contact Us</a></li>
			<li class="selected"><a href="login.php">Login</a></li>
			</ul>
		</div>
	</div>

	<div id="content_header"></div>
		<div id="site_content">
			<div id="content">
				<h4>To re-login click on <a href="login.php">Login</a></h4>
			</div>
		</div>
		<div id="content_footer"></div>
			<div id="footer">
			<p><a href="index.php">Home</a> | <a href="readsect.php">Read comics</a> | <a href="login.php">Login</a> | <a href="register.php">Sign Up</a> | <a href="contact.html">Contact Us</a></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>
