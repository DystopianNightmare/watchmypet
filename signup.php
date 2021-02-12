
<!DOCTYPE html>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet" />
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
<p id="wondertext">Ever Wonder what you pet does at home when you are not around? Well now you can check up on them from anywhere.</p>
<p id="wondertext">Sign up now</p>
</div>
<div class ="column right"> <p id="meetmycat">Sign up</p>

<div id="signupright">
<form method="post">

<table id="signuptable" style="width:33%">
<tr>
<th>	<label for="fname">Your name:</label></th>
<th>	<input type="text" placeholder="Your Name" name="name"></th>
 </tr>
<tr>
<th>	<label for="fname">Your email:</label></th>
<th>	<input type="text" placeholder="Your Email" name="email"></th>
</tr>
<tr>
<th>	<label for="fname">Password:</label></th>
<th>	<input type="text" placeholder="Password" name="password"></th>
</tr>
<tr>
<th>	<label for="fname">Livestream Link:</label></th>
<th>	<input type="text" placeholder="Link to Livestream" name="livestream"></th>
</tr>
<tr>
<th>	<label for="fname">Your Pets name:</label></th>
<th>	<input type="text" placeholder="Pet Name" name="pet"></th>
</tr>
</tr>
</table>
<br>
	<input type="submit" formaction="signupform.php" value="Submit">

</form>
</div>


</div>
</div>
</div>

<div class ="bottom"> 
<a href="contactus.php">Contact Us</a>
<a href="aboutus.php">About Us</a>

</div>



</body>
</html>



