<?php


// Variable assignments

$bankBalance = 100;
$myName = "Shane";
$age = "29";

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


?>
