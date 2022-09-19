-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Set-2022 às 01:10
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `promocao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `comentario_id` bigint(20) UNSIGNED NOT NULL,
  `comentario_titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comentario_descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `promocao_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`comentario_id`, `comentario_titulo`, `comentario_descricao`, `usuario_id`, `promocao_id`, `created_at`, `updated_at`) VALUES
(1, 'Muito bom', 'Nota 2', 1, 1, '2022-09-20 01:41:34', '2022-09-20 01:41:34'),
(2, 'Muito ruim', 'Nota 10', 2, 2, '2022-09-20 01:42:01', '2022-09-20 01:42:01'),
(3, 'Mediano', 'Nota 5', 3, 3, '2022-09-20 01:42:30', '2022-09-20 01:42:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cupoms`
--

CREATE TABLE `cupoms` (
  `cupom_id` bigint(20) UNSIGNED NOT NULL,
  `cupom_titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cupom_aplicavel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cupom_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loja_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `cupoms`
--

INSERT INTO `cupoms` (`cupom_id`, `cupom_titulo`, `cupom_aplicavel`, `cupom_url`, `loja_id`, `created_at`, `updated_at`) VALUES
(1, 'CUPOM100', 'CUPOM100', 'https://www.amazon.com.br/Garota-Casa-ao-Lado/dp/6555980141/', 1, '2022-09-20 01:18:44', '2022-09-20 01:18:44'),
(2, 'Cupom no mercado livre', 'MERCADO100', 'https://www.mercadolivre.com.br/samsung-galaxy-a32-dual-sim-128-gb-branco-4-gb-ram/p/MLB17465174', 2, '2022-09-20 01:21:54', '2022-09-20 01:21:54'),
(3, 'Cupom bom', 'APP50', 'https://www.americanas.com.br/produto/5404043656', 3, '2022-09-20 01:22:47', '2022-09-20 01:22:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `denuncias`
--

CREATE TABLE `denuncias` (
  `denuncia_id` bigint(20) UNSIGNED NOT NULL,
  `denuncia_titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `denuncia_descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `denuncias`
--

INSERT INTO `denuncias` (`denuncia_id`, `denuncia_titulo`, `denuncia_descricao`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 'Golpe', 'Golpe no Mercado Livre, vendedor sacana.', 3, '2022-09-20 01:09:08', '2022-09-20 01:09:08'),
(2, 'Fui tapeado', 'Perdi R$100.000,00', 3, '2022-09-20 01:09:52', '2022-09-20 01:09:52'),
(3, 'Não aceitou devolução dentro do prazo legal', 'Tentei pedir devolução dentro de uma semana e me foi negado', 3, '2022-09-20 01:10:46', '2022-09-20 01:10:46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lojas`
--

CREATE TABLE `lojas` (
  `loja_id` bigint(20) UNSIGNED NOT NULL,
  `loja_nomeFantasia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loja_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `lojas`
--

INSERT INTO `lojas` (`loja_id`, `loja_nomeFantasia`, `loja_url`, `created_at`, `updated_at`) VALUES
(1, 'Amazon', 'https://www.amazon.com.br/', '2022-09-20 01:13:26', '2022-09-20 01:13:26'),
(2, 'Mercado Livre', 'https://www.mercadolivre.com.br/', '2022-09-20 01:14:04', '2022-09-20 01:14:04'),
(3, 'Americanas', 'https://www.americanas.com.br/', '2022-09-20 01:15:02', '2022-09-20 01:15:02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_13_001720_create_tipo_usuarios_table', 1),
(6, '2022_09_13_002222_create_usuarios_table', 2),
(7, '2022_09_13_002536_create_denuncias_table', 3),
(8, '2022_09_13_002733_create_comentarios_table', 4),
(9, '2022_09_13_002929_create_promocaos_table', 5),
(10, '2022_09_13_003203_create_lojas_table', 6),
(11, '2022_09_13_003314_create_cupoms_table', 7),
(12, '2022_09_13_003436_create_promocao_cupoms_table', 8),
(13, '2022_09_19_215807_adicao_de_novo_campo', 9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocaos`
--

CREATE TABLE `promocaos` (
  `promocao_id` bigint(20) UNSIGNED NOT NULL,
  `promocao_titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promocao_descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promocao_preco` double(8,2) NOT NULL,
  `promocao_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cupom_id` int(11) DEFAULT NULL,
  `loja_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `promocaos`
--

INSERT INTO `promocaos` (`promocao_id`, `promocao_titulo`, `promocao_descricao`, `promocao_preco`, `promocao_url`, `cupom_id`, `loja_id`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 'Melhor preço dos últimos meses', 'Promoção boa para quem procura o melhor custo-benefício', 1499.00, 'https://www.mercadolivre.com.br/samsung-galaxy-a32-dual-sim-128-gb-branco-4-gb-ram/p/MLB17465174', NULL, 2, 1, '2022-09-20 01:33:22', '2022-09-20 01:33:22'),
(2, 'Apenas para membros prime', 'Promoção boa para quem procura o melhor custo-benefício', 40.00, 'https://www.amazon.com.br/Garota-Casa-ao-Lado/dp/6555980141/', NULL, 1, 2, '2022-09-20 01:36:35', '2022-09-20 01:36:35'),
(3, 'Spirit of the North', 'Jogo grátis da semana', 0.00, 'https://store.epicgames.com/pt-BR/p/spirit-of-the-north-f58a66', NULL, 3, 3, '2022-09-20 01:38:45', '2022-09-20 01:38:45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocao_cupoms`
--

CREATE TABLE `promocao_cupoms` (
  `promocao_id` int(11) NOT NULL,
  `cupom_id` int(11) NOT NULL,
  `promocaoCupom_desconto` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `promocao_cupoms`
--

INSERT INTO `promocao_cupoms` (`promocao_id`, `cupom_id`, `promocaoCupom_desconto`, `created_at`, `updated_at`) VALUES
(1, 1, 50.00, '2022-09-20 01:44:26', '2022-09-20 01:44:26'),
(2, 2, 500.00, '2022-09-20 01:44:45', '2022-09-20 01:44:45'),
(3, 3, 100.00, '2022-09-20 01:45:00', '2022-09-20 01:45:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `tipo_id` bigint(20) UNSIGNED NOT NULL,
  `tipo_descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`tipo_id`, `tipo_descricao`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', '2022-09-20 00:48:15', '2022-09-20 00:48:15'),
(2, 'Convidado', '2022-09-20 00:50:18', '2022-09-20 00:50:18'),
(3, 'Logado', '2022-09-20 00:50:41', '2022-09-20 00:50:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_id` bigint(20) UNSIGNED NOT NULL,
  `usuario_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_senha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usuario_nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usuario_id`, `usuario_email`, `usuario_senha`, `tipo_id`, `created_at`, `updated_at`, `usuario_nome`) VALUES
(1, '182744@upf.br', '123', 1, '2022-09-20 01:04:21', '2022-09-20 01:04:21', 'Otávio Monteiro Rossoni'),
(2, '186218@upf.br', '123', 1, '2022-09-20 01:05:53', '2022-09-20 01:05:53', 'Samuel Roberto do Amarante de Andrade'),
(3, 'admin@admin', 'admin', 1, '2022-09-20 01:06:39', '2022-09-20 01:06:39', 'Administrador');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`comentario_id`);

--
-- Índices para tabela `cupoms`
--
ALTER TABLE `cupoms`
  ADD PRIMARY KEY (`cupom_id`);

--
-- Índices para tabela `denuncias`
--
ALTER TABLE `denuncias`
  ADD PRIMARY KEY (`denuncia_id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `lojas`
--
ALTER TABLE `lojas`
  ADD PRIMARY KEY (`loja_id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `promocaos`
--
ALTER TABLE `promocaos`
  ADD PRIMARY KEY (`promocao_id`);

--
-- Índices para tabela `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`tipo_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `comentario_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `cupoms`
--
ALTER TABLE `cupoms`
  MODIFY `cupom_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `denuncias`
--
ALTER TABLE `denuncias`
  MODIFY `denuncia_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `lojas`
--
ALTER TABLE `lojas`
  MODIFY `loja_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `promocaos`
--
ALTER TABLE `promocaos`
  MODIFY `promocao_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  MODIFY `tipo_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuario_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
