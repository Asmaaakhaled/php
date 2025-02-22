<?php
$array = [1, 2, 3, 4, 5];
$indexToRemove = 2;

array_splice($array, $indexToRemove, 2);
print_r($array);
?>