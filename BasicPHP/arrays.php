<?php

// Adding items to an array

$names[] = "Shane";
$names[] = "Ashley";
$names[] = "The Mueller";

print_r($names);

echo "<br>";

for ($i = 0 ; $i < 3 ; $i++)
  {
  echo "$i: $names[$i]<br>";
  }

// Associative arrays

  $evil['Trump']   = TRUE;
  $evil['Mueller'] = FALSE;
  $evil['Pence']   = TRUE;
  $evil['Cosby']   = TRUE;

echo "<br>";
 
print_r($evil);

?>
