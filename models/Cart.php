<?php


class Cart
{
    public static function addProduct($id) {
        $id = intval($id);

        $productsInCart = array();

        if(isset($_SESSION['products']))
            $productsInCart = $_SESSION['products'];

        if(array_key_exists($id, $productsInCart))
            $productsInCart[$id]++;
        else
            $productsInCart[$id] = 1;

        $_SESSION['products'] = $productsInCart;


        $arr = array(
            "count" => self::countItems(),
            "id_cnt" => $productsInCart[$id]
        );
        return $arr;
    }

    public static function minusProduct($id) {
        $id = intval($id);

        $productsInCart = array();

        if(isset($_SESSION['products']))
            $productsInCart = $_SESSION['products'];

        if($productsInCart[$id] > 1)
            $productsInCart[$id]--;

        $_SESSION['products'] = $productsInCart;

        $arr = array(
            "count" => self::countItems(),
            "id_cnt" => $productsInCart[$id]
        );
        return $arr;
    }

    public static function countItems() {
        if(isset($_SESSION['products'])) {
            return array_sum($_SESSION['products']);
        } else {
            return 0;
        }
    }

    public static function getProducts() {
        if(isset($_SESSION['products']))
            return $_SESSION['products'];
        return false;
    }

    public static function getTotalPrice($products) {
        $productsInCart = self::getProducts();

        $total = 0;

        if($productsInCart) {
            foreach ($products as $product) {
                $total += $product['price'] * $productsInCart[$product['id']];
            }
        }

        return $total;
    }

    public static function clear() {
        if(isset($_SESSION['products']))
            unset($_SESSION['products']);
    }

    public static function deleteProduct($id) {
        $id = intval($id);

        $productsInCart = array();

        if(isset($_SESSION['products']))
            $productsInCart = $_SESSION['products'];

        unset($productsInCart[$id]);

        $_SESSION['products'] = $productsInCart;
    }

    public static function hasDiscount($totalPrice) {
        if(intval($totalPrice) >= 100)
            return 0;
        return 10;
    }
}