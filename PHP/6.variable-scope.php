<?php
/*
three types of scope
1.global
2.local
3.static
*/
$x = 5; // global scope

function globally()
{
    // using x inside this function will generate an error
    echo "<p>Variable x inside function globally is: ",/*$x,*/"</p>";
}
globally();

echo "<p>Variable x outside function globally is: $x</p>";

function local()
{
    $x = 5; // local scope
    echo "<p>Variable x inside function local is: $x</p>";
}
local();

// using x outside the function will generate an error
echo "<p>Variable x outside function local is: $x</p>";

$x = 5;
$y = 10;

function globalk()
{
    global $x, $y;
    $y = $x + $y;
}

globalk();
echo $y; // outputs 15

function statick()
{
    static $x = 0;
    echo $x;
    $x++;
}

statick();
statick();
statick();
?>