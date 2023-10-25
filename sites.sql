-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Out-2023 às 19:05
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sites`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sitespopulares`
--

CREATE TABLE `sitespopulares` (
  `SiteID` int(11) NOT NULL,
  `NomeSite` varchar(255) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `CustoUtilizacao` decimal(10,2) DEFAULT NULL,
  `Requisitos` varchar(255) DEFAULT NULL,
  `Salario` decimal(10,2) DEFAULT NULL,
  `TipoTrabalho` varchar(255) DEFAULT NULL,
  `Caracteristicas` text DEFAULT NULL,
  `Vantagens` text DEFAULT NULL,
  `Desvantagens` text DEFAULT NULL,
  `logo` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `sitespopulares`
--

INSERT INTO `sitespopulares` (`SiteID`, `NomeSite`, `URL`, `CustoUtilizacao`, `Requisitos`, `Salario`, `TipoTrabalho`, `Caracteristicas`, `Vantagens`, `Desvantagens`, `logo`) VALUES
(1, 'LinkedIn', 'https://www.linkedin.com', 92.50, 'Linkedin é gratuito mas tem os seguintes planos\r\n\r\nLinkedin Premium Career: $ 29,99/mês\r\nLinkedin Premium Business: $ 59,99/mês\r\nLinkedin Sales Navigator: $ 99,99/mês\r\nLinkedin Recruiter Lite: $ 180/mês', 7550.00, '40h a 41h semanais', 'Analista de Segurança Jr\n\nUm analista JR, ainda está em fase de aprendizado e irá se preocupar geralmente com os seguintes itens:\n- Apoio à equipe de SegInfo na aplicação e elaboração de políticas de Segurança.\n- Análise básica de Servidores e aplicação de correções.\n- Hardening Básico - Administração e Aplicação de patches de Segurança.\n\nGerente de projetos de TI\n\nUm gerente de projetos TI deve ter:\n\ncapacidade de gerenciamento de prazos e pessoas;\norganização e disciplina;\nfacilidade para delegar funções sem realizar microgestão;\nter habilidade de liderança para direcionar a equipe para o melhor caminho, motivando-a e gerando alto rendimento;', 'Muitas oportunidades de networking', 'Competição acirrada', 'linkedin.png'),
(2, 'Indeed', 'https://www.indeed.com', 0.00, 'Nenhum', 7376.00, '40h a 41h semanais', 'Analista de Segurança Júnior:\n\nO analista júnior, ainda em fase de aprendizado, desempenha um papel que envolve:\n\n- Apoio à equipe de Segurança da Informação na criação e implementação de políticas de segurança.\n- Realização de análises básicas de servidores e aplicação de correções quando necessário.\n- Execução de ações de endurecimento básico, incluindo administração e aplicação de patches de segurança.\n\nGerente de Projetos de Tecnologia da Informação:\n\nUm gerente de projetos de TI deve demonstrar as seguintes habilidades e competências:\n\n- Habilidade para gerenciar prazos e equipes de trabalho.\n- Forte organização e disciplina na condução de projetos.\n- Capacidade de delegar tarefas sem realizar microgerenciamento.\n- Competência em liderança, direcionando a equipe para alcançar os melhores resultados, motivando-a e promovendo um alto desempenho.', 'Ampla variedade de vagas', 'Alguns anúncios de emprego podem ser spam', 'indeed.png'),
(3, 'Glassdoor', 'https://www.glassdoor.com', 0.00, 'Nenhum', 6789.00, '40h a 41h semanais', 'Analista de Segurança Júnior:\nO analista júnior, ainda em processo de aprendizado, concentra-se em atividades como:\n\n- Contribuir para a equipe de Segurança da Informação na elaboração e aplicação de políticas de segurança.\n- Realizar análises básicas de servidores e implementar correções quando necessário.\n- Aplicar medidas básicas de fortalecimento da segurança, incluindo administração e aplicação de atualizações de segurança.\n\nGerente de Projetos de Tecnologia da Informação:\nUm gerente de projetos de TI deve apresentar as seguintes habilidades e competências:\n\n- Capacidade para gerenciar prazos e equipes de forma eficaz.\n- Forte senso de organização e disciplina na gestão de projetos.\n- Habilidade para delegar responsabilidades sem realizar um controle excessivo.\n- Competência em liderança, orientando a equipe na busca dos melhores resultados, motivando-a e promovendo um alto desempenho.', 'Informações detalhadas sobre salários', 'Nem todas as empresas têm avaliações', 'glassdoor.png'),
(4, 'Monster Jobs', 'https://www.monster.com', 230.00, 'Nenhum', 9590.00, '40h a 41h semanais', 'Analista de Segurança Júnior:\nO analista júnior, ainda em fase de aprendizado, tem como suas principais atribuições:\n\n- Auxiliar a equipe de Segurança da Informação na formulação e implementação de políticas de segurança.\n- Realizar análises básicas de servidores e aplicar correções quando necessário.\n- Realizar ações de fortalecimento básico, incluindo a administração e aplicação de atualizações de segurança.\n\nGerente de Projetos de Tecnologia da Informação:\nUm gerente de projetos de TI deve demonstrar as seguintes competências e habilidades:\n\n- Capacidade de gerenciar prazos e equipes de trabalho de forma eficaz.\n- Demonstração de organização e disciplina ao conduzir projetos.\n- Habilidade para delegar tarefas sem realizar microgerenciamento.\n- Competência em liderança, orientando a equipe na busca dos melhores resultados, motivando-a e impulsionando o alto desempenho.', 'Ferramentas de busca avançadas', 'Anúncios de emprego repetitivos', 'monster.png'),
(5, 'CareerBuilder', 'https://www.careerbuilder.com', 200.00, 'Nenhum', 7439.00, '40h a 41h semanais', 'Analista de Segurança Júnior:\nO analista júnior, ainda em fase de aprendizado, concentra-se em:\n\n- Apoiar a equipe de Segurança da Informação na elaboração e aplicação de políticas de segurança.\n- Realizar análises básicas de servidores e implementar correções quando necessário.\n- Realizar ações de fortalecimento básico, incluindo a administração e aplicação de atualizações de segurança.\n\nGerente de Projetos de Tecnologia da Informação:**\nUm gerente de projetos de TI deve demonstrar as seguintes competências e habilidades:\n\n- Capacidade de gerenciar prazos e equipes com eficiência.\n- Forte senso de organização e disciplina na gestão de projetos.\n- Habilidade para delegar tarefas sem realizar microgestão.\n- Competência em liderança, orientando a equipe para alcançar os melhores resultados, motivando-a e promovendo alto desempenho.', 'Recursos de pesquisa avançados', 'Mensagens de recrutadores não solicitadas', 'carreerbuilder.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `sitespopulares`
--
ALTER TABLE `sitespopulares`
  ADD PRIMARY KEY (`SiteID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `sitespopulares`
--
ALTER TABLE `sitespopulares`
  MODIFY `SiteID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
