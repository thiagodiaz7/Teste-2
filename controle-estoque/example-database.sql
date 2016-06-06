CREATE TABLE IF NOT EXISTS `produtos` (
  `id` varchar(3) CHARACTER SET utf8 NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `produtos` (`id`, `name`) VALUES
('CCC', 'Corpus Christi Catholic produtos'),
('HSE', 'Holy Spirit Episcopal produtos'),
('OLG', 'Our Lady of Guadalupe Catholic produtos'),
('PLS', 'Pilgrim Lutheran produtos'),
('SAG', 'Saint Augustine Catholic produtos'),
('SAN', 'Saint Anne Catholic produtos'),
('SCC', 'Saint Christopher Catholic produtos'),
('TWC', 'The Woodlands Christian Academy');