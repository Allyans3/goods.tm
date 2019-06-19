<?php


class Order
{
    public static function save($first_name, $last_name, $phone_number, $e_mail, $del_city, $address_street, $address_numb, $address_apart, $userId, $products, $pay_method) {

        $db = Db::getConnection();

        $address = $address_street . ", " . $address_numb . ", " . $address_apart;

        $products = json_encode($products);

        $sql = 'INSERT INTO product_order (id, ui_id, first_name, last_name, phone_number, email, del_city, address, pay_method, date, products) VALUES (NULL, :userId, :first_name, :last_name, :phone_number, :email, :del_city, :address, :pay_method, CURRENT_TIMESTAMP, :products)';

        $result = $db->prepare($sql);
        $result->bindParam(':userId', $userId, PDO::PARAM_INT);
        $result->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $result->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $result->bindParam(':phone_number', $phone_number, PDO::PARAM_STR);
        $result->bindParam(':email', $e_mail, PDO::PARAM_STR);
        $result->bindParam(':del_city', $del_city, PDO::PARAM_STR);
        $result->bindParam(':address', $address, PDO::PARAM_STR);
        $result->bindParam(':pay_method', $pay_method, PDO::PARAM_STR);
        $result->bindParam(':products', $products, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function getOrdersList() {
        $db = Db::getConnection();

        $result = $db->query("SELECT * FROM product_order ORDER BY id ASC");
        $orderList = array();

        $i = 0;
        while($row = $result->fetch()) {
            $orderList[$i]['id'] = $row['id'];
            $orderList[$i]['ui_id'] = $row['ui_id'];
            $orderList[$i]['first_name'] = $row['first_name'];
            $orderList[$i]['last_name'] = $row['last_name'];
            $orderList[$i]['phone_number'] = $row['phone_number'];
            $orderList[$i]['email'] = $row['email'];
            $orderList[$i]['del_city'] = $row['del_city'];
            $orderList[$i]['address'] = $row['address'];
            $orderList[$i]['pay_method'] = $row['pay_method'];
            $orderList[$i]['date'] = $row['date'];
            $orderList[$i]['products'] = $row['products'];
            $orderList[$i]['status'] = $row['status'];
            $i++;
        }

        return $orderList;
    }

    public static function getCountOfOrders()
    {
        $db = Db::getConnection();

        $result = $db->query("SELECT count(*) AS count FROM product_order");
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $row = $result->fetch();

        return $row['count'];
    }

    public static function deleteOrderById($id) {
        $db = Db::getConnection();

        $sql = "DELETE FROM product_order WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function getOrderById($id) {
        $id = intval($id);

        if($id) {
            $db = Db::getConnection();

            $result = $db->query("SELECT * FROM product_order WHERE id = $id");
            $result->setFetchMode(PDO::FETCH_ASSOC);

            return $result->fetch();
        }
    }

    public static function getStatusText($status) {
        switch ($status) {
            case '1':
                return "New order";
                break;
            case '2':
                return "In processing";
                break;
            case '3':
                return "Is delivering";
                break;
            case '4':
                return "Complete";
                break;
            default:
                return "Undefined";
                break;
        }
    }

    public static function updateOrderById($id ,$options) {
        $db = Db::getConnection();

        $sql = "UPDATE product_order 
                SET
                    first_name = :first_name, 
                    last_name = :last_name, 
                    phone_number = :phone_number,
                    email = :email,
                    del_city = :del_city,
                    address = :address,
                    date = :date,
                    status = :status
                WHERE id = :id";

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':first_name', $options['first_name'], PDO::PARAM_STR);
        $result->bindParam(':last_name', $options['last_name'], PDO::PARAM_STR);
        $result->bindParam(':phone_number', $options['phone_number'], PDO::PARAM_STR);
        $result->bindParam(':email', $options['email'], PDO::PARAM_STR);
        $result->bindParam(':del_city', $options['del_city'], PDO::PARAM_STR);
        $result->bindParam(':address', $options['address'], PDO::PARAM_STR);
        $result->bindParam(':date', $options['date'], PDO::PARAM_STR);
        $result->bindParam(':status', $options['status'], PDO::PARAM_INT);
        return $result->execute();
    }
}