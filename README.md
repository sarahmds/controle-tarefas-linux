# ControleTarefas Linux

Projeto desenvolvido para a disciplina **Instalação e Configuração de Servidores** do IFRN.

## Objetivo
Demonstrar a implantação e configuração de uma aplicação web em ambiente Linux, utilizando servidor Apache2, banco de dados MySQL/MariaDB e linguagem PHP, com dois sites configurados (frontend e backend) e entidades relacionadas com operações CRUD.

## Tecnologias Utilizadas
- Sistema Operacional: Debian Linux
- Servidor Web: Apache2
- Linguagem de Programação: PHP
- Banco de Dados: MySQL/MariaDB
- Versionamento: Git e GitHub

## Entidades do Sistema
- **Usuário**
- **Tarefa**

### Relacionamento
- Um usuário pode possuir várias tarefas (1:N).

## Funcionalidades (CRUD)

### Usuário
- Cadastrar usuário
- Listar usuários
- Editar usuário
- Excluir usuário

### Tarefa
- Cadastrar tarefa
- Listar tarefas
- Editar tarefa
- Excluir tarefa

## Sites Configurados
- **Frontend:** `controletarefas.com.br`  
  Interface voltada ao usuário final.
- **Backend:** `controletarefas.backend.biz`  
  Área administrativa da aplicação, protegida por autenticação via `.htaccess`.

## Estrutura do Projeto
- confs-apache2/
- confs-mysql/
- site-frontend/
- site-backend/
- apresentacoes/

## Execução do Projeto
1. Configurar o Apache2 com os dois Virtual Hosts.
2. Criar o banco de dados e as tabelas utilizando o script SQL fornecido.
3. Configurar as credenciais de acesso ao banco de dados no PHP.
4. Acessar o frontend e o backend por meio do navegador web.

## Autor
Projeto acadêmico – IFRN  
Disciplina: Instalação e Configuração de Servidores  
Professor: Thiago Dutra

## Componentes
- Sarah Medeiros dos Santos
- Gabriel Carrilho da Silva
- João Pedro Nascimento da Silva
