<?php

readfile("readfile.txt");

echo "<br>";

$read = readfile("readfile.txt");
if(!$read){
    echo "Error";
} else {
    echo $read;
    // here number is displayed because readfile() returns the number of bytes read from the file.
}

?>