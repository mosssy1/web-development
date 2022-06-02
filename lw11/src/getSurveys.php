<?php
function getFileSubstring(?string $fileString): ?string
{
    return (trim(substr($fileString, strpos($fileString, ':') + 1)));
}

if (!file_exists("./data"))
{
    mkdir("./data");
}

$arrayFile = scandir("./data"); // may be needs delete . and ..
$out =[];

array_shift($arrayFile);
array_shift($arrayFile);

foreach($arrayFile as $path) {



    $file = fopen("./data/" . $path, "r");
    $name = getFileSubstring(fgets($file));
    $email = getFileSubstring(fgets($file));
    $activity = getFileSubstring(fgets($file));
    $agreement = getFileSubstring(fgets($file));
    fclose($file);

    $data = array(
        "name" => $name,
        "email" => $email,
        "activity" => $activity,
        "agreement" => $agreement
    );
    array_push($out, $data);
}
echo json_encode($out, JSON_FORCE_OBJECT);