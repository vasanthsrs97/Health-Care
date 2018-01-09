<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthcare";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("Connection Failed". $conn->connect_error);
}
$sql = "SELECT heading1,symptomes,heading2,cause,heading3,firstaid,firstaid2 FROM animalattack";
$result = $conn->query($sql);
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc())
	{
		echo "<br>" . $row["heading1"]. "<br><br>" . $row["symptomes"]. "<br><br>" . $row["heading2"]. "<br><br>" . $row["cause"]. "<br><br>" . $row["heading3"]. "<br><br>" . $row["firstaid"]. "<br><br>" . $row["firstaid2"]."<br>";
	}
}
else
	{
		echo "No Results";
	}
$conn->close();
?>
</body>
</html>
	