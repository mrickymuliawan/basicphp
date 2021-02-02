<?php
$price = 500;
$quantity = 5;
$totalAmount = $price * $quantity;
$productName = 'celana';

if ($totalAmount > 2000 && $productName == 'baju') {
  $totalAmount -= 500;
} else if ($totalAmount > 2000 && $productName == 'celana') {
  $totalAmount -= 300;
} else if ($totalAmount > 2000) {
  $totalAmount -= 100;
} else {
  $totalAmount -= 50;
}

if ($productName == 'baju') {
  echo "total baju kamu= " . $totalAmount;
} else if ($productName == 'celana') {
  echo "total celana kamu= " . $totalAmount;
} else {
  echo "total kamu= " . $totalAmount;
}

switch ($productName) {
  case 'baju':
    echo "total baju kamu= " . $totalAmount;
    break;
  case 'celana':
    echo "total celana kamu= " . $totalAmount;
    break;
  default:
    echo "total kamu= " . $totalAmount;
    break;
}
