<?php


class Account
{
    public static function addCard($number, $first_name, $last_name, $expiry, $cvc) {
        $db = Db::getConnection();

        $sql = 'INSERT INTO bankdetails (id, user_id, number, first_name, last_name, expiry_date, cvc) VALUES (NULL, :user, :number, :first_name, :last_name, :expiry, :cvc)';

        $result = $db->prepare($sql);
        $result->bindParam(':user', $_SESSION["user"], PDO::PARAM_STR);
        $result->bindParam(':number', $number, PDO::PARAM_STR);
        $result->bindParam(':first_name', $first_name, PDO::PARAM_STR);
        $result->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $result->bindParam(':expiry', $expiry, PDO::PARAM_STR);
        $result->bindParam(':cvc', $cvc, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function checkCardNumber($number) {
        if(strlen($number) >= 16 && strlen($number) <= 23)
            return true;
        return false;
    }

    public static function checkName($name) {
        if(strlen($name) > 1)
            return true;
        return false;
    }

    public static function checkDate($date) {
        $patterns = ["/^\d{2}\/\d{2}$/", "/^\d{2}\/ \d{2}$/", "/^\d{2} \/ \d{2}$/", "/^\d{2} \/\d{2}$/",
                     "/^\d{2}\/\d{4}$/", "/^\d{2}\/ \d{4}$/", "/^\d{2} \/ \d{4}$/", "/^\d{2} \/\d{4}$/"];
        foreach ($patterns as $pattern) {
            if(preg_match($pattern, $date))
                return true;
        }
        return false;
    }

    public static function checkCvc($cvc) {
        if(strlen($cvc) == 3 || strlen($cvc) == 4)
            return true;
        return false;
    }

    public static function checkCard($card) {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM bankdetails WHERE number = :card';

        $result = $db->prepare($sql);
        $result->bindParam(':card', $card, PDO::PARAM_STR);
        $result->execute();

        $is_card = $result->fetch();
        if($is_card)
            return true;
        return false;
    }
}