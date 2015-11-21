<?php
$username = "b4f44690438d1f";
$password = "164fbeb6";
$hostname = "us-cdbr-azure-southcentral-e.cloudapp.net"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
?>