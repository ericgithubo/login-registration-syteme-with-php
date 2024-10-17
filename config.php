
<?php
$servername = "localhost"; // or 127.0.0.1
$username = "root"; // MySQL username
$password = ""; // MySQL password (if applicable, leave as empty string if no password)
$dbname = "user_db"; // MySQL database name

// Create connection with socket
$conn = new mysqli($servername, $username, $password, $dbname, null, '/opt/lampp/var/mysql/mysql.sock');

// Check connection
//if ($conn->connect_error) {
   // die("Connection failed: " . $conn->connect_error . " (Error Code: " . $conn->connect_errno . ")");
//}
//echo "Connected successfully";
?>