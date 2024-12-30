<?php

$file = 'extras/users.txt';

if(file_exists($file)) {
    // echo readfile($file);
    $handle = fopen($file, 'r');
    $contents = fread($handle, filesize($file));
    fclose($handle);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'Brad' . PHP_EOL . 'Ben' . PHP_EOL . 'Jill' . PHP_EOL . 'Jack';
    fwrite($handle, $contents);
    fclose($handle);
}