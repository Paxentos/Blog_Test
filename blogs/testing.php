<?php

$arr = array("name" => "Jon", "surname" => "Jona", "age" => "29");
$arr_key=array_keys($arr);
$temp=[];
for($i=count($arr_key)-1; $i>=0; $i--){
    $key = $arr_key[$i];
    $temp[$key] = $arr[$key];
}
$arr=$temp;
//print_r($arr);

/*@@@@@@*/


function findMaxConsecutiveOnes($nums) {
    $maxCount = 0; // Максимальное количество последовательных 1
    $currentCount = 0; // Текущее количество последовательных 1

    foreach ($nums as $num) {
        if ($num == 1) {
            $currentCount++; // Увеличиваем текущее количество
        } else {
            $maxCount = max($maxCount, $currentCount); // Обновляем максимальное количество
            $currentCount = 0; // Сбрасываем текущее количество
        }
    }

    // Проверяем максимальное количество после завершения цикла
    $maxCount = max($maxCount, $currentCount);

    return $maxCount;
}

$nums = [1, 1, 0, 1, 1, 1];
$result = findMaxConsecutiveOnes($nums);
echo "Максимальное количество последовательных 1: " . $result;