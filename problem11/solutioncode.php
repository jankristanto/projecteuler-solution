<?php
$file = fopen("input.txt", "r");
$d = array();
$index1 = 0;
while (!feof($file)) {
   $d[$index1] = fgets($file);
   $data[$index1] = explode(' ',$d[$index1]);
   $index1++;
}
fclose($file);

$batas = count($data); 
$max = 0; 
$datamax = array();
$mul = 0;

for($i=0;$i<$batas;$i++){
	for($j=0;$j<$batas;$j++){
		/*left*/
		if($i < $batas - 4){
			$mul = $data[$i][$j] * $data[$i][$j+1] * $data[$i][$j+2] * $data[$i][$j+3];
		if($max < $mul) $max = $mul; 	
		}
		/*down*/
		$mul = $data[$i][$j] * $data[$i+1][$j] * $data[$i+2][$j] * $data[$i+3][$j];
		if($max < $mul) $max = $mul; 
		/*diagonal left*/
		$mul = $data[$i][$j] * $data[$i+1][$j+1] * $data[$i+2][$j+2] * $data[$i+3][$j+3];
		if($max < $mul) $max = $mul; 
		/*diagonal right*/
		$mul = $data[$i][$j] * $data[$i+1][$j-1] * $data[$i+2][$j-2] * $data[$i+3][$j-3];
		if($max < $mul) $max = $mul; 
	}
}
echo $max; 


?>