<html>
<head>
	<title>view</title>
	<style>
		
		
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
	/*background-image:url("../img/back.jpg");
	background-size:cover;*/
	text-align: center;
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
table
		{
			text-align:center;
			margin: 20px;
			padding:20px;
			border-collapse: collapse;


		}
	
	form
	{
		text-align: center;
	}		
		tr,td
		{
			margin:30px;
			padding: 15px;
		}
		body
		{
			text-align: center;
			
		}
	</style>
</head>
<body>
	<div class="bi">
	<nav class="menubar">
		<ul>
			<li><a href="<?php echo base_url()?>main/shome">Home</a></li>
			<li><a href="<?php echo base_url()?>main/viewstud">UPDATE PROFILE</a></li>
	
			<li><a href="<?php echo base_url()?>main/viewnotific">VIEW NOTIFICATION</a></li>
				
			<li><a href="<?php echo base_url()?>main/slogout">LOGOUT</a>	</li>
			
		</ul>
	</nav>
	<form method="post" action="">
		<table border="2">
			<thead>
				<tr>
					<th>
						Slno
					</th>
					<th>
						Teacher Name
					</th>
					<th>
						Phone Number
					</th>

					<th>
						Notification
					</th>
					<th>
						Date
					</th>
					
				</tr>
				<?php
				if($n->num_rows()>0)
				{
					foreach ($n->result() as $row)
					 {
				?>
			</thead>
			<tbody>
				<tr>
					<td>
						<?php echo $row->id;?>
					</td>
					<td>
						<?php echo $row->name;?>
					</td>
					<td>
						<?php echo $row->phone;?>
					</td>
					<td>
						<?php echo $row->notification;?>
					</td>
					<td>
						<?php echo $row->cdate;?>
					</td>
					</tr>
				
					<?php
					
				}
				}
					?>

			</tbody>

		</table>
	</form>
</div>
</body>
</html>