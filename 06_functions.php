<?php

function registerUser($email) {
    echo 'Register User ' . $email;
}

// registerUser('benmorgiewicz@gmail.com');

function sum ($n1 = 3, $n2 = 1) {
    return $n1 + $n2;
}
// function sum ($n1, $n2) {
//     return $n1 + $n2;
// }

$number = sum();
// echo $number;

$subtract = function ($n1, $n2) {
    return $n1 - $n2;
};

// echo $subtract(5,2);

$multiply = fn($n1, $n2)=> $n1 * $n2;

echo $multiply(3,6);