<?php 
  header('Content-Type: text/plain');
  
  $password = getGETParameter('password');
  $reliability = 0;
  if ($password !== null) 
  {
    $reliability = 4 * strlen($password);
	$uppersAmount = 0;
	$lowersAmount = 0;
	$numbersAmount = 0;
	$rePassword = "";
	for ($i = 0; $i < strlen($password); $i++) 
	{ 
      if (is_numeric($password[$i])) 
	  {
      $reliability += 4;
      $numbersAmount++;
	  }
	  if (ctype_upper($password[$i])) 
	  {
	  	$uppersAmount += 1;
	  }
	  if (ctype_lower($password[$i])) 
	  {
		  $lowersAmount += 1;
	  }
	  
	  if (stripos($rePassword, $password[$i]) === false)
	  {
		  $rePassword = $rePassword.$password[$i];
	  }
	}
	
	$reAmount = 0;
	for ($i = 0; $i < strlen($rePassword); $i++) 
	{
		if (substr_count($password, $rePassword[$i]) > 1) 
		{
			$reAmount += substr_count($password, $rePassword[$i]);
		}
	}
	
	$reliability -= $reAmount;
    $lettersAmount = $lowersAmount + $uppersAmount;
	
    if ($lettersAmount == 0 & $numbersAmount != 0)
    {
      $reliability -= strlen($password);
    }
	
    if ($lettersAmount != 0 & $numbersAmount == 0)
    {
      $reliability -= strlen($password);
    }
	if ($lowersAmount != 0) 
    {
      $reliability += (strlen($password) - $lowersAmount) * 2;
    }
    if ($uppersAmount != 0) 
    {
      $reliability += (strlen($password) - $uppersAmount) * 2;
    }
  }
  
  echo $reliability;
  
  function getGETParameter($parameter): ?string 
  {
    return isset($_GET[$parameter]) ? $_GET[$parameter] : null;
  }