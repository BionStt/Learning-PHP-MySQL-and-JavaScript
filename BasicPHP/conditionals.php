<?php


// Variable assignments

$bankBalance = 100;
$myName = "Shane";
$age = "29";
$count = 1;


echo "Your current balance is <b>" . $bankBalance . "</b><br><br>";

//If-else

if ($bankBalance > 50)
{
  echo "That's over 50!<br><br>";
}
else
{
  echo "That's not over 50...<br><br>";
}

// Switch

switch($myName)
{
  case "Joe":
    echo "My name is Joe.<br><br>";
    break;
  case "Shane":
    echo "My name is Shane<br><br>";
    break;
  case "Bob":
    echo "My name is Bob<br><br>";
    break;
}

// The ? operator

echo $age >= 21 ? "I can buy beer! Yay!<br><br>" : "I can't buy beer.<br><br>";

$legal = $age <= 20 ? FALSE : TRUE;

echo "Can I buy beer? " . $legal . "<br><br>";

// While loop

while ($count <= 12)
{
  echo $count . " squared is " . pow($count,2) . ". <br>";  
  if ($count == 12)
  {
    echo "Done!<br><br>";
  }
  $count++;
}
  
// For loop

for ($i = 1 ; $i <= 10 ; $i++)
  {
  if ($i == 4)
    {
    echo "The remainder of dividing 32 by " . $i . " is a secret.<br>";
    continue;
    }
  echo "The remainder of dividing 32 by " . $i . " is " . 32 % $i . ".<br>";
  if ($i == 10)
    {
    echo "Done!<br><br>";
    }
  }

?>
