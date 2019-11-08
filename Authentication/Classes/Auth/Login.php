<?php

namespace Authentication\Classes\Auth;

use Authentication\Interfaces\Authentication;

//require_once __DIR__ . '/../../interfaces/Authentication.php';

class Login
{
  public function checkUser(Authentication $user)
  {
    $user->authenticate();
  }
}