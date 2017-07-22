<?php include 'db.php' ?>

<?php
	$request = $_REQUEST['email'];
	$sql= mysqli_query($link, "select * from Persons where email='".$request."'");
	$rows = $sql->num_rows;
	if($rows > 0)
		{
			echo 'false';
		}
		else
		{
			echo 'true';	
		}
?>