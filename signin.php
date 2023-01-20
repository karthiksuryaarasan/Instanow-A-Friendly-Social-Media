<!DOCTYPE html>
<html>

	<head>
		<title>Instanow - Sign up, Log in, Chat </title>
		<link rel="stylesheet" type="text/css" href="css/signin.css">
	</head>

<body>

	<div id="container">
		<div class="sign-in-form">
			<table>
			<img src="logo.png" alt="**" width="170" height="60">
			
			<img src="icon.jpg" alt="**" width="80" height="85">
	<form method="post" action="signin_form.php" enctype="multipart/form-data">
				<tr>
					<td><label>Email</label></td>
					<td><input type="email" name="email" placeholder="abc123@gmail.com" class="form-1" title="Enter your email" required /></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="password" placeholder="~~~~~~~~~~" class="form-1" title="Enter your password" required /></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="2">
					<input type="submit" name="submit" value="Log in" class="btn-sign-in" title="Log in" />
					<input type="reset" name="cancel" value="Cancel" class="btn-sign-up" title="Cancel" />
					
					</td>
				</tr>
	</form>
			</table>
		
		</div>
	</div>

</body>

</html>