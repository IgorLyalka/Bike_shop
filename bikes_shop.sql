-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Трв 29 2023 р., 16:55
-- Версія сервера: 10.5.11-MariaDB
-- Версія PHP: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `bikeshop`
--
CREATE DATABASE IF NOT EXISTS `bikeshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `bikeshop`;

-- --------------------------------------------------------

--
-- Структура таблиці `bike`
--

CREATE TABLE `bike` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `bike`
--

INSERT INTO `bike` (`id`, `title`, `link`) VALUES
(1, 'MTB ENDURO', ''),
(2, 'MTB HARDTAIL', ''),
(3, 'ROAD BIKE', ''),
(4, 'Electro BIKE', '');

-- --------------------------------------------------------

--
-- Структура таблиці `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(500) NOT NULL,
  `title` varchar(500) NOT NULL,
  `link` varchar(255) NOT NULL,
  `botton` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `blogs`
--

INSERT INTO `blogs` (`id`, `img`, `title`, `link`, `botton`) VALUES
(1, 'blog-1.jpg', 'Travel with Two-Wheeled Adventures', 'https://www.youtube.com/watch?v=GxldQ9eX2wo&ab_channel=StephenSanchezVEVO', ''),
(2, 'blog-2.jpg', 'A Guide to Road-Tripping\n', 'https://www.youtube.com/watch?v=GxldQ9eX2wo&ab_channel=StephenSanchezVEVO', '');

-- --------------------------------------------------------

--
-- Структура таблиці `electro_bike`
--

CREATE TABLE `electro_bike` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `prisedays` varchar(255) NOT NULL,
  `prisemonths` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `enduro_bike`
--

CREATE TABLE `enduro_bike` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `pricedays` varchar(255) NOT NULL,
  `pricemonths` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `enduro_bike`
--

INSERT INTO `enduro_bike` (`id`, `img`, `title`, `pricedays`, `pricemonths`, `details`) VALUES
(1, 'cart-1.jpg', '2022 Norco Rangedd', '$30/days', '$450/mo', ''),
(2, 'cart-2.jpg', 'CANNONDALE HABIT', '$30/days', '$450/mo', ''),
(3, 'cart-3.jpg', 'Vitus Sommet 297', '$60/days', '$700/mo', ''),
(4, 'cart-4.jpg', 'Vitus Sommet 296', '$60/days', '$700/mo', '');

-- --------------------------------------------------------

--
-- Структура таблиці `footerbotom`
--

CREATE TABLE `footerbotom` (
  `id` int(10) UNSIGNED NOT NULL,
  `linkappstore` varchar(500) NOT NULL,
  `linkgoogleplay` varchar(500) NOT NULL,
  `linkTermsofService` varchar(500) NOT NULL,
  `linkPrivacyPolicy` varchar(500) NOT NULL,
  `linkDoNotSellMyPI` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `footerbotom`
--

INSERT INTO `footerbotom` (`id`, `linkappstore`, `linkgoogleplay`, `linkTermsofService`, `linkPrivacyPolicy`, `linkDoNotSellMyPI`) VALUES
(1, 'https://www.apple.com/ua/app-store/', '', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблиці `footerdown`
--

CREATE TABLE `footerdown` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `line1` varchar(255) NOT NULL,
  `link1` varchar(500) NOT NULL,
  `line2` varchar(255) NOT NULL,
  `link2` varchar(500) NOT NULL,
  `line3` varchar(255) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `footerdown`
--

INSERT INTO `footerdown` (`id`, `title`, `line1`, `link1`, `line2`, `link2`, `line3`, `link`) VALUES
(1, 'Products', 'Used', '', 'New', '', '', ''),
(2, 'Resources', 'Blog', '', 'FAQ', '', 'Contact us', ''),
(3, 'Work With BikeCore', 'Shops', '', 'Partners', '', '', ''),
(4, 'About', 'About us', '', 'Team', '', '', '');

-- --------------------------------------------------------

--
-- Структура таблиці `hardtail_bike`
--

CREATE TABLE `hardtail_bike` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `prisedays` varchar(255) NOT NULL,
  `prisemonths` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `hardtail_bike`
--

INSERT INTO `hardtail_bike` (`id`, `img`, `title`, `prisedays`, `prisemonths`, `details`) VALUES
(1, 'cart-1.jpg', 'Connandale', '50', '500000', '');

-- --------------------------------------------------------

--
-- Структура таблиці `headerimage`
--

CREATE TABLE `headerimage` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `headerimage`
--

INSERT INTO `headerimage` (`id`, `image`) VALUES
(1, 'slide_1.jpg'),
(2, 'slide_2.jpg'),
(3, 'slide_3.jpg'),
(4, 'slide_4.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `how_does_rw`
--

CREATE TABLE `how_does_rw` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text1` varchar(255) NOT NULL,
  `text2` varchar(255) NOT NULL,
  `text3` varchar(255) NOT NULL,
  `textend` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `how_does_rw`
--

INSERT INTO `how_does_rw` (`id`, `title`, `text1`, `text2`, `text3`, `textend`) VALUES
(1, 'How Does Rent Work?', 'Selection of a bicycle', 'Conclusion of a lease agreement', 'Enjoying riding', 'Lease contracts are a commitment and ending them early can be difficult and so it is important to consider your circumstances carefully before you decide.');

-- --------------------------------------------------------

--
-- Структура таблиці `important`
--

CREATE TABLE `important` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `sssss` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `important`
--

INSERT INTO `important` (`id`, `image`, `text`, `sssss`) VALUES
(1, 'imp-1.jpg', 'An opportunity to try different styles of skating', ''),
(2, 'imp-2.jpg', 'Opportunity to try different levels of bikes', ''),
(3, 'imp-3.jpg', 'Selection of a bike according to your height, weight, build, wishes', ''),
(4, 'imp-4.jpg', 'Full support of the manager during the rental', '');

-- --------------------------------------------------------

--
-- Структура таблиці `importanttitle`
--

CREATE TABLE `importanttitle` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `importanttitle`
--

INSERT INTO `importanttitle` (`id`, `title`, `text`) VALUES
(1, 'Advantages of renting', 'Depending on your circumstances and what is important to you, a lease could be a great option for your next bike.');

-- --------------------------------------------------------

--
-- Структура таблиці `meta`
--

CREATE TABLE `meta` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `meta`
--

INSERT INTO `meta` (`id`, `title`, `description`) VALUES
(1, 'Two-Wheelwd Adventures', 'Bike');

-- --------------------------------------------------------

--
-- Структура таблиці `navbar`
--

CREATE TABLE `navbar` (
  `id` int(10) UNSIGNED NOT NULL,
  `high_bikes_level` varchar(255) NOT NULL,
  `average_bikes_level` varchar(255) NOT NULL,
  `finance` varchar(255) NOT NULL,
  `contact_us` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `navbar`
--

INSERT INTO `navbar` (`id`, `high_bikes_level`, `average_bikes_level`, `finance`, `contact_us`, `logo`) VALUES
(1, 'HIGH BIKES LEVEL', 'AVERAGE BIKE LEVEL', 'FINANCE', 'CONTACT US', 'LOGO.svg');

-- --------------------------------------------------------

--
-- Структура таблиці `road_bike`
--

CREATE TABLE `road_bike` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `prisedays` varchar(255) NOT NULL,
  `prisemonths` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `show_more_bikes`
--

CREATE TABLE `show_more_bikes` (
  `id` int(10) UNSIGNED NOT NULL,
  `show_more_bike` varchar(255) NOT NULL,
  `show_more_blog` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `show_more_bikes`
--

INSERT INTO `show_more_bikes` (`id`, `show_more_bike`, `show_more_blog`) VALUES
(1, 'https://www.youtube.com/watch?v=GxldQ9eX2wo&ab_channel=StephenSanchezVEVO', 'https://www.youtube.com/watch?v=GxldQ9eX2wo&ab_channel=StephenSanchezVEVO');

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `login`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблиці `video`
--

CREATE TABLE `video` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `video` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `video`
--

INSERT INTO `video` (`id`, `title`, `text`, `video`) VALUES
(1, 'WELCOME TO TWadventure', 'Find out how easy it is to lease from TWadventure', 'https://www.youtube.com/embed/Jk7rliZpuSs');

-- --------------------------------------------------------

--
-- Структура таблиці `why_lease_in_tw`
--

CREATE TABLE `why_lease_in_tw` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `why_lease_in_tw`
--

INSERT INTO `why_lease_in_tw` (`id`, `image`, `title`, `text`) VALUES
(1, 'why-lease-2.svg', 'Discounted Pricing', 'View inventory from the comfort of home and get access to guaranteed savings on the bike of your choice.'),
(2, 'why-lease-3.svg', 'Lower Payments', 'Get a 10% discount when renting two bikes and 15% when renting three'),
(3, 'why-lease-4.svg', 'Easy Replace', 'Easy to replace the bike with another one, if the size, level, type did not fit.');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `bike`
--
ALTER TABLE `bike`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `blogs`
--
ALTER TABLE `blogs`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `electro_bike`
--
ALTER TABLE `electro_bike`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `enduro_bike`
--
ALTER TABLE `enduro_bike`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `footerbotom`
--
ALTER TABLE `footerbotom`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `footerdown`
--
ALTER TABLE `footerdown`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `hardtail_bike`
--
ALTER TABLE `hardtail_bike`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `headerimage`
--
ALTER TABLE `headerimage`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `how_does_rw`
--
ALTER TABLE `how_does_rw`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `important`
--
ALTER TABLE `important`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `importanttitle`
--
ALTER TABLE `importanttitle`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `meta`
--
ALTER TABLE `meta`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `navbar`
--
ALTER TABLE `navbar`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `road_bike`
--
ALTER TABLE `road_bike`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `show_more_bikes`
--
ALTER TABLE `show_more_bikes`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `video`
--
ALTER TABLE `video`
  ADD UNIQUE KEY `id` (`id`);

--
-- Індекси таблиці `why_lease_in_tw`
--
ALTER TABLE `why_lease_in_tw`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `bike`
--
ALTER TABLE `bike`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `electro_bike`
--
ALTER TABLE `electro_bike`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `enduro_bike`
--
ALTER TABLE `enduro_bike`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблиці `footerbotom`
--
ALTER TABLE `footerbotom`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `footerdown`
--
ALTER TABLE `footerdown`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `hardtail_bike`
--
ALTER TABLE `hardtail_bike`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `headerimage`
--
ALTER TABLE `headerimage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `how_does_rw`
--
ALTER TABLE `how_does_rw`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `important`
--
ALTER TABLE `important`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `importanttitle`
--
ALTER TABLE `importanttitle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `road_bike`
--
ALTER TABLE `road_bike`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблиці `show_more_bikes`
--
ALTER TABLE `show_more_bikes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблиці `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблиці `why_lease_in_tw`
--
ALTER TABLE `why_lease_in_tw`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- База даних: `users`
--
CREATE DATABASE IF NOT EXISTS `users` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `users`;

-- --------------------------------------------------------

--
-- Структура таблиці `clients`
--

CREATE TABLE `clients` (
  `ID` int(11) NOT NULL,
  `Login` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password1` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password2` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `E-mail` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `clients`
--
ALTER TABLE `clients`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
