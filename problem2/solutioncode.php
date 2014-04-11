<?php 
$fib = array(2,0);
$i = 0;
$sum = 0;
 
while ($fib[$i] < 4000000) {
    $sum += $fib[$i];
    $i = ($i + 1) % 2;
    $fib[$i] = 4 * $fib[($i + 1) % 2] + $fib[$i];
}

echo $sum;
?>
