<?php 
	//Класс Router - получает запрос от FrontContloller (index.php), ищет этот запрос в роутах (routes.php) 
        //и отдает управление назначенному контроллеру
	class Router {
		private $routes;

		public function __construct() {
			$path = ROOT . '/config/routes.php';
			$this->routes = include($path);
                }
                        
                        //метод возвращает строку запроса
                       private function getURL() {
                    if (!empty($_SERVER['REQUEST_URI'])) {
                        return trim($_SERVER['REQUEST_URI'], '/');                     
                    }
                  }
                  
		public function run() {
                    //вызываем функцию, которая выводит искомый запрос
                    $uri = $this->getURL();
                    //print_r($uri);

//                    if($uri == ' ') {
//                        include_once(ROOT . '/view/site/index.php');
//                        
//                    }
                    //из массива routes ключ сохраняем в $uriPattern
                    //а значение сохраняем в $path
                    foreach ($this->routes as $uriPattern => $path) {
                        //echo "<br>$uriPattern -> $path<br>";
                                //почему не работает данный вариант??
                               // echo "<br>" . $uriPattern -> $path;    
                        //ищем совпадения в строке запроса $uri
                        
                     if (preg_match("~^$uriPattern$~", $uri)) {
                        //выводим имя контроллера и метода, которые обрабатывают запрос
                        //получить внутренний путь согласно внешнему по шаблону
                        $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                        //print_r($internalRoute);
                        //разделяем значения в массиве на  объекты в массиве
                        $segment = explode('/', $internalRoute);
                        //!!!!внимание !!! удаляем первы элемент массива, т.к. все находится в папке "practice"
                        //а это нам не нужно!!!!!!!
                      
                        array_shift($segment);
                        //выдергиваем первый объект из массива
                        $controllerName = ucfirst(array_shift($segment)).'Controller';
                        //print_r($controllerName);
                       // $controllerName = ucfirst($controllerName);
                        
                        $actionName = 'action' . ucfirst(array_shift($segment));
       
//                        echo "Контроллер: $controllerName<br>";
//                        echo "Метод: $actionName<br>"; 
                        $parameters = $segment;

                        //$_GET['parameters'] = $parameters;
//                        echo "<pre>";                     
                        //Подключаем файл-контроллер
                        $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                        if (file_exists($controllerFile)) {
                        include_once($controllerFile);  
                     }


                        //создаем объект класса
                        $controllerObject = new $controllerName;
                        //call_user_func_array — Вызывает пользовательскую функцию с массивом параметров

                        $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                        //прерываем функцию foreach если нашли запрос
                        if($result != null) {
                            break;
                        }
                        else {
                            print_r('$result == 0');
                        }

                    }
                   

	}

     }
 }















