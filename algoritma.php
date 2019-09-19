<?php
$ar = [10,20,20,10,10,30,50,10,20];
$n = 9;
sockMerchant($n,$ar);


// Complete the sockMerchant function below.
function sockMerchant($n, $ar) {
    $grouping = array_count_values($ar);
    $count = 0;
    foreach ($grouping as $value){
        $tmp = $value/2; 
        $count +=floor($tmp);
    }
    return $count;
}

?>
