
DROP TABLE IF EXISTS `produto`;
CREATE TABLE `produto` (
                           `id` int(10) NOT NULL AUTO_INCREMENT,
                           `nome` varchar(100) NOT NULL,
                           `preco` double(10,0) NOT NULL,
  `peso` float(10,0) NOT NULL,
  `lote` int(10) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `url` varchar(300) DEFAULT NULL,
  `descricao` varchar(2000) NOT NULL,
  `data_fabricacao` date NOT NULL,
  `data_validade` date NOT NULL,
  `codigo_barra` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `produto_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO `produto` (`id`, `nome`, `preco`, `peso`, `lote`, `categoria`, `url`, `descricao`, `data_fabricacao`, `data_validade`, `codigo_barra`) VALUES (1,'test',321,323,23,'Mercearia em geral e enlatados','https://m.media-amazon.com/images/I/810Bx14dnoL._AC_UL320_.jpg','Mercearia em geral e enlatados','2021-11-10','2023-06-13','24123412341234'),(2,'test',32,24,532,'Bebidas','https://m.media-amazon.com/images/I/81-Yw7YyRBL._AC_UL320_.jpg','Bebidas','2021-11-12','2022-03-10','23412341234');

