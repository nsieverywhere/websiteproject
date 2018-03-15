<?php
	 include 'database.php'; 
	 
	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];

	mysqli_query ($connect, "INSERT INTO signup (name,email,comments)
		VALUES ('$name','$email','$comments')");

	if(mysqli_affected_rows($connect)>0){
		echo '<p>your news letter has been submitted</p>';
		echo '<a href="index.php">Go Back </a>';
	}	else{
		echo 'you have not submitted your details';
		echo mysqli_error($connect);
	}
