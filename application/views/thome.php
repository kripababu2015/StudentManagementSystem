<html>
<head>
	<title>Student Management System</title>
	<style>
		.bg
		{
			background-image: url("../image/2.jpg");
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
			<li><a href="<?php echo base_url()?>main/thome">Home</a></li>
			<li><a href="<?php echo base_url()?>main/viewdetails">VIEW STUDENTS</a></li>
	
			<li><a href="#">NOTIFICATION</a>
				<div class="submenu">
					<ul>
					<li><a href="<?php echo base_url()?>main/snotific">ADD</a></li>
					<li><a href="<?php echo base_url()?>main/viewnotifictr">VIEW</a></li>
					</ul>
				</div>
			</li>
			<li><a href="<?php echo base_url()?>main/slogout">LOGOUT</a>	</li>
			
		</ul>
	</nav>
	<div class="bg">
	
	<div><h1>STUDENT MANAGEMENT SYSTEM</h1></div>
	<div><h2 style="text-align: center; padding:40px;">WELCOME TO TEACHER HOME PAGE</h2></div>

</div>
</body>
</html>
