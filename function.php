<?php

function getSalary($tax, $bonus = 0)
{
  $baseSalary = 1000;
  $totalSalary = ($baseSalary - $tax) + $bonus;
  echo $totalSalary . "<br>";
  return $totalSalary;
}

function getOvertime($totalOvertime, $totalSalary)
{
  $total = $totalSalary + ($totalOvertime * 100);
  echo "total keseluruhan adalah $total";
}

// execute
// $tax = 100;
// $myBonus = 500;
// $totalSalary = getSalary($tax, $myBonus);
getOvertime($_POST['overtime'], $_POST['salary']);
