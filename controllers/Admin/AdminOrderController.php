<?php


class AdminOrderController extends AdminBase {
    public function actionIndex()
    {
        self::checkAdmin();

        $orderList = Order::getOrdersList();

        require_once(ROOT . '/views/admin_order/index.php');

        return true;
    }

    public function actionDelete($id)
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {
            Order::deleteOrderById($id);

            header("Location: /admin/order");
        }

        require_once(ROOT . '/views/admin_order/delete.php');
        return true;
    }

    public function actionView($id)
    {
        self::checkAdmin();

        $order = Order::getOrderById($id);

        $productsQuantity = json_decode($order['products'], true);

        $productsIds = array_keys($productsQuantity);

        $products = Product::getProductsByIds($productsIds);

        require_once(ROOT . '/views/admin_order/view.php');
        return true;
    }

    public function actionUpdate($id)
    {
        self::checkAdmin();

        $orderList = Order::getOrdersList();

        $order = Order::getOrderById($id);

        if (isset($_POST['submit'])) {
            $options['first_name'] = $_POST['first_name'];
            $options['last_name'] = $_POST['last_name'];
            $options['phone_number'] = $_POST['phone_number'];
            $options['email'] = $_POST['email'];
            $options['del_city'] = $_POST['del_city'];
            $options['address'] = $_POST['address'];
            $options['date'] = $_POST['date'];
            $options['status'] = $_POST['status'];

            Order::updateOrderById($id, $options);
            header("Location: /admin/order");
        }

        require_once(ROOT . '/views/admin_order/update.php');
        return true;
    }
}