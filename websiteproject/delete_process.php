
<?php
	
		if (isset ($_GET ['del']))
		{
			$id = $_GET['del'];
			$sql= "DELETE FROM signup WHERE id = '$id'";
			$result= mysqli_query ($sql) or die("failed".mysqli_error()); 
			echo '<META HTTP-EQIV="Refresh" Content="0; URL=admin_page.php">';
		}
?>
	
			

