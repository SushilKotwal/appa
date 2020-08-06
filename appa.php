<html>
<head>
<title>Welcome to Saloon's Hub</title>
</head>
<style>
	body{
		overflow-x:hidden;
		background-image:url("background.jpg");
		width:100%;
		background-repeat:no-repeat;
		background-size:cover;
	}
	#main{
		width:1400px;
	}
	#header{
		width:1350px;
		height:70px;
		background-color:#A9A9A9;
		margin-top:-15px;
	}
	#footer{
		
		width:1350px;
		height:70px;
		background-color:#A9A9A9;
		font-family:Times New Roman;
	}
	#content{
		border:2px solid grey;
		border-radius:60px;
		margin-left:300px;
		margin-top:20px;
		margin-bottom:20px;
		margin-right:100px;
		background-color:#F25278;
	}
	#login{
		width:60%;
		border-radius:30px;
		background-color:#fff;
		border:2px solid #1da1f2;
		color:#1da1f2;
	}
	#signup{
		width:60%;
		border-radius:30px;
		background-color:#fff;
		border:2px solid #1da1f2;
		color:#1da1f2;
	}
	
</style>
<body>
	<div id="main">
		<div id="header">
			<Center><h1 style="font-family:Elephant;text-align:center;">Saloon'shub.com</h1></center>
		</div>
		<div id="menu" style="width:300px;height:400px;float:left;">
		</div>
		<div id="content" style="width:700px;height:400px;"><br>
			<form action="" method="post" id="login-content">
				<center><h2>FOR CUSTOMER PURPOSE</h2><br>
				<button id="login" name="login">LOG IN AS A USER</button><br><br><br>
				<?php
					if(isset($_POST['login']))
					{
						echo"<script>window.open('saloon_signin.php','_self')</script>";
					}
				?>
				<button id="signup" name="signup">SIGN UP AS A USER</button><br><br><br>
				<?php
					if(isset($_POST['signup']))
					{
						echo"<script>window.open('saloon_signup.php','_self')</script>";
					}
				?>
				<a style="font-size:20px;" href="greet1.php">Connect As a Saloon Owner</a>
				</center>
			</form>
		</div>
	
		<div id="footer" style="width:1350px;height:70px;">
			<center><font size="4px"><u>CONTACT DETAILS</u><br>MOBILE NO:- 9172247273<br>EMAIL ID:- abhnik543@gmail.com</font></center>
		</div>
	</div>
</body>