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
                $mail = MailSet::config();
                try {
                    $mail->setFrom($userEmail, $userName);
                    $mail->addAddress('graphauth@gmail.com');
                    $mail->Subject = $userSubject;
                    $mail->Body    = $userText;

                    $mail->send();
                    echo '<meta http-equiv="Refresh" content="0"/>';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
            }

        }

        require_once(ROOT . '/views/site/contact.php');

        return true;
    }
}


?>