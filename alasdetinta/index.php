<!doctype html>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "1234";
	//Step1
	$db = mysqli_connect( $servername , $username , $password ,'alasdetinta_db')
	or die('Error connecting to MySQL server.');

	if(!$db) echo("Couldn't connet to the database.");
	else echo("Connected to the database.");
?>

<html>
<head>
<meta charset="utf-8">
<title>Gateway</title>
</head>

<body>	
	<?php
		header('location: /WEB-alasdetinta/pages/home.php');
	?>
</body>
</html>