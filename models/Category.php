<?php

    class Category
    {
        //получаем список категорий
        public static function getCategory()
        {
                $db = Db::getConnection();

                $result = $db->query('SELECT id, name, sort_order FROM `article_category` ORDER BY sort_order ASC');

                while ($row = $result->fetch()) {
                    static $i = 0;
                    $categoryList[ $i ]['id'] = $row['id'];
                    $categoryList[ $i ]['name'] = $row['name'];
                    $categoryList[ $i ]['sort_order'] = $row['sort_order'];

                    $i++;
                }
                return $categoryList;

        }


    }

