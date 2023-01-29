<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login page</title>
</head>

<!-----signin styling---->
<style type="text/css">
	*{
		padding: 0;
		margin: 0;
	}
	body{
		background: white;
		text-align: center;
		padding-top: 10%;
	}
</style>
<body>
	<h1>SIGHIN</h1>
	<form action="conn.php" method="post">
		<p>
			<label for="user">Username</label><br/>
			<input type="text" name="user" placeholder="Username" autocomplete="off">
		</p>
		<p>
			<label for="password">Password</label><br/>
			<input type="password" name="password" placeholder="Enter password" autocomplete="off">
		</p><br/>
		<p>
			<button type="submit" name="button">Login</button>
		</p>
	</form>
</body>
</html>