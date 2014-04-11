<?php
function gcd($a,$b) {
    while (($c = $a % $b) != 0) {
        $a = $b;
        $b = $c;
    }
    return $b;
}

$a =0;$b=0; $c=0;
$s = 1000;
$m=0;$n=0;
$mlimit = (int) sqrt($s / 2);
for ($m = 2; $m <=$mlimit; $m++) {
    for ($n = 3; $n <=$mlimit; $n++) {
        if(2*$m *($m + $n) == 1000 ){
            $a = pow($m,2) - pow($n,2);
            $b = 2 * $m *$n;
            $c = pow($m,2) + pow($n,2);
        }
    }
}

echo $a." ".$b." ".$c." ".$a*$b*$c;
?>