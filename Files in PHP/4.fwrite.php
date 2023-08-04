<?php

// Initial write to the file
$fptr = fopen("fwrite.txt", "w");
fwrite($fptr, "This is the fwrite(file pointer, string) function.");
fclose($fptr);

// Append to the file
$fptr = fopen("fwrite.txt", "a");
fwrite($fptr, "\nIt is used to write in a file.");
fclose($fptr);

// Read and display the initial content
$read = fopen("fwrite.txt", "r");
$content = fread($read, filesize("fwrite.txt"));

if (!$read) {
    echo "Error";
} else {
    echo $content;
}
fclose($read);

echo "<br>";

// Read and display the updated content
$read = fopen("fwrite.txt", "r");
$content = fread($read, filesize("fwrite.txt"));

if (!$read) {
    echo "Error";
} else {
    echo $content;
}
fclose($read);

?>