<?php 

use Messages\Assortment;
use Messages\Product;
use Messages\Shop;

use Intefaces\Login;

require_once __DIR__ . '/messages/Assortment.php';
require_once __DIR__ . '/messages/Product.php';
require_once __DIR__ . '/messages/Shop.php';

require_once __DIR__ . '/interfaces/Login.php';

$product1  = new Product('orange');
$assortment = new Assortment();
$shop = new Shop($assortment);

$shop->addProduct($product1);

$shopAssortment = $shop->getProducts();

foreach($shopAssortment as $product) {
  echo $product->getName();
}

$login = new Login(array(
  'userName' => 'jovana',
  'email' => 'example@ex.com'
));

$login->authenticate();
