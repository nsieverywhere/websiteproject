<?php
	$connect = mysqli_connect ('localhost','root','nsi','newsletter');
		if(mysqli_connect_errno($connect)){
			echo 'failed to connect';
		}

?>