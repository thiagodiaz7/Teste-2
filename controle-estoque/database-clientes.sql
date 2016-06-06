CREATE TABLE IF NOT EXISTS `clientes` (
  `id` varchar(3) CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `telefone` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `clientes` (`id`, `name`, `email`, `telefone`) VALUES
('CCC', 'Corpus Christi Catholic clientes', 'email@email.com', '+55 11 96538-5752'),
('HSE', 'Holy Spirit Episcopal clientes', 'email@email.com', '+55 11 96538-5752'),
('OLG', 'Our Lady of Guadalupe Catholic clientes', 'email@email.com', '+55 11 96538-5752'),
('PLS', 'Pilgrim Lutheran clientes', 'email@email.com', '+55 11 96538-5752'),
('SAG', 'Saint Augustine Catholic clientes', 'email@email.com', '+55 11 96538-5752'),
('SAN', 'Saint Anne Catholic clientes', 'email@email.com', '+55 11 96538-5752'),
('SCC', 'Saint Christopher Catholic clientes', 'email@email.com', '+55 11 96538-5752'),
('TWC', 'The Woodlands Christian Academy', 'email@email.com', '+55 11 96538-5752');