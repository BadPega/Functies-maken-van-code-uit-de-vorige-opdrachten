CREATE DATABASE `winkel`;

USE `winkel`;

CREATE TABLE `products` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `product_name` varchar(255) NOT NULL,
 `price_per_piece` decimal(10,2) NOT NULL,
 `description` text NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `product_name`, `price_per_piece`, `description`) VALUES
(1, 'Product 1', '10.00', 'Dit is product 1'),
(2, 'Product 2', '20.00', 'Dit is product 2');