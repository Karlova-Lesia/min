<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  function minimum(array $numbers): array
  {
    $arrayMinNumbers = [];

    $minFirst = min(array_values($numbers));
    $arrayMinNumbers[] = $minFirst;
    $numberWithoutFirstMin = array_diff($numbers, $arrayMinNumbers);
    $minSecond = min(array_values($numberWithoutFirstMin));
    $arrayMinNumbers[] = $minSecond;

    return $arrayMinNumbers;
  }

  $num = [3, -4, 2, 3, -1, 2];
  print_r(minimum($num));
