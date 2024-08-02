<?php


$string = "This is an    example string";
/* Use tab and newline as tokenizing characters as well  */
$tok = strtok($string, " ");

while ($tok !== false) {
    echo "$tok<br />";
    $tok = strtok(".");
}
