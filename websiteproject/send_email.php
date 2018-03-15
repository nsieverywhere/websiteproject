<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Send Email</title>
<?php include 'database.php'; ?>
</head>
<body>
	<?php 
	$name=$_GET["name"];
	$email=$_GET["email"];
	?>
	<h1 class="h1" style="text-align: center"> Send <?php echo "$name"?> an email</h1>
<form method="get" action="handler.php?email=<?php echo $row['email'] ?>" >
	<textarea name ="message" style="margin: 40px 0px 0px 270px; "  rows="10" cols="100" placeholder="reply vistor"></textarea><br><br>
	<input style="margin: 40px 0px 0px 550px; type="text" name="email" value="<?php echo $email; ?>" >
	<input class= "btn btn-primary" type="submit" name="submit" value="Submit" > 
</form>
</body>
</html>