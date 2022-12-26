<?php
    $path = './myexcel.csv';
    $rows = [];
    $handle = fopen($path, "r");
    while (($row = fgetcsv($handle)) !== false) {
        $rows[] = $row;
    }
    fclose($handle);
    $array = [];
    foreach ($rows as $row) {
        $array[] =  $row;
    }
    var_dump($array);
    return $array;
    exit();
?>