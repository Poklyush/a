<?php
function countCon($array, $n)
{
    $cnt = 0;
    for ($i = 0; $i < $n - 1; $i++)
    {
        if ($array[$i] == $array[$i - 1])
            $cnt++;
    }
    return $cnt;
}
$array = array(1,2,2,3,4,4,5,5,5,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30);
$n = sizeof($array);
echo countCon($array, $n);