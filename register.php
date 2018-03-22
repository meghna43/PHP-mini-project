<!DOCTYPE HTML>
<?php
error_reporting(0);
session_start();
?>
<html>
<head>
<title>Index page</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
<style>
form{
border-style: inset;
width:600px;
font-size: 15px;
font-family: cursive;
color: #222222;
}

input[type=text], input[type=password] {
    width: 150px;
    padding: 4px 15px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
button {
    font-family: "Times New Roman", Times, serif;
    font-size: 12px;
    background-color: #E1E1E1;
    color:#121212;
    padding: 10px 12px;
    margin: 4px 0;
    border-style: outset;
    cursor: pointer;
    width: 70px;
}
.cancelbtn,.signupbtn {
    float: left;
    width: 70px;
}
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

.error
{
color:red;
}

</style>
</head>
<body>
<?php
$fn=$_POST["fn"];
$ln=$_POST["ln"];
$gen=$_POST["gender"];
$eid=$_POST["email"];
$pswd=$_POST["pswd"];
$pswd2=$_POST["pswd2"];
$fnameErr =$lnameErr= $emailErr = $genderErr = "";
$fnameErr2 =$lnameErr2= $emailErr2 =$pswdErr=$pswd2Err=$pswdErr2="";

function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  	if (empty($_POST["fn"])) 
	{
    	$fnameErr = "First Name is required";
  	}
	else
	{
    	$name = test_input($_POST["fn"]);
  	}
	
	if (!preg_match("/^[a-zA-Z ]*$/",$fn))
	{
  	$fnameErr2 = "Only letters and white space allowed"; 
	}

	if (empty($_POST["ln"])) 
	{
    	$lnameErr = "Last Name is required";
  	}
	else
	{
   	 $name = test_input($_POST["ln"]);
  	}
	
	if (!preg_match("/^[a-zA-Z ]*$/",$ln))
	{
  	$lnameErr2 = "Only letters and white space allowed"; 
	}

	if (!filter_var($eid, FILTER_VALIDATE_EMAIL))
	{
  	$emailErr2= "Invalid email format"; 
	}

 	if (empty($_POST["email"]))
	{
    	$emailErr = "Email is required";
  	}
	else
	{
    	$email = test_input($_POST["email"]);
  	}

	if (empty($_POST["gender"]))
	{
    	$genderErr = "Gender is required";
  	}
	
	if (empty($_POST["pswd"]))
	{
    	$pswdErr = "Password is required";
  	}
	else
	{
    	$pswd = test_input($_POST["pswd"]);
  	}

	if (empty($_POST["pswd2"]))
	{
    	$pswd2Err = "re-type Password required";
  	}
	else
	{
    	$pswd2 = test_input($_POST["pswd2"]);
  	}

	if(!($pswd==$pswd2))
	{
	$pswdErr2="Password doesnt match";
	}
}
?>
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
			<li class="selected"><a href="register.php">Sign Up</a></li>
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
			<form method="POST" action="register.php">
			First Name: <input type="text" name="fn" value="<?php echo $fn; ?>">
			<span class="error"><?php echo $fnameErr;?></span>
			<span class="error"><?php echo $fnameErr2;?></span>
			<br><br>
			Last Name: <input type="text" name="ln" value="<?php echo $ln; ?>">
			<span class="error"><?php echo $lnameErr;?></span>
			<span class="error"><?php echo $lnameErr2;?></span>
			<br><br>
			Gender:
			<input type="radio" name="gender" value="f">Female
			<input type="radio" name="gender" value="m">Male
			<span class="error"><?php echo $genderErr;?></span>
			<br><br>
			E-mail: <input type="text" name="email" value="<?php echo $eid; ?>">
			<span class="error"><?php echo $emailErr;?></span>
			<span class="error"><?php echo $emailErr2;?></span>
			<br><br>
			Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="password" name="pswd">
			<span class="error"><?php echo $pswdErr;?></span>
			<br><br>
			re-type password:&nbsp;
			<input type="password" name="pswd2">
			<span class="error"><?php echo $pswd2Err;?></span>
			<span class="error"><?php echo $pswdErr2;?></span>
			<br><br>
			<div class="clearfix">
				<button type="reset"  class="cancelbtn">Cancel</button>
				&nbsp;
				<button type="submit" class="signupbtn">Sign Up</button>
			</div>
			</form>
			<?php
					$fn=$_POST["fn"];
					$ln=$_POST["ln"];
					$gen=$_POST["gender"];
					$eid=$_POST["email"];
					$pswd=$_POST["pswd"];
					$pswd2=$_POST["pswd2"];
					$conn=mysqli_connect("localhost","root","");
					mysqli_select_db($conn,"proj");
					$stat = "INSERT INTO login (first_name, last_name, gender, mail_id,  pass_word) VALUES ('$fn','$ln','$gen','$eid','$pswd')";
				
				if (mysqli_query($conn,$stat) === TRUE)
				{
				header("Location: http://localhost/Proj/login.php") or
				die();
				}
			?>
		</div>
	</div>
	<div id="content_footer">
	</div>
	<div id="footer">
			<p><a href="index.php">Home</a> | <a href="readsect.php">Read comics</a> | <a href="login.php">Login</a> | <a href="register.php">Sign Up</a> | <a href="contact.php">Contact Us</a></p>	</div>
</div>
</body>
</html>
