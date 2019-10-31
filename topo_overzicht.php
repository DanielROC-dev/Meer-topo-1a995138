<?php

$plaatsen = array(
);
echo "> Hoeveel landen ga je toevoegen." . PHP_EOL;
$aantal = readline("> ");
if (is_numeric($aantal)) {
  for ($tell = 1; $tell <= $aantal; $tell++) 
  { 
  echo "> Welk land wil je toevoegen?" . PHP_EOL;
  $land = readline("> ");
  
  echo "> Wat is de hoofdstad van: $land?" . PHP_EOL;
  $hoofdstad = readline("> ");
  
  $plaatsen[$land] = $hoofdstad;
  }      
}
else
{
exit("> '" . $aantal . "' is not a number, try again.");
}
echo "> Dis die ene test neef xd :3" . PHP_EOL . ">" . PHP_EOL;
$goed = array(
);
foreach($plaatsen as $quiz => $answer) {
  echo "> wat is de hoofdstad van: " . $quiz . "?" . PHP_EOL;
  $input = readline("> ");
  if ($input === $answer){
    echo "> correct!" . PHP_EOL;
    $goed[] = $answer;
  }
  else 
  echo "> helaas! '" . $input . "' is niet de hoofdstad van " . $answer . "." .PHP_EOL;
}
$totaal = count($plaatsen);
echo "> je hebt " . count($goed) . " goed van de ". $totaal . PHP_EOL;
$fout = $totaal - count($goed);
echo "> je hebt " . $fout . " fout van de " . $totaal . PHP_EOL;
exit("> boutta head out");
