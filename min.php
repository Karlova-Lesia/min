<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  function minimum(array $numbers): array
  {
    $arrayMinNumbers = [];

    foreach ($numbers as $key => $value) {
      $minFirst = min(array_values($numbers));
      $arrayMinNumbers[] = $minFirst;
      $minFirstKey = array_search($minFirst, $numbers);
      unset($numbers[$minFirstKey]);
      $minSecond = min(array_values($numbers));
      $arrayMinNumbers[] = $minSecond;

      return $arrayMinNumbers;
    }
  }

  $num = [3, -4, 2, 3, -1, 2];
  var_dump(minimum($num));
