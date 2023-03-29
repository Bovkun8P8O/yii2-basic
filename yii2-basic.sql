-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Бер 29 2023 р., 13:25
-- Версія сервера: 8.0.30
-- Версія PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `yii2-basic`
--

-- --------------------------------------------------------

--
-- Структура таблиці `brand`
--

CREATE TABLE `brand` (
  `id` int NOT NULL COMMENT 'унікальний ключ',
  `name` tinytext NOT NULL COMMENT 'назва бренда',
  `lastModified` date DEFAULT NULL COMMENT 'дата останньої видозміни',
  `createdAt` date DEFAULT NULL COMMENT 'дата створення'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `brand`
--

INSERT INTO `brand` (`id`, `name`, `lastModified`, `createdAt`) VALUES
(1, 'Samsung', NULL, NULL),
(2, 'Huawei', NULL, NULL),
(3, 'Nokia', NULL, NULL),
(4, 'LG', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `country`
--

CREATE TABLE `country` (
  `code` char(2) NOT NULL,
  `name` char(52) NOT NULL,
  `population` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Дамп даних таблиці `country`
--

INSERT INTO `country` (`code`, `name`, `population`) VALUES
('BR', 'Brazil', 205722000),
('CA', 'Canada', 35985751),
('CN', 'China', 1375210000),
('DE', 'Germany', 81459000),
('FR', 'France', 64513242),
('GB', 'United Kingdom', 65097000),
('IN', 'India', 1285400000),
('RU', 'Russia', 146519759),
('UA', 'Ukraine', 41000000),
('US', 'United States', 322976000);

-- --------------------------------------------------------

--
-- Структура таблиці `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL COMMENT 'унікальний ключ',
  `artnumber` int DEFAULT NULL COMMENT 'артикул товара',
  `name` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'назва товара',
  `price` double NOT NULL COMMENT 'ціна товара',
  `amount` int DEFAULT NULL COMMENT 'наявність товара',
  `oldPrice` double DEFAULT NULL COMMENT 'стара ціна',
  `brand` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci COMMENT 'бренд товара',
  `lastModified` date DEFAULT NULL COMMENT 'дата останньої видозміни',
  `createdAt` date DEFAULT NULL COMMENT 'дата створення'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `product`
--

INSERT INTO `product` (`id`, `artnumber`, `name`, `price`, `amount`, `oldPrice`, `brand`, `lastModified`, `createdAt`) VALUES
(1, 1231, 'Product name 1', 12.5, 20, 15, 'Brand 1', NULL, NULL),
(2, 1232, 'Product name 2', 0, 2, 0, 'Brand 3', NULL, NULL),
(11, 1233, 'Product name 3', 122.12, 6, NULL, 'Brand 1', NULL, NULL),
(12, 1234, 'Product name 4', 1.55, NULL, 2, 'Brand 5', NULL, NULL),
(21, 1235, NULL, 5, 1, 6, 'Brand 6', NULL, NULL),
(22, 1236, 'Product name 6', 128.2, 0, 0, 'Brand 2', NULL, NULL),
(23, 1237, 'Product name 7', 50.5, 5, 60, 'Brand 2', NULL, NULL),
(24, 1238, 'Product name 8', 30, 5, NULL, 'Brand 8', NULL, NULL),
(25, 1239, 'Product name 9', 0, 5, NULL, 'Brand 12', NULL, NULL),
(26, 1240, 'Product name 10', 13, 8, 15, 'Brand 3', NULL, NULL),
(27, 1241, 'Product name 11', 7.5, -1, 10, 'Brand 2', NULL, NULL),
(28, 1242, 'Product name 12', 55.41, 80, NULL, 'Brand 1', NULL, NULL),
(29, 1231, 'Product name 1', 13.5, 20, NULL, 'Brand 1', NULL, NULL),
(30, 1244, 'Product name 14', 40.5, 20, NULL, 'Brand 2', NULL, NULL),
(35, 1245, 'Product name 15', 70, 0, 80, 'Brand 4', NULL, NULL),
(36, 1246, 'Product name 16', 7.5, 10, 0, 'Brand 2', NULL, NULL),
(37, 1247, 'Product name 17', 8, 10, 10, '', NULL, NULL),
(38, 1248, 'Product name 18', 9, 10, 9, 'Brand 3', NULL, NULL),
(39, -1, 'Product name 20', 5.01, 12, 6, 'Brand 2', NULL, NULL),
(40, 1251, 'Product name 21', 20, 5, NULL, '', NULL, NULL),
(41, 1252, 'Product name 22', 40, 90, 50, 'Brand 2', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `tasks`
--

CREATE TABLE `tasks` (
  `id` int NOT NULL,
  `name` tinytext,
  `counter` tinyint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп даних таблиці `tasks`
--

INSERT INTO `tasks` (`id`, `name`, `counter`) VALUES
(1, 'Получение письма\r\n', 1),
(2, 'Отправка письма', 56),
(3, 'Получение посылки', 5),
(4, 'Отправка посылки', 15);

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`code`);

--
-- Індекси таблиці `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'унікальний ключ', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT COMMENT 'унікальний ключ', AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблиці `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
