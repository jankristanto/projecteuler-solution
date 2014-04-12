<?php 

/* Un = a + (n-1)b*/
/* Sn = n/2 * (a+Un) */
/* Sn = n/2(2*a+(n-1)b)*/
/* a =1 b=1 */
/* Un = n */
/* Sn = n/2 *(1+n) */

function triangleNumber($n){
	return ($n/2) * (1+$n); 
}

function NumberOfDivisors($number) {
    $nod = 0;
    $sqrt = floor(sqrt($number));
 
    for($i = 1; $i<= $sqrt; $i++){
        if($number % $i == 0){
            $nod += 2;
        }
    }
    //Correction if the number is a perfect square
    if ($sqrt * $sqrt == $number) {
        $nod--;
    }
 
    return $nod;
}

$number = 0;
$i = 1;
 
while(NumberOfDivisors($number) < 500){
    $number += $i;
    $i++;
}
echo $number;
?>