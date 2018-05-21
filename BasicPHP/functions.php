<?php

// Simple string functions

  echo strrev("edcbA") . "<br>";
  echo str_repeat("Wacka ",2) . "<br>";
  echo strtoupper("uppercase") . "<br>";


// Simplest of functions

function output($n1)
  {
    echo $n1;
  }

output("Test.... <br>");

// Nested functions

output(strtoupper("testing.....") . " <br><br>");

// Reverse Sign

function reverseSign ($int1)
{
  if ($int1 != 0)
  {
  $int1 *= -1;
  }
  elseif ($int1 == 0)
  {
  return "Zero doesn't have a sign.";
  }
  return $int1;
}

// Test variables
  
$test1 = 15;
$test2 = -4;
$test3 = 0;

// Format output

function wrapper($int1)
{
  return $int1 . " ==> " . reverseSign($int1) . "<br>";
}


echo wrapper($test1);
echo wrapper($test2);
echo wrapper($test3);
