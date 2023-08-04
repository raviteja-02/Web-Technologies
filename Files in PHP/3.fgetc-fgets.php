<?php

$fptr = fopen("fgetc.txt", "r");

$content = fgetc($fptr);
while($content != false)
{
    echo $content;
    $content = fgetc($fptr);
}

echo "<br><br>";

$fptr1 = fopen("fgets.txt", "r");

$content1 = fgets($fptr1);

while($content1 != false)
{
    echo $content1;
    $content1 = fgets($fptr1);
}

fclose($fptr);
fclose($fptr1);

?>