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
    $file = fopen($path, 'w');
    //pass all the form values
    $array[] = array($_POST['name'], $_POST['side'], $_POST['guest'], $_POST['message'], $_POST['yes-no']);
    foreach ($array as $row) {
        fputcsv($file, $row);
    }
    fclose($file); 
    exit();
?>