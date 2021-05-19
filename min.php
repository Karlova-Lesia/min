<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  function minimum(array $numbers)
  {
    $arrayMinNumbers = [];

    $minFirst = min(array_values($numbers));
    $arrayMinNumbers[] = $minFirst;
    unset($minFirst, $nunbers);
    $numberWithoutFirstMin = array_diff($numbers, $arrayMinNumbers);
    $minSecond = min(array_values($numberWithoutFirstMin));
    $arrayMinNumbers[] = $minSecond;
    
    print_r($arrayMinNumbers);
  }

  $num = [3, -4, 2, 3, -1, 2];
  minimum($num);
