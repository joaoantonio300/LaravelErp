# 🌟 Laravel App Dockerized

---

## 🚀 Tecnologias Utilizadas
- PHP 8.2 + Apache
- Laravel 10
- MySQL 8
- Composer
- Docker & Docker Compose

---

## ⚡ Pré-requisitos
- Docker
- Docker Compose
- Git

---

## 💻 Executando com Docker

```bash
# Clonar o repositório e entrar na pasta do projeto
git clone https://github.com/joaoantonio300/LaravelErp.git && cd LaravelErp

# Copiar o arquivo de exemplo .env
cp .env.example .env

# Subir os containers
docker-compose up -d

# Instalar as dependências do Laravel
composer install

# Gerar a chave da aplicação Laravel
php artisan key:generate

# Executar as migrations para criar o banco de dados
php artisan migrate
