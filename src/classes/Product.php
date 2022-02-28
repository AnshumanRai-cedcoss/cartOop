<?php

namespace myApp ;
class Product
{
  public $products;
  public $id;
  public $name;
  public $image;
  public $price;

  public function __construct(int $id, string $name, string $image, float $price)
  {
    $this->id = $id;
    $this->name = $name;
    $this->image = $image;
    $this->price = $price;
  }
  /**
   * getProductArray
   * it returns the array with all the product details 
   * @return array
   */
  public function getProductArray()
  {
    return array("id" => $this->id, "name" => $this->name, "image" => $this->image, "price" => $this->price);
  }
}
