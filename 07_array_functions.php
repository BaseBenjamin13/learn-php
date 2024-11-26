<?php

    $fruits = ['apple', 'bear', 'twink'];

    // echo count($fruits);
    // var_dump(in_array('bear', $fruits));

    //Add to array
    $fruits[] = 'grape';
    array_push($fruits,'blueberry', 'strawberry');
    array_unshift($fruits,'mango');
    
    //Remove from array
    array_pop($fruits);
    array_shift($fruits);
    // unset($fruits[3]);

    // split into 2 chunks
    // $chunked_array = array_chunk($fruits,2);

    // print_r($chunked_array);

    // print_r($fruits);

    $arr1 = [1,2,3];
    $arr2 = [4,5,6];
    $arr3 = array_merge($arr1,$arr2);
    $arr4 = [...$arr1, ...$arr2];

    // print_r($arr4);

    $a = ['green', 'yellow', 'orange', 'red'];
    $b = ['fake', 'ye', 'ban', 'apple'];

    $c = array_combine($a, $b);
    // print_r($c);
    $keys = array_keys($c);
    // print_r($keys);
    //flips keys to values
    $flipped = array_flip($c);
    // print_r($flipped);

    $numbers = range(0,20);

    // print_r($numbers);

    $newNumbers = array_map(function($number){
        if($number % 2 == 0) return "Number ${number}";
    }, $numbers);

    // print_r($newNumbers);

    $lessThen10 = array_filter($numbers, fn($number) => $number < 10);
    // print_r($lessThen10);

    // $sum = array_sum($numbers);
    // print_r($sum); 
    $sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
    print_r($sum); 