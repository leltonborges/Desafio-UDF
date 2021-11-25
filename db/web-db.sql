DROP TABLE IF EXISTS `produto`;

CREATE TABLE `produto` (
                           `id` int(10) NOT NULL AUTO_INCREMENT,
                           `nome` varchar(100) NOT NULL,
                           `preco` double(10,0) NOT NULL,
  `peso` float(10,0) NOT NULL,
  `lote` int(10) NOT NULL,
  `categoria` int(10) NOT NULL,
  `url` varchar(300) DEFAULT NULL,
  `descricao` varchar(2000) NOT NULL,
  `data_fabricacao` date NOT NULL,
  `data_validade` date NOT NULL,
  `codigo_barra` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `produto_id_uindex` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `produto` (`id`, `nome`, `preco`, `peso`, `lote`, `categoria`, `url`, `descricao`, `data_fabricacao`, `data_validade`, `codigo_barra`)
VALUES
    (null,'Arroz Preto',4235,345,345,5,'https://m.media-amazon.com/images/I/81-Yw7YyRBL._AC_UL320_.jpg','O Arroz Parboilizado Camil passa por um processo que cozinha o grão dentro da sua própria casca, utilizando apenas água e calor, sem adição de produtos químicos. Assim, o grão absorve os nutrientes da casca do arroz, deixando-o mais nutritivo.','2021-11-05','2021-11-30',345345),
    (null,'Molho Tradicional',2,2,664,2,'https://images-na.ssl-images-amazon.com/images/I/71Aw85AxSGL._AC_UL160_SR160,160_.jpg','O molho de tomate heinz tradicional traz muito mais sabor e qualidade para as suas receitas.','2021-11-24','2021-11-11',345345),
    (null,'FEIJÃO CARIOCA KICALDO',23,4,54345,2,'https://images-na.ssl-images-amazon.com/images/I/815s35jNVkL._AC_UL160_SR160,160_.jpg','Com uma grande variedade de produtos, a Kicaldo preza sempre pela qualidade de cada um dos grãos para sempre oferecer saúde e bem-estar para as famílias brasileiras.','2020-12-28','2021-11-18',3636340),
    (null,'Leite Integral Piracanjuba',22,1,53,1,'https://images-na.ssl-images-amazon.com/images/I/8184YMgF4QL._AC_UL160_SR160,160_.jpg','Leite integral e estabilizantes trifosfato de sódio, citrato de sódio, monofosfato de sódio e difosfato de sódio. ALÉRGICOS: CONTÉM LEITE.CONTÉM LACTOSE.NÃO CONTÉM GLÚTEN.','2020-03-24','2021-11-01',35345),
    (null,'Feijão Preto Camill',25,3,35345,1,'https://images-na.ssl-images-amazon.com/images/I/51fSALNm7uL._AC_UL160_SR160,160_.jpg','Muito usado no dia a dia, o feijão preto conquistou seu lugar na mesa do brasileiro e habitualmente acompanha aquele delicioso arroz com sabor de família','2021-11-25','2022-01-24',43245300),
    (null,'Arroz',4235,345,345,5,'https://m.media-amazon.com/images/I/81-Yw7YyRBL._AC_UL320_.jpg','O Arroz Parboilizado Camil passa por um processo que cozinha o grão dentro da sua própria casca, utilizando apenas água e calor, sem adição de produtos químicos. Assim, o grão absorve os nutrientes da casca do arroz, deixando-o mais nutritivo.','2021-11-05','2021-11-30',345345),
    (null,'Molho Tradicional',2,2,664,2,'https://images-na.ssl-images-amazon.com/images/I/71Aw85AxSGL._AC_UL160_SR160,160_.jpg','O molho de tomate heinz tradicional traz muito mais sabor e qualidade para as suas receitas.','2021-11-24','2021-11-11',345345),
    (null,'FEIJÃO CARIOCA KICALDO',23,4,54345,2,'https://images-na.ssl-images-amazon.com/images/I/815s35jNVkL._AC_UL160_SR160,160_.jpg','Com uma grande variedade de produtos, a Kicaldo preza sempre pela qualidade de cada um dos grãos para sempre oferecer saúde e bem-estar para as famílias brasileiras.','2020-12-28','2021-11-18',3636340),
    (null,'Leite Integral Piracanjuba',22,1,53,1,'https://images-na.ssl-images-amazon.com/images/I/8184YMgF4QL._AC_UL160_SR160,160_.jpg','Leite integral e estabilizantes trifosfato de sódio, citrato de sódio, monofosfato de sódio e difosfato de sódio. ALÉRGICOS: CONTÉM LEITE.CONTÉM LACTOSE.NÃO CONTÉM GLÚTEN.','2020-03-24','2021-11-01',35345),
    (null,'Feijão Preto Camill',25,3,35345,1,'https://images-na.ssl-images-amazon.com/images/I/51fSALNm7uL._AC_UL160_SR160,160_.jpg','Muito usado no dia a dia, o feijão preto conquistou seu lugar na mesa do brasileiro e habitualmente acompanha aquele delicioso arroz com sabor de família','2021-11-25','2022-01-24',43245300);

