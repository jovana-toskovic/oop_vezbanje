<?php
spl_autoload_register(function($classname){
  $filename = str_replace('\\', '/', $classname);
  $filename = '/'.$filename.'.php';
  require_once __DIR__ . $filename;
});