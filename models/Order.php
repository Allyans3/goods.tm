<?php


class Order
{
    public static function save($first_name, $last_name, $phone_number, $e_mail, $del_city, $address_street, $address_numb, $address_apart, $userId, $products, $pay_method) {

        $db = Db::getConnection();

        $address = $address_street . ", " . $address_numb . ", " . $address_apart;

        $products = json_encode($products);

        $sql = 'INSERT INTO product_order (id, ui_id, first_name, last_name, phone_number, email, del_city, address, pay_method, data, products) VALUES (NULL, :userId, :first_name, :last_name, :phone_number, :email, :del_city, :address, :pay_method, CURRENT_TIMESTAMP, :products)';

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
}