<html>
<head>
	<title>view</title>
</head>
<body>
	<form method="post" action="">
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
					<?php
					if($row->status==1)
					{?>
						<td>Approved</td>
						<td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">Reject</a></td>
					<?php
					}
					elseif($row->status==2)
					{
						?>
						<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">Approve</a></td>
						<td>Rejected</td>
						<?php
						}
						else
						{

						?>
					<td><a href="<?php echo base_url()?>main/approve/<?php echo $row->id;?>">Approve</a></td>
					<td><a href="<?php echo base_url()?>main/reject/<?php echo $row->id;?>">Reject</a></td>
				</tr>
				
					<?php
					}
				}
				}
					?>

			</tbody>

		</table>
	</form>
</body>
</html>