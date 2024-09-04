<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Form</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			background-color: #ffffcc;
			
		}
		center {
			margin-top: 20px;
		}
		form {
			width: 600px;
			background-color: #fff;
			padding: 20px;
			border: 5px solid #fff ;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			display: grid;
			/* grid-template-columns: 30px; */
		}
		label {
			display: inline-block;
			margin-bottom: 5px;
		}
		input[type="text"] {
			width: 300px;
			padding: 4px;
			margin-left: auto;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 3px;
		}
		input[type="submit"] {
			background-color: #007BFF;
			color: #fff;
			width:auto;
			border: none;
			padding: 10px 20px;
			border-radius: 3px;
			cursor: pointer;
			margin-left: 50px;
			margin-right: 50px;
		}
		input[type="submit"]:hover {
			background-color: #0056b3;
		}
	</style>
</head>
<body>
	<center>
		<!-- <h1>Storing Form data in Database</h1> -->
		<form action="http://localhost/sih/insert1.php" method="post">
			
            <p>
			<label for="firstName">First Name:</label>
			<input type="text" name="first_name" id="firstName">
			</p>

			
            <p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="last_name" id="lastName">
			</p>

			
            <p>
			<label for="Gender">Gender:</label>
			<input type="text" name="gender" id="Gender">
			</p>

			
            <p>
			<label for="Address">Address:</label>
			<input type="text" name="address" id="Address">
			</p>

			
            <p>
			<label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress">
			</p>

            <p>
			<label for="udid">UDID:</label>
			<input type="text" name="udid" id="UDID">
			</p>

            <p>
			<label for="phoneNo">Phone number:</label>
			<input type="text" name="phoneno" id="phoneno">
			</p>

            <p>
			<label for="password">Password:</label>
			<input type="text" name="password" id="password">
			</p>

			<input type="submit" value="Submit">
		</form>
	</center>
</body>
</html>
