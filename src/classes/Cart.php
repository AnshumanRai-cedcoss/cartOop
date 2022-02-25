<?php

namespace myApp ;

class Cart
{

  public $cartArr ;

  public function __construct()
  {
    $this->cartArr = array();
  }
  /**
   * setCart
   *
   * @param [type] $arr
   * @return void
   */
  public function setCart($arr)
  {
    $this->cartArr = $arr;
  }
  /**
   * addToCart
   *
   * @param [type] $produc
   * @param [type] $id
   * @return void
   */
  public function addToCart($produc, $id)
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
   *
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
  *
  * @param [type] $prod
  * @param [type] $id
  * @param [type] $value
  * @return void
  */
  public function updateCart($prod, $id, $value)
  {
    foreach ($prod as $key => $val) {
      if ($prod[$key]["id"] == $id) {
        $this->cartArr[$key]["quantity"] += $value;
      }
    }
  }
  /**
   * deleteCart
   *
   * @param [type] $prod
   * @param [type] $id
   * @return void
   */
  public function deleteCart($prod, $id)
  {
    for ($i = 0; $i < count($prod); $i++) {
      if ($prod[$i]["id"] == $id) {
        array_splice($this->cartArr, $i, 1);
      }
    }
  }
  /**
   * getCart
   *
   * @return void
   */
  public function getCart()
  {
    return $this->cartArr;
  }
}
