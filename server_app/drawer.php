<?php
$number = $_GET['num'];
$x = $number << 8;
$y = $number << 5;
$d = $number << 1;
$color="blue";
if ($number % 4 == 1) {
    $color = "green";
}
elseif ($number % 4 == 2) {
    $color = "red";
}
elseif ($number % 4 == 3) {
    $color = "yellow";
}
if ($number % 2 == 1) {
    echo "<svg viewBox='0 0 200 200' style='background-color: {$color}; width: {$x}; height: {$y}' />";
} else {
    echo "<svg viewBox='0 0 200 200'><circle cx='{$d}' cy='{$d}' r='{$d}' style='fill: {$color}';/></svg>";
}