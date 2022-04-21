<?php
  header('Content-Type: text/plain');
  function getGETParameter($parameter) 
  {
    return $_GET[$parameter];
  };
  function checkIdentifier($text) 
  {
    $position = 0;
    $symbols = 'qwertyuiopasdfghjklzxcvbnm1234567890';
    $letters = 'qwertyuiopasdfghjklzxcvbnm';
    $flag = true;
    if (empty($text) === false)
    {
      if (stripos($letters, $text[0]) === false & strlen($text) != 0) $flag = false;
      $position++;
      while ($position < strlen($text)) 
      {
        if (stripos($symbols, $text[$position]) === false) $flag = false;
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