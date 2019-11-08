<?php

namespace Intefaces;

use Interfaces\Authentication;

require_once 'Authentication.php';

class Login implements Authentication
{
  private $loginData;

  public function __construct(array $loginData)
  {
    $this->loginData = $loginData;
  }

  public function authenticate()
  {
    foreach($this->loginData as $data => $value){
      echo "<p>$data: $value</p>";
    }

  }
}