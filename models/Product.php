<?php

    class Product
    {
        const DEFAULT_LIMIT = 6 ;

        //получение списка последних товаров (6)
        public static function getProductLast($limit = self::DEFAULT_LIMIT)
        {
            $db = Db::getConnection();

            $productList = array();
            $i = 0;
            $result = $db->query('SELECT id, category, title, text, price, is_new, is_recommended, status  FROM `articles` ORDER BY id DESC LIMIT ' . $limit);
            while ($row = $result->fetch()) {
                $productList[ $i ]['id']                = $row['id'];
                $productList[ $i ]['category']          = $row['category'];
                $productList[ $i ]['title']             = $row['title'];
                $productList[ $i ]['text']              = $row['text'];
                $productList[ $i ]['price']             = $row['price'];
                $productList[ $i ]['is_new']            = $row['is_new'];
                $productList[ $i ]['is_recommended']    = $row['is_recommended'];
                $productList[ $i ]['status']            = $row['status'];
                $i++;
            }
            return $productList;

        }

        //получение списка рекомендуемых товаров (6)
        public static function getProductRec($limit = self::DEFAULT_LIMIT)
        {
            $db = Db::getConnection();

            $productList = array();
            $i = 0;
            $result = $db->query('SELECT * FROM `articles` WHERE is_recommended = 1 ORDER BY id DESC LIMIT ' . $limit);
            while ($row = $result->fetch()) {
                $productRec[ $i ]['id']                 = $row['id'];
                $productRec[ $i ]['category']           = $row['category'];
                $productRec[ $i ]['title']              = $row['title'];
                $productRec[ $i ]['text']               = $row['text'];
                $productRec[ $i ]['price']              = $row['price'];
                $productRec[ $i ]['is_new']             = $row['is_new'];
                $productRec[ $i ]['is_recommended']     = $row['is_recommended'];
                $productRec[ $i ]['status']             = $row['status'];
                $i++;
            }
            return $productRec;

        }

        public static function getProductList($page = 1)
        {
            $db = Db::getConnection();

            $limit = self::DEFAULT_LIMIT;

            $offset = $limit * ($page - 1);
            //echo 'offset = ' . $offset;
            //$parameters = ['idCategory' => $idCategory, 'limit' => $limit];

            $sql = ('SELECT * FROM `articles` LIMIT :limit OFFSET :offset');

            $result = $db->prepare($sql);

            $result->bindValue(':limit', $limit, PDO::PARAM_INT);
            $result->bindValue(':offset', $offset, PDO::PARAM_INT);

            $result->execute();

            while ($row = $result->fetch()) {

                static $i = 0;
                $productList[ $i ]['id']                = $row['id'];
                $productList[ $i ]['category']          = $row['category'];
                $productList[ $i ]['title']             = $row['title'];
                $productList[ $i ]['text']              = $row['text'];
                $productList[ $i ]['price']             = $row['price'];
                $productList[ $i ]['is_new']            = $row['is_new'];
                $productList[ $i ]['is_recommended']    = $row['is_recommended'];
                $productList[ $i ]['status']            = $row['status'];

                $i++;
            }
            return $productList;

        }

        public static function getProductListByCategory($idCategory, $page = 1)
        {
            $db = Db::getConnection();

            $limit = self::DEFAULT_LIMIT;

            $offset = $limit * ($page - 1);
            //$parameters = ['idCategory' => $idCategory, 'limit' => $limit];

            $sql = ('SELECT * FROM `articles` WHERE id_category = :id_category LIMIT :limit OFFSET :offset');

            $result = $db->prepare($sql);

            $result->bindValue(':id_category', $idCategory, PDO::PARAM_INT);
            $result->bindValue(':limit', $limit, PDO::PARAM_INT);
            $result->bindValue(':offset', $offset, PDO::PARAM_INT);

            $result->execute();

            while ($row = $result->fetch()) {

                static $i = 0;
                $productList[ $i ]['id']                = $row['id'];
                $productList[ $i ]['category']          = $row['category'];
                $productList[ $i ]['title']             = $row['title'];
                $productList[ $i ]['text']              = $row['text'];
                $productList[ $i ]['price']             = $row['price'];
                $productList[ $i ]['is_new']            = $row['is_new'];
                $productList[ $i ]['is_recommended']    = $row['is_recommended'];
                $productList[ $i ]['status']            = $row['status'];

                $i++;
            }
            return $productList;

        }

        public static function getProductById($productsIds)
        {
            $db = Db::getConnection();

            $result = $db->prepare('SELECT * FROM `articles` WHERE id = ?');
            $result->execute([$productsIds]);
            $productId = $result->fetch();

            return $productId;


        }

        public static function getTotalProduct($limit = self::DEFAULT_LIMIT)
        {
            $db = Db::getConnection();

            $sql = 'SELECT count(id) FROM `articles` WHERE `status` = 1';

            //$result = $db->prepare()
            $result = $db->query($sql);

            $total = $result->fetch();
            return $total[0];
            //$count_page = $total[0]/$limit;
            //return ceil($count_page);
        }

        /**
         * Возвращает список товаров с указанными индентификторами
         * @param array $idsArray <p>Массив с идентификаторами</p>
         * @return array <p>Массив со списком товаров</p>
         */
        public static function getProdustsByIds($idsArray)
        {
            // Соединение с БД
            $db = Db::getConnection();
            // Превращаем массив в строку для формирования условия в запросе
            $idsString = implode(',', $idsArray);
            // Текст запроса к БД
            $sql = "SELECT * FROM `articles` WHERE status='1' AND id IN ($idsString)";
            $result = $db->query($sql);
            // Указываем, что хотим получить данные в виде массива
            $result->setFetchMode(PDO::FETCH_ASSOC);
            // Получение и возврат результатов
            $i = 0;
            $products = array();
            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['title'] = $row['title'];
                $products[$i]['price'] = $row['price'];
                $i++;
            }
            return $products;
        }


        public static function getTotalProductInCategory($idCategory, $limit = self::DEFAULT_LIMIT)
        {
            $db = Db::getConnection();

            $sql = 'SELECT count(id) FROM `articles` WHERE `status` = 1 AND `id_category` = ' . $idCategory;

            //$result = $db->prepare()
            $result = $db->query($sql);

            $total = $result->fetch();
            return $total[0];
            //$count_page = $total[0]/$limit;
            //return ceil($count_page);
        }

    }




    //        public static function getProductListByCategory($parameters)
    //        {
    //            $db = Db::getConnection();
    //                $productCat = array();
    //                $result = $db->prepare('SELECT id, category, title, text, price FROM `articles` WHERE category = ?');
    //                $result->execute([$parameters]);
    //                //$productCat = $result -> fetch();
    //                $i = 0;
    //
    //                while ($row = $result->fetch()) {
    //                    $productCat[ $i ]['id'] = $row['id'];
    //                    $productCat[ $i ]['category'] = $row['category'];
    //                    $productCat[ $i ]['title'] = $row['title'];
    //                    $productCat[ $i ]['text'] = $row['text'];
    //                    $productCat[ $i ]['price'] = $row['price'];
    //                    $i++;
    //                }
    //
    //                return $productCat;
    //
    //        }

