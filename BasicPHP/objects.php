<?php

class User
{
  public $userName, $birthDay;
  private $password = "Password";
  function checkUser()
    {
      echo "Checking user..."; 
      return $this->userName;
    }
}

$object = new User;
print_r($object);

$object->userName = "Shane";
$object->birthday = "Oct 14";
echo "<br>";
echo $object->checkUser();


echo "<br>";
print_r($object);

$object2 = clone $object;

echo "<br>";

$object2->userName = "Joey";
print_r($object2);

?>
