<?php

$directory = "./"; // Replace "./" with the path to your target directory (e.g., "/path/to/directory/")

// Open the directory handle
$dirHandle = opendir($directory);

// Loop through the directory entries using a while loop
while (($file = readdir($dirHandle)) !== false) {
    // Skip the current directory (.) and parent directory (..)
    if ($file === '.' || $file === '..') {
        continue;
    }

    // Display the file name
    echo $file . "<br>";
}

// Close the directory handle
closedir($dirHandle);

?>