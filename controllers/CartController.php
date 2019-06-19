<?php


class CartController {
    public function actionIndex() {
        $categories = array();
        $categories = Category::getCategoryList();

        $productsInCart = false;

        $productsInCart = Cart::getProducts();

        if($productsInCart) {
            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);

            $totalPrice = Cart::getTotalPrice($products);
            $discount = Cart::hasDiscount($totalPrice);
        }

        require_once(ROOT . '/views/cart/index.php');

        return true;
    }

    public function actionAddAjax($id) {
        $arr = Cart::addProduct($id);
        $productsInCart = Cart::getProducts();

        if($productsInCart) {
            $product = Product::getProductById($id);
            $productPrice = $product['price']*$productsInCart[$product['id']];
            $arr += ["price" => $productPrice];

            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);
            $totalPrice = Cart::getTotalPrice($products);

            $discount = Cart::hasDiscount($totalPrice);
            $totalPrice += $discount;

            if($discount == 0)
                $arr += ["discount" => "Free"];
            else
                $arr += ["discount" => 10];

            $arr += ["totalPrice" => $totalPrice];
        }
        echo json_encode($arr);

        return true;
    }

    public function actionMinusAjax($id) {
        $arr = Cart::minusProduct($id);
        $productsInCart = Cart::getProducts();

        if($productsInCart) {
            $product = Product::getProductById($id);
            $productPrice = $product['price']*$productsInCart[$product['id']];
            $arr += ["price" => $productPrice];

            $productsIds = array_keys($productsInCart);
            $products = Product::getProductsByIds($productsIds);
            $totalPrice = Cart::getTotalPrice($products);

            $discount = Cart::hasDiscount($totalPrice);
            $totalPrice += $discount;

            if($discount == 0)
                $arr += ["discount" => "Free"];
            else
                $arr += ["discount" => 10];

            $arr += ["totalPrice" => $totalPrice];
        }
        echo json_encode($arr);

        return true;
    }

    public function actionDelete($id) {
        Cart::deleteProduct($id);

        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");

        return true;
    }


    public function actionCheckout() {

        $result = false;

        if(isset($_POST['purchase'])) {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $phone_number = $_POST['phone_number'];
            $e_mail = $_POST['e_mail'];
            $del_city = $_POST['del_city'];
            $address_street = $_POST['address_street'];
            $address_numb = $_POST['address_numb'];
            $address_apart = $_POST['address_apart'];
            if(isset($_POST['pay_method']))
                $pay_method = $_POST['pay_method'];

            $errors = false;
            if(!User::checkName($first_name))
                $errors[] = "First name must be longer than 2 symbols!";
            if(!User::checkName($last_name))
                $errors[] = "Last name must be longer than 2 symbols!";
            if(!User::checkEmail($e_mail))
                $errors[] = "Incorrect e-mail!";

            if($errors == false) {
                $productsInCart = Cart::getProducts();

                if(User::isGuest())
                    $userId = false;
                else
                    $userId = User::checkLogged();

                $result = Order::save($first_name, $last_name, $phone_number, $e_mail, $del_city, $address_street, $address_numb, $address_apart, $userId, $productsInCart, $pay_method);

                if($result) {
                    $adminEmail = 'graphauth@gmail.com';
                    $message = "http://goods.tm/admin/order";
                    $subject = "New order.";
                    mail($adminEmail, $subject, $message);
                    Cart::clear();

                    header("Location: /");
                }
            }
            else {
                $productsInCart = Cart::getProducts();
                $productsIds = array_keys($productsInCart);
                $products = Product::getProductsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $discount = Cart::hasDiscount($totalPrice);
                $totalPrice += $discount;
            }
        }
        else {
            $productsInCart = Cart::getProducts();

            if($productsInCart == false)
                header("Location: /");
            else {

                //Получаем общую стоимость и количество товаров
                $productsIds = array_keys($productsInCart);
                $products = Product::getProductsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $discount = Cart::hasDiscount($totalPrice);
                $totalPrice += $discount;

                $first_name = false;
                $last_name = false;
                $phone_number = false;
                $e_mail = false;
                $del_city = false;
                $address_street = false;
                $address_numb = false;
                $address_apart = false;

                if(!User::isGuest()) {
                    $userId = User::checkLogged();
                    $user = User::getUserById($userId);
                }
            }
        }

        require_once(ROOT . '/views/cart/checkout.php');

        return true;
    }
}