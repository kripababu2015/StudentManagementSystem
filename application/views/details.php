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
			
		}
		tr,td
		{
			margin:30px;
			padding: 15px;
		}
		fieldset
		{
			width:500px;
			background-color:rgba(0,0,0,0.5);

			margin-left: 400px;
		}
		input
		{
			
		}
	
		.bg
		{
			background-image: url("/image/1.jpg");
			background-attachment:cover;
			height: 1000px;
			width: 100%;
		}
		h1
		{
			text-align: center;
			color:red;
			margin: 20px;
		}
		span
		{
			margin: 50px;
			padding: 20px;
		}
		*
{
	padding:0px;
	margin:0px;
	box-sizing:border-box;
}
.bi
{
	background-image:url("../img/back.jpg");
	background-size:cover;
}

.menubar
{
	background-color:black;
	text-align:center;

}
.menubar li
{
	list-style:none;
	
	padding:15px;

}
.menubar ul li a
{
	color:white;
	text-decoration:none;
	padding:10px;
	font-size:25px;
	
	
}
.menubar ul
{
	display:inline-flex;
	padding:15px;
	
}
.menubar ul li a:hover
{
	background-color:red;
	border-radius:10px;
}

.menubar ul li:hover .submenu
{
	display:block;
	position:absolute;
	background-color:black;
	border-radius:10px ;
	margin-left:-20px;
	

}
.submenu ul
{
	display:block;
}
	.submenu
{
	display:none;
	
}
	

.submenu ul li 
{
	border-bottom:1px solid red;
}

.row
{
	display:flex;
	border-bottom:1px solid white;
}

.col
{
	background-color:rgba(0,0,0,0.4);
	height:350px;
	width:450px;
	padding:15px;
	margin:20px;
	text-align:justify;
	color:white;

	
}

.row h2
{
	color:white;
	text-align:center;
	text-decoration:underline;
}


.ft
{
	background-color:black;
	height:100px;
	color:white;
	text-align:center;
	padding:20px;
}
.col p
{
	margin:20px;
}




	</style>
</head>
<body>
	<nav class="menubar">
		<ul>
			<li><a href="<?php echo base_url()?>main/index">Home</a></li>
	
			<li><a href="#">REGISTRATION</a>
				<div class="submenu">
					<ul>
					<li><a href="<?php echo base_url()?>main/details">STUDENTS</a></li>
					<li><a href="<?php echo base_url()?>main/trdetails">TEACHERS</a></li>
					</ul>
				</div>
			</li>
			<li><a href="<?php echo base_url()?>main/loginst">LOGIN</a>	</li>
			
		</ul>
	</nav>
	<div><h1>STUDENT MANAGEMENT SYSTEM</h1></div>
<div class="bg">
	

	<fieldset>
	<table>
		
			<h1>Student Registration Form </h1>
			<form action="<?php echo base_url()?>main/detailsadd" method="post">
				<tr><td>First Name:</td><td><input type="text" name="fname"></td></tr>
				<tr><td>Last Name:</td><td><input type="text" name="lname"></td></tr>
				<tr><td>Address:</td><td><textarea name="address"></textarea></td></tr>
				<tr><td>District:</td><td>
					<select name="dis">
						<option>TVM</option>
						<option>KOLLAM</option>
						<option>PTA</option>
						<option>ALAPUZHA</option>
						<option>KOTTAYAM</option>
						<option>EKLM</option>
						<option>IDUKKI</option>
						<option>THRISSUR</option>
						<option>PALAKKAD</option>
						<option>WAYANAD</option>
						<option>KOZHIKODE</option>
						<option>MALAPPURAM</option>
						<option>KANNUR</option>
						<option>KASARGODE</option>

					</select>

				</td></tr>
				<tr><td>Pin code:</td><td><input type="text" name="pin"></td></tr>
				<tr><td>Phone Number:</td><td><input type="text" name="phone"></td></tr>
				<tr><td>Date of Birth:</td><td><input type="date" name="dob"></td></tr>
				<tr><td>Gender</td><td><input type="radio" name="gender" id="m" value="Male"><label for="m">Male</label></td>
				<td><input type="radio" name="gender" id="f" value="Female"><label for="f">Female</label></td></tr>
				<tr><td>Highest Education:</td><td>
					<select name="edu">
						<option>PHD</option>
						<option>PG</option>
						<option>Degree</option>
						<option>HSC</option>
						<option>SSLC</option>
					</select>
				</td></tr>
				<tr><td>E-mail:</td><td><input type="email" name="email"></td></tr>
				<tr><td>Password:</td><td><input type="password" name="password"></td></tr>
				<tr><td></td><td><input type="submit" name="submit"></td></tr>
		
			</form>
	
	</table>
	</fieldset>
		</div>
</body>
</html>