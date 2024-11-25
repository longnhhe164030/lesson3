<?php
require_once 'StopWatch.php';
    function selectionSort(array &$arr){
        $n = count($arr);
        for($i = 0 ; $i<$n-1; $i++){
            $minIndex = $i;
            for($j = $i+1 ; $j <$n;$j++){
                if ($arr[$j] < $arr[$minIndex]) {
                    $minIndex = $j;
                }
            }
            $temp = $arr[$minIndex];
            $arr[$minIndex] = $arr[$i];
            $arr[$i] = $temp;
        }
    }

    $numbers = [];
for ($i = 0; $i < 100000; $i++) {
    $numbers[] = rand(1, 1000); 
}
$stopWatch = new stopWatch();
$stopWatch->start();
selectionSort($numbers);
$stopWatch->stop();
echo "Thời gian thực thi thuật toán Selection Sort: " . $stopWatch->getElapsedTime() . " milliseconds.";
?>