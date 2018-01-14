<?php
// set_time_limit(0);
////Функция геренации названия
//function generateTitle($min, $max){
//$length = rand($min, $max);    
//$chars = 'abcdefghijklmnopqrstuvwxy';
//$numChars = strlen($chars);
//$title = '';
//for ($i = 0; $i < $length; $i++) {
//$title .= substr($chars, rand(1, $numChars) - 1, 1);
//}
//return $title;
//}
//
//function getRowDb($count) 
//{
//    $start = time();
//    $start = getdate($start);
//    echo 'Начало: ' . $start['hours'] . ' часов-'. $start['minutes'] . ' минут-'. $start['seconds'] . ' секунд';
//   
//    $category = ['man', 'wooman', 'kid', 'teen']; //4
//
//    for($i = 0; $i <= $count; $i++) 
//    {
////название
//$title = generateTitle(5, 10);
//
//$longtitle = generateTitle(10, 15);
////категория
//$parent = rand(4, 5);
////id категории
//$article = rand(10, 999999);
//
//$weight = rand(1, 100);
////цена
//$price = rand(999, 999999);
//
//$introtext = 'apple iphone 5 apple iphone 5 apple iphone 5apple iphone 5 apple iphone 5';
//
//$arк_cont[$i] = [$title, $longtitle, $parent];
//$arr_prod[$i] = [$article, $price, $weight, $introtext];
//    }
//    
//echo "<pre>";
//$finish = time();
//$finish = getdate($finish);
//print_r($arк_cont);
//echo '<hr>';
//print_r($arr_prod);
//echo '<hr>';
//echo 'Финиш: ' . $finish['hours'] . ' часов-'. $finish['minutes'] . ' минут-'. $finish['seconds'] . ' секунд';
//}

//getRowDb(200);


//$result = $db->prepare('INSERT INTO `articles`(title, category, text, id_category, price, img, views) '
//        . 'VALUES(?, ?, ?, ?, ?, ?, ?)');
//$result->execute($array);
    



            //<<<<<<<<<<<---------------------------------------------------------------------------------------------------->>>>>>>>>>>>>>>>>>>>>


abstract class Publication {
 // определяем правило, что все публикации должны печататься, т.е. иметь метод do_print()\
    
    public $data;
    public $val;
    public $arr = ['for News' => 'News News News', 'for Announcement' => 'Announcement Announcement', 'for Article' => 'Article Article'];

 public function __construct() {
     
     $data = $this->arr[$this->table];
     
     echo $this->data;
 }
    
 abstract public function do_print();
 
 public function set_val() {
     
     $val = $this->data;
      
     return $val;

 
 }
}

class News extends Publication {
     
    public function __construct() {
        
        $this->table = 'for News';
        parent::__construct();
        
    }
 // переопределяем абстрактный метод печати
 public function do_print() {
   
  echo '<h4>Новость: </h4>';
  echo $this->val;
  //...
 }
}
class Announcement extends Publication {
 // переопределяем абстрактный метод печати
    public function __construct() {
        
        $this->table = 'for Announcement';
        
        parent::__construct();
    }
    
 public function do_print() {
  echo '<h4>Объявление: </h4>';
    echo $this->data;  //...
 }
}
class Article extends Publication {
 // переопределяем абстрактный метод печати
    public function __construct() {
        
        $this->table = 'for Article';
        
        parent::__construct();
    }
 public function do_print() {
  echo '<h4>Статья: </h4>';
    echo $this->data;  //...
 }
}

//Наполняем массив публикаций объектами, производными от Publication
$publications[] = new News();
$publications[] = new Announcement();
$publications[] = new Article();

foreach ($publications as $publication) {
 if ($publication instanceof Publication) { // Если мы работаем с наследниками Publication
  $publication->do_print(); // то мы можем смело выводить данные на печать
 }
 else {
  //исключение или обработка ошибки
 }
}

abstract class Animal {
    
    public $arr_name = array();
    
    function __construct($name) {
        $this->arr_name = $name;
    }
    
    abstract public function action();
        
    
}

class Dog extends Animal {

    public function action() {
        echo $this->arr_name;
        echo 'Собака лает';
        echo '<br>';
    }
    
}

class Cat extends Animal {

    public function action() {
        echo $this->arr_name;
        echo 'Кошка мяукает';
        echo '<br>';
    }
    
}

$animal[] = new Dog('Лайма');
$animal[] = new Cat('Багир');


foreach ($animal as $an) {
    $an->action();
}