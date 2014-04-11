<?php 
$upperLimit = 10001;
$counter = 1;
$isPrime = false;
$j = 0;
$primes = array(2);
while(count($primes) < $upperLimit){
    $counter += 2;
    $j = 0;
    $isPrime = true;
    while ($primes[$j]*$primes[$j] <= $counter) {
        if ($counter % $primes[$j] == 0) {
            $isPrime = $false;
            break;
        }
        $j++;
    }
    if ($isPrime) {
        $primes[] = $counter;
    }
}
echo $primes[10000]; 
?>