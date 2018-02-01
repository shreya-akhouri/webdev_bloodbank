<!DOCTYPE HTML>

<html>
<head>
	<meta charset="UTF-8">
	<title>Blood bank management</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!--[if IE 7]>
		<link rel="stylesheet" href="css/ie7.css" type="text/css">
	<![endif]-->
</head>
<body>
	<div id="header">
		<div>
			<div>
				<span>Save a life give blood...</span>
				<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
				<span class="tagline">Experience life to the fullest.</span>
			</div>
			<ul>
				<li>
					<a href="index.html">home</a>
				</li>
				<li>
					<a href="about.html">about</a>
				</li>
			
				<li>
					<a href="donor.html">donor</a>
				</li>
				<li class="selected">
					<a href="acceptor.html">acceptor</a>
				</li>
				<li>
					<a href="receptionist.html">admin</a>
				</li>
				<li>
					<a href="">camp</a>
				</li>
			</ul>
		</div>
	</div>
		<div id="body">
		<div class="content">
			<div id="section">
				<h2>fill the form</h2>
				<br>
				<form action="acceptor_php.php" method="post">
					<strong>Name:&nbsp</strong>
					<br><input type="text" name="fname"><br><br>
					<br><strong>Age:&nbsp</strong>
					<br><input type="number" name="age"><br><br>
					<br><strong>Gender:&nbsp</strong>
					<br><br><input type="text" name="gender"><br><br>
					<br><strong>Blood Group:&nbsp</strong>
					<br><input type="text" name="bg"><br><br>
					<br><strong>Consultants name:&nbsp</strong>
					<br><input type="text" name="cname"><br><br>
					<br><strong>Address:&nbsp</strong>
					<Br><input type="text" name="add"><br><br>
					<br><strong>Email:&nbsp</strong>
					<br><input type="text" name="email"><br><br>
					<br><strong>Contact Number:&nbsp</strong>
					<br><input type="tel" name="cno"><br><br>
					<br><strong>Password:&nbsp</strong>
					<br><input type="password" name="password"><br><br>
					<br><strong>Id:&nbsp</strong>
					<br><input type="text" name="id"><br><br>
					<br>
					<input type="submit" name="send" id="send">
				<br>
				<button type="reset" style="background-color:midnightblue;">reset</button>
				</form>
			
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			
			<ul>
				<li>
					<a href="index.html">home</a>
				</li>
				<li>
					<a href="about.html">about</a>
				</li>
				
				<li>
					<a href="donor.html">donor</a>
				</li>
				<li>
					<a href="acceptor.html">acceptor</a>
				</li>
				<li>
					<a href="receptionist.html">admin</a>
				</li>
			</ul>
		
		</div>
	</div>
</body>
</html>