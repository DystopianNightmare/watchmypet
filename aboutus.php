<!DOCTYPE html>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" type="image/jpg/png" href="cat.png"/>
</head>
<body>

<div class = "body">
<div class="mainleft"></div>
<div class="mainright"></div>
<div class ="top"><img src="header.png" alt="Italian Trulli"></div>

<div class ="nav">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="signup.php">Sign Up</a></li>
		<li><a href="mypet.php">My Pet</a></li>
		<li><a href="invite.php">Invite Someone</a></li>
		<div class="login">
			<div class="logintext">Login to see your pet!</div>
			<form method="post" action="login.php">
				<input type="text" placeholder="Email" name="email">
				<input type="text" placeholder="Password" name="password">
				<button type="submit">Login</button>
				
		</div>
	</ul>
</div>

<div class="middlesection">
<div class ="column left">
</div>
<div class ="column middle">
</div>
<div class ="column right"> \
<h1 id="aboutWhoWeAre">Who we are</h1>
<p id="aboutWhoWeAreText"> Hey There! </p>
<p id="aboutWhoWeAreText"> My name is Josh and I am a student who recently rescued a cat. The poor little kitty has PTSD and spends most of her life under my bed. Sometimes when I am away I want to check on her. This gave me the idea to make a livestreaming website so I can check on her from anywhere. </p>
</div>
</div>
</div>
<div class ="bottom"> 
<a href="contactus.php">Contact Us</a>
<a href="aboutus.php">About Us</a>
</div>
</body>
</html>