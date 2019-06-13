<?php

class UserController
{
    public function actionRegister()
    {
        $reg_name = '';
        $reg_email = '';
        $reg_pass = '';
        $reg_conf_pass = '';
        $result = false;
        if(isset($_POST["reg-btn"])){
            $reg_name = $_POST["reg_name"];
            $reg_email = $_POST["reg_email"];
            $reg_pass = $_POST["reg_pass"];
            $reg_conf_pass = $_POST["reg_conf_pass"];

            $errors = false;

            if(!User::checkName($reg_name))
                $errors[] = 'Username must be longer than 2 symbols!';
            if(!User::checkEmail($reg_email))
                $errors[] = 'Incorrect email!';
            if(!User::checkPassword($reg_pass))
                $errors[] = 'Password must be longer than 6 symbols!';
            if($reg_pass !== $reg_conf_pass)
                $errors[] = 'Passwords do not match!';
            if(User::checkUsernameExists($reg_name))
                $errors[] = 'This username already exists!';
            if(User::checkEmailExists($reg_email))
                $errors[] = 'This email already exists!';

            if($errors == false) {
                $result = User::register($reg_name, $reg_email, $reg_pass);
            }
        }

        require_once(ROOT . '/views/user/register.php');

        return true;
    }

    public function actionLogin()
    {
        $log_email = '';
        $log_pass = '';

        if(isset($_POST["log-btn"])){
            $log_email = $_POST["log_email"];
            $log_pass = $_POST["log_pass"];

            $errors = false;

            if(!User::checkEmail($log_email))
                $errors[] = 'Incorrect email!';
            if(!User::checkPassword($log_pass))
                $errors[] = 'Password must be longer than 6 symbols!';

            $userId = User::checkUserData($log_email, $log_pass);

            if($userId == false) {
                $errors[] = 'Incorrect email or password!';
            } else {
                User::auth($userId);

                header("Location: /account/");
            }
        }

        require_once(ROOT . '/views/user/login.php');

        return true;
    }

    public function actionLogout() {
        session_start();
        unset($_SESSION["user"]);
        header("Location: /");
    }
}