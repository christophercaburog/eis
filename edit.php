

<?php
if (isset($_GET['page'])) {

	$id = $_GET['edit_id'];

	$id = mysql_real_escape_string($id);


?>

<html>
<head>
	<title>Employee Information System</title>
</head>
<body>
	<a href="index.php">back</a>
		<h1 align="center">Employee Information System</h1>

			<?php 
				require_once('inc/server.php');

				$db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

				$a = $db->query("SELECT * FROM user WHERE id='$id'");



				while ($row = $a->fetch(2)) {
					
				 ?>


		<form action="inc/update.php" method="post">
				<div align="center">
						<input name="name" placeholder="name" type="text" value="<?php echo $row['name']; ?>"/><br><br>
				        <input name="last_name" placeholder="last name" type="text" value="<?php echo $row['last_name']; ?>"/><br><br>
				        <input name="num" placeholder="number" type="text" value="<?php echo $row['num']; ?>"/><br><br>
						<input name="email" placeholder="email" type="text" value="<?php echo $row['email']; ?>"/><br><br>
						<input type="hidden" name="id"value="<?php echo $row['id']; ?>"/>
						<button type="submit" name="edit">Edit</button>

				</div>
			

				
		</form>

		<?php

			}

		 ?>
</body>
</html>

<?php
$_GET['edit_id']=NULL;
}else {

	header('Location:index.php');
}
?>