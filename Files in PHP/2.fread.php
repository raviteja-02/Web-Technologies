<?php

$fptr = fopen("fread.txt", "r");

// Read the content of the file using fread function and store it in $content
$content = fread($fptr, filesize("fread.txt"));

// Check if the file pointer is valid
if (!$fptr) {
    echo "Error";
} else {
    // Check if the content contains a period
    if (strpos($content, '.') !== false) {
        // If a period is found, add a line break using the <br> tag
        $content = str_replace('.', '.<br>', $content);
    }

    // Print the content of the file
    echo $content;
}

// Close the file pointer after reading the file
fclose($fptr);

?>