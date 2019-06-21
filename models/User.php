<?php


class User
{
    public static function register($name, $email, $password) {
        $db = Db::getConnection();

        date_default_timezone_set("Europe/Kiev");
        $date = date("Y-m-d H:i:s");
        $ip = self::getIp();

        $role = 'user';

        $sql = 'INSERT INTO users (ui_id, u_name, u_email, u_pass, u_date, u_ip, role) VALUES (NULL, :name, :email, SHA(:password), :date, :ip, :role)';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);
        $result->bindParam(':date', $date, PDO::PARAM_STR);
        $result->bindParam(':ip', $ip, PDO::PARAM_STR);
        $result->bindParam(':role', $role, PDO::PARAM_STR);

        return $result->execute();
    }

    public static function checkName($name) {
        if(strlen($name) >= 2)
            return true;
        return false;
    }

    public static function checkEmail($email) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
            return true;
        return false;
    }

    public static function checkPassword($pass) {
        if(strlen($pass) >= 6)
            return true;
        return false;
    }

    public static function checkEmailExists($email) {
        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM users WHERE u_email = :email';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn())
            return true;
        return false;
    }

    public static function checkUsernameExists($name) {
        $db = Db::getConnection();

        $sql = 'SELECT COUNT(*) FROM users WHERE u_name = :name';

        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->execute();

        if($result->fetchColumn())
            return true;
        return false;
    }

    public static function getIp() {
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = @$_SERVER['REMOTE_ADDR'];
        if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
        elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
        else $ip = $remote;

        return $ip;
    }

    public static function checkUserData($email, $pass) {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM users WHERE u_email = :email AND u_pass = SHA(:pass)';

        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':pass', $pass, PDO::PARAM_STR);
        $result->execute();

        $user = $result->fetch();
        if($user)
            return $user['ui_id'];
        return false;
    }

    public static function auth($userId) {
        $_SESSION['user'] = $userId;
    }

    public static function checkLogged() {
        if(isset($_SESSION['user']))
            return $_SESSION['user'];
        header("Location: /login");
    }

    public static function isGuest() {
        if(isset($_SESSION["user"]))
            return false;
        return true;
    }

    public static function getUserById($id) {
        if($id) {
            $db = Db::getConnection();
            $sql = 'SELECT * FROM users WHERE ui_id = :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }

    public static function edit($id, $name, $password) {
        $db = Db::getConnection();

        $sql = 'UPDATE users SET u_name = :name, u_pass = SHA(:password) WHERE ui_id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        $result->execute();
    }

    public static function getUserId(){
        if(isset($_SESSION['user']))
            return $_SESSION['user'];
        return false;
    }

    public static function checkAdminStatus() {
        $userId = self::getUserId();

        $user = User::getUserById($userId);

        if($user['role'] == 'admin')
            return true;
    }
}