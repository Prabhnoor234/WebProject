<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<section>
		<form action="login.php" method="post">
				<fieldset>
					<legend>Login</legend>
					<p>
						<label for="email">Email</label>
						<input name="email" id="email" />
					</p>
					<p>
						<label for="password">Password</label>
						<textarea name="password" id="password"></textarea>
					</p>
					<p>
						<input type="submit" name="Login" value="Login" />
					</p>
				</fieldset>
			</form>
			<p>New to the website? <a href="signup.php">SignUp</a></p>
	</section>
</body>
</html>