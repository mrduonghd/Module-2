<?php
function binarySearch($arr,$number){
    $left = 0 ;
    $right = count($arr)-1;

    while($left <= $right){
        $mid = ($left + $right)/2;
        if($arr[$mid] > $number){
            $right = $mid -1 ;
        }else if($arr[$mid] < $number){
            $left = $mid +1;
        }else{
            return true;
        }
    }
    return false;
}

$arr1 = [1,3,5,7,9,11,15,17,19];
if(binarySearch($arr1,5)){
    echo "found";
}else {
    echo "not found";
}

