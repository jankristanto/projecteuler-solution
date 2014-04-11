<?php 
/* You have to use 64 bits hardware*/
/*$bil = 600851475143;*/
$bil = 123456789;
$newbil = $bil;
$largest = 0;

$counter = 2;
while ($counter * $counter <= $newbil) {
    if ($newbil % $counter == 0) {
        $newbil = $newbil / $counter;
        $largest = $counter;
    } else {
        $counter = ($counter == 2) ? 3 : $counter + 2;
    }
}
if ($newbil > $largest) { // the remainder is a prime number
    $largest = $newbil;
}
echo $largest;
?>