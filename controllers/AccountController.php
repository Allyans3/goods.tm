<?php


class AccountController
{
    public function actionIndex() {
        User::checkLogged();

        require_once (ROOT . '/views/account/index.php');

        return true;
    }

    public function actionPersonaldata() {

        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        $name = $user['u_name'];

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $password = $_POST['password'];
            $conf_password = $_POST['conf_password'];

            $errors = false;

            if(!User::checkName($name))
                $errors[] = 'Username must be longer than 2 symbols!';
            if(!User::checkPassword($password))
                $errors[] = 'Password must be longer than 6 symbols!';
            if(User::validPasswords($password, $conf_password))
                $errors[] = 'Passwords do not match!';

            if($errors == false){
                $result = User::edit($userId, $name, $password);
            }
        }
        require_once (ROOT . '/views/account/personaldata.php');

        return true;
    }

    public function actionBankdetails() {
        User::checkLogged();
        $result = false;

        if(isset($_POST['submit'])){
            $number = $_POST["number"];
            $first_name = $_POST["first-name"];
            $last_name = $_POST["last-name"];
            $expiry = $_POST["expiry"];
            $cvc = $_POST["cvc"];

            $errors = false;

            if(!Account::checkCardNumber($number))
                $errors[] = 'Card number must have more than 13 and less than 19 digits!';
            if(!Account::checkName($first_name))
                $errors[] = 'First name must be longer than 2 symbols!';
            if(!Account::checkName($last_name))
                $errors[] = 'Last name must be longer than 2 symbols!';
            if(!Account::checkDate($expiry))
                $errors[] = 'Invalid!';
            if(!Account::checkCvc($cvc))
                $errors[] = 'Incorrect CVC(CVV)!';
            if(Account::checkCard($number))
                $errors[] = 'This card is already in use!';

            if($errors == false) {
                $result = Account::addCard($number, $first_name, $last_name, $expiry, $cvc);
            }
        }

        require_once (ROOT . '/views/account/bankdetails.php');

        return true;
    }
}