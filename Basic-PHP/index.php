<?php

// This PHP file contains basic syntax practice

// Simple variable assignment and output

  $userName = "Hugh Thompson, Jr";
  echo "Have you heard of ";
  echo $userName;
  echo "?<br><br>";	

// Simple arithmetic

  $birthYear = 1943;
  $currentYear = 2018;
  $age = $currentYear - $birthYear;
  echo $userName;
  echo " would be ";
  echo $age;
  echo " this year.<br><br>";

// Simple array

  $crewNames = array('Hugh Thompson Jr.','Larry Colburn','Glenn Andreotta');
  echo $crewNames[0];
  echo " and his crewmates, ";
  echo $crewNames[1];
  echo " and ";
  echo $crewNames[2];
  echo ", intervened during the My Lai massacre in Vietnam.<br><br>";

// Two-dimensional array

  $jerks = array(array("Stupid","Douchey"),
		 array(" Idiots"," Jerks"));

  echo $jerks[0][1];
  echo $jerks[1][0];
  echo " and ";
  echo $jerks[0][0];
  echo $jerks[1][1];
  echo " attacked him in Congress and sent him death threats.<br><br>";

// Modulus

  $remainder = $currentYear%2006;
  echo "It has been ";
  echo $remainder;
  echo " years since ";
  echo $crewNames[0];
  echo " died.<br><br>";

// String concatenation

 echo "Unfortunately, " . $jerks[0][1] . $jerks[1][0] . " and " . $jerks[0][0] . $jerks[1][1] . " are still going strong.<br><br>";

// Basic Function

  function simpleFunction()
    {
      echo "Hugh Thompson recieved the Soldier's Medal in 1998. <br><br>";
    }

  simpleFunction();	

// Strings

$string = "String";

echo 'This is a literal $string <br><br>';
echo "This is a $string with substitution.<br><br>";

// Escaping characters

echo "Hey, did you say \"Escape those quotation marks?\" Because I did.<br><br>"; 

// Multine string assignment

$quote = <<<_end
When the going gets weird, the wierd turn pro.
<br>
--Hunter S. Thompson
_end;

echo $quote; 

?>
