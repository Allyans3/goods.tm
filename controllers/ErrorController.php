<?php


class ErrorController
{
    public function actionIndex() {
        header("Location: /");
        return true;
    }

    public function action404Page() {
        require_once(ROOT . '/views/site/404.php');
        return true;
    }
}