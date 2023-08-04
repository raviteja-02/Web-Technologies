# Introduction to PHP

This repository provides a beginner's guide to PHP, covering the fundamental concepts necessary to get started with server-side web development. PHP is a popular programming language for web development, known for its ease of use and ability to interact with databases.

## Table of Contents

- [Declaring Variables and Data Types](#declaring-variables-and-data-types)
- [Arrays](#arrays)
- [Strings](#strings)
- [Operators and Expressions](#operators-and-expressions)
- [Control Structures](#control-structures)
- [Functions](#functions)
- [Reading Data from Web Form Controls](#reading-data-from-web-form-controls)
- [Handling File Uploads](#handling-file-uploads)
- [Connecting to Database (MySQL as Reference)](#connecting-to-database-mysql-as-reference)
- [Handling Sessions and Cookies](#handling-sessions-and-cookies)

## Declaring Variables and Data Types

In PHP, you can declare variables using the `$` sign followed by the variable name. PHP is loosely typed, meaning you don't need to explicitly declare the data type. Here's an example:

```php
<?php
$name = "John Doe"; // String
$age = 25; // Integer
$average_score = 85.5; // Float
$is_active = true; // Boolean
?>
```

## Arrays

Arrays in PHP can hold multiple values of different data types. They can be indexed or associative. Here's an example of both types:

```php
<?php
// Indexed array
$colors = array("Red", "Green", "Blue");

// Associative array
$person = array("name" => "John Doe", "age" => 25, "email" => "john@example.com");
?>
```

## Strings

Strings are sequences of characters enclosed in single or double quotes. PHP provides various functions to manipulate strings:

```php
<?php
$name = "Alice";
$greeting = "Hello, $name!"; // Interpolation

// String concatenation
$first_name = "John";
$last_name = "Doe";
$full_name = $first_name . " " . $last_name;
?>
```

## Operators and Expressions

PHP supports various arithmetic, comparison, logical, and assignment operators to perform operations on variables:

```php
<?php
$a = 10;
$b = 5;

// Arithmetic operators
$sum = $a + $b;
$difference = $a - $b;
$product = $a * $b;
$quotient = $a / $b;

// Comparison operators
$is_equal = ($a == $b);
$is_greater = ($a > $b);

// Logical operators
$and_result = ($a < 15 && $b > 3);
$or_result = ($a > 12 || $b < 2);

// Assignment operators
$a += 3; // Equivalent to $a = $a + 3;
?>
```

## Control Structures

PHP provides control structures like `if`, `else`, `for`, `while`, `switch`, etc., to control the flow of execution:

```php
<?php
$age = 18;

// If-else statement
if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}

// For loop
for ($i = 1; $i <= 5; $i++) {
    echo $i;
}

// While loop
$i = 1;
while ($i <= 5) {
    echo $i;
    $i++;
}

// Switch statement
$day = "Monday";
switch ($day) {
    case "Monday":
        echo "Start of the week.";
        break;
    case "Friday":
        echo "End of the week.";
        break;
    default:
        echo "Some other day.";
}
?>
```

## Functions

Functions in PHP allow you to encapsulate code into reusable blocks:

```php
<?php
// Function declaration
function greet($name) {
    return "Hello, $name!";
}

// Function call
$message = greet("Alice");
?>
```

## Reading Data from Web Form Controls

PHP can read data submitted via web form controls such as text boxes, radio buttons, lists, etc., using the `$_POST` or `$_GET` superglobals:

```php
<?php
// Assuming a form with a text box and a submit button
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_input = $_POST["text_input"];
    // Process the user input here
}
?>
```

## Handling File Uploads

To handle file uploads in PHP, you can use the `$_FILES` superglobal. Ensure that the form has `enctype="multipart/form-data"` attribute:

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $file_name = $_FILES["file_input"]["name"];
    $file_tmp = $_FILES["file_input"]["tmp_name"];
    // Process the uploaded file here
}
?>
```

## Connecting to Database (MySQL as Reference)

To connect to a MySQL database from PHP, you can use the `mysqli` or `PDO` extension. Here's a brief example using `mysqli`:

```php
<?php
$host = "localhost";
$user = "username";
$pass = "password";
$db_name = "database";

// Create a connection
$conn = new mysqli($host, $user, $pass, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute a simple query
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

// Handling results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row["username"];
    }
}

// Close the connection
$conn->close();
?>
```

## Handling Sessions and Cookies

PHP provides built-in mechanisms to handle sessions and cookies for managing user data across requests:

```php
<?php
// Starting a session
session_start();

// Setting session variables
$_SESSION["user_id"] = 123;
$_SESSION["username"] = "john_doe";

// Reading session variables
$user_id = $_SESSION["user_id"];

// Setting cookies
$expiry_time = time() + 3600; // 1 hour from now
setcookie("username", "john_doe", $expiry_time);

// Reading cookies
$username = $_COOKIE["username"];
?>
```

Remember to properly sanitize user inputs and use prepared statements to prevent SQL injection when dealing with databases. Also, consider using password hashing and other security measures for sensitive data.

---

Feel free to contribute to this guide by opening issues or pull requests! Happy coding!
