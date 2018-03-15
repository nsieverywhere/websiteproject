<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Reply</title>
</head>
<body>
	<?php include 'database.php'; ?>
	<?php 
	$sql = "SELECT id, name, email, comments FROM signup WHERE ID = '17' ";
	$result = mysqli_query ($connect, $sql);
	?>
	<?php while($row = mysqli_fetch_array($result)) :  ?>
	<h1 class="h1">Feedback from <?php echo $row['name']?></h1>
	<table  >
	<th>ID</th>
	<th>NAME</th>
	<th>EMAIL</th>
	<th>COMMENTS</th>
	<tr>
	<td ><?php echo $row['id']?></td>
	<td ><?php echo $row['name']?></td>
	<td ><?php echo $row['email']?></td>
	<td ><?php echo $row['comments']?></td>
	</tr>
	<?php endwhile ?>
	</table>
	
</body>
</html>