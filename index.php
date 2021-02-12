
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
<div class ="column left"></div>
<div class ="column middle">
<h1 id="indexLeft"> Hey There!</h1>
<p id="indexLeftLower">Ever Wonder what you pet does at home when you are not around? Well now you can check up on them from anywhere.</p>
</div>
<div class ="column right"> <p id="indexRight">Meet My Cat</p>
<iframe width="70%"  height="70%" src="https://www.youtube.com/embed/Tp2CWeyvju8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture "  	allowfullscreen></iframe>
</div>
</div>
</div>

<div class ="bottom"> 
<a href="contactus.php">Contact Us</a>
<a href="aboutus.php">About Us</a>

</div>



</body>
</html>



