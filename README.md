# Laravel File Manager

Este é um projeto básico usando Laravel 11, preparado para servir como base para novas aplicações com back-end robusto e funcionalidades de front-end integradas.

## Requisitos

- **PHP** 8.2 ou superior
- **Composer** para gerenciar dependências do PHP
- **Node.js** e **NPM** para dependências de front-end e desenvolvimento
- **Banco de Dados** compatível (MySQL, PostgreSQL, SQLite, etc.)

## Passo a Passo para Instalação

1. **Clone o Repositório**:
   ```bash
   git clone https://github.com/tiagofrancafernandes/Laravel-File-Manager.git
   cd Laravel-File-Manager
   ```

2. **Instale as Dependências do PHP**:
   ```bash
   composer install
   ```

3. **Instale as Dependências de Front-end**:
   ```bash
   npm install
   ```

4. **Configuração do arquivo .env** (`variáveis de ambiente`):
   - Duplique o arquivo `.env.example` e renomeie-o para `.env`:
     ```bash
     cp .env.example .env
     ```
   - Abra o arquivo `.env` e ajuste as variáveis de ambiente, especialmente as de banco de dados:
     ```plaintext
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=nome_do_banco
     DB_USERNAME=usuario
     DB_PASSWORD=senha
     ```
   - **Exemplo com SQLite**:
     Caso queira usar SQLite como banco de dados, basta configurar o `.env` da seguinte forma:
     ```plaintext
     DB_CONNECTION=sqlite
     DB_DATABASE=/absolute/path/to/database.sqlite
     ```
     Ou, crie o arquivo `database/database.sqlite` na raiz do projeto:
     ```bash
     touch database/database.sqlite
     ```

5. **Gere a chave da aplicação**:
   ```bash
   php artisan key:generate
   ```

## Execução das Migrations e Seeds

Para executar as migrations com um passo a passo e já inserir dados iniciais na base, execute o comando abaixo:

```bash
php artisan migrate --step --seed
```

O comando `--step` executa cada migration de forma incremental, facilitando o rastreamento de erros, enquanto o `--seed` insere dados de teste a partir dos seeders.

## Compilação dos Arquivos Front-End

Para compilar os assets do front-end, utilize os seguintes comandos:

- **Compilação de Produção**:
   ```bash
   npm run build
   ```
   Este comando compila e otimiza os arquivos de front-end para o ambiente de produção.

- **Ambiente de Desenvolvimento**:
   ```bash
   npm run dev
   ```
   Use este comando caso esteja fazendo alterações no front-end e queira compilar automaticamente cada modificação para ver as atualizações em tempo real.

## Servidor Local

Inicie o servidor local do Laravel com o comando:

```bash
php artisan serve
```

Isso iniciará a aplicação localmente em `http://localhost:8000`.

---

> Para testar, acesse [http://localhost:8000](http://localhost:8000)
