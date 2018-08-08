<?php

class Hero
{
  protected $name;
  private $age;
  public $address;
  public function __construct($name = "Undefined", $age = 99)
  {
    echo "Start of class<br>";
    $this->name = $name;
    $this->age = $age;
    $this->address = '38 Yen Bai';
  }

  static function displayMyName()
  {
    echo $this->address;
  }

  public function setName($name)
  {
    $this->name = $name;
    return $this;
  }

  public function getName()
  {
    return $this->name;
  }




  public function __destruct()
  {
    echo "<br>End of class";
  }

}

class Antimage extends Hero
{
  public function __construct()
  {
    parent::__construct("ANTIMAGE");
  }

  public function setName($name)
  {
    echo "You can not setName is $name for this hero.<br>";
    return $this;
  }

  public function displayAge()
  {
    echo $this->age;
  }

}

$nam = new Antimage();
echo $nam->getName();
// $nam->displayAge();

