# ControleTarefas Linux

Aplicação web simples para controle de tarefas, desenvolvida como projeto da disciplina **Instalação e Configuração de Servidores** do IFRN.

## Objetivo
Demonstrar a configuração de um ambiente Linux com servidor web Apache2, banco de dados MySQL/MariaDB e uma aplicação PHP utilizando duas entidades relacionadas e operações CRUD.

## Tecnologias Utilizadas
- Sistema Operacional: Debian Linux
- Servidor Web: Apache2
- Linguagem: PHP
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

## Estrutura do Projeto
confs-apache2/
confs-mysql/
site-frontend/
site-backend/
apresentacoes/


## Sites Configurados
- Frontend: `controletarefas.com.br`
- Backend: `controletarefas.backend.biz`

## Execução do Projeto
1. Configurar o Apache2 com os dois virtual hosts.
2. Criar o banco de dados e as tabelas no MySQL/MariaDB.
3. Ajustar as credenciais de conexão no PHP.
4. Acessar o frontend e o backend pelo navegador.

## Autor
Projeto acadêmico – Técnico em Informática para Internet – IFRN
