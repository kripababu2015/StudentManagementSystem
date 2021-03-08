<html>
<head>
	<title>Student Management System</title>
	<style>
		.bg
		{
			background-image: url("../image/1.jpg");
			background-attachment:cover;
			height: 500px;
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
	
</div>
</body>
</html>
