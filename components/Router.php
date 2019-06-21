<?php

class Router
{
    private $routes;

    public function __construct(){
        $routesPath = ROOT.'/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI(){
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }

    public function run(){
        //Получаем строку запроса
        $uri = $this->getURI();

        //Проверяем наличие такого запроса в routes.php
        foreach ($this->routes as $uriPattern => $path) {
            if(preg_match("~$uriPattern~", $uri)){

                //Получаем внутренний путь из внешнего согласно правилу.
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);


                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments;

                //Подключаем файл
                $array_paths = array(
                    '/controllers/Admin/',
                    '/controllers/'
                );

                foreach ($array_paths as $path){
                    $controllerFile = ROOT.$path.$controllerName.'.php';
                    if(file_exists($controllerFile)){
                        include_once($controllerFile);
                    }
                }

                //Создать объект и вызываем метод
                $controllerObject = new $controllerName;

				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                if($result != null){
                    break;
                }
            }
        }
    }
}

?>
