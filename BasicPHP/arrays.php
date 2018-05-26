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

// Using array() and foreach
 
print_r($evil);
$numbers = array(2,4,8);

echo "<br>";
print_r($numbers);

echo "<br>";
foreach($numbers as $item)
  {
  echo $item * 2 . "<br>";
  }

//is_array()

echo "<br>" . (is_array($evil)) ? "Evil is an array" : "Evil is not an array";

//count()

echo "<br> Count:" . count($evil);

//sort()

echo "<br>";
sort($evil, SORT_NUMERIC);
print_r($evil);

//shuffle()

$breed = array("Maine Coon", "Calico", "Tortie", "American Shorthair", "Norwegian Forest Cat");
echo "<br><br>";
foreach($breed as $q)
  {
  echo "$q<br>";
  }
shuffle($breed);
echo "<br>";
foreach($breed as $q)
  {
  echo "$q<br>";
  }

//explode()

echo "<br>";
$fullName = "Barack H. Obama";
$temp = explode(' ',$fullName);
print_r($temp);

//compact()

echo "<br><br>";
$word1 = "I";
$word2 = "like";
$word3 = "cats";

$sentence = compact('word1', 'word2', 'word3');

print_r($sentence);

?>
