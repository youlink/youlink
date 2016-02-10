CREATE Database Kuhl;
use Kuhl;
CREATE TABLE products ( 
  `id_product` int(11) NOT NULL AUTO_INCREMENT, 
  `name` varchar(100) NOT NULL, 
  `description`varchar(500) NOT NULL,
  `category` varchar(25) NOT NULL, 
  `price` decimal(6,2) NOT NULL, 
  PRIMARY KEY (`id_product`) 
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ; 
  
INSERT INTO `products` (`id_product`, `name`, `description`,`category`, `price`) VALUES
(1, 'Product 1', 'man','!description here! ','15.00'), 
(2, 'Product 2', 'woman','!description here! ', '20.00'), 
(3, 'Product 3', 'kid','!description here! ', '50.00'), 
(4, 'Product 4', 'man','!description here! ', '55.00'), 
(5, 'Product 5', 'kid','!description here! ', '54.00'), 
(6, 'Product 6', 'woman','!description here! ', '34.00');