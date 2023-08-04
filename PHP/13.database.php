<?php
// Database configuration
$hostname = 'localhost';
$database = '20_a9';
$username = 'root';  // Assuming the user is 'root' with an empty password. Replace with your actual database username and password if needed.

// Create a connection to the database
$connection = mysqli_connect($hostname, $username, '', $database);

// Check if the connection was successful
if (!$connection) {
    die('Database connection failed: ' . mysqli_connect_error());
}

// You are now connected to the database.
// You can perform database queries and operations using this $connection variable.

// Example query
$query = "SELECT * FROM students";

// Perform the query
$result = mysqli_query($connection, $query);

// Check if the query was successful
if (!$result) {
    die('Error in the query: ' . mysqli_error($connection));
}

// Example fetching data
// Assuming $result contains the result of your MySQL query

echo '<table>';
echo '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Grade</th><th>City</th></tr>';

while ($row = mysqli_fetch_array($result)) {
    echo '<tr>';
    echo '<td>' , $row['id'] , '</td>';
    echo '<td>' , $row['first_name'] , '</td>';
    echo '<td>' , $row['last_name'] , '</td>';
    echo '<td>' , $row['age'] , '</td>';
    echo '<td>' , $row['grade'] , '</td>';
    echo '<td>' , $row['city'] , '</td>';
    echo '</tr>';
}

echo '</table>';


// Don't forget to close the connection when you're done
mysqli_close($connection);

/**
 * MySQL is a popular relational database management system that is used to store and manage data. To connect to a MySQL database, you can use PHP's built-in functions such as `mysqli_connect()` or `PDO`. Once you have connected to the database, you can execute simple queries using SQL statements such as `SELECT`, `INSERT`, `UPDATE`, and `DELETE`. 

*To handle the results of a query, you can use PHP's built-in functions such as `mysqli_fetch_array()`, `mysqli_fetch_assoc()`, and `mysqli_fetch_object()`. These functions allow you to retrieve data from the result set returned by the query.

*Sessions and cookies are used to maintain state between requests. Sessions are server-side storage mechanisms that allow you to store data that is specific to a user across multiple requests. Cookies are client-side storage mechanisms that allow you to store data that is specific to a user on their computer.

*To handle sessions in PHP, you can use the `session_start()` function to start a new session or resume an existing one. Once a session has been started, you can store data in the session using the `$_SESSION` superglobal array.

*To handle cookies in PHP, you can use the `setcookie()` function to set a cookie with a name, value, and expiration time. You can then retrieve the value of the cookie using the `$_COOKIE` superglobal array.

 */
?>