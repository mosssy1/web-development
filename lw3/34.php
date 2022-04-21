<?php
createFiles();
function createFiles()
{
    $directory = "data/";
    if ((file_exists($directory)))
    {
        $directory = $directory . $_GET['email'] . '.txt';
        $information = fopen($directory, 'w');
        fwrite($information, 'Имя: ' . $_GET['first_name'] . "\n");
        fwrite($information, 'Фамилия: '. $_GET['last_name'] . "\n");
        fwrite($information, 'email: ' . $_GET['email'] . "\n");
        fwrite($information, 'Возраст: ' . $_GET['age'] . "\n");
        fclose($information);
    }
    else
    {
        $directory = $directory . $_GET['email'] . '.txt';
        $information = fopen($directory, 'w');
        ftruncate($information, 0);
        fwrite($information, 'Имя: ' . $_GET['first_name'] . "\n");
        fwrite($information, 'Фамилия: ' . $_GET['last_name'] . "\n");
        fwrite($information, 'email: ' . $_GET['email'] . "\n");
        fwrite($information, 'Возраст: ' . $_GET['age'] . "\n");
        fclose($information); 
    }  
}