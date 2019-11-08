<?php

namespace Authentication\Classes;

use Authentication\Interfaces\Authentication;

//require_once __DIR__ . '/../interfaces/Authentication.php';

class Admin implements Authentication 
{
  private $admin;

  public function __construct($admin)
  {
    $this->admin = $admin;
  }

  public function authenticate()
  {

    foreach($this->admin as $adminData => $value){
      echo "<p>$adminData: $value</p>";
    }

  }

}