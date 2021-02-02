<?php

// for ($i = 1; $i <= 5; $i++) {
//   echo "INI FOR PERTAMA $i <br>";
//   for ($j = 1; $j <= 5; $j++) {
//     echo "INI FOR KEDUA $j <br>";
//   }
// }
// 12

// $x = 1;
// while ($x > 10) {
//   echo $x;
//   $x++;
// }

// do {
//   echo $x;
//   $x++;
// } while ($x > 10);

$array = ['budi', 'anto', 'bobo', 'jaja', 'haha'];

// for ($i = 0; $i <= 5; $i++) {
//   echo $array[$i];
// }

foreach ($array as $key => $value) {
  return "Mr $value";
}

print_r($array);
