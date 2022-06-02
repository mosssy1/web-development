<?php

function writeInFile(string $email, ?string $name, ?string $activity, ?string $agreed): void
{   
    $fileName = './data/' . $email . '.txt'; 
    $file = fopen($fileName, 'w');
    fwrite($file, 'Email: ' . $email . PHP_EOL);
    fwrite($file, 'Имя: ' . $name . PHP_EOL);
    fwrite($file, 'Деятельность: ' . $activity . PHP_EOL);
    fwrite($file, 'Согласие: ' . $agreed . PHP_EOL);
    fclose($file);
}