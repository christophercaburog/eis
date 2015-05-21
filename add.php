<?php
	
	



?>

<html>
<head>
	<title>Employee Information System</title>
</head>
<body>
	<a href="index.php">back</a>
		<h1 align="center">Employee Information System</h1>

		<form action="inc/add.php" method="post">
				<div align="center">
						<input name="name" placeholder="name" type="text"/><br><br>
				        <input name="last_name" placeholder="last name" type="text"/><br><br>
				        <input name="num" placeholder="number" type="text"/><br><br>
						<input name="email" placeholder="email" type="text"/><br><br>
						<button type="submit" name="add">ADD</button>

				</div>
			

				
		</form>
</body>
</html>