<?php

namespace myApp;

class Cart
{

  public $cartArr;
  /**
   * constructor function
   */
  public function __construct()
  {
    $this->cartArr = array();
  }
  /**
   * setCart
   * ser cartArr as an array
   * @param [type] $arr
   * @return void
   */
  public function setCart($arr)
  {
    $this->cartArr = $arr;
  }
  /**
   * addToCart
   * used to add a item to the cart
   * @param [type] $produc
   * @param [type] $id
   * @return void
   */
  public function addCart($produc, $id)
  {

    if (!$this->isExist($id)) {
      foreach ($produc as $key => $val) {
        if ($produc[$key]["id"] == $id) {
          $produc[$key]["quantity"] = 1;
          array_push($this->cartArr, $produc[$key]);
        }
      }
    }
  }

  /**
   * isExist
   * check whether the item is already present or not
   * @param [type] $id
   * @return boolean
   */
  public function isExist($id)
  {
    foreach ($this->cartArr as $key => $val) {
      if ($this->cartArr[$key]["id"] == $id) {
        $this->cartArr[$key]["quantity"] += 1;
        return true;
      }
    }
    return false;
  }
  /**
   * updateCart
   * used to edit the input field
   * @param [type] $prod
   * @param [type] $id
   * @param [type] $value
   * @return void
   */
  public function updateItem($product, $id, $value)
  {
    foreach ($product as $k => $val) {
      if ($product[$k]["id"] == $id) {
        $this->cartArr[$k]["quantity"] += $value;
      }
    }
  }
  /**
   * deleteCart
   * used to delete the item from Cart
   * @param [type] $prod
   * @param [type] $id
   * @return void
   */
  public function deleteItem($product, $id)
  {
    for ($i = 0; $i < count($product); $i++) {
      if ($product[$i]["id"] == $id) {
        array_splice($this->cartArr, $i, 1);
      }
    }
  }
  /**
   * getCart
   * returns the updated cart
   * @return void
   */
  public function getCart()
  {
    return $this->cartArr;
  }
}
