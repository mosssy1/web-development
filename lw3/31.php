<?php
  header("Content-Type: text/plain");
  function getGETParameter($parameter) 
  {
    return $_GET[$parameter];
  };
  $str = getGETParameter("text");
  $position = 0;
  if (strlen($str) != 0)
  {
    while ($position < strlen($str) & $str[$position] == " ") $position++;
    while ($position < strlen($str)) 
    {
      if ($str[$position] != " ") 
      {
        echo $str[$position];
        $position++;
      } 
      else 
      {
        while ($str[$position] == " "  & $position < strlen($str)) $position++;
        if ($position != strlen($str)) echo " " ;
      };
    };
    echo "#";
  }
  else 
  {
    echo "#";
  }