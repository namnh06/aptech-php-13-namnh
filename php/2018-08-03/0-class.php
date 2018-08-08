<?php

class Hero
{
  protected $name;

  public function __construct($name = "Undefined")
  {
    echo "Begin of class<br>";
    $this->name = $name;
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

  public function display()
  {
    echo $this->name . "<br>";
  }

  public function __destruct()
  {
    echo "<br>End of class";
  }

}

function hienThiChu($chu = 'chu nay ne')
{
  echo $chu;
}

hienThiChu('abc');
sleep(5);