<?php
function mergeSort(array $arr): array
{
    $count = count($arr);
    if ($count <= 1) {
        return $arr;
    }

    $left  = array_slice($arr, 0, (int)($count/2));
    $right = array_slice($arr, (int)($count/2));

    $left = mergeSort($left);
    $right = mergeSort($right);

    return merge($left, $right);
}

function merge(array $left, array $right): array
{
    $ret = array();
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] < $right[0]) {
            $ret[] = array_shift($left);
        } else {
            $ret[] = array_shift($right);
        }
    }

    array_splice($ret, count($ret), 0, $left);
    array_splice($ret, count($ret), 0, $right);

    return $ret;
}

if (!empty($_GET['array'])) {
    //$test_array = array(5,2,1,4,3);
    //$array = array($_GET['array']);
    $array = explode(',', trim($_GET['array']));
    //echo implode(', ', mergeSort($test_array))."\n";
    echo implode(', ', mergeSort($array)) . "\n";
}