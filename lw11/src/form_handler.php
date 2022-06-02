<?php
require_once('functions.php');

// вынести в другой файл
//function writeInFile(string $fileName, string $email, string $name, string $activity, string $agreed): void

$email = strtolower($_POST['email']);

if (!empty($email))
{
    $name = isset($_POST['name']) ? $_POST['name'] : null;
    $agreed = isset($_POST['agreed']) ? $_POST['agreed'] : null;
    $activity = isset($_POST['activity']) ? $_POST['activity'] : null;
    //$fileName = './data/' . $email . '.txt'; // todo не относится к верхнему уровню, можно убрать в writeInFile
    if (!is_dir('data'))
    {
        mkdir('data');
    }
    writeInFile($email, $name, $activity, $agreed);
    if (file_exists('./data/' . $email . '.txt')) {
        $message = 'Успешно записано';
        $status = 200;
    } else {
        $message = 'Упс... Произошла ошибка!';
        $status = 500;
    }
    $response = ['message' => $message, 'status' => $status];
    header('Content-type: application/json');
    echo json_encode($response);
}
else
{
    echo 'Email отсутствует';
}