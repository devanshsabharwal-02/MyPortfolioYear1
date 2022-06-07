<?php>
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ecs417";
// Creates connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Checks connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
$sql = "INSERT INTO USERS (firstName, lastName, email,
password) VALUES ('$fname', '$sname', '$email', '$pass1')";
if ($conn->query($sql) === TRUE) {
//YOUR CODE
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>