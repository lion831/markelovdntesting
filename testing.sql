-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 21 2021 г., 07:59
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testing`
--

-- --------------------------------------------------------

--
-- Структура таблицы `athletes`
--

CREATE TABLE `athletes` (
  `id` int NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `secondname` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `patronymic` varchar(45) NOT NULL DEFAULT 'НЕИЗВЕСТНО',
  `dateofbirth` date DEFAULT NULL,
  `gender` set('м','ж') DEFAULT NULL,
  `photo` varchar(256) DEFAULT NULL,
  `adress` varchar(500) DEFAULT NULL,
  `status` int DEFAULT '1',
  `firstcoaches_id` int DEFAULT NULL,
  `secondcoaches_id` int DEFAULT NULL,
  `thirdcoaches_id` int DEFAULT NULL,
  `realcoaches_id` int DEFAULT NULL,
  `class_id` int DEFAULT NULL,
  `studyplace_id` int DEFAULT NULL,
  `countries_id` int DEFAULT NULL,
  `district_id` int DEFAULT NULL,
  `region_id` int DEFAULT NULL,
  `passports_id` int DEFAULT NULL,
  `birthcertificate_id` int DEFAULT NULL,
  `snils_id` int DEFAULT NULL,
  `medicalpolicy_id` int DEFAULT NULL,
  `scorganization_id` int DEFAULT NULL,
  `ssorganization_id` int DEFAULT NULL,
  `users_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `athletes`
--

INSERT INTO `athletes` (`id`, `firstname`, `secondname`, `patronymic`, `dateofbirth`, `gender`, `photo`, `adress`, `status`, `firstcoaches_id`, `secondcoaches_id`, `thirdcoaches_id`, `realcoaches_id`, `class_id`, `studyplace_id`, `countries_id`, `district_id`, `region_id`, `passports_id`, `birthcertificate_id`, `snils_id`, `medicalpolicy_id`, `scorganization_id`, `ssorganization_id`, `users_id`, `created_at`, `updated_at`) VALUES
(2, 'Иван', 'Ивановasdasd', 'Иванович', '2001-01-20', 'м', NULL, NULL, 1, 1, 2, 2, 4, 1, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, '2021-10-18 04:57:17'),
(3, 'Петр', 'Петров', 'Павлович', '2002-02-20', 'ж', NULL, NULL, 1, 2, 1, 1, 5, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL),
(31, 'sdfsdfsdf', 'dfsdf', 'НЕИЗВЕСТНО', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 00:55:44', '2021-10-19 01:02:12'),
(32, '124124124', '123124', 'НЕИЗВЕСТНО', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 00:58:09', '2021-10-19 01:02:16'),
(33, 'sadfsdafasdf', 'sadfsadfasd', 'asdfasdfasdf', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 00:59:37', '2021-10-19 01:02:18'),
(34, 'sdfgsdfgsdf', 'sdfgsdfgdsfg', 'НЕИЗВЕСТНО', NULL, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 01:02:00', '2021-10-19 01:02:21'),
(35, 'Сидор', 'Сидоров', 'НЕИЗВЕСТНО', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 01:02:36', '2021-10-19 01:02:36'),
(36, 'Дмитрий', 'Маркелов', 'Николаевич', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 01:04:11', '2021-10-19 01:04:11'),
(37, 'Сидр', 'Сидоров', 'Сидорович', '1983-10-21', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-19 01:05:29', '2021-10-19 01:05:29'),
(38, 'Пипкин', 'Петр', 'НЕИЗВЕСТНО', NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `coaches`
--

CREATE TABLE `coaches` (
  `id` int NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `secondname` varchar(45) NOT NULL,
  `patronymic` varchar(45) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `passports_id` int DEFAULT NULL,
  `snils_id` int DEFAULT NULL,
  `scorganization_id` int DEFAULT NULL,
  `ssorganization_id` int DEFAULT NULL,
  `users_id` int DEFAULT NULL,
  `status` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `coaches`
--

INSERT INTO `coaches` (`id`, `firstname`, `secondname`, `patronymic`, `dateofbirth`, `passports_id`, `snils_id`, `scorganization_id`, `ssorganization_id`, `users_id`, `status`) VALUES
(4, 'Дмитрий', 'Маркелов', 'Николаевич', '1983-08-10', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Николай', 'Маркелов', 'Николаевич', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Сергей', 'Москвитин', 'Сергеевич', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Роман', 'Писарев', 'Александрович', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `athletes`
--
ALTER TABLE `athletes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_athletes_studyplace1_idx` (`studyplace_id`),
  ADD KEY `fk_athletes_countries1_idx` (`countries_id`),
  ADD KEY `fk_athletes_district1_idx` (`district_id`),
  ADD KEY `fk_athletes_region1_idx` (`region_id`),
  ADD KEY `fk_athletes_coachs1_idx` (`firstcoaches_id`),
  ADD KEY `fk_athletes_coachs2_idx` (`secondcoaches_id`),
  ADD KEY `fk_athletes_coachs3_idx` (`thirdcoaches_id`),
  ADD KEY `fk_athletes_coachs4_idx` (`realcoaches_id`),
  ADD KEY `fk_athletes_passports1_idx` (`passports_id`),
  ADD KEY `fk_athletes_birthcertificate1_idx` (`birthcertificate_id`),
  ADD KEY `fk_athletes_snils1_idx` (`snils_id`),
  ADD KEY `fk_athletes_medicalpolicy1_idx` (`medicalpolicy_id`),
  ADD KEY `fk_athletes_class1_idx` (`class_id`),
  ADD KEY `fk_athletes_organization1_idx` (`scorganization_id`),
  ADD KEY `fk_athletes_organization2_idx` (`ssorganization_id`),
  ADD KEY `fk_athletes_users1_idx` (`users_id`);

--
-- Индексы таблицы `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_coachs_passports1_idx` (`passports_id`),
  ADD KEY `fk_coachs_snils1_idx` (`snils_id`),
  ADD KEY `fk_coachs_organization1_idx` (`scorganization_id`),
  ADD KEY `fk_coachs_organization2_idx` (`ssorganization_id`),
  ADD KEY `fk_coachs_users1_idx` (`users_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `athletes`
--
ALTER TABLE `athletes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT для таблицы `coaches`
--
ALTER TABLE `coaches`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
