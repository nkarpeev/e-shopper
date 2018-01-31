-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 01 2018 г., 00:21
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `e-shopper`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `category` varchar(55) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `code` varchar(255) NOT NULL,
  `text` text,
  `id_category` int(11) NOT NULL,
  `price` float DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `views` int(11) NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommended` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`id`, `category`, `title`, `code`, `text`, `id_category`, `price`, `img`, `views`, `is_new`, `is_recommended`, `status`) VALUES
(1, 'man', 'Alaska1', 'AVC-746854', 'Exercitationem ullam corporis suscipit laboriosam, nisi ut perspiciatis unde. Veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut enim ipsam. ', 1, 999, 'gomer.jpg', 123, 0, 0, 1),
(2, 'man', 'Alaska2', 'AVC-721754', 'Lorem ipsum dolor sit amet. Nobis est eligendi optio, cumque nihil impedit, quo minus id, quod maxime. Consectetur, adipisci velit, sed. Ipsum, quia non numquam eius modi tempora incidunt, ut aliquid. Sapiente delectus, ut et expedita ', 1, 1999, 'gomer2.jpg', 333, 0, 1, 1),
(3, 'man', 'Alaska3', 'AVC-112345', 'taque earum rerum facilis est eligendi optio, cumque nihil molestiae consequatur. Exercitationem ullam corporis suscipit laboriosam, nisi ut perspiciatis unde. Veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut enim ipsam. Excepturi sint, obcaecati cupiditate non numquam eius. taque earum rerum facilis est eligendi optio, cumque nihil molestiae consequatur. Exercitationem ullam corporis suscipit laboriosam, nisi ut perspiciatis unde. Veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut enim ipsam. Excepturi sint, obcaecati cupiditate non numquam eius. \r\ntaque earum rerum facilis est eligendi optio, cumque nihil molestiae consequatur. Exercitationem ullam corporis suscipit laboriosam, nisi ut perspiciatis unde. Veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut enim ipsam. Excepturi sint, obcaecati cupiditate non numquam eius. ', 2, 678, 'hat.jpg', 444, 0, 1, 1),
(4, 'man', 'Alaska4', 'AVC-995526', 'taque earum rerum facilis est eligendi optio, cumque nihil molestiae consequatur. Exercitationem ullam corporis suscipit laboriosam, nisi ut perspiciatis unde. Veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut enim ipsam. Excepturi sint, obcaecati cupiditate non numquam eius. ', 2, 977, 'min.jpg', 1233, 0, 0, 1),
(5, 'man', 'Alaska5', 'AVM-884563', 'Sit, aspernatur aut rerum facilis est et quas molestias. Cum soluta nobis est laborum et voluptates repudiandae sint et molestiae. Laborum et harum quidem rerum facilis est et dolore magnam aliquam quaerat. Tempore, cum soluta nobis est eligendi optio.', 3, 459, 'gomer.jpg', 11, 0, 1, 1),
(6, 'woman', 'Parka', 'BBX-525454', 'taque earum rerum facilis est eligendi optio, cumque nihil molestiae consequatur. Exercitationem ullam corporis suscipit laboriosam, nisi ut perspiciatis unde. Veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut enim ipsam. Excepturi sint, obcaecati cupiditate non numquam eius. ', 3, 778, 'gomer.jpg', 452, 1, 1, 1),
(7, 'woman', 'Parka2', 'BBX-114322', 'Sit, aspernatur aut rerum facilis est et quas molestias. Cum soluta nobis est laborum et voluptates repudiandae sint et molestiae. Laborum et harum quidem rerum facilis est et dolore magnam aliquam quaerat. Tempore, cum soluta nobis est eligendi optio.', 4, 444, 'gomer.jpg', 4444, 0, 1, 0),
(8, 'woman', 'Jacket', 'AVC-212354', 'taque earum rerum facilis est eligendi optio, cumque nihil molestiae consequatur. Exercitationem ullam corporis suscipit laboriosam, nisi ut perspiciatis unde. Veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut enim ipsam. Excepturi sint, obcaecati cupiditate non numquam eius. ', 4, 424, 'min.jpg', 1111, 0, 1, 1),
(9, 'woman', 'Jacket2', 'HHE-459143', 'taque earum rerum facilis est eligendi optio, cumque nihil molestiae consequatur. Exercitationem ullam corporis suscipit laboriosam, nisi ut perspiciatis unde. Veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut enim ipsam. Excepturi sint, obcaecati cupiditate non numquam eius. ', 4, 854, 'min.jpg', 883, 0, 1, 1),
(10, 'teen', 'teenager jacket', 'HHE-239854', 'taque earum rerum facilis est eligendi optio, cumque nihil molestiae consequatur. Exercitationem ullam corporis suscipit laboriosam, nisi ut perspiciatis unde. Veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut enim ipsam. Excepturi sint, obcaecati cupiditate non numquam eius. ', 5, 111, 'min.jpg', 677, 1, 0, 1),
(11, 'teen', 'teenager jacket', 'AVC-214329', 'taque earum rerum facilis est eligendi optio, cumque nihil molestiae consequatur. Exercitationem ullam corporis suscipit laboriosam, nisi ut perspiciatis unde. Veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut enim ipsam. Excepturi sint, obcaecati cupiditate non numquam eius. ', 6, 555, 'min.jpg', 865, 0, 1, 0),
(12, 'teen', 'teenager jacket', 'AVC-321854', 'taque earum rerum facilis est eligendi optio, cumque nihil molestiae consequatur. Exercitationem ullam corporis suscipit laboriosam, nisi ut perspiciatis unde. Veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut enim ipsam. Excepturi sint, obcaecati cupiditate non numquam eius. ', 7, 787, 'min.jpg', 999, 1, 0, 1),
(13, 'kid', 'kid`s jacket', 'BBX-414982', 'Vel illum, qui in ea voluptate velit esse, quam nihil impedit. Laboriosam, nisi ut et voluptates repudiandae sint et dolore magnam aliquam quaerat. Quod maxime placeat, facere possimus, omnis dolor repellendus natus error. Ab illo inventore veritatis et molestiae. Enim ipsam voluptatem, quia non provident, similique sunt in. Ipsam voluptatem, quia consequuntur magni dolores et aut perferendis. Debitis aut reiciendis voluptatibus maiores alias consequatur aut rerum facilis.', 10, 3333, 'pechet.jpg', 5555, 0, 1, 1),
(14, 'kid', 'kid`s jacket', 'NNI-349872', 'Звездной величины, никак не об­наруживают. Низкой точностью галактик очень много, и нельзя решить, какой именно. Ожидать, являются объектами, входящими в силу закона. Туманностями и оптически яркие объекты, тогда гипотетические радиозвезды. Оптическое излучение будет все-таки слишком слабым останется. Радиоизлучения оптический объект нужно искать в на отождествление. Искать в радиоволнах, больше, чем у таких звезд. Их радиоизлучение которого достаточно сильное. Искать в окнах видимости между облаками пылевой материи после открытия дискретных.\n\nVel illum, qui in ea voluptate velit esse, quam nihil impedit. Laboriosam, nisi ut et voluptates repudiandae sint et dolore magnam aliquam quaerat. Quod maxime placeat, facere possimus, omnis dolor repellendus natus error. Ab illo inventore veritatis et molestiae. Enim ipsam voluptatem, quia non provident, similique sunt in. Ipsam voluptatem, quia consequuntur magni dolores et aut perferendis. Debitis aut reiciendis voluptatibus maiores alias consequatur aut rerum facilis.Vel illum, qui in ea voluptate velit esse, quam nihil impedit. Laboriosam, nisi ut et voluptates repudiandae sint et dolore magnam aliquam quaerat. Quod maxime placeat, facere possimus, omnis dolor repellendus natus error. Ab illo inventore veritatis et molestiae. Enim ipsam voluptatem, quia non provident, similique sunt in. Ipsam voluptatem, quia consequuntur magni dolores et aut perferendis. Debitis aut reiciendis voluptatibus maiores alias consequatur aut rerum facilis.', 10, 5656, 'pechet.jpg\n', 564, 1, 0, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `article_category`
--

CREATE TABLE `article_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `article_category`
--

INSERT INTO `article_category` (`id`, `name`, `sort_order`, `status`) VALUES
(1, 'Рубашки', 1, 1),
(2, 'Сумки', 2, 1),
(3, 'Футболки', 3, 1),
(4, 'Майки', 4, 1),
(5, 'Платья', 5, 1),
(6, 'Брюки', 6, 1),
(7, 'Пиджаки', 7, 1),
(10, 'Юбки', 8, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `user_name` char(30) NOT NULL,
  `user_phone` char(30) NOT NULL,
  `user_comment` text,
  `user_id` int(11) NOT NULL,
  `products` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `products`, `date`, `status`) VALUES
(1, 'nik', '8888888888', '', 6, '{\"1\":1,\"2\":2,\"3\":1,\"13\":2,\"12\":1}', '2018-01-20 19:05:53', 1),
(2, 'gig', '49845+959+8', 'rrrr', 0, '{\"13\":1,\"11\":1,\"9\":1}', '2018-01-20 19:05:53', 1),
(3, 'nik', '67857', '4444', 6, '{\"5\":1,\"6\":1}', '2018-01-20 19:06:17', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `role` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(3, 'eeeeeee', 'revers41ee4@mail.ru', 'eeeeee', NULL),
(4, 'eeeeeee', 'qqqrevers41ee4@mail.ru', 'eeeeee', NULL),
(5, 'eeeeeee', 'ffffffff@mail.ru', 'eeeeee', NULL),
(6, 'nik', 'revers414@mail.ru', 'urezav08', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `article_category`
--
ALTER TABLE `article_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
