<?php
// TapeEquilibrium function compatible with Codility.com 
// write your code in PHP7.0

function solution($A) {
    $len = count($A);
    if ($len == 2) return (int)abs($A[0] - $A[1]);
    $part_left = (float)$A[0];
    $part_right = (float)array_sum($A) - $part_left;
    $min = abs($part_left - $part_right);
    for ($i = 1; $i < $len - 1; $i++) {
	$part_left += (float)$A[$i];
	$part_right -= (float)$A[$i];
	$abs = abs($part_left - $part_right);
	if ($abs == 0) return 0;
	if ($abs < $min) $min = $abs;
    }
    return (int)$min;    
}

$A = [3,1,2,4,3]; // 1
$A2 = [-7,1,-6]; // 0

echo solution($A2);
