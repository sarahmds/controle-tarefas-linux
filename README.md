# Vida dos Bichos Linux

Projeto desenvolvido para a disciplina **Instalação e Configuração de Servidores** do IFRN.

---

## Objetivo

Demonstrar a implantação e configuração de uma aplicação web em ambiente Linux, utilizando servidor Apache2, banco de dados MySQL/MariaDB e linguagem PHP, com dois sites configurados (frontend e backend) e entidades relacionadas com operações CRUD completas.

---

## Tecnologias Utilizadas

- Sistema Operacional: Debian Linux
- Servidor Web: Apache2
- Linguagem de Programação: PHP
- Banco de Dados: MySQL/MariaDB
- Versionamento: Git e GitHub

---

## Arquitetura do Projeto

O projeto foi estruturado com:

- 1 Servidor Web (Debian + Apache2 + PHP)
- 1 Servidor de Banco de Dados (Debian + MariaDB)
- 1 Máquina Cliente para acesso via navegador

A comunicação entre o servidor Web e o Banco de Dados ocorre via rede interna, utilizando usuário específico da aplicação.

---

## Entidades do Sistema

- **Categorias**
- **Produtos**

### Relacionamento

Uma categoria pode possuir vários produtos (1:N).

- Cada produto pertence a uma única categoria.
- A relação é implementada através de chave estrangeira (FOREIGN KEY).

---

## Funcionalidades (CRUD)

### Categorias
- Cadastrar categoria
- Listar categorias
- Editar categoria
- Excluir categoria

### Produtos
- Cadastrar produto
- Listar produtos
- Editar produto
- Excluir produto

---

## Sites Configurados

### Frontend
`vidabichos.com.br`

Interface voltada ao usuário final.
Permite visualização das categorias e produtos cadastrados.

(Bônus) Utilização de framework CSS para melhoria visual.

---

### Backend
`vidabichos.backend.biz`

Área administrativa da aplicação.

Permite:
- Gerenciamento completo de categorias
- Gerenciamento completo de produtos

Protegido por autenticação via `.htaccess` no Apache2.

---

## Estrutura do Projeto

- **confs-apache2** → Arquivos de configuração dos VirtualHosts e logs de acesso.
- **confs-mysql** → Script SQL do banco, Diagrama ER e prints de conexão.
- **site-frontend** → Código do site público.
- **site-backend** → Código do painel administrativo.
- **apresentacoes** → Slides e vídeos demonstrativos.

---

## Execução do Projeto

1. Configurar os VirtualHosts no Apache2.
2. Criar o banco de dados utilizando o script SQL disponibilizado.
3. Criar usuário da aplicação no MariaDB.
4. Configurar credenciais no arquivo de conexão PHP.
5. Reiniciar serviços.
6. Acessar os domínios via navegador.

---

## Autor

Projeto acadêmico – IFRN  
Disciplina: Instalação e Configuração de Servidores  
Professor: Thiago Dutra

---

## Componentes

- Sarah Medeiros dos Santos  
- Gabriel Carrilho da Silva  
- João Pedro Nascimento da Silva
