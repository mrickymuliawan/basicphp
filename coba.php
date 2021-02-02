<?php

$age = 10;

$total = $age + 100;

$total += 20;
// echo $total;

$array = (object) [
  'age' => 30,
  'name' => 'budi'
];

$array = (array) $array;

$response = (object) [
  'subResponse' => (object) [
    'age' => 30,
    'name' => 'budi'
  ]
];

echo $response->subResponse->age;

// $array = ['number' => 1, 'angka' => 2];

// $name = "halo $age $array[number]";
// $name = $name . 'tambahan';

// echo $name;
