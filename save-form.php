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
    var_dump ($array);
    $file = fopen($path, 'w');
    //pass all the form values
    $array[] = array($_POST['name'], $_POST['guest'], $_POST['message']);
    foreach ($array as $row) {
        fputcsv($file, $row);
    }
    fclose($file); 
    exit();
?>