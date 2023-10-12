<?php
//Bubble sort algorithm 

$arr = array(2, 5, 3, 1, 22, 6, 33, 23, 7, 42);
$temp = 0;

for ($i=0; $i < count($arr) ; $i++) { 
    for ($j=0; $j < count($arr) - 1; $j++) { 
        if ($arr[$j] > $arr[$j + 1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j + 1];
            $arr[$j + 1] = $temp; 
        }
    }
}
echo "<pre>";
print_r($arr);
?>