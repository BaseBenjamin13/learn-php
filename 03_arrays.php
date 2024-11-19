<?php

    //simple 
    $numbers = [1,34,22,34];
    $fruits = array('apple', 'orange', 'pear');

    // var_dump($fruits);
    // echo $fruits[1];
    
    // Associative array
    $colors = [
        1=> 'red',
        2=> 'blue',
    ];
    $hex = [
        'red' => '#f00',
        'blue' => '#0f0',
        'green' => '#00f',
    ];
    $person = [
        'first_name' => 'John',
        'last_name' => 'james',
        'age' => 55,
    ];
    // echo $person['first_name']."\n". $person['age'];
    // echo "${person['first_name']} ${person['age']}";

    $people = [
        [
            'first_name' => 'John',
            'last_name' => 'james',
            'age' => 55,
        ],
        [
            'first_name' => 'billy',
            'last_name' => 'james',
            'age' => 53,
        ],
        [
            'first_name' => 'mack',
            'last_name' => 'james',
            'age' => 48,
        ]
    ];
    // echo $people[2]['first_name'];

    var_dump(json_encode($people));
    // var_dump($people);