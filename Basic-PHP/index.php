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
  echo " had two crewmates: ";
  echo $crewNames[1];
  echo " and ";
  echo $crewNames[2];
  echo ". The crew intervened during the My Lai massacre in Vietnam.<br><br>";

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
  echo " died.";
	
?>
