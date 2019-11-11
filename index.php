<?php 

include 'autoload.php';

use Authentication\Classes\User;
use Authentication\Classes\Admin;
use Authentication\Classes\Item;
use Authentication\Classes\Auth\Login;

use Messages\Assortment;
use Messages\Product;
use Messages\Shop;

use AbstractClasses\AbstractClass\Painting;
use AbstractClasses\ExtendAbstract\ModernPainting;


//practicing messages
$product1  = new Product('orange');
$assortment = new Assortment();
$shop = new Shop($assortment);

$shop->addProduct($product1);

$shopAssortment = $shop->getProducts();

foreach($shopAssortment as $product) {
  echo $product->getName();
}


//practicing interfaces
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


//practicing abstract classes
$modernPainting = new ModernPainting();
$modernPainting->paintingStyle();



//practicing anonymous classes
$newObject = new class('This is argument from anonymous class') {
  public function __construct(string $message) {
    echo '<p>' . $message . '</p>';
  }
};

//we can extend anonymoyus classes, or //////implement interfaces
// we cam use it to override methods
$login->checkUser(new class(array(
  'adminName' => 'admin',
  'email' => 'example@ex.com'
)) extends User
{

  public function authenticate()
  {

    echo "<p>Echo from abstract object.</p>";

  }
});

