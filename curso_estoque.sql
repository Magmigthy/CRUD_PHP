-- Banco de dados: `curso_estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(1, 'Games'),
(2, 'Software'),
(3, 'Hardware'),
(4, 'Perifericos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id_estoque` int(11) NOT NULL,
  `nroproduto` int(11) NOT NULL,
  `nomeproduto` varchar(200) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `fornecedor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`id_estoque`, `nroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES
(1, 2, 'teclado chronus', 'PerifÃ©ricos', 10, 'Fornecedor C'),
(5, 4, 'Monitor Gamer AOX', 'PerifÃ©ricos', 12, 'Fornecedor A'),
(7, 35, 'Teclado mecanico', 'Perifericos', 2, 'ABC Transportes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id_forn` int(11) NOT NULL,
  `nome_forn` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id_forn`, `nome_forn`) VALUES
(1, ''),
(2, 'Transportes SÃ£o Bento'),
(3, 'Transportadora Nova Luz'),
(4, 'ABC Transportes');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(2) NOT NULL,
  `nome_usuario` varchar(200) NOT NULL,
  `email_usuario` varchar(250) NOT NULL,
  `senha_usuario` varchar(50) NOT NULL,
  `nivel_usuario` int(2) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome_usuario`, `email_usuario`, `senha_usuario`, `nivel_usuario`, `status`) VALUES
(13, 'admin', 'admin@admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'Ativo'),
(14, 'user1', 'user1@user.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3, 'Ativo'),
(15, 'user2', 'user2@user.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 3, 'Ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id_estoque`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id_forn`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id_estoque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id_forn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
