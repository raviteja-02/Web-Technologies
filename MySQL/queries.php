<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "20-5a9";

// Create connection with the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create table
$sql = "CREATE TABLE users (
firstname VARCHAR(30),
lastname VARCHAR(30),
email VARCHAR(50)
)";

if ($conn->query($sql) === TRUE) {
    echo "Table users created successfully\n";
} else {
    echo "Error creating table: " . $conn->error;
}

// Insert data into the table
$sql = "INSERT INTO users VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully\n";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Select data from the table
$sql = "SELECT id, firstname, lastname, email FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["firstname"]. " " . $row["lastname"]. " - Email: " . $row["email"]. "\n";
    }
} else {
    echo "0 results";
}

// Update data in the table
$sql = "UPDATE users SET lastname='Smith' WHERE firstname='John'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully\n";
} else {
    echo "Error updating record: " . $conn->error;
}

// Delete data from the table
$sql = "DELETE FROM users WHERE lastname='Smith'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully\n";
} else {
    echo "Error deleting record: " . $conn->error;
}

// Drop table
$sql = "DROP TABLE users";

if ($conn->query($sql) === TRUE) {
    echo "Table users dropped successfully\n";
} else {
    echo "Error dropping table: " . $conn->error;
}

$conn->close();
?>