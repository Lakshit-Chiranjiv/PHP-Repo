<?php 
    //arrays basics
    $nums = [5,2,7,2,4];

    print_r($nums);
    var_dump($nums);

    $names = array('messi','neymar','ronaldo');
    print_r($names);
    var_dump($names);

    //accessing array elements
    echo $names[0];

    //updating array values
    $nums[2] = 6;
    print_r($nums);

    //associative arrays
    $prices = [
        'apple' => 6,
        'orange' => 8,
        'papaya' => 5
    ];

    print_r($prices);
    
    echo $prices['apple'];

    //multidimensional array
    $pattern = [[5,7,3], [9,3,5], [8,8,2]];
    print_r($pattern);

    echo $pattern[2][1];

    //multidimensional associative array
    $people = [
        [
            'name' => 'Lakshit',
            'roll' => 586
        ],
        [
            'name' => 'John',
            'roll' => 700
        ],
        [
            'name' => 'bob',
            'roll' => 663
        ]
    ];

    print_r($people);

    echo $people[0]['name'];

    //json
    $json_obj = json_encode($people);
    echo $json_obj;
?>
