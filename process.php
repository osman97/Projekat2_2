<?php
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "moteldb");

$connect = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$fName = $_POST['firstName'];
$lName = $_POST['lastName'];
$dateA = $_POST['dateArrival'];
$dateD = $_POST['dateDeparture'];


	echo	"Welcome dear ". $_POST["firstName"] ." to our motel.".
			"We wish you a pleasant stay.\r\n";
		
	$query1 = "INSERT INTO visitor (vNumber, dateArrival, dateDeparture, firstName, lastName, roomNumber)
	VALUES (DEFAULT, '$dateA', '$dateD', '$fName', '$lName', (SELECT roomNumber FROM rooms WHERE rooms.occupied = 0 LIMIT 1))";

	$query2 = "UPDATE rooms SET occupied = 1, dateOccupied = '$dateD' WHERE roomNumber = (SELECT roomNumber FROM visitor ORDER BY vNumber DESC LIMIT 1)";
	
	$result1 = mysqli_query($connect, $query1);
	$result2 = mysqli_query($connect, $query2);
	
	if (mysqli_affected_rows($connect) >= 1) 
		echo "Your information has been recorded";
	else
		echo "Something was wrong.";

$connect->close();
?>