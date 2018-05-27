<?php
//Printf

printf("My name is %s. I'm %d years old... or %x in hex.<br>", 'Shane', 28, 28);
printf("One month is %15.7f years.<br>", 1/12);
$h = "Voldemort";

printf("[%s]<br>",     $h);
printf("[%12s]<br>",   $h);
printf("[%'.12s]<br><br>", $h);

// time()

echo "<br>" . time() . "<br><br>";

// date()

echo "Today is " . date("l") . ".<br>";
echo "Today is day " . date("w")  . " of the week.<br>";
echo "The month is " . date("F") . ".<br>";
echo date("L") ? "It's a leap year." : "It's not a leap year.<br>";
echo "Here's the cookie date: " . date(DATE_COOKIE) . "<br>";

echo checkdate(13,13,2013) ? "13/13/2013 is a valid date.<br>" : "13/13/2013 isn't a valid date.<br>";
echo checkdate(12,25,2018) ? "12/25/2018 is a valid date.<br>" : "12/25/2018 isn't a valid date.<br.";
// file_exists()

if(file_exists("simplesyntax.php")) 
  {
  echo "simplesyntax.php exists. <br>";
  }

echo file_exists("simplesyntax.php") ? "Yes, it does exist!" : "Nope!";

?>
