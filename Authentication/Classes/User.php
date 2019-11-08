<?php

namespace Authentication\Classes;

use Authentication\Interfaces\Authentication;

//require_once __DIR__ . '/../interfaces/Authentication.php';

class User implements Authentication 
{
  private $user;

  public function __construct($user)
  {
    $this->user = $user;
  }

  public function authenticate()
  {

    foreach($this->user as $userData => $value){
      echo "<p>$userData: $value</p>";
    }

  }

}