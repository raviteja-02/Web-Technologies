<html>
    <head>
        <title>Set Cookie</title>
    </head>
    <body>
        <?php
            setcookie("branch" , "CSE" , time()+3600 , "/");
        ?>
        <h1><a href="access.php">Get Cookie</a></h1>
    </body>
</html>