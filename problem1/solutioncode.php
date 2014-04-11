<?php 						
function jumlahHabisDibagi($pembagi,$batas){
	return $pembagi*floor($batas/$pembagi)*(floor($batas/$pembagi)+1)/2;
}

$sum = jumlahHabisDibagi(3,999) + jumlahHabisDibagi(5,999) - jumlahHabisDibagi(15,999);
echo $sum;
?>