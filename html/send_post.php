<?php include 'db.php' ?>

<?php
	$page=isset($_GET['p'])?$_GET['p']:'';

	if($page=='add')
	{
		$first_name = $_POST["firstname"];
		$last_name = $_POST["lastname"];
		$middle_name = $_POST["middlename"];
		$phone = $_POST["phone"];
		$email = $_POST["email"];
		$sql= mysqli_query($link, "INSERT INTO Persons(first_name, last_name, middle_name, phone, email) VALUES('$first_name', '$last_name', '$middle_name', '$phone', '$email')");
	}

?>





