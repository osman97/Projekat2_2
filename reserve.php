<html>
	<head>
		<title>My Hotel</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="projekat2css.css" type="text/css" rel="stylesheet">
		<link href="slider_css.css" type="text/css" rel="stylesheet">
		<style>
		body { 
			font: 24px sans-serif; 
			text-align: center; 
			background-color: blanchedAlmond;
		}
    </style>
	</head>

<body class="body">
	<div class="top">
			<a href="index.php">Home</a>
			<a href="aboutUs.php">About us</a>
			<a href="reserve.php">Reservation</a>
			<a href="index.php#map">Location</a>	
		</div>
	
	<h1>You are now in process of registering a room in a motel.</h1>
	<h2>The following information are needed to successfully register.</h2>
	
	<div class="registration">
	<form action="process.php" method="post">
		<table align="center" style="border:5px solid black; font-size:24px; background-color: ">
			<tr>
				<td align="justify">Please, enter your first name here: </td>
				<td align="justify"><input type="text" name="firstName"></td>
			</tr>
			
			<tr>
				<td align="justify">Please, enter your last name here: </td>
				<td align="justify"><input type="text" name="lastName"></td>
			</tr>
			
			<tr>
				<td align="justify">Please, enter your date of arrival: </td>
				<td align="justify"><input type="date" name="dateArrival" min="2019-5-31"></td>
			</tr>
			
			<tr>
				<td align="justify">Please, enter your date of departure: </td>
				<td align="justify"><input type="date" name="dateDeparture" min="2019-6-1"></td>
			</tr>
			
			<tr>
				<td align="center">
					<input type="submit" value="Submit">
					<input type="reset" value="Reset">
				</td>
			</tr>		
		</table>
	</form>
	</div>
</body>
</html>