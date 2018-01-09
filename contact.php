<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthcare";
$con = new mysqli($servername,$username,$password,$dbname);
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['phone'];
$question = $_POST['message'];
if(!$con)
{
die('could not connect'.mysql_error());
}
mysql_select_db("healthcare",$con);
$sql="insert into contact(name,email,number,question) values('$name','$email','number','$question')";
if($con->query($sql)== TRUE)
{
	echo "New record added";
}
else
	
	{
		echo"Error" .$sql."<br>". $con->error;
		
	}
	$con->close();
	?>