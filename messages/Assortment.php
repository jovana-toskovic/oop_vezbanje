<?php

namespace Messages;

class Assortment
{
  protected $products = [];

  public function add(Product $product) 
  {
    $this->products[] = $product;
  }

  public function getAssortment(): array
  {
    return $this->products;
  }

}