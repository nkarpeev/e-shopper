<?php
// получаем запрос 'hatsIndex' и направляем его на контроллер 'hatsControlelr' и
// вызываем в нем экшн(метод)'actionIndex' !!!'hatsIndex' => 'hats/index'!!!

//ищем в строке запроса по шаблону с помощью функции preg_match
return array(

    'product/([0-9]+)'                => '/product/view/$1',
    'product'                         => '/product/list',
    'catalog'                         => '/catalog/view',
    'catalog/page-([0-9]+)'           => '/catalog/view/$1',
    'category/([0-9]+)'               => '/catalog/category/$1',
    'category/([0-9]+)/page-([0-9]+)' => '/catalog/category/$1/$2',
    'user/register'                   => '/user/register',
    'user/login'                      => '/user/login',
    'user/logout'                     => '/user/logout',
    'cart'                            => '/cart/index',
    'cart/add/([0-9]+)'               => '/cart/add/$1',
    'cart/delete/([0-9]+)'            => '/cart/delete/$1',
    'cabinet'                         => '/cabinet/index',
    'cabinet/edit'                    => '/cabinet/edit',
    ''                                => '/site/index'


);


?>