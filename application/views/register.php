<html>
<head>
	<title>
		Registration Form
	</title>
	<style>
		table
		{
			text-align:center;
			margin: 20px;
			padding:20px;

		}
		body
		{
			text-align: center;
			margin:30px;
		}
		tr,td
		{
			margin:30px;
			padding: 15px;
		}
		fieldset
		{
			width:500px;

			margin-left: 300px;
		}
		input
		{
			
		}
	</style>
</head>
<body>
	<fieldset>
	<table>
		
			<h1>Registration Form</h1>
			<form action="<?php echo base_url()?>main/register" method="post">
				<tr><td>Name:</td><td><input type="text" name="name"></td></tr>
				<tr><td>Address:</td><td><textarea name="address"></textarea></td></tr>
				<tr><td>Gender</td><td><input type="radio" name="gender" id="m" value="Male"><label for="m">Male</label></td>
				<td><input type="radio" name="gender" id="f" value="Female"><label for="f">Female</label></td></tr>
				<tr><td>Age:</td><td><input type="text" name="age"></td></tr>
				<tr><td>E-mail:</td><td><input type="email" name="email"></td></tr>
				<tr><td>Password:</td><td><input type="password" name="password"></td></tr>
				<tr><td></td><td><input type="submit" name="submit"></td></tr>
		
			</form>
	
	</table>
	</fieldset>
		
</body>
</html>