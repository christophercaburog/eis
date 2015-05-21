
<html>
<head>
	<title>Employe Information System </title>
</head>
<body>
<h1 align="center">Employe Information System CRUD</h1>
		<div align="center"><table border="1">
			<thead>
				<th>Id</th>
				<th>Name</th>
				<th>Last Name</th>
				<th>Number</th>
				<th>Email</th>
				<th>Actions</th>
			</thead>
			<tbody>
				<?php 
				require_once('inc/server.php');

				$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

				$a = $db->query('SELECT * FROM user');
				while ($row = $a->fetch(2)) {
					$temp_id = $row['id'];
				 ?>
				<tr>
					<td>
						<?php echo $row['id']; ?>
					</td>
					<td>
						<?php echo $row['name']; ?>
					</td>
					<td>
						<?php echo $row['last_name']; ?>
					</td>
					<td>
						<?php echo $row['num']; ?>
					</td>
					<td>
						<?php echo $row['email']; ?>
					</td>
					<td>
						<a href="edit.php?page=edit()&edit_id=<?php echo $temp_id; ?>">Edit</a><br>
					
						<a href="index.php?page=del()&id=<?php echo $temp_id; ?>">Delete</a>
					</td>	
				</tr>
				<?php
					}
				?>
			</tbody>

		</table>
		<a href="add.php">Add</a>
	</div>

</body>
</html>
<?php
//for delete
if (isset($_GET['page'])) {

	$temp_delete = $_GET['id'];

		require_once('inc/delete.php');
	

		$del = new Delete();


		$del->setId ($temp_delete);
		$del->getDelete();

	}

?>