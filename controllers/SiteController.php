<?php


class SiteController
{
    public function actionIndex() {

        $categories = array();
        $categories = Category::getCategoryList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(5);

        require_once(ROOT . '/views/site/index.php');

        return true;
    }

    public function actionContact() {

        $userName = '';
        $userEmail = '';
        $userSubject = '';
        $userText = '';
        $result = false;

        if(isset($_POST['submit'])) {
            $userName = $_POST['userName'];
            $userEmail = $_POST['userEmail'];
            $userSubject = $_POST['userSubject'];
            $userText = $_POST['userText'];

            $errors = false;

            if(!User::checkEmail($userEmail))
                $errors[] = 'Incorrect format of email';

            if($errors == false) {
                $adminEmail = 'graphauth@gmail.com';
                $message = "Text: {$userText}. From {$userName}";
                $result = mail($adminEmail, $userSubject, $message);
                echo "<meta http-equiv='refresh' content='0'>";
            }

        }

        require_once(ROOT . '/views/site/contact.php');

        return true;
    }
}


?>