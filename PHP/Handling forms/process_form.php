<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data using $_POST superglobal
    $username = $_POST["username"];
    $email = $_POST["email"];

    // Validate and process the data (e.g., saving to a database, sending emails, etc.)
    // Your validation and processing logic here...

    // Example: Saving the data to a text file
    $data = "Username: " . $username . "\n" . "Email: " . $email . "\n";
    file_put_contents("form_data.txt", $data, FILE_APPEND);

    // Redirect the user to a thank you page or display a success message
    header("Location: thank_you_page.php");
    exit();
}
