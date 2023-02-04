<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "20-5a9";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "<h1>Connected successfully<br><h1>";

// Create table
$sql = "CREATE TABLE users (
username VARCHAR(30) ,
email VARCHAR(50),
password VARCHAR(30) 
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Insert data
$sql = "INSERT INTO users VALUES ('john', 'john@example.com', 'secret')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>