CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_produto` varchar(3) CHARACTER SET utf8 NOT NULL,
  `id_cliente` varchar(50) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `pedidos` (`id_produto`, `id_cliente`) VALUES
('001', '4561321 clientes'),
('HSE', '43214214 clientes'),
('OLG', '21312 Catholic clientes'),
('PLS', '514315 clientes'),
('SAG', '132141 clientes'),
('SAN', '151626 clientes'),
('SCC', '1214141 clientes'),
('TWC', 'T1211431 Academy');