<?php


$array1 = array(
    [
        'id' => 1,
        'name' => 'sohel',
        'age' => 10,
        'roll' => '1111',
        'dept' => 'eee'
    ],
    [
        'id' => 2,
        'name' => 'rana',
        'age' => 20,
        'roll' => '0741',
        'dept' => 'cse'
    ],
    [
        'id' => 3,
        'name' => 'tipu',
        'age' => 30,
        'roll' => '1111',
        'dept' => 'bba'
    ],
    [
        'id' => 4,
        'name' => 'name4',
        'age' => 40,
        'roll' => '4444',
        'dept' => 'eng'
    ],
    [
        'id' => 5,
        'name' => 'name5',
        'age' => 50,
        'roll' => '1111',
        'dept' => 'civil'
    ],
    [
        'id' => 6,
        'name' => 'name6',
        'age' => 60,
        'roll' => '6666',
        'dept' => 'mt'
    ]
);



$array2 = [
    [
        'sl' => 1,
        'address' => 'dhaka',
        'phone' => 001
    ],
    [
        'sl' => 2,
        'address' => 'barisal',
        'phone' => 002
    ],
    [
        'sl' => 3,
        'address' => 'khulna',
        'phone' => 003
    ]
];


$key2 = 0;
foreach ($array1 as $key1 => $value1) {
    $addressOfArray1 = '';
    $rollOfArray1 = $array1[$key1]['roll'];
    if ($rollOfArray1 == '1111') {
        foreach ($array2 as $value2) {
            // if undefined array key of array2, index will be empty array
            $addressOfArray1 = $array2[$key2]['address'] ?? [];
        }
        $key2++;
    }
    $array1[$key1]['address'] = $addressOfArray1;
}

var_dump($array1);
die;