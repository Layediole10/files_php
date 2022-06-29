<?php

$fdecimal = fopen("decimal.txt", "r");
$fbinaire = fopen("binaire.txt", "r+");


while(! feof($fdecimal)) {
  $line = fgets($fdecimal);
  $convert = base_convert($line,10,2);
  fwrite($fbinaire, $convert."\n");
//   fwrite($fbinaire, "\n");
  
}
// echo $line;
fclose($fdecimal);

fclose($fbinaire);



?>