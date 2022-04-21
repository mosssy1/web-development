<?php
  header('Content-Type: text/plain');
  function getGETParameter($parameter) 
  {
    return $_GET[$parameter];
  };
  function checkIdentifier($text) 
  {
    $position = 0;
    $digits = '1234567890';
    $letters = 'qwertyuiopasdfghjklzxcvbnm';
    $flag = true;
    if (empty($text) === false)
    {
      $flag = stripos($letters, $text[0]) === false;
      while ($position < strlen($text)) 
      {
        $flag = stripos($digits . $letters, $text[$position]) === false;
        $position++;
      };
      return $flag;
    }
    else {
      $flag = false;
      return $flag;
    }
  };
  $text = getGETParameter("text");
  if (checkIdentifier($text)) echo "yes";
  else echo "no";