<?php

session_start();
$_SESSION['name'] = "Raviteja";
$_SESSION['branch'] = "CSE";

echo "Session variables are set.";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <a href="access-session.php">Check here!</a>
</body>
</html>