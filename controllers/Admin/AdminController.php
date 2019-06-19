<?php


class AdminController extends AdminBase {
    public function actionIndex() {

        self::checkAdmin();

        $countOfProducts = Product::getCountOfProducts();
        $countOfOrders = Order::getCountOfOrders();

        require_once(ROOT . '/views/admin/index.php');

        return true;
    }
}