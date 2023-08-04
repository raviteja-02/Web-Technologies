<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST["username"]) ? $_POST["username"] : '';
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : '';
    $hobbies = isset($_POST["hobbies"]) ? $_POST["hobbies"] : [];
    $country = isset($_POST["country"]) ? $_POST["country"] : '';
    
    // Process the uploaded file (if any)
    if (isset($_FILES['file_upload'])) {
        $file_name = $_FILES['file_upload']['name'];
        $file_type = $_FILES['file_upload']['type'];
        $file_size = $_FILES['file_upload']['size'];
        $file_tmp = $_FILES['file_upload']['tmp_name'];
        // Here, you can save the file or perform other operations
        $data = "Username: " . $username . "\n" . "Gender: " . $gender . "\n" . "Hobbies: " . implode(", ", $hobbies) . "\n" . "Country: " . $country . "\n" . "Uploaded File: " . $file_name . "\n" . "File Type: " . $file_type . "\n" . "File Size: " . $file_size . " bytes\n\n";
        file_put_contents("form_data.txt", $data, FILE_APPEND);
    }
}

// Display submitted data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Submitted Data:</h2>";
    echo "Username: " . htmlspecialchars($username) . "<br>";
    echo "Gender: " . htmlspecialchars($gender) . "<br>";
    echo "Hobbies: " . implode(", ", $hobbies) . "<br>";
    echo "Country: " . htmlspecialchars($country) . "<br>";

    if (isset($file_name)) {
        echo "Uploaded File: " . htmlspecialchars($file_name) . "<br>";
        echo "File Type: " . htmlspecialchars($file_type) . "<br>";
        echo "File Size: " . htmlspecialchars($file_size) . " bytes<br>";
        // You can display other file information as needed
    }
}
