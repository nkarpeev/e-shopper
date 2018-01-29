<?php

    class User {

        public static function checkName($name)
        {
            if (strlen($name) >= 2) {
                return true;
            }
            return false;
        }

        public static function checkPassword($password)
        {
            if (strlen($password) >= 6) {
                return true;
            }
            return false;
        }

        public static function checkEmail($email)
        {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return true;
            }
            return false;
        }

        public static function checkEmailExists($email)
        {
            // Соединение с БД
            $db = Db::getConnection();
            // Текст запроса к БД
            $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';
            // Получение результатов. Используется подготовленный запрос
            $result = $db->prepare($sql);
            $result->bindParam(':email', $email, PDO::PARAM_STR);
            $result->execute();
            if ( $result->fetchColumn() )
                return true;
            return false;
        }

        /**
         * Регистрация пользователя
         * @param string $name <p>Имя</p>
         * @param string $email <p>E-mail</p>
         * @param string $password <p>Пароль</p>
         * @return boolean <p>Результат выполнения метода</p>
         */
        public static function register($name, $email, $password)
        {
            // Соединение с БД
            $db = Db::getConnection();
            // Текст запроса к БД
            $sql = 'INSERT INTO user (name, email, password) VALUES (:name, :email, :password)';
            // Получение и возврат результатов. Используется подготовленный запрос
            $result = $db->prepare($sql);
            $plasehollders = [
                ':name' => $name,
                ':email' => $email,
                ':password' => $password
            ];

            //$result->bindParam(':name', $name, PDO::PARAM_STR);
            //$result->bindParam(':email', $email, PDO::PARAM_STR);
            //$result->bindParam(':password', $password, PDO::PARAM_STR);
            return $result->execute($plasehollders);
        }

        /**
         * Проверяем существует ли пользователь с заданными $email и $password
         * @param string $email <p>E-mail</p>
         * @param string $password <p>Пароль</p>
         * @return mixed : integer user id or false
         */
        public static function checkUserData($email, $password)
        {
            // Соединение с БД
            $db = Db::getConnection();
            // Текст запроса к БД
            $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';
            // Получение результатов. Используется подготовленный запрос
            $result = $db->prepare($sql);
            $plasehollders = [
                ':email' => $email,
                ':password' => $password
            ];
            $result->execute($plasehollders);
            $user = $result->fetch();

            if ($user)
                return $user['id'];
            return false;
        }
        /**
         * Проверяет телефон: не меньше, чем 10 символов
         * @param string $phone <p>Телефон</p>
         * @return boolean <p>Результат выполнения метода</p>
         */
        public static function checkPhone($phone)
        {
            if (strlen($phone) >= 10) {
                return true;
            }
            return false;
        }

        /**
         * Запоминаем пользователя
         * @param integer $userId <p>id пользователя</p>
         */
        public static function auth($userId)
        {
            // Записываем идентификатор пользователя в сессию
            $_SESSION['user'] = $userId;
        }

        /**
         * Редактирование данных пользователя
         * @param integer $id <p>id пользователя</p>
         * @param string $name <p>Имя</p>
         * @param string $password <p>Пароль</p>
         * @return boolean <p>Результат выполнения метода</p>
         */
        public static function edit($id, $name, $password)
        {
            // Соединение с БД
            $db = Db::getConnection();
            // Текст запроса к БД
            $sql = "UPDATE user SET name = :name, password = :password WHERE id = :id";
            // Получение и возврат результатов. Используется подготовленный запрос
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->bindParam(':name', $name, PDO::PARAM_STR);
            $result->bindParam(':password', $password, PDO::PARAM_STR);
            return $result->execute();
        }

        /**
         * Возвращает идентификатор пользователя, если он авторизирован.<br/>
         * Иначе перенаправляет на страницу входа
         * @return string <p>Идентификатор пользователя</p>
         */
        public static function checkLogged()
        {
            // Если сессия есть, вернем идентификатор пользователя
            if (isset($_SESSION['user'])) {
                return $_SESSION['user'];
            }
            header("Location: /user/login");
        }

        public static function isGuest()
        {
            // Если сессия есть, вернем идентификатор пользователя
            if (isset($_SESSION['user'])) {
                return false;
            }
            return true;
        }

        public static function getUserById($id) {
            if($id) {
                // Соединение с БД
                $db = Db::getConnection();
                // Текст запроса к БД
                $sql = 'SELECT * FROM user WHERE id = :id';
                // Получение результатов. Используется подготовленный запрос
                $result = $db->prepare($sql);
                $plasehollders = [
                    ':id' => $id
                ];
                $result->execute($plasehollders);
                $user = $result->fetch();

                return $user;
            }
        }
    }