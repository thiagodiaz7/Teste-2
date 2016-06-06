CREATE TABLE IF NOT EXISTS `produtos` (
  `id` varchar(3) CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `descricao` varchar(50) CHARACTER SET utf8 NOT NULL,
  `preco` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `produtos` (`id`, `name`, `descricao`, `preco`) VALUES
('CCC', 'Corpus Christi Catholic produtos', 'Descrição Produto', '19,90'),
('HSE', 'Holy Spirit Episcopal produtos', 'Descrição Produto', '19,90'),
('OLG', 'Our Lady of Guadalupe Catholic produtos', 'Descrição Produto', '19,90'),
('PLS', 'Pilgrim Lutheran produtos', 'Descrição Produto', '19,90'),
('SAG', 'Saint Augustine Catholic produtos'., 'Descrição Produto', '19,90'),
('SAN', 'Saint Anne Catholic produtos', 'Descrição Produto', '19,90'),
('SCC', 'Saint Christopher Catholic produtos', 'Descrição Produto', '19,90'),
('TWC', 'The Woodlands Christian Academy', 'Descrição Produto', '19,90');