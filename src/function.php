 <?php
  session_start();
  include "config.php";
  $cart = new \myApp\Cart();
  if (!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
  }
  $cart->setCart($_SESSION["cart"]);
  if ($_REQUEST["action"] == "add") {
    $id = $_POST["id"];
    $cart->addToCart($prod, $id);
    $_SESSION["cart"] = $cart->getCart();
    echo json_encode($_SESSION["cart"]);
  }
  if ($_REQUEST["action"] == "update") {
    $id = $_POST["id"];
    $value = $_POST["value"];
    $cart->updateCart($prod, $id, $value);
    $_SESSION["cart"] = $cart->getCart();
    echo json_encode($_SESSION["cart"]);
  }
  if ($_REQUEST["action"] == "delete") {
    $id = $_POST["id"];
    $cart->deleteCart($prod, $id);
    $_SESSION["cart"] = $cart->getCart();
    echo json_encode($_SESSION["cart"]);
  }