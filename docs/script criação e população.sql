create database loja;
use loja;

CREATE TABLE `produtos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `marca` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `unidade_medida` decimal(8,2) NOT NULL,
  `preco_custo` decimal(10,2) NOT NULL,
  `preco_venda` decimal(10,2) NOT NULL,
  `qtd_disponivel` int(11) NOT NULL,
  `qtd_minima` int(11) NOT NULL,
  `fornecedor_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `fornecedors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cpf_cnpj` varchar(255) NOT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fornecedors_cpf_cnpj_unique` (`cpf_cnpj`),
  UNIQUE KEY `fornecedors_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `laravel`.`produtos`
(`id`,
`nome`,
`descricao`,
`marca`,
`categoria`,
`unidade_medida`,
`preco_custo`,
`preco_venda`,
`qtd_disponivel`,
`qtd_minima`,
`fornecedor_id`,
`created_at`,
`updated_at`)
VALUES
(<{id: }>,
<{nome: }>,
<{descricao: }>,
<{marca: }>,
<{categoria: }>,
<{unidade_medida: }>,
<{preco_custo: }>,
<{preco_venda: }>,
<{qtd_disponivel: }>,
<{qtd_minima: }>,
<{fornecedor_id: }>,
<{created_at: }>,
<{updated_at: }>);

INSERT INTO `laravel`.`fornecedors`
(`id`,
`nome`,
`cpf_cnpj`,
`telefone`,
`endereco`,
`email`,
`created_at`,
`updated_at`)
VALUES
(<{id: }>,
<{nome: }>,
<{cpf_cnpj: }>,
<{telefone: }>,
<{endereco: }>,
<{email: }>,
<{created_at: }>,
<{updated_at: }>);
