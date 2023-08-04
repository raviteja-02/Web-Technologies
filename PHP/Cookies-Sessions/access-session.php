<?php

session_start();
$name = $_SESSION['name'];
$branch = $_SESSION['branch'];

echo "Name: $name <br>";
echo "Branch: $branch <br>";


?>