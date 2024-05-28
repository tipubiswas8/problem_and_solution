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
        'sl' => 3,
        'address' => 'barisal',
        'phone' => 003
    ],
    [
        'sl' => 5,
        'address' => 'khulna',
        'phone' => 005
    ]
];


$i = 0;
foreach ($array1 as $key => $a1) {
    $val = '';
    $x = $array1[$key]['roll'];
    if ($x == '1111') {
        foreach ($array2 as $k2 => $a2) {
            $val = $array2[$i]['address'] ?? [];
        }
        $i++;
    }
    $array1[$key]['address'] = $val;
}

var_dump($array1);
die;