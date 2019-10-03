<?php

/**
 * @param $array
 */
function printArray($array)
{
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

// Generamos 10 codigos finales aleartorios que no se repitan
$codes              = [];
$generate           = 300000;
$charactersLength   = 5;

for ($i = 0; $i < $generate * 2; $i++) {
    $codes[] = strtoupper(substr(md5(rand(0, $generate * 2)), 0, $charactersLength));
}

$codes = array_unique($codes);

$database = explode(',','UK8,9O0,8IE,OF9,9FO,8MJ,889,UK1,9O1,8I1,O19,8M1,UK3,930,3IE,93O,83J,389,202');

$diff = array_diff($codes, $database);

$finalCode = array_slice($diff, 0, $generate);

printArray($finalCode);
