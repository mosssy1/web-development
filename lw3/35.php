<?php
writeInformation();
function writeInformation()
{
    $directory = "data/";
    $email = $directory . $_GET['email'] . '.txt';
    if(file_exists($email))
    {
        $data = fopen($email, 'r');
        readfile($email);
        
    }
    else
    {
        echo 'error ';
    }
}