<html>
<head>
<title>
login
</title>
<style>
	fieldset
	{
		width: 500px;
		margin-left: 300px;
		padding: 20px;
	}
	body
	{
		text-align: center;
		margin: 30px;
		padding: 20px;
	}
	input
	{
		margin: 30px;
		padding: 20px;
	}
</style>
</head>
<body>
	<form method="post" action="<?php echo base_url()?>main1/login">
<fieldset>
	<h1>LOGIN</h1>
	Email-Id
<input type="email" name="email"><br>
Password
<input type="password" name="password"><br>
<input type="submit" name="submit">
</fieldset>
</form>
</body>
</html>