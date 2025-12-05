<?php
$fizz = "fizz";
$bazz = "bazz";
$fizzbazz = "fizzbazz";

for ($i = 1; $i <= 50; $i++)
    if($i % 15 == 0){
        echo $fizzbazz;
    }
    elseif($i % 5 == 0){
        echo $bazz;
    }
    elseif($i % 3 == 0){
        echo $fizz;
    }
    else        {
        echo $i;
    }