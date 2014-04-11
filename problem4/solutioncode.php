<?php 

function checkPalindrome($numb){
	return (intval(strrev((string) $numb)) == $numb);
} 
$max = 0;
for($i = 999; $i > 900; $i--){
	for($j = 999; $j > 900; $j--){
		if(checkPalindrome($i*$j)){
			if($max < $i*$j)$max =$i*$j; 
		}
	}
}
echo $max;
?>