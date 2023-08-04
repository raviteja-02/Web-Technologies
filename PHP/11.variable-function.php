<?php

$r = "red";
$r();
function red()
{
    echo "Red<br>";
}
$o = "orange";
$o();
function orange()
{
    echo "Orange<br>";
}
$arr = array("r", "o");
print_r($arr);
?>