<?php 

use Authentication\Classes\User;
use Authentication\Classes\Admin;
use Authentication\Classes\Item;
use Authentication\Classes\Auth\Login;

use Messages\Assortment;
use Messages\Product;
use Messages\Shop;

include 'autoload.php';

$product1  = new Product('orange');
$assortment = new Assortment();
$shop = new Shop($assortment);

$shop->addProduct($product1);

$shopAssortment = $shop->getProducts();

foreach($shopAssortment as $product) {
  echo $product->getName();
}


$login = new Login();

$user = new User(array(
  'userName' => 'user',
  'email' => 'example@ex.com'
));

$admin = new Admin(array(
  'adminName' => 'admin',
  'email' => 'example@ex.com'
));

$login->checkUser($user);
$login->checkUser($admin);

$item = new Item('keyboard');
$item->checkAvailability();