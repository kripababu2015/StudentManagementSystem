<html>
<head>
	<title>view</title>
</head>
<body>
	<form method="post" action="<?php echo base_url();?>main/updatedetails">
		<?php 
		if (isset($user_data)) 
		{
			foreach ($user_data->result() as $row1)
			{
			?>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value="<?php echo $row1->name;?>"></td>
				</tr>
				<tr>
					<td>Address:</td>
					<td><textarea name="address"><?php echo $row1->address;?></textarea></td>
				</tr>
				
				<tr>
					<td>Gender:</td>
					<td><select name="gender">
						<option>
							<?php echo $row1->gender;?>
						</option>
						<option>male</option>
						<option>female</option>
					</select>
				</td>
				</tr>
				<tr>
					<td>Age:</td>
					<td><input type="text" name="age" value="<?php echo $row1->age;?>"></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="text" name="email" value="<?php echo $row1->email;?>"></td>
				</tr>
				<tr>
					<input type="hidden" name="id" value="<?php echo $row1->id;?>">
					<td></td><td><input type="submit" name="update" value="update"></td>
				</tr>
			</table>
		<?php 	}
				} 
				else
					{
						?>
		<table border="2">
			<thead>
				<tr>
					<th>
						Name
					</th>
					<th>
						Address
					</th>
					<th>
						Gender
					</th>
					<th>
						Age
					</th>
					<th>
						Email
					</th>
					<th colspan="2">
						Action
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
						<?php echo $row->name;?>
					</td>
					<td>
						<?php echo $row->address;?>
					</td>
					<td>
						<?php echo $row->gender;?>
					</td>
					<td>
						<?php echo $row->age;?>
					</td>
					<td>
						<?php echo $row->email;?>
					</td>
					<input type="hidden" name="id" value="<?php echo $row->id;?>">
					<td><a href="<?php echo base_url()?>main/updatedetails/<?php echo $row->id;?>">Edit</a></td>
					<td><a href="<?php echo base_url()?>main/deletedetails/<?php echo $row->id; ?>">Delete</a></td>
				</tr>
				<?php 
					}
				}	
				else
					{
						?>
					<tr>
						<td>No Data Found</td>
					</tr>
					<?php
					}
				}
					?>

			</tbody>

		</table>
	</form>
</body>
</html>