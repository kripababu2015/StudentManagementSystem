<html>
<head>
	<title>
		Login Page
	</title>
</head>
<body>
	<form action="<?php echo base_url()?>main/logincheck" method="post">
	<table>
		<tr>
			<td>Email Id</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="Password" name="Password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="LOGIN"></td>
		</tr>
	</table>
	</form>
</body>
</html>