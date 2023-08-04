<?php

$value = 4;
div ($value) or die ("Error: Can't divide by zero");
$value = 0;
div ($value) or die ("Error: Can't divide by zero");

function div ($x) {
    if ($x != 0) {
        echo "$x/2 = " , $x / 2 , "<br>";
        return true;
    }
    else {
        return false;
    }
}

?>