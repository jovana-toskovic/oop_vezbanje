<?php

namespace Authentication\Classes;

use Authentication\Interfaces\Availability;

//require_once __DIR__ . '/../interfaces/Availability.php';


class Item implements Availability 
{
  private $item;

  public function __construct($item)
  {
    $this->setItem($item);
  }

  public function setItem($item)
  {
    $this->item = $item;
  }

  public function checkAvailability()
  {
    echo "<p>$this->item</p>";
  }
}