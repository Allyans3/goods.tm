<?php


class AdminProductController extends AdminBase
{
    public function actionIndex() {
        self::checkAdmin();

        $productsList = Product::getProductsList();

        require_once(ROOT . '/views/admin_product/index.php');

        return true;
    }
}