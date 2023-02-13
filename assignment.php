<?php

// 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision.
 
function isEven(int $x):int{

    if($x % 2 == 0){
        echo "{$x} is an even number";
        return true; 
    }else{
        echo "{$x} is an odd number";
        return false;
    }
}

$i = 5;

isEven($i);

echo "\n";
echo "<br>";
echo "\n";

//2. 1+2+3...…….100  Write a loop to calculate the summation of the series

for($i=1; $i<=100; $i++){
    echo "{$i} ";
}

