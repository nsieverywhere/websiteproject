<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Admin Page</title>
	</head>
	<body>
		<?php include 'database.php'; ?>
		<header >
			<img src="images/nsi.png" height="80px" alt="logo" class="logo-image">
		</header>
		<br>
		<h1 >Admin Page</h1><br>
		<h2 >welcome</h2>
	<?php	
		$sql = "SELECT * FROM signup";
		$result = mysqli_query ($connect, $sql);
		if(mysqli_num_rows($result) > 0):?>

	<table class="table">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>email</th>
		<th>comment</th>
	</tr>
	<?php while($row = mysqli_fetch_array($result)) :  ?>
	<tr>
		<td scope="col"> <?php echo $row['id'] ?></td>
		<td scope="col"> <?php echo $row['name']  ?></td>
		<td scope="col"> <?php echo $row['email'] ?> </td>
		<td><a href="reply.php" class="btn btn-primary"> view </a></td>
		<td><a href="send_email.php?id=<?php echo $row['id'] ?>&name=<?php echo $row['name'] ?>&email=<?php echo $row['email'] ?>" class="btn btn-primary" name ="<?php echo $row['email'] ?>"> Send Email </a></td>
		<td><a href="delete_process.php?del=$row[id]" class="btn btn-danger"> Delete </a></td>
	</tr>
	<?php endwhile; ?>
	</table>
	<?php else : ?>
	<h3>No records matching your query were found.</h3> 
	<?php endif; ?>		
<?php mysqli_close($connect); ?>
<footer >&copy2018 by Nsikan Simon. <a href="index.php" class="btn">Go to main site</a></footer>
	</body>
</html>