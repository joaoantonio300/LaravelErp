# 🌟 Laravel App Dockerized

Um projeto Laravel pronto para desenvolvimento e deploy usando **Docker**.  
Ideal para aplicações web dinâmicas, APIs e backends de mobile apps.

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

## 💻 Executando Localmente

```bash
# Clonar o repositório e entrar na pasta do projeto
git clone https://github.com/seu-usuario/seu-repo.git && cd seu-repo

# Copiar o arquivo de exemplo .env
cp .env.example .env

# Subir apenas o container do banco (MySQL) ou todos os containers
docker-compose up -d

# Instalar as dependências do Laravel dentro do container app
docker-compose exec app composer install

# Gerar a chave da aplicação Laravel
 app php artisan key:generate

# Executar as migrations para criar o banco de dados
 app php artisan migrate

# Caso nao suba o container e queira rodar localmente
 php artisan serve
 
