<?php
$sum = 0;
$squared = 0;
$result = 0;
 
$N = 100;
 
$sum = $N * ($N+1)/ 2;
$squared = ($N * ($N + 1) * (2 * $N + 1)) / 6;
 
$result = $sum * $sum - $squared;
echo $result;
?>