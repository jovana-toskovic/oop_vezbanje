<?php

namespace Main\Messages;

class Shop
{
  protected $assortment;

  public function __construct(Assortment $assortment)
  {
    $this->assortment = $assortment;
  }

  public function addProduct(Product $product) 
  {
    $this->assortment->add($product);
  }

  public function getProducts(): array
  {
    return $this->assortment->getAssortment();
  }

}