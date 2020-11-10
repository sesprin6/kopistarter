<!doctype html>
<html>
	<head>
		<title>USER ADD</title>
	</head>
	<body>
		<form method="post" action="modules/user/qry_add.php">
			<label>ID</label>
			<input type="text" name="id">
			<br>
			<label>Password</label>
			<input type="password" name="password">
			<br>
			<label>Name</label>
			<input type="text" name="name">
			<br>
			<label>Role (Number)</label>
			<input type="number" name="role">
			<br>
			<label>Email</label>
			<input type="text" name="email">
			<br>
			<input type="submit" value="add">
		</form>
	</body>
</html>
