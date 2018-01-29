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
    'cart/deleteAll/([0-9]+)'         => '/cart/deleteAll/$1',
    'cart/checkout'                   => '/cart/checkout',
    'cabinet'                         => '/cabinet/index',
    'cabinet/edit'                    => '/cabinet/edit',

    // Управление товарами:
    'admin/product/create'            => '/adminProduct/create',
    'admin/product/update/([0-9]+)'   => '/adminProduct/update/$1',
    'admin/product/delete/([0-9]+)'   => '/adminProduct/delete/$1',
    'admin/product'                   => '/adminProduct/index',
    // Управление категориями:
    'admin/category/create'           => '/adminCategory/create',
    'admin/category/update/([0-9]+)'  => '/adminCategory/update/$1',
    'admin/category/delete/([0-9]+)'  => '/adminCategory/delete/$1',
    'admin/category'                  => '/adminCategory/index',
    // Управление заказами:
    'admin/order/update/([0-9]+)'     => '/adminOrder/update/$1',
    'admin/order/delete/([0-9]+)'     => '/adminOrder/delete/$1',
    'admin/order/view/([0-9]+)'       => '/adminOrder/view/$1',
    'admin/order'                     => '/adminOrder/index',
    // Админпанель:
    'admin'                           => '/admin/index',
    // Главная страница
    ''                                => '/site/index'


);


?>